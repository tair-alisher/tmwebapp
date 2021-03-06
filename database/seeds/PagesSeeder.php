<?php

use Illuminate\Database\Seeder;
use App\Page;
use Carbon\Carbon;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page_id = DB::table('pages')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'ru',
            'title' => 'Кредиты и система оценки',
            'slug' => 'kredity-i-sistema-ocenki',
            'content' => <<<HERE
<p>
    <b>Кредит</b> – мера трудоемкости учебного курса.
    <br>
    <b>Европейскую систему перевода и накопления кредитов (European Credit Transfer and Accumulation system, ECTS)</b> применяют
    европейские вузы в рамках Болонского процесса. Количество кредитов, получаемых за успешное прохождение курса, пропорционально
    числу академических часов аудиторных занятий и самостоятельной работы. Так, курс, который оценивается в 3 кредита (6
    ECTS), как правило, подразумевает четыре академических часа аудиторных занятий в неделю. Учебная нагрузка студента Факультета
    составляет 15 (30 ECTS) кредитов в семестр.
    <br>
    <br> В случае если студент хочет иметь нагрузку более 15 кредитов, это может быть ему разрешено при условии, что за два предыдущих
    семестра студент имеет средний бал не ниже B+ и не имеет оценок ниже B.
    <br>
    <br> В соответствии с американской системой кредиты за прослушанные курсы будут указаны в приложении к диплому Бард колледжа.
    <br>
    <br>

    <b>Соответствие оценок определяется следующим образом:</b>
    <br>
    <br> Отлично (5) – A, A-;
    <br> превосходная работа: А, А-;
    <br> более чем удовлетворительная работа: B+;
    <br> Хорошо (4) – B, B-, C+;
    <br> более чем удовлетворительная работа: B;
    <br> компетентная работа: B-, C+;
    <br> Удовлетворительно (3) – C, C-, D;
    <br> компетентная работа: C;
    <br> результат слабый, но все-таки заслуживающий положительной оценки: C-, D;
    <br> Неудовлетворительно (2) – F;( неудовлетворительная работа, неудача в достижении стандартного уровня, требуемого для
    получения кредита по курсу)
    <br>
    <br> Каждый студент получает оценку за промежуточную аттестацию по каждому изучаемому им предмету в середине семестра и итоговую
    оценку по его окончании. Обе оценки сообщаются преподавателем студенту в письменном виде и включают комментарий.</p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'de',
            'title' => 'Credits und Bewertungssystem',
            'slug' => 'credits-und-bewertungssystem',
            'content' => <<<HERE
<p>
    <b>Кредит</b> – мера трудоемкости учебного курса.
    <br>
    <b>Европейскую систему перевода и накопления кредитов (European Credit Transfer and Accumulation system, ECTS)</b> применяют
    европейские вузы в рамках Болонского процесса. Количество кредитов, получаемых за успешное прохождение курса, пропорционально
    числу академических часов аудиторных занятий и самостоятельной работы. Так, курс, который оценивается в 3 кредита (6
    ECTS), как правило, подразумевает четыре академических часа аудиторных занятий в неделю. Учебная нагрузка студента Факультета
    составляет 15 (30 ECTS) кредитов в семестр.
    <br>
    <br> В случае если студент хочет иметь нагрузку более 15 кредитов, это может быть ему разрешено при условии, что за два предыдущих
    семестра студент имеет средний бал не ниже B+ и не имеет оценок ниже B.
    <br>
    <br> В соответствии с американской системой кредиты за прослушанные курсы будут указаны в приложении к диплому Бард колледжа.
    <br>
    <br>

    <b>Соответствие оценок определяется следующим образом:</b>
    <br>
    <br> Отлично (5) – A, A-;
    <br> превосходная работа: А, А-;
    <br> более чем удовлетворительная работа: B+;
    <br> Хорошо (4) – B, B-, C+;
    <br> более чем удовлетворительная работа: B;
    <br> компетентная работа: B-, C+;
    <br> Удовлетворительно (3) – C, C-, D;
    <br> компетентная работа: C;
    <br> результат слабый, но все-таки заслуживающий положительной оценки: C-, D;
    <br> Неудовлетворительно (2) – F;( неудовлетворительная работа, неудача в достижении стандартного уровня, требуемого для
    получения кредита по курсу)
    <br>
    <br> Каждый студент получает оценку за промежуточную аттестацию по каждому изучаемому им предмету в середине семестра и итоговую
    оценку по его окончании. Обе оценки сообщаются преподавателем студенту в письменном виде и включают комментарий.</p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'kg',
            'title' => 'Баалоо системи жана кредиттер',
            'slug' => 'baaloo-sistemi-zhana-kreditter',
            'content' => <<<HERE
