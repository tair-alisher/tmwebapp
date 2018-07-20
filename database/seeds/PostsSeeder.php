<?php

use Illuminate\Database\Seeder;
use App\Post;
use Carbon\Carbon;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('07.05.2015'),
            'updated_at' => Carbon::parse('07.05.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Список стипендиатов по проекту ДААД 2015 года',
            'description' => 'Предоставлен список стипендиатов ДААД за 2015 год',
            'slug' => 'spisok-stipendiatov-po-proektu-daad-2015-goda-ru',
            'content' => <<<HERE
<table class="table table-hover">

    <tbody>
        <tr>
            <td>№</td>
            <td>Ф.И.о. студента</td>
            <td>Местность</td>
            <td>Курс</td>
            <td>Средний бал</td>
            <td>Форма обучения</td>
            <td>Немецкий</td>
            <td>GPA</td>
        </tr>

        <tr>
            <td>1.</td>
            <td>Артелбеков Айдар Эльмуратович</td>
            <td>город</td>
            <td>2</td>
            <td>84</td>
            <td>бюджет</td>
            <td>83</td>
            <td>3,59</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Беликов Андрей Сергеевич</td>
            <td>село</td>
            <td>2</td>
            <td>86</td>
            <td>бюджет</td>
            <td>89</td>
            <td>3,76</td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Жыргалбекова Бермет Жыргалбековна</td>
            <td>город</td>
            <td>2</td>
            <td>88</td>
            <td>контракт</td>
            <td>84</td>
            <td>3,73</td>
        </tr>

        <tr>
            <td>4.</td>
            <td>Кошева Ангелина Александровна</td>
            <td>город</td>
            <td>2</td>
            <td>88</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,79</td>
        </tr>

        <tr>
            <td>5.</td>
            <td>Кызаева Сауле Амыркуловна </td>
            <td>город</td>
            <td>2</td>
            <td>85</td>
            <td>контракт</td>
            <td>96</td>
            <td>3,5</td>
        </tr>

        <tr>
            <td>6.</td>
            <td>Амантаев Алиаскар Анварович</td>
            <td>город</td>
            <td>2</td>
            <td>86,5</td>
            <td>бюджет</td>
            <td>91</td>
            <td>3,58</td>
        </tr>

        <tr>
            <td>7.</td>
            <td>Горохов Владислав Викторович</td>
            <td>город</td>
            <td>2</td>
            <td>86,5</td>
            <td>бюджет</td>
            <td>84</td>
            <td>3,59</td>
        </tr>

        <tr>
            <td>8.</td>
            <td>Жолчубекова Айгерим Жолчубековна </td>
            <td>село</td>
            <td>2</td>
            <td>88</td>
            <td>бюджет</td>
            <td>82</td>
            <td>3,73</td>
        </tr>

        <tr>
            <td>9.</td>
            <td>Иманакунов Санжар</td>
            <td>город</td>
            <td>2</td>
            <td>88</td>
            <td>бюджет</td>
            <td>94</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>10.</td>
            <td>Калмурза уулу Тилек</td>
            <td>село</td>
            <td>2</td>
            <td>81</td>
            <td>бюджет</td>
            <td>81</td>
            <td>3,39</td>
        </tr>

        <tr>
            <td>11.</td>
            <td>Азарова Мээрим Кылычбековна</td>
            <td>город</td>
            <td>3</td>
            <td>86</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>12.</td>
            <td>Амангулова Альбина Жаныбековна</td>
            <td>село</td>
            <td>3</td>
            <td>86</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,55</td>
        </tr>

        <tr>
            <td>13.</td>
            <td>Мамбетисаев Санжар Нурланович</td>
            <td>город</td>
            <td>3</td>
            <td>88</td>
            <td>бюджет</td>
            <td>84</td>
            <td>3,53</td>
        </tr>

        <tr>
            <td>14.</td>
            <td>Рыбина Алла Анатольевна</td>
            <td>село</td>
            <td>3</td>
            <td>88</td>
            <td>бюджет</td>
            <td>78</td>
            <td>3,79</td>
        </tr>

        <tr>
            <td>15.</td>
            <td>Таалайбек уулу Султангазы</td>
            <td>город</td>
            <td>3</td>
            <td>80</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,47</td>
        </tr>

        <tr>
            <td>16.</td>
            <td>Таалайбекова Гулжан Таалайбековна</td>
            <td>село</td>
            <td>3</td>
            <td>83</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>17.</td>
            <td>Тологонова Акылай Бакытовна</td>
            <td>город</td>
            <td>3</td>
            <td>84</td>
            <td>бюджет</td>
            <td>80</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>18.</td>
            <td>Шекербек уулу Нурбек</td>
            <td>село</td>
            <td>3</td>
            <td>78</td>
            <td>бюджет</td>
            <td>74</td>
            <td>3,88</td>
        </tr>

        <tr>
            <td>19.</td>
            <td>Жусубалиев Султангазы Акматбекович </td>
            <td>село</td>
            <td>1</td>
            <td>81</td>
            <td>контракт</td>
            <td>75</td>
            <td>3,25</td>
        </tr>

        <tr>
            <td>20.</td>
            <td>Дмитриев Артем Георгиевич</td>
            <td>город</td>
            <td>1</td>
            <td>86</td>
            <td>бюджет</td>
            <td>88</td>
            <td>3,82</td>
        </tr>

        <tr>
            <td>21.</td>
            <td>Текебаев Нурсултан Туратбекович</td>
            <td>город</td>
            <td>1</td>
            <td>88</td>
            <td>бюджет</td>
            <td>88</td>
            <td>4</td>
        </tr>

        <tr>
            <td>22.</td>
            <td>Толонбеков Данил Толонбекович</td>
            <td>село</td>
            <td>1</td>
            <td>89</td>
            <td>бюджет</td>
            <td>94</td>
            <td>4</td>
        </tr>

        <tr>
            <td>23.</td>
            <td>Туратова Элнура Туратовна</td>
            <td>город</td>
            <td>1</td>
            <td>93</td>
            <td>бюджет</td>
            <td>100</td>
            <td>4</td>
        </tr>

        <tr>
            <td>24.</td>
            <td>Уланбекова Алтынай Уланбековна</td>
            <td>город</td>
            <td>1</td>
            <td>91</td>
            <td>бюджет</td>
            <td>98</td>
            <td>4</td>
        </tr>

        <tr>
            <td>25.</td>
            <td>Асанова Асель</td>
            <td>село</td>
            <td>4</td>
            <td>84</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,59</td>
        </tr>
    </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Liste der Stipendianten im Projekt von DAAD „Telematik“ 2015',
            'description' => 'Liste der Stipendianten im Projekt von DAAD „Telematik“ 2015',
            'slug' => 'liste-der-stipendianten-im-projekt-von-daad-telematik-2015-de',
            'content' => <<<HERE
<table class="table table-hover">

    <tbody>
        <tr>
            <td>№</td>
            <td>Name</td>
            <td>Woher?</td>
            <td>Studienjahr</td>
            <td>Studiener gebnis</td>
            <td>Studiumform</td>
            <td>Deutsch Test</td>
            <td>Ergebnis als Note GPA</td>
        </tr>

        <tr>
            <td>1.</td>
            <td>Artelbekov Aidar Elmuratovich</td>
            <td>Bischkek</td>
            <td>2</td>
            <td>84</td>
            <td>Budjet</td>
            <td>83</td>
            <td>3,59</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Belikov Andrei Sergeevich</td>
            <td>Dorf</td>
            <td>2</td>
            <td>86</td>
            <td>Budjet</td>
            <td>89</td>
            <td>3,76</td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Jyrgalbekova Bermet Jyrgalvekovna</td>
            <td>Bischkek</td>
            <td>2</td>
            <td>88</td>
            <td>Vertrag</td>
            <td>84</td>
            <td>3,73</td>
        </tr>

        <tr>
            <td>4.</td>
            <td>Koscheva Angelina Aleksandrovna</td>
            <td>Bischkek</td>
            <td>2</td>
            <td>88</td>
            <td>Budjet</td>
            <td>90</td>
            <td>3,79</td>
        </tr>

        <tr>
            <td>5.</td>
            <td>Kyzaeva Saule Amyrkulovna</td>
            <td>Bischkek</td>
            <td>2</td>
            <td>85</td>
            <td>Vertrag</td>
            <td>96</td>
            <td>3,5</td>
        </tr>

        <tr>
            <td>6.</td>
            <td>Amantaev Aliaskar Anvarovich</td>
            <td>Bischkek</td>
            <td>2</td>
            <td>86,5</td>
            <td>Budjet</td>
            <td>91</td>
            <td>3,58</td>
        </tr>

        <tr>
            <td>7.</td>
            <td>Gorohov Vladislav Viktorovich</td>
            <td>Bischkek</td>
            <td>2</td>
            <td>86,5</td>
            <td>Budjet</td>
            <td>84</td>
            <td>3,59</td>
        </tr>

        <tr>
            <td>8.</td>
            <td>Jolchubekova Aigerim Jolchubekovna</td>
            <td>Dorf</td>
            <td>2</td>
            <td>88</td>
            <td>Budjet</td>
            <td>82</td>
            <td>3,73</td>
        </tr>

        <tr>
            <td>9.</td>
            <td>Imankulov Sanjar</td>
            <td>Bischkek</td>
            <td>2</td>
            <td>88</td>
            <td>Budjet</td>
            <td>94</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>10.</td>
            <td>Kalmurza uulu Tilek</td>
            <td>Dorf</td>
            <td>2</td>
            <td>81</td>
            <td> Budjet</td>
            <td>81</td>
            <td>3,39</td>
        </tr>

        <tr>
            <td>11.</td>
            <td>Azarova Meerim Kylychbekovna</td>
            <td>Bischkek</td>
            <td>3</td>
            <td>86</td>
            <td>Budjet</td>
            <td>90</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>12.</td>
            <td>Amangulova Albina Janybekovna</td>
            <td>Dorf</td>
            <td>3</td>
            <td>86</td>
            <td>Vertrag</td>
            <td>90</td>
            <td>3,55</td>
        </tr>

        <tr>
            <td>13.</td>
            <td>Mambetisaev Sanjar Nurlanovich</td>
            <td>Bischkek</td>
            <td>3</td>
            <td>88</td>
            <td>Budjet</td>
            <td>84</td>
            <td>3,53</td>
        </tr>

        <tr>
            <td>14.</td>
            <td>Rybina Alla Anatolevna</td>
            <td>Dorf</td>
            <td>3</td>
            <td>88</td>
            <td>Budjet</td>
            <td>78</td>
            <td>3,79</td>
        </tr>

        <tr>
            <td>15.</td>
            <td>Taalaibek uulu Sultangazy</td>
            <td>Bischkek</td>
            <td>3</td>
            <td>80</td>
            <td>Budjet</td>
            <td>90</td>
            <td>3,47</td>
        </tr>

        <tr>
            <td>16.</td>
            <td>Taalaibekova Guljan Taalaibekovna</td>
            <td>Dorf</td>
            <td>3</td>
            <td>83</td>
            <td>Budjet</td>
            <td>90</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>17.</td>
            <td>Tologonova Akylai Bakytovna</td>
            <td>Bischkek</td>
            <td>3</td>
            <td>84</td>
            <td>Budjet</td>
            <td>80</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>18.</td>
            <td>Schekerbek uulu Nurbek</td>
            <td>Dorf</td>
            <td>3</td>
            <td>78</td>
            <td>Budjet</td>
            <td>74</td>
            <td>3,88</td>
        </tr>

        <tr>
            <td>19.</td>
            <td>Jusubaliev Sultangazy Akmatbekovich</td>
            <td>Dorf</td>
            <td>1</td>
            <td>81</td>
            <td>Vertrag</td>
            <td>75</td>
            <td>3,25</td>
        </tr>

        <tr>
            <td>20.</td>
            <td>Dmitriev Artem Georgievich</td>
            <td>Bischkek</td>
            <td>1</td>
            <td>86</td>
            <td>Budjet</td>
            <td>88</td>
            <td>3,82</td>
        </tr>

        <tr>
            <td>21.</td>
            <td>Tekebaev Nursultan Turatbekovich</td>
            <td>Bischkek</td>
            <td>1</td>
            <td>88</td>
            <td>Budjet</td>
            <td>88</td>
            <td>4</td>
        </tr>

        <tr>
            <td>22.</td>
            <td>Tolonbekov Danil Tolonbekovich</td>
            <td>Dorf</td>
            <td>1</td>
            <td>89</td>
            <td>Budjet</td>
            <td>94</td>
            <td>4</td>
        </tr>

        <tr>
            <td>23.</td>
            <td>Turatova Elnura Turatovna</td>
            <td>Bischkek</td>
            <td>1</td>
            <td>93</td>
            <td>Budjet</td>
            <td>100</td>
            <td>4</td>
        </tr>

        <tr>
            <td>24.</td>
            <td>Ulanbekova Altynai Ulanbekovna </td>
            <td>Bischkek</td>
            <td>1</td>
            <td>91</td>
            <td>Budjet</td>
            <td>98</td>
            <td>4</td>
        </tr>

        <tr>
            <td>24.</td>
            <td>Asanova Asel</td>
            <td>Dorf</td>
            <td>4</td>
            <td>84</td>
            <td>Budjet</td>
            <td>90</td>
            <td>3,59</td>
        </tr>
    </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Список стипендиатов по проекту ДААД 2015 года',
            'description' => 'Предоставлен список стипендиатов ДААД за 2015 год',
            'slug' => 'spisok-stipendiatov-po-proektu-daad-2015-goda-kg',
            'content' => <<<HERE
<table class="table table-hover">

    <tbody>
        <tr>
            <td>№</td>
            <td>Ф.И.о. студента</td>
            <td>Местность</td>
            <td>Курс</td>
            <td>Средний бал</td>
            <td>Форма обучения</td>
            <td>Немецкий</td>
            <td>GPA</td>
        </tr>

        <tr>
            <td>1.</td>
            <td>Артелбеков Айдар Эльмуратович</td>
            <td>город</td>
            <td>2</td>
            <td>84</td>
            <td>бюджет</td>
            <td>83</td>
            <td>3,59</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Беликов Андрей Сергеевич</td>
            <td>село</td>
            <td>2</td>
            <td>86</td>
            <td>бюджет</td>
            <td>89</td>
            <td>3,76</td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Жыргалбекова Бермет Жыргалбековна</td>
            <td>город</td>
            <td>2</td>
            <td>88</td>
            <td>контракт</td>
            <td>84</td>
            <td>3,73</td>
        </tr>

        <tr>
            <td>4.</td>
            <td>Кошева Ангелина Александровна</td>
            <td>город</td>
            <td>2</td>
            <td>88</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,79</td>
        </tr>

        <tr>
            <td>5.</td>
            <td>Кызаева Сауле Амыркуловна </td>
            <td>город</td>
            <td>2</td>
            <td>85</td>
            <td>контракт</td>
            <td>96</td>
            <td>3,5</td>
        </tr>

        <tr>
            <td>6.</td>
            <td>Амантаев Алиаскар Анварович</td>
            <td>город</td>
            <td>2</td>
            <td>86,5</td>
            <td>бюджет</td>
            <td>91</td>
            <td>3,58</td>
        </tr>

        <tr>
            <td>7.</td>
            <td>Горохов Владислав Викторович</td>
            <td>город</td>
            <td>2</td>
            <td>86,5</td>
            <td>бюджет</td>
            <td>84</td>
            <td>3,59</td>
        </tr>

        <tr>
            <td>8.</td>
            <td>Жолчубекова Айгерим Жолчубековна </td>
            <td>село</td>
            <td>2</td>
            <td>88</td>
            <td>бюджет</td>
            <td>82</td>
            <td>3,73</td>
        </tr>

        <tr>
            <td>9.</td>
            <td>Иманакунов Санжар</td>
            <td>город</td>
            <td>2</td>
            <td>88</td>
            <td>бюджет</td>
            <td>94</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>10.</td>
            <td>Калмурза уулу Тилек</td>
            <td>село</td>
            <td>2</td>
            <td>81</td>
            <td>бюджет</td>
            <td>81</td>
            <td>3,39</td>
        </tr>

        <tr>
            <td>11.</td>
            <td>Азарова Мээрим Кылычбековна</td>
            <td>город</td>
            <td>3</td>
            <td>86</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>12.</td>
            <td>Амангулова Альбина Жаныбековна</td>
            <td>село</td>
            <td>3</td>
            <td>86</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,55</td>
        </tr>

        <tr>
            <td>13.</td>
            <td>Мамбетисаев Санжар Нурланович</td>
            <td>город</td>
            <td>3</td>
            <td>88</td>
            <td>бюджет</td>
            <td>84</td>
            <td>3,53</td>
        </tr>

        <tr>
            <td>14.</td>
            <td>Рыбина Алла Анатольевна</td>
            <td>село</td>
            <td>3</td>
            <td>88</td>
            <td>бюджет</td>
            <td>78</td>
            <td>3,79</td>
        </tr>

        <tr>
            <td>15.</td>
            <td>Таалайбек уулу Султангазы</td>
            <td>город</td>
            <td>3</td>
            <td>80</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,47</td>
        </tr>

        <tr>
            <td>16.</td>
            <td>Таалайбекова Гулжан Таалайбековна</td>
            <td>село</td>
            <td>3</td>
            <td>83</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>17.</td>
            <td>Тологонова Акылай Бакытовна</td>
            <td>город</td>
            <td>3</td>
            <td>84</td>
            <td>бюджет</td>
            <td>80</td>
            <td>3,85</td>
        </tr>

        <tr>
            <td>18.</td>
            <td>Шекербек уулу Нурбек</td>
            <td>село</td>
            <td>3</td>
            <td>78</td>
            <td>бюджет</td>
            <td>74</td>
            <td>3,88</td>
        </tr>

        <tr>
            <td>19.</td>
            <td>Жусубалиев Султангазы Акматбекович </td>
            <td>село</td>
            <td>1</td>
            <td>81</td>
            <td>контракт</td>
            <td>75</td>
            <td>3,25</td>
        </tr>

        <tr>
            <td>20.</td>
            <td>Дмитриев Артем Георгиевич</td>
            <td>город</td>
            <td>1</td>
            <td>86</td>
            <td>бюджет</td>
            <td>88</td>
            <td>3,82</td>
        </tr>

        <tr>
            <td>21.</td>
            <td>Текебаев Нурсултан Туратбекович</td>
            <td>город</td>
            <td>1</td>
            <td>88</td>
            <td>бюджет</td>
            <td>88</td>
            <td>4</td>
        </tr>

        <tr>
            <td>22.</td>
            <td>Толонбеков Данил Толонбекович</td>
            <td>село</td>
            <td>1</td>
            <td>89</td>
            <td>бюджет</td>
            <td>94</td>
            <td>4</td>
        </tr>

        <tr>
            <td>23.</td>
            <td>Туратова Элнура Туратовна</td>
            <td>город</td>
            <td>1</td>
            <td>93</td>
            <td>бюджет</td>
            <td>100</td>
            <td>4</td>
        </tr>

        <tr>
            <td>24.</td>
            <td>Уланбекова Алтынай Уланбековна</td>
            <td>город</td>
            <td>1</td>
            <td>91</td>
            <td>бюджет</td>
            <td>98</td>
            <td>4</td>
        </tr>

        <tr>
            <td>25.</td>
            <td>Асанова Асель</td>
            <td>село</td>
            <td>4</td>
            <td>84</td>
            <td>бюджет</td>
            <td>90</td>
            <td>3,59</td>
        </tr>
    </tbody>
</table>
HERE
        ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('07.05.2015'),
            'updated_at' => Carbon::parse('07.05.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Sommerschule „Deutsch und Telematik“
            совместно с техническим университетом Кёльна и КГТИ',
            'slug' => 'sommerschule-deutsch-und-telematik-sovmestno-s-tehnicheskim-universitetom-kjolna-i-kgti-ru',
            'description' => 'Летняя школа для студентов КГТИ направления телематика 1-3 курс, 3-10 июня 2015г',
            'content' => <<<HERE
<p>Иссык-Куль, 3-10 июня 2015г.
    <br> Летняя школа ориентирована для студентов КГТИ направления телематика 1-3 курс.
    <br> Необходимы базовые знания в области электроники, электротехники, микропроцессорной техники.
    <br>
    <br>
    <b>ДААД берет на себя расходы за:</b>
    <br>
    <br>
</p>
<ul>
    <li>Транспорт Бишкек-Иссык-Куль-Бишкек</li>
    <li>Проживание и питание в стандартном номере гостиницы</li>
    <li>Курс немецкого языка с носителем не менее 3 часов в день</li>
    <li>Курс микропроцессорной техники на новейшем оборудовании от профессора из Швеции Royal TU</li>
</ul>
<br>
<br> Количество мест по бюджету 12, по контракту 2 (стоимость контракта 9300 сом)
<br>
<br>

<b>Взнос от участника на бюджетной основе составляет 500 сом</b>
<br>
<br>

<b>Документы для участия в конкурсе:</b>
<br>
<br>
<ul>
    <li>Транскрипт на немецком и русском языке</li>
    <li>Резюме</li>
    <li>Мотивационное письмо</li>
    <li>Сертификат немецкого языка А2 (минимально)</li>
</ul>
<br>
<br>
<b>Последний срок подачи документов 15.04.2015 до 17.00 в PDF формате на daad-kgti@mail.ru с пометкой Deutsch und Telematik.
    По всем вопросам обращаться в Координационный Центр 2/501а, Мээрим Абдыласова</b>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Sommerschule „Deutsch und Telematik“ zusammen mit der Fachhochschule Köln und KGTI',
            'slug' => 'sommerschule-deutsch-und-telematik-zusammen-mit-der-fachhochschule-koln-und-kgti-de',
            'description' => 'Sommerschule für Studierende KGTI Richtung Telematik Platz 1-3 3-10 Juni 2015',
            'content' => <<<HERE
<p>Issyk-Kul, von 03 bis 10 Juni 2015
    <br> Die Summer School richtet sich an Studierende KGTI Richtung Telematik 1-3 Kurs richtet.
    <br> Grundkenntnisse auf dem Gebiet der Elektronik, Elektrotechnik, Mikroprozessortechnik.
    <br>
    <br>
    <b>DAAD zahlt die Kosten für:</b>
    <br>
</p>
<ul>
    <li>Transport Bischkek Issyk-Kul-Bishkek</li>
    <li>Unterkunft und Verpflegung in einem Standard-Hotelzimmer</li>
    <li>Deutsch Kurs mit einem Träger für mindestens 3 Stunden pro Tag</li>
    <li>Natürlich Mikroprozessortechnologie auf dem neuesten Geräte aus dem Professor des schwedischen Royal TU</li>
</ul>
<br>
<br> Sitze im Budget 12, 2 im Rahmen des Vertrages (der Kontraktpreis von 9300 soms)
<br>
<br>
<b>Der Beitrag der Teilnehmer auf einer Haushaltsgrundlage ist 500 soms</b>
<br>
<br>
<b>Unterlagen für die Teilnahme am Wettbewerb:</b>
<br>
<ul>
    <li>Transcript in deutscher und russischer Sprache</li>
    <li>Inhaltsangabe</li>
    <li>Motivationsschreiben</li>
    <li>Zertifikat Deutsch A2 (niedrigste)</li>
</ul>
<br>
<br>
<b>Einsendeschluss 15.04.2015 17.00 im PDF-Format auf daad-kgti@mail.ru gekennzeichnet Deutsch und Telematik. Um den Coordinating
    Center 2 / 501a, Meerim Abdylasova kontaktieren</b>
<p></p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Sommerschule „Deutsch und Telematik“
            совместно с техническим университетом Кёльна и КГТИ',
            'slug' => 'sommerschule-deutsch-und-telematik-sovmestno-s-tehnicheskim-universitetom-kjolna-i-kgti-kg',
            'description' => 'Летняя школа для студентов КГТИ направления телематика 1-3 курс, 3-10 июня 2015г',
            'content' => <<<HERE
<p>Иссык-Куль, 3-10 июня 2015г.
    <br> Летняя школа ориентирована для студентов КГТИ направления телематика 1-3 курс.
    <br> Необходимы базовые знания в области электроники, электротехники, микропроцессорной техники.
    <br>
    <br>
    <b>ДААД берет на себя расходы за:</b>
    <br>
    <br>
</p>
<ul>
    <li>Транспорт Бишкек-Иссык-Куль-Бишкек</li>
    <li>Проживание и питание в стандартном номере гостиницы</li>
    <li>Курс немецкого языка с носителем не менее 3 часов в день</li>
    <li>Курс микропроцессорной техники на новейшем оборудовании от профессора из Швеции Royal TU</li>
</ul>
<br>
<br> Количество мест по бюджету 12, по контракту 2 (стоимость контракта 9300 сом)
<br>
<br>

<b>Взнос от участника на бюджетной основе составляет 500 сом</b>
<br>
<br>

<b>Документы для участия в конкурсе:</b>
<br>
<br>
<ul>
    <li>Транскрипт на немецком и русском языке</li>
    <li>Резюме</li>
    <li>Мотивационное письмо</li>
    <li>Сертификат немецкого языка А2 (минимально)</li>
</ul>
<br>
<br>
<b>Последний срок подачи документов 15.04.2015 до 17.00 в PDF формате на daad-kgti@mail.ru с пометкой Deutsch und Telematik.
    По всем вопросам обращаться в Координационный Центр 2/501а, Мээрим Абдыласова</b>
HERE
        ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('06.05.2015'),
            'updated_at' => Carbon::parse('06.05.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Ausschreibung - Lernaufenthalt in Deutschland 2015 für Telematik-StudentInnen',
            'slug' => 'ausschreibung-lernaufenthalt-in-deutschland-2015-fur-telematik-studentinnen-ru',
            'description' => '<b>Programm:</b><br>Deutschsprachige Studiengänge (DSG) des Deutschen Akademischen Austauschdienstes DAAD',
            'content' => <<<HERE
<b>Programm:</b>
<br> Deutschsprachige Studiengänge (DSG) des Deutschen Akademischen Austauschdienstes DAAD
<br>
<br>
<b>Projekt:</b>
<br> Deutschsprachiger Studiengang (DSG) Telematik am Deutsch-Kirgisischen Technischen Institut (DKTI) der KSTU Bishkek

<br>
<br>
<b>Koordinator:</b>
<br> Fachhochschule Köln
<br>
<br>

<b>Ausschreibung - Lernaufenthalt in Deutschland 2015 für Telematik-StudentInnen
</b>
<br>
<br>

<b>Stipendien:</b>
<br> Stipendium für Studierende des DSG Studiengangs Telematik für einen Studien- und Projektaufenthalt an Fachhochschule Köln
/ Campus Gummersbach von 1 Monat Dauer
<br>
<br>

<b>Stipendienleistung:</b>
<br> Reisekosten- (675 €) sowie Aufenthaltspauschale (650 €)
<br>
<br>

<b>Formale Voraussetzungen:</b>
<br> Erfolgreiches bisheriges Studium Telematik – mindestens 5. Semester abgeschlossen
<br> Nachweis von Deutsch-Sprachkenntnissen mindestens auf dem Niveau B 1 Beendigung des Aufenthalts spätestens Ende Dezember
2015
<br>
<br>

<b>Ihre Leistungen und unsere Erwartungen:</b>
<br> Verbesserung der SPS-Programmierkenntnisse
<br> Selbständige Lösung einer kleinen Automatisierungsaufgabe
<br> Nachweisbare Verbesserung der Deutschkenntnisse während der Stipen-diendauer
<br> Erklärung zur Mitarbeit als Hilfskraft am DKTI nach Rückkehr in Bishkek
<br>
<br>

<b>Ihre Leistungen und unsere Erwartungen:</b>
<br> Verbesserung der SPS-Programmierkenntnisse
<br> Selbständige Lösung einer kleinen Automatisierungsaufgabe
<br> Nachweisbare Verbesserung der Deutschkenntnisse während der Stipen-diendauer
<br> Erklärung zur Mitarbeit als Hilfskraft am DKTI nach Rückkehr in Bishkek
<br>
<br>

<b>Vergabeverfahren:</b>
<br> Lebenslauf (1 Seite) und aussagekräftiges Bewerbungsschreiben (1 Seite)
<br> Nachweis der Deutschkenntnisse (Niveau B 1)
<br> Dokumentation bisheriger Leistungen für das DKTI
<br> Überzeugendes persönliches Auswahlinterview im April 2015
<br>
<br> Die Bewerbungsunterlagen sind vollständig und in deutscher Sprache bis zum 27. April 2014 in elektronischer Form als .pdf-Datei
an die DAAD Projektkoordinatoren im DKTI einzureichen. Herausragende Leistungen während des Stipendiums werden über Bonuspunkte
bei nachfolgenden Stipendienausschreibungen für Sur Place Stipendien und/ oder für wissenschaftliche Projektaufenthalte in
Deutschland besonders berücksichtigt.
<br>
<br> Gummersbach, den 17.04.15 Prof. Dr. Michael Bongards
</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Ausschreibung - Lernaufenthalt in Deutschland 2015 für Telematik-StudentInnen',
            'slug' => 'ausschreibung-lernaufenthalt-in-deutschland-2015-fur-telematik-studentinnen-de',
            'description' => '<b>Programm:</b><br>Deutschsprachige Studiengänge (DSG) des Deutschen Akademischen Austauschdienstes DAAD',
            'content' => <<<HERE
<b>Programm:</b>
<br> Deutschsprachige Studiengänge (DSG) des Deutschen Akademischen Austauschdienstes DAAD
<br>
<br>
<b>Projekt:</b>
<br> Deutschsprachiger Studiengang (DSG) Telematik am Deutsch-Kirgisischen Technischen Institut (DKTI) der KSTU Bishkek

<br>
<br>
<b>Koordinator:</b>
<br> Fachhochschule Köln
<br>
<br>

<b>Ausschreibung - Lernaufenthalt in Deutschland 2015 für Telematik-StudentInnen
</b>
<br>
<br>

<b>Stipendien:</b>
<br> Stipendium für Studierende des DSG Studiengangs Telematik für einen Studien- und Projektaufenthalt an Fachhochschule Köln
/ Campus Gummersbach von 1 Monat Dauer
<br>
<br>

<b>Stipendienleistung:</b>
<br> Reisekosten- (675 €) sowie Aufenthaltspauschale (650 €)
<br>
<br>

<b>Formale Voraussetzungen:</b>
<br> Erfolgreiches bisheriges Studium Telematik – mindestens 5. Semester abgeschlossen
<br> Nachweis von Deutsch-Sprachkenntnissen mindestens auf dem Niveau B 1 Beendigung des Aufenthalts spätestens Ende Dezember
2015
<br>
<br>

<b>Ihre Leistungen und unsere Erwartungen:</b>
<br> Verbesserung der SPS-Programmierkenntnisse
<br> Selbständige Lösung einer kleinen Automatisierungsaufgabe
<br> Nachweisbare Verbesserung der Deutschkenntnisse während der Stipen-diendauer
<br> Erklärung zur Mitarbeit als Hilfskraft am DKTI nach Rückkehr in Bishkek
<br>
<br>

<b>Ihre Leistungen und unsere Erwartungen:</b>
<br> Verbesserung der SPS-Programmierkenntnisse
<br> Selbständige Lösung einer kleinen Automatisierungsaufgabe
<br> Nachweisbare Verbesserung der Deutschkenntnisse während der Stipen-diendauer
<br> Erklärung zur Mitarbeit als Hilfskraft am DKTI nach Rückkehr in Bishkek
<br>
<br>

<b>Vergabeverfahren:</b>
<br> Lebenslauf (1 Seite) und aussagekräftiges Bewerbungsschreiben (1 Seite)
<br> Nachweis der Deutschkenntnisse (Niveau B 1)
<br> Dokumentation bisheriger Leistungen für das DKTI
<br> Überzeugendes persönliches Auswahlinterview im April 2015
<br>
<br> Die Bewerbungsunterlagen sind vollständig und in deutscher Sprache bis zum 27. April 2014 in elektronischer Form als .pdf-Datei
an die DAAD Projektkoordinatoren im DKTI einzureichen. Herausragende Leistungen während des Stipendiums werden über Bonuspunkte
bei nachfolgenden Stipendienausschreibungen für Sur Place Stipendien und/ oder für wissenschaftliche Projektaufenthalte in
Deutschland besonders berücksichtigt.
<br>
<br> Gummersbach, den 17.04.15 Prof. Dr. Michael Bongards
</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Ausschreibung - Lernaufenthalt in Deutschland 2015 für Telematik-StudentInnen',
            'slug' => 'ausschreibung-lernaufenthalt-in-deutschland-2015-fur-telematik-studentinnen-kg',
            'description' => '<b>Programm:</b><br>Deutschsprachige Studiengänge (DSG) des Deutschen Akademischen Austauschdienstes DAAD',
            'content' => <<<HERE
<b>Programm:</b>
<br> Deutschsprachige Studiengänge (DSG) des Deutschen Akademischen Austauschdienstes DAAD
<br>
<br>
<b>Projekt:</b>
<br> Deutschsprachiger Studiengang (DSG) Telematik am Deutsch-Kirgisischen Technischen Institut (DKTI) der KSTU Bishkek

<br>
<br>
<b>Koordinator:</b>
<br> Fachhochschule Köln
<br>
<br>

<b>Ausschreibung - Lernaufenthalt in Deutschland 2015 für Telematik-StudentInnen
</b>
<br>
<br>

<b>Stipendien:</b>
<br> Stipendium für Studierende des DSG Studiengangs Telematik für einen Studien- und Projektaufenthalt an Fachhochschule Köln
/ Campus Gummersbach von 1 Monat Dauer
<br>
<br>

<b>Stipendienleistung:</b>
<br> Reisekosten- (675 €) sowie Aufenthaltspauschale (650 €)
<br>
<br>

<b>Formale Voraussetzungen:</b>
<br> Erfolgreiches bisheriges Studium Telematik – mindestens 5. Semester abgeschlossen
<br> Nachweis von Deutsch-Sprachkenntnissen mindestens auf dem Niveau B 1 Beendigung des Aufenthalts spätestens Ende Dezember
2015
<br>
<br>

<b>Ihre Leistungen und unsere Erwartungen:</b>
<br> Verbesserung der SPS-Programmierkenntnisse
<br> Selbständige Lösung einer kleinen Automatisierungsaufgabe
<br> Nachweisbare Verbesserung der Deutschkenntnisse während der Stipen-diendauer
<br> Erklärung zur Mitarbeit als Hilfskraft am DKTI nach Rückkehr in Bishkek
<br>
<br>

<b>Ihre Leistungen und unsere Erwartungen:</b>
<br> Verbesserung der SPS-Programmierkenntnisse
<br> Selbständige Lösung einer kleinen Automatisierungsaufgabe
<br> Nachweisbare Verbesserung der Deutschkenntnisse während der Stipen-diendauer
<br> Erklärung zur Mitarbeit als Hilfskraft am DKTI nach Rückkehr in Bishkek
<br>
<br>

<b>Vergabeverfahren:</b>
<br> Lebenslauf (1 Seite) und aussagekräftiges Bewerbungsschreiben (1 Seite)
<br> Nachweis der Deutschkenntnisse (Niveau B 1)
<br> Dokumentation bisheriger Leistungen für das DKTI
<br> Überzeugendes persönliches Auswahlinterview im April 2015
<br>
<br> Die Bewerbungsunterlagen sind vollständig und in deutscher Sprache bis zum 27. April 2014 in elektronischer Form als .pdf-Datei
an die DAAD Projektkoordinatoren im DKTI einzureichen. Herausragende Leistungen während des Stipendiums werden über Bonuspunkte
bei nachfolgenden Stipendienausschreibungen für Sur Place Stipendien und/ oder für wissenschaftliche Projektaufenthalte in
Deutschland besonders berücksichtigt.
<br>
<br> Gummersbach, den 17.04.15 Prof. Dr. Michael Bongards
</p>
HERE
        ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('19.04.2015'),
            'updated_at' => Carbon::parse('19.04.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Визит профессора Михаила Бонгардса с 27.04.15 по 30.04.15',
            'slug' => 'vizit-professora-mihaila-bongardsa-s-270415-po-300415-ru',
            'description' => 'Представлены списки.',
            'content' => <<<HERE
<div>
    <span class="spoiler_links">
        <b>Список стипендиатов по проекту DAAD 2015 года (денежные стипендии)</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">

            <tbody>
                <tr>
                    <td>№</td>
                    <td>Ф.И.о. студента</td>
                    <td>Местность</td>
                    <td>Курс</td>
                    <td>Средний бал</td>
                    <td>Форма обучения</td>
                    <td>Немецкий</td>
                    <td>GPA</td>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Артелбеков Айдар Эльмуратович</td>
                    <td>город</td>
                    <td>2</td>
                    <td>84</td>
                    <td>бюджет</td>
                    <td>83</td>
                    <td>3,59</td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>Беликов Андрей Сергеевич</td>
                    <td>село</td>
                    <td>2</td>
                    <td>86</td>
                    <td>бюджет</td>
                    <td>89</td>
                    <td>3,76</td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Жыргалбекова Бермет Жыргалбековна</td>
                    <td>город</td>
                    <td>2</td>
                    <td>88</td>
                    <td>контракт</td>
                    <td>84</td>
                    <td>3,73</td>
                </tr>

                <tr>
                    <td>4.</td>
                    <td>Кошева Ангелина Александровна</td>
                    <td>город</td>
                    <td>2</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,79</td>
                </tr>

                <tr>
                    <td>5.</td>
                    <td>Кызаева Сауле Амыркуловна </td>
                    <td>город</td>
                    <td>2</td>
                    <td>85</td>
                    <td>контракт</td>
                    <td>96</td>
                    <td>3,5</td>
                </tr>

                <tr>
                    <td>6.</td>
                    <td>Амантаев Алиаскар Анварович</td>
                    <td>город</td>
                    <td>2</td>
                    <td>86,5</td>
                    <td>бюджет</td>
                    <td>91</td>
                    <td>3,58</td>
                </tr>

                <tr>
                    <td>7.</td>
                    <td>Горохов Владислав Викторович</td>
                    <td>город</td>
                    <td>2</td>
                    <td>86,5</td>
                    <td>бюджет</td>
                    <td>84</td>
                    <td>3,59</td>
                </tr>

                <tr>
                    <td>8.</td>
                    <td>Жолчубекова Айгерим Жолчубековна </td>
                    <td>село</td>
                    <td>2</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>82</td>
                    <td>3,73</td>
                </tr>

                <tr>
                    <td>9.</td>
                    <td>Иманакунов Санжар</td>
                    <td>город</td>
                    <td>2</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>94</td>
                    <td>3,85</td>
                </tr>

                <tr>
                    <td>10.</td>
                    <td>Калмурза уулу Тилек</td>
                    <td>село</td>
                    <td>2</td>
                    <td>81</td>
                    <td>бюджет</td>
                    <td>81</td>
                    <td>3,39</td>
                </tr>

                <tr>
                    <td>11.</td>
                    <td>Азарова Мээрим Кылычбековна</td>
                    <td>город</td>
                    <td>3</td>
                    <td>86</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,85</td>
                </tr>

                <tr>
                    <td>12.</td>
                    <td>Амангулова Альбина Жаныбековна</td>
                    <td>село</td>
                    <td>3</td>
                    <td>86</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,55</td>
                </tr>

                <tr>
                    <td>13.</td>
                    <td>Мамбетисаев Санжар Нурланович</td>
                    <td>город</td>
                    <td>3</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>84</td>
                    <td>3,53</td>
                </tr>

                <tr>
                    <td>14.</td>
                    <td>Рыбина Алла Анатольевна</td>
                    <td>село</td>
                    <td>3</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>78</td>
                    <td>3,79</td>
                </tr>

                <tr>
                    <td>15.</td>
                    <td>Таалайбек уулу Султангазы</td>
                    <td>город</td>
                    <td>3</td>
                    <td>80</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,47</td>
                </tr>

                <tr>
                    <td>16.</td>
                    <td>Таалайбекова Гулжан Таалайбековна</td>
                    <td>село</td>
                    <td>3</td>
                    <td>83</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,85</td>
                </tr>

                <tr>
                    <td>17.</td>
                    <td>Тологонова Акылай Бакытовна</td>
                    <td>город</td>
                    <td>3</td>
                    <td>84</td>
                    <td>бюджет</td>
                    <td>80</td>
                    <td>3,85</td>
                </tr>

                <tr>
                    <td>18.</td>
                    <td>Шекербек уулу Нурбек</td>
                    <td>село</td>
                    <td>3</td>
                    <td>78</td>
                    <td>бюджет</td>
                    <td>74</td>
                    <td>3,88</td>
                </tr>

                <tr>
                    <td>19.</td>
                    <td>Жусубалиев Султангазы Акматбекович </td>
                    <td>село</td>
                    <td>1</td>
                    <td>81</td>
                    <td>контракт</td>
                    <td>75</td>
                    <td>3,25</td>
                </tr>

                <tr>
                    <td>20.</td>
                    <td>Дмитриев Артем Георгиевич</td>
                    <td>город</td>
                    <td>1</td>
                    <td>86</td>
                    <td>бюджет</td>
                    <td>88</td>
                    <td>3,82</td>
                </tr>

                <tr>
                    <td>21.</td>
                    <td>Текебаев Нурсултан Туратбекович</td>
                    <td>город</td>
                    <td>1</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>88</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>22.</td>
                    <td>Толонбеков Данил Толонбекович</td>
                    <td>село</td>
                    <td>1</td>
                    <td>89</td>
                    <td>бюджет</td>
                    <td>94</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>23.</td>
                    <td>Туратова Элнура Туратовна</td>
                    <td>город</td>
                    <td>1</td>
                    <td>93</td>
                    <td>бюджет</td>
                    <td>100</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>24.</td>
                    <td>Уланбекова Алтынай Уланбековна</td>
                    <td>город</td>
                    <td>1</td>
                    <td>91</td>
                    <td>бюджет</td>
                    <td>98</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>25.</td>
                    <td>Асанова Асель</td>
                    <td>село</td>
                    <td>4</td>
                    <td>84</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,59</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <span class="spoiler_links">
        <b>Список студентов, прошедших отбор на летнюю школу</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Студент</td>
                    <td>Курс</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Горохов Владислав</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Азамат Ажимкулов</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Андрей Беликов</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Бермет Джыргалбекова</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Альбина Амангулова</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Санжар Мамбетисаев</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Санжар Иманакунов</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Алиаскар Амантаев</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Искандер Курманов</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Айгерим Жолчубекова</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Диана Абыкеева</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Атай Талантбек</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Айзирек Нурланбекова</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Айдар Керимов</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <span class="spoiler_links">
        <b>Список студентов прошедших отбор на стажировку в Германию осень 2015</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Студент</td>
                    <td>Курс</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Альбина Амангулова</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Мээрим Азарова</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Султангазы Таалайбек уулу</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Гулжан Таалайбекова</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <span class="spoiler_links">
        <b>Список преподавателей прошедших отбор на стажировку в Германию осень 2015</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Ф.И.О.</td>
                    <td>Должность</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Имашова Гульзан Имашовна</td>
                    <td>Куратор 1-го курса</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Der Besuch von Professor Michael Bongards von 27.04.15 bis 30.04.15',
            'slug' => 'der-besuch-von-professor-michael-bongards-von-270415-bis-300415-de',
            'description' => 'Liste der Studenten',
            'content' => <<<HERE
<span class="spoiler_links">
    <b>DAAD-Stipendium für das Projekt im Jahr 2015</b>
</span>
<div class="spoiler_body">
    <table class="table table-hover">

        <tbody>
            <tr>
                <td>№</td>
                <td>Name des Studenten</td>
                <td>Ort</td>
                <td>Kurs</td>
                <td>Note</td>
                <td>Form des Studiums</td>
                <td>Deutsch</td>
                <td>GPA</td>
            </tr>

            <tr>
                <td>1.</td>
                <td>Artelbekov Aydar Elmuratovich</td>
                <td>Stadt</td>
                <td>2</td>
                <td>84</td>
                <td>Budget</td>
                <td>83</td>
                <td>3,59</td>
            </tr>

            <tr>
                <td>2.</td>
                <td>Andrew S. Belikov</td>
                <td>Dorf</td>
                <td>2</td>
                <td>86</td>
                <td>Budget</td>
                <td>89</td>
                <td>3,76</td>
            </tr>

            <tr>
                <td>3.</td>
                <td>Zhyrgalbekova Bermet Zhyrgalbekovna</td>
                <td>Stadt</td>
                <td>2</td>
                <td>88</td>
                <td>Vertrag</td>
                <td>84</td>
                <td>3,73</td>
            </tr>

            <tr>
                <td>4.</td>
                <td>Kosheva Angelina A.</td>
                <td>Stadt</td>
                <td>2</td>
                <td>88</td>
                <td>Budget</td>
                <td>90</td>
                <td>3,79</td>
            </tr>

            <tr>
                <td>5.</td>
                <td>Kyzaeva Saul Amyrkulovna</td>
                <td>Stadt</td>
                <td>2</td>
                <td>85</td>
                <td>контракт</td>
                <td>96</td>
                <td>3,5</td>
            </tr>

            <tr>
                <td>6.</td>
                <td>Amantaev Aliaskarov Anvarovich</td>
                <td>Stadt</td>
                <td>2</td>
                <td>86,5</td>
                <td>Budget</td>
                <td>91</td>
                <td>3,58</td>
            </tr>

            <tr>
                <td>7.</td>
                <td>Vladislav V. Gorokhov</td>
                <td>Stadt</td>
                <td>2</td>
                <td>86,5</td>
                <td>Budget</td>
                <td>84</td>
                <td>3,59</td>
            </tr>

            <tr>
                <td>8.</td>
                <td>Zholchubekova Aygerim Zholchubekovna</td>
                <td>Dorf</td>
                <td>2</td>
                <td>88</td>
                <td>Budget</td>
                <td>82</td>
                <td>3,73</td>
            </tr>

            <tr>
                <td>9.</td>
                <td>Imanakunov Sanjar</td>
                <td>Stadt</td>
                <td>2</td>
                <td>88</td>
                <td>Budget</td>
                <td>94</td>
                <td>3,85</td>
            </tr>

            <tr>
                <td>10.</td>
                <td>Kalmurza Uulu Tilek</td>
                <td>Dorf</td>
                <td>2</td>
                <td>81</td>
                <td>Budget</td>
                <td>81</td>
                <td>3,39</td>
            </tr>

            <tr>
                <td>11.</td>
                <td>Azarov Meerim Kylychbekovna</td>
                <td>Stadt</td>
                <td>3</td>
                <td>86</td>
                <td>Budget</td>
                <td>90</td>
                <td>3,85</td>
            </tr>

            <tr>
                <td>12.</td>
                <td>Amangulova Albina Zhanybekovna</td>
                <td>Dorf</td>
                <td>3</td>
                <td>86</td>
                <td>Budget</td>
                <td>90</td>
                <td>3,55</td>
            </tr>

            <tr>
                <td>13.</td>
                <td>Mambetisaev Sanjar Nurlanovich</td>
                <td>Stadt</td>
                <td>3</td>
                <td>88</td>
                <td>Budget</td>
                <td>84</td>
                <td>3,53</td>
            </tr>

            <tr>
                <td>14.</td>
                <td>Alla A. Rybin</td>
                <td>Dorf</td>
                <td>3</td>
                <td>88</td>
                <td>Budget</td>
                <td>78</td>
                <td>3,79</td>
            </tr>

            <tr>
                <td>15.</td>
                <td>Taalaibek Uulu Sultangazi</td>
                <td>Stadt</td>
                <td>3</td>
                <td>80</td>
                <td>Budget</td>
                <td>90</td>
                <td>3,47</td>
            </tr>

            <tr>
                <td>16.</td>
                <td>Taalaybekova Guljan Taalaybekovna</td>
                <td>Dorf</td>
                <td>3</td>
                <td>83</td>
                <td>Budget</td>
                <td>90</td>
                <td>3,85</td>
            </tr>

            <tr>
                <td>17.</td>
                <td>Tologonova Akylai Bakytovna</td>
                <td>Stadt</td>
                <td>3</td>
                <td>84</td>
                <td>Budget</td>
                <td>80</td>
                <td>3,85</td>
            </tr>

            <tr>
                <td>18.</td>
                <td>Shekerbek Uulu Nurbek</td>
                <td>Dorf</td>
                <td>3</td>
                <td>78</td>
                <td>Budget</td>
                <td>74</td>
                <td>3,88</td>
            </tr>

            <tr>
                <td>19.</td>
                <td>Zhusubaliev Sultangazi Akmatbekovich</td>
                <td>Dorf</td>
                <td>1</td>
                <td>81</td>
                <td>Vertrag</td>
                <td>75</td>
                <td>3,25</td>
            </tr>

            <tr>
                <td>20.</td>
                <td>Artem Dmitriev G.</td>
                <td>Stadt</td>
                <td>1</td>
                <td>86</td>
                <td>Budget</td>
                <td>88</td>
                <td>3,82</td>
            </tr>

            <tr>
                <td>21.</td>
                <td>Tekebajew Nursultan Turatbekovich</td>
                <td>Stadt</td>
                <td>1</td>
                <td>88</td>
                <td>Budget</td>
                <td>88</td>
                <td>4</td>
            </tr>

            <tr>
                <td>22.</td>
                <td>Tolonbekov Danil Tolonbekovich</td>
                <td>Dorf</td>
                <td>1</td>
                <td>89</td>
                <td>Budget</td>
                <td>94</td>
                <td>4</td>
            </tr>

            <tr>
                <td>23.</td>
                <td>Turatova Elnur Turatovna</td>
                <td>Stadt</td>
                <td>1</td>
                <td>93</td>
                <td>Budget</td>
                <td>100</td>
                <td>4</td>
            </tr>

            <tr>
                <td>24.</td>
                <td>Ulanbekova Altynay Ulanbekovna</td>
                <td>Stadt</td>
                <td>1</td>
                <td>91</td>
                <td>Budget</td>
                <td>98</td>
                <td>4</td>
            </tr>

            <tr>
                <td>25.</td>
                <td>Asanov Asel</td>
                <td>Dorf</td>
                <td>4</td>
                <td>84</td>
                <td>Budget</td>
                <td>90</td>
                <td>3,59</td>
            </tr>
        </tbody>
    </table>
</div>
</div>

<div>
    <span class="spoiler_links">
        <b>Liste der Schüler, die die Auswahl der Sommerschule bestanden haben</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Student</td>
                    <td>Kurs</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Gorokhov Vladislav</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Azamat Azhimkulov</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Andrey Belikov</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bermet Dzhyrgalbekova</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Albina Amangulova</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sanjar Mambetisaev</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Sanjar Imanakunov</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Aliaskarov Amantaev</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Iskander Kurmanov</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Aygerim Zholchubekova</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Diana Abykeeva</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Atay Talantbek</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Ayzirek Nurlanbekova</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Ajdar Kerimov</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <span class="spoiler_links">
        <b>Liste der Schüler, die ein Praktikum in Deutschland im Herbst 2015 qualifiziert</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Student</td>
                    <td>Kurs</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Albina Amangulova</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Meerim Azarov</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sultangazi Taalaibek Uulu</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Guljan Taalaybekova</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <span class="spoiler_links">
        <b>Die Liste der Lehrer, die sich für ein Praktikum in Deutschland im Herbst 2015 qualifiziert</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Name</td>
                    <td>Funktion</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Imashova Gulzan Imashovna</td>
                    <td>Der Kurator der 1. Jahr</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Визит профессора Михаила Бонгардса с 27.04.15 по 30.04.15',
            'slug' => 'vizit-professora-mihaila-bongardsa-s-270415-po-300415-kg',
            'description' => 'Представлены списки студентов',
            'content' => <<<HERE
<div>
    <span class="spoiler_links">
        <b>Список стипендиатов по проекту DAAD 2015 года (денежные стипендии)</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">

            <tbody>
                <tr>
                    <td>№</td>
                    <td>Ф.И.о. студента</td>
                    <td>Местность</td>
                    <td>Курс</td>
                    <td>Средний бал</td>
                    <td>Форма обучения</td>
                    <td>Немецкий</td>
                    <td>GPA</td>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Артелбеков Айдар Эльмуратович</td>
                    <td>город</td>
                    <td>2</td>
                    <td>84</td>
                    <td>бюджет</td>
                    <td>83</td>
                    <td>3,59</td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>Беликов Андрей Сергеевич</td>
                    <td>село</td>
                    <td>2</td>
                    <td>86</td>
                    <td>бюджет</td>
                    <td>89</td>
                    <td>3,76</td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Жыргалбекова Бермет Жыргалбековна</td>
                    <td>город</td>
                    <td>2</td>
                    <td>88</td>
                    <td>контракт</td>
                    <td>84</td>
                    <td>3,73</td>
                </tr>

                <tr>
                    <td>4.</td>
                    <td>Кошева Ангелина Александровна</td>
                    <td>город</td>
                    <td>2</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,79</td>
                </tr>

                <tr>
                    <td>5.</td>
                    <td>Кызаева Сауле Амыркуловна </td>
                    <td>город</td>
                    <td>2</td>
                    <td>85</td>
                    <td>контракт</td>
                    <td>96</td>
                    <td>3,5</td>
                </tr>

                <tr>
                    <td>6.</td>
                    <td>Амантаев Алиаскар Анварович</td>
                    <td>город</td>
                    <td>2</td>
                    <td>86,5</td>
                    <td>бюджет</td>
                    <td>91</td>
                    <td>3,58</td>
                </tr>

                <tr>
                    <td>7.</td>
                    <td>Горохов Владислав Викторович</td>
                    <td>город</td>
                    <td>2</td>
                    <td>86,5</td>
                    <td>бюджет</td>
                    <td>84</td>
                    <td>3,59</td>
                </tr>

                <tr>
                    <td>8.</td>
                    <td>Жолчубекова Айгерим Жолчубековна </td>
                    <td>село</td>
                    <td>2</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>82</td>
                    <td>3,73</td>
                </tr>

                <tr>
                    <td>9.</td>
                    <td>Иманакунов Санжар</td>
                    <td>город</td>
                    <td>2</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>94</td>
                    <td>3,85</td>
                </tr>

                <tr>
                    <td>10.</td>
                    <td>Калмурза уулу Тилек</td>
                    <td>село</td>
                    <td>2</td>
                    <td>81</td>
                    <td>бюджет</td>
                    <td>81</td>
                    <td>3,39</td>
                </tr>

                <tr>
                    <td>11.</td>
                    <td>Азарова Мээрим Кылычбековна</td>
                    <td>город</td>
                    <td>3</td>
                    <td>86</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,85</td>
                </tr>

                <tr>
                    <td>12.</td>
                    <td>Амангулова Альбина Жаныбековна</td>
                    <td>село</td>
                    <td>3</td>
                    <td>86</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,55</td>
                </tr>

                <tr>
                    <td>13.</td>
                    <td>Мамбетисаев Санжар Нурланович</td>
                    <td>город</td>
                    <td>3</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>84</td>
                    <td>3,53</td>
                </tr>

                <tr>
                    <td>14.</td>
                    <td>Рыбина Алла Анатольевна</td>
                    <td>село</td>
                    <td>3</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>78</td>
                    <td>3,79</td>
                </tr>

                <tr>
                    <td>15.</td>
                    <td>Таалайбек уулу Султангазы</td>
                    <td>город</td>
                    <td>3</td>
                    <td>80</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,47</td>
                </tr>

                <tr>
                    <td>16.</td>
                    <td>Таалайбекова Гулжан Таалайбековна</td>
                    <td>село</td>
                    <td>3</td>
                    <td>83</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,85</td>
                </tr>

                <tr>
                    <td>17.</td>
                    <td>Тологонова Акылай Бакытовна</td>
                    <td>город</td>
                    <td>3</td>
                    <td>84</td>
                    <td>бюджет</td>
                    <td>80</td>
                    <td>3,85</td>
                </tr>

                <tr>
                    <td>18.</td>
                    <td>Шекербек уулу Нурбек</td>
                    <td>село</td>
                    <td>3</td>
                    <td>78</td>
                    <td>бюджет</td>
                    <td>74</td>
                    <td>3,88</td>
                </tr>

                <tr>
                    <td>19.</td>
                    <td>Жусубалиев Султангазы Акматбекович </td>
                    <td>село</td>
                    <td>1</td>
                    <td>81</td>
                    <td>контракт</td>
                    <td>75</td>
                    <td>3,25</td>
                </tr>

                <tr>
                    <td>20.</td>
                    <td>Дмитриев Артем Георгиевич</td>
                    <td>город</td>
                    <td>1</td>
                    <td>86</td>
                    <td>бюджет</td>
                    <td>88</td>
                    <td>3,82</td>
                </tr>

                <tr>
                    <td>21.</td>
                    <td>Текебаев Нурсултан Туратбекович</td>
                    <td>город</td>
                    <td>1</td>
                    <td>88</td>
                    <td>бюджет</td>
                    <td>88</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>22.</td>
                    <td>Толонбеков Данил Толонбекович</td>
                    <td>село</td>
                    <td>1</td>
                    <td>89</td>
                    <td>бюджет</td>
                    <td>94</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>23.</td>
                    <td>Туратова Элнура Туратовна</td>
                    <td>город</td>
                    <td>1</td>
                    <td>93</td>
                    <td>бюджет</td>
                    <td>100</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>24.</td>
                    <td>Уланбекова Алтынай Уланбековна</td>
                    <td>город</td>
                    <td>1</td>
                    <td>91</td>
                    <td>бюджет</td>
                    <td>98</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>25.</td>
                    <td>Асанова Асель</td>
                    <td>село</td>
                    <td>4</td>
                    <td>84</td>
                    <td>бюджет</td>
                    <td>90</td>
                    <td>3,59</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <span class="spoiler_links">
        <b>Список студентов, прошедших отбор на летнюю школу</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Студент</td>
                    <td>Курс</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Горохов Владислав</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Азамат Ажимкулов</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Андрей Беликов</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Бермет Джыргалбекова</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Альбина Амангулова</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Санжар Мамбетисаев</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Санжар Иманакунов</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Алиаскар Амантаев</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Искандер Курманов</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Айгерим Жолчубекова</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Диана Абыкеева</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Атай Талантбек</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Айзирек Нурланбекова</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Айдар Керимов</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <span class="spoiler_links">
        <b>Список студентов прошедших отбор на стажировку в Германию осень 2015</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Студент</td>
                    <td>Курс</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Альбина Амангулова</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Мээрим Азарова</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Султангазы Таалайбек уулу</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Гулжан Таалайбекова</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div>
    <span class="spoiler_links">
        <b>Список преподавателей прошедших отбор на стажировку в Германию осень 2015</b>
    </span>
    <div class="spoiler_body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>Ф.И.О.</td>
                    <td>Должность</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Имашова Гульзан Имашовна</td>
                    <td>Куратор 1-го курса</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
HERE
        ]);

        // $post_id = DB::table('posts')->insertGetId([
        //     'created_at' => Carbon::parse(),
        //     'updated_at' => Carbon::parse()
        // ]);
        // DB::table('post_translations')->insert([
        //     'post_id' => $post_id,
        //     'locale' => 'ru',
        //     'title' => 'Программа летней школы „Deutsch und Telematik“ совместно с техническим университетом Кёльна и КГТИ',
        //     'slug' => 'programma-letnej-shkoly-deutsch-und-telematik-sovmestno-s-tehnicheskim-universitetom-kjolna-i-kgti-ru',
        //     'content' => ''
        // ]);
        // DB::table('post_translations')->insert([
        //     'post_id' => $post_id,
        //     'locale' => 'de',
        //     'title' => 'Das Programm der Sommerschule "Deutsch und Telematik" gemeinsam mit der Technischen Universität zu Köln und KGTI',
        //     'slug' => 'das-programm-der-sommerschule-deutsch-und-telematik-gemeinsam-mit-der-technischen-universitat-zu-koln-und-kgti-de',
        //     'content' => ''
        // ]);
        // DB::table('post_translations')->insert([
        //     'post_id' => $post_id,
        //     'locale' => 'kg',
        //     'title' => 'Программа летней школы „Deutsch und Telematik“ совместно с техническим университетом Кёльна и КГТИ',
        //     'slug' => 'programma-letnej-shkoly-deutsch-und-telematik-sovmestno-s-tehnicheskim-universitetom-kjolna-i-kgti-kg',
        //     'content' => ''
        // ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('28.10.2015'),
            'updated_at' => Carbon::parse('28.10.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Online защита квалификационных работ на немецком языке. 2015.',
            'slug' => 'online-zashhita-kvalifikacionnyh-rabot-na-nemeckom-jazyke-2015-ru',
            'description' => 'Представлен список результатов защиты квалификационных работ 2015.',
            'content' => <<<HERE
<table class="table table-hover">
    <thead>
        <tr>
            <th>№</td>
                <th>Ф.И.О.</th>
                <th>Тема</th>
                <th>Итоговая</th>
                <th>Примечание</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Абдухалыков Айбек Джаркынбекович</td>
            <td>Разработка сайта для отдела Научно Методического Образовательного Центра НЦКИТ им. М.Миррахимова при Минздраве
                КР
            </td>
            <td>3</td>
            <td>74б</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Асанова Асел Алмазбековна</td>
            <td>Подключение сенсоров к платформе Arduino</td>
            <td>5</td>
            <td>87б</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Атакеев Амантур Мухтарович</td>
            <td>Проектирование мобильной сети на базе технологии WIMAX</td>
            <td>4</td>
            <td>80б</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Атаярова Роза Акжигитовна</td>
            <td>Автоматизация работы отдела кадров НЦКиТ им. М.Миррахимова при Минздраве КР</td>
            <td>4</td>
            <td>80б</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Жапарова Аэлита Жапаровна</td>
            <td>Разработка Интернет-магазина по продаже контрольно-измерительных приборов для предприятия</td>
            <td>4</td>
            <td>82б</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Кузьмин Максим Владимирович</td>
            <td>Разработка OBD (on-bort-diagnostic) для автомобилей выпуска до 2001 года</td>
            <td>5</td>
            <td>98б</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Марсова Акылай Марсовна</td>
            <td>Удаленное управление платформ Arduino</td>
            <td>5</td>
            <td>89б</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Мирланова Алина Мирлановна</td>
            <td>Автоматизация работ врачей отделения рентгено-хирургии</td>
            <td>5</td>
            <td>87б</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Myкай кызы Аида</td>
            <td>Разработка электронного учебника по курсу "G1S"</td>
            <td>3</td>
            <td>70б</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Омуралиева Бсгимай Мелисовна</td>
            <td>Разработка "Умного Дома" на базе Raspberry Pi</td>
            <td>5</td>
            <td>98б</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Сабырова Айдай Ырысбековна</td>
            <td>Разработка конвейерной установки и распределительного крана на базе промышленного контроллера Siemens</td>
            <td>5</td>
            <td>98б</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Садабаева Алтынай Памировна</td>
            <td>Оптимизация работы промышленной печи для хлебобулочных изделий</td>
            <td>5</td>
            <td>88б</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Сауров Анвар Раим- джанович</td>
            <td>&gt;Модернизация сети мобильной связи Ошской области на базе технологии LTE</td>
            <td>5</td>
            <td>87б</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Тайрахунов Алишер Рахманович</td>
            <td>Разработка сайта кафедры "Телематика"</td>
            <td>5</td>
            <td>87б</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Эргешова Асел Урстомбековна</td>
            <td>Разработка сетевой программы компьютерного тестирования знаний</td>
            <td>4</td>
            <td>78б</td>
        </tr>
    </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Schutz der Qualifikation Arbeiten auf Deutsch. 2015.',
            'slug' => 'schutz-der-qualifikation-arbeiten-auf-deutsch-2015-de',
            'description' => 'Onlain Schutz der Qualifikation Arbeiten auf Deutsch. 2015.',
            'content' => <<<HERE
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Name</th>
                    <th>Thema</th>
                    <th>Zusammenfassung</th>
                    <th>Anwendung</th>
                </tr>
            </thead>
            </tbody>
                <tr>
                    <td>1</td>
                    <td>Abduhalykov Aibek Zharkynbekovich</td>
                    <td>Website-Entwicklung für das Department of Scientific Methodische Education Centre</td>
                    <td>3</td>
                    <td>74</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Asanov Asel Almazbekovna</td>
                    <td>Anschluss des Sensors an das Arduino-Plattform</td>
                    <td>5</td>
                    <td>87</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Atakeev Amantur Muhtarovich<</td>
                    <td>Entwerfen eines Mobilfunknetzes auf Basis von WiMAX-Technologie</td>
                    <td>4</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Atayarova Rose Akzhigitovna</td>
                    <td>Automatisierung der Arbeit der Belegschaft</td>
                    <td>4</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Japarova Aelita Saparovna</td>
                    <td>Entwicklung von Online-Shops verkaufen Instrumentierung für das Unternehmen</td>
                    <td>4</td>
                    <td>82</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Maxim V. Kuzmin</td>
                    <td>Entwicklung OBD (On-Board-Diagnose) für Fahrzeuge, die vor 2001 gebaut wurden</td>
                    <td>5</td>
                    <td>98</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Mars Akylai Marsovna</td>
                    <td>Fernsteuerung des Arduino-Plattform</td>
                    <td>5</td>
                    <td>89</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mirlanova Alina Mirlanovna</td>
                    <td>Automatisierung von Arbeits Röntgen, Arztpraxen Chirurgie</td>
                    <td>5</td>
                    <td>87</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Mukai Kyzy Aida</td>
                    <td>Die Entwicklung des elektronischen Lehrbuch mit der Rate «G1S»</td>
                    <td>3 </td>
                    <td>70</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Omuralieva Begimai Melisovna</td>
                    <td>Die Entwicklung von "Smart-Home" basiert Raspberry Pi</td>
                    <td>5</td>
                    <td>98</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Sabyrova Aidai Rysbekovna</td>
                    <td>Entwicklung des Fördersystems und die Verteilung des Krans auf der Grundlage der Industriesteuerung Siemens</td>
                    <td>5</td>
                    <td>98</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Sadabaeva Altynay Pamirovna</td>
                    <td>Optimierung von industriellen Öfen für Backwaren</td>
                    <td>5</td>
                    <td>88</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Saurov Anwar Raimdzhanovich</td>
                    <td>Modernisierung des Mobilkommunikationsnetzwerk der Region Omsk auf der Grundlage der Technologie LTE</td>
                    <td>5</td>
                    <td>87</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Tahirahunov Alisher Rahmanovich</td>
                    <td>Entwickelt von der Abteilung "Telematik"</td>
                    <td>5</td>
                    <td>87</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Ergeshova Asel Rustambekovna</td>
                    <td>Die Entwicklung eines Netzwerks von Computerwissen Prüfprogramm</td>
                    <td>4</td>
                    <td>78</td>
                </tr>
            </tbody>
        </table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Online защита квалификационных работ на немецком языке. 2015.',
            'slug' => 'online-zashhita-kvalifikacionnyh-rabot-na-nemeckom-jazyke-2015-kg',
            'description' => 'Представлен список результатов защиты квалификационных работ 2015.',
            'content' => <<<HERE
<table class="table table-hover">
    <tbody>
        <tr>
            <td>№</td>
            <td>Ф.И.О.</td>
            <td>Тема</td>
            <td>Итоговая</td>
            <td>Примечание</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Абдухалыков Айбек Джаркынбекович</td>
            <td>Разработка сайта для отдела Научно Методического Образовательного Центра НЦКИТ им. М.Миррахимова при Минздраве
                КР</td>
            <td>3</td>
            <td>74б</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Асанова Асел Алмазбековна</td>
            <td>Подключение сенсоров к платформе Arduino</td>
            <td>5</td>
            <td>87б</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Атакеев Амантур Мухтарович</td>
            <td>Проектирование мобильной сети на базе технологии WIMAX</td>
            <td>4</td>
            <td>80б</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Атаярова Роза Акжигитовна</td>
            <td>Автоматизация работы отдела кадров НЦКиТ им. М.Миррахимова при Минздраве КР</td>
            <td>4</td>
            <td>80б</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Жапарова Аэлита Жапаровна</td>
            <td>Разработка Интернет-магазина по продаже контрольно-измерительных приборов для предприятия</td>
            <td>4</td>
            <td>82б</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Кузьмин Максим Владимирович</td>
            <td>Разработка OBD (on-bort-diagnostic) для автомобилей выпуска до 2001 года</td>
            <td>5</td>
            <td>98б</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Марсова Акылай Марсовна</td>
            <td>Удаленное управление платформ Arduino</td>
            <td>5</td>
            <td>89б</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Мирланова Алина Мирлановна</td>
            <td>Автоматизация работ врачей отделения рентгено-хирургии</td>
            <td>5</td>
            <td>87б</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Myкай кызы Аида</td>
            <td>Разработка электронного учебника по курсу "G1S"</td>
            <td>3</td>
            <td>70б</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Омуралиева Бсгимай Мелисовна</td>
            <td>Разработка "Умного Дома" на базе Raspberry Pi</td>
            <td>5</td>
            <td>98б</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Сабырова Айдай Ырысбековна</td>
            <td>Разработка конвейерной установки и распределительного крана на базе промышленного контроллера Siemens</td>
            <td>5</td>
            <td>98б</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Садабаева Алтынай Памировна</td>
            <td>Оптимизация работы промышленной печи для хлебобулочных изделий</td>
            <td>5</td>
            <td>88б</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Сауров Анвар Раим- джанович</td>
            <td>&gt;Модернизация сети мобильной связи Ошской области на базе технологии LTE</td>
            <td>5</td>
            <td>87б</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Тайрахунов Алишер Рахманович</td>
            <td>Разработка сайта кафедры "Телематика"</td>
            <td>5</td>
            <td>87б</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Эргешова Асел Урстомбековна</td>
            <td>Разработка сетевой программы компьютерного тестирования знаний</td>
            <td>4</td>
            <td>78б</td>
        </tr>
    </tbody>
/table>
HERE
        ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('09.06.2015'),
            'updated_at' => Carbon::parse('09.06.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => '21-28 июня. Студенческая практика по автоматизации в Вене (Австрия)',
            'slug' => '21-28-ijunja-studencheskaja-praktika-po-avtomatizacii-v-vene-avstrija-ru',
            'description' => 'Студенты гр Тг 1-13 Кошева Ангелина, гр Тг 2-13 Амантаев Алиаскар.',
            'content' => <<<HERE
<p>&nbsp;Студенты гр Тг&nbsp;1-13&nbsp;Кошева Ангелина,&nbsp;гр Тг&nbsp;2-13 Амантаев Алиаскар достойно представили делегацию
    по автоматизации из КГТИ в студенческой практике в Вене (Австрия) которая проходила с 21 по 28 июня в Венском Техническом
    Университете в Австрии. По окончанию&nbsp;они получили сертификаты.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Von 21 bis 28 Juni. Praktikum fur Studenten von Automatisierung  in Wien (Österreich).',
            'slug' => 'von-21-bis-28-juni-praktikum-fur-studenten-von-automatisierung-in-wien-osterreich-de',
            'description' => 'Von 21 bis 28 Juni. Praktikum fur Studenten von Automatisierung  in Wien (Österreich)',
            'content' => <<<HERE
<p>Die Studenten Kosheva Angelina und Amantayev Aliaskarov adäquat präsentiert die Delegation über die Automatisierung der KGTI
    im Studenten Praxis in Wien (Österreich), die vom 21-28 Juni an der Technischen Universität Wien in Österreich übernahm.
    Am Ende erhielten sie Zertifikate.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => '21-28 июня. Студенческая практика по автоматизации в Вене (Австрия)',
            'slug' => '21-28-ijunja-studencheskaja-praktika-po-avtomatizacii-v-vene-avstrija-kg',
            'description' => 'Студенты гр Тг 1-13 Кошева Ангелина, гр Тг 2-13 Амантаев Алиаскар.',
            'content' => <<<HERE
<p>&nbsp;Студенты гр Тг&nbsp;1-13&nbsp;Кошева Ангелина,&nbsp;гр Тг&nbsp;2-13 Амантаев Алиаскар достойно представили делегацию
    по автоматизации из КГТИ в студенческой практике в Вене (Австрия) которая проходила с 21 по 28 июня в Венском Техническом
    Университете в Австрии. По окончанию&nbsp;они получили сертификаты.</p>
HERE
        ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('22.06.2015'),
            'updated_at' => Carbon::parse('22.06.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Кафедра Телематика поздравляет своих выпускников с поступлением в магистратуру в Москве',
            'slug' => 'kafedra-telematika-pozdravljaet-svoih-vypusknikov-s-postupleniem-v-magistraturu-v-moskve-ru',
            'description' => '',
            'content' => <<<HERE
<p>
    <b>Московский Институт Стали и Сплавов:</b>
    <br>
</p>
<ol>
    <li>Акылбеков Адилет;</li>
    <li>Газибеков Нурболот;</li>
    <li>Курсунали уулу Нурсултан;</li>
    <li>Марсова Акылай;</li>
    <li>Кузьмин Максим;</li>
    <li>Асанова Асель.</li>
</ol>
<br>
<br>

<b>МГТУ им. Н.Э. Баумана</b>
<br>
<ol>
    <li>Тайрахунов Алишер;</li>
    <li>Атаярова Роза</li>
</ol>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Lehrstuhl Telematik gratuliert den Absolventen mit Master in Moskau',
            'slug' => 'lehrstuhl-telematik-gratuliert-den-absolventen-mit-master-in-moskau-de',
            'description' => '',
            'content' => <<<HERE
<p>Moskauer Institut für Stahl und Legierungen:
    <br> 1. Akylbekov Adilet;
    <br> 2. Gazibekov Nurbolot;
    <br> 3. Kursunali Uulu Nursultan;
    <br> 4. Mars Akylai;
    <br> 5. Maxim Kuzmin;
    <br> 6. Asanov Asel.</p>

<p>
    <br> MSTU. von name N. E.&nbsp;Bauman
    <br> 1. Tayrahunov Alisher;
    <br> 2. Atayarova Rose</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Кафедра Телематика поздравляет своих выпускников с поступлением в магистратуру в Москве',
            'slug' => 'kafedra-telematika-pozdravljaet-svoih-vypusknikov-s-postupleniem-v-magistraturu-v-moskve-kg',
            'description' => '',
            'content' => <<<HERE
<p>
    <b>Московский Институт Стали и Сплавов:</b>
    <br>
</p>
<ol>
    <li>Акылбеков Адилет;</li>
    <li>Газибеков Нурболот;</li>
    <li>Курсунали уулу Нурсултан;</li>
    <li>Марсова Акылай;</li>
    <li>Кузьмин Максим;</li>
    <li>Асанова Асель.</li>
</ol>
<br>
<br>

<b>МГТУ им. Н.Э. Баумана</b>
<br>
<ol>
    <li>Тайрахунов Алишер;</li>
    <li>Атаярова Роза</li>
</ol>
HERE
        ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('26.06.2015'),
            'updated_at' => Carbon::parse('26.06.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Практика в Токтогуле',
            'slug' => 'praktika-v-toktogule-ru',
            'description' => '21-24 июня наши студенты, вместе с представителем КГТУ и ведущим разработчиком сайта avn.kg Саитовым Нурланом побывали в Токтогуле, с целью преподавания HTML.',
            'content' => <<<HERE
<p>Студенты кафедры Телематика, Талантбек Атай и Батырканов Нурсултан, вместе с представителем КГТУ и ведущим разработчиком
    сайта avn.kg&nbsp;Саитовым Нурланом поехали в Токтогул.&nbsp;</p>
<img src="server/images/1.1.JPG" class="img-responsive">
<p>В селе Кызыл-Ураан, они обучали преподавателей информатики местных школ созданию сайтов на основе языка интернет-программирования&nbsp;HTML.
    В период с 21 по 24 июня, была&nbsp;проделана огромная работа, и результаты не заставили себя ждать.&nbsp;</p>

<p>Преподаватели, сделали сайты своих школ и разместили в сети интернет. Они научились не только писать код сайта, но и размещать
    их на хостинг с помощью программ.&nbsp;&nbsp;&nbsp;</p>
<img src="server/images/1.2.JPG" class="img-responsive">
<p>В ходе обучения велась обратная связь, студенты вместе с представителем объясняли темы. Позже, преподаватели объясняли им
    и остальным присутствующим то, что было сказано ранее.&nbsp;</p>
<img src="server/images/1.4.JPG" class="img-responsive">
<p>Результаты труда&nbsp;можете просмотреть перейдя по ссылкам ниже.</p>
<img src="server/images/1.3.JPG" class="img-responsive">
<p>Сайт школы Бекназар:&nbsp;
    <a href="http://beknasar-school.net.kg/" target="_blank">http://beknasar-school.net.kg/</a>&nbsp;</p>

<p>Сайт школы Артыкбаев:&nbsp;
    <a href="http://artykbaev-school.net.kg/" target="_blank">http://artykbaev-school.net.kg/</a>
</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Praxis in Toktogul',
            'slug' => 'praxis-in-toktogul-de',
            'description' => 'Studenten der Abteilung Telematik, Talantbek Atay und Batyrkanov Nursultan, zusammen mit einem Vertreter einer der führenden Entwickler und KSTU Website avn.kg Saitov Nurlan ging nach Toktogul.',
            'content' => <<<HERE
<p>Studenten der Abteilung Telematik, Talantbek Atay und Batyrkanov Nursultan, zusammen mit einem Vertreter einer der führenden
    Entwickler und KSTU Website avn.kg Saitov Nurlan ging nach Toktogul.</p>

<p>&nbsp;</p>

<p>
    <img class="img-responsive" src="http://telematika.kstu.kg/server/images/1.1.JPG" style="border:0px; color:rgb(92, 92, 92); font-family:helvetica,sans-serif,arial; font-size:15px; font-stretch:inherit; line-height:21px; margin:0px; padding:0px; vertical-align:baseline">
</p>

<p>In dem Dorf Kyzyl-Uraaa, lehrten sie Informatik-Lehrer aus örtlichen Schulen die Erstellung von Websites auf Basis von Sprach
    Internet-Programmierung HTML. In der Zeit vom 21. bis 24. Juni hat es einen tollen Job gemacht, und die Ergebnisse waren
    sofort.</p>

<p>Lehrer machen die Website ihren Schulen und im Internet veröffentlicht. Sie haben gelernt, nicht nur Code schreiben, für
    die Site und sie auf das Hosting von den Programmen.</p>

<p>&nbsp;&nbsp;&nbsp;</p>

<p>
    <img class="img-responsive" src="http://telematika.kstu.kg/server/images/1.2.JPG" style="border:0px; color:rgb(92, 92, 92); font-family:helvetica,sans-serif,arial; font-size:15px; font-stretch:inherit; line-height:21px; margin:0px; padding:0px; vertical-align:baseline">
</p>

<p>Das Training wurde Feedback führten die Schüler gemeinsam mit dem Vertreter erklärte Themen. Später erklärte die Lehrer,
    um ihnen und dem Rest des Publikums, was bereits gesagt wurde.</p>

<p>
    <img class="img-responsive" src="http://telematika.kstu.kg/server/images/1.4.JPG" style="border:0px; color:rgb(92, 92, 92); font-family:helvetica,sans-serif,arial; font-size:15px; font-stretch:inherit; line-height:21px; margin:0px; padding:0px; vertical-align:baseline">
</p>

<p>Ergebnisse der Arbeit können durch Klicken auf die folgenden Links zu sehen.</p>

<p>
    <img class="img-responsive" src="http://telematika.kstu.kg/server/images/1.3.JPG" style="border:0px; color:rgb(92, 92, 92); font-family:helvetica,sans-serif,arial; font-size:15px; font-stretch:inherit; line-height:21px; margin:0px; padding:0px; vertical-align:baseline">
</p>

<p>Website Beknazar Schule:&nbsp;
    <a href="http://beknasar-school.net.kg/" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">http://beknasar-school.net.kg/</a>&nbsp;</p>

<p>Website Artykbaev Schule:&nbsp;
    <a href="http://artykbaev-school.net.kg/" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">http://artykbaev-school.net.kg/</a>
</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Практика в Токтогуле',
            'slug' => 'praktika-v-toktogule-kg',
            'description' => '21-24 июня наши студенты, вместе с представителем КГТУ и ведущим разработчиком сайта avn.kg Саитовым Нурланом побывали в Токтогуле, с целью преподавания HTML.',
            'content' => <<<HERE
<p>Студенты кафедры Телематика, Талантбек Атай и Батырканов Нурсултан, вместе с представителем КГТУ и ведущим разработчиком
    сайта avn.kg&nbsp;Саитовым Нурланом поехали в Токтогул.&nbsp;</p>
<img src="server/images/1.1.JPG" class="img-responsive">
<p>В селе Кызыл-Ураан, они обучали преподавателей информатики местных школ созданию сайтов на основе языка интернет-программирования&nbsp;HTML.
    В период с 21 по 24 июня, была&nbsp;проделана огромная работа, и результаты не заставили себя ждать.&nbsp;</p>

<p>Преподаватели, сделали сайты своих школ и разместили в сети интернет. Они научились не только писать код сайта, но и размещать
    их на хостинг с помощью программ.&nbsp;&nbsp;&nbsp;</p>
<img src="server/images/1.2.JPG" class="img-responsive">
<p>В ходе обучения велась обратная связь, студенты вместе с представителем объясняли темы. Позже, преподаватели объясняли им
    и остальным присутствующим то, что было сказано ранее.&nbsp;</p>
<img src="server/images/1.4.JPG" class="img-responsive">
<p>Результаты труда&nbsp;можете просмотреть перейдя по ссылкам ниже.</p>
<img src="server/images/1.3.JPG" class="img-responsive">
<p>Сайт школы Бекназар:&nbsp;
    <a href="http://beknasar-school.net.kg/" target="_blank">http://beknasar-school.net.kg/</a>&nbsp;</p>

<p>Сайт школы Артыкбаев:&nbsp;
    <a href="http://artykbaev-school.net.kg/" target="_blank">http://artykbaev-school.net.kg/</a>
</p>
HERE
        ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('15.12.2015'),
            'updated_at' => Carbon::parse('15.12.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'On-Line лекция',
            'slug' => 'on-line-lekcija-ru',
            'description' => 'On-Line лекция с Technische Hochschule Köln',
            'content' => <<<HERE
<p>15.12.2015 г. проведена Оn-line лекция с Technische Hochschule Köln для студентов кафедры Телематика на тему "Vorlesung Automatisierungstechnik".
    <br>
    <br> Приложения к On-line лекции:
    <br>
    <a href="server/files/Vorlesung Automatisierungstechnik Kirgistan.pptx" download=""> Vorlesung Automatisierungstechnik Kirgistan </a>
    <br>
    <a href="Handzettel Programmieraufgabe Transportband.pdf" download=""> Handzettel Programmieraufgabe Transportband </a>
    <br>
    <img src="server/images/img1.JPG">
    <img src="server/images/img2.JPG">
    <img src="server/images/img3.JPG">
    <img src="server/images/img4.JPG">
    <img src="server/images/img5.JPG">
    <img src="server/images/img6.JPG">
</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Online-Vorlesung',
            'slug' => 'online-vorlesung-de',
            'description' => 'Online-Vorlesung mit der technischen Hochschule Köln',
            'content' => <<<HERE
 Die Anlagen zur Online-Vorlesung:
<br>
<a href="server/files/Vorlesung Automatisierungstechnik Kirgistan.pptx" download=""> Vorlesung Automatisierungstechnik Kirgistan </a>
<br>
<a href="Handzettel Programmieraufgabe Transportband.pdf" download=""> Handzettel Programmieraufgabe Transportband </a>
<br>
<img src="server/images/img1.JPG">
<img src="server/images/img2.JPG">
<img src="server/images/img3.JPG">
<img src="server/images/img4.JPG">
<img src="server/images/img5.JPG">
<img src="server/images/img6.JPG">
</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'On-Line лекция',
            'slug' => 'on-line-lekcija-kg',
            'description' => 'On-Line лекция с Technische Hochschule Köln',
            'content' => <<<HERE
<p>15.12.2015 г. проведена Оn-line лекция с Technische Hochschule Köln для студентов кафедры Телематика на тему "Vorlesung Automatisierungstechnik".
    <br>
    <br> Приложения к On-line лекции:
    <br>
    <a href="server/files/Vorlesung Automatisierungstechnik Kirgistan.pptx" download=""> Vorlesung Automatisierungstechnik Kirgistan </a>
    <br>
    <a href="Handzettel Programmieraufgabe Transportband.pdf" download=""> Handzettel Programmieraufgabe Transportband </a>
    <br>
    <img src="server/images/img1.JPG">
    <img src="server/images/img2.JPG">
    <img src="server/images/img3.JPG">
    <img src="server/images/img4.JPG">
    <img src="server/images/img5.JPG">
    <img src="server/images/img6.JPG">
</p>
HERE
        ]);

        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('09.01.2016'),
            'updated_at' => Carbon::parse('09.01.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Зимние курсы',
            'slug' => 'zimnie-kursy-ru',
            'description' => 'Курсы для школьников во время зимних каникул.',
            'content' => <<<HERE
<p>С 11 по 22 января 2016г кафедра "Телематика" при поддержке ОФ "Технолэнд" проводит во время зимних каникул для школьников
    курсы по Электронике и Робототехнике.
    <br>
    <img src="server/images/kurss.png" class="img-responsive">
</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Winterkursen',
            'slug' => 'winterkursen-de',
            'description' => 'Kursen für die Schüler in den Winterferien.',
            'content' => <<<HERE
<p>Von 11 bis 22 Januar 2016 der Lehrstuhl "Telematik" mit der Unterstützung "Technoland" während der Winterferien verbringt
    für die Schüler die Kursen in der Elektronik und Robotertechnik.
    <br>
    <img class="img-responsive" src="server/images/kurss.png">
</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Зимние курсы',
            'slug' => 'zimnie-kursy-kg',
            'description' => 'Курсы для школьников во время зимних каникул.',
            'content' => <<<HERE
<p>С 11 по 22 января 2016г кафедра "Телематика" при поддержке ОФ "Технолэнд" проводит во время зимних каникул для школьников
    курсы по Электронике и Робототехнике.
    <br>
    <img src="server/images/kurss.png" class="img-responsive">
</p>
HERE
        ]);
    }
}
