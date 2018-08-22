<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ThirdPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('03.04.2017'),
          'updated_at' => Carbon::parse('03.04.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Официальный визит профессора из TH Köln (Германия)',
          'slug' => 'oficialnyy-vizit-professora-iz-th-koln-germaniya-ru',
          'description' => 'С 13 по 17 марта 2017 г. посетил с официальным визитом проф. THK (Германия) М. Бонгарс.',
          'content' => <<<HERE
<p>С 13 по 17 марта 2017г. посетил с официальным визитом проф. THK (Германия) М. Бонгарс.<br>Во время визита проф. М.Бонгарс встретился с ректором КГТУ проф. М.Джаманбаевым, проректором по науке и внешним связям М.Чыныбаевым, директором КГТИ А.Усупкожоевой,
  со студентами направления "Телематика" и посетил партнеров кафедры "Телематика": Центрально - Азиатский исследовательский институт Земли(ЦАИИЗ),каф."ВИЭ"(Возобновляемые источники энергии), каф."МПИ", ОсОО "АиК".<br>Проф. М.Бонгарс сообщил о новой возможности
  для студентов - телематов.С этого учебного года 12 лучших студентов - телематов поедут в Германию на летнюю школу "Deutsch und Telematik".<br>Во время Sommerschule студенты посетят ТНК (Кёльн), кампус ТНК (Гуммерсбах), исследовательский институт "Metabolon".</p>
<p><img class="" src="server/images/gallery/news_e4fdb91e7cb3533e959382c0b162de38.jpeg" alt="" width="662" height="463"> &nbsp;</p>
<p><img class="" src="server/images/gallery/news_85fb79fc4d44e14cf1287fe0be860e2f.jpeg" alt="" width="665" height="518"></p>
<p><img class="" src="server/images/gallery/news_6bd68b929084c822970775f35b81a43d.jpeg" alt="" width="664" height="460"></p>
<p><img class="" src="server/images/gallery/news_3b57832479d043ee715c8ff9a5e6dcb2.jpeg" alt="" width="663" height="497"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Der offizielle Besuch von Professor TH Köln (Deutschland)',
          'slug' => 'der-offizielle-besuch-von-professor-th-koln-deutschland-de',
          'description' => 'Vom 13. bis 17. März 2017 besuchte  Prof. THK (Deutschland) M.Bongards Kirgisischen Staatlichen Technischen Universitat.',
          'content' => <<<HERE
<p>Vom 13. bis 17. März 2017 besuchte&nbsp; Prof. THK (Deutschland) M. Bongards Kirgisischen Staatlichen Technischen Universitat.</p>
<p>Wahrend des Besuchs Professor M. Bongards&nbsp; sich mit dem Rektor der KSTU Dr. M. Dzhamambaev, Prorektor für Wissenschaft und Auslandsbeziehungen M. Chynybaev, Direktor des DKTI A. Usupkozhoeva, mit studenten der Richtung "Telematik" traf und den&nbsp;
  Partner des Lehrstuhls "Telematik": Central Asian Research Institute der Erde(CARIE), Lehrstuhl "EEQ" (Erneuerbare Energie Quellen), Lehrstuhl "MPI", Unos "AIC" besuchte.</p>
<p>&nbsp;Prof. M. Бонгарс berichtete über die neuen Möglichkeiten für Studenten, die Telematik studierten. Ab diesem Schuljahr fahren&nbsp; die 12 besten Schüler nach Deutschland in die Sommerschule "Deutsch und Telematik".</p>
<p>Während der Sommerschule die Studenten die THK Köln Campus TNK (Gummersbach), Forschungsinstitut "Metabolon" besuchen&nbsp; konnen.</p>
<p><img class="" src="server/images/gallery/news_e4fdb91e7cb3533e959382c0b162de38.jpeg" alt="" width="661" height="462"></p>
<p><img class="" src="server/images/gallery/news_85fb79fc4d44e14cf1287fe0be860e2f.jpeg" alt="" width="661" height="514"></p>
<p><img class="" src="server/images/gallery/news_6bd68b929084c822970775f35b81a43d.jpeg" alt="" width="660" height="457"></p>
<p><img class="" src="server/images/gallery/news_3b57832479d043ee715c8ff9a5e6dcb2.jpeg" alt="" width="661" height="495"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Официальный визит профессора из TH Köln (Германия)',
          'slug' => 'oficialnyy-vizit-professora-iz-th-koln-germaniya-kg',
          'description' => 'С 13 по 17 марта 2017 г. посетил с официальным визитом проф. THK (Германия) М. Бонгарс.',
          'content' => <<<HERE
<p>С 13 по 17 марта 2017г. посетил с официальным визитом проф. THK (Германия) М. Бонгарс.<br>Во время визита проф. М.Бонгарс встретился с ректором КГТУ проф. М.Джаманбаевым, проректором по науке и внешним связям М.Чыныбаевым, директором КГТИ А.Усупкожоевой,
  со студентами направления "Телематика" и посетил партнеров кафедры "Телематика": Центрально - Азиатский исследовательский институт Земли(ЦАИИЗ),каф."ВИЭ"(Возобновляемые источники энергии), каф."МПИ", ОсОО "АиК".<br>Проф. М.Бонгарс сообщил о новой возможности
  для студентов - телематов.С этого учебного года 12 лучших студентов - телематов поедут в Германию на летнюю школу "Deutsch und Telematik".<br>Во время Sommerschule студенты посетят ТНК (Кёльн), кампус ТНК (Гуммерсбах), исследовательский институт "Metabolon".</p>
<p><img class="" src="server/images/gallery/news_e4fdb91e7cb3533e959382c0b162de38.jpeg" alt="" width="662" height="463"> &nbsp;</p>
<p><img class="" src="server/images/gallery/news_85fb79fc4d44e14cf1287fe0be860e2f.jpeg" alt="" width="665" height="518"></p>
<p><img class="" src="server/images/gallery/news_6bd68b929084c822970775f35b81a43d.jpeg" alt="" width="664" height="460"></p>
<p><img class="" src="server/images/gallery/news_3b57832479d043ee715c8ff9a5e6dcb2.jpeg" alt="" width="663" height="497"></p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('16.04.2017'),
          'updated_at' => Carbon::parse('16.04.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Ознакомительная поездка для иностранных студентов в Германии',
          'slug' => 'oznakomitelnaya-poezdka-dlya-inostrannyh-studentov-v-germanii-ru',
          'description' => 'Программа визита',
          'content' => <<<HERE
<p>С 12 - 26 мая текущего года - 15 студентов 2,4 курса по направлению "Телематика" посетили ТНК, WH, в Германии по программе „Studienreise für Gruppen von ausländischen Studierenden in Deutschland”.</p>
<p><strong> Программа визита:</strong></p>
<table style="height: 224px; width: 619.2px; border-color: #ccc;" border="1" cellspacing="2" cellpadding="7">
  <caption>&nbsp;</caption>
  <tbody>
    <tr style="height: 19px;">
      <td style="width: 297px; height: 19px; text-align: center;">
        <p>&nbsp;</p>
        <p><strong>Дата</strong></p>
        <p>&nbsp;</p>
      </td>
      <td style="width: 458px; height: 19px; text-align: center;">
        <p>&nbsp;</p>
        <p><strong>Мероприятие</strong></p>
        <p>&nbsp;</p>
      </td>
      <td style="width: 309.2px; height: 19px; text-align: center;">
        <p>&nbsp;</p>
        <p><strong>Место проведения</strong></p>
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr style="height: 16.2px;">
      <td style="width: 297px; height: 32.2px;" rowspan="3">
        <p>14.05 Вс</p>
        <p>&nbsp;</p>
      </td>
      <td style="width: 458px; height: 16.2px;">Прибытие</td>
      <td style="width: 309.2px; height: 16.2px;">&nbsp;</td>
    </tr>
    <tr style="height: 16.2px;">
      <td style="width: 458px; height: 16.2px;">Берлинская телебашня</td>
      <td style="width: 309.2px; height: 16.2px;">Берлин,&nbsp;Alexanderplatz</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 458px; height: 16px;">Выезд в Вильдау</td>
      <td style="width: 309.2px; height: 16px;">Вильдау</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 297px; height: 49px;" rowspan="3">15.05 Пн</td>
      <td style="width: 458px; height: 16px;">Лекция „Программное Обеспечение“.<br>Лабораторные работы в области<br>„Коммуникационные технологии“</td>
      <td style="width: 309.2px; height: 16px;">Вильдау,&nbsp;Technische-Hochschule Wildau</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 458px; height: 16px;">Презентация на тему: <br>"История напрвления Телематика в<br>Кыргызстане и его перспективы на будущее (для<br>студентов)"</td>
      <td style="width: 309.2px; height: 16px;">Вильдау,&nbsp;Technische-Hochschule Wildau</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Поездка в Потсдам</td>
      <td style="width: 309.2px; height: 17px;">Потсдам</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">16.05 Вт</td>
      <td style="width: 458px; height: 17px;">Лекция „Интернет программирование“<br>Лабораторные работы в области<br>„Электротехника для телематов“</td>
      <td style="width: 309.2px; height: 17px;">Берлин</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Посещение научно-технического<br>лаборатории (TH) в Вильдау</td>
      <td style="width: 309.2px; height: 17px;">Вильдау,&nbsp;Technische-Hochschule Wildau</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">17.05 Ср</td>
      <td style="width: 458px; height: 17px;">Визит фирмы&nbsp;"Siemens" и<br>Вокзала</td>
      <td style="width: 309.2px; height: 17px;">Берлин</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Поездка в Кельн</td>
      <td style="width: 309.2px; height: 17px;">Кельн</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 51px;" rowspan="3">18.05 Чт</td>
      <td style="width: 458px; height: 17px;">Лекция “Система управления процессом”<br>Лабораторные работы в области “Робототехника”</td>
      <td style="width: 309.2px; height: 85px;" rowspan="5">
        <p>Кельн, Technische Hochschule Köln Ansprechpartner: Prof. Dr. Michael Bongards</p>
        <p>Гуммерсбах, Campus Gummersbach</p>
      </td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Презентация на тему: <br>"История напрвления Телематика в<br>Кыргызстане и его перспективы на будущее (для<br>студентов)"</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Семинар на тему „Распределенная<br>система видеонаблюдения для децентрализованной&nbsp;<br>инфраструктурных компонент в<br>Кыргызстане“</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">19.05 Пт</td>
      <td style="width: 458px; height: 17px;">Лекция “Системы связи<br>в автоматизации”</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Визит компании: John-AndrewsEntwicklungszentrum</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 51px;" rowspan="3">20.05 Сб</td>
      <td style="width: 458px; height: 17px;">Посещение Кельнского собора</td>
      <td style="width: 309.2px; height: 51px;" rowspan="3">Кельн</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Посещение музея&nbsp;Wallraf-Richartz</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Ваезд в Фрайбург</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 17px;">21.05 Вс</td>
      <td style="width: 458px; height: 17px;">Посещение “Europa Parks</td>
      <td style="width: 309.2px; height: 17px;">Фрайбург</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">22.05 Пн</td>
      <td style="width: 458px; height: 17px;">Лекции и лабораторные работы на<br>тему „Микрокомпьютерные Технологии“</td>
      <td style="width: 309.2px; height: 34px;" rowspan="2">Фрайбург, Institut für Mickrocomputertechnik –IMTEK</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Презентация на тему: <br>"История напрвления Телематика в<br>Кыргызстане и его перспективы на будущее (для<br>студентов)"</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">23.05 Вт</td>
      <td style="width: 458px; height: 17px;">Лекции и лабораторные работы на тему<br>"Микромеханики"</td>
      <td style="width: 309.2px; height: 34px;" rowspan="2">Фрайбург, Freiburg im Breisgau&nbsp;</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Прогулка в городе</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 17px;">24.05 Ср</td>
      <td style="width: 458px; height: 17px;">Поездка в Цюрих</td>
      <td style="width: 309.2px; height: 17px;">Цюрих</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">25.05 Чт</td>
      <td style="width: 458px; height: 17px;">Выезд в Штутгарт</td>
      <td style="width: 309.2px; height: 17px;">Цюрих</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Отъезд</td>
      <td style="width: 309.2px; height: 17px;">&nbsp;</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Studienreise für Gruppen von ausländischen Studierenden in Deutschland',
          'slug' => 'studienreise-fur-gruppen-von-auslandischen-studierenden-in-deutschland-de',
          'description' => 'Zeitplan',
          'content' => <<<HERE
<p>Vom 12. bis 26. Mai dieses Jahres&nbsp; werden&nbsp; 15 Schüler des 2. und 4. Kurses in Richtung "Telematik" die TNK, WH&nbsp; mit dem Programm "Studienreise für Gruppen von ausländischen Studierenden in Deutschland" in&nbsp; Deutschland&nbsp; besuchen.</p>
<p><strong>Das Programm für das Besuch:</strong></p>
<table style="height: 224px; width: 619.2px; border-color: #ccc;" border="1" cellspacing="2" cellpadding="7">
  <caption>&nbsp;</caption>
  <tbody>
    <tr style="height: 19px;">
      <td style="width: 116.4px; height: 19px; text-align: center;">
        <p><strong>&nbsp;</strong><strong>Datum</strong></p>
      </td>
      <td style="width: 258.8px; height: 19px; text-align: center;">
        <p><strong>&nbsp;</strong></p>
        <p><strong>Veranstaltung</strong></p>
        <p><strong>&nbsp;</strong></p>
      </td>
      <td style="width: 189.2px; height: 19px; text-align: center;">
        <p><strong>&nbsp;</strong></p>
        <p><strong>Veranstaltungsort</strong></p>
        <p><strong>&nbsp;</strong></p>
      </td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 116.4px; height: 48px;" rowspan="3">
        <p>14.05 So</p>
      </td>
      <td style="width: 258.8px; height: 16px;">Ankunft</td>
      <td style="width: 189.2px; height: 16px;">&nbsp;</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 258.8px; height: 16px;">Berliner Fernsehturm</td>
      <td style="width: 189.2px; height: 16px;">&nbsp;Berlin,&nbsp;Alexanderplatz</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 258.8px; height: 16px;">Abfahrt nach Wildau</td>
      <td style="width: 189.2px; height: 16px;">Berlin Hbf.</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 116.4px; height: 49px;" rowspan="3">15.05 Mo</td>
      <td style="width: 258.8px; height: 16px;">Vorlesung „Software-Projekt“ Laborarbeiten im Bereich „Kommunikationstechnik“</td>
      <td style="width: 189.2px; height: 32px;" rowspan="2">Technische-Hochschule Wildau Ansprechpartnerin: Dr. Angelika Schubert</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 258.8px; height: 16px;">Präsentation zum Thema: Die Geschichte der Telematik in Kirgisistan und ihre Zukunftsperspektiven (für Studierende)</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Reise nach Potsdam</td>
      <td style="width: 189.2px; height: 17px;">Wildau-Potsdam Hbf</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 116.4px; height: 34px;" rowspan="2">16.05 Di</td>
      <td style="width: 258.8px; height: 17px;">Vorlesung „InternetProgrammierung“ Laborarbeiten im Bereich „Elektrotechnik für Telematiker“</td>
      <td style="width: 189.2px; height: 34px;" rowspan="2">Technische-Hochschule Wildau</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Besuch der naturwissenschaftlichtechnischen Schülerlabore der TH Wildau</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 116.4px; height: 34px;" rowspan="2">17.05 Mi</td>
      <td style="width: 258.8px; height: 17px;">Reise zu Siemens und zum Hauptbahnhof</td>
      <td style="width: 189.2px; height: 34px;" rowspan="2">Wildau- U Rohrdamm U Rohrdamm – Bln. Hauptbahnhof</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Abfahrt nach Köln</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 116.4px; height: 51px;" rowspan="3">18.05 Do</td>
      <td style="width: 258.8px; height: 17px;">Vorlesung “ Produktions- und Prozessleitsysteme” Laborarbeiten im Bereich “Robotik”</td>
      <td style="width: 189.2px; height: 85px;" rowspan="5">
        <p>Technische Hochschule Köln Ansprechpartner: Prof. Dr. Michael Bongards Campus Gummersbach</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>John-Andrews-Entwicklungszentrum</p>
      </td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Präsentation zum Thema „Die Geschichte der Telematik in Kirgisistan und ihre Zukunftsperspektiven“</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Seminar zum Thema „Verteiltes Überwachungssystem für dezentrale Infrastruktur-komponenten in Kirgistan“</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 116.4px; height: 34px;" rowspan="2">19.05 Fr</td>
      <td style="width: 258.8px; height: 17px;">Vorlesung “Kommunikationssysteme in der Automatisierung”</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Firmenbesuch: John-AndrewsEntwicklungszentrum</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 116.4px; height: 51px;" rowspan="3">20.05 Sa</td>
      <td style="width: 258.8px; height: 17px;">Besuch des Kölner Doms</td>
      <td style="width: 189.2px; height: 51px;" rowspan="3">Köln</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Besuch das Wallraf-RichartzMuseums</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Abfahrt nach Freiburg(Breisgau) Hbf</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 116.4px; height: 17px;">21.05 Вс</td>
      <td style="width: 258.8px; height: 17px;">Besuch des “Europa Parks”</td>
      <td style="width: 189.2px; height: 17px;">Europa-Park-Straße</td>
    </tr>
    <tr style="height: 14px;">
      <td style="width: 116.4px; height: 31px;" rowspan="2">22.05 Mo</td>
      <td style="width: 258.8px; height: 14px;">Vorlesungen und Laborarbeiten zum Thema „Mikrocomputertechnik“</td>
      <td style="width: 189.2px; height: 31px;" rowspan="2">Freiburg, Institut für Mickrocomputertechnik –IMTEK</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Präsentation zum Thema: Die Geschichte der Telematik in Kirgisistan und ihre Zukunftsperspektiven</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 116.4px; height: 34px;" rowspan="2">23.05 Di</td>
      <td style="width: 258.8px; height: 17px;">Vorlesungen und Laborarbeiten zum Thema: Mikromechanik</td>
      <td style="width: 189.2px; height: 34px;" rowspan="2">
        <p>Schauinslandbahn</p>
        <p>Freiburg im Breisgau</p>
      </td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Schauinsland Freiburg</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 116.4px; height: 16px;">24.05 Mi</td>
      <td style="width: 258.8px; height: 16px;">Reise nach Zürich</td>
      <td style="width: 189.2px; height: 16px;">Zürich HB</td>
    </tr>
    <tr style="height: 17.8px;">
      <td style="width: 116.4px; height: 34.8px;" rowspan="2">25.05 Do</td>
      <td style="width: 258.8px; height: 17.8px;">Abfahrt nach Stuttgart</td>
      <td style="width: 189.2px; height: 17.8px;">&nbsp;</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 258.8px; height: 17px;">Abflug</td>
      <td style="width: 189.2px; height: 17px;">Abflug vom Flughafen Stuttgart</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Ознакомительная поездка для иностранных студентов в Германии',
          'slug' => 'oznakomitelnaya-poezdka-dlya-inostrannyh-studentov-v-germanii-de',
          'description' => 'Программа визита',
          'content' => <<<HERE
<p>С 12 - 26 мая текущего года - 15 студентов 2,4 курса по направлению "Телематика" посетили ТНК, WH, в Германии по программе „Studienreise für Gruppen von ausländischen Studierenden in Deutschland”.</p>
<p><strong> Программа визита:</strong></p>
<table style="height: 224px; width: 619.2px; border-color: #ccc;" border="1" cellspacing="2" cellpadding="7">
  <caption>&nbsp;</caption>
  <tbody>
    <tr style="height: 19px;">
      <td style="width: 297px; height: 19px; text-align: center;">
        <p>&nbsp;</p>
        <p><strong>Дата</strong></p>
        <p>&nbsp;</p>
      </td>
      <td style="width: 458px; height: 19px; text-align: center;">
        <p>&nbsp;</p>
        <p><strong>Мероприятие</strong></p>
        <p>&nbsp;</p>
      </td>
      <td style="width: 309.2px; height: 19px; text-align: center;">
        <p>&nbsp;</p>
        <p><strong>Место проведения</strong></p>
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr style="height: 16.2px;">
      <td style="width: 297px; height: 32.2px;" rowspan="3">
        <p>14.05 Вс</p>
        <p>&nbsp;</p>
      </td>
      <td style="width: 458px; height: 16.2px;">Прибытие</td>
      <td style="width: 309.2px; height: 16.2px;">&nbsp;</td>
    </tr>
    <tr style="height: 16.2px;">
      <td style="width: 458px; height: 16.2px;">Берлинская телебашня</td>
      <td style="width: 309.2px; height: 16.2px;">Берлин,&nbsp;Alexanderplatz</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 458px; height: 16px;">Выезд в Вильдау</td>
      <td style="width: 309.2px; height: 16px;">Вильдау</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 297px; height: 49px;" rowspan="3">15.05 Пн</td>
      <td style="width: 458px; height: 16px;">Лекция „Программное Обеспечение“.<br>Лабораторные работы в области<br>„Коммуникационные технологии“</td>
      <td style="width: 309.2px; height: 16px;">Вильдау,&nbsp;Technische-Hochschule Wildau</td>
    </tr>
    <tr style="height: 16px;">
      <td style="width: 458px; height: 16px;">Презентация на тему: <br>"История напрвления Телематика в<br>Кыргызстане и его перспективы на будущее (для<br>студентов)"</td>
      <td style="width: 309.2px; height: 16px;">Вильдау,&nbsp;Technische-Hochschule Wildau</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Поездка в Потсдам</td>
      <td style="width: 309.2px; height: 17px;">Потсдам</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">16.05 Вт</td>
      <td style="width: 458px; height: 17px;">Лекция „Интернет программирование“<br>Лабораторные работы в области<br>„Электротехника для телематов“</td>
      <td style="width: 309.2px; height: 17px;">Берлин</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Посещение научно-технического<br>лаборатории (TH) в Вильдау</td>
      <td style="width: 309.2px; height: 17px;">Вильдау,&nbsp;Technische-Hochschule Wildau</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">17.05 Ср</td>
      <td style="width: 458px; height: 17px;">Визит фирмы&nbsp;"Siemens" и<br>Вокзала</td>
      <td style="width: 309.2px; height: 17px;">Берлин</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Поездка в Кельн</td>
      <td style="width: 309.2px; height: 17px;">Кельн</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 51px;" rowspan="3">18.05 Чт</td>
      <td style="width: 458px; height: 17px;">Лекция “Система управления процессом”<br>Лабораторные работы в области “Робототехника”</td>
      <td style="width: 309.2px; height: 85px;" rowspan="5">
        <p>Кельн, Technische Hochschule Köln Ansprechpartner: Prof. Dr. Michael Bongards</p>
        <p>Гуммерсбах, Campus Gummersbach</p>
      </td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Презентация на тему: <br>"История напрвления Телематика в<br>Кыргызстане и его перспективы на будущее (для<br>студентов)"</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Семинар на тему „Распределенная<br>система видеонаблюдения для децентрализованной&nbsp;<br>инфраструктурных компонент в<br>Кыргызстане“</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">19.05 Пт</td>
      <td style="width: 458px; height: 17px;">Лекция “Системы связи<br>в автоматизации”</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Визит компании: John-AndrewsEntwicklungszentrum</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 51px;" rowspan="3">20.05 Сб</td>
      <td style="width: 458px; height: 17px;">Посещение Кельнского собора</td>
      <td style="width: 309.2px; height: 51px;" rowspan="3">Кельн</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Посещение музея&nbsp;Wallraf-Richartz</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Ваезд в Фрайбург</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 17px;">21.05 Вс</td>
      <td style="width: 458px; height: 17px;">Посещение “Europa Parks</td>
      <td style="width: 309.2px; height: 17px;">Фрайбург</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">22.05 Пн</td>
      <td style="width: 458px; height: 17px;">Лекции и лабораторные работы на<br>тему „Микрокомпьютерные Технологии“</td>
      <td style="width: 309.2px; height: 34px;" rowspan="2">Фрайбург, Institut für Mickrocomputertechnik –IMTEK</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Презентация на тему: <br>"История напрвления Телематика в<br>Кыргызстане и его перспективы на будущее (для<br>студентов)"</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">23.05 Вт</td>
      <td style="width: 458px; height: 17px;">Лекции и лабораторные работы на тему<br>"Микромеханики"</td>
      <td style="width: 309.2px; height: 34px;" rowspan="2">Фрайбург, Freiburg im Breisgau&nbsp;</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Прогулка в городе</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 17px;">24.05 Ср</td>
      <td style="width: 458px; height: 17px;">Поездка в Цюрих</td>
      <td style="width: 309.2px; height: 17px;">Цюрих</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 297px; height: 34px;" rowspan="2">25.05 Чт</td>
      <td style="width: 458px; height: 17px;">Выезд в Штутгарт</td>
      <td style="width: 309.2px; height: 17px;">Цюрих</td>
    </tr>
    <tr style="height: 17px;">
      <td style="width: 458px; height: 17px;">Отъезд</td>
      <td style="width: 309.2px; height: 17px;">&nbsp;</td>
    </tr>
  </tbody>
</table>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('03.06.2017'),
          'updated_at' => Carbon::parse('03.06.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Протокол  научно-технических разработок молодых ученых, аспирантов и  студентов кафедры «Телематика»,',
          'slug' => 'protokol-nauchno-tehnicheskih-razrabotok-molodyh-uchenyh-aspirantov-i-studentov-kafedry-telematika-ru',
          'description' => 'Разработки студентов, представленные в рамках 59-й научно-технической конференции молодых ученых, аспирантов и студентов',
          'content' => <<<HERE
<h2 style="text-align: center;">Протокол</h2>
<h2 style="text-align: center;">научно-технических разработок молодых ученых, аспирантов и</h2>
<h2 style="text-align: center;">студентов кафедры «Телематика», КГТИ</h2>
<h2 style="text-align: center;">от «3» мая 2017 года</h2>
<p>Жюри в составе:</p>
<p>Мусина И.Р. к.т.н., доцент</p>
<p>Курлов В.Г., ген. директор АВН</p>
<p>Кадыров Э., председатель СМУиС</p>
<p>рассмотрев разработки студентов, представленные в рамках 59-й научно-</p>
<p>технической конференции молодых ученых, аспирантов и студентов под</p>
<p>названием «Молодой ученый – вызовы и перспективы», приняло следующее</p>
<p>решение</p>
<p>Присудить:</p>
<ul>
  <li>Диплом 1-й степени – «Разработка системы мониторинга уровня воды</li>
</ul>
<p>рек и водоемов». Автор – ст. группы Тг(б)-1- 13 Беликов Андрей, ст.</p>
<p>группы Тг(б)-2- 14 Текебаев Нурсултан и Толонбеков Данил.</p>
<p>Руководитель – к.т.н., доц. Кошоева Б.Б.;</p>
<ul>
  <li>&nbsp;Диплом 2-й степени – ««Умное зеркало» с использованием 3D</li>
</ul>
<p>принтера и Raspberry Pi». Автор – ст. группы Тг(б)-1- 14 Верещагина</p>
<p>Анастасия, Уланбекова Алтынай, Курганова Сауле и Дмитриев Артем.</p>
<p>Руководитель – ст. преп. Бакалова А.Т.;</p>
<ul>
  <li>Диплом 3-й степени – «Автоматизация управления системой «Умный</li>
</ul>
<p>дом»». Автор – ст. группы Тг(б)-2- 15 Кубатбекова Умсунай, Алмереков</p>
<p>Ильяс, Азат уулу Тариэл, Дюшеналиева Диана и Казыбеков Азим.</p>
<p>Руководитель – ст. преп. Лайлиев А.А.;</p>
<p>Мусина И.Р.</p>
<p>Кадыров Э.</p>
<p>Курлов В.Г.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Протокол  научно-технических разработок молодых ученых, аспирантов и  студентов кафедры «Телематика»,',
          'slug' => 'protokol-nauchno-tehnicheskih-razrabotok-molodyh-uchenyh-aspirantov-i-studentov-kafedry-telematika-de',
          'description' => 'Разработки студентов, представленные в рамках 59-й научно-технической конференции молодых ученых, аспирантов и студентов',
          'content' => <<<HERE
<h2 style="text-align: center;">Протокол</h2>
<h2 style="text-align: center;">научно-технических разработок молодых ученых, аспирантов и</h2>
<h2 style="text-align: center;">студентов кафедры «Телематика», КГТИ</h2>
<h2 style="text-align: center;">от «3» мая 2017 года</h2>
<p>Жюри в составе:</p>
<p>Мусина И.Р. к.т.н., доцент</p>
<p>Курлов В.Г., ген. директор АВН</p>
<p>Кадыров Э., председатель СМУиС</p>
<p>рассмотрев разработки студентов, представленные в рамках 59-й научно-</p>
<p>технической конференции молодых ученых, аспирантов и студентов под</p>
<p>названием «Молодой ученый – вызовы и перспективы», приняло следующее</p>
<p>решение</p>
<p>Присудить:</p>
<ul>
  <li>Диплом 1-й степени – «Разработка системы мониторинга уровня воды</li>
</ul>
<p>рек и водоемов». Автор – ст. группы Тг(б)-1- 13 Беликов Андрей, ст.</p>
<p>группы Тг(б)-2- 14 Текебаев Нурсултан и Толонбеков Данил.</p>
<p>Руководитель – к.т.н., доц. Кошоева Б.Б.;</p>
<ul>
  <li>&nbsp;Диплом 2-й степени – ««Умное зеркало» с использованием 3D</li>
</ul>
<p>принтера и Raspberry Pi». Автор – ст. группы Тг(б)-1- 14 Верещагина</p>
<p>Анастасия, Уланбекова Алтынай, Курганова Сауле и Дмитриев Артем.</p>
<p>Руководитель – ст. преп. Бакалова А.Т.;</p>
<ul>
  <li>Диплом 3-й степени – «Автоматизация управления системой «Умный</li>
</ul>
<p>дом»». Автор – ст. группы Тг(б)-2- 15 Кубатбекова Умсунай, Алмереков</p>
<p>Ильяс, Азат уулу Тариэл, Дюшеналиева Диана и Казыбеков Азим.</p>
<p>Руководитель – ст. преп. Лайлиев А.А.;</p>
<p>Мусина И.Р.</p>
<p>Кадыров Э.</p>
<p>Курлов В.Г.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Протокол  научно-технических разработок молодых ученых, аспирантов и  студентов кафедры «Телематика»,',
          'slug' => 'protokol-nauchno-tehnicheskih-razrabotok-molodyh-uchenyh-aspirantov-i-studentov-kafedry-telematika-kg',
          'description' => 'Разработки студентов, представленные в рамках 59-й научно-технической конференции молодых ученых, аспирантов и студентов',
          'content' => <<<HERE
<h2 style="text-align: center;">Протокол</h2>
<h2 style="text-align: center;">научно-технических разработок молодых ученых, аспирантов и</h2>
<h2 style="text-align: center;">студентов кафедры «Телематика», КГТИ</h2>
<h2 style="text-align: center;">от «3» мая 2017 года</h2>
<p>Жюри в составе:</p>
<p>Мусина И.Р. к.т.н., доцент</p>
<p>Курлов В.Г., ген. директор АВН</p>
<p>Кадыров Э., председатель СМУиС</p>
<p>рассмотрев разработки студентов, представленные в рамках 59-й научно-</p>
<p>технической конференции молодых ученых, аспирантов и студентов под</p>
<p>названием «Молодой ученый – вызовы и перспективы», приняло следующее</p>
<p>решение</p>
<p>Присудить:</p>
<ul>
  <li>Диплом 1-й степени – «Разработка системы мониторинга уровня воды</li>
</ul>
<p>рек и водоемов». Автор – ст. группы Тг(б)-1- 13 Беликов Андрей, ст.</p>
<p>группы Тг(б)-2- 14 Текебаев Нурсултан и Толонбеков Данил.</p>
<p>Руководитель – к.т.н., доц. Кошоева Б.Б.;</p>
<ul>
  <li>&nbsp;Диплом 2-й степени – ««Умное зеркало» с использованием 3D</li>
</ul>
<p>принтера и Raspberry Pi». Автор – ст. группы Тг(б)-1- 14 Верещагина</p>
<p>Анастасия, Уланбекова Алтынай, Курганова Сауле и Дмитриев Артем.</p>
<p>Руководитель – ст. преп. Бакалова А.Т.;</p>
<ul>
  <li>Диплом 3-й степени – «Автоматизация управления системой «Умный</li>
</ul>
<p>дом»». Автор – ст. группы Тг(б)-2- 15 Кубатбекова Умсунай, Алмереков</p>
<p>Ильяс, Азат уулу Тариэл, Дюшеналиева Диана и Казыбеков Азим.</p>
<p>Руководитель – ст. преп. Лайлиев А.А.;</p>
<p>Мусина И.Р.</p>
<p>Кадыров Э.</p>
<p>Курлов В.Г.</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('01.08.2017'),
          'updated_at' => Carbon::parse('01.08.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Третья летняя школа «Deutsch und Telematik»',
          'slug' => 'tretya-letnyaya-shkola-deutsch-und-telematik-ru',
          'description' => 'Третья летняя школа «Deutsch und Telematik» на берегу Иссык-Куля для студентов направления «Телематика»',
          'content' => <<<HERE
<p>С 25 июня по 2 июля 2017г состоялась третья летняя школа «Deutsch und Telematik» на берегу Иссык-Куля для студентов направления «Телематика», где проводились занятия по немецкому языку и по промышленной автоматизации. На конкурной основе представителями
  ДААД были отобраны 12 студентов направления «Телематика». Занятия проводились согласно расписанию.</p>
<p>Занятия по немецкому языку проводила Токтосунова Шахиста. Занятия по автоматизации по теме «Программирование промышленных контроллеров на платформе CoDeSyS 2.3 для ПЛК фирмы ОВЕН» проводил проф. Мордовского государственного университета им.Н.Огарева Шишов
  Олег Викторович.</p>
<p>Участники летней школы:</p>
<ol>
  <li>Усенова Гульзана</li>
  <li>Азатов Тариэль</li>
  <li>Алмереков Ильяс</li>
  <li>Алакулова Карина</li>
  <li>Ли Дмитрий</li>
  <li>Жорокулов Адилет</li>
  <li>Мукашев Кутман</li>
  <li>Малабекова Калича</li>
  <li>Джумабеков Дияс</li>
  <li>Казыбеков Азим</li>
  <li>Верещагина Анастасия</li>
  <li>Уланбекова Алтынай</li>
</ol>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/sommerschule_ik2017/2.jpg" alt="" width="734" height="550"></p>
<p><img class="" src="server/images/gallery/sommerschule_ik2017/1.jpg" alt="" width="735" height="551"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Die dritte Sommerschule in Issyk-Kul',
          'slug' => 'die-dritte-sommerschule-in-issyk-kul-de',
          'description' => 'Die dritte Sommerschule «Deutsch und Telematik» am Issyk-Kul für die Studierenden der Richtung «Telematik»',
          'content' => <<<HERE
<p>Vom 25 Juni bis 2. Juli 2017 fand die dritte Sommerschule «Deutsch und Telematik» am Issyk-Kul für die Studierenden der Richtung «Telematik» statt, wo sie deutsch und industrielle Automatisierung lernen. Auf der Basis des Wettbewerbs Vertretern der DAAD
  12 Studenten von der Richtung «Telematik» ausgewählt wurden. Die Klassen wurden entsprechend dem Zeitplan.</p>
<p>Der Unterricht in der deutschen Sprache verbrachte Schahista Toktosunova. Die Klassen durch die Automatisierung zum Thema «Programmierung industriellen Steuerungen auf der Plattform CoDeSyS 2.3 für SPS der Firma OVEN» führte Prof. mordwinischen staatlichen
  Universität.N. Ogareva Oleg Shishov.</p>
<p>Die Teilnehmer der Sommerschule:</p>
<p>1. Usenova Gulzana</p>
<p>2. Azatov Tariel</p>
<p>3. Almerekov Iliys</p>
<p>4. Alakulova Karina</p>
<p>5. Li Dmitri</p>
<p>6. Zhorokulov Adilet</p>
<p>7. Mukashev Kutman</p>
<p>8. Malabekova Kalicha</p>
<p>9. Dzhumabekov Dias</p>
<p>10. Kazybekov Asis</p>
<p>11. Vereshagina Anastasia</p>
<p>12. Ulanbekova Altynai</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Третья летняя школа «Deutsch und Telematik»',
          'slug' => 'tretya-letnyaya-shkola-deutsch-und-telematik-kg',
          'description' => 'Третья летняя школа «Deutsch und Telematik» на берегу Иссык-Куля для студентов направления «Телематика»',
          'content' => <<<HERE
<p>С 25 июня по 2 июля 2017г состоялась третья летняя школа «Deutsch und Telematik» на берегу Иссык-Куля для студентов направления «Телематика», где проводились занятия по немецкому языку и по промышленной автоматизации. На конкурной основе представителями
  ДААД были отобраны 12 студентов направления «Телематика». Занятия проводились согласно расписанию.</p>
<p>Занятия по немецкому языку проводила Токтосунова Шахиста. Занятия по автоматизации по теме «Программирование промышленных контроллеров на платформе CoDeSyS 2.3 для ПЛК фирмы ОВЕН» проводил проф. Мордовского государственного университета им.Н.Огарева Шишов
  Олег Викторович.</p>
<p>Участники летней школы:</p>
<ol>
  <li>Усенова Гульзана</li>
  <li>Азатов Тариэль</li>
  <li>Алмереков Ильяс</li>
  <li>Алакулова Карина</li>
  <li>Ли Дмитрий</li>
  <li>Жорокулов Адилет</li>
  <li>Мукашев Кутман</li>
  <li>Малабекова Калича</li>
  <li>Джумабеков Дияс</li>
  <li>Казыбеков Азим</li>
  <li>Верещагина Анастасия</li>
  <li>Уланбекова Алтынай</li>
</ol>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/sommerschule_ik2017/2.jpg" alt="" width="734" height="550"></p>
<p><img class="" src="server/images/gallery/sommerschule_ik2017/1.jpg" alt="" width="735" height="551"></p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('18.08.2017'),
          'updated_at' => Carbon::parse('18.08.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Первая летняя школа «Summerschool Automatisierung» в Германии',
          'slug' => 'pervaya-letnyaya-shkola-summerschool-automatisierung-v-germanii-ru',
          'description' => 'Летом состоялась первая летняя школа «Summerschool Automatisierung» в Германии для студентов направления «Телематика»',
          'content' => <<<HERE
<p>С 10 июля по 22 июля 2017 г. состоялась первая летняя школа «Summerschool Automatisierung» в Германии для студентов направления «Телематика». В рамках летней школы проводились занятия по немецкому языку, по промышленной автоматизации на базе ПЛК&nbsp;Siemens&nbsp;S7-300
  и ПО&nbsp;TIA&nbsp;–Portal, по&nbsp;LabWiew, посещения промышленных компаний и культурная программа.</p>
<p>Занятия по немецкому языку проводила&nbsp;Frau Mierau.</p>
<p>Занятия по автоматизации по теме «Базовый курс по программированию ПЛК на платформе&nbsp;TIA-Portal» проводили&nbsp;Philip Wenzel, Mirco Friedrichs.</p>
<p>Занятия по&nbsp;LABWIEW&nbsp;проводил Hartmut Köhn.</p>
<p>Посетили следующие промышленные компании: завод по изготовлению промышленных шкафов автоматизации&nbsp;Fa.&nbsp;Unitechnik, завод по изготовлению пива&nbsp;Fa.&nbsp;Erzquell&nbsp;Brauerei, завод по изготовлению зап.частей для самолетов и автомобилей&nbsp;OTTO&nbsp;FUCHS,&nbsp;научно-исследовательский
  центр по альтернативным источникам энергии&nbsp;Metabolon.</p>
<p>Культурная программа включала себя изучение достопримечательностей г. Гуммерсбах, г. Кельн, г. Бонн (Германия), Шевеннинген (Голландия); гуляние по набережной р.Рена (Кельн, Германия), Северное море (Голландия).</p>
<p>На конкурной основе представителями ДААД были отобраны 10 студентов направления «Телематика». Занятия проводились согласно расписанию.</p>
<p>Участники летней школы:</p>
<ol>
  <li>Алмереков Ильяс</li>
  <li>Базарбаев Шумкарбек</li>
  <li>Казыбеков Азим</li>
  <li>Нурлан Иса</li>
  <li>Текебаев Нурсултан</li>
  <li>Тѳлѳнбеков Данил</li>
  <li>Усубакунова Гульжамал</li>
  <li>Усенова Гульзана</li>
  <li>Верещагина Анастасия</li>
  <li>Замирбеков Эмилбек</li>
</ol>
<p><img class="" src="server/images/gallery/sommerschule_De2017/IMG_20170718_131901.jpg" alt="" width="670" height="376"></p>
<p><img class="" src="server/images/gallery/sommerschule_De2017/IMG_20170717_100357.jpg" alt="" width="662" height="372"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Die erste Sommerschule "Automatisierung die Umwelt" in Deutschland',
          'slug' => 'die-erste-sommerschule-automatisierung-die-umwelt-in-deutschland-de',
          'description' => 'Die erste Sommerschule "Automatisierung die Umwelt" in Deutschland für Studenten des Lehrstuhls "Telematik"',
          'content' => <<<HERE
<p>Vom 10. Juli bis 22. Juli 2017 fand die erste Sommerschule " Automatisierung die Umwelt" in Deutschland für Studenten des Lehrstuhls "Telematik" statt.</p>
<p>Im Rahmen der Sommerschule haben die Studenten Deutsch gelernt. Sie wurden im Labor "Industrie-Automatisierung basierend auf Siemens S7-300 SPS und TIA-Portal Software " an einer vernetzten Automatisierungs- und Steuerungsanlage praktisch geschult. Ausserdem
  bekommen sie die Grundkenntnisse in der Arbeit mit den Labwiew.</p>
<p>Während der zwei Wochen besuchten Studenten auch Industrieunternehmen. Frau Mierau lehrte Deutsch. Philip Wenzel und Mirco Friedrichs unterrichteten Automatisierungskurse zum Thema " SPS Programmierung Grundkurs auf der Plattform TIA-Portal". Hartmut
  Köhn lehrte LABWIEW. Die Studenten besuchten folgende Industrieunternehmen: der Betrieb für den Schaltanlagenbau -Unitechnik, Erzquell Brauerei, Ersatzteilfabrik für Flugzeuge und Autos OTTO FUCHS, Forschungszentrum für alternative Energiequellen -Metabolon.</p>
<p>Das kulturelle Programm beinhaltete Ausflüge nach Gummersbach, Köln, Bonn (Deutschland), Shevenningen (Holland).</p>
<p>10 Studenten von Telematik wurden für das DAAD-Stipendium ausgewählt. Die Teilnehmer der Sommerschule:</p>
<p>1. Almerekov Iliyas</p>
<p>2. Bazarbaev Schumkarbek</p>
<p>3. Kazybekov Azim</p>
<p>4. Nurlan Isa</p>
<p>5. Tekebaev Nursultan</p>
<p>6. Tolonbekov Danil</p>
<p>7. Usubakunova Gulzhamal</p>
<p>8. Usenova Gulzana</p>
<p>9. Vereshyagina Anastasiya</p>
<p>10. Zamirbekov Emilbek</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Первая летняя школа «Summerschool Automatisierung» в Германии',
          'slug' => 'pervaya-letnyaya-shkola-summerschool-automatisierung-v-germanii-kg',
          'description' => 'Летом состоялась первая летняя школа «Summerschool Automatisierung» в Германии для студентов направления «Телематика»',
          'content' => <<<HERE
<p>С 10 июля по 22 июля 2017 г. состоялась первая летняя школа «Summerschool Automatisierung» в Германии для студентов направления «Телематика». В рамках летней школы проводились занятия по немецкому языку, по промышленной автоматизации на базе ПЛК&nbsp;Siemens&nbsp;S7-300
  и ПО&nbsp;TIA&nbsp;–Portal, по&nbsp;LabWiew, посещения промышленных компаний и культурная программа.</p>
<p>Занятия по немецкому языку проводила&nbsp;Frau Mierau.</p>
<p>Занятия по автоматизации по теме «Базовый курс по программированию ПЛК на платформе&nbsp;TIA-Portal» проводили&nbsp;Philip Wenzel, Mirco Friedrichs.</p>
<p>Занятия по&nbsp;LABWIEW&nbsp;проводил Hartmut Köhn.</p>
<p>Посетили следующие промышленные компании: завод по изготовлению промышленных шкафов автоматизации&nbsp;Fa.&nbsp;Unitechnik, завод по изготовлению пива&nbsp;Fa.&nbsp;Erzquell&nbsp;Brauerei, завод по изготовлению зап.частей для самолетов и автомобилей&nbsp;OTTO&nbsp;FUCHS,&nbsp;научно-исследовательский
  центр по альтернативным источникам энергии&nbsp;Metabolon.</p>
<p>Культурная программа включала себя изучение достопримечательностей г. Гуммерсбах, г. Кельн, г. Бонн (Германия), Шевеннинген (Голландия); гуляние по набережной р.Рена (Кельн, Германия), Северное море (Голландия).</p>
<p>На конкурной основе представителями ДААД были отобраны 10 студентов направления «Телематика». Занятия проводились согласно расписанию.</p>
<p>Участники летней школы:</p>
<ol>
  <li>Алмереков Ильяс</li>
  <li>Базарбаев Шумкарбек</li>
  <li>Казыбеков Азим</li>
  <li>Нурлан Иса</li>
  <li>Текебаев Нурсултан</li>
  <li>Тѳлѳнбеков Данил</li>
  <li>Усубакунова Гульжамал</li>
  <li>Усенова Гульзана</li>
  <li>Верещагина Анастасия</li>
  <li>Замирбеков Эмилбек</li>
</ol>
<p><img class="" src="server/images/gallery/sommerschule_De2017/IMG_20170718_131901.jpg" alt="" width="670" height="376"></p>
<p><img class="" src="server/images/gallery/sommerschule_De2017/IMG_20170717_100357.jpg" alt="" width="662" height="372"></p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('15.09.2017'),
          'updated_at' => Carbon::parse('15.09.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => '4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln',
          'slug' => '4-stipendii-dlya-studentov-i-1-stipendiya-dlya-prepodavatelya-nauchnogo-rabotnika-dlya-uchebnogo-nauchnogo-prebyvaniya-v-th-koln-ru',
          'description' => '4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln, Гуммерсбах 2017',
          'content' => <<<HERE
<p><strong>Программа: Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)</strong></p>
<p><strong>Проект: Немецкоязычные учебные направления (DSG) Телематика Кыргызско- Германского Технического Института (КГТИ) при КГТУ им. Раззакова</strong></p>
<p><strong>Координатор: Technische Hochschule Köln</strong></p>
<p>&nbsp;</p>
<h2 style="text-align: center;">4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln, Гуммерсбах 2017 &nbsp;</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong> Стипендия</strong>: Стипендия включает в себя транспортные расходы и общую сумму на проживание и питание. Время пребывания: 1 месяц в зимнем семестре.</p>
<p><strong>Требования</strong>:</p>
<ul>
  <li>Обучение со 2-го по 4-й курс бакалавра на специальностях «Телематика» (для студентов)</li>
  <li>Языковой сертификат (минимум В1), либо хорошие знания английского языка</li>
</ul>
<p><strong>Условия/Ожидания</strong>: Выдающиеся профессиональные, языковые, культурные и личностные качества для учебного пребывания за границей</p>
<p><strong>Требуемые документы</strong>: Процесс отбора:</p>
<p>1. Сдача нижеследующих документов координатору проекта до 28-августа 2017года: &nbsp;</p>
<ul>
  <li>Резюме с полными контактными данными (памятка: <a href="http://www.daad.kg/ru/20176/index.html)">http://www.daad.kg/ru/20176/index.html) </a></li>
  <li>Обоснование или мотивационное письмо (1 страница)</li>
  <li>Языковой сертификат</li>
</ul>
<p>2. Предварительный отбор: формальное исключение кандидата при недостающих документах или при оценке качества поданных документов отборочной комиссией</p>
<p>3. Интервью с отборочной комиссией в начале сентября 2017-года</p>
<p>&nbsp;</p>
<p>Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 28-августа 2017года проектному координатору DSG в КГТИ, госпоже Мээрим Абдыласовой на электронную почту daad-kgti@mail.ru.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => '4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln',
          'slug' => '4-stipendii-dlya-studentov-i-1-stipendiya-dlya-prepodavatelya-nauchnogo-rabotnika-dlya-uchebnogo-nauchnogo-prebyvaniya-v-th-koln-de',
          'description' => '4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln, Гуммерсбах 2017',
          'content' => <<<HERE
<p><strong>Программа: Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)</strong></p>
<p><strong>Проект: Немецкоязычные учебные направления (DSG) Телематика Кыргызско- Германского Технического Института (КГТИ) при КГТУ им. Раззакова</strong></p>
<p><strong>Координатор: Technische Hochschule Köln</strong></p>
<p>&nbsp;</p>
<h2 style="text-align: center;">4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln, Гуммерсбах 2017 &nbsp;</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong> Стипендия</strong>: Стипендия включает в себя транспортные расходы и общую сумму на проживание и питание. Время пребывания: 1 месяц в зимнем семестре.</p>
<p><strong>Требования</strong>:</p>
<ul>
  <li>Обучение со 2-го по 4-й курс бакалавра на специальностях «Телематика» (для студентов)</li>
  <li>Языковой сертификат (минимум В1), либо хорошие знания английского языка</li>
</ul>
<p><strong>Условия/Ожидания</strong>: Выдающиеся профессиональные, языковые, культурные и личностные качества для учебного пребывания за границей</p>
<p><strong>Требуемые документы</strong>: Процесс отбора:</p>
<p>1. Сдача нижеследующих документов координатору проекта до 28-августа 2017года: &nbsp;</p>
<ul>
  <li>Резюме с полными контактными данными (памятка: <a href="http://www.daad.kg/ru/20176/index.html)">http://www.daad.kg/ru/20176/index.html) </a></li>
  <li>Обоснование или мотивационное письмо (1 страница)</li>
  <li>Языковой сертификат</li>
</ul>
<p>2. Предварительный отбор: формальное исключение кандидата при недостающих документах или при оценке качества поданных документов отборочной комиссией</p>
<p>3. Интервью с отборочной комиссией в начале сентября 2017-года</p>
<p>&nbsp;</p>
<p>Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 28-августа 2017года проектному координатору DSG в КГТИ, госпоже Мээрим Абдыласовой на электронную почту daad-kgti@mail.ru.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => '4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln',
          'slug' => '4-stipendii-dlya-studentov-i-1-stipendiya-dlya-prepodavatelya-nauchnogo-rabotnika-dlya-uchebnogo-nauchnogo-prebyvaniya-v-th-koln-kg',
          'description' => '4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln, Гуммерсбах 2017',
          'content' => <<<HERE
<p><strong>Программа: Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)</strong></p>
<p><strong>Проект: Немецкоязычные учебные направления (DSG) Телематика Кыргызско- Германского Технического Института (КГТИ) при КГТУ им. Раззакова</strong></p>
<p><strong>Координатор: Technische Hochschule Köln</strong></p>
<p>&nbsp;</p>
<h2 style="text-align: center;">4 стипендии для студентов и 1 стипендия для преподавателя/научного работника для учебного/научного пребывания в TH Köln, Гуммерсбах 2017 &nbsp;</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong> Стипендия</strong>: Стипендия включает в себя транспортные расходы и общую сумму на проживание и питание. Время пребывания: 1 месяц в зимнем семестре.</p>
<p><strong>Требования</strong>:</p>
<ul>
  <li>Обучение со 2-го по 4-й курс бакалавра на специальностях «Телематика» (для студентов)</li>
  <li>Языковой сертификат (минимум В1), либо хорошие знания английского языка</li>
</ul>
<p><strong>Условия/Ожидания</strong>: Выдающиеся профессиональные, языковые, культурные и личностные качества для учебного пребывания за границей</p>
<p><strong>Требуемые документы</strong>: Процесс отбора:</p>
<p>1. Сдача нижеследующих документов координатору проекта до 28-августа 2017года: &nbsp;</p>
<ul>
  <li>Резюме с полными контактными данными (памятка: <a href="http://www.daad.kg/ru/20176/index.html)">http://www.daad.kg/ru/20176/index.html) </a></li>
  <li>Обоснование или мотивационное письмо (1 страница)</li>
  <li>Языковой сертификат</li>
</ul>
<p>2. Предварительный отбор: формальное исключение кандидата при недостающих документах или при оценке качества поданных документов отборочной комиссией</p>
<p>3. Интервью с отборочной комиссией в начале сентября 2017-года</p>
<p>&nbsp;</p>
<p>Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 28-августа 2017года проектному координатору DSG в КГТИ, госпоже Мээрим Абдыласовой на электронную почту daad-kgti@mail.ru.</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('15.09.2017'),
          'updated_at' => Carbon::parse('15.09.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Участники зимней школы в Германии',
          'slug' => 'uchastniki-zimney-shkoly-v-germanii-ru',
          'description' => '7 сентября 2017 г. состоялся отбор студентов и преподавателей кафедры «Телематика»',
          'content' => <<<HERE
<p>7 сентября 2017 г. состоялся отбор студентов и преподавателей кафедры «Телематика» для участия в Зимней школы в Германии.</p>
<p>Конкурсная комиссия в составе: проф. М.Бонгарс (Германия,&nbsp;THK), Ив-Оливер Таушвиц (ДААД), М.Абдуллаева (ДААД), зав.каф. «Телематика» Кошоева Б.Б. отобрала следующих участников:</p>
<ol>
  <li>Бакалова Айгузель Талайбековна (преподаватель)</li>
  <li>Ешимбекова Рахат Сейтековна (преподаватель)</li>
  <li>Верещагина Анастасия (студентка )</li>
  <li>Усекеева Мээрим (студентка)</li>
  <li>Мамбетисаев Санжар (магистр)</li>
  <li>Аязбеков Темирлан (студент)</li>
</ol>
<p>Зимняя школа состоится с 5 ноября по 30 ноября 2017г в Кельнском техническом университете (Германия).</p>
<p>Команда кафедры «Телематика» поздравляет победителей конкурса!</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Участники зимней школы в Германии',
          'slug' => 'uchastniki-zimney-shkoly-v-germanii-de',
          'description' => '7 сентября 2017 г. состоялся отбор студентов и преподавателей кафедры «Телематика»',
          'content' => <<<HERE
<p>7 сентября 2017 г. состоялся отбор студентов и преподавателей кафедры «Телематика» для участия в Зимней школы в Германии.</p>
<p>Конкурсная комиссия в составе: проф. М.Бонгарс (Германия,&nbsp;THK), Ив-Оливер Таушвиц (ДААД), М.Абдуллаева (ДААД), зав.каф. «Телематика» Кошоева Б.Б. отобрала следующих участников:</p>
<ol>
  <li>Бакалова Айгузель Талайбековна (преподаватель)</li>
  <li>Ешимбекова Рахат Сейтековна (преподаватель)</li>
  <li>Верещагина Анастасия (студентка )</li>
  <li>Усекеева Мээрим (студентка)</li>
  <li>Мамбетисаев Санжар (магистр)</li>
  <li>Аязбеков Темирлан (студент)</li>
</ol>
<p>Зимняя школа состоится с 5 ноября по 30 ноября 2017г в Кельнском техническом университете (Германия).</p>
<p>Команда кафедры «Телематика» поздравляет победителей конкурса!</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Участники зимней школы в Германии',
          'slug' => 'uchastniki-zimney-shkoly-v-germanii-kg',
          'description' => '7 сентября 2017 г. состоялся отбор студентов и преподавателей кафедры «Телематика»',
          'content' => <<<HERE
<p>7 сентября 2017 г. состоялся отбор студентов и преподавателей кафедры «Телематика» для участия в Зимней школы в Германии.</p>
<p>Конкурсная комиссия в составе: проф. М.Бонгарс (Германия,&nbsp;THK), Ив-Оливер Таушвиц (ДААД), М.Абдуллаева (ДААД), зав.каф. «Телематика» Кошоева Б.Б. отобрала следующих участников:</p>
<ol>
  <li>Бакалова Айгузель Талайбековна (преподаватель)</li>
  <li>Ешимбекова Рахат Сейтековна (преподаватель)</li>
  <li>Верещагина Анастасия (студентка )</li>
  <li>Усекеева Мээрим (студентка)</li>
  <li>Мамбетисаев Санжар (магистр)</li>
  <li>Аязбеков Темирлан (студент)</li>
</ol>
<p>Зимняя школа состоится с 5 ноября по 30 ноября 2017г в Кельнском техническом университете (Германия).</p>
<p>Команда кафедры «Телематика» поздравляет победителей конкурса!</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('01.10.2017'),
          'updated_at' => Carbon::parse('01.10.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Договор об организации Регионального Учебного центра (РУЦ)',
          'slug' => 'dogovor-ob-organizacii-regionalnogo-uchebnogo-centra-ruc-ru',
          'description' => 'Подписан договор №12/09 об организации Регионального Учебного центра (РУЦ)',
          'content' => <<<HERE
<p>23 сентября 2017г подписан договор&nbsp;№12/09&nbsp;об организации Регионального Учебного центра (РУЦ) между компанией ОВЕН (Россия) и Кыргызским государственным техническим университетом им.&nbsp;И.&nbsp;Раззакова (Кыргызстан).</p>
<p>Компания Овен - ведущий российский разработчик и производитель контрольно – измерительных приборов и средств промышленной автоматизации. Цель программы курсов РУЦ - это подготовка кадров по промышленной автоматизации.&nbsp;Слушателями курсов могут являться
  работники производственных предприятий, работники и учащиеся учебных заведений.</p>
<p>Обучение проводится в очной или заочной (дистанционной) форме с предоставлением необходимых методических пособий и справочных материалов. Слушатели, успешно освоившие программу курса, получают соответствующее свидетельство о повышении квалификации государственного
  образца с указанием наименования программы и объема курса.</p>
<p>Обучение в РУЦ проводится по учебным программам, предложенным ОВЕН.</p>
<p>Курсы проводятся на базе лаборатории по промышленной автоматизации кафедры «Телематика» КГТУ им.И.Раззакова.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Vertrag über die Organisation des Regionalen Ausbildungszentrums',
          'slug' => 'vertrag-uber-die-organisation-des-regionalen-ausbildungszentrums-de',
          'description' => 'Vertrag über die Organisation des Regionalen Ausbildungszentrums',
          'content' => <<<HERE
<p>23. September 2017 Jahr wurde ein Vertrag Nummer 12/09 von die Organisation des Regionalen Ausbildungszentrums (RAZ) zwischen der Firma ARIES (Russland) und der Kirgisischen Staatlichen Technischen Universität. Razzakov (Kirgisien) unterzeichnet.</p>
<p>Das Unternehmen OVEN - der führende russische Entwickler und Hersteller von Instrumentierung und der industriellen Automation. Das Ziel des Programms der Kurse ist eine Ausbildung in der industriellen Automatisierung. Kursteilnehmern konnen ein Arbeitnehmer
  von Produktionsunternehmen, Mitarbeiter und Schüler von Bildungseinrichtungen sein.</p>
<p>Die Ausbildung wird in Vollzeit oder Teilzeit (fern -) Form mit der Bereitstellung der erforderlichen Lehrmittel und Informationsmaterialien. Die Zuhörer ,die erfolgreich die Kursen erhalten, bekommen ein entsprechendes Zertifikat über die Fortbildung
  des staatlichen Musters mit Angabe der Bezeichnung des Programms und dem Umfang des Kurses.</p>
<p>Ausbildung in RAZ durchgeführt Studiengänge, die von OVEN vorschlägt.</p>
<p>Die Kurse werden auf der Basis von Labor-und Automatisierungs-Abteilung «Telematik» KSTU namens. Razzakov geführt.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Договор об организации Регионального Учебного центра (РУЦ)',
          'slug' => 'dogovor-ob-organizacii-regionalnogo-uchebnogo-centra-ruc-kg',
          'description' => 'Подписан договор №12/09 об организации Регионального Учебного центра (РУЦ)',
          'content' => <<<HERE
<p>23 сентября 2017г подписан договор&nbsp;№12/09&nbsp;об организации Регионального Учебного центра (РУЦ) между компанией ОВЕН (Россия) и Кыргызским государственным техническим университетом им.&nbsp;И.&nbsp;Раззакова (Кыргызстан).</p>
<p>Компания Овен - ведущий российский разработчик и производитель контрольно – измерительных приборов и средств промышленной автоматизации. Цель программы курсов РУЦ - это подготовка кадров по промышленной автоматизации.&nbsp;Слушателями курсов могут являться
  работники производственных предприятий, работники и учащиеся учебных заведений.</p>
<p>Обучение проводится в очной или заочной (дистанционной) форме с предоставлением необходимых методических пособий и справочных материалов. Слушатели, успешно освоившие программу курса, получают соответствующее свидетельство о повышении квалификации государственного
  образца с указанием наименования программы и объема курса.</p>
<p>Обучение в РУЦ проводится по учебным программам, предложенным ОВЕН.</p>
<p>Курсы проводятся на базе лаборатории по промышленной автоматизации кафедры «Телематика» КГТУ им.И.Раззакова.</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('19.11.2017'),
          'updated_at' => Carbon::parse('19.11.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Курс "Основы программирования" для студентов 2 курса',
          'slug' => 'kurs-osnovy-programmirovaniya-dlya-studentov-2-kursa-ru',
          'description' => 'Бесплатный курс "Основы программирования" для студентов 2 курса кафедры "Телематика"',
          'content' => <<<HERE
<p>С 22 ноября начинается курс "Основы программирования" для студентов 2 курса кафедры "Телематика". На курсе будет теоретический материал по основам программирования и практические занятия. На практических занятиях вы напишите небольшое веб-приложение на
  языке JavaScript. Будут домашние задания. Цель курса дать студентам основные понятия о программировании в Телематике.</p>
<p>Курс абсолютно бесплатный.</p>
<p>Длительность курса: 2 недели (3 раза в неделю).&nbsp;</p>
<p>Если хотите пройти курс отправьте свою Фамилию, название Группы и Телефон на электронный адрес: tolonbekov@yandex.ru<br>Время и место (аудиторию) сообщим позже.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Курс "Основы программирования" для студентов 2 курса',
          'slug' => 'kurs-osnovy-programmirovaniya-dlya-studentov-2-kursa-de',
          'description' => 'Бесплатный курс "Основы программирования" для студентов 2 курса кафедры "Телематика"',
          'content' => <<<HERE
<p>С 22 ноября начинается курс "Основы программирования" для студентов 2 курса кафедры "Телематика". На курсе будет теоретический материал по основам программирования и практические занятия. На практических занятиях вы напишите небольшое веб-приложение на
  языке JavaScript. Будут домашние задания. Цель курса дать студентам основные понятия о программировании в Телематике.</p>
<p>Курс абсолютно бесплатный.</p>
<p>Длительность курса: 2 недели (3 раза в неделю).&nbsp;</p>
<p>Если хотите пройти курс отправьте свою Фамилию, название Группы и Телефон на электронный адрес: tolonbekov@yandex.ru<br>Время и место (аудиторию) сообщим позже.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Курс "Основы программирования" для студентов 2 курса',
          'slug' => 'kurs-osnovy-programmirovaniya-dlya-studentov-2-kursa-kg',
          'description' => 'Бесплатный курс "Основы программирования" для студентов 2 курса кафедры "Телематика"',
          'content' => <<<HERE
<p>С 22 ноября начинается курс "Основы программирования" для студентов 2 курса кафедры "Телематика". На курсе будет теоретический материал по основам программирования и практические занятия. На практических занятиях вы напишите небольшое веб-приложение на
  языке JavaScript. Будут домашние задания. Цель курса дать студентам основные понятия о программировании в Телематике.</p>
<p>Курс абсолютно бесплатный.</p>
<p>Длительность курса: 2 недели (3 раза в неделю).&nbsp;</p>
<p>Если хотите пройти курс отправьте свою Фамилию, название Группы и Телефон на электронный адрес: tolonbekov@yandex.ru<br>Время и место (аудиторию) сообщим позже.</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('01.12.2017'),
          'updated_at' => Carbon::parse('01.12.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Курсы «Программирование промышленных контроллеров на базе CoDeSys V2.3»',
          'slug' => 'kursy-programmirovanie-promyshlennyh-kontrollerov-na-baze-codesys-v2-3-ru',
          'description' => '«Программирование промышленных контроллеров на базе CoDeSys V2.3»',
          'content' => <<<HERE
<p>С 23 по 27 октября 2017г на базе Регионального учебного центра компании ОВЕН прошли курсы «Программирование промышленных контроллеров на базе&nbsp;CoDeSys&nbsp;V2.3». Слушателями курсов были представители ЗАО «Шоро», ОсОО «АЮ», преподаватели КГТУ. &nbsp;</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_4b04c18b1f9f9b8108fba4274307635a.jpeg" alt="" width="779" height="437"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Kurse "SPS Programmierung mit  CoDeSys V2.3"',
          'slug' => 'kurse-sps-programmierung-mit-codesys-v2-3-de',
          'description' => 'Kurse "SPS Programmierung mit  CoDeSys V2.3"',
          'content' => <<<HERE
<p>Vom 23. Oktober bis 27. Oktober 2017 wurden Kurse "SPS Programmierung mit CoDeSys V2.3" auf der Basis des regionalen Trainingszentrums der Firma OWEN durchgeführt.Die Kurse wurden von Vertretern der AG " Shoro" , der GmbH "AYU" und von Lehrer der KSTU
  besucht.</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_4b04c18b1f9f9b8108fba4274307635a.jpeg" alt="" width="820" height="461"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Курсы «Программирование промышленных контроллеров на базе CoDeSys V2.3»',
          'slug' => 'kursy-programmirovanie-promyshlennyh-kontrollerov-na-baze-codesys-v2-3-kg',
          'description' => '«Программирование промышленных контроллеров на базе CoDeSys V2.3»',
          'content' => <<<HERE
<p>С 23 по 27 октября 2017г на базе Регионального учебного центра компании ОВЕН прошли курсы «Программирование промышленных контроллеров на базе&nbsp;CoDeSys&nbsp;V2.3». Слушателями курсов были представители ЗАО «Шоро», ОсОО «АЮ», преподаватели КГТУ. &nbsp;</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_4b04c18b1f9f9b8108fba4274307635a.jpeg" alt="" width="779" height="437"></p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('22.12.2017'),
          'updated_at' => Carbon::parse('22.12.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Зимняя школа “Deutsch und Telematik” в Нарыне',
          'slug' => 'zimnyaya-shkola-deutsch-und-telematik-v-naryne-ru',
          'description' => 'C 4 по 9 декабря 2017г на базе Нарынского государственного университета им. С. Нааматова была проведена третья Зимняя школа “Deutsch und Telematik”',
          'content' => <<<HERE
<p><img class="" src="server/images/gallery/news_e36843bfa13d9e5f592aaa49c654bf51.jpeg&#9;Удалить" alt=""><img class="" src="server/images/gallery/news_3c7b6df6be4349b1fd856afb05e834a5.jpeg" alt="" width="800" height="449"></p>
<p>Команда кафедры «Телематика» Кыргызского государственного технического университета им.И.Раззакова при финансовой поддержке DAAD с 4 по 9 декабря 2017г на базе Нарынского государственного университета им. С. Нааматова провела третью Зимнюю школу “Deutsch
  und Telematik”. Цель этой школы вызвать у школьников интерес к точным наукам и современной технике. ГорОНО г.Нарын организовали группу школьников &nbsp;9 – 11 классов (24 шк) из школ: №4, 7, 8, 10, лицея №2 им. В.П.Чкалова, колледжа ИАЭК.</p>
<p>Во время Зимней школы провели занятия по немецкому языку, базовый курс по электронике и микропроцессорной технике.</p>
<p>Программа курсов:</p>
<table style="margin-left: auto; margin-right: auto;" border="1" width="623" cellspacing="5" cellpadding="5">
  <tbody>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>Дата</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>Мероприятие</p>
      </td>
    </tr>
    <tr style="height: 83px;">
      <td style="height: 83px;" width="98">
        <p>04.12.2017</p>
      </td>
      <td style="height: 83px;" width="495">
        <p>«Единицы измерения и измерительные приборы»</p>
        <p>« Источники электричества»</p>
        <p>« Представление о полупроводниковых элементах».</p>
      </td>
    </tr>
    <tr style="height: 59px;">
      <td style="height: 59px;" width="98">
        <p>05.12.2017</p>
      </td>
      <td style="height: 59px;" width="495">
        <p>«Представление о микросхемах и микроконтроллерах, двоичный код,Arduino».</p>
        <p>Программирование. Датчики</p>
      </td>
    </tr>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>06.12.2017</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>3D&nbsp;–моделирование. Пайка.</p>
      </td>
    </tr>
    <tr style="height: 59px;">
      <td style="height: 59px;" width="98">
        <p>07.12.2017-</p>
        <p>08.12.2017</p>
      </td>
      <td style="height: 59px;" width="495">
        <p><strong>Разработка проектов</strong></p>
      </td>
    </tr>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>09.12.2017</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>Закрытие школы: презентация проектов, вручение сертификатов</p>
      </td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;<img class="" src="server/images/gallery/news_bf799438aeedd146e1e0d88fd2ecc86b.jpeg" alt="" width="800" height="449"></p>
<p>На основе полученных знаний ребята своими руками разработали следующие проекты:</p>
<p>&nbsp;</p>
<ol>
  <li><strong>Автоматическое управление микроклиматом на плате&nbsp;</strong><strong>Arduino</strong>: Жолдошбеков Бекзат, Токталиев Эрбол, Нарматов Эрлан, Тойгонбаев Акыл</li>
  <li><strong>Универсальная сигнализация на&nbsp;</strong><strong>Arduino</strong>: Шарипов Андрей, Аскаров Дастан, Алтынбек уулу Адилет, Жумакадыров Санжар</li>
  <li><strong>Умная розетка</strong>: Уланбек уулу Даниэль, Тынчтыбек уулу Доолот, Турганбаев Адилет</li>
  <li><strong>Облако</strong>: Талайбек уулу Жооломан, Анарбеков Айтегин, Замирбекова Айгерим</li>
  <li><strong>Снежинка, Звезда</strong>: Токталы кызы Чынар</li>
  <li><strong>Управление сервомотором</strong>: Уланбеков Куштар, Курманбаев Чынгыз</li>
  <li><strong>Кодовый замок:&nbsp;</strong>Бекежанов Чынгыз,<strong>&nbsp;</strong>Бейшенбеков Метео, Сабирдинов Бекболсун.</li>
</ol>
<p>&nbsp;<img class="" src="server/images/gallery/news_aea38fc5b0903efbb5b8ed390b8f1537.jpeg" alt="" width="800" height="449"></p>
<p><img class="" src="server/images/gallery/news_365d3b60e9aa2726ec531f3fea97c7ce.jpeg" alt="" width="800" height="449"></p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_4f6c1d8d056c904b1974667cc19d779d.jpeg" alt="" width="800" height="449"></p>
<p>Команда кафедры «Телематика» благодарит ГорОНО г.Нарын и руководство НГУ им. С. Нааматова за помощь&nbsp; в организации Зимней школы “Deutsch und Telematik”.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Winterschule "Deutsch und Telematik" in Naryn.',
          'slug' => 'winterschule-deutsch-und-telematik-in-naryn-de',
          'description' => 'Das Team des Lehrstuhls "Telematik" der KSTU  mit finanzieller Unterstützung des DAAD vom 4. bis 9. Dezember 2017 auf der Basis der Naryn Staatlichen Universität...',
          'content' => <<<HERE
<p><img class="" src="server/images/gallery/news_3c7b6df6be4349b1fd856afb05e834a5.jpeg" alt="" width="800" height="449"></p>
<p>Das Team des Lehrstuhls "Telematik" der KSTU mit finanzieller Unterstützung des DAAD vom 4. bis 9. Dezember 2017 auf der Basis der Naryn Staatlichen Universität führte die dritte Winterschule "Deutsch und Telematik" durch. Das Ziel dieser Schule ist es,
  Schüler zu ermutigen, sich für exakte Wissenschaften und moderne Technologie zu interessieren.<br><br>Stadtabteilung der öffentlichen Bildung von Naryn hat eine Gruppe von Schülern von der 9. bis zur 11. Klasse (24 Schulkinder) von den Schulen gesammelt:
  №4, 7, 8, 10, Tschhkalov Lyzeum №2 , das College der IAEK.</p>
<p>Während der Winterschule wurden die Kurse zum Elekronik, zum Mikroprozessortechnik und Deutschunterrichte durschgeführt.</p>
<p>Kursprogramm:</p>
<table style="margin-left: auto; margin-right: auto;" border="1" width="623" cellspacing="5" cellpadding="5">
  <tbody>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>Datum</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>Veranstaltung</p>
      </td>
    </tr>
    <tr style="height: 83px;">
      <td style="height: 83px;" width="98">
        <p>04.12.2017</p>
      </td>
      <td style="height: 83px;" width="495">
        <p>"Maßeinheiten und Messgeräte"</p>
        <p>"Stromquellen"</p>
        <p>"Die Idee von Halbleiterelementen"</p>
      </td>
    </tr>
    <tr style="height: 59px;">
      <td style="height: 59px;" width="98">
        <p>05.12.2017</p>
      </td>
      <td style="height: 59px;" width="495">
        <p>"Die Einführung über Mikrochips und Mikrocontrollers, Binärcode, Arduino"</p>
        <p>"Programmierung. Sensoren"</p>
      </td>
    </tr>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>06.12.2017</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>3D-Modellierung. Löten.</p>
      </td>
    </tr>
    <tr style="height: 59px;">
      <td style="height: 59px;" width="98">
        <p>07.12.2017-</p>
        <p>08.12.2017</p>
      </td>
      <td style="height: 59px;" width="495">
        <p><strong>Entwicklung von Projekten</strong></p>
      </td>
    </tr>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>09.12.2017</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>Präsentation der Ergebnisse , Zertifikaten</p>
      </td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;<img class="" src="server/images/gallery/news_bf799438aeedd146e1e0d88fd2ecc86b.jpeg" alt="" width="800" height="449"></p>
<p>Auf der Grundlage des gewonnenen Wissens entwickelten die Schlüler folgende Projekte mit eigenen Händen:</p>
<p>&nbsp;</p>
<ol>
  <li><strong>Automatische Kontrolle des Mikroklimas</strong>: Zholdoshbekov Bekzat, Toktaliev Erbol, Narmatov Erlan, Tojgonbaev Akyl</li>
  <li><strong>Universal-Alarmsystem</strong>: Sharipov Andrej, Askarov Dastan, Altynbek uulu Adilet, Zhumakadyrov Sanzhar</li>
  <li><strong>Intelligente Steckdose</strong>: Ulanbek uulu Daniel, Tynchtybek uulu Doolot, Turganbaev Adilet</li>
  <li><strong>Intelligente Lampe "Cloud"</strong>: Talajbek uulu Zhooloman, Anarbekov Ajtegin, Zamirbekova Ajgerim</li>
  <li><strong>Equalizer basierend auf LEDs</strong>: Toktaly kyzy Chynar</li>
  <li><strong>Servomotorsteuerung</strong>: Ulanbekov Kushtar, Kurmanbaev Chyngyz</li>
  <li><strong>Zahlenschloss:&nbsp;&nbsp;</strong>Bekezhanov Chyngyz, Bejshenbekov Meteo, Sabirdinov Bekbolsun.</li>
</ol>
<p>&nbsp;<img class="" src="server/images/gallery/news_aea38fc5b0903efbb5b8ed390b8f1537.jpeg" alt="" width="800" height="449"></p>
<p><img class="" src="server/images/gallery/news_365d3b60e9aa2726ec531f3fea97c7ce.jpeg" alt="" width="800" height="449"></p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_4f6c1d8d056c904b1974667cc19d779d.jpeg" alt="" width="800" height="449"></p>
<p>Das Team der&nbsp;Lehrstuhl "Telematik" dankt GORONO Naryn und der Leitung der NSU. S. Naamatova um Hilfe bei der Organisation der Winterschule "Deutsch und Telematik".</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Зимняя школа “Deutsch und Telematik” в Нарыне',
          'slug' => 'zimnyaya-shkola-deutsch-und-telematik-v-naryne-kg',
          'description' => 'C 4 по 9 декабря 2017г на базе Нарынского государственного университета им. С. Нааматова была проведена третья Зимняя школа “Deutsch und Telematik”',
          'content' => <<<HERE
<p><img class="" src="server/images/gallery/news_e36843bfa13d9e5f592aaa49c654bf51.jpeg&#9;Удалить" alt=""><img class="" src="server/images/gallery/news_3c7b6df6be4349b1fd856afb05e834a5.jpeg" alt="" width="800" height="449"></p>
<p>Команда кафедры «Телематика» Кыргызского государственного технического университета им.И.Раззакова при финансовой поддержке DAAD с 4 по 9 декабря 2017г на базе Нарынского государственного университета им. С. Нааматова провела третью Зимнюю школу “Deutsch
  und Telematik”. Цель этой школы вызвать у школьников интерес к точным наукам и современной технике. ГорОНО г.Нарын организовали группу школьников &nbsp;9 – 11 классов (24 шк) из школ: №4, 7, 8, 10, лицея №2 им. В.П.Чкалова, колледжа ИАЭК.</p>
<p>Во время Зимней школы провели занятия по немецкому языку, базовый курс по электронике и микропроцессорной технике.</p>
<p>Программа курсов:</p>
<table style="margin-left: auto; margin-right: auto;" border="1" width="623" cellspacing="5" cellpadding="5">
  <tbody>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>Дата</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>Мероприятие</p>
      </td>
    </tr>
    <tr style="height: 83px;">
      <td style="height: 83px;" width="98">
        <p>04.12.2017</p>
      </td>
      <td style="height: 83px;" width="495">
        <p>«Единицы измерения и измерительные приборы»</p>
        <p>« Источники электричества»</p>
        <p>« Представление о полупроводниковых элементах».</p>
      </td>
    </tr>
    <tr style="height: 59px;">
      <td style="height: 59px;" width="98">
        <p>05.12.2017</p>
      </td>
      <td style="height: 59px;" width="495">
        <p>«Представление о микросхемах и микроконтроллерах, двоичный код,Arduino».</p>
        <p>Программирование. Датчики</p>
      </td>
    </tr>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>06.12.2017</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>3D&nbsp;–моделирование. Пайка.</p>
      </td>
    </tr>
    <tr style="height: 59px;">
      <td style="height: 59px;" width="98">
        <p>07.12.2017-</p>
        <p>08.12.2017</p>
      </td>
      <td style="height: 59px;" width="495">
        <p><strong>Разработка проектов</strong></p>
      </td>
    </tr>
    <tr style="height: 35px;">
      <td style="height: 35px;" width="98">
        <p>09.12.2017</p>
      </td>
      <td style="height: 35px;" width="495">
        <p>Закрытие школы: презентация проектов, вручение сертификатов</p>
      </td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;<img class="" src="server/images/gallery/news_bf799438aeedd146e1e0d88fd2ecc86b.jpeg" alt="" width="800" height="449"></p>
<p>На основе полученных знаний ребята своими руками разработали следующие проекты:</p>
<p>&nbsp;</p>
<ol>
  <li><strong>Автоматическое управление микроклиматом на плате&nbsp;</strong><strong>Arduino</strong>: Жолдошбеков Бекзат, Токталиев Эрбол, Нарматов Эрлан, Тойгонбаев Акыл</li>
  <li><strong>Универсальная сигнализация на&nbsp;</strong><strong>Arduino</strong>: Шарипов Андрей, Аскаров Дастан, Алтынбек уулу Адилет, Жумакадыров Санжар</li>
  <li><strong>Умная розетка</strong>: Уланбек уулу Даниэль, Тынчтыбек уулу Доолот, Турганбаев Адилет</li>
  <li><strong>Облако</strong>: Талайбек уулу Жооломан, Анарбеков Айтегин, Замирбекова Айгерим</li>
  <li><strong>Снежинка, Звезда</strong>: Токталы кызы Чынар</li>
  <li><strong>Управление сервомотором</strong>: Уланбеков Куштар, Курманбаев Чынгыз</li>
  <li><strong>Кодовый замок:&nbsp;</strong>Бекежанов Чынгыз,<strong>&nbsp;</strong>Бейшенбеков Метео, Сабирдинов Бекболсун.</li>
</ol>
<p>&nbsp;<img class="" src="server/images/gallery/news_aea38fc5b0903efbb5b8ed390b8f1537.jpeg" alt="" width="800" height="449"></p>
<p><img class="" src="server/images/gallery/news_365d3b60e9aa2726ec531f3fea97c7ce.jpeg" alt="" width="800" height="449"></p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_4f6c1d8d056c904b1974667cc19d779d.jpeg" alt="" width="800" height="449"></p>
<p>Команда кафедры «Телематика» благодарит ГорОНО г.Нарын и руководство НГУ им. С. Нааматова за помощь&nbsp; в организации Зимней школы “Deutsch und Telematik”.</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('22.12.2017'),
          'updated_at' => Carbon::parse('22.12.2017')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН',
          'slug' => 'kursy-po-promyshlennoy-avtomatizacii-na-baze-regionalnogo-uchebnogo-centra-kompanii-oven-ru',
          'description' => 'Кафедра «Телематика» объявляет набор слушателей',
          'content' => <<<HERE
<p>Кафедра «Телематика» объявляет набор слушателей на курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН:</p>
<p>С 08.01.2018 по 12.01.2018г –&nbsp;ПЛК1хх базовый курс (программирование в среде CODESYS V2.3)</p>
<p>С 15.01.2018 по 18.2017 г - ПЛК1хх продвинутый курс (программирование в среде CODESYS V2.3).</p>
<p>&nbsp;</p>
<p>Справки по телефону: 0551779422, 0312491844</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Kurse zur industriellen Automatisierung auf der Basis des regionalen Schulungszentrums von OWEN',
          'slug' => 'kurse-zur-industriellen-automatisierung-auf-der-basis-des-regionalen-schulungszentrums-von-owen-de',
          'description' => 'Der Lehrstuhl bietet Kurse zur industriellen Automatisierung auf der Basis...',
          'content' => <<<HERE
<p>Der Lehrstuhl bietet Kurse zur industriellen Automatisierung auf der Basis des regionalen Schulungszentrums der Firma OWEN an:<br><br><br>Vom 08.01.2018 bis zum 01.12.2018 - Grundkurs PLC1xx (Programmierung in CODESYS V2.3 )<br><br>Vom 15.01.2018 bis
  18.2018 - Fortgeschrittenenkurs PLC1xx (Programmierung in CODESYS V2.3 ).<br><br><br> Informationen per Telefon: 0551779422, 0312491844</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН',
          'slug' => 'kursy-po-promyshlennoy-avtomatizacii-na-baze-regionalnogo-uchebnogo-centra-kompanii-oven-kg',
          'description' => 'Кафедра «Телематика» объявляет набор слушателей',
          'content' => <<<HERE
<p>Кафедра «Телематика» объявляет набор слушателей на курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН:</p>
<p>С 08.01.2018 по 12.01.2018г –&nbsp;ПЛК1хх базовый курс (программирование в среде CODESYS V2.3)</p>
<p>С 15.01.2018 по 18.2017 г - ПЛК1хх продвинутый курс (программирование в среде CODESYS V2.3).</p>
<p>&nbsp;</p>
<p>Справки по телефону: 0551779422, 0312491844</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('02.02.2018'),
          'updated_at' => Carbon::parse('02.02.2018')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Курсы «Программирование промышленных контроллеров на базе CoDeSys V2.3» (РУЦ)',
          'slug' => 'kursy-programmirovanie-promyshlennyh-kontrollerov-na-baze-codesys-v2-3-ruc-ru',
          'description' => 'С 8 января по 12 января 2018 г. в Региональном учебном центре (РУЦ)',
          'content' => <<<HERE
<p>С 8 января по 12 января 2018 г. в Региональном учебном центре (РУЦ) компании ОВЕН на базе кафедре «Телематика» при КГТУ прошли курсы&nbsp;«Программирование промышленных контроллеров на базе&nbsp;CoDeSys&nbsp;V2.3». Слушателями курсов были представители
  ОсОО «Нуристан», преподаватели и инженера КГТУ. &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_ac487c1866b9021f4c33bc92e15d5c3e.png" alt="" width="790" height="436"></p>
<p>&nbsp;</p>
<p>С 15 января 2018 по 18 января 2018 г&nbsp;в РУЦ компании ОВЕН на базе кафедре «Телематика» при КГТУ прошли курсы «ПЛК1хх продвинутый курс (программирование в среде CODESYS V5.3)». Лектор курсов: Исполнительный директор ОсОО «Автоматизация» Сергей Романов.
  Слушателями курсов были преподаватели, магистры и студенты кафедры «Телематика». &nbsp;</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_9aacb5efa6130c5de5e389a316bd6997.png" alt="" width="792" height="481"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Курсы «Программирование промышленных контроллеров на базе CoDeSys V2.3» (РУЦ)',
          'slug' => 'kursy-programmirovanie-promyshlennyh-kontrollerov-na-baze-codesys-v2-3-ruc-de',
          'description' => 'С 8 января по 12 января 2018 г. в Региональном учебном центре (РУЦ)',
          'content' => <<<HERE
<p>С 8 января по 12 января 2018 г. в Региональном учебном центре (РУЦ) компании ОВЕН на базе кафедре «Телематика» при КГТУ прошли курсы&nbsp;«Программирование промышленных контроллеров на базе&nbsp;CoDeSys&nbsp;V2.3». Слушателями курсов были представители
  ОсОО «Нуристан», преподаватели и инженера КГТУ. &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_ac487c1866b9021f4c33bc92e15d5c3e.png" alt="" width="790" height="436"></p>
<p>&nbsp;</p>
<p>С 15 января 2018 по 18 января 2018 г&nbsp;в РУЦ компании ОВЕН на базе кафедре «Телематика» при КГТУ прошли курсы «ПЛК1хх продвинутый курс (программирование в среде CODESYS V5.3)». Лектор курсов: Исполнительный директор ОсОО «Автоматизация» Сергей Романов.
  Слушателями курсов были преподаватели, магистры и студенты кафедры «Телематика». &nbsp;</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_9aacb5efa6130c5de5e389a316bd6997.png" alt="" width="792" height="481"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Курсы «Программирование промышленных контроллеров на базе CoDeSys V2.3» (РУЦ)',
          'slug' => 'kursy-programmirovanie-promyshlennyh-kontrollerov-na-baze-codesys-v2-3-ruc-kg',
          'description' => 'С 8 января по 12 января 2018 г. в Региональном учебном центре (РУЦ)',
          'content' => <<<HERE
<p>С 8 января по 12 января 2018 г. в Региональном учебном центре (РУЦ) компании ОВЕН на базе кафедре «Телематика» при КГТУ прошли курсы&nbsp;«Программирование промышленных контроллеров на базе&nbsp;CoDeSys&nbsp;V2.3». Слушателями курсов были представители
  ОсОО «Нуристан», преподаватели и инженера КГТУ. &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_ac487c1866b9021f4c33bc92e15d5c3e.png" alt="" width="790" height="436"></p>
<p>&nbsp;</p>
<p>С 15 января 2018 по 18 января 2018 г&nbsp;в РУЦ компании ОВЕН на базе кафедре «Телематика» при КГТУ прошли курсы «ПЛК1хх продвинутый курс (программирование в среде CODESYS V5.3)». Лектор курсов: Исполнительный директор ОсОО «Автоматизация» Сергей Романов.
  Слушателями курсов были преподаватели, магистры и студенты кафедры «Телематика». &nbsp;</p>
<p>&nbsp;</p>
<p><img class="" src="server/images/gallery/news_9aacb5efa6130c5de5e389a316bd6997.png" alt="" width="792" height="481"></p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('01.03.2018'),
          'updated_at' => Carbon::parse('01.03.2018')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ и открытие весенней школы КГТИ 2018',
          'slug' => 'den-otkrytyh-dverey-i-otkrytie-vesenney-shkoly-kgti-2018-ru',
          'description' => 'Вы узнаете о перспективах обучения в КГТИ, о правилах приема в 2018 году.',
          'content' => <<<HERE
<p>С 12:00 будут работать выставки-презентации всех направлений Кыргызско-Германского Технического Института в БАЗе КГТУ им.И.Раззакова&nbsp;<br><br>Вы узнаете о перспективах обучения в КГТИ, о правилах приема в 2018 году, а также о возможностях обучения, прохождения практик, летних школ в Германии.&nbsp;<br><br>Вас ждет много интересного.&nbsp;<br>Приходите, мы ждем Вас!<br><br>КГТИ - это твое будущее!!!</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ и открытие весенней школы КГТИ 2018',
          'slug' => 'den-otkrytyh-dverey-i-otkrytie-vesenney-shkoly-kgti-2018-de',
          'description' => 'Вы узнаете о перспективах обучения в КГТИ, о правилах приема в 2018 году.',
          'content' => <<<HERE
<p>С 12:00 будут работать выставки-презентации всех направлений Кыргызско-Германского Технического Института в БАЗе КГТУ им.И.Раззакова&nbsp;<br><br>Вы узнаете о перспективах обучения в КГТИ, о правилах приема в 2018 году, а также о возможностях обучения, прохождения практик, летних школ в Германии.&nbsp;<br><br>Вас ждет много интересного.&nbsp;<br>Приходите, мы ждем Вас!<br><br>КГТИ - это твое будущее!!!</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ и открытие весенней школы КГТИ 2018',
          'slug' => 'den-otkrytyh-dverey-i-otkrytie-vesenney-shkoly-kgti-2018-kg',
          'description' => 'Вы узнаете о перспективах обучения в КГТИ, о правилах приема в 2018 году.',
          'content' => <<<HERE
<p>С 12:00 будут работать выставки-презентации всех направлений Кыргызско-Германского Технического Института в БАЗе КГТУ им.И.Раззакова&nbsp;<br><br>Вы узнаете о перспективах обучения в КГТИ, о правилах приема в 2018 году, а также о возможностях обучения, прохождения практик, летних школ в Германии.&nbsp;<br><br>Вас ждет много интересного.&nbsp;<br>Приходите, мы ждем Вас!<br><br>КГТИ - это твое будущее!!!</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('08.03.2018'),
          'updated_at' => Carbon::parse('08.03.2018')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => '10 стипендий для участия в «Автоматизация окружающей среды», Гуммерсбах 2018',
          'slug' => '10-stipendiy-dlya-uchastiya-v-avtomatizaciya-okruzhayushchey-sredy-gummersbah-2018-ru',
          'description' => 'Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 25-марта 2018 года проектному координатору DSG в КГТИ',
          'content' => <<<HERE
<p style="text-align: justify;"><strong>Программа:&nbsp; &nbsp; &nbsp; &nbsp;Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD) </strong></p>
<p style="text-align: justify;"><strong>Проект:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Немецкоязычные учебные направления (DSG) Телематика Кыргызско- Германского Технического Института (КГТИ) при КГТУ им. Раззакова </strong></p>
<p style="text-align: justify;"><strong>Координатор:&nbsp; &nbsp; &nbsp; &nbsp;Technische Hochschule Köln &nbsp;</strong></p>
<h2 style="text-align: center;"><strong>10 стипендий для участия в «Автоматизация окружающей среды», Гуммерсбах 2018</strong></h2>
<p>&nbsp;</p>
<p><strong>Стипендия:</strong></p>
<p>Стипендия включает в себя транспортные расходы (750 €) и общую сумму на проживание и питание (450 €). Двухнедельная летняя школа пройдет с 10-го по 22-е июля 2018 года в Technische Hochschule Köln.</p>
<p><strong>Требования:</strong></p>
<ul>
  <li>&nbsp;Обучение со 2-го по 3-й курс бакалавра на специальностях «Телематика»</li>
  <li>&nbsp;Минимум 18 лет на момент вступления в силу стипендии (к 10-му июля 2017-года)</li>
  <li>&nbsp;Студенты, получавшие данную стипендию ранее, не могут подавать документы повторно</li>
  <li>&nbsp;Языковой сертификат (минимум В1) или справка от учителя о прохождении курса В1 в данный момент.</li>
</ul>
<p><strong>Условия/Ожидания</strong>: Выдающиеся профессиональные, языковые, культурные и личностные качества для учебного пребывания за границей</p>
<p><strong>Требуемые документы:</strong></p>
<p><strong>Процесс отбора:</strong></p>
<p>1. Сдача нижеследующих документов координатору проекта до 25-марта 2018 года:</p>
<ul>
  <li>&nbsp;Резюме с полными контактными данными (памятка: <a href="http://www.daad.kg/ru/20176/index.html)">http://www.daad.kg/ru/20176/index.html) </a></li>
  <li>&nbsp;Обоснование или мотивационное письмо (1 страница) </li>
  <li>&nbsp;Копия и перевод транскрипта (заверенная в деканате)</li>
  <li>&nbsp;Языковой сертификат</li>
  <li>&nbsp;Отсканированный загранпаспорт или справка о том, что вы сдали документы на получение загранпаспорта.</li>
</ul>
<p>2. Предварительный отбор: формальное исключение кандидата при недостающих документах или при оценке качества поданных документов отборочной комиссией</p>
<p>3. Интервью с отборочной комиссией в начале апреля 2018-года Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 25-марта 2018 года проектному координатору DSG в КГТИ, госпоже Мээрим Абдыласовой на электронную
  почту <a href="mailto:daad-kgti@mail.ru.">daad-kgti@mail.ru. </a></p>
<p>Вы можете получить консультацию по четвергам с 09.30 до 13.00</p>
<p>Участие в летней школе самофинансированием невозможно.</p>
<p><em>Prof</em>. Dr. Michael&nbsp;<em>Bongards</em></p>
<p>TH Köln, 02. März 2018 Prof. Dr. Michael Bongards, DSG Projektleiter an der Technischen Hochschule Köln</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => '10 стипендий для участия в «Автоматизация окружающей среды», Гуммерсбах 2018',
          'slug' => '10-stipendiy-dlya-uchastiya-v-avtomatizaciya-okruzhayushchey-sredy-gummersbah-2018-de',
          'description' => 'Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 25-марта 2018 года проектному координатору DSG в КГТИ',
          'content' => <<<HERE
<p style="text-align: justify;"><strong>Программа:&nbsp; &nbsp; &nbsp; &nbsp;Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD) </strong></p>
<p style="text-align: justify;"><strong>Проект:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Немецкоязычные учебные направления (DSG) Телематика Кыргызско- Германского Технического Института (КГТИ) при КГТУ им. Раззакова </strong></p>
<p style="text-align: justify;"><strong>Координатор:&nbsp; &nbsp; &nbsp; &nbsp;Technische Hochschule Köln &nbsp;</strong></p>
<h2 style="text-align: center;"><strong>10 стипендий для участия в «Автоматизация окружающей среды», Гуммерсбах 2018</strong></h2>
<p>&nbsp;</p>
<p><strong>Стипендия:</strong></p>
<p>Стипендия включает в себя транспортные расходы (750 €) и общую сумму на проживание и питание (450 €). Двухнедельная летняя школа пройдет с 10-го по 22-е июля 2018 года в Technische Hochschule Köln.</p>
<p><strong>Требования:</strong></p>
<ul>
  <li>&nbsp;Обучение со 2-го по 3-й курс бакалавра на специальностях «Телематика»</li>
  <li>&nbsp;Минимум 18 лет на момент вступления в силу стипендии (к 10-му июля 2017-года)</li>
  <li>&nbsp;Студенты, получавшие данную стипендию ранее, не могут подавать документы повторно</li>
  <li>&nbsp;Языковой сертификат (минимум В1) или справка от учителя о прохождении курса В1 в данный момент.</li>
</ul>
<p><strong>Условия/Ожидания</strong>: Выдающиеся профессиональные, языковые, культурные и личностные качества для учебного пребывания за границей</p>
<p><strong>Требуемые документы:</strong></p>
<p><strong>Процесс отбора:</strong></p>
<p>1. Сдача нижеследующих документов координатору проекта до 25-марта 2018 года:</p>
<ul>
  <li>&nbsp;Резюме с полными контактными данными (памятка: <a href="http://www.daad.kg/ru/20176/index.html)">http://www.daad.kg/ru/20176/index.html) </a></li>
  <li>&nbsp;Обоснование или мотивационное письмо (1 страница) </li>
  <li>&nbsp;Копия и перевод транскрипта (заверенная в деканате)</li>
  <li>&nbsp;Языковой сертификат</li>
  <li>&nbsp;Отсканированный загранпаспорт или справка о том, что вы сдали документы на получение загранпаспорта.</li>
</ul>
<p>2. Предварительный отбор: формальное исключение кандидата при недостающих документах или при оценке качества поданных документов отборочной комиссией</p>
<p>3. Интервью с отборочной комиссией в начале апреля 2018-года Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 25-марта 2018 года проектному координатору DSG в КГТИ, госпоже Мээрим Абдыласовой на электронную
  почту <a href="mailto:daad-kgti@mail.ru.">daad-kgti@mail.ru. </a></p>
<p>Вы можете получить консультацию по четвергам с 09.30 до 13.00</p>
<p>Участие в летней школе самофинансированием невозможно.</p>
<p><em>Prof</em>. Dr. Michael&nbsp;<em>Bongards</em></p>
<p>TH Köln, 02. März 2018 Prof. Dr. Michael Bongards, DSG Projektleiter an der Technischen Hochschule Köln</p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => '10 стипендий для участия в «Автоматизация окружающей среды», Гуммерсбах 2018',
          'slug' => '10-stipendiy-dlya-uchastiya-v-avtomatizaciya-okruzhayushchey-sredy-gummersbah-2018-kg',
          'description' => 'Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 25-марта 2018 года проектному координатору DSG в КГТИ',
          'content' => <<<HERE
<p style="text-align: justify;"><strong>Программа:&nbsp; &nbsp; &nbsp; &nbsp;Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD) </strong></p>
<p style="text-align: justify;"><strong>Проект:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Немецкоязычные учебные направления (DSG) Телематика Кыргызско- Германского Технического Института (КГТИ) при КГТУ им. Раззакова </strong></p>
<p style="text-align: justify;"><strong>Координатор:&nbsp; &nbsp; &nbsp; &nbsp;Technische Hochschule Köln &nbsp;</strong></p>
<h2 style="text-align: center;"><strong>10 стипендий для участия в «Автоматизация окружающей среды», Гуммерсбах 2018</strong></h2>
<p>&nbsp;</p>
<p><strong>Стипендия:</strong></p>
<p>Стипендия включает в себя транспортные расходы (750 €) и общую сумму на проживание и питание (450 €). Двухнедельная летняя школа пройдет с 10-го по 22-е июля 2018 года в Technische Hochschule Köln.</p>
<p><strong>Требования:</strong></p>
<ul>
  <li>&nbsp;Обучение со 2-го по 3-й курс бакалавра на специальностях «Телематика»</li>
  <li>&nbsp;Минимум 18 лет на момент вступления в силу стипендии (к 10-му июля 2017-года)</li>
  <li>&nbsp;Студенты, получавшие данную стипендию ранее, не могут подавать документы повторно</li>
  <li>&nbsp;Языковой сертификат (минимум В1) или справка от учителя о прохождении курса В1 в данный момент.</li>
</ul>
<p><strong>Условия/Ожидания</strong>: Выдающиеся профессиональные, языковые, культурные и личностные качества для учебного пребывания за границей</p>
<p><strong>Требуемые документы:</strong></p>
<p><strong>Процесс отбора:</strong></p>
<p>1. Сдача нижеследующих документов координатору проекта до 25-марта 2018 года:</p>
<ul>
  <li>&nbsp;Резюме с полными контактными данными (памятка: <a href="http://www.daad.kg/ru/20176/index.html)">http://www.daad.kg/ru/20176/index.html) </a></li>
  <li>&nbsp;Обоснование или мотивационное письмо (1 страница) </li>
  <li>&nbsp;Копия и перевод транскрипта (заверенная в деканате)</li>
  <li>&nbsp;Языковой сертификат</li>
  <li>&nbsp;Отсканированный загранпаспорт или справка о том, что вы сдали документы на получение загранпаспорта.</li>
</ul>
<p>2. Предварительный отбор: формальное исключение кандидата при недостающих документах или при оценке качества поданных документов отборочной комиссией</p>
<p>3. Интервью с отборочной комиссией в начале апреля 2018-года Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 25-марта 2018 года проектному координатору DSG в КГТИ, госпоже Мээрим Абдыласовой на электронную
  почту <a href="mailto:daad-kgti@mail.ru.">daad-kgti@mail.ru. </a></p>
<p>Вы можете получить консультацию по четвергам с 09.30 до 13.00</p>
<p>Участие в летней школе самофинансированием невозможно.</p>
<p><em>Prof</em>. Dr. Michael&nbsp;<em>Bongards</em></p>
<p>TH Köln, 02. März 2018 Prof. Dr. Michael Bongards, DSG Projektleiter an der Technischen Hochschule Köln</p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('21.04.2018'),
          'updated_at' => Carbon::parse('21.04.2018')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => '10 однократных стипендий «Sur Place» для студентов направления Телематика',
          'slug' => '10-odnokratnyh-stipendiy-sur-place-dlya-studentov-napravleniya-telematika-ru',
          'description' => 'Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)',
          'content' => <<<HERE
<div style="padding-left: 30px;"><strong>Программа</strong>: Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)</div>
<div style="padding-left: 30px;"><strong>Проект</strong>: Немецкоязычные учебные направления (DSG) Телематика Кыргызско-Германского Технического Института (КГТИ) при КГТУ им. Раззакова</div>
<div style="padding-left: 30px;"><strong>Координатор</strong>: Technische Hochschule Köln</div>
<div>&nbsp;</div>
<div style="text-align: center;">10 однократных стипендий «Sur Place» для студентов направления Телематика</div>
<div style="text-align: left;">&nbsp;</div>
<div style="text-align: left;"><strong>Стипендия:&nbsp;</strong></div>
<div style="text-align: left;">&nbsp;</div>
<div style="text-align: left;">
  <table style="height: 128px; width: 796px; margin-left: auto; margin-right: auto;" border="1" cellspacing="1" cellpadding="1">
    <caption>&nbsp;</caption>
    <tbody>
      <tr>
        <td style="width: 86.0227px; text-align: center;">
          <div><strong>Количество</strong></div>
          <div><strong>стипендий</strong></div>
        </td>
        <td style="width: 258.75px; text-align: center;"><strong>Вид стипендии</strong></td>
        <td style="width: 306.932px; text-align: center;"><strong>Отбор</strong></td>
        <td style="width: 116.932px; text-align: center;">
          <div><strong>Размер</strong></div>
          <div><strong>стипендии</strong></div>
        </td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">1</td>
        <td style="width: 258.75px;">Работа над сайтом</td>
        <td style="width: 306.932px;">Сдача документов в Центр</td>
        <td style="width: 116.932px;">60 Евро</td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">3</td>
        <td style="width: 258.75px;">Успешное участие в НИРС</td>
        <td style="width: 306.932px;">
          <div>Будут награждены г-ном</div>
          <div>Бонгардсом во время НИРС</div>
        </td>
        <td style="width: 116.932px; text-align: center;">30 Евро</td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">6</td>
        <td style="width: 258.75px;">Помощь кафедре «Телематика»</td>
        <td style="width: 306.932px;">Сдача документов в Центр</td>
        <td style="width: 116.932px; text-align: center;">25 Евро</td>
      </tr>
    </tbody>
  </table>
  <p><strong>Требования:</strong></p>
  <ul>
    <li>Обучение со 2-го по 3-й курс бакалавра на специальности «Телематика»</li>
    <li>Хорошая успеваемость</li>
    <li>Активность в социальной жизни университета</li>
  </ul>
  <p><strong>Процесс отбора:</strong></p>
  <div>1. Сдача нижеследующих документов координатору проекта до 16-апреля 2018 года:</div>
  <div>
    <ul>
      <li>Резюме с полными контактными данными (памятка:http://www.daad.kg/ru/20176/index.html)</li>
      <li>Обоснование или мотивационное письмо (1 страница)</li>
    </ul>
    <div>Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 16-апреля 2018 года проектному координатору DSG в КГТИ, госпоже Мээрим</div>
    <div>Абдыласовой на электронную почту daad-kgti@ mail.ru&nbsp;</div>
  </div>
</div>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => '10 однократных стипендий «Sur Place» для студентов направления Телематика',
          'slug' => '10-odnokratnyh-stipendiy-sur-place-dlya-studentov-napravleniya-telematika-de',
          'description' => 'Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)',
          'content' => <<<HERE
<div style="padding-left: 30px;"><strong>Программа</strong>: Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)</div>
<div style="padding-left: 30px;"><strong>Проект</strong>: Немецкоязычные учебные направления (DSG) Телематика Кыргызско-Германского Технического Института (КГТИ) при КГТУ им. Раззакова</div>
<div style="padding-left: 30px;"><strong>Координатор</strong>: Technische Hochschule Köln</div>
<div>&nbsp;</div>
<div style="text-align: center;">10 однократных стипендий «Sur Place» для студентов направления Телематика</div>
<div style="text-align: left;">&nbsp;</div>
<div style="text-align: left;"><strong>Стипендия:&nbsp;</strong></div>
<div style="text-align: left;">&nbsp;</div>
<div style="text-align: left;">
  <table style="height: 128px; width: 796px; margin-left: auto; margin-right: auto;" border="1" cellspacing="1" cellpadding="1">
    <caption>&nbsp;</caption>
    <tbody>
      <tr>
        <td style="width: 86.0227px; text-align: center;">
          <div><strong>Количество</strong></div>
          <div><strong>стипендий</strong></div>
        </td>
        <td style="width: 258.75px; text-align: center;"><strong>Вид стипендии</strong></td>
        <td style="width: 306.932px; text-align: center;"><strong>Отбор</strong></td>
        <td style="width: 116.932px; text-align: center;">
          <div><strong>Размер</strong></div>
          <div><strong>стипендии</strong></div>
        </td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">1</td>
        <td style="width: 258.75px;">Работа над сайтом</td>
        <td style="width: 306.932px;">Сдача документов в Центр</td>
        <td style="width: 116.932px;">60 Евро</td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">3</td>
        <td style="width: 258.75px;">Успешное участие в НИРС</td>
        <td style="width: 306.932px;">
          <div>Будут награждены г-ном</div>
          <div>Бонгардсом во время НИРС</div>
        </td>
        <td style="width: 116.932px; text-align: center;">30 Евро</td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">6</td>
        <td style="width: 258.75px;">Помощь кафедре «Телематика»</td>
        <td style="width: 306.932px;">Сдача документов в Центр</td>
        <td style="width: 116.932px; text-align: center;">25 Евро</td>
      </tr>
    </tbody>
  </table>
  <p><strong>Требования:</strong></p>
  <ul>
    <li>Обучение со 2-го по 3-й курс бакалавра на специальности «Телематика»</li>
    <li>Хорошая успеваемость</li>
    <li>Активность в социальной жизни университета</li>
  </ul>
  <p><strong>Процесс отбора:</strong></p>
  <div>1. Сдача нижеследующих документов координатору проекта до 16-апреля 2018 года:</div>
  <div>
    <ul>
      <li>Резюме с полными контактными данными (памятка:http://www.daad.kg/ru/20176/index.html)</li>
      <li>Обоснование или мотивационное письмо (1 страница)</li>
    </ul>
    <div>Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 16-апреля 2018 года проектному координатору DSG в КГТИ, госпоже Мээрим</div>
    <div>Абдыласовой на электронную почту daad-kgti@ mail.ru&nbsp;</div>
  </div>
</div>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => '10 однократных стипендий «Sur Place» для студентов направления Телематика',
          'slug' => '10-odnokratnyh-stipendiy-sur-place-dlya-studentov-napravleniya-telematika-kg',
          'description' => 'Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)',
          'content' => <<<HERE
<div style="padding-left: 30px;"><strong>Программа</strong>: Немецкоязычные учебные направления (DSG) Германской службы академических обменов (DAAD)</div>
<div style="padding-left: 30px;"><strong>Проект</strong>: Немецкоязычные учебные направления (DSG) Телематика Кыргызско-Германского Технического Института (КГТИ) при КГТУ им. Раззакова</div>
<div style="padding-left: 30px;"><strong>Координатор</strong>: Technische Hochschule Köln</div>
<div>&nbsp;</div>
<div style="text-align: center;">10 однократных стипендий «Sur Place» для студентов направления Телематика</div>
<div style="text-align: left;">&nbsp;</div>
<div style="text-align: left;"><strong>Стипендия:&nbsp;</strong></div>
<div style="text-align: left;">&nbsp;</div>
<div style="text-align: left;">
  <table style="height: 128px; width: 796px; margin-left: auto; margin-right: auto;" border="1" cellspacing="1" cellpadding="1">
    <caption>&nbsp;</caption>
    <tbody>
      <tr>
        <td style="width: 86.0227px; text-align: center;">
          <div><strong>Количество</strong></div>
          <div><strong>стипендий</strong></div>
        </td>
        <td style="width: 258.75px; text-align: center;"><strong>Вид стипендии</strong></td>
        <td style="width: 306.932px; text-align: center;"><strong>Отбор</strong></td>
        <td style="width: 116.932px; text-align: center;">
          <div><strong>Размер</strong></div>
          <div><strong>стипендии</strong></div>
        </td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">1</td>
        <td style="width: 258.75px;">Работа над сайтом</td>
        <td style="width: 306.932px;">Сдача документов в Центр</td>
        <td style="width: 116.932px;">60 Евро</td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">3</td>
        <td style="width: 258.75px;">Успешное участие в НИРС</td>
        <td style="width: 306.932px;">
          <div>Будут награждены г-ном</div>
          <div>Бонгардсом во время НИРС</div>
        </td>
        <td style="width: 116.932px; text-align: center;">30 Евро</td>
      </tr>
      <tr style="text-align: center;">
        <td style="width: 86.0227px;">6</td>
        <td style="width: 258.75px;">Помощь кафедре «Телематика»</td>
        <td style="width: 306.932px;">Сдача документов в Центр</td>
        <td style="width: 116.932px; text-align: center;">25 Евро</td>
      </tr>
    </tbody>
  </table>
  <p><strong>Требования:</strong></p>
  <ul>
    <li>Обучение со 2-го по 3-й курс бакалавра на специальности «Телематика»</li>
    <li>Хорошая успеваемость</li>
    <li>Активность в социальной жизни университета</li>
  </ul>
  <p><strong>Процесс отбора:</strong></p>
  <div>1. Сдача нижеследующих документов координатору проекта до 16-апреля 2018 года:</div>
  <div>
    <ul>
      <li>Резюме с полными контактными данными (памятка:http://www.daad.kg/ru/20176/index.html)</li>
      <li>Обоснование или мотивационное письмо (1 страница)</li>
    </ul>
    <div>Заявки подавать только в электронном виде в одном документе формата PDF на немецком языке до 16-апреля 2018 года проектному координатору DSG в КГТИ, госпоже Мээрим</div>
    <div>Абдыласовой на электронную почту daad-kgti@ mail.ru&nbsp;</div>
  </div>
</div>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('21.04.2018'),
          'updated_at' => Carbon::parse('21.04.2018')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН. Май 2018',
          'slug' => 'kursy-po-promyshlennoy-avtomatizacii-na-baze-regionalnogo-uchebnogo-centra-kompanii-oven-may-2018-ru',
          'description' => 'Набор слушателей на курсы',
          'content' => <<<HERE
<p>Кафедра Телематика объявляет набор слушателей на курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН: С 21.05.2018 по 25.05.2018г -</p>
<p>&nbsp;</p>
<p>ПЛК1хх базовый курс (программирование в среде CODESYS V2.3)</p>
<p>&nbsp;</p>
<p>Справки по телефону:&nbsp;<span class="wmi-callto">0551779422</span>,&nbsp;<span class="wmi-callto">0312491844</span></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН. Май 2018',
          'slug' => 'kursy-po-promyshlennoy-avtomatizacii-na-baze-regionalnogo-uchebnogo-centra-kompanii-oven-may-2018-de',
          'description' => 'Набор слушателей на курсы',
          'content' => <<<HERE
<p>Кафедра Телематика объявляет набор слушателей на курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН: С 21.05.2018 по 25.05.2018г -</p>
<p>&nbsp;</p>
<p>ПЛК1хх базовый курс (программирование в среде CODESYS V2.3)</p>
<p>&nbsp;</p>
<p>Справки по телефону:&nbsp;<span class="wmi-callto">0551779422</span>,&nbsp;<span class="wmi-callto">0312491844</span></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН. Май 2018',
          'slug' => 'kursy-po-promyshlennoy-avtomatizacii-na-baze-regionalnogo-uchebnogo-centra-kompanii-oven-may-2018-kg',
          'description' => 'Набор слушателей на курсы',
          'content' => <<<HERE
<p>Кафедра Телематика объявляет набор слушателей на курсы по промышленной автоматизации на базе Регионального учебного центра компании ОВЕН: С 21.05.2018 по 25.05.2018г -</p>
<p>&nbsp;</p>
<p>ПЛК1хх базовый курс (программирование в среде CODESYS V2.3)</p>
<p>&nbsp;</p>
<p>Справки по телефону:&nbsp;<span class="wmi-callto">0551779422</span>,&nbsp;<span class="wmi-callto">0312491844</span></p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('02.05.2018'),
          'updated_at' => Carbon::parse('02.05.2018')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Четвертая летняя школа "Deutsch und Telematik"',
          'slug' => 'chetvertaya-letnyaya-shkola-deutsch-und-telematik-ru',
          'description' => '4. Sommerschule „Deutsch und Telematik"',
          'content' => <<<HERE
<p style="text-align: center;">4. Sommerschule „Deutsch und Telematik Совместно с техническим университетом Кёльна и КГТИ</p>
<p style="text-align: left;">Летняя школа ориентирована для студентов КГТИ направления телематика 1-3 курс. Необходимы базовые знания в области программирования, электроники, электротехники, микропроцессорной техники.</p>
<p style="text-align: left;"><strong>Тема летней школы: «Разработка мобильных приложений в телематике» и «Схемотехника»</strong></p>
<p style="text-align: left;"><strong>ДААД берет на себя расходы за:</strong></p>
<ul>
  <li style="text-align: left;">Транспорт Бишкек-Иссык-Куль-Бишкек</li>
  <li style="text-align: left;">Проживание и питание в стандартном номере гостиницы</li>
  <li style="text-align: left;">Курс немецкого языка</li>
  <li style="text-align: left;">Курс «Разработка мобильных приложений в телематике» от профессора Технического Университета Венгрии</li>
  <li style="text-align: left;">Курс «Схемотехника» от генерального директра ОсОО «Автоматика» Романова Сергея</li>
</ul>
<p>&nbsp;</p>
<p><strong>Количество мест: 12</strong></p>
<p>&nbsp;</p>
<p><strong>Взнос участника составляет 500 сом</strong></p>
<p>&nbsp;</p>
<p><strong>Документы для участия в конкурсе:</strong></p>
<ul>
  <li>Транскрипт на немецком и русском языке</li>
  <li>Резюме</li>
  <li>Мотиваионное письмо (на немецком языке)</li>
  <li>Сертификат немецкого языка А2 (минимум) или знания английского языка</li>
</ul>
<p><strong>Последний срок подачи документов 16.05.2018 до 16.00 в PDF формате на daad-kgti@mail.ru с пометкой Deutsch und Telematik. По всем вопросам обращаться в Координационный Центр 2/501а, Мээрим Абдыласова</strong></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Четвертая летняя школа "Deutsch und Telematik"',
          'slug' => 'chetvertaya-letnyaya-shkola-deutsch-und-telematik-de',
          'description' => '4. Sommerschule „Deutsch und Telematik"',
          'content' => <<<HERE
<p style="text-align: center;">4. Sommerschule „Deutsch und Telematik Совместно с техническим университетом Кёльна и КГТИ</p>
<p style="text-align: left;">Летняя школа ориентирована для студентов КГТИ направления телематика 1-3 курс. Необходимы базовые знания в области программирования, электроники, электротехники, микропроцессорной техники.</p>
<p style="text-align: left;"><strong>Тема летней школы: «Разработка мобильных приложений в телематике» и «Схемотехника»</strong></p>
<p style="text-align: left;"><strong>ДААД берет на себя расходы за:</strong></p>
<ul>
  <li style="text-align: left;">Транспорт Бишкек-Иссык-Куль-Бишкек</li>
  <li style="text-align: left;">Проживание и питание в стандартном номере гостиницы</li>
  <li style="text-align: left;">Курс немецкого языка</li>
  <li style="text-align: left;">Курс «Разработка мобильных приложений в телематике» от профессора Технического Университета Венгрии</li>
  <li style="text-align: left;">Курс «Схемотехника» от генерального директра ОсОО «Автоматика» Романова Сергея</li>
</ul>
<p>&nbsp;</p>
<p><strong>Количество мест: 12</strong></p>
<p>&nbsp;</p>
<p><strong>Взнос участника составляет 500 сом</strong></p>
<p>&nbsp;</p>
<p><strong>Документы для участия в конкурсе:</strong></p>
<ul>
  <li>Транскрипт на немецком и русском языке</li>
  <li>Резюме</li>
  <li>Мотиваионное письмо (на немецком языке)</li>
  <li>Сертификат немецкого языка А2 (минимум) или знания английского языка</li>
</ul>
<p><strong>Последний срок подачи документов 16.05.2018 до 16.00 в PDF формате на daad-kgti@mail.ru с пометкой Deutsch und Telematik. По всем вопросам обращаться в Координационный Центр 2/501а, Мээрим Абдыласова</strong></p>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Четвертая летняя школа "Deutsch und Telematik"',
          'slug' => 'chetvertaya-letnyaya-shkola-deutsch-und-telematik-kg',
          'description' => '4. Sommerschule „Deutsch und Telematik"',
          'content' => <<<HERE
<p style="text-align: center;">4. Sommerschule „Deutsch und Telematik Совместно с техническим университетом Кёльна и КГТИ</p>
<p style="text-align: left;">Летняя школа ориентирована для студентов КГТИ направления телематика 1-3 курс. Необходимы базовые знания в области программирования, электроники, электротехники, микропроцессорной техники.</p>
<p style="text-align: left;"><strong>Тема летней школы: «Разработка мобильных приложений в телематике» и «Схемотехника»</strong></p>
<p style="text-align: left;"><strong>ДААД берет на себя расходы за:</strong></p>
<ul>
  <li style="text-align: left;">Транспорт Бишкек-Иссык-Куль-Бишкек</li>
  <li style="text-align: left;">Проживание и питание в стандартном номере гостиницы</li>
  <li style="text-align: left;">Курс немецкого языка</li>
  <li style="text-align: left;">Курс «Разработка мобильных приложений в телематике» от профессора Технического Университета Венгрии</li>
  <li style="text-align: left;">Курс «Схемотехника» от генерального директра ОсОО «Автоматика» Романова Сергея</li>
</ul>
<p>&nbsp;</p>
<p><strong>Количество мест: 12</strong></p>
<p>&nbsp;</p>
<p><strong>Взнос участника составляет 500 сом</strong></p>
<p>&nbsp;</p>
<p><strong>Документы для участия в конкурсе:</strong></p>
<ul>
  <li>Транскрипт на немецком и русском языке</li>
  <li>Резюме</li>
  <li>Мотиваионное письмо (на немецком языке)</li>
  <li>Сертификат немецкого языка А2 (минимум) или знания английского языка</li>
</ul>
<p><strong>Последний срок подачи документов 16.05.2018 до 16.00 в PDF формате на daad-kgti@mail.ru с пометкой Deutsch und Telematik. По всем вопросам обращаться в Координационный Центр 2/501а, Мээрим Абдыласова</strong></p>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('28.05.2018'),
          'updated_at' => Carbon::parse('28.05.2018')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Научно-исследовательская работа студента 2018',
          'slug' => 'nauchno-issledovatelskaya-rabota-studenta-2018-ru',
          'description' => '«Научно-инновационные технологии: идеи, исследования и разработки».',
          'content' => <<<HERE
<div>26 – 27 апреля в КГТУ им. И. Раззакова прошла 60-я Международная юбилейная научно-техническая конференция студентов, магистрантов, аспирантов и молодых ученых</div>
<div>«Научно-инновационные технологии: идеи, исследования и разработки».</div>
<div><a href="https://drive.google.com/file/d/1xdGRCnc1ZUpKeI3tG9txwJvnpR6pth3Y/view?usp=sharing" target="_blank">Программа конференции</a></div>
<div>
  <div>В подсекции «Телематика» были представлены 19 научных докладов и 5 работ на конкурс разработок.</div>
  <div>В составе жюри подсекции «Телематика» были:</div>
  <div>
    <div>Председатель подсекции: Романов С. – директор ОсОО «Автоматика»</div>
    <div>Секретарь: Бакалова А.Т. – старший преподаватель кафедры «Телематика»</div>
    <div>&nbsp;</div>
    <div>
      <div>Члены жюри:</div>
      <div>Токочев Т. – зам. ген. директора ОсОО «КыргызМедТех»</div>
      <div>Семенов А. – инженер НЦК и Т</div>
      <div>Султангазиева Р.Т. – к.ф.-м.н., доцент кафедры «Телематика»</div>
      <div><img class="" src="https://drive.google.com/file/d/1O5CYt82ECaAw7nZxecswbHzEXQq2HrSO/view?usp=sharing" alt="" width="600" height="500"></div>
      <div><img class="" src="https://drive.google.com/file/d/1O5CYt82ECaAw7nZxecswbHzEXQq2HrSO/view?usp=sharing" alt="" width="700">
        <div>Заслушав доклады участвующих, жюри присудили:</div>
        <ul>
          <li>Диплом 1-й степени докладу «Разработка облачного сервиса «Персональный медицинскийтелемониторинг»». Авторы - ст. группы Тг(б)-2- 15 Толонбеков Д., ст. группы Тг(б)-1- 15 Светличный И.. Руководитель - к.ф.-м.н., доцент Султангазиева Р.Т.;</li>
          <li>Диплом 2-й степени докладу «Разработка системы мониторинга уровня воды для гидропоста «Аламедин»». Авторы – студент магистратуры Мамбетисаев С. и ст. группы Тг(б)-2- 14 Текебаев Н. Руководитель – ст. к.т.н., доцент Кошоева Б.Б.;</li>
          <li>Диплом 3-й степени докладу «Проектирование системы управления 3D- принтера на микроконтроллере Arduino». Авторы – ст. группы Тг(б)-2- 14 Базарбаев Ш., Станбеков Э.. Руководитель – ст. преп. Лайлиев А.А.;</li>
          <li>Диплом 3-й степени докладу «Анализ клинических исследований в онкологии». Автор – студентка магистратуры Рыбина А.. Руководитель – к.т.н., доцент Кошоева Б.Б..</li>
          <li></li>
        </ul>
        <p>&nbsp;<img class="" src="server/images/gallery/news_b44d2a8b9871842bcb64cdc3b60e53b4.png" alt="" width="771" height="437"></p>
        <p>&nbsp;</p>
        <div>На конкурсе разработок с кафедры «Телематика» получили Диплом 3-й степени студент магистратуры Мамбетисаев Санжар и студент группы Тг(б)-2- 14 Текебаев Нурсултан за представленную ими работу «Разработка системы мониторинга уровня воды для гидропоста
          «Аламедин»».</div>
        <div>&nbsp;</div>
        <div><img class="" src="server/images/gallery/news_097d14bc08e1e05cfca55977b3f2bbce.png" alt="" width="771" height="433"></div>
      </div>
    </div>
  </div>
</div>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Научно-исследовательская работа студента 2018',
          'slug' => 'nauchno-issledovatelskaya-rabota-studenta-2018-de',
          'description' => '«Научно-инновационные технологии: идеи, исследования и разработки».',
          'content' => <<<HERE
<div>26 – 27 апреля в КГТУ им. И. Раззакова прошла 60-я Международная юбилейная научно-техническая конференция студентов, магистрантов, аспирантов и молодых ученых</div>
<div>«Научно-инновационные технологии: идеи, исследования и разработки».</div>
<div><a href="https://drive.google.com/file/d/1xdGRCnc1ZUpKeI3tG9txwJvnpR6pth3Y/view?usp=sharing" target="_blank">Программа конференции</a></div>
<div>
  <div>В подсекции «Телематика» были представлены 19 научных докладов и 5 работ на конкурс разработок.</div>
  <div>В составе жюри подсекции «Телематика» были:</div>
  <div>
    <div>Председатель подсекции: Романов С. – директор ОсОО «Автоматика»</div>
    <div>Секретарь: Бакалова А.Т. – старший преподаватель кафедры «Телематика»</div>
    <div>&nbsp;</div>
    <div>
      <div>Члены жюри:</div>
      <div>Токочев Т. – зам. ген. директора ОсОО «КыргызМедТех»</div>
      <div>Семенов А. – инженер НЦК и Т</div>
      <div>Султангазиева Р.Т. – к.ф.-м.н., доцент кафедры «Телематика»</div>
      <div><img class="" src="https://drive.google.com/file/d/1O5CYt82ECaAw7nZxecswbHzEXQq2HrSO/view?usp=sharing" alt="" width="600" height="500"></div>
      <div><img class="" src="https://drive.google.com/file/d/1O5CYt82ECaAw7nZxecswbHzEXQq2HrSO/view?usp=sharing" alt="" width="700">
        <div>Заслушав доклады участвующих, жюри присудили:</div>
        <ul>
          <li>Диплом 1-й степени докладу «Разработка облачного сервиса «Персональный медицинскийтелемониторинг»». Авторы - ст. группы Тг(б)-2- 15 Толонбеков Д., ст. группы Тг(б)-1- 15 Светличный И.. Руководитель - к.ф.-м.н., доцент Султангазиева Р.Т.;</li>
          <li>Диплом 2-й степени докладу «Разработка системы мониторинга уровня воды для гидропоста «Аламедин»». Авторы – студент магистратуры Мамбетисаев С. и ст. группы Тг(б)-2- 14 Текебаев Н. Руководитель – ст. к.т.н., доцент Кошоева Б.Б.;</li>
          <li>Диплом 3-й степени докладу «Проектирование системы управления 3D- принтера на микроконтроллере Arduino». Авторы – ст. группы Тг(б)-2- 14 Базарбаев Ш., Станбеков Э.. Руководитель – ст. преп. Лайлиев А.А.;</li>
          <li>Диплом 3-й степени докладу «Анализ клинических исследований в онкологии». Автор – студентка магистратуры Рыбина А.. Руководитель – к.т.н., доцент Кошоева Б.Б..</li>
          <li></li>
        </ul>
        <p>&nbsp;<img class="" src="server/images/gallery/news_b44d2a8b9871842bcb64cdc3b60e53b4.png" alt="" width="771" height="437"></p>
        <p>&nbsp;</p>
        <div>На конкурсе разработок с кафедры «Телематика» получили Диплом 3-й степени студент магистратуры Мамбетисаев Санжар и студент группы Тг(б)-2- 14 Текебаев Нурсултан за представленную ими работу «Разработка системы мониторинга уровня воды для гидропоста
          «Аламедин»».</div>
        <div>&nbsp;</div>
        <div><img class="" src="server/images/gallery/news_097d14bc08e1e05cfca55977b3f2bbce.png" alt="" width="771" height="433"></div>
      </div>
    </div>
  </div>
</div>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Научно-исследовательская работа студента 2018',
          'slug' => 'nauchno-issledovatelskaya-rabota-studenta-2018-kg',
          'description' => '«Научно-инновационные технологии: идеи, исследования и разработки».',
          'content' => <<<HERE
<div>26 – 27 апреля в КГТУ им. И. Раззакова прошла 60-я Международная юбилейная научно-техническая конференция студентов, магистрантов, аспирантов и молодых ученых</div>
<div>«Научно-инновационные технологии: идеи, исследования и разработки».</div>
<div><a href="https://drive.google.com/file/d/1xdGRCnc1ZUpKeI3tG9txwJvnpR6pth3Y/view?usp=sharing" target="_blank">Программа конференции</a></div>
<div>
  <div>В подсекции «Телематика» были представлены 19 научных докладов и 5 работ на конкурс разработок.</div>
  <div>В составе жюри подсекции «Телематика» были:</div>
  <div>
    <div>Председатель подсекции: Романов С. – директор ОсОО «Автоматика»</div>
    <div>Секретарь: Бакалова А.Т. – старший преподаватель кафедры «Телематика»</div>
    <div>&nbsp;</div>
    <div>
      <div>Члены жюри:</div>
      <div>Токочев Т. – зам. ген. директора ОсОО «КыргызМедТех»</div>
      <div>Семенов А. – инженер НЦК и Т</div>
      <div>Султангазиева Р.Т. – к.ф.-м.н., доцент кафедры «Телематика»</div>
      <div><img class="" src="https://drive.google.com/file/d/1O5CYt82ECaAw7nZxecswbHzEXQq2HrSO/view?usp=sharing" alt="" width="600" height="500"></div>
      <div><img class="" src="https://drive.google.com/file/d/1O5CYt82ECaAw7nZxecswbHzEXQq2HrSO/view?usp=sharing" alt="" width="700">
        <div>Заслушав доклады участвующих, жюри присудили:</div>
        <ul>
          <li>Диплом 1-й степени докладу «Разработка облачного сервиса «Персональный медицинскийтелемониторинг»». Авторы - ст. группы Тг(б)-2- 15 Толонбеков Д., ст. группы Тг(б)-1- 15 Светличный И.. Руководитель - к.ф.-м.н., доцент Султангазиева Р.Т.;</li>
          <li>Диплом 2-й степени докладу «Разработка системы мониторинга уровня воды для гидропоста «Аламедин»». Авторы – студент магистратуры Мамбетисаев С. и ст. группы Тг(б)-2- 14 Текебаев Н. Руководитель – ст. к.т.н., доцент Кошоева Б.Б.;</li>
          <li>Диплом 3-й степени докладу «Проектирование системы управления 3D- принтера на микроконтроллере Arduino». Авторы – ст. группы Тг(б)-2- 14 Базарбаев Ш., Станбеков Э.. Руководитель – ст. преп. Лайлиев А.А.;</li>
          <li>Диплом 3-й степени докладу «Анализ клинических исследований в онкологии». Автор – студентка магистратуры Рыбина А.. Руководитель – к.т.н., доцент Кошоева Б.Б..</li>
          <li></li>
        </ul>
        <p>&nbsp;<img class="" src="server/images/gallery/news_b44d2a8b9871842bcb64cdc3b60e53b4.png" alt="" width="771" height="437"></p>
        <p>&nbsp;</p>
        <div>На конкурсе разработок с кафедры «Телематика» получили Диплом 3-й степени студент магистратуры Мамбетисаев Санжар и студент группы Тг(б)-2- 14 Текебаев Нурсултан за представленную ими работу «Разработка системы мониторинга уровня воды для гидропоста
          «Аламедин»».</div>
        <div>&nbsp;</div>
        <div><img class="" src="server/images/gallery/news_097d14bc08e1e05cfca55977b3f2bbce.png" alt="" width="771" height="433"></div>
      </div>
    </div>
  </div>
</div>
HERE
        ]);


        $post_id = DB::table('posts')->insertGetId([
          'created_at' => Carbon::parse('12.06.2018'),
          'updated_at' => Carbon::parse('12.06.2018')
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'ru',
          'title' => 'Wissenschaftlichen und technischen Konferenz der Studenten KDTI.',
          'slug' => 'wissenschaftlichen-und-technischen-konferenz-der-studenten-kdti-ru',
          'description' => '"Wissenschaftliche und innovative Technologien: Ideen, Forschung und Entwicklung"',
          'content' => <<<HERE
<table style="height: 764px; width: 777px; margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="2">
  <caption>&nbsp;</caption>
  <tbody>
    <tr style="height: 59px;">
      <td style="width: 44px; height: 59px;">№</td>
      <td style="width: 250px; height: 59px;">Projektname</td>
      <td style="width: 149px; height: 59px;">
        <p>Name</p>
        <p>Studenten</p>
      </td>
      <td style="width: 150px; height: 59px;">Studienjahr</td>
      <td style="width: 150px; height: 59px;">Name, Position&nbsp;des Leiters</td>
    </tr>
    <tr style="height: 13px;">
      <td style="width: 44px; height: 13px;">1</td>
      <td style="width: 250px; height: 13px;">2</td>
      <td style="width: 149px; height: 13px;">3</td>
      <td style="width: 150px; height: 13px;">4</td>
      <td style="width: 150px; height: 13px;">5</td>
    </tr>
    <tr style="height: 78px;">
      <td style="width: 44px; height: 78px;">1</td>
      <td style="width: 250px; height: 78px;">Entwicklung des<br>Systems der<br>überwachung des<br>Wasserspiegels für<br>den hydroposten<br>“ALAMEDIN”</td>
      <td style="width: 149px; height: 78px;">Mambetisaev S.<br>Tekebaev</td>
      <td style="width: 150px; height: 78px;">Magistrant<br>4. Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 78px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">2</td>
      <td style="width: 250px; height: 65px;">Cloud-Service-<br>Entwicklung<br>«Persönliche<br>medizinische<br>telemonitoring»</td>
      <td style="width: 149px; height: 65px;">Tolonbekov D.</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 65px;">Doz.<br>Sultangazieva<br>R.T.</td>
    </tr>
    <tr style="height: 52px;">
      <td style="width: 44px; height: 52px;">3</td>
      <td style="width: 250px; height: 52px;">Design - 3D-Drucker-<br>Steuerungssystem auf<br>Arduino<br>mikrocontroller</td>
      <td style="width: 149px; height: 52px;">Bazarbaev<br>Schumkar</td>
      <td style="width: 150px; height: 52px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 52px;">Oberlehrer<br>Layliev A.A.</td>
    </tr>
    <tr style="height: 78px;">
      <td style="width: 44px; height: 78px;">4</td>
      <td style="width: 250px; height: 78px;">Software-Entwicklung<br>für Raspberry Pi bei<br>der Organisation von<br>Laborarbeiten über die<br>Disziplin " Echtzeit-<br>System»</td>
      <td style="width: 149px; height: 78px;">Vereschagina<br>Anastasija</td>
      <td style="width: 150px; height: 78px;">4.Studienjahr<br>Tg-1-14</td>
      <td style="width: 150px; height: 78px;">Oberlehrer<br>Bakalova A.T</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">5</td>
      <td style="width: 250px; height: 65px;">Entwicklung von<br>Steuerungssystemen<br>mit voreingestellten<br>Parametern in der<br>Druckgesellschaft</td>
      <td style="width: 149px; height: 65px;">Usekeeva<br>Meerim</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 65px;">Leiter<br>Dzhusupbekov<br>R.K</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">6</td>
      <td style="width: 250px; height: 65px;">Entwicklung des<br>Standes auf Basis von<br>SPS S7-1200<br>«Zylinder-<br>Betriebssteuerung»</td>
      <td style="width: 149px; height: 65px;">Ajazbekov<br>Temirlan</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-1-14</td>
      <td style="width: 150px; height: 65px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 39px;">
      <td style="width: 44px; height: 39px;">7</td>
      <td style="width: 250px; height: 39px;">Fernzugriff auf<br>sensoren mit dem<br>Tesla Scada-System</td>
      <td style="width: 149px; height: 39px;">Dzhumabekov<br>D.</td>
      <td style="width: 150px; height: 39px;">3.Studienjahr<br>Tg-2-15</td>
      <td style="width: 150px; height: 39px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 91px;">
      <td style="width: 44px; height: 91px;">8</td>
      <td style="width: 250px; height: 91px;">Modernisierung<br>«Smart Home»</td>
      <td style="width: 149px; height: 91px;">Almerekov I.<br>Zhorokulov A.</td>
      <td style="width: 150px; height: 91px;">3.Studienjahr<br>Tg-1-15</td>
      <td style="width: 150px; height: 91px;">Doz.<br>Sultangazieva<br>R.T.</td>
    </tr>
    <tr style="height: 91px;">
      <td style="width: 44px; height: 91px;">9</td>
      <td style="width: 250px; height: 91px;">Echtzeit-</td>
      <td style="width: 149px; height: 91px;">Usubakunova G.</td>
      <td style="width: 150px; height: 91px;">3.Studienjahr</td>
      <td style="width: 150px; height: 91px;">Oberlehrer</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'de',
          'title' => 'Wissenschaftlichen und technischen Konferenz der Studenten KDTI.',
          'slug' => 'wissenschaftlichen-und-technischen-konferenz-der-studenten-kdti-de',
          'description' => '"Wissenschaftliche und innovative Technologien: Ideen, Forschung und Entwicklung"',
          'content' => <<<HERE
<table style="height: 764px; width: 777px; margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="2">
  <caption>&nbsp;</caption>
  <tbody>
    <tr style="height: 59px;">
      <td style="width: 44px; height: 59px;">№</td>
      <td style="width: 250px; height: 59px;">Projektname</td>
      <td style="width: 149px; height: 59px;">
        <p>Name</p>
        <p>Studenten</p>
      </td>
      <td style="width: 150px; height: 59px;">Studienjahr</td>
      <td style="width: 150px; height: 59px;">Name, Position&nbsp;des Leiters</td>
    </tr>
    <tr style="height: 13px;">
      <td style="width: 44px; height: 13px;">1</td>
      <td style="width: 250px; height: 13px;">2</td>
      <td style="width: 149px; height: 13px;">3</td>
      <td style="width: 150px; height: 13px;">4</td>
      <td style="width: 150px; height: 13px;">5</td>
    </tr>
    <tr style="height: 78px;">
      <td style="width: 44px; height: 78px;">1</td>
      <td style="width: 250px; height: 78px;">Entwicklung des<br>Systems der<br>überwachung des<br>Wasserspiegels für<br>den hydroposten<br>“ALAMEDIN”</td>
      <td style="width: 149px; height: 78px;">Mambetisaev S.<br>Tekebaev</td>
      <td style="width: 150px; height: 78px;">Magistrant<br>4. Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 78px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">2</td>
      <td style="width: 250px; height: 65px;">Cloud-Service-<br>Entwicklung<br>«Persönliche<br>medizinische<br>telemonitoring»</td>
      <td style="width: 149px; height: 65px;">Tolonbekov D.</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 65px;">Doz.<br>Sultangazieva<br>R.T.</td>
    </tr>
    <tr style="height: 52px;">
      <td style="width: 44px; height: 52px;">3</td>
      <td style="width: 250px; height: 52px;">Design - 3D-Drucker-<br>Steuerungssystem auf<br>Arduino<br>mikrocontroller</td>
      <td style="width: 149px; height: 52px;">Bazarbaev<br>Schumkar</td>
      <td style="width: 150px; height: 52px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 52px;">Oberlehrer<br>Layliev A.A.</td>
    </tr>
    <tr style="height: 78px;">
      <td style="width: 44px; height: 78px;">4</td>
      <td style="width: 250px; height: 78px;">Software-Entwicklung<br>für Raspberry Pi bei<br>der Organisation von<br>Laborarbeiten über die<br>Disziplin " Echtzeit-<br>System»</td>
      <td style="width: 149px; height: 78px;">Vereschagina<br>Anastasija</td>
      <td style="width: 150px; height: 78px;">4.Studienjahr<br>Tg-1-14</td>
      <td style="width: 150px; height: 78px;">Oberlehrer<br>Bakalova A.T</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">5</td>
      <td style="width: 250px; height: 65px;">Entwicklung von<br>Steuerungssystemen<br>mit voreingestellten<br>Parametern in der<br>Druckgesellschaft</td>
      <td style="width: 149px; height: 65px;">Usekeeva<br>Meerim</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 65px;">Leiter<br>Dzhusupbekov<br>R.K</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">6</td>
      <td style="width: 250px; height: 65px;">Entwicklung des<br>Standes auf Basis von<br>SPS S7-1200<br>«Zylinder-<br>Betriebssteuerung»</td>
      <td style="width: 149px; height: 65px;">Ajazbekov<br>Temirlan</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-1-14</td>
      <td style="width: 150px; height: 65px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 39px;">
      <td style="width: 44px; height: 39px;">7</td>
      <td style="width: 250px; height: 39px;">Fernzugriff auf<br>sensoren mit dem<br>Tesla Scada-System</td>
      <td style="width: 149px; height: 39px;">Dzhumabekov<br>D.</td>
      <td style="width: 150px; height: 39px;">3.Studienjahr<br>Tg-2-15</td>
      <td style="width: 150px; height: 39px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 91px;">
      <td style="width: 44px; height: 91px;">8</td>
      <td style="width: 250px; height: 91px;">Modernisierung<br>«Smart Home»</td>
      <td style="width: 149px; height: 91px;">Almerekov I.<br>Zhorokulov A.</td>
      <td style="width: 150px; height: 91px;">3.Studienjahr<br>Tg-1-15</td>
      <td style="width: 150px; height: 91px;">Doz.<br>Sultangazieva<br>R.T.</td>
    </tr>
    <tr style="height: 91px;">
      <td style="width: 44px; height: 91px;">9</td>
      <td style="width: 250px; height: 91px;">Echtzeit-</td>
      <td style="width: 149px; height: 91px;">Usubakunova G.</td>
      <td style="width: 150px; height: 91px;">3.Studienjahr</td>
      <td style="width: 150px; height: 91px;">Oberlehrer</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
          'post_id' => $post_id,
          'locale' => 'kg',
          'title' => 'Wissenschaftlichen und technischen Konferenz der Studenten KDTI.',
          'slug' => 'wissenschaftlichen-und-technischen-konferenz-der-studenten-kdti-kg',
          'description' => '"Wissenschaftliche und innovative Technologien: Ideen, Forschung und Entwicklung"',
          'content' => <<<HERE
<table style="height: 764px; width: 777px; margin-left: auto; margin-right: auto;" border="1" cellspacing="0" cellpadding="2">
  <caption>&nbsp;</caption>
  <tbody>
    <tr style="height: 59px;">
      <td style="width: 44px; height: 59px;">№</td>
      <td style="width: 250px; height: 59px;">Projektname</td>
      <td style="width: 149px; height: 59px;">
        <p>Name</p>
        <p>Studenten</p>
      </td>
      <td style="width: 150px; height: 59px;">Studienjahr</td>
      <td style="width: 150px; height: 59px;">Name, Position&nbsp;des Leiters</td>
    </tr>
    <tr style="height: 13px;">
      <td style="width: 44px; height: 13px;">1</td>
      <td style="width: 250px; height: 13px;">2</td>
      <td style="width: 149px; height: 13px;">3</td>
      <td style="width: 150px; height: 13px;">4</td>
      <td style="width: 150px; height: 13px;">5</td>
    </tr>
    <tr style="height: 78px;">
      <td style="width: 44px; height: 78px;">1</td>
      <td style="width: 250px; height: 78px;">Entwicklung des<br>Systems der<br>überwachung des<br>Wasserspiegels für<br>den hydroposten<br>“ALAMEDIN”</td>
      <td style="width: 149px; height: 78px;">Mambetisaev S.<br>Tekebaev</td>
      <td style="width: 150px; height: 78px;">Magistrant<br>4. Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 78px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">2</td>
      <td style="width: 250px; height: 65px;">Cloud-Service-<br>Entwicklung<br>«Persönliche<br>medizinische<br>telemonitoring»</td>
      <td style="width: 149px; height: 65px;">Tolonbekov D.</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 65px;">Doz.<br>Sultangazieva<br>R.T.</td>
    </tr>
    <tr style="height: 52px;">
      <td style="width: 44px; height: 52px;">3</td>
      <td style="width: 250px; height: 52px;">Design - 3D-Drucker-<br>Steuerungssystem auf<br>Arduino<br>mikrocontroller</td>
      <td style="width: 149px; height: 52px;">Bazarbaev<br>Schumkar</td>
      <td style="width: 150px; height: 52px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 52px;">Oberlehrer<br>Layliev A.A.</td>
    </tr>
    <tr style="height: 78px;">
      <td style="width: 44px; height: 78px;">4</td>
      <td style="width: 250px; height: 78px;">Software-Entwicklung<br>für Raspberry Pi bei<br>der Organisation von<br>Laborarbeiten über die<br>Disziplin " Echtzeit-<br>System»</td>
      <td style="width: 149px; height: 78px;">Vereschagina<br>Anastasija</td>
      <td style="width: 150px; height: 78px;">4.Studienjahr<br>Tg-1-14</td>
      <td style="width: 150px; height: 78px;">Oberlehrer<br>Bakalova A.T</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">5</td>
      <td style="width: 250px; height: 65px;">Entwicklung von<br>Steuerungssystemen<br>mit voreingestellten<br>Parametern in der<br>Druckgesellschaft</td>
      <td style="width: 149px; height: 65px;">Usekeeva<br>Meerim</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-2-14</td>
      <td style="width: 150px; height: 65px;">Leiter<br>Dzhusupbekov<br>R.K</td>
    </tr>
    <tr style="height: 65px;">
      <td style="width: 44px; height: 65px;">6</td>
      <td style="width: 250px; height: 65px;">Entwicklung des<br>Standes auf Basis von<br>SPS S7-1200<br>«Zylinder-<br>Betriebssteuerung»</td>
      <td style="width: 149px; height: 65px;">Ajazbekov<br>Temirlan</td>
      <td style="width: 150px; height: 65px;">4.Studienjahr<br>Tg-1-14</td>
      <td style="width: 150px; height: 65px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 39px;">
      <td style="width: 44px; height: 39px;">7</td>
      <td style="width: 250px; height: 39px;">Fernzugriff auf<br>sensoren mit dem<br>Tesla Scada-System</td>
      <td style="width: 149px; height: 39px;">Dzhumabekov<br>D.</td>
      <td style="width: 150px; height: 39px;">3.Studienjahr<br>Tg-2-15</td>
      <td style="width: 150px; height: 39px;">Doz. Koshoeva<br>B.B.</td>
    </tr>
    <tr style="height: 91px;">
      <td style="width: 44px; height: 91px;">8</td>
      <td style="width: 250px; height: 91px;">Modernisierung<br>«Smart Home»</td>
      <td style="width: 149px; height: 91px;">Almerekov I.<br>Zhorokulov A.</td>
      <td style="width: 150px; height: 91px;">3.Studienjahr<br>Tg-1-15</td>
      <td style="width: 150px; height: 91px;">Doz.<br>Sultangazieva<br>R.T.</td>
    </tr>
    <tr style="height: 91px;">
      <td style="width: 44px; height: 91px;">9</td>
      <td style="width: 250px; height: 91px;">Echtzeit-</td>
      <td style="width: 149px; height: 91px;">Usubakunova G.</td>
      <td style="width: 150px; height: 91px;">3.Studienjahr</td>
      <td style="width: 150px; height: 91px;">Oberlehrer</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
    }
}