<p>
    <b>Кредит</b> – мера трудоемкости учебного курса.
    <br>
    <b>Европейскую систему перевода и накопления кредитов (European Credit Transfer and Accumulation system, ECTS)</b> применяют
    европейские вузы в рамках Болонского процесса. Количество кредитов, получаемых за успешное прохождение курса, пропорционально
    числу академических часов аудиторных занятий и самостоятельной работы. Так, курс, который оценивается в 3 кредита (6
    ECTS), как правило, подразумевает четыре академических часа аудиторных занятий в неделю. Учебная нагрузка студента Факультета
    составляет 15 (30 ECTS) кредитов в семестр.
    <br>
    <br> В случае если студент хочет иметь нагрузку более 15 кредитов, это может быть ему разрешено при условии, что за два предыдущих
    семестра студент имеет средний бал не ниже B+ и не имеет оценок ниже B.
    <br>
    <br> В соответствии с американской системой кредиты за прослушанные курсы будут указаны в приложении к диплому Бард колледжа.
    <br>
    <br>

    <b>Соответствие оценок определяется следующим образом:</b>
    <br>
    <br> Отлично (5) – A, A-;
    <br> превосходная работа: А, А-;
    <br> более чем удовлетворительная работа: B+;
    <br> Хорошо (4) – B, B-, C+;
    <br> более чем удовлетворительная работа: B;
    <br> компетентная работа: B-, C+;
    <br> Удовлетворительно (3) – C, C-, D;
    <br> компетентная работа: C;
    <br> результат слабый, но все-таки заслуживающий положительной оценки: C-, D;
    <br> Неудовлетворительно (2) – F;( неудовлетворительная работа, неудача в достижении стандартного уровня, требуемого для
    получения кредита по курсу)
    <br>
    <br> Каждый студент получает оценку за промежуточную аттестацию по каждому изучаемому им предмету в середине семестра и итоговую
    оценку по его окончании. Обе оценки сообщаются преподавателем студенту в письменном виде и включают комментарий.</p>
HERE
        ]);

        $page_id = DB::table('pages')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'ru',
            'title' => 'Модули дисциплин',
            'slug' => 'moduli-disciplin',
            'content' => 'files for downloading'
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'de',
            'title' => 'Module Disziplinen',
            'slug' => 'module-disziplinen',
            'content' => 'files for downloading'
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'kg',
            'title' => 'Сабактын модул',
            'slug' => 'sabaktyn-modul',
            'content' => 'files for downloading'
        ]);

        $page_id = DB::table('pages')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'ru',
            'title' => 'Телемедицина',
            'slug' => 'telemedicina',
            'content' => <<<HERE
<p>
    <b>Структура учебного плана</b>
    <br>

    <b>Модули</b>
    <br>
    <br>

    <b>Общенаучный цикл </b>
    <br>
</p>
<ul>
    <li>педагогика и психология высшей школы;</li>
    <li>медицинская информатика и нейроинформатика;</li>
    <li>протоколы и стандарты в телемедицине;</li>
    <li>системы передачи данных;</li>
    <li>медицинские информационные системы;</li>
    <li>распределенные системы обработки информации;</li>
    <li>процессы разработки программного обеспечения.</li>
</ul>
<br>
<br>

<b>Профессиональный цикл</b>
<br>
<ul>
    <li>цифровая обработка биомедицинских сигналов;</li>
    <li>сенсорные сети в телемедицине;</li>
    <li>электронное здравоохранение;</li>
    <li>электроника и электротехника в медицине;</li>
    <li>цифровая обработка биомедицинских сигналов.</li>
</ul>
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'de',
            'title' => 'Telemedizin',
            'slug' => 'telemedizin',
            'content' => <<<HERE
<p>
    <b>Структура учебного плана</b>
    <br>

    <b>Модули</b>
    <br>
    <br>

    <b>Общенаучный цикл </b>
    <br>
</p>
<ul>
    <li>педагогика и психология высшей школы;</li>
    <li>медицинская информатика и нейроинформатика;</li>
    <li>протоколы и стандарты в телемедицине;</li>
    <li>системы передачи данных;</li>
    <li>медицинские информационные системы;</li>
    <li>распределенные системы обработки информации;</li>
    <li>процессы разработки программного обеспечения.</li>
</ul>
<br>
<br>

