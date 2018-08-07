<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Role;

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
        \Auth::user()->userIs('users_admin');
        $users = User::latest()->paginate(10);
        return view('admin.users')
            ->with('users', $users);
    }

    public function editUserForm($id)
    {
        // dd(\Auth::user()->userIs('users_admin'));
        // \Auth::user()->userIs('users_admin');
        $user = User::find($id);
        $roles = Role::all();

        return view('admin.edit')
            ->with('user', $user)
            ->with('roles', $roles);
    }

    public function editUser(Request $request, $id)
    {
        \Auth::user()->userIs('users_admin');
        $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();

        $user->roles()->detach();
        if (($roles = $request->roles) != null) {
            foreach ($roles as $role) {
                $user
                    ->roles()
                    ->attach(Role::where('id', $role)->first());
            }
        }

        return redirect()->route('admin.users');
    }

    public function changePasswordForm($id)
    {
        \Auth::user()->userIs('users_admin');
        $user = User::find($id);

        return view('admin.change_password')
            ->with('user', $user);
    }

    public function changePassword(Request $request, $id)
    {
        \Auth::user()->userIs('users_admin');
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
        \Auth::user()->userIs('users_admin');
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users');
    }
}
