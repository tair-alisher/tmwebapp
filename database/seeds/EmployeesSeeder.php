<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Carbon\Carbon;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee_id = DB::table('employees')->insertGetId([
            'email' => 'bibigul200472@mail.ru',
            'phone' => '',
            'image' => 'koshoeva.png',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'ru',
            'name' => 'Кошоева Бибигуль Бейшенбековна',
            'slug' => 'koshoeva-bibigul-beyshenbekovna-ru',
            'position' => 'Заведующая кафедры',
            'degree' => 'Доцент, кандидат технических наук',
            'info' => <<<HERE
<h4>Образование</h4>
<p>08.12.2009-08.12.2012гг Национальный Исследовательский Университет Московского Энергетического Института, аспирантура, кафедра
    «Управление и информатика», г.Москва. Кандидат технических наук</p>
<p>1991 – 1996гг Кыргызкий Технический Университет им И.Раззакова (КГТУ), Факультет информационных технологий, специальность
    «Автоматика и управление в технических системах» инженер - системотехник</p>

<h4>Опыт работы</h4>
<p>с 2013 и по настоящее время - Кафедра "Телематика" Кыргызско-Германского Технического Института при КГТУ им. И.Раззакова,
    заведующая кафедры, доцент, кандидат технических наук</p>
<p>2007-2009гг. - КГТУ. Факультет Информационных Технологий, кафедра "Программное обеспечение компьютерных систем". Старший
    преподаватель</p>
<p>2003-2007гг. - КГТУ. Факультет Информационных Технологий, кафедра "Автоматическое управление". Старший преподаватель</p>
<p>1998-2003гг. - Кыргызский Национальный Университет им. Ж.Баласагына, Центр Дистанционного Образования. Менеджер курса</p>
<p>1997-1998гг. - АО "САСК". Инженер-системотехник</p>

<h4>Работа по совместительству</h4>
<p>2006-2009гг. - Факультет Информационных Технологий при Кыргызском Государственном Университете им. И.Раззакова. Заместитель
    декана по науке</p>
<p>2003-2007ГГ. - КНУ им. Ж.Баласагына, Институт Интеграции Международных Программ, Факультет "КАФ - Интернет". Старший преподаватель</p>
<p>2002-2003гг. - Фирма "Партнер". Преподаватель компьютерных курсов</p>
<p>2000-2001гг. - Институт Интеграции Международных Программ, Факультет "КАФ - Интернет". Преподаватель. Читаемый курс "Введение
    в КИС"</p>

<h4>Стажировки</h4>
<p>2013г. - Основы программирования ПЛК (Fachhochschule Köln, Германия)</p>
<p>2009г. - Основы разработки АСУ ТП в SCADA TRACE MODE 6, Адастра, г.Москва, Россия</p>
<p>2009г. - Курсы «Синхронные и нейтронные исследования наносистем», РНЦ «Курчатовский институт, ОИЯИ, гМосква – Дубна, Россия</p>
<p>2009г. - Организация и методическое обеспечение базовой компьютерной подготовки в МЭИ (ТУ), г. Москва, Россия</p>
<p>2008-2009гг. - Teilnahmezertifikat. Inhalt der Schulung: Aufbau und Betrieb von speicherprogrammierbaren Steuerungen Internet
    – Basierte Fernüberwachung von Infrastrukturanlagen Aufbau und Betrieb der Kuhse – Telecontrol – Anlage Konfiguration
    und Inbetriebnahme von Fernüberwachungssystemen (Fachhochschule Köln &amp; Kyrgyz State Technical University)</p>
<p>2005г. - Certificate Course in Web Designing (CCWD), SIBIT, New Horisons India Ltd., New Delhi, India</p>
<p>2002г. - Certificate Course in Office Technologies &amp; Internet Applications, Tata Infotech Ltd., New Delhi, India</p>

<h4>Авторские свидетельства</h4>
<p>Свидетельство №85 от 25.04.2005 Авторское свидетельство на компьютерную программу «Автоматизированный тест по контролю качества
    знаний»</p>
<p>Свидетельство №94 от 17.10.2005 Авторское свидетельство на компьютерную программу рейтинг – контроля знаний</p>
<p>2009г. - Почетная грамота Министерства образовании и науки КР</p>
<p>2008г. - Почетная грамота КГТУ им.И.Раззакова</p>
<p>2006/07г. - Диплом на звание «Лучший преподаватель года»</p>

<h4>Общественные должности</h4>
<p>2008-2009гг. - Зам.председателя Совета молодых ученых КР при МОиН</p>
<p>2006-2009гг. - Председатель Совета молодых ученых КГТУ им.И.Раззакова</p>
<p>2006-2009гг. - Член Ученого совета КГТУ им.И.Раззакова</p>
HERE
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'de',
            'name' => 'Кошоева Бибигуль Бейшенбековна',
            'slug' => 'koshoeva-bibigul-beyshenbekovna-de',
            'position' => 'Заведующая кафедры',
            'degree' => '',
            'info' => <<<HERE
<h4>Образование</h4>
<p>08.12.2009-08.12.2012гг Национальный Исследовательский Университет Московского Энергетического Института, аспирантура, кафедра
    «Управление и информатика», г.Москва. Кандидат технических наук</p>
<p>1991 – 1996гг Кыргызкий Технический Университет им И.Раззакова (КГТУ), Факультет информационных технологий, специальность
    «Автоматика и управление в технических системах» инженер - системотехник</p>

<h4>Опыт работы</h4>
<p>с 2013 и по настоящее время - Кафедра "Телематика" Кыргызско-Германского Технического Института при КГТУ им. И.Раззакова,
    заведующая кафедры, доцент, кандидат технических наук</p>
<p>2007-2009гг. - КГТУ. Факультет Информационных Технологий, кафедра "Программное обеспечение компьютерных систем". Старший
    преподаватель
</p>
<p>2003-2007гг. - КГТУ. Факультет Информационных Технологий, кафедра "Автоматическое управление". Старший преподаватель</p>
<p>1998-2003гг. - Кыргызский Национальный Университет им. Ж.Баласагына, Центр Дистанционного Образования. Менеджер курса</p>
<p>1997-1998гг. - АО "САСК". Инженер-системотехник</p>

<h4>Работа по совместительству</h4>
<p>2006-2009гг. - Факультет Информационных Технологий при Кыргызском Государственном Университете им. И.Раззакова. Заместитель
    декана по науке</p>
<p>2003-2007ГГ. - КНУ им. Ж.Баласагына, Институт Интеграции Международных Программ, Факультет "КАФ - Интернет". Старший преподаватель</p>
<p>2002-2003гг. - Фирма "Партнер". Преподаватель компьютерных курсов</p>
<p>2000-2001гг. - Институт Интеграции Международных Программ, Факультет "КАФ - Интернет". Преподаватель. Читаемый курс "Введение
    в КИС"</p>

<h4>Стажировки</h4>
<p>2013г. - Основы программирования ПЛК (Fachhochschule Köln, Германия)</p>
<p>2009г. - Основы разработки АСУ ТП в SCADA TRACE MODE 6, Адастра, г.Москва, Россия</p>
<p>2009г. - Курсы «Синхронные и нейтронные исследования наносистем», РНЦ «Курчатовский институт, ОИЯИ, гМосква – Дубна, Россия</p>
<p>2009г. - Организация и методическое обеспечение базовой компьютерной подготовки в МЭИ (ТУ), г. Москва, Россия</p>
<p>2008-2009гг. - Teilnahmezertifikat. Inhalt der Schulung: Aufbau und Betrieb von speicherprogrammierbaren Steuerungen Internet
    – Basierte Fernüberwachung von Infrastrukturanlagen Aufbau und Betrieb der Kuhse – Telecontrol – Anlage Konfiguration
    und Inbetriebnahme von Fernüberwachungssystemen (Fachhochschule Köln &amp; Kyrgyz State Technical University)</p>
<p>2005г. - Certificate Course in Web Designing (CCWD), SIBIT, New Horisons India Ltd., New Delhi, India</p>
<p>2002г. - Certificate Course in Office Technologies &amp; Internet Applications, Tata Infotech Ltd., New Delhi, India</p>

<h4>Авторские свидетельства</h4>
<p>Свидетельство №85 от 25.04.2005 Авторское свидетельство на компьютерную программу «Автоматизированный тест по контролю качества
    знаний»
</p>
<p>Свидетельство №94 от 17.10.2005 Авторское свидетельство на компьютерную программу рейтинг – контроля знаний</p>
<p>2009г. - Почетная грамота Министерства образовании и науки КР</p>
<p>2008г. - Почетная грамота КГТУ им.И.Раззакова</p>
<p>2006/07г. - Диплом на звание «Лучший преподаватель года»</p>

<h4>Общественные должности</h4>
<p>2008-2009гг. - Зам.председателя Совета молодых ученых КР при МОиН</p>
<p>2006-2009гг. - Председатель Совета молодых ученых КГТУ им.И.Раззакова</p>
<p>2006-2009гг. - Член Ученого совета КГТУ им.И.Раззакова</p>
HERE
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'kg',
            'name' => 'Кошоева Бибигуль Бейшенбековна',
            'slug' => 'koshoeva-bibigul-beyshenbekovna-kg',
            'position' => 'Заведующая кафедры',
            'degree' => 'Доцент, кандидат технических наук',
            'info' => <<<HERE
<h4>Образование</h4>
<p>08.12.2009-08.12.2012гг Национальный Исследовательский Университет Московского Энергетического Института, аспирантура, кафедра
    «Управление и информатика», г.Москва. Кандидат технических наук</p>
<p>1991 – 1996гг Кыргызкий Технический Университет им И.Раззакова (КГТУ), Факультет информационных технологий, специальность
    «Автоматика и управление в технических системах» инженер - системотехник</p>

<h4>Опыт работы</h4>
<p>с 2013 и по настоящее время - Кафедра "Телематика" Кыргызско-Германского Технического Института при КГТУ им. И.Раззакова,
    заведующая кафедры, доцент, кандидат технических наук</p>
<p>2007-2009гг. - КГТУ. Факультет Информационных Технологий, кафедра "Программное обеспечение компьютерных систем". Старший
    преподаватель
</p>
<p>2003-2007гг. - КГТУ. Факультет Информационных Технологий, кафедра "Автоматическое управление". Старший преподаватель</p>
<p>1998-2003гг. - Кыргызский Национальный Университет им. Ж.Баласагына, Центр Дистанционного Образования. Менеджер курса</p>
<p>1997-1998гг. - АО "САСК". Инженер-системотехник</p>

<h4>Работа по совместительству</h4>
<p>2006-2009гг. - Факультет Информационных Технологий при Кыргызском Государственном Университете им. И.Раззакова. Заместитель
    декана по науке</p>
<p>2003-2007ГГ. - КНУ им. Ж.Баласагына, Институт Интеграции Международных Программ, Факультет "КАФ - Интернет". Старший преподаватель</p>
<p>2002-2003гг. - Фирма "Партнер". Преподаватель компьютерных курсов</p>
<p>2000-2001гг. - Институт Интеграции Международных Программ, Факультет "КАФ - Интернет". Преподаватель. Читаемый курс "Введение
    в КИС"</p>

<h4>Стажировки</h4>
<p>2013г. - Основы программирования ПЛК (Fachhochschule Köln, Германия)</p>
<p>2009г. - Основы разработки АСУ ТП в SCADA TRACE MODE 6, Адастра, г.Москва, Россия</p>
<p>2009г. - Курсы «Синхронные и нейтронные исследования наносистем», РНЦ «Курчатовский институт, ОИЯИ, гМосква – Дубна, Россия</p>
<p>2009г. - Организация и методическое обеспечение базовой компьютерной подготовки в МЭИ (ТУ), г. Москва, Россия</p>
<p>2008-2009гг. - Teilnahmezertifikat. Inhalt der Schulung: Aufbau und Betrieb von speicherprogrammierbaren Steuerungen Internet
    – Basierte Fernüberwachung von Infrastrukturanlagen Aufbau und Betrieb der Kuhse – Telecontrol – Anlage Konfiguration
    und Inbetriebnahme von Fernüberwachungssystemen (Fachhochschule Köln &amp; Kyrgyz State Technical University)</p>
<p>2005г. - Certificate Course in Web Designing (CCWD), SIBIT, New Horisons India Ltd., New Delhi, India</p>
<p>2002г. - Certificate Course in Office Technologies &amp; Internet Applications, Tata Infotech Ltd., New Delhi, India</p>

<h4>Авторские свидетельства</h4>
<p>Свидетельство №85 от 25.04.2005 Авторское свидетельство на компьютерную программу «Автоматизированный тест по контролю качества
    знаний»
</p>
<p>Свидетельство №94 от 17.10.2005 Авторское свидетельство на компьютерную программу рейтинг – контроля знаний</p>
<p>2009г. - Почетная грамота Министерства образовании и науки КР</p>
<p>2008г. - Почетная грамота КГТУ им.И.Раззакова</p>
<p>2006/07г. - Диплом на звание «Лучший преподаватель года»</p>

<h4>Общественные должности</h4>
<p>2008-2009гг. - Зам.председателя Совета молодых ученых КР при МОиН</p>
<p>2006-2009гг. - Председатель Совета молодых ученых КГТУ им.И.Раззакова</p>
<p>2006-2009гг. - Член Ученого совета КГТУ им.И.Раззакова</p>
HERE
        ]);

        $employee_id = DB::table('employees')->insertGetId([
            'email' => 'renasultangazieva@mail.ru',
            'phone' => '',
            'image' => 'sultangazieva.png',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'ru',
            'name' => 'Султангазиева Рена Турдубековна',
            'slug' => 'sultangazieva-rena-turdubekovna-ru',
            'position' => 'Кандидат физических и математических наук',
            'degree' => 'Доцент',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'de',
            'name' => 'Султангазиева Рена Турдубековна',
            'slug' => 'sultangazieva-rena-turdubekovna-de',
            'position' => 'Кандидат физических и математических наук',
            'degree' => 'Доцент',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'kg',
            'name' => 'Султангазиева Рена Турдубековна',
            'slug' => 'sultangazieva-rena-turdubekovna-kg',
            'position' => 'Кандидат физических и математических наук',
            'degree' => 'Доцент',
            'info' => ''
        ]);

        $employee_id = DB::table('employees')->insertGetId([
            'email' => 'medralieva@mail.ru',
            'phone' => '',
            'image' => 'medralieva.png',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'ru',
            'name' => 'Медравлиева Бубусара Ниязбековна',
            'slug' => 'medravlieva-bubusara-niyazbekovna-ru',
            'position' => 'Академический советник',
            'degree' => '',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'de',
            'name' => 'Медравлиева Бубусара Ниязбековна',
            'slug' => 'medravlieva-bubusara-niyazbekovna-de',
            'position' => 'Академический советник',
            'degree' => '',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'kg',
            'name' => 'Медравлиева Бубусара Ниязбековна',
            'slug' => 'medravlieva-bubusara-niyazbekovna-kg',
            'position' => 'Академический советник',
            'degree' => '',
            'info' => ''
        ]);

        $employee_id = DB::table('employees')->insertGetId([
            'email' => 'eshimbekova65@mail.ru',
            'phone' => '',
            'image' => 'eshimbekova.png',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'ru',
            'name' => 'Ешимбекова Рахат Сейтековн',
            'slug' => 'eshimbekova-rahat-seytekovn-ru',
            'position' => 'Старший преподаватель кафедры',
            'degree' => 'Куратор 3-го курса',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'de',
            'name' => 'Ешимбекова Рахат Сейтековн',
            'slug' => 'eshimbekova-rahat-seytekovn-de',
            'position' => 'Старший преподаватель кафедры',
            'degree' => 'Куратор 3-го курса',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'kg',
            'name' => 'Ешимбекова Рахат Сейтековн',
            'slug' => 'eshimbekova-rahat-seytekovn-kg',
            'position' => 'Старший преподаватель кафедры',
            'degree' => 'Куратор 3-го курса',
            'info' => ''
        ]);

        $employee_id = DB::table('employees')->insertGetId([
            'email' => 'asianet@bk.ru',
            'phone' => '',
            'image' => 'alymkulova',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'ru',
            'name' => 'Алымкулова Альмина Абдыкалыковна',
            'slug' => 'alymkulova-almina-abdykalykovna-ru',
            'position' => 'Старший преподаватель кафедры',
            'degree' => 'Куратора 2-го курса',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'de',
            'name' => 'Алымкулова Альмина Абдыкалыковна',
            'slug' => 'alymkulova-almina-abdykalykovna-de',
            'position' => 'Старший преподаватель кафедры',
            'degree' => 'Куратора 2-го курса',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'kg',
            'name' => 'Алымкулова Альмина Абдыкалыковна',
            'slug' => 'alymkulova-almina-abdykalykovna-kg',
            'position' => 'Старший преподаватель кафедры',
            'degree' => 'Куратора 2-го курса',
            'info' => ''
        ]);

        $employee_id = DB::table('employees')->insertGetId([
            'email' => 'aigiuzel@gmail.com',
            'phone' => '',
            'image' => 'bakalova.png',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'ru',
            'name' => 'Бакалова Айгюзель Таалайбековна',
            'slug' => 'bakalova-aygyuzel-taalaybekovna-ru',
            'position' => 'Старший преподаватель кафедры',
            'degree' => '',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'de',
            'name' => 'Бакалова Айгюзель Таалайбековна',
            'slug' => 'bakalova-aygyuzel-taalaybekovna-de',
            'position' => 'Старший преподаватель кафедры',
            'degree' => '',
            'info' => ''
        ]);
        DB::table('employee_translations')->insert([
            'employee_id' => $employee_id,
            'locale' => 'kg',
            'name' => 'Бакалова Айгюзель Таалайбековна',
            'slug' => 'bakalova-aygyuzel-taalaybekovna-kg',
            'position' => 'Старший преподаватель кафедры',
            'degree' => '',
            'info' => ''
        ]);
    }
}