<b>Профессиональный цикл</b>
<br>
<ul>
    <li>цифровая обработка биомедицинских сигналов;</li>
    <li>сенсорные сети в телемедицине;</li>
    <li>электронное здравоохранение;</li>
    <li>электроника и электротехника в медицине;</li>
    <li>цифровая обработка биомедицинских сигналов.</li>
</ul>
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'kg',
            'title' => 'Телемедицина',
            'slug' => 'telemedicina-kg',
            'content' => <<<HERE
<p>
    <b>Структура учебного плана</b>
    <br>

    <b>Модули</b>
    <br>
    <br>

    <b>Общенаучный цикл </b>
    <br>
</p>
<ul>
    <li>педагогика и психология высшей школы;</li>
    <li>медицинская информатика и нейроинформатика;</li>
    <li>протоколы и стандарты в телемедицине;</li>
    <li>системы передачи данных;</li>
    <li>медицинские информационные системы;</li>
    <li>распределенные системы обработки информации;</li>
    <li>процессы разработки программного обеспечения.</li>
</ul>
<br>
<br>

<b>Профессиональный цикл</b>
<br>
<ul>
    <li>цифровая обработка биомедицинских сигналов;</li>
    <li>сенсорные сети в телемедицине;</li>
    <li>электронное здравоохранение;</li>
    <li>электроника и электротехника в медицине;</li>
    <li>цифровая обработка биомедицинских сигналов.</li>
</ul>
<p></p>
HERE
        ]);

        $page_id = DB::table('pages')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'ru',
            'title' => 'Телематика услуг',
            'slug' => 'telematika-uslug',
            'content' => 'info'
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'de',
            'title' => 'Telematikdienste',
            'slug' => 'telematikdienste',
            'content' => 'info'
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'kg',
            'title' => 'Телематика кызматтары',
            'slug' => 'telematika-kyzmattary',
            'content' => 'info'
        ]);

        $page_id = DB::table('pages')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'ru',
            'title' => 'Научные направления',
            'slug' => 'nauchnye-napravlenija',
            'content' => <<<HERE
<p>
    <b>Основные научные направления, развиваемые на кафедре:</b>
    <br>
</p>
<ul>
    <li>автоматизированное проектирование устройств и систем различного назначения;</li>
    <li>системы автоматического регулирования;</li>
    <li>архитектура, математическое, программное и аппаратное обеспечение, средства проектирования вычислительных систем, систем
        искусственного интеллекта и компьютерных сетей;</li>
    <li>опто-, радио- и акустоэлектроника, перспективные системы связи, навигации, локации и управления;</li>
    <li>информационно-телекоммуникационные технологии;</li>
    <li>информационно-измерительные системы для контроля и управления процессами и объектами;</li>
    <li>нанотехнологии;</li>
    <li>телемедицина.</li>
</ul>
<br>
<br>

<p>Профессорско-преподавательский состав кафедры представлен высокопрофессиональными специалистами, прошедшими подготовку и
    переподготовку в ведущих вузах, научных институтах ближнего и дального зарубежья (Германия, Швеция, Индия, Россия).</p>
<br>
<br>

<p>На кафедре научную работу ведут 6 преподавателей, в числе которых 2 кандидата наук. В научной работе активно участвуют докторанты,
    аспиранты и студенты Телематика.</p>
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'de',
            'title' => 'Forschungsrichtungen',
            'slug' => 'forschungsrichtungen',
            'content' => <<<HERE
<p>
    <b>Die am Institut entwickelten wissenschaftlichen Hauptrichtungen:</b>
    <br>
</p>
<ul>
    <li>rechnergestützten Entwurf von Geräten und Systemen für verschiedene Anwendungen;</li>
    <li>automatische Steuerung;</li>
    <li>Architektur, Mathematik, Software-und Hardware, Design-Tools, Computersysteme, Künstliche Intelligenz Systeme und Computernetze;</li>
    <li>Großhandel, Radio und Acoustoelectronics vielversprechende Kommunikationssysteme, Navigation und Steuerung;</li>
    <li>Informations- und Kommunikationstechnologie;</li>
    <li>Informationen und Messsysteme zur Überwachung und Kontrolle Prozesse und Objekte;</li>
    <li>Nanotechnologien;</li>
    <li>Telemedizin.</li>
</ul>
<br>
<br>

<p>Das Lehrpersonal der Abteilung umfasst hochqualifizierte Spezialisten, die ausgebildet worden und in den führenden Universitäten
    umgeschult, Forschungseinrichtungen und im Ausland (Deutschland, Schweden, Indien, Russland).</p>
