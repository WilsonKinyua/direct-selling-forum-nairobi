<?php

namespace App\Http\Requests;

use App\Models\Speaker;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSpeakerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('speaker_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'organization' => [
                'string',
                'nullable',
            ],
            'avatar' => [
                'required',
            ],
            'facebook' => [
                'string',
                'nullable',
            ],
            'twitter' => [
                'string',
                'nullable',
            ],
            'instagram' => [
                'string',
                'nullable',
            ],
            'youtube' => [
                'string',
                'nullable',
            ],
            'linkedin' => [
                'string',
                'nullable',
            ],
            'website' => [
                'string',
                'nullable',
            ],
            'bio' => [
                'required',
            ],
        ];
    }
}
