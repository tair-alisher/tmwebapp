<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_pages_admin = new Role();
        $role_pages_admin->name = 'pages_admin';
        $role_pages_admin->description = 'Администратор страниц';
        $role_pages_admin->save();

        $role_employees_admin = new Role();
        $role_employees_admin->name = 'employees_admin';
        $role_employees_admin->description = 'Администратор сотрудников';
        $role_employees_admin->save();

        $role_posts_admin = new Role();
        $role_posts_admin->name = 'posts_admin';
        $role_posts_admin->description = 'Администратор новостей';
        $role_posts_admin->save();

        $role_gallery_admin = new Role();
        $role_gallery_admin->name = 'gallery_admin';
        $role_gallery_admin->description = 'Администратор галереи';
        $role_gallery_admin->save();

        $role_partners_admin = new Role();
        $role_partners_admin->name = 'partners_admin';
        $role_partners_admin->description = 'Администратор партнеров';
        $role_partners_admin->save();

        $role_users_admin = new Role();
        $role_users_admin->name = 'users_admin';
        $role_users_admin->description = 'Администратор пользователей';
        $role_users_admin->save();

        $role_projects_admin = new Role();
        $role_projects_admin->name = 'projects_admin';
        $role_projects_admin->description = 'Администратор проектов';
        $role_projects_admin->save();
    }
}