<br>
<br>

<p>An der Abteilung für wissenschaftliche Arbeit sind 6 Professoren, darunter 2 Kandidaten der Wissenschaften. Die Doktoranden
    und Studenten der Telematik beteiligen aktiv in wissenschaftliche Arbeit.</p>
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'kg',
            'title' => 'Илимий багыттар',
            'slug' => 'ilimij-bagyttar',
            'content' => <<<HERE
<p>
    <b>Основные научные направления, развиваемые на кафедре:</b>
    <br>
</p>
<ul>
    <li>автоматизированное проектирование устройств и систем различного назначения;</li>
    <li>системы автоматического регулирования;</li>
    <li>архитектура, математическое, программное и аппаратное обеспечение, средства проектирования вычислительных систем, систем
        искусственного интеллекта и компьютерных сетей;</li>
    <li>опто-, радио- и акустоэлектроника, перспективные системы связи, навигации, локации и управления;</li>
    <li>информационно-телекоммуникационные технологии;</li>
    <li>информационно-измерительные системы для контроля и управления процессами и объектами;</li>
    <li>нанотехнологии;</li>
    <li>телемедицина.</li>
</ul>
<br>
<br>

<p>Профессорско-преподавательский состав кафедры представлен высокопрофессиональными специалистами, прошедшими подготовку и
    переподготовку в ведущих вузах, научных институтах ближнего и дального зарубежья (Германия, Швеция, Индия, Россия).</p>
<br>
<br>

<p>На кафедре научную работу ведут 6 преподавателей, в числе которых 2 кандидата наук. В научной работе активно участвуют докторанты,
    аспиранты и студенты Телематика.</p>
<p></p>
HERE
        ]);

        $page_id = DB::table('pages')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'ru',
            'title' => 'Аспирантура',
            'slug' => 'aspirantura',
            'content' => <<<HERE
<p></p>
<table class="table table-hover">
    <tbody>
        <tr>
            <td>№</td>
            <td>Ф.И.О. аспиранта</td>
            <td>Тема</td>
            <td>Курс</td>
            <td>Руководитель</td>
        </tr>

        <tr>
            <td>1.</td>
            <td>Турдалиева Айзада Аманбековна</td>
            <td>Применение квантовых точек в медицине</td>
            <td colspan="2">PhD Royal Institute of Technology , Sweden (Королевский институт технологии, Швеция)</td>
            <td></td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Жаманкулова Римма Калдаровна</td>
            <td>Разработка и исследование беспроводной системы удаленного обмена данными на базе GSM/GPRS терминалов</td>
            <td>Соискатель</td>
            <td>Проф. Акматбеков Р.А.</td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Калмурза уулу Болотбек</td>
            <td>Разработка методов и систем защиты информации на основе оборудования CISCO</td>
            <td>4</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

        <tr>
            <td>4.</td>
            <td>Мамасалиева Жылдыз Алымбековна</td>
            <td>Исследование и разработка способов координации частотных присвоений в приграничных районах при переходе от аналогового
                на цифровое вещание в сложной географической зоне</td>
            <td>2</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

        <tr>
            <td>5.</td>
            <td>Егембердиева Мавлюда</td>
            <td>Технология маршрутизации по меткам MPLS</td>
            <td></td>
            <td>Проф. Акматбеков Р.А</td>
        </tr>

        <tr>
            <td>6.</td>
            <td>Алымкулов Майрамбек Сиядинович</td>
            <td>Определение ресурсов и оптимальных путей внедрения телемедицинских технологий в Кыргызской Республике</td>
            <td>3</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

        <tr>
            <td>7.</td>
            <td>Муканов Талант Кубанычбекович</td>
            <td>Исследование и разработка автоматизированной системы для внедрения телемедицины в Кыргызской Республике</td>
            <td>3</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

        <tr>
            <td>8.</td>
            <td>Бекташев Чынгыз Акматович</td>
            <td>Исследование и разработка способов планирования радиомониторинга в приграничных районах Кыргызской республики</td>
            <td>Соискатель</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

    </tbody>
</table>
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'de',
            'title' => 'Aspirantur',
            'slug' => 'aspirantur',
            'content' => <<<HERE
