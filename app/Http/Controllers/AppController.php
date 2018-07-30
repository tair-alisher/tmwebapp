<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function users()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users')
            ->with('users', $users);
    }

    public function editUserForm($id)
    {
        $user = User::find($id);

        return view('admin.edit')
            ->with('user', $user);
    }

    public function editUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();

        return redirect()->route('admin.users');
    }

    public function changePasswordForm($id)
    {
        $user = User::find($id);

        return view('admin.change_password')
            ->with('user', $user);
    }

    public function changePassword(Request $request, $id)
    {
        $rules = [
            'password' => 'required|max:100|confirmed',
        ];
        $messages = [
            'password.required' => 'Пароль обязателен для заполнения.',
            'password.max' => 'Длина пароля не может превышать 100 символов.',
            'password.confirmed' => 'Пароли не совпадают.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $user = User::find($id);
        $user->password = bcrypt($request['password']);
        $user->save();

        return redirect()->route('admin.users');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users');
    }
}
