<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'address'=> 'required|string',
            'phone'=> 'required|string',
            'email'=> 'required|email',
            'facebook'=> 'required|url',
            'twitter'=> 'required|url',
            'linkedin'=> 'required|url',
            'instagram'=> 'required|url',
            'youtube'=> 'required|url',
        ];
    }
      public function attributes(): array
        {
            return [
                'address'=> __('keywords.address'),
                'phone'=> __('keywords.phone'),
                'email'=> __('keywords.email'),
                'facebook'=> __('keywords.facebook'),
                'twitter'=> __('keywords.twitter'),
                'linkedin'=> __('keywords.linkedin'),
                'instagram'=> __('keywords.instagram'),
                'youtube'=> __('keywords.youtube'),

            ];
        }
}