<p></p>
<table>
    <tbody>
        <tr>
            <td>№</td>
            <td>Name Doktorand</td>
            <td>Thema</td>
            <td>Kurs</td>
            <td>Leiter</td>
        </tr>

        <tr>
            <td>1.</td>
            <td>Turdalieva Aizada Amanbekovna</td>
            <td>Die Verwendung von Quantenpunkten in der Medizin</td>
            <td colspan="2">PhD Royal Institute of Technology , Sweden</td>
            <td></td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Zhamankulova Rimma Kaldarovna</td>
            <td>Entwicklung und Erforschung von Remote-Wireless-System für den Datenaustausch auf der Grundlage der GSM / GPRS-Terminals</td>
            <td>Anwärter</td>
            <td>Prof. Akmatbekov R.A.</td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Kalmurza Bolot Uulu</td>
            <td>Entwicklung von Methoden und Informationssicherheitssysteme auf der Basis von Geräten CISCO</td>
            <td>4</td>
            <td>Prof. Sagynbaev A.A.</td>
        </tr>

        <tr>
            <td>4.</td>
            <td>Mamasalieva Jyldyz Alymbekovna</td>
            <td>Forschung und Entwicklung von Methoden für die Koordinierung der Frequenzzuweisungen in den Grenzgebieten des
                Übergangs vom analogen zum digitalen Rundfunk in einem komplexen geografischen Gebiet</td>
            <td>2</td>
            <td>Prof. Sagynbaev A.A.</td>
        </tr>

        <tr>
            <td>5.</td>
            <td>Egemberdieva Mavlyuda</td>
            <td>Routing-Technologie MPLS-Label</td>
            <td></td>
            <td>Prof. Akmatbekov R.A.</td>
        </tr>

        <tr>
            <td>6.</td>
            <td>Alymkulov Mairambek Siyadinovich</td>
            <td>Bestimmung der Ressourcen und die besten Möglichkeiten der Implementierung von Telemedizin-Technologien in der
                Kirgisischen Republik</td>
            <td>3</td>
            <td>Prof. Sagynbaev A.A.</td>
        </tr>

        <tr>
            <td>7.</td>
            <td>Mukanov Talent Kubanychbekovich</td>
            <td>Forschung und Entwicklung von automatisierten Systemen für die Durchführung der Telemedizin in der Kirgisischen
                Republik</td>
            <td>3</td>
            <td>Prof. Sagynbaev A.A.</td>
        </tr>

        <tr>
            <td>8.</td>
            <td>Bektashev Chyngyz Akmatovich</td>
            <td>Forschung und Entwicklung von Methoden für die Planung von Funküberwachung in den Grenzgebieten der Kirgisischen
                Republik</td>
            <td>Anwärter</td>
            <td>Prof. Sagynbaev A.A.</td>
        </tr>

    </tbody>
</table>
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'kg',
            'title' => 'Аспирантура',
            'slug' => 'aspirantura-kg',
            'content' => <<<HERE
<p></p>
<table class="table table-hover">
    <tbody>
        <tr>
            <td>№</td>
            <td>Ф.И.О. аспиранта</td>
            <td>Тема</td>
            <td>Курс</td>
            <td>Руководитель</td>
        </tr>

        <tr>
            <td>1.</td>
            <td>Турдалиева Айзада Аманбековна</td>
            <td>Применение квантовых точек в медицине</td>
            <td colspan="2">PhD Royal Institute of Technology , Sweden (Королевский институт технологии, Швеция)</td>
            <td></td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Жаманкулова Римма Калдаровна</td>
            <td>Разработка и исследование беспроводной системы удаленного обмена данными на базе GSM/GPRS терминалов</td>
            <td>Соискатель</td>
            <td>Проф. Акматбеков Р.А.</td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Калмурза уулу Болотбек</td>
            <td>Разработка методов и систем защиты информации на основе оборудования CISCO</td>
            <td>4</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

        <tr>
            <td>4.</td>
            <td>Мамасалиева Жылдыз Алымбековна</td>
            <td>Исследование и разработка способов координации частотных присвоений в приграничных районах при переходе от аналогового
                на цифровое вещание в сложной географической зоне</td>
            <td>2</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

        <tr>
            <td>5.</td>
            <td>Егембердиева Мавлюда</td>
            <td>Технология маршрутизации по меткам MPLS</td>
            <td></td>
            <td>Проф. Акматбеков Р.А</td>
        </tr>

        <tr>
            <td>6.</td>
            <td>Алымкулов Майрамбек Сиядинович</td>
            <td>Определение ресурсов и оптимальных путей внедрения телемедицинских технологий в Кыргызской Республике</td>
            <td>3</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

        <tr>
            <td>7.</td>
            <td>Муканов Талант Кубанычбекович</td>
            <td>Исследование и разработка автоматизированной системы для внедрения телемедицины в Кыргызской Республике</td>
            <td>3</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

        <tr>
            <td>8.</td>
            <td>Бекташев Чынгыз Акматович</td>
            <td>Исследование и разработка способов планирования радиомониторинга в приграничных районах Кыргызской республики</td>
            <td>Соискатель</td>
            <td>Проф. Сагынбаев А.А.</td>
        </tr>

    </tbody>
