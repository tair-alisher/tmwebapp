<?php

use Illuminate\Database\Seeder;
use App\Partner;
use Carbon\Carbon;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'name' => 'Fachhochschule Koeln',
            'image' => 'fhs.png',
            'link' => 'http://www.gecoc.de',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        
        DB::table('partners')->insert([
            'name' => 'CAREN',
            'image' => 'caren.png',
            'link' => 'http://icaren.org/',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        DB::table('partners')->insert([
            'name' => 'DAAD',
            'image' => 'daad.gif',
            'link' => 'http://www.daad.kg/ru',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        DB::table('partners')->insert([
            'name' => 'Open Asia Foundation',
            'image' => 'oaf.gif',
            'link' => 'http://www.oneasia.or.jp/en',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        DB::table('partners')->insert([
            'name' => 'Mordovia State University',
            'image' => 'mordovia.png',
            'link' => 'http://www.mrsu.ru',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        DB::table('partners')->insert([
            'name' => 'OWEN',
            'image' => 'oven.jpeg',
            'link' => 'http://www.owen.ru',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
    }
}
