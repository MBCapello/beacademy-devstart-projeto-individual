<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'min:13|max:15|nullable',
            'birth_date' => 'required|min:8',
            'cpf' => 'string|min:11',
        ];

        return $rules;
    }
}