</table>
<p></p>
HERE
        ]);

        $page_id = DB::table('pages')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'ru',
            'title' => 'Для поступления в Бакалавриат',
            'slug' => 'dlja-postuplenija-v-bakalavriat',
            'content' => <<<HERE
<p>
    <b>Прием осуществляется по профилям:</b>
    <br> - Телематика услуг;
    <br> - Транспортная телематика.
    <br>
    <br>
    <b>Профилирующие учебные дисциплины:</b>
    <br>
</p>
<ul>
    <li>Программирование</li>
    <li>Сетевые базы данных</li>
    <li>Телематика</li>
    <li>Мобильные коммуникации</li>
    <li>Электронный бизнес</li>
    <li>Телекоммуникационные сети и услуги</li>
    <li>Цифровая обработка сигналов</li>
    <li>Интернет-коммуникации</li>
    <li>Симуляция и виртуальное моделирование</li>
    <li>Геоинформационные системы</li>
    <li>Системы глобальной спутниковой навигации</li>
</ul>
<br>
<br>

<b>ПРАВИЛА ПРИЕМА</b>
<br>
<p>Кафедра принимает абитуриентов по направлению Телематика. Вступительные испытания производятся по результатам ОРТ. Дополнительный
    тест - математика или физика. Прием осуществляется на бюджетной и контрактной основе</p>
<br>
<p>Для поступления необходимо предоставить следующие документы:</p>
<br>
<ul>
    <li>Основной тест + математика или физика;</li>
    <li>Заявление;</li>
    <li>Документ об образовании (аттестат);</li>
    <li>Медицинскую справку № 086-У;</li>
    <li>фотографий 3х4;</li>
    <li>Паспорт или другой документ, удостоверяющий личность (военнообязанным – приписное свидетельство или военный билет).</li>
</ul>
<br>
<br>
<b>СТОИМОСТЬ ОБУЧЕНИЯ:</b>
<br>
<ul>
    <li>39000 сом в год (для граждан КР)</li>
    <li>42000 сом в год (для граждан ближнего и дальнего зарубежья)</li>
</ul>
<br>
<br>
<b>Контакты:</b>
<br> пр. Мира, 66, КГТУ им. И. Раззакова,
<br> ауд. 2/329, тел: 49-18-44
<br> зав.кафедрой: к.т.н., доц. Кошоева Бибигуль Бейшенбековна,
<br> e-mail: telematika_00@mail.ru
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'de',
            'title' => 'Bakkalaureat',
            'slug' => 'bakkalaureat',
            'content' => <<<HERE
<p>
    <b>Der Eintritt ist von Profilen:</b>
    <br> - Telematikdienste;
    <br> - Verkehrstelematik.
    <br>
    <br>
    <b>Profilbildungs Disziplinen:</b>
    <br>
</p>
<ul>
    <li>Programmierung</li>
    <li>Netzwerkdatenbank</li>
    <li>Telematik</li>
    <li>Mobilkommunikation</li>
    <li>E-Business-</li>
    <li>Telekommunikationsnetzen und -diensten</li>
    <li>Digitale Signalverarbeitung</li>
    <li>Internet-Kommunikation</li>
    <li>Simulation und virtuelle Simulation</li>
    <li>Geografische Informationssysteme</li>
    <li>Globalen Satellitennavigationssystemen</li>
</ul>
<br>
<br>

<b>Zulassungsordnung</b>
<br>
<p>Der Lehrstuhl übernimmt Studenten in Fachrichtung Telematik. Zulassungstests basierend auf den Ergebnissen der орт . Zusätzliche
    Tests - Mathematik oder Physik. Der Eintritt ist mit einem Budget und auf Vertragsbasis.</p>
<br>
<p>Um teilzunehmen müssen Sie folgende Unterlagen vorlegen:</p>
<br>
<ul>
    <li>Die Hauptprüfung + Mathematik oder Physik;</li>
    <li>Bewerbung;</li>
    <li>Das Dokument über Bildung (Zertifikat);</li>
    <li>Ärztliches Attest Nummer 086;</li>
    <li>3x4 Fotos;</li>
    <li>Reisepass oder ein anderes Ausweisdokument (Wehrdienst - Anmeldebescheinigung oder Militär-ID).</li>
