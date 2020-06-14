<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        $id = Auth::id();
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'birthday' => ['required','date', 'date_format:Y-m-d', 'before:'.date("Y-m-d")], //date, date_format:format
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
        ];
    }

    public function messages(){
        
        return [
            'name.required' => 'Поле Имя не должно быть пустым',
            'surname.required' => 'Поле Фамилия не должно быть пустым',
            'birthday.required' => 'Поле Дата рождения не должно быть пустым',
            'birthday.date' => 'Формат даты рождения должно быть: дд.мм.гггг',
            'birthday.before' => 'Дата рождения должна быть ранее чем '.date("d.m.Y"),
            'email.email' => 'Некорректный Email',
            'email.unique' => 'Такой Email уже зарегестрирован',
            'email.required' => 'Поле Email является обязательным',

        ];
    }
}
