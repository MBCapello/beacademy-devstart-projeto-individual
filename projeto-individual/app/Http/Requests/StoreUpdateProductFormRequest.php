<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $rules = [
            'name' => 'required|max:50|min:3',
            'type' => 'required',
            'sex' => 'required',
            'birth_date' => 'required|min:8',
            'image' => 'file|mimes:jpeg,bmp,png',
            'bio' => 'required|max:255|min:10'
        ];


        if ($this->method('PUT')) {
            $rules['name'] = [
                'required',
                'max:50',
                'min:3'
            ];
            $rules['birth_date'] = [
                'min:8'
            ];
            $rules['bio'] = [
                'required',
                'max:255',
                'min:3'
            ];
        }

        if ($this->method('POST')) {
            $rules['name'] = [
                'required',
                'max:50',
                'min:3'
            ];
            $rules['birth_date'] = [
                'min:8'
            ];
            $rules['bio'] = [
                'required',
                'max:255',
                'min:3'
            ];
        }

        return $rules;
    }
}