</ul>
<br>
<br>
<b>Studiengebühr:</b>
<br>
<ul>
    <li>39.000 soms pro Jahr (für die Bürger der Kirgisischen Republik);</li>
    <li>42.000 soms pro Jahr (für die Bürger aus Ausland).</li>
</ul>
<br>
<br>
<b>Kontakte:</b>
<br> Mira ave., 66, KSTU. Razzakov,
<br> AUD. 2/329, Tel: 49-18-44
<br> Abteilungsleiter: PhD, Assoc. Koshoeva Bibigul Beyshenbekovna,
<br> e-mail: telematika_00@mail.ru
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'kg',
            'title' => 'Бакалавриатка тапшырыш үчүн',
            'slug' => 'bakalavriatka-tapshyrysh-uchun',
            'content' => <<<HERE
<p>
    <b>Прием осуществляется по профилям:</b>
    <br> - Телематика услуг;
    <br> - Транспортная телематика.
    <br>
    <br>
    <b>Профилирующие учебные дисциплины:</b>
    <br>
</p>
<ul>
    <li>Программирование</li>
    <li>Сетевые базы данных</li>
    <li>Телематика</li>
    <li>Мобильные коммуникации</li>
    <li>Электронный бизнес</li>
    <li>Телекоммуникационные сети и услуги</li>
    <li>Цифровая обработка сигналов</li>
    <li>Интернет-коммуникации</li>
    <li>Симуляция и виртуальное моделирование</li>
    <li>Геоинформационные системы</li>
    <li>Системы глобальной спутниковой навигации</li>
</ul>
<br>
<br>

<b>ПРАВИЛА ПРИЕМА</b>
<br>
<p>Кафедра принимает абитуриентов по направлению Телематика. Вступительные испытания производятся по результатам ОРТ. Дополнительный
    тест - математика или физика. Прием осуществляется на бюджетной и контрактной основе</p>
<br>
<p>Для поступления необходимо предоставить следующие документы:</p>
<br>
<ul>
    <li>Основной тест + математика или физика;</li>
    <li>Заявление;</li>
    <li>Документ об образовании (аттестат);</li>
    <li>Медицинскую справку № 086-У;</li>
    <li>фотографий 3х4;</li>
    <li>Паспорт или другой документ, удостоверяющий личность (военнообязанным – приписное свидетельство или военный билет).</li>
</ul>
<br>
<br>
<b>СТОИМОСТЬ ОБУЧЕНИЯ:</b>
<br>
<ul>
    <li>39000 сом в год (для граждан КР)</li>
    <li>42000 сом в год (для граждан ближнего и дальнего зарубежья)</li>
