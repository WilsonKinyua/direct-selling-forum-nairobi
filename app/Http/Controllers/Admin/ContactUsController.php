<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContactUsRequest;
use App\Models\ContactUs;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactUsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_us_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactUss = ContactUs::all();

        return view('admin.contactUss.index', compact('contactUss'));
    }

    public function show($id)
    {
        abort_if(Gate::denies('contact_us_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactUs = ContactUs::find($id);
        abort_if(!$contactUs, Response::HTTP_NOT_FOUND, '404 Not Found');

        return view('admin.contactUss.show', compact('contactUs'));
    }

    public function destroy(ContactUs $contactUs)
    {
        abort_if(Gate::denies('contact_us_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactUs->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactUsRequest $request)
    {
        ContactUs::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
