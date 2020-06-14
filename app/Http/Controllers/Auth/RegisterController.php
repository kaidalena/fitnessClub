<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'birthday' => ['required','date', 'date_format:Y-m-d', 'before:'.date("Y-m-d")], //date, date_format:format
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],[
            'name.required' => 'Поле Имя не должно быть пустым',
            'surname.required' => 'Поле Фамилия не должно быть пустым',
            'birthday.required' => 'Поле Дата рождения не должно быть пустым',
            'birthday.date' => 'Формат даты рождения должно быть: дд.мм.гггг',
            'birthday.before' => 'Дата рождения должна быть ранее чем '.date("d.m.Y"),
            'email.email' => 'Некорректный Email',
            'email.unique' => 'Такой Email уже зарегестрирован',
            'email.required' => 'Поле Email является обязательным',
            'password.required' => 'Поле Пароль является обязательным',
            'password.min' => 'Пароль должен содержать не менее 8 символов'
        ]
    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'surname' => $data['surname'],
            'birthday' => date("Y-m-d H:i:s", strtotime($data['birthday']))
        ]);
    }
}
