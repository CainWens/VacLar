<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name'=>'required|max:20',
            'password'=>'required|confirmed',
            'phone'=>'required|min:17'
        ];
    }

    public function messages()
    {
        return [
          'name.required'=>'Поле "Имя" обязательно для заполнения',
          'name.max'=>'Имя не более 20 символов',
          'password.required'=>'Поле "Пароль" обязательно для заполнения',
          'password.confirmed'=>'Пароли не совпадают',
          'phone.required'=>'Поле "Телефон" обязательно для заполнения',
          'phone.min'=>'Номер телефона заполнен неверно'
        ];
    }
}
