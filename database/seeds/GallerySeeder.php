<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album_id = DB::table('albums')->insertGetId([
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Online&Offline лекции - 2013',
            'slug' => 'online-offline-lekcii-2013-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'Online & Offline- Vorträge - 2013',
            'slug' => 'online-offline-vortrage-2013-de',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Online&Offline лекции - 2013',
            'slug' => 'online-offline-lekcii-2013-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $album_id = DB::table('albums')->insertGetId([
            'image' => 'protect_29.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Online защита работ бакалавриат 2014',
            'slug' => 'online-zashchita-rabot-bakalavriat-2014-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'Online -Schutz funktioniert Bachelor 2014',
            'slug' => 'online-schutz-funktioniert-bachelor-2014-de',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Online защита работ бакалавриат 2014',
            'slug' => 'online-zashchita-rabot-bakalavriat-2014-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $album_id = DB::table('albums')->insertGetId([
            'image' => 'nirs13_28.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Научно-исследовательские работы студентов 2013',
            'slug' => 'nauchno-issledovatelskie-raboty-studentov-2013-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'Die Forschungsarbeiten von Studenten 2013',
            'slug' => 'die-forschungsarbeiten-von-studenten-2013-de',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Научно-исследовательские работы студентов 2013',
            'slug' => 'nauchno-issledovatelskie-raboty-studentov-2013-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $album_id = DB::table('albums')->insertGetId([
            'image' => 'stip_28.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Стипендии',
            'slug' => 'stipendii-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'Stipendien',
            'slug' => 'stipendien-de',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Стипендии',
            'slug' => 'stipendii-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $album_id = DB::table('albums')->insertGetId([
            'image' => 'staj_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Стажировка в FH Koln',
            'slug' => 'stazhirovka-v-fh-koln-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'praktikum-in-der-fh-koln-de',
            'slug' => '',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Стажировка в FH Koln',
            'slug' => 'stazhirovka-v-fh-koln-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $album_id = DB::table('albums')->insertGetId([
            'image' => 'b7a9d57941ec2c274ca585035ac0070f.jpeg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Промышленность',
            'slug' => 'promyshlennost-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'Industry',
            'slug' => 'industry-de',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Промышленность',
            'slug' => 'promyshlennost-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $album_id = DB::table('albums')->insertGetId([
            'image' => 'nirs13_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Команда FH Koln',
            'slug' => 'komanda-fh-koln-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'Team FH Köln',
            'slug' => 'team-fh-koln-de',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Команда FH Koln',
            'slug' => 'komanda-fh-koln-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $album_id = DB::table('albums')->insertGetId([
            'image' => 'labor_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Лаборатория',
            'slug' => 'laboratoriya-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'Labor',
            'slug' => 'labor-de',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Лаборатория',
            'slug' => 'laboratoriya-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        $album_id = DB::table('albums')->insertGetId([
            'image' => 'gos_13.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'ru',
            'title' => 'Государственный экзамен',
            'slug' => 'gosudarstvennyy-ekzamen-ru',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'de',
            'title' => 'Staatsexamen',
            'slug' => 'staatsexamen-de',
        ]);
        DB::table('album_translations')->insert([
            'album_id' => $album_id,
            'locale' => 'kg',
            'title' => 'Государственный экзамен',
            'slug' => 'gosudarstvennyy-ekzamen-kg',
        ]);

        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_17.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_18.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_19.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'online2014_20.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_1.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_2.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_3.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_4.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('images')->insert([
            'album_id' => $album_id,
            'image' => 'yung_5.jpg',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
    }
}
