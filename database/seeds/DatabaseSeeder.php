<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(SecondPostsSeeder::class);
        $this->call(ThirdPostsSeeder::class);
        $this->call(FourthPostsSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(PartnersSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(DisciplinesSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
