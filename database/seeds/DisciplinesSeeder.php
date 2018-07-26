<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DisciplinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discipline_id = DB::table('disciplines')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('discipline_translations')->insert([
            'discipline_id' => $discipline_id,
            'locale' => 'ru',
            'title' => 'Файл оценок',
            'file_title' => 'mark.docx'
        ]);
        DB::table('discipline_translations')->insert([
            'discipline_id' => $discipline_id,
            'locale' => 'de',
            'title' => 'Marks File',
            'file_title' => 'mark.docx'
        ]);
        DB::table('discipline_translations')->insert([
            'discipline_id' => $discipline_id,
            'locale' => 'kg',
            'title' => 'Файл оценок kg',
            'file_title' => 'mark.docx'
        ]);

        $discipline_id  = DB::table('disciplines')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('discipline_translations')->insert([
            'discipline_id' => $discipline_id,
            'locale' => 'ru',
            'title' => 'Резюме',
            'file_title' => 'resume.doc'
        ]);
        DB::table('discipline_translations')->insert([
            'discipline_id' => $discipline_id,
            'locale' => 'de',
            'title' => 'Resume',
            'file_title' => 'resume.doc'
        ]);
        DB::table('discipline_translations')->insert([
            'discipline_id' => $discipline_id,
            'locale' => 'kg',
            'title' => 'Резюме kg',
            'file_title' => 'resume.doc'
        ]);
    }
}
