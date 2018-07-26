<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_id = DB::table('edu_projects')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'ru',
            'title' => 'Тестовый проект номер один',
            'slug' => 'testovyy-proekt-nomer-odin-ru',
            'content' => 'Тестовый проект номер одинТестовый проект номер одинТестовый проект номер один',
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'de',
            'title' => 'Testprojekt Nummer eins',
            'slug' => 'testprojekt-nummer-eins-de',
            'content' => 'Testprojekt Nummer einsTestprojekt Nummer einsTestprojekt Nummer eins',
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'kg',
            'title' => 'Тестовый проект номер один',
            'slug' => 'testovyy-proekt-nomer-odin-kg',
            'content' => 'Тестовый проект номер одинТестовый проект номер одинТестовый проект номер один',
        ]);

        $project_id = DB::table('edu_projects')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'ru',
            'title' => 'Тестовый проект номер два',
            'slug' => 'testovyy-proekt-nomer-dva-ru',
            'content' => 'Тестовый проект номер дваТестовый проект номер дваТестовый проект номер два',
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'de',
            'title' => 'Testprojekt Nummer zwei',
            'slug' => 'testprojekt-nummer-zwei-de',
            'content' => 'Testprojekt Nummer zweiTestprojekt Nummer zweiTestprojekt Nummer zwei',
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'kg',
            'title' => 'Тестовый проект номер два',
            'slug' => 'testovyy-proekt-nomer-dva-kg',
            'content' => 'Тестовый проект номер дваТестовый проект номер дваТестовый проект номер два',
        ]);

        $project_id = DB::table('edu_projects')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'ru',
            'title' => 'Тестовый проект номер три',
            'slug' => 'testovyy-proekt-nomer-tri-ru',
            'content' => 'Тестовый проект номер триТестовый проект номер триТестовый проект номер три',
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'de',
            'title' => 'Testprojekt Nummer drei',
            'slug' => 'testprojekt-nummer-drei-de',
            'content' => 'Testprojekt Nummer dreiTestprojekt Nummer dreiTestprojekt Nummer drei',
        ]);
        DB::table('edu_project_translations')->insert([
            'edu_project_id' => $project_id,
            'locale' => 'kg',
            'title' => 'Тестовый проект номер три',
            'slug' => 'testovyy-proekt-nomer-tri-kg',
            'content' => 'Тестовый проект номер триТестовый проект номер триТестовый проект номер три',
        ]);
    }
}
