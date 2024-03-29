<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySpeakerRequest;
use App\Http\Requests\StoreSpeakerRequest;
use App\Http\Requests\UpdateSpeakerRequest;
use App\Models\Speaker;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SpeakersController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('speaker_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speakers = Speaker::with(['media'])->get();

        return view('admin.speakers.index', compact('speakers'));
    }

    public function create()
    {
        abort_if(Gate::denies('speaker_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speakers.create');
    }

    public function store(StoreSpeakerRequest $request)
    {
        $speaker = Speaker::create($request->all());

        if ($request->input('avatar', false)) {
            $speaker->addMedia(storage_path('tmp/uploads/' . basename($request->input('avatar'))))->toMediaCollection('avatar');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $speaker->id]);
        }

        return redirect()->route('admin.speakers.index');
    }

    public function edit(Speaker $speaker)
    {
        abort_if(Gate::denies('speaker_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speakers.edit', compact('speaker'));
    }

    public function update(UpdateSpeakerRequest $request, Speaker $speaker)
    {
        $speaker->update($request->all());

        if ($request->input('avatar', false)) {
            if (!$speaker->avatar || $request->input('avatar') !== $speaker->avatar->file_name) {
                if ($speaker->avatar) {
                    $speaker->avatar->delete();
                }
                $speaker->addMedia(storage_path('tmp/uploads/' . basename($request->input('avatar'))))->toMediaCollection('avatar');
            }
        } elseif ($speaker->avatar) {
            $speaker->avatar->delete();
        }

        return redirect()->route('admin.speakers.index');
    }

    public function show(Speaker $speaker)
    {
        abort_if(Gate::denies('speaker_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speakers.show', compact('speaker'));
    }

    public function destroy(Speaker $speaker)
    {
        abort_if(Gate::denies('speaker_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speaker->delete();

        return back();
    }

    public function massDestroy(MassDestroySpeakerRequest $request)
    {
        Speaker::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('speaker_create') && Gate::denies('speaker_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Speaker();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