</ul>
<br>
<br>
<b>Контакты:</b>
<br> пр. Мира, 66, КГТУ им. И. Раззакова,
<br> ауд. 2/329, тел: 49-18-44
<br> зав.кафедрой: к.т.н., доц. Кошоева Бибигуль Бейшенбековна,
<br> e-mail: telematika_00@mail.ru
<p></p>
HERE
        ]);

        $page_id = DB::table('pages')->insertGetId([
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'ru',
            'title' => 'Для поступления в Магистратуру',
            'slug' => 'dlja-postuplenija-v-magistraturu',
            'content' => <<<HERE
<p>Прием осуществляется по направлению телематика по следующим программам:
    <br>
</p>
<ul>
    <li>Телематика услуг</li>
    <li>Телемедицина</li>
</ul>
<br>
<br>

<b>Правила приема:</b>
<br> Прием осуществляется на бюджетной и контрактной основе. Зачисление производится по итогам собеседования. Для поступления
необходимо предоставить следующие документы:
<br>

<ul>
    <li>Диплом бакалавра;</li>
    <li>Заявление;</li>
    <li>Медицинскую справку № 086-У;</li>
    <li>6 фотографий 3х4;</li>
    <li>Паспорт или другой документ, удостоверяющий личность (военнообязанным – приписное свидетельство или военный билет).</li>
</ul>
<br>
<br> Для поступления на
<b>программу «Телемедицина»</b> требуется диплом бакалавра по направлениям:
<b>680200 «Биотехнические системы и технологии» и дипломы бакалавра по медицинским направления.</b>
<br>
<br> Для поступления на
<b>программу «Телематика услуг»</b> требуется диплом бакалавра по направлениям: 690300 «Инфокоммуникационные технологии и системы
связи», 690600 «Телематика», 700200 «Управление в технических системах», 700300 «Автоматизация технологических процессов
и производств», 710100 «Информатика и вычислительная техника», 710200 «Информационные системы и технологии», 590100 «Информационная
безопасность, 710400 «Программная инженерия».
<br>
<br>
<b>Стоимость обучения:</b>
<br> - 44 400 сом в год (для граждан КР)
<br> - 54 000 сом в год (для граждан ближнего и дальнего зарубежья)

<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'de',
            'title' => 'Magistratur',
            'slug' => 'magistratur',
            'content' => <<<HERE
<p>
    <b>Der Eintritt ist in der Richtung der Telematik in den folgenden Programmen durchgeführt:</b>
    <br>
</p>
<ul>
    <li>Telematikdienste;</li>
    <li>Telemedizin.</li>
</ul>
<br>
<br>

<b>Regeln für die Zulassung:</b>
<br> Der Eintritt ist mit einem Budget und auf Vertragsbasis. Die Einschreibung erfolgt auf der Grundlage der Interviews. Um
teilzunehmen müssen Sie folgende Unterlagen vorlegen:
<br>

<ul>
    <li>Bachelor-Abschluss;</li>
    <li>Anwendung;</li>
    <li>Ärztliches Attest Nummer 086;</li>
    <li>6 Fotos 3x4;</li>
    <li>Reisepass oder ein anderes Ausweisdokument (Wehrdienst - Anmeldebescheinigung oder Militär-ID).</li>
</ul>
<br>
<br>

<b>Für die Zulassung zum Programm "Telemedizin" erfordert einen Bachelor-Abschluss von folgenden Bereiche:</b>
680 200 "Biotechnische Systems and Technologies", und Bachelor von Gesundheitsräumen.
<br>
<br> Für die Zulassung zum Programm "Telematikdienste" erfordert einen Bachelor-Abschluss die folgenden Bereiche: 690 300 "Informations-
und Kommunikationstechnologien und Kommunikationssysteme" 690.600 "Telematik" 700200 "Management in Technical Systems" 700300
"Automatisierung der technologischen Prozesse und Produktion" 710.100 "Computer Equipment "710.200" Informationssysteme und
Technologien "590.100" Informationssicherheit, 710 400 "Software Engineering".
<br>
<br>
<b>Studiengebühr:</b>
<br> - 44 400 soms pro Jahr (für die Bürger der Kirgisischen Republik);
<br> - 54 000 soms pro Jahr (für die Bürger aus Ausland).
<p></p>
HERE
        ]);
        DB::table('page_translations')->insert([
            'page_id' => $page_id,
            'locale' => 'kg',
            'title' => 'Магистратурага тапшырыш үчүн',
            'slug' => 'magistraturaga-tapshyrysh-uchun',
            'content' => <<<HERE
<p>Прием осуществляется по направлению телематика по следующим программам:
    <br>
</p>
<ul>
    <li>Телематика услуг</li>
    <li>Телемедицина</li>
</ul>
<br>
<br>

<b>Правила приема:</b>
<br> Прием осуществляется на бюджетной и контрактной основе. Зачисление производится по итогам собеседования. Для поступления
необходимо предоставить следующие документы:
<br>

<ul>
    <li>Диплом бакалавра;</li>
    <li>Заявление;</li>
    <li>Медицинскую справку № 086-У;</li>
    <li>6 фотографий 3х4;</li>
    <li>Паспорт или другой документ, удостоверяющий личность (военнообязанным – приписное свидетельство или военный билет).</li>
</ul>
<br>
<br> Для поступления на
<b>программу «Телемедицина»</b> требуется диплом бакалавра по направлениям:
<b>680200 «Биотехнические системы и технологии» и дипломы бакалавра по медицинским направления.</b>
<br>
<br> Для поступления на
<b>программу «Телематика услуг»</b> требуется диплом бакалавра по направлениям: 690300 «Инфокоммуникационные технологии и системы
связи», 690600 «Телематика», 700200 «Управление в технических системах», 700300 «Автоматизация технологических процессов
и производств», 710100 «Информатика и вычислительная техника», 710200 «Информационные системы и технологии», 590100 «Информационная
безопасность, 710400 «Программная инженерия».
<br>
<br>
<b>Стоимость обучения:</b>
<br> - 44 400 сом в год (для граждан КР)
<br> - 54 000 сом в год (для граждан ближнего и дальнего зарубежья)

<p></p>
HERE
        ]);
    }
}
