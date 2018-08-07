<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_main_admin = Role::where('name', 'main_admin')->first();
        $roles_posts_admin = Role::where('name', 'posts_admin')->first();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@mail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach(Role::where('name', 'pages_admin')->first());
        $user->roles()->attach(Role::where('name', 'employees_admin')->first());
        $user->roles()->attach(Role::where('name', 'posts_admin')->first());
        $user->roles()->attach(Role::where('name', 'gallery_admin')->first());
        $user->roles()->attach(Role::where('name', 'partners_admin')->first());
        $user->roles()->attach(Role::where('name', 'users_admin')->first());
        $user->roles()->attach(Role::where('name', 'projects_admin')->first());

        $posts_admin = new User();
        $posts_admin->name = 'posts admin';
        $posts_admin->email = 'posts_admin@mail.com';
        $posts_admin->password=  bcrypt('password');
        $posts_admin->save();
        $posts_admin->roles()->attach($roles_posts_admin);
    }
}
