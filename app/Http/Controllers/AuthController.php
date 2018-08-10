<?php

namespace App\Http\Controllers;

use Validator;
use Mail;
use Illuminate\Http\Request;
use App\User;
use App\Role;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login', 'loginUser']);
        $this->middleware('guest')->only(['login', 'loginUser']);
    }

    public function register()
    {
        \Auth::user()->userIs('users_admin');
        $roles = Role::all();

        return view('auth.register')->with('roles', $roles);;
    }
    public function registerUser(Request $request)
    {
        \Auth::user()->userIs('users_admin');
        $rules = [
            'name' => 'required||max:100',
            'email' => 'required|email|unique:users|max:100',
            'password' => 'required|confirmed'
        ];
        $messages = [
            'email.unique' => 'Пользователь с таким email адресом уже существует.',
            'name.required' => 'Имя обязательно для заполнения.',
            'password.required' => 'Пароль обязателен для заполнения.',
            'name.max' => 'Длина имени не может превышать 100 символов.',
            'email.required' => 'Заполните поле Email.',
            'email.email' => 'Email адрес некорректен.',
            'password.confirmed' => 'Пароли не совпадают.'
        ];
        
        Validator::make($request->all(), $rules, $messages)->validate();

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        if (($roles = $request->roles) != null) {
            foreach ($roles as $role) {
                $user
                    ->roles()
                    ->attach(Role::where('id', $role)->first());
            }
        }

        // Mail::send('emails.mail', ['password' => $request['password']], function ($message) use ($request) {
        //     $message->from('no-reply@mail.com', 'telematika.kstu.kg');

        //     $message->to($request['email'], $request['name'])
        //         ->subject('Пароль для входа на сайт telematika.kstu.kg');
        // });

        return redirect()
            ->route('admin.users')
            ->with('message', 'Пользователь добавлен.');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $rules = [
            'email' => 'required|max:100|email',
            'password' => 'required|max:100'
        ];
        $messages = [
            'email.required' => 'Email адрес обязателен для заполнения.',
            'email.max' => 'Длина email адреса не может превышать 100 символов.',
            'email.email' => 'Email адрес некорректен.',
            'password.required' => 'Пароль обязателен для заполнения',
            'password.max' => 'Длина пароля не может превышать 100 символов.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if ( !auth()->attempt($credentials) ) {
            return back()
                ->withErrors([
                    'message' => 'Проверьте вводимые данные.'  
                ]);
        }

        return redirect()->route('admin.home');

    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('home');
    }
}
