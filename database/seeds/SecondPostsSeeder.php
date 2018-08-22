<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SecondPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('03.07.2015'),
            'updated_at' => Carbon::parse('03.07.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Список стипендиатов по проекту Единая Азия 2015 года',
            'slug' => 'spisok-stipendiatov-po-proektu-edinaya-aziya-2015-goda-ru',
            'description' => 'Представлен список стипендиатов по проекту Единая Азия 2015 года',
            'content' => <<<HERE
<table class="table table-hover">
  <tbody>
    <tr>
      <td>No.</td>
      <td>Name</td>
      <td>College/Faculty</td>
      <td>Grade</td>
      <td>Remarks (Amount, Name of Award, etc.)</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Abdymomynova Kymbat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Ajimkulov Azamat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Artelbekov Aidar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C&lt;br/ &gt; (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Belikov Andrei</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Bolotbekov Janybek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Jyrgalbekova Bermet</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Ibraimov Meder</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Kadyrakunov Akjol</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Kamchybek kyzy Aizirek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Kosheva Angelina</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>11</td>
      <td>Kyzaeva Saule</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>12</td>
      <td>Kylychbekov Arsen</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13</td>
      <td>Mahmutov Ulukbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>14</td>
      <td>Rezvanov Salih</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>15</td>
      <td>Svetlichnyi Ilya</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>16</td>
      <td>Sopiev Kubatbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>17</td>
      <td>Toktosunov Aibek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>18</td>
      <td>Ulutbekov Duishonaly</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>19</td>
      <td>Erkinbekov Murat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>20</td>
      <td>Abdurazakov Timur</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>21</td>
      <td>Abykeeva Diana</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>22</td>
      <td>Amantaev Aliaskar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>23</td>
      <td>Bektursunov Akimali</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>24</td>
      <td>Gorohov Vladislav</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>25</td>
      <td>Joldoshbekova Perizat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>26</td>
      <td>Jarkynbek kyzy Aizada</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>27</td>
      <td>Jolchubekova Aigerim</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>28</td>
      <td>Imanakunov Sanjar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>29</td>
      <td>Kalmurza uulu Tilek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>30</td>
      <td>Kolesnikov Kirill</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>31</td>
      <td>Lorenc Aleksandr</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>32</td>
      <td>Sultanov Ulugbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>33</td>
      <td>Telepov Bogdan</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>34</td>
      <td>Shygai Janybek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>35</td>
      <td>Ergeshev Marlen</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>36</td>
      <td>Esenbekov Nurdan</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Всего</td>
      <td colspan="2">1500 usd</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Список стипендиатов по проекту Единая Азия 2015 года',
            'slug' => 'spisok-stipendiatov-po-proektu-edinaya-aziya-2015-goda-de',
            'description' => 'Представлен список стипендиатов по проекту Единая Азия 2015 года',
            'content' => <<<HERE
<table class="table table-hover">
  <tbody>
    <tr>
      <td>No.</td>
      <td>Name</td>
      <td>College/Faculty</td>
      <td>Grade</td>
      <td>Remarks (Amount, Name of Award, etc.)</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Abdymomynova Kymbat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Ajimkulov Azamat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Artelbekov Aidar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C&lt;br/ &gt; (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Belikov Andrei</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Bolotbekov Janybek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Jyrgalbekova Bermet</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Ibraimov Meder</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Kadyrakunov Akjol</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Kamchybek kyzy Aizirek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Kosheva Angelina</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>11</td>
      <td>Kyzaeva Saule</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>12</td>
      <td>Kylychbekov Arsen</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13</td>
      <td>Mahmutov Ulukbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>14</td>
      <td>Rezvanov Salih</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>15</td>
      <td>Svetlichnyi Ilya</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>16</td>
      <td>Sopiev Kubatbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>17</td>
      <td>Toktosunov Aibek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>18</td>
      <td>Ulutbekov Duishonaly</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>19</td>
      <td>Erkinbekov Murat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>20</td>
      <td>Abdurazakov Timur</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>21</td>
      <td>Abykeeva Diana</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>22</td>
      <td>Amantaev Aliaskar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>23</td>
      <td>Bektursunov Akimali</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>24</td>
      <td>Gorohov Vladislav</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>25</td>
      <td>Joldoshbekova Perizat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>26</td>
      <td>Jarkynbek kyzy Aizada</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>27</td>
      <td>Jolchubekova Aigerim</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>28</td>
      <td>Imanakunov Sanjar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>29</td>
      <td>Kalmurza uulu Tilek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>30</td>
      <td>Kolesnikov Kirill</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>31</td>
      <td>Lorenc Aleksandr</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>32</td>
      <td>Sultanov Ulugbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>33</td>
      <td>Telepov Bogdan</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>34</td>
      <td>Shygai Janybek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>35</td>
      <td>Ergeshev Marlen</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>36</td>
      <td>Esenbekov Nurdan</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Всего</td>
      <td colspan="2">1500 usd</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Список стипендиатов по проекту Единая Азия 2015 года',
            'slug' => 'spisok-stipendiatov-po-proektu-edinaya-aziya-2015-goda-kg',
            'description' => 'Представлен список стипендиатов по проекту Единая Азия 2015 года',
            'content' => <<<HERE
<table class="table table-hover">
  <tbody>
    <tr>
      <td>No.</td>
      <td>Name</td>
      <td>College/Faculty</td>
      <td>Grade</td>
      <td>Remarks (Amount, Name of Award, etc.)</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Abdymomynova Kymbat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Ajimkulov Azamat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Artelbekov Aidar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C&lt;br/ &gt; (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Belikov Andrei</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Bolotbekov Janybek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Jyrgalbekova Bermet</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Ibraimov Meder</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Kadyrakunov Akjol</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Kamchybek kyzy Aizirek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>10</td>
      <td>Kosheva Angelina</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>11</td>
      <td>Kyzaeva Saule</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>12</td>
      <td>Kylychbekov Arsen</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13</td>
      <td>Mahmutov Ulukbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>14</td>
      <td>Rezvanov Salih</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>15</td>
      <td>Svetlichnyi Ilya</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>16</td>
      <td>Sopiev Kubatbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>17</td>
      <td>Toktosunov Aibek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>18</td>
      <td>Ulutbekov Duishonaly</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>19</td>
      <td>Erkinbekov Murat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>20</td>
      <td>Abdurazakov Timur</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>21</td>
      <td>Abykeeva Diana</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>22</td>
      <td>Amantaev Aliaskar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>23</td>
      <td>Bektursunov Akimali</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>24</td>
      <td>Gorohov Vladislav</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>25</td>
      <td>Joldoshbekova Perizat</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>26</td>
      <td>Jarkynbek kyzy Aizada</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>27</td>
      <td>Jolchubekova Aigerim</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>28</td>
      <td>Imanakunov Sanjar</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>29</td>
      <td>Kalmurza uulu Tilek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>30</td>
      <td>Kolesnikov Kirill</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>31</td>
      <td>Lorenc Aleksandr</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>B
        <br> (Very Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>32</td>
      <td>Sultanov Ulugbek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>33</td>
      <td>Telepov Bogdan</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>A
        <br> (Excellent)</td>
      <td>Award
        <br> 100 usd</td>
    </tr>
    <tr>
      <td>34</td>
      <td>Shygai Janybek</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>35</td>
      <td>Ergeshev Marlen</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>C
        <br> (Good)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>36</td>
      <td>Esenbekov Nurdan</td>
      <td>Kyrgyz German Technical Institute, Telematics department</td>
      <td>F
        <br> (Poor)</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">Всего</td>
      <td colspan="2">1500 usd</td>
    </tr>
  </tbody>
</table>
HERE
        ]);





        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('08.05.2015'),
            'updated_at' => Carbon::parse('08.05.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'IRTC junge Wissenschaftler, Doktoranden
            "Jugend in innovative Forschung"',
            'slug' => 'irtc-junge-wissenschaftler-doktoranden-jugend-in-innovative-forschung-ru',
            'description' => 'Liste der Forschungsarbeiten von Studenten des Lehrstuhls “Telematik” 2015',
            'content' => <<<HERE
<p>
  <b>IRTC junge Wissenschaftler, Doktoranden "Jugend in innovative Forschung"</b>
  <br>
  <b>Abschnitt "Telematik" auf KGTI</b>
  <br>
  <br>
  <b>1. Die Liste der Mitglieder der Arbeitsgruppe für die Auswahl der besten Berichte</b>
  <br>
</p>
<ul>
  <li>Vorsitzender: Leiter der Abteilung Ph.D., Associate Professor für Koshoeva B.B.</li>
  <li>Stellvertretender Vorsitzender: Acting Assoc., Medralieva B.N.</li>
  <li>Sekretär: Dozent Imashova G.I.</li>
  <li>Mitglieder: Dozent Eshimbekova R.S., Dozent Alymkulova A.A.</li>
</ul>
<br>
<br>
<b>2. Planen Anhörungen und Auswahl von wissenschaftlichen Arbeiten junger Wissenschaftler, Doktoranden des Abschnitts "Telematik"
  nach der Ordnung №2/07</b>
<br>
<b>Ort der Begegnung Auditorium. 2/420</b>
<br>
<ul>
  <li>Erste Phase: 17. April 2015.</li>
  <li>Zweite Phase: 14. Mai 2015.</li>
</ul>
<br>
<br>
<b>3. Die Liste der wissenschaftlichen Arbeiten von Nachwuchswissenschaftlern, Doktoranden in der ersten Phase beteiligten</b>
<br>
<table class="table table-hover">
  <tbody>
    <tr>
      <td>№</td>
      <td>Thema</td>
      <td>Gruppe
        <br>Name</td>
      <td>Leiter der Forschungsarbeit</td>
    </tr>
    <tr>
      <td>1.</td>
      <td>Entwicklung der Website des Lehrstuhls „Telematik“</td>
      <td>Tg-1-11
        <br>Tairahunov А.R.</td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Entwicklung eines Haussicherheitssystems mit Arduino Uno</td>
      <td>Tg-1-12
        <br> Schekerbek u N.
        <br> Tologonova А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Entwicklung des Fördersystems und des Verteilungkrans mit PLC Siemens</td>
      <td>Tg-1-11
        <br> Sabyrova А.Y.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Entwicklung einer Wetterstation mit Arduino </td>
      <td>Tg-1-13
        <br> Amantaev А.А.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Hausschutzroboter mit Arduino</td>
      <td>Tг-1-13
        <br> Ajimkulov А.E.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Remote Management von Plattform Arduino</td>
      <td>Tg-1-11
        <br> Marsova А.М.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Entwicklung eines „Smart Hauses“ mit Raspberry Pi</td>
      <td>Tg-1-11
        <br> Omuralieva B.М.,
        <br> Tg-2-12
        <br> Batyrkanov N., Abdyldaev К.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>8.</td>
      <td>Entwicklung eines Stands und Steuerungsprogramms für einen Pneumatik Zylinder</td>
      <td>Tg-1-12
        <br> Azarova M.
        <br> Taalaibekova G. Mambetisaev S.
        <br> Osipov R.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>9.</td>
      <td>Entwicklung eines (on-bort-diagnostic) OBD fuer Autos mit Herstellungsjahr bis 2001 </td>
      <td>Tg-1-11
        <br> Kuzmin М.V.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>10.</td>
      <td>Optimierung der Funktion von Industrieöfen für Backwaren im Bäckerei “Schwarzwaldbäckerei”</td>
      <td>Tg-1-11
        <br> Sadabaeva А.P.
      </td>
      <td>DAАD Lektor
        <br> Stefan Dilfer
      </td>
    </tr>
    <tr>
      <td>11.</td>
      <td>Entwicklung eines Stands «Autoparkplatz Steuerung mit PLC Siemens S7-300»</td>
      <td>Tg-1-13
        <br> Gorohov V.V.
        <br> Belikov А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>12.</td>
      <td>Entwicklung einer Makette "Elevator" und Steuerungsprogramm mit PLC Siemens S7-300</td>
      <td>Tg1-13
        <br> Kalmurza u. Т.
        <br> Imanakunov S.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>13.</td>
      <td>Entwicklung der Steuerungsprogramm und Visualisierungspanels für eine Pressanlage mit TIA Portal</td>
      <td>Tg-1-12
        <br> Taalaibek u. S.
        <br> Amangulova А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>14.</td>
      <td>Entwicklung eines Praktikum Stands für Elektronik und Elektrotechnik.</td>
      <td>Tg-1-12
        <br> Umrihin S.
        <br> Rybina A.</td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>15.</td>
      <td>Entwicklung eines Schulungsstands und Steuerungsprogramms für "Industrielle Fließband"</td>
      <td>Akylbekov A. A</td>
      <td>Koschoeva B. B</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'IRTC junge Wissenschaftler, Doktoranden
            "Jugend in innovative Forschung"',
            'slug' => 'irtc-junge-wissenschaftler-doktoranden-jugend-in-innovative-forschung-de',
            'description' => 'Liste der Forschungsarbeiten von Studenten des Lehrstuhls “Telematik” 2015',
            'content' => <<<HERE
<p>
  <b>IRTC junge Wissenschaftler, Doktoranden "Jugend in innovative Forschung"</b>
  <br>
  <b>Abschnitt "Telematik" auf KGTI</b>
  <br>
  <br>
  <b>1. Die Liste der Mitglieder der Arbeitsgruppe für die Auswahl der besten Berichte</b>
  <br>
</p>
<ul>
  <li>Vorsitzender: Leiter der Abteilung Ph.D., Associate Professor für Koshoeva B.B.</li>
  <li>Stellvertretender Vorsitzender: Acting Assoc., Medralieva B.N.</li>
  <li>Sekretär: Dozent Imashova G.I.</li>
  <li>Mitglieder: Dozent Eshimbekova R.S., Dozent Alymkulova A.A.</li>
</ul>
<br>
<br>
<b>2. Planen Anhörungen und Auswahl von wissenschaftlichen Arbeiten junger Wissenschaftler, Doktoranden des Abschnitts "Telematik"
  nach der Ordnung №2/07</b>
<br>
<b>Ort der Begegnung Auditorium. 2/420</b>
<br>
<ul>
  <li>Erste Phase: 17. April 2015.</li>
  <li>Zweite Phase: 14. Mai 2015.</li>
</ul>
<br>
<br>
<b>3. Die Liste der wissenschaftlichen Arbeiten von Nachwuchswissenschaftlern, Doktoranden in der ersten Phase beteiligten</b>
<br>
<table class="table table-hover">
  <tbody>
    <tr>
      <td>№</td>
      <td>Thema</td>
      <td>Gruppe
        <br>Name</td>
      <td>Leiter der Forschungsarbeit</td>
    </tr>
    <tr>
      <td>1.</td>
      <td>Entwicklung der Website des Lehrstuhls „Telematik“</td>
      <td>Tg-1-11
        <br>Tairahunov А.R.</td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Entwicklung eines Haussicherheitssystems mit Arduino Uno</td>
      <td>Tg-1-12
        <br> Schekerbek u N.
        <br> Tologonova А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Entwicklung des Fördersystems und des Verteilungkrans mit PLC Siemens</td>
      <td>Tg-1-11
        <br> Sabyrova А.Y.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Entwicklung einer Wetterstation mit Arduino </td>
      <td>Tg-1-13
        <br> Amantaev А.А.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Hausschutzroboter mit Arduino</td>
      <td>Tг-1-13
        <br> Ajimkulov А.E.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Remote Management von Plattform Arduino</td>
      <td>Tg-1-11
        <br> Marsova А.М.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Entwicklung eines „Smart Hauses“ mit Raspberry Pi</td>
      <td>Tg-1-11
        <br> Omuralieva B.М.,
        <br> Tg-2-12
        <br> Batyrkanov N., Abdyldaev К.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>8.</td>
      <td>Entwicklung eines Stands und Steuerungsprogramms für einen Pneumatik Zylinder</td>
      <td>Tg-1-12
        <br> Azarova M.
        <br> Taalaibekova G. Mambetisaev S.
        <br> Osipov R.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>9.</td>
      <td>Entwicklung eines (on-bort-diagnostic) OBD fuer Autos mit Herstellungsjahr bis 2001 </td>
      <td>Tg-1-11
        <br> Kuzmin М.V.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>10.</td>
      <td>Optimierung der Funktion von Industrieöfen für Backwaren im Bäckerei “Schwarzwaldbäckerei”</td>
      <td>Tg-1-11
        <br> Sadabaeva А.P.
      </td>
      <td>DAАD Lektor
        <br> Stefan Dilfer
      </td>
    </tr>
    <tr>
      <td>11.</td>
      <td>Entwicklung eines Stands «Autoparkplatz Steuerung mit PLC Siemens S7-300»</td>
      <td>Tg-1-13
        <br> Gorohov V.V.
        <br> Belikov А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>12.</td>
      <td>Entwicklung einer Makette "Elevator" und Steuerungsprogramm mit PLC Siemens S7-300</td>
      <td>Tg1-13
        <br> Kalmurza u. Т.
        <br> Imanakunov S.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>13.</td>
      <td>Entwicklung der Steuerungsprogramm und Visualisierungspanels für eine Pressanlage mit TIA Portal</td>
      <td>Tg-1-12
        <br> Taalaibek u. S.
        <br> Amangulova А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>14.</td>
      <td>Entwicklung eines Praktikum Stands für Elektronik und Elektrotechnik.</td>
      <td>Tg-1-12
        <br> Umrihin S.
        <br> Rybina A.</td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>15.</td>
      <td>Entwicklung eines Schulungsstands und Steuerungsprogramms für "Industrielle Fließband"</td>
      <td>Akylbekov A. A</td>
      <td>Koschoeva B. B</td>
    </tr>
  </tbody>
</table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'IRTC junge Wissenschaftler, Doktoranden
            "Jugend in innovative Forschung"',
            'slug' => 'irtc-junge-wissenschaftler-doktoranden-jugend-in-innovative-forschung-kg',
            'description' => 'Liste der Forschungsarbeiten von Studenten des Lehrstuhls “Telematik” 2015',
            'content' => <<<HERE
<p>
  <b>IRTC junge Wissenschaftler, Doktoranden "Jugend in innovative Forschung"</b>
  <br>
  <b>Abschnitt "Telematik" auf KGTI</b>
  <br>
  <br>
  <b>1. Die Liste der Mitglieder der Arbeitsgruppe für die Auswahl der besten Berichte</b>
  <br>
</p>
<ul>
  <li>Vorsitzender: Leiter der Abteilung Ph.D., Associate Professor für Koshoeva B.B.</li>
  <li>Stellvertretender Vorsitzender: Acting Assoc., Medralieva B.N.</li>
  <li>Sekretär: Dozent Imashova G.I.</li>
  <li>Mitglieder: Dozent Eshimbekova R.S., Dozent Alymkulova A.A.</li>
</ul>
<br>
<br>
<b>2. Planen Anhörungen und Auswahl von wissenschaftlichen Arbeiten junger Wissenschaftler, Doktoranden des Abschnitts "Telematik"
  nach der Ordnung №2/07</b>
<br>
<b>Ort der Begegnung Auditorium. 2/420</b>
<br>
<ul>
  <li>Erste Phase: 17. April 2015.</li>
  <li>Zweite Phase: 14. Mai 2015.</li>
</ul>
<br>
<br>
<b>3. Die Liste der wissenschaftlichen Arbeiten von Nachwuchswissenschaftlern, Doktoranden in der ersten Phase beteiligten</b>
<br>
<table class="table table-hover">
  <tbody>
    <tr>
      <td>№</td>
      <td>Thema</td>
      <td>Gruppe
        <br>Name</td>
      <td>Leiter der Forschungsarbeit</td>
    </tr>
    <tr>
      <td>1.</td>
      <td>Entwicklung der Website des Lehrstuhls „Telematik“</td>
      <td>Tg-1-11
        <br>Tairahunov А.R.</td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Entwicklung eines Haussicherheitssystems mit Arduino Uno</td>
      <td>Tg-1-12
        <br> Schekerbek u N.
        <br> Tologonova А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Entwicklung des Fördersystems und des Verteilungkrans mit PLC Siemens</td>
      <td>Tg-1-11
        <br> Sabyrova А.Y.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Entwicklung einer Wetterstation mit Arduino </td>
      <td>Tg-1-13
        <br> Amantaev А.А.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Hausschutzroboter mit Arduino</td>
      <td>Tг-1-13
        <br> Ajimkulov А.E.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Remote Management von Plattform Arduino</td>
      <td>Tg-1-11
        <br> Marsova А.М.
      </td>
      <td>Sultangazieva R. T</td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Entwicklung eines „Smart Hauses“ mit Raspberry Pi</td>
      <td>Tg-1-11
        <br> Omuralieva B.М.,
        <br> Tg-2-12
        <br> Batyrkanov N., Abdyldaev К.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>8.</td>
      <td>Entwicklung eines Stands und Steuerungsprogramms für einen Pneumatik Zylinder</td>
      <td>Tg-1-12
        <br> Azarova M.
        <br> Taalaibekova G. Mambetisaev S.
        <br> Osipov R.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>9.</td>
      <td>Entwicklung eines (on-bort-diagnostic) OBD fuer Autos mit Herstellungsjahr bis 2001 </td>
      <td>Tg-1-11
        <br> Kuzmin М.V.
      </td>
      <td>Koschoeva B. B</td>
    </tr>
    <tr>
      <td>10.</td>
      <td>Optimierung der Funktion von Industrieöfen für Backwaren im Bäckerei “Schwarzwaldbäckerei”</td>
      <td>Tg-1-11
        <br> Sadabaeva А.P.
      </td>
      <td>DAАD Lektor
        <br> Stefan Dilfer
      </td>
    </tr>
    <tr>
      <td>11.</td>
      <td>Entwicklung eines Stands «Autoparkplatz Steuerung mit PLC Siemens S7-300»</td>
      <td>Tg-1-13
        <br> Gorohov V.V.
        <br> Belikov А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>12.</td>
      <td>Entwicklung einer Makette "Elevator" und Steuerungsprogramm mit PLC Siemens S7-300</td>
      <td>Tg1-13
        <br> Kalmurza u. Т.
        <br> Imanakunov S.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>13.</td>
      <td>Entwicklung der Steuerungsprogramm und Visualisierungspanels für eine Pressanlage mit TIA Portal</td>
      <td>Tg-1-12
        <br> Taalaibek u. S.
        <br> Amangulova А.
      </td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>14.</td>
      <td>Entwicklung eines Praktikum Stands für Elektronik und Elektrotechnik.</td>
      <td>Tg-1-12
        <br> Umrihin S.
        <br> Rybina A.</td>
      <td>Akylbekov A. A</td>
    </tr>
    <tr>
      <td>15.</td>
      <td>Entwicklung eines Schulungsstands und Steuerungsprogramms für "Industrielle Fließband"</td>
      <td>Akylbekov A. A</td>
      <td>Koschoeva B. B</td>
    </tr>
  </tbody>
</table>
HERE
        ]);





        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('03.07.2015'),
            'updated_at' => Carbon::parse('03.07.2015')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях»',
            'slug' => 'mntk-molodyh-uchenyh-aspirantov-studentov-molodezh-v-innovacionnyh-issledovaniyah-ru',
            'description' => 'Представлен перечень научных докладов молодых ученых, аспирантов, студентов участвующих в первом этапе.',
            'content' => <<<HERE
<p><b>МНТК молодых ученых, аспирантов, студентов
«Молодежь в инновационных исследованиях»
</b><br>
    <b>Секция «Телематика» по КГТИ</b><br><br>

    <b>1. Список членов рабочей группы по отбору лучших докладов</b><br>
  </p>
  <ul>
    <li>Председатель: зав. каф. к.т.н., доц. Кошоева Б.Б.</li>
    <li>Зам. председателя: и.о. доц., Медралиева Б.Н.</li>
    <li>Секретарь: преп. Имашова Г.И.</li>
    <li>Члены: ст. преп. Ешимбекова Р.С., ст. преп. Алымкулова А.А.</li>
  </ul><br><br>

  <b>2. График слушания и отбора научных докладов молодых ученых, аспирантов, студентов секции «Телематика» согласно приказу №2/07</b><br>
  <b>Место заседания ауд. 2/420</b><br>
  <ul>
    <li>первый этап: 17 апреля 2015 г</li>
    <li>второй этап: 14 мая 2015 г</li>
  </ul><br><br>

  <b>3. Перечень научных докладов молодых ученых, аспирантов, студентов участвующих в первом этапе</b><br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Метеостанция на МПС Arduino</td>
        <td>гр. Тг-1-13<br> Амантаев А.А.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Умный дом на базе Arduino</td>
        <td>гр. Тг-1-13<br> Ажимкулов А.Э.
        </td>
        <td>к.ф-м.н., доц.. Султангазиева Р.Т</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Разработка сайта кафедры «Телематика»</td>
        <td>гр. Тг-1-11<br> Тайрахунов А.Р.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Разработка конвейерной установки и распределительного крана на базе промышленного контроллера Siemens</td>
        <td>гр. Тг-1-11<br> Сабырова А.Ы.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Удаленное управление платформ Arduino</td>
        <td>гр. Тг-1-11<br> Марсова А.М.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Разработка умного дома на базе Raspberry Pi</td>
        <td>гр. Тг-1-11<br> Омуралиева Б.М.,<br> Гр.Тг-2-12
          <br> Батырканов Н., Абдылдаев К.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка OBD (on-bort-diagnostic) для автомобилей выпуска до 2001 года</td>
        <td>гр. Тг-1-11<br> Кузьмин М.В.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Автоматизация работы отдела кадров НЦКиТ им. М.Миррахимова при Минздраве КР</td>
        <td>гр. Тг-1-11<br> Атаярова Р.А.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Автоматизация работ врачей отделения рентгена-хирургии</td>
        <td>гр. Тг-1-11<br> Мирланова А.М.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>10.</td>
        <td>Модернизация сети мобильной связи Ошской области на базе технологии LTE</td>
        <td>гр. Тг-1-11<br> Сауров А.Р.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>11.</td>
        <td>Проектирование мобильной сети на базе технологии WIMAX</td>
        <td>гр. Тг-1-11 Атакеев А.М.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>12.</td>
        <td>Проектирование виртуальной сети для судебной медицинской экспертизы г. Бишкек и Талас</td>
        <td>гр. Тг-1-11<br> Тимурлан у. Т.
        </td>
        <td>ст. преп. Алымкулова А.А.
        </td>
      </tr>
      <tr>
        <td>13.</td>
        <td>Разработка сетевой программы компьютерного тестирования знаний</td>
        <td>гр. Тг-1-11<br> Эргешова А.У.
        </td>
        <td>ст. преп. Алымкулова А.А.
        </td>
      </tr>
      <tr>
        <td>14.</td>
        <td>Оптимизация работы промышленной печи для хлебобулочных изделий</td>
        <td>гр. Тг-1-11<br> Садабаева А.П.
        </td>
        <td>лектор DAАD Стефан Дильфер</td>
      </tr>
      <tr>
        <td>15.</td>
        <td>Разработка стенда «Управление парковкой автомобилей»</td>
        <td>гр. Тг-1-13<br> Горохов В.В.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>16.</td>
        <td>Разработка стенда «Шифратор» на базе ПЛК S7-300</td>
        <td>гр. Тг-1-13<br> Калмурза у. Т.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>17.</td>
        <td>Разработка программного управления прессом с помощью TIА-Portal.</td>
        <td>гр. Тг-1-12<br> Таалайбек у С.<br> Амангулова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>18.</td>
        <td>Разработка стенда и программы управления пневматическим цилиндаром.</td>
        <td>гр. Тг-1-12<br> Азарова М.<br> Таалайбекова Г.<br> Мамбетисаев С.<br> Осипов Р.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>19.</td>
        <td>Разработка учебного стенда по электронике и электротехнике.</td>
        <td>гр. Тг-1-12<br> Умрихин С.<br> Рыбина А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>20.</td>
        <td>Разработка системы безопсности помещения с помощью Arduino Uno.</td>
        <td>гр. Тг-1-12<br> Шекербек у Н.<br> Тологонова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>21.</td>
        <td>Разработка учебного стенда и программа управления «Промышленный конвейер».</td>
        <td>Акылбеков А.А.</td>
        <td></td>
      </tr>
    </tbody>
  </table><br><br> Количество сделанных докладов -21, из них:<br>
  <ul>
    <li>реферативных - 4</li>
    <li>прикладного научного характера - 16</li>
    <li>научного характера - 1</li>
  </ul><br><br> 15 докладов рекомендуются для участия на II туре МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях» по следующим секциям:<br><br> 1. секция «Электроника и телекоммуникационные сети»: <b>7 работ.</b><br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Метеостанция на МПС Arduino </td>
        <td>гр. Тг-1-13<br> Амантаев А.А.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Умный дом на базе Arduino</td>
        <td>гр. Тг-1-13<br> Ажимкулов А.Э.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Удаленное управление платформ Arduino</td>
        <td>гр. Тг-1-11 Марсова А.М.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Разработка умного дома на базе Raspberry Pi</td>
        <td>гр. Тг-1-11<br> Омуралиева Б.М.,<br> Гр.Тг-2-12
          <br> Батырканов Н., Абдылдаев К.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Разработка OBD (on-bort-diagnostic) для автомобилей выпуска до 2001 года</td>
        <td>гр. Тг-1-11<br> Кузьмин М.В.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Модернизация сети мобильной связи Ошской области на базе технологии LTE</td>
        <td>гр. Тг-1-11 Сауров А.Р.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка системы безопасности помещения с помощью Arduino Uno.</td>
        <td>гр. Тг-1-12<br> Шекербек у Н.<br> Тологонова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
    </tbody>
  </table><br><br> 2. секция «Автоматизация и управление, интеллектуальные системы»: <b>10 работ</b>.<br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Разработка конвейерной установки и распределительного крана на базе промышленного контроллера Siemens</td>
        <td>гр. Тг-1-11<br> Сабырова А.Ы.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Автоматизация работы отдела кадров НЦКиТ им. М.Миррахимова при Минздраве КР</td>
        <td>гр. Тг-1-11 Атаярова Р.А.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Автоматизация работ врачей отделения рентгена-хирургии</td>
        <td>гр. Тг-1-11 Мирланова А.М.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Оптимизация работы промышленной печи для хлебобулочных изделий</td>
        <td>гр. Тг-1-11<br> Садабаева А.П.
        </td>
        <td>лектор DAАD Стефан Дильфер</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Разработка стенда «Управление парковкой автомобилей»</td>
        <td>гр. Тг-1-13<br> Горохов В.В.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Разработка стенда «Шифратор» на базе ПЛК S7-300</td>
        <td>гр. Тг-1-13<br> Калмурза у. Т.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка программного управления прессом с помощью TIА-Portal.</td>
        <td>гр. Тг-1-12<br> Таалайбек у С.<br> Амангулова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Разработка стенда и программы управления пневматическим цилиндром.</td>
        <td>гр. Тг-1-12<br> Азарова М.<br> Таалайбекова Г.<br> Мамбетисаев С.<br> Осипов Р.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Разработка учебного стенда по электронике и электротехнике.</td>
        <td>гр. Тг-1-12 Умрихин С. Рыбина А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>10.</td>
        <td>Разработка учебного стенда и программа управления «Промышленный конвейер».</td>
        <td>Акылбеков А.А.</td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
    </tbody>
  </table><br><br> Данные работы комиссия также рекомендует для публикации в сборнике научных трудов МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях».<br><br>

  <b>Председатель: зав. каф.  к.т.н., доц. Кошоева Б.Б.<br>
Секретарь: преп. Имашова. Г.И</b>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях»',
            'slug' => 'mntk-molodyh-uchenyh-aspirantov-studentov-molodezh-v-innovacionnyh-issledovaniyah-de',
            'description' => 'Представлен перечень научных докладов молодых ученых, аспирантов, студентов участвующих в первом этапе.',
            'content' => <<<HERE
<p><b>МНТК молодых ученых, аспирантов, студентов
«Молодежь в инновационных исследованиях»
</b><br>
    <b>Секция «Телематика» по КГТИ</b><br><br>

    <b>1. Список членов рабочей группы по отбору лучших докладов</b><br>
  </p>
  <ul>
    <li>Председатель: зав. каф. к.т.н., доц. Кошоева Б.Б.</li>
    <li>Зам. председателя: и.о. доц., Медралиева Б.Н.</li>
    <li>Секретарь: преп. Имашова Г.И.</li>
    <li>Члены: ст. преп. Ешимбекова Р.С., ст. преп. Алымкулова А.А.</li>
  </ul><br><br>

  <b>2. График слушания и отбора научных докладов молодых ученых, аспирантов, студентов секции «Телематика» согласно приказу №2/07</b><br>
  <b>Место заседания ауд. 2/420</b><br>
  <ul>
    <li>первый этап: 17 апреля 2015 г</li>
    <li>второй этап: 14 мая 2015 г</li>
  </ul><br><br>

  <b>3. Перечень научных докладов молодых ученых, аспирантов, студентов участвующих в первом этапе</b><br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Метеостанция на МПС Arduino</td>
        <td>гр. Тг-1-13<br> Амантаев А.А.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Умный дом на базе Arduino</td>
        <td>гр. Тг-1-13<br> Ажимкулов А.Э.
        </td>
        <td>к.ф-м.н., доц.. Султангазиева Р.Т</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Разработка сайта кафедры «Телематика»</td>
        <td>гр. Тг-1-11<br> Тайрахунов А.Р.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Разработка конвейерной установки и распределительного крана на базе промышленного контроллера Siemens</td>
        <td>гр. Тг-1-11<br> Сабырова А.Ы.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Удаленное управление платформ Arduino</td>
        <td>гр. Тг-1-11<br> Марсова А.М.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Разработка умного дома на базе Raspberry Pi</td>
        <td>гр. Тг-1-11<br> Омуралиева Б.М.,<br> Гр.Тг-2-12
          <br> Батырканов Н., Абдылдаев К.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка OBD (on-bort-diagnostic) для автомобилей выпуска до 2001 года</td>
        <td>гр. Тг-1-11<br> Кузьмин М.В.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Автоматизация работы отдела кадров НЦКиТ им. М.Миррахимова при Минздраве КР</td>
        <td>гр. Тг-1-11<br> Атаярова Р.А.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Автоматизация работ врачей отделения рентгена-хирургии</td>
        <td>гр. Тг-1-11<br> Мирланова А.М.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>10.</td>
        <td>Модернизация сети мобильной связи Ошской области на базе технологии LTE</td>
        <td>гр. Тг-1-11<br> Сауров А.Р.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>11.</td>
        <td>Проектирование мобильной сети на базе технологии WIMAX</td>
        <td>гр. Тг-1-11 Атакеев А.М.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>12.</td>
        <td>Проектирование виртуальной сети для судебной медицинской экспертизы г. Бишкек и Талас</td>
        <td>гр. Тг-1-11<br> Тимурлан у. Т.
        </td>
        <td>ст. преп. Алымкулова А.А.
        </td>
      </tr>
      <tr>
        <td>13.</td>
        <td>Разработка сетевой программы компьютерного тестирования знаний</td>
        <td>гр. Тг-1-11<br> Эргешова А.У.
        </td>
        <td>ст. преп. Алымкулова А.А.
        </td>
      </tr>
      <tr>
        <td>14.</td>
        <td>Оптимизация работы промышленной печи для хлебобулочных изделий</td>
        <td>гр. Тг-1-11<br> Садабаева А.П.
        </td>
        <td>лектор DAАD Стефан Дильфер</td>
      </tr>
      <tr>
        <td>15.</td>
        <td>Разработка стенда «Управление парковкой автомобилей»</td>
        <td>гр. Тг-1-13<br> Горохов В.В.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>16.</td>
        <td>Разработка стенда «Шифратор» на базе ПЛК S7-300</td>
        <td>гр. Тг-1-13<br> Калмурза у. Т.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>17.</td>
        <td>Разработка программного управления прессом с помощью TIА-Portal.</td>
        <td>гр. Тг-1-12<br> Таалайбек у С.<br> Амангулова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>18.</td>
        <td>Разработка стенда и программы управления пневматическим цилиндаром.</td>
        <td>гр. Тг-1-12<br> Азарова М.<br> Таалайбекова Г.<br> Мамбетисаев С.<br> Осипов Р.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>19.</td>
        <td>Разработка учебного стенда по электронике и электротехнике.</td>
        <td>гр. Тг-1-12<br> Умрихин С.<br> Рыбина А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>20.</td>
        <td>Разработка системы безопсности помещения с помощью Arduino Uno.</td>
        <td>гр. Тг-1-12<br> Шекербек у Н.<br> Тологонова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>21.</td>
        <td>Разработка учебного стенда и программа управления «Промышленный конвейер».</td>
        <td>Акылбеков А.А.</td>
        <td></td>
      </tr>
    </tbody>
  </table><br><br> Количество сделанных докладов -21, из них:<br>
  <ul>
    <li>реферативных - 4</li>
    <li>прикладного научного характера - 16</li>
    <li>научного характера - 1</li>
  </ul><br><br> 15 докладов рекомендуются для участия на II туре МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях» по следующим секциям:<br><br> 1. секция «Электроника и телекоммуникационные сети»: <b>7 работ.</b><br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Метеостанция на МПС Arduino </td>
        <td>гр. Тг-1-13<br> Амантаев А.А.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Умный дом на базе Arduino</td>
        <td>гр. Тг-1-13<br> Ажимкулов А.Э.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Удаленное управление платформ Arduino</td>
        <td>гр. Тг-1-11 Марсова А.М.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Разработка умного дома на базе Raspberry Pi</td>
        <td>гр. Тг-1-11<br> Омуралиева Б.М.,<br> Гр.Тг-2-12
          <br> Батырканов Н., Абдылдаев К.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Разработка OBD (on-bort-diagnostic) для автомобилей выпуска до 2001 года</td>
        <td>гр. Тг-1-11<br> Кузьмин М.В.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Модернизация сети мобильной связи Ошской области на базе технологии LTE</td>
        <td>гр. Тг-1-11 Сауров А.Р.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка системы безопасности помещения с помощью Arduino Uno.</td>
        <td>гр. Тг-1-12<br> Шекербек у Н.<br> Тологонова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
    </tbody>
  </table><br><br> 2. секция «Автоматизация и управление, интеллектуальные системы»: <b>10 работ</b>.<br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Разработка конвейерной установки и распределительного крана на базе промышленного контроллера Siemens</td>
        <td>гр. Тг-1-11<br> Сабырова А.Ы.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Автоматизация работы отдела кадров НЦКиТ им. М.Миррахимова при Минздраве КР</td>
        <td>гр. Тг-1-11 Атаярова Р.А.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Автоматизация работ врачей отделения рентгена-хирургии</td>
        <td>гр. Тг-1-11 Мирланова А.М.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Оптимизация работы промышленной печи для хлебобулочных изделий</td>
        <td>гр. Тг-1-11<br> Садабаева А.П.
        </td>
        <td>лектор DAАD Стефан Дильфер</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Разработка стенда «Управление парковкой автомобилей»</td>
        <td>гр. Тг-1-13<br> Горохов В.В.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Разработка стенда «Шифратор» на базе ПЛК S7-300</td>
        <td>гр. Тг-1-13<br> Калмурза у. Т.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка программного управления прессом с помощью TIА-Portal.</td>
        <td>гр. Тг-1-12<br> Таалайбек у С.<br> Амангулова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Разработка стенда и программы управления пневматическим цилиндром.</td>
        <td>гр. Тг-1-12<br> Азарова М.<br> Таалайбекова Г.<br> Мамбетисаев С.<br> Осипов Р.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Разработка учебного стенда по электронике и электротехнике.</td>
        <td>гр. Тг-1-12 Умрихин С. Рыбина А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>10.</td>
        <td>Разработка учебного стенда и программа управления «Промышленный конвейер».</td>
        <td>Акылбеков А.А.</td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
    </tbody>
  </table><br><br> Данные работы комиссия также рекомендует для публикации в сборнике научных трудов МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях».<br><br>

  <b>Председатель: зав. каф.  к.т.н., доц. Кошоева Б.Б.<br>
Секретарь: преп. Имашова. Г.И</b>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях»',
            'slug' => 'mntk-molodyh-uchenyh-aspirantov-studentov-molodezh-v-innovacionnyh-issledovaniyah-kg',
            'description' => 'Представлен перечень научных докладов молодых ученых, аспирантов, студентов участвующих в первом этапе.',
            'content' => <<<HERE
<p><b>МНТК молодых ученых, аспирантов, студентов
«Молодежь в инновационных исследованиях»
</b><br>
    <b>Секция «Телематика» по КГТИ</b><br><br>

    <b>1. Список членов рабочей группы по отбору лучших докладов</b><br>
  </p>
  <ul>
    <li>Председатель: зав. каф. к.т.н., доц. Кошоева Б.Б.</li>
    <li>Зам. председателя: и.о. доц., Медралиева Б.Н.</li>
    <li>Секретарь: преп. Имашова Г.И.</li>
    <li>Члены: ст. преп. Ешимбекова Р.С., ст. преп. Алымкулова А.А.</li>
  </ul><br><br>

  <b>2. График слушания и отбора научных докладов молодых ученых, аспирантов, студентов секции «Телематика» согласно приказу №2/07</b><br>
  <b>Место заседания ауд. 2/420</b><br>
  <ul>
    <li>первый этап: 17 апреля 2015 г</li>
    <li>второй этап: 14 мая 2015 г</li>
  </ul><br><br>

  <b>3. Перечень научных докладов молодых ученых, аспирантов, студентов участвующих в первом этапе</b><br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Метеостанция на МПС Arduino</td>
        <td>гр. Тг-1-13<br> Амантаев А.А.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Умный дом на базе Arduino</td>
        <td>гр. Тг-1-13<br> Ажимкулов А.Э.
        </td>
        <td>к.ф-м.н., доц.. Султангазиева Р.Т</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Разработка сайта кафедры «Телематика»</td>
        <td>гр. Тг-1-11<br> Тайрахунов А.Р.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Разработка конвейерной установки и распределительного крана на базе промышленного контроллера Siemens</td>
        <td>гр. Тг-1-11<br> Сабырова А.Ы.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Удаленное управление платформ Arduino</td>
        <td>гр. Тг-1-11<br> Марсова А.М.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Разработка умного дома на базе Raspberry Pi</td>
        <td>гр. Тг-1-11<br> Омуралиева Б.М.,<br> Гр.Тг-2-12
          <br> Батырканов Н., Абдылдаев К.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка OBD (on-bort-diagnostic) для автомобилей выпуска до 2001 года</td>
        <td>гр. Тг-1-11<br> Кузьмин М.В.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Автоматизация работы отдела кадров НЦКиТ им. М.Миррахимова при Минздраве КР</td>
        <td>гр. Тг-1-11<br> Атаярова Р.А.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Автоматизация работ врачей отделения рентгена-хирургии</td>
        <td>гр. Тг-1-11<br> Мирланова А.М.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>10.</td>
        <td>Модернизация сети мобильной связи Ошской области на базе технологии LTE</td>
        <td>гр. Тг-1-11<br> Сауров А.Р.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>11.</td>
        <td>Проектирование мобильной сети на базе технологии WIMAX</td>
        <td>гр. Тг-1-11 Атакеев А.М.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>12.</td>
        <td>Проектирование виртуальной сети для судебной медицинской экспертизы г. Бишкек и Талас</td>
        <td>гр. Тг-1-11<br> Тимурлан у. Т.
        </td>
        <td>ст. преп. Алымкулова А.А.
        </td>
      </tr>
      <tr>
        <td>13.</td>
        <td>Разработка сетевой программы компьютерного тестирования знаний</td>
        <td>гр. Тг-1-11<br> Эргешова А.У.
        </td>
        <td>ст. преп. Алымкулова А.А.
        </td>
      </tr>
      <tr>
        <td>14.</td>
        <td>Оптимизация работы промышленной печи для хлебобулочных изделий</td>
        <td>гр. Тг-1-11<br> Садабаева А.П.
        </td>
        <td>лектор DAАD Стефан Дильфер</td>
      </tr>
      <tr>
        <td>15.</td>
        <td>Разработка стенда «Управление парковкой автомобилей»</td>
        <td>гр. Тг-1-13<br> Горохов В.В.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>16.</td>
        <td>Разработка стенда «Шифратор» на базе ПЛК S7-300</td>
        <td>гр. Тг-1-13<br> Калмурза у. Т.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>17.</td>
        <td>Разработка программного управления прессом с помощью TIА-Portal.</td>
        <td>гр. Тг-1-12<br> Таалайбек у С.<br> Амангулова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>18.</td>
        <td>Разработка стенда и программы управления пневматическим цилиндаром.</td>
        <td>гр. Тг-1-12<br> Азарова М.<br> Таалайбекова Г.<br> Мамбетисаев С.<br> Осипов Р.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>19.</td>
        <td>Разработка учебного стенда по электронике и электротехнике.</td>
        <td>гр. Тг-1-12<br> Умрихин С.<br> Рыбина А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>20.</td>
        <td>Разработка системы безопсности помещения с помощью Arduino Uno.</td>
        <td>гр. Тг-1-12<br> Шекербек у Н.<br> Тологонова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>21.</td>
        <td>Разработка учебного стенда и программа управления «Промышленный конвейер».</td>
        <td>Акылбеков А.А.</td>
        <td></td>
      </tr>
    </tbody>
  </table><br><br> Количество сделанных докладов -21, из них:<br>
  <ul>
    <li>реферативных - 4</li>
    <li>прикладного научного характера - 16</li>
    <li>научного характера - 1</li>
  </ul><br><br> 15 докладов рекомендуются для участия на II туре МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях» по следующим секциям:<br><br> 1. секция «Электроника и телекоммуникационные сети»: <b>7 работ.</b><br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Метеостанция на МПС Arduino </td>
        <td>гр. Тг-1-13<br> Амантаев А.А.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Умный дом на базе Arduino</td>
        <td>гр. Тг-1-13<br> Ажимкулов А.Э.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Удаленное управление платформ Arduino</td>
        <td>гр. Тг-1-11 Марсова А.М.
        </td>
        <td>к.ф-м.н., доц. Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Разработка умного дома на базе Raspberry Pi</td>
        <td>гр. Тг-1-11<br> Омуралиева Б.М.,<br> Гр.Тг-2-12
          <br> Батырканов Н., Абдылдаев К.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Разработка OBD (on-bort-diagnostic) для автомобилей выпуска до 2001 года</td>
        <td>гр. Тг-1-11<br> Кузьмин М.В.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Модернизация сети мобильной связи Ошской области на базе технологии LTE</td>
        <td>гр. Тг-1-11 Сауров А.Р.
        </td>
        <td>ст. преп. Ешимбекова Р.С.
        </td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка системы безопасности помещения с помощью Arduino Uno.</td>
        <td>гр. Тг-1-12<br> Шекербек у Н.<br> Тологонова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
    </tbody>
  </table><br><br> 2. секция «Автоматизация и управление, интеллектуальные системы»: <b>10 работ</b>.<br>

  <table class="table table-hover">
    <tbody>
      <tr>
        <td>№</td>
        <td>Темы докладов</td>
        <td>Ф.И.О. ст. гр.</td>
        <td>Ф.И.О. руководителя</td>
      </tr>
      <tr>
        <td>1.</td>
        <td>Разработка конвейерной установки и распределительного крана на базе промышленного контроллера Siemens</td>
        <td>гр. Тг-1-11<br> Сабырова А.Ы.
        </td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Автоматизация работы отдела кадров НЦКиТ им. М.Миррахимова при Минздраве КР</td>
        <td>гр. Тг-1-11 Атаярова Р.А.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Автоматизация работ врачей отделения рентгена-хирургии</td>
        <td>гр. Тг-1-11 Мирланова А.М.
        </td>
        <td>и.о. доц., Медралиева Б.Н.
        </td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Оптимизация работы промышленной печи для хлебобулочных изделий</td>
        <td>гр. Тг-1-11<br> Садабаева А.П.
        </td>
        <td>лектор DAАD Стефан Дильфер</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Разработка стенда «Управление парковкой автомобилей»</td>
        <td>гр. Тг-1-13<br> Горохов В.В.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Разработка стенда «Шифратор» на базе ПЛК S7-300</td>
        <td>гр. Тг-1-13<br> Калмурза у. Т.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Разработка программного управления прессом с помощью TIА-Portal.</td>
        <td>гр. Тг-1-12<br> Таалайбек у С.<br> Амангулова А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Разработка стенда и программы управления пневматическим цилиндром.</td>
        <td>гр. Тг-1-12<br> Азарова М.<br> Таалайбекова Г.<br> Мамбетисаев С.<br> Осипов Р.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Разработка учебного стенда по электронике и электротехнике.</td>
        <td>гр. Тг-1-12 Умрихин С. Рыбина А.
        </td>
        <td>инженер Акылбеков А.А.</td>
      </tr>
      <tr>
        <td>10.</td>
        <td>Разработка учебного стенда и программа управления «Промышленный конвейер».</td>
        <td>Акылбеков А.А.</td>
        <td>к.т.н., доц. Б.Б.Кошоева</td>
      </tr>
    </tbody>
  </table><br><br> Данные работы комиссия также рекомендует для публикации в сборнике научных трудов МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях».<br><br>

  <b>Председатель: зав. каф.  к.т.н., доц. Кошоева Б.Б.<br>
Секретарь: преп. Имашова. Г.И</b>
HERE
        ]);
        




        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('02.01.2016'),
            'updated_at' => Carbon::parse('02.01.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Экскурсия в РПОРМТР',
            'slug' => 'ekskursiya-v-rpormtr-ru',
            'description' => '17 декабря 2015 года состоялась экскурсия студентов 3 курса на Республиканское Производственное Объединение Радиорелейных Магистралей Телевидения и Радио (РПОРМТР).',
            'content' => <<<HERE
<p>17 декабря 2015 года состоялась экскурсия студентов 3 курса на Республиканское Производственное Объединение Радиорелейных Магистралей Телевидения и Радио (РПОРМТР).<br> Студенты изучили спутниковую приёмо-передающую станцию телевизионного вещания основных
    кыргызских каналов по Кыргызстану. Так же, ребята ознакомились с оборудованием для вещания цифрового телевидения. Студенты были рады ознакомиться с оборудованием современного телевизионного вещания.<br> Кафедра "Телематики" благодарит РПОРМТР за содействие
    в подготовке специалистов в области Телематика.<br>
    <img src="server/images/IMG112.JPG">
    <img src="server/images/IMG113.JPG">
    <img src="server/images/IMG114.JPG">
    <img src="server/images/IMG115.JPG">
    <img src="server/images/IMG116.JPG">
    <img src="server/images/IMG117.JPG"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Die Exkursion in RPRFR',
            'slug' => 'die-exkursion-in-rprfr-de',
            'description' => 'Am 17. Dezember 2015 hat die Exkursion der Studenten des 3 Kurses auf die Republikanische Produktionsvereinigung der Radiorelaismagistralen des Fernsehens und den Rundfunk(RPRFR) stattgefunden',
            'content' => <<<HERE
<p>Am 17. Dezember 2015 hat die Exkursion der Studenten des 3 Kurses auf die Republikanische Produktionsvereinigung der Radiorelaismagistralen des Fernsehens und den Rundfunk (RPRFR) stattgefunden. Die Studenten haben die übernehmen-übergebende Satellitenstation
    der Fernsehsendung der kirgisischen Hauptkanäle durch Kirgisistan studiert. Ebenso, die Studenten haben sich mit der Einrichtung für die Sendung des digitablen Fernsehens bekannt gemacht. Die Studenten waren froh, sich mit der Einrichtung der gegenwärtigen
    Fernsehsendung bekannt zu sein. Der Lehrstuhl "Telematik" dankt RPRFR für die Mithilfe in der Vorbereitung der Fachkräfte im Gebiet Telematik.<br>
    <img src="server/images/IMG112.JPG">
    <img src="server/images/IMG113.JPG">
    <img src="server/images/IMG114.JPG">
    <img src="server/images/IMG115.JPG">
    <img src="server/images/IMG116.JPG">
    <img src="server/images/IMG117.JPG"></p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Экскурсия в РПОРМТР',
            'slug' => 'ekskursiya-v-rpormtr-kg',
            'description' => '17 декабря 2015 года состоялась экскурсия студентов 3 курса на Республиканское Производственное Объединение Радиорелейных Магистралей Телевидения и Радио (РПОРМТР).',
            'content' => <<<HERE
<p>17 декабря 2015 года состоялась экскурсия студентов 3 курса на Республиканское Производственное Объединение Радиорелейных Магистралей Телевидения и Радио (РПОРМТР).<br> Студенты изучили спутниковую приёмо-передающую станцию телевизионного вещания основных
    кыргызских каналов по Кыргызстану. Так же, ребята ознакомились с оборудованием для вещания цифрового телевидения. Студенты были рады ознакомиться с оборудованием современного телевизионного вещания.<br> Кафедра "Телематики" благодарит РПОРМТР за содействие
    в подготовке специалистов в области Телематика.<br>
    <img src="server/images/IMG112.JPG">
    <img src="server/images/IMG113.JPG">
    <img src="server/images/IMG114.JPG">
    <img src="server/images/IMG115.JPG">
    <img src="server/images/IMG116.JPG">
    <img src="server/images/IMG117.JPG"></p>
HERE
        ]);





        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('11.03.2016'),
            'updated_at' => Carbon::parse('11.03.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Продвижение Азиатского сообщества',
            'slug' => 'prodvizhenie-aziatskogo-soobshchestva-ru',
            'description' => '3-марта на кафедре «Телематика»  КГТУ им. И.Раззакова состоялась  заключительная лекция – симпозиум  специального курса - «Продвижение Азиатского сообщества.',
            'content' => <<<HERE
<p>3-марта на кафедре «Телематика» КГТУ им. И.Раззакова состоялась заключительная лекция – симпозиум специального курса - «Продвижение Азиатского сообщества. Формирование электронного- Азиатского сообщества», при поддержке фонда Единая Азия (Япония). <br>    Данный проект в сотрудничестве с KRENA (Kyrgyz Research Education Network Association) стартовал в 2013 году и 2016 год является третьим годом проведения данного курса. <br> В рамках проекта поставлен курс лекций направленный на продвижение Азиатского
    сообщества, взаимопонимания между странами Азии и изучение культурных традиций народов Азии, проводимый ведущими профессорами и доцентами КГТУ, академиком НАН КР и PHD студентами. Также, укомплектован компьютерный класс 2/302, предоставляется высокоскоростной
    Интернет, проводятся видео-лекции по телемедицине с Университетом Кюшу, Япония. Ежегодно заключительные лекции по данному курсу, проводятся представителями фонда «Единая Азия» Dr. CHUNG (доктор Чанг) and Mr. NISHIZUKA (господин Нишизука). <br> Со
    вступительной речью на симпозиуме выступил Академик Кутанов Аскар Асанбекович, Экс-Посол Кыргызской Республики в Японии. Он отметил важность продвижения взаимопонимания и интеграции со странами Азии, изучение культуры, традиций народов Азии с использованием
    Информационно-коммуникационных технологий (ИКТ).<br> Студенты по завершению курса выступили с докладами по развитию ИКТ в странах Азии и по развитию отношений со странами Азии.<br> Ежегодно лучшие студенты получают разовые стипендии и международные
    сертификаты. <br>
    <img src="server/images/_DSC0791.JPG">
    <img src="server/images/_DSC0812.JPG">
    <img src="server/images/_DSC0819.JPG">
    <img src="server/images/_DSC0836.JPG">
  </p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Der Aufstieg der asiatischen Gesellschaft',
            'slug' => 'der-aufstieg-der-asiatischen-gesellschaft-de',
            'description' => 'Am 3 März hat auf dem Lehrstuhl "Telematik" KGTU von I.Rassakov die abschliessende Vorlesung – das Symposium des speziellen Kurses - "der Aufstieg der asiatischen Gesellschaft"
            stattgefunden.',
            'content' => <<<HERE
<p>Am 3 März hat auf dem Lehrstuhl "Telematik" KGTU von I.Rassakov die abschliessende Vorlesung – das Symposium des speziellen Kurses - "der Aufstieg der asiatischen Gesellschaft. Die Bildung der elektronischen - asiatischen Gesellschaft", mit der Unterstützung
    des Fonds Einheitliches Asien (Japan) stattgefunden.<br>Das vorliegende Projekt in der Zusammenarbeit mit KRENA (Kyrgyz Research Education Network Association) startete in 2013 und 2016 ist das dritte Jahr der Durchführung des gegebenen Kurses.<br>    Im Rahmen des Projektes ist der Kurs der Vorlesungen gerichtet auf den Aufstieg der asiatischen Gesellschaft, des gegenseitigen Verständnisses zwischen den Ländern Asiens und das Studium der kulturellen Traditionen der Völker Asiens, geleitet von
    den führenden Professoren und den Dozenten KSTU, dem Akademiemitglied NAW(nationale Akademie der Wissenschaften) KR und PHD von den Studenten gestellt. Auserdem ist die Computerklasse 2/302 bestückt, es wird das Hochgeschwindigkeitsinternet gewährt,
    es werden die Video-Vorlesungen nach der Telemedizin mit der Universität Kjuschu, Japan geleitet. Die jährlich abschliessenden Vorlesungen nach dem gegebenen Kurs, werden von den Vertretern des Fundes «Einheitliches Asien» Dr. CHUNG and Mr. NISHIZUKA
    geleitet.<br> Mit der einleitenden Rede auf dem Symposium hat Akademiemitglied Kutanow Askar Assanbekowitsch, der Exbotschafter Kirgisischer Republik in Japan aufgetretet. Er hat die Wichtigkeit des Aufstiegs des gegenseitigen Verständnisses und der
    Integration mit den Ländern Asiens, das Studium der Kultur, der Traditionen der Völker Asiens unter Ausnutzung der Informazionno-Kommunikationstechnologien (IKT) bemerkt.<br> Die Studenten nach der Vollendung des Kurses sind mit den Berichten von
    der Entwicklung IKT in den Ländern Asiens und nach der Entwicklung der Beziehungen mit den Ländern Asiens aufgetreten.<br> Jährlich die besten Studenten bekommen die einmaligen Stipendien und die internationalen Zertifikate.<br>
    <img src="server/images/_DSC0791.JPG">
    <img src="server/images/_DSC0812.JPG">
    <img src="server/images/_DSC0819.JPG">
    <img src="server/images/_DSC0836.JPG">
  </p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Продвижение Азиатского сообщества',
            'slug' => 'prodvizhenie-aziatskogo-soobshchestva-kg',
            'description' => '3-марта на кафедре «Телематика»  КГТУ им. И.Раззакова состоялась  заключительная лекция – симпозиум  специального курса - «Продвижение Азиатского сообщества.',
            'content' => <<<HERE
<p>3-марта на кафедре «Телематика» КГТУ им. И.Раззакова состоялась заключительная лекция – симпозиум специального курса - «Продвижение Азиатского сообщества. Формирование электронного- Азиатского сообщества», при поддержке фонда Единая Азия (Япония). <br>    Данный проект в сотрудничестве с KRENA (Kyrgyz Research Education Network Association) стартовал в 2013 году и 2016 год является третьим годом проведения данного курса. <br> В рамках проекта поставлен курс лекций направленный на продвижение Азиатского
    сообщества, взаимопонимания между странами Азии и изучение культурных традиций народов Азии, проводимый ведущими профессорами и доцентами КГТУ, академиком НАН КР и PHD студентами. Также, укомплектован компьютерный класс 2/302, предоставляется высокоскоростной
    Интернет, проводятся видео-лекции по телемедицине с Университетом Кюшу, Япония. Ежегодно заключительные лекции по данному курсу, проводятся представителями фонда «Единая Азия» Dr. CHUNG (доктор Чанг) and Mr. NISHIZUKA (господин Нишизука). <br> Со
    вступительной речью на симпозиуме выступил Академик Кутанов Аскар Асанбекович, Экс-Посол Кыргызской Республики в Японии. Он отметил важность продвижения взаимопонимания и интеграции со странами Азии, изучение культуры, традиций народов Азии с использованием
    Информационно-коммуникационных технологий (ИКТ).<br> Студенты по завершению курса выступили с докладами по развитию ИКТ в странах Азии и по развитию отношений со странами Азии.<br> Ежегодно лучшие студенты получают разовые стипендии и международные
    сертификаты. <br>
    <img src="server/images/_DSC0791.JPG">
    <img src="server/images/_DSC0812.JPG">
    <img src="server/images/_DSC0819.JPG">
    <img src="server/images/_DSC0836.JPG">
  </p>
HERE
        ]);
        




        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('30.03.2016'),
            'updated_at' => Carbon::parse('30.03.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'CAREN',
            'slug' => 'caren-ru',
            'description' => 'Студентам направления "Телематика" доступны ресурсы UN APC ICT: <a href="http://icaren.org/ru/-/un-apc-ict">http://icaren.org/ru/-/un-apc-ict</a>',
            'content' => 'Студентам направления "Телематика" доступны ресурсы UN APC ICT: <a href="http://icaren.org/ru/-/un-apc-ict">http://icaren.org/ru/-/un-apc-ict</a>'
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'CAREN',
            'slug' => 'caren-de',
            'description' => 'Den Studenten der Richtung "Telematik" sind die Ressourcen UN APC ICT: <a href="http://icaren.org/ru/-/un-apc-ict">http://icaren.org/ru/-/un-apc-ict</a>',
            'content' => 'Den Studenten der Richtung "Telematik" sind die Ressourcen UN APC ICT: <a href="http://icaren.org/ru/-/un-apc-ict">http://icaren.org/ru/-/un-apc-ict</a>'
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'CAREN',
            'slug' => 'caren-kg',
            'description' => 'Студентам направления "Телематика" доступны ресурсы UN APC ICT: <a href="http://icaren.org/ru/-/un-apc-ict">http://icaren.org/ru/-/un-apc-ict</a>',
            'content' => 'Студентам направления "Телематика" доступны ресурсы UN APC ICT: <a href="http://icaren.org/ru/-/un-apc-ict">http://icaren.org/ru/-/un-apc-ict</a>'
        ]);





        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('21.04.2016'),
            'updated_at' => Carbon::parse('21.04.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Список научных работ',
            'slug' => 'spisok-nauchnyh-rabot-ru',
            'description' => '27.04.2016г. в 10.00 в ауд.2/420 состоится II тур МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях». ',
            'content' => <<<HERE
<p>27.04.2016г. в 10.00 в ауд.2/420 состоится II тур МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях». Кафедра «Телематика» приглашает Вас, в качестве гостей и оценить научные работы студентов 2-4 курсов направлении «Телематика».<br></p>
  <p><br>
  </p>
  <center><strong><h1>Список научных работ прилагается:</h1></strong></center><br>
  <table class="table table-hover">
    <tbody>
      <tr>
        <td>
          <center><strong>№</strong></center>
        </td>
        <td>
          <center><strong>Темы докладов</strong></center>
        </td>
        <td>
          <center><strong>Ф.И.О. ст. гр.</strong></center>
        </td>
        <td>
          <center><strong>Ф.И.О. руководителя</strong></center>
        </td>

      </tr>

      <tr>
        <td>1</td>
        <td>The Pumping station based on PLC SiemensLogo</td>
        <td>гр. Тг-2-14<br> Базарбаев Ш.<br> гр.Тг-2-12
          <br> Умрихин С.<br> гр. Тг-2-13<br> Иманакунов С. <br>Султанов У.
        </td>
        <td>к.т.н., доц.<br> Кошоева Б.Б.
        </td>
      </tr>

      <tr>
        <td>2</td>
        <td>Управление работой лифта через InTouch-Panel</td>
        <td>гр. Тг-1-12<br> Таалайбек у С.
          <br> гр.Тг-2-12
          <br> Умрихин С.<br> гр. Тг-2-13<br> Иманакунов С.<br> Султанов У.

        </td>
        <td>Азизбек у Тимур
        </td>
      </tr>

      <tr>
        <td>3</td>
        <td>Разработка среды конфигурирования и управления «Сортировка изделий» на базе ПЛК Siemens S7-1200</td>
        <td>гр. Тг-1-12<br> Амангулова А.

        </td>
        <td>Сабырова А.
        </td>
      </tr>

      <tr>
        <td>4</td>
        <td>Система управления асинхронным двигателем через InTouch-Panel с косвенной обратной связью</td>
        <td> гр. Тг-1-12<br> Таалайбек у С.
        </td>
        <td>Азизбек у Тимур
        </td>
      </tr>

      <tr>
        <td>5</td>
        <td>Станок ЧПУ</td>
        <td>гр. Тг-2-14<br> Базарбаев Ш.<br> гр.Тг-2-12
          <br> Умрихин С.<br> гр. Тг-2-13 Иманакунов С.<br> Султанов У.

        </td>
        <td>Азизбек у Тимур
        </td>
      </tr>

      <tr>
        <td>6</td>
        <td>Разработка стенда и программы для управления работой питателя сырого угля для ТЭЦ г.Бишкек</td>
        <td>гр. Тг-1-12<br> Азарова М.<br> Умрихин С<br> гр.Тг-1-13 <br> Беликов А.
        </td>
        <td>к.т.н., доц. <br> Кошоева Б.Б.
        </td>
      </tr>


      <tr>
        <td>7</td>
        <td>Управление работой жалюзами реализованная на базе Arduino Uno</td>
        <td>гр. Тг-2-14<br> Руслан у С.<br> Толонбеков Д.<br> Текебаев Н.<br> Азизбеков У.
        </td>
        <td>Азизбек у Тимур
        </td>
      </tr>
      <tr>
        <td>8</td>
        <td> Человеческое сердце в формате DICOM и преобразование ее в 3D Мodel </td>
        <td> гр. Тг-2-12<br> Батырканов Н. </td>
        <td> к.т.н., доц. <br> Кошоева Б.Б.</td>
      </tr>
      <tr>
        <td>9</td>
        <td> Анализ клинических исследований при врожденном пороке сердца на платформе Statistica </td>
        <td> гр. Тг-1-12<br> Рыбина А. </td>
        <td> к.т.н., доц. Кошоева Б.Б.</td>
      </tr>
      <tr>
        <td>10</td>
        <td> Разработка программы для управления системой контроля пустых бутылок на деформации, трещины и других отклонений на базе платформы TIA-Portal </td>
        <td> гр. Тг-1-12<br> Таалайбекова Г. </td>
        <td> лектор DAАD <br> Стефан Дильфер</td>
      </tr>
      <tr>
        <td>11</td>
        <td> Разработка модели светофора на базе Siemens Logo </td>
        <td> гр. Тг-2-14<br> Руслан у С.<br> Толонбеков Д.<br> Текебаев Н.<br> Азизбеков У. </td>
        <td>к.т.н., доц.<br> Кошоева Б.Б.</td>
      </tr>
      <tr>
        <td>12</td>
        <td> Разработка дизайна и визуализации экстерьера в 3D MAX для помещений </td>
        <td> гр. Тг-1-12<br> Шекербек у Н. </td>
        <td> преп.<br> Имашова Г.И.</td>
      </tr>
      <tr>
        <td>13</td>
        <td> Разработка программы для увеличения пропускной способности дорог г. Бишкек
        </td>
        <td> гр. Тг-2-13<br> Амантаев А. <br>гр. Тг-1-13<br> Ажимкулов А. <br>Кадыракунов А. </td>
        <td> к.ф-м.н., доц.<br> Султангазиева Р.Т.
        </td>
      </tr>
      <tr>
        <td>14</td>
        <td> Особенности технологии LTE Advanced
        </td>
        <td> гр. Тг-1-12<br> Усубалиев А.</td>
        <td> ст. преп. <br> Ешимбекова Р.С.</td>
      </tr>
      <tr>
        <td>15</td>
        <td> Разработка сайта и базы данных для средней школы №54 города Бишкек</td>
        <td>гр. Тг-1-12<br> Болотова Д.</td>
        <td> и.о.доц.<br> Медралиева Б.Н.</td>
      </tr>
      <tr>
        <td>16</td>
        <td> Шилд 12 вольтовый входной и выходной для микроконтроллера</td>
        <td>гр. Тг-2-14<br> Базарбаев Ш.<br> гр. Тг-2-13<br> Иманакунов С.<br> Султанов У.</td>
        <td> Азизбек у Тимур</td>
      </tr>
      <tr>
        <td>17</td>
        <td> Организация защиты от несанкционированного доступа в LTE сетях на базе платы Atmel AVR ITtiny 13</td>
        <td> гр. Тг-2-12<br> Талантбек А.</td>
        <td> преп.<br> Семененко А.</td>
      </tr>
      <tr>
        <td>18</td>
        <td> «Умный дом» на базе Raspberry Pi </td>
        <td> гр. Тг-1-13<br> Сапиев К.</td>
        <td> к.т.н., доц.<br> Кошоева Б.Б.</td>
      </tr>
      <tr>
        <td>19</td>
        <td> Получение видеоизображений с помощью Arduino Uno</td>
        <td> гр. Тг-1-13<br> Абдымомунова К.</td>
        <td> к.ф-м.н., доц.<br> Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>20</td>
        <td> Разработка алгоритма раннего опознавания инфаркта на базе Arduino Uno
        </td>
        <td> гр. Тг-2-13<br> Амантаев А. <br>гр. Тг-1-13<br> Ажимкулов А.<br> Кадыракунов А.</td>
        <td> к.ф-м.н., доц.<br> Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>21</td>
        <td> Управление процессом бурения
        </td>
        <td> гр. Тг-2-13<br> Жолчубекова А. <br>Лоренц А.<br> Жаркынбек к А.</td>
        <td> Сабырова А.</td>
      </tr>
      <tr>
        <td>22</td>
        <td> Сеть парковок</td>
        <td> гр. Тг-2-13<br> Калмурза у Т. <br>Бектурсунов А.<br> Бапаев Т.</td>
        <td> к.ф-м.н., доц. Султангазиева Р.Т.
        </td>
      </tr>
    </tbody>
  </table>
  <p>Работы реализованы с использованием современных средств микропроцессорной техники, электроники и промышленной автоматики.</p><br>
  <p>Было бы желательно, если бы Вы, смогли бы оценить работы от имени Вашей организации дипломами и денежными вознаграждениями.</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Die Liste der wissenschaftlichen Arbeiten',
            'slug' => 'die-liste-der-wissenschaftlichen-arbeiten-de',
            'description' => '27.04.2016г. Um 10.00 wird in Raum.2/420 die II. Tour МНТК der jungen Gelehrten, der Aspiranten, der Studenten "die Jugend in den innovativen Forschungen" stattfinden. ',
            'content' => <<<HERE
<p>27.04.2016 ab 10: 00 in Raum.2/420 II findet die Tour MNTK junge Wissenschaftler, Doktoranden, Studenten «Jugend in innovative Forschung». Abteilung «Telematik» lädt Sie ein, als Gäste und bewerten die wissenschaftlichen arbeiten der Studenten 2-4 Kurse
    Richtung «Telematik».<br></p>
  <center><strong><h1>Liste der wissenschaftlichen arbeiten beigefügt:</h1></strong></center><br>
  <table class="table table-hover">
    <tbody>
      <tr>
        <td>
          <center><strong>Nr.</strong></center>
        </td>
        <td>
          <center><strong>Themen der Vorträge</strong></center>
        </td>
        <td>
          <center><strong>Name, Vorname, Vatersname  gr.</strong></center>
        </td>
        <td>
          <center><strong>Name, Vorname, Vatersname des Leiters</strong></center>
        </td>

      </tr>

      <tr>
        <td>1</td>
        <td>The Pumping station based on SiemensLogo SPS</td>
        <td>gr. TG-2-14<br> Basarbaev SH.<br> gr.TG-2-12
          <br> Umrichin S.<br> gr. TG-2-13<br> Imanakunov S. <br>Sultanov U.
        </td>
        <td>K. T. W. Doz.<br> Koshoeva B.B.
        </td>
      </tr>

      <tr>
        <td>2</td>
        <td>Die Verwaltung von der Arbeit des Lifts durch InTouch-Panel</td>
        <td>gr. Tg-1-12<br> Taalaibek S.
          <br> gr.Tg-2-12
          <br> Umrichin S.<br> gr. Tg-2-13<br> Imanakunov S.<br> Sultanov U.

        </td>
        <td>Azizbek u. T.
        </td>
      </tr>

      <tr>
        <td>3</td>
        <td>Entwicklung-Umgebung konfigurieren und verwalten «Sortieren von Artikeln» auf der Basis einer SPS Siemens S7-1200</td>
        <td>gr. TG-1-12<br> Amangulova A.

        </td>
        <td>Sabyrova A.
        </td>
      </tr>

      <tr>
        <td>4</td>
        <td>Kontrollsystem Asynchronmotor durch InTouch-Panel mit Indirekter Rückkopplung</td>
        <td> gr. TG-1-12<br> taalaibek S.
        </td>
        <td>Azizbek u. T.
        </td>
      </tr>

      <tr>
        <td>5</td>
        <td>CNC-Maschine</td>
        <td>gr. TG-2-14<br> Bazarbaev SH.<br> gr.TG-2-12
          <br> Umrichin S.<br> gr. TG-2-13 Imanakunov S.<br> Sultanov U.

        </td>
        <td>Azizbek u. T.
        </td>
      </tr>

      <tr>
        <td>6</td>
        <td>Stand und Entwicklung des Programms zur Steuerung der Zuführung des rohen Kohle für KWK-Bischkek</td>
        <td>gr. TG-1-12<br> Asarova M.<br> Umrichin S.<br> gr.TG-1-13 <br> A. Belikow
        </td>
        <td>K. T. W. Doz. <br> Koshoeva B.B.
        </td>
      </tr>


      <tr>
        <td>7</td>
        <td>Steuerung den Jalousie realisierte auf Basis des Arduino Uno</td>
        <td>gr. TG-2-14<br> Ruslan u. S.<br> Tokonbekov D.<br> Tekebenov N.<br> Azizbekov U.
        </td>
        <td>Azizbek u. T.
        </td>
      </tr>
      <tr>
        <td>8</td>
        <td> das Menschliche Herz im DICOM-Format und konvertieren Sie Sie in 3D Мodel </td>
        <td> gr. TG-2-12<br> Batyrkanov N. </td>
        <td> K. T. W. Doz. <br> Koshoeva B.B.</td>
      </tr>
      <tr>
        <td>9</td>
        <td> Analyse klinischer Studien bei angeborenen Herzfehler auf der Plattform Statistik </td>
        <td> gr. TG-1-12<br> Joe A. </td>
        <td> K. T. W. Doz. Koshoeva B.B.</td>
      </tr>
      <tr>
        <td>10</td>
        <td> Entwicklung eines Programms zur System-Kontrolle der leeren Flaschen auf Verformung, Risse und andere Anomalien auf Basis der Plattform TIA-Portal </td>
        <td> gr. TG-1-12<br> Taalaibekova G. </td>
        <td> lektor DAАD <br> Stefan Dilfer</td>
      </tr>
      <tr>
        <td>11</td>
        <td> Modellentwurf Ampel auf Basis der Siemens Logo </td>
        <td> gr. TG-2-14<br> Ruslan u. S.<br> Tolonbekov D.<br> Tekebaev N.<br> Azizbekov U. </td>
        <td>K. T. W. Doz.<br> Koshoeva B.B.</td>
      </tr>
      <tr>
        <td>12</td>
        <td> Design-Entwicklung und in der Außenbereich-Visualisierung 3D MAX für den Innenbereich </td>
        <td> gr. TG-1-12<br> Shekerbek u. N. </td>
        <td> Hl.<br> Imashova G.I.</td>
      </tr>
      <tr>
        <td>13</td>
        <td> Entwicklung eines Programms zur Erhöhung der Bandbreite Straßen Bischkek
        </td>
        <td> gr. TG-2-13<br> Amantaev A. <br>gr. TG-1-13<br> Ajimkulov A. <br>Kadyrakunov A. </td>
        <td> K. F.-m W., Doz.<br> Sultangazieva R. T.
        </td>
      </tr>
      <tr>
        <td>14</td>
        <td> Merkmale-Technologie LTE Advanced
        </td>
        <td> gr. TG-1-12<br> Usubaliev A.</td>
        <td> Oberlehrer <br> Eshimbekova R. S.</td>
      </tr>
      <tr>
        <td>15</td>
        <td> Entwicklung der Website und der Datenbank für die Mittelschule №54 Stadt Bischkek</td>
        <td>gr. TG-1-12<br> Bolotov D.</td>
        <td> Doz.<br> Medralieva B.N.</td>
      </tr>
      <tr>
        <td>16</td>
        <td> Shild 12 Volt Input-und output für Mikrocontroller</td>
        <td>gr. TG-2-14<br> Bazarbaev SH.<br> gr. TG-2-13<br> Imanakunov S.<br> Sultanov U.</td>
        <td> Azizbek u. T.</td>
      </tr>
      <tr>
        <td>17</td>
        <td> Organisation des Schutzes vor unbefugtem Zugriff auf das LTE-Netzen auf der Basis von Atmel AVR platine ITtiny 13</td>
        <td> gr. TG-2-12<br> Talanbek A.</td>
        <td> Hl.<br> Semenenko A.</td>
      </tr>
      <tr>
        <td>18</td>
        <td> «Smart Home» auf Basis des Raspberry Pi </td>
        <td> gr. TG-1-13<br> Sopiev K.</td>
        <td> K.T.W., Doz.<br> Koshoeva B. B.</td>
      </tr>
      <tr>
        <td>19</td>
        <td> Erste Videos mit dem Arduino Uno</td>
        <td> gr. TG-1-13<br> Abdymomunova K.</td>
        <td> K. F.-m W., Doz.<br> Sultangazieva R. T.</td>
      </tr>
      <tr>
        <td>20</td>
        <td> Entwicklung des frühen Anerkennung Herzinfarkt auf Basis des Arduino Uno
        </td>
        <td> gr. TG-2-13<br> Amantaev A. <br>gr. TG-1-13<br> Ajimkulov A.<br> Kadyrakunov A.</td>
        <td> K. F.-m W., Doz.<br> Sultangazieva R. T.</td>
      </tr>
      <tr>
        <td>21</td>
        <td> prozessmanagement bohren
        </td>
        <td> gr. TG-2-13<br> Djolzhubekova A. <br>Lorenz A.<br> Djarkynbek k. A.</td>
        <td> Sabyrova A.</td>
      </tr>
      <tr>
        <td>22</td>
        <td> Netzwerk Parkplätze</td>
        <td> gr. TG-2-13<br> Kalmurza u. T. <br>Bektursunov A.<br> Bapaev T.</td>
        <td> K. F.-m W.,Doz. Sultangazieva R. T.
        </td>
      </tr>
    </tbody>
  </table><br>
  <p>Arbeit umgesetzt mit modernen Mitteln Mikroprozessortechnik, Elektronik und der industriellen Automatisierung.</p><br>
  <p>Es wäre wünschenswert, wenn Sie sehen würden, bewerten Arbeit im Namen Ihrer Organisation den Diplomen und Cash-Belohnungen.</p><br>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Список научных работ',
            'slug' => 'spisok-nauchnyh-rabot-kg',
            'description' => '27.04.2016г. в 10.00 в ауд.2/420 состоится II тур МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях». ',
            'content' => <<<HERE
<p>27.04.2016г. в 10.00 в ауд.2/420 состоится II тур МНТК молодых ученых, аспирантов, студентов «Молодежь в инновационных исследованиях». Кафедра «Телематика» приглашает Вас, в качестве гостей и оценить научные работы студентов 2-4 курсов направлении «Телематика».<br></p>

  <center><strong><h1>Список научных работ прилагается:</h1></strong></center><br>
  <table class="table table-hover">
    <tbody>
      <tr>
        <td>
          <center><strong>№</strong></center>
        </td>
        <td>
          <center><strong>Темы докладов</strong></center>
        </td>
        <td>
          <center><strong>Ф.И.О. ст. гр.</strong></center>
        </td>
        <td>
          <center><strong>Ф.И.О. руководителя</strong></center>
        </td>

      </tr>

      <tr>
        <td>1</td>
        <td>The Pumping station based on PLC SiemensLogo</td>
        <td>гр. Тг-2-14<br> Базарбаев Ш.<br> гр.Тг-2-12
          <br> Умрихин С.<br> гр. Тг-2-13<br> Иманакунов С. <br>Султанов У.
        </td>
        <td>к.т.н., доц.<br> Кошоева Б.Б.
        </td>
      </tr>

      <tr>
        <td>2</td>
        <td>Управление работой лифта через InTouch-Panel</td>
        <td>гр. Тг-1-12<br> Таалайбек у С.
          <br> гр.Тг-2-12
          <br> Умрихин С.<br> гр. Тг-2-13<br> Иманакунов С.<br> Султанов У.

        </td>
        <td>Азизбек у Тимур
        </td>
      </tr>

      <tr>
        <td>3</td>
        <td>Разработка среды конфигурирования и управления «Сортировка изделий» на базе ПЛК Siemens S7-1200</td>
        <td>гр. Тг-1-12<br> Амангулова А.

        </td>
        <td>Сабырова А.
        </td>
      </tr>

      <tr>
        <td>4</td>
        <td>Система управления асинхронным двигателем через InTouch-Panel с косвенной обратной связью</td>
        <td> гр. Тг-1-12<br> Таалайбек у С.
        </td>
        <td>Азизбек у Тимур
        </td>
      </tr>

      <tr>
        <td>5</td>
        <td>Станок ЧПУ</td>
        <td>гр. Тг-2-14<br> Базарбаев Ш.<br> гр.Тг-2-12
          <br> Умрихин С.<br> гр. Тг-2-13 Иманакунов С.<br> Султанов У.

        </td>
        <td>Азизбек у Тимур
        </td>
      </tr>

      <tr>
        <td>6</td>
        <td>Разработка стенда и программы для управления работой питателя сырого угля для ТЭЦ г.Бишкек</td>
        <td>гр. Тг-1-12<br> Азарова М.<br> Умрихин С<br> гр.Тг-1-13 <br> Беликов А.
        </td>
        <td>к.т.н., доц. <br> Кошоева Б.Б.
        </td>
      </tr>


      <tr>
        <td>7</td>
        <td>Управление работой жалюзами реализованная на базе Arduino Uno</td>
        <td>гр. Тг-2-14<br> Руслан у С.<br> Толонбеков Д.<br> Текебаев Н.<br> Азизбеков У.
        </td>
        <td>Азизбек у Тимур
        </td>
      </tr>
      <tr>
        <td>8</td>
        <td> Человеческое сердце в формате DICOM и преобразование ее в 3D Мodel </td>
        <td> гр. Тг-2-12<br> Батырканов Н. </td>
        <td> к.т.н., доц. <br> Кошоева Б.Б.</td>
      </tr>
      <tr>
        <td>9</td>
        <td> Анализ клинических исследований при врожденном пороке сердца на платформе Statistica </td>
        <td> гр. Тг-1-12<br> Рыбина А. </td>
        <td> к.т.н., доц. Кошоева Б.Б.</td>
      </tr>
      <tr>
        <td>10</td>
        <td> Разработка программы для управления системой контроля пустых бутылок на деформации, трещины и других отклонений на базе платформы TIA-Portal </td>
        <td> гр. Тг-1-12<br> Таалайбекова Г. </td>
        <td> лектор DAАD <br> Стефан Дильфер</td>
      </tr>
      <tr>
        <td>11</td>
        <td> Разработка модели светофора на базе Siemens Logo </td>
        <td> гр. Тг-2-14<br> Руслан у С.<br> Толонбеков Д.<br> Текебаев Н.<br> Азизбеков У. </td>
        <td>к.т.н., доц.<br> Кошоева Б.Б.</td>
      </tr>
      <tr>
        <td>12</td>
        <td> Разработка дизайна и визуализации экстерьера в 3D MAX для помещений </td>
        <td> гр. Тг-1-12<br> Шекербек у Н. </td>
        <td> преп.<br> Имашова Г.И.</td>
      </tr>
      <tr>
        <td>13</td>
        <td> Разработка программы для увеличения пропускной способности дорог г. Бишкек
        </td>
        <td> гр. Тг-2-13<br> Амантаев А. <br>гр. Тг-1-13<br> Ажимкулов А. <br>Кадыракунов А. </td>
        <td> к.ф-м.н., доц.<br> Султангазиева Р.Т.
        </td>
      </tr>
      <tr>
        <td>14</td>
        <td> Особенности технологии LTE Advanced
        </td>
        <td> гр. Тг-1-12<br> Усубалиев А.</td>
        <td> ст. преп. <br> Ешимбекова Р.С.</td>
      </tr>
      <tr>
        <td>15</td>
        <td> Разработка сайта и базы данных для средней школы №54 города Бишкек</td>
        <td>гр. Тг-1-12<br> Болотова Д.</td>
        <td> и.о.доц.<br> Медралиева Б.Н.</td>
      </tr>
      <tr>
        <td>16</td>
        <td> Шилд 12 вольтовый входной и выходной для микроконтроллера</td>
        <td>гр. Тг-2-14<br> Базарбаев Ш.<br> гр. Тг-2-13<br> Иманакунов С.<br> Султанов У.</td>
        <td> Азизбек у Тимур</td>
      </tr>
      <tr>
        <td>17</td>
        <td> Организация защиты от несанкционированного доступа в LTE сетях на базе платы Atmel AVR ITtiny 13</td>
        <td> гр. Тг-2-12<br> Талантбек А.</td>
        <td> преп.<br> Семененко А.</td>
      </tr>
      <tr>
        <td>18</td>
        <td> «Умный дом» на базе Raspberry Pi </td>
        <td> гр. Тг-1-13<br> Сапиев К.</td>
        <td> к.т.н., доц.<br> Кошоева Б.Б.</td>
      </tr>
      <tr>
        <td>19</td>
        <td> Получение видеоизображений с помощью Arduino Uno</td>
        <td> гр. Тг-1-13<br> Абдымомунова К.</td>
        <td> к.ф-м.н., доц.<br> Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>20</td>
        <td> Разработка алгоритма раннего опознавания инфаркта на базе Arduino Uno
        </td>
        <td> гр. Тг-2-13<br> Амантаев А. <br>гр. Тг-1-13<br> Ажимкулов А.<br> Кадыракунов А.</td>
        <td> к.ф-м.н., доц.<br> Султангазиева Р.Т.</td>
      </tr>
      <tr>
        <td>21</td>
        <td> Управление процессом бурения
        </td>
        <td> гр. Тг-2-13<br> Жолчубекова А. <br>Лоренц А.<br> Жаркынбек к А.</td>
        <td> Сабырова А.</td>
      </tr>
      <tr>
        <td>22</td>
        <td> Сеть парковок</td>
        <td> гр. Тг-2-13<br> Калмурза у Т. <br>Бектурсунов А.<br> Бапаев Т.</td>
        <td> к.ф-м.н., доц. Султангазиева Р.Т.
        </td>
      </tr>
    </tbody>
  </table>
  <p>Работы реализованы с использованием современных средств микропроцессорной техники, электроники и промышленной автоматики.</p><br>
  <p>Было бы желательно, если бы Вы, смогли бы оценить работы от имени Вашей организации дипломами и денежными вознаграждениями.</p>
HERE
        ]);
        




        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('22.06.2016'),
            'updated_at' => Carbon::parse('22.06.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Республиканская выставка «Интеллектуальные и инновационные ресурсы -2016г»',
            'slug' => 'respublikanskaya-vystavka-intellektualnye-i-innovacionnye-resursy-2016g-ru',
            'description' => '19-20 апреля 2016г состоялась Республиканская выставка «Интеллектуальные и инновационные ресурсы -2016г».',
            'content' => <<<HERE
<p>19-20 апреля 2016г состоялась Республиканская выставка «Интеллектуальные и инновационные ресурсы -2016г», организованная государственной службой интеллектуальной собственности и инновации при правительстве КР.</p><br>
  <p>Кафедра «Телематика» на данной выставке представила 6 проектов: Разработка среды конфигурирования и управления «Сортировка изделий» на базе ПЛК Siemens S7-1200 и HMI – панели ( к.т.н. Кошоева Б.Б., Амангулова А.), “Пассажирский лифт на ПЛК Siemens S7-300”
    (к.т.н., доц. Кошоева Б.Б., Иманакунов С., Султанов У.), “3D model сердца пациента” ( Батырканов Н., к.т.н., доц. Кошоева Б.), Разработка стенда «АСУТП работы питателя сырого угля для ТЭЦ» ( к.т.н., доц. Кошоева Б.Б., Умрихин С., Беликов А., Азарова
    М.), Управление асинхронным двигателем с косвенной обратной связью с помощью ПЛК Siemens S7-1200 и HMI – панели (Таалайбек уулу С., Азизбек уулу Т), “Насосная станция на базе ПЛК Siemens LOGO” (к.т.н., доц. Кошоева Б.Б., Умрихин С., Иманакунов С.,
    Султанов У.).</p><br>
  <p>Выставка прошла на высоком уровне, участвовали множество научно-исследовательских центров, учебных ВУЗов, компаний и люди, имеющие патенты на изобретения по различным направлениям науки, техники и культуры. Данная выставка позволило всем участникам
    продемонстрировать свои научные инновационные и интеллектуальные разработки. Эта выставка позволила установить контакт между разработчиками и государственными, частными компаниями, частными предпринимателями и обычным населением. Данная выставка для
    научных соискателей и разработчиков определило новый круг задач на основе потребностей компаний и частных предпринимателей. Эта выставка для команды кафедры «Телематика» КГТУ им.И.Раззакова была особенной, так как мы получили государственный заказ
    от Управления делами Президента - «Автоматизация работы лифта». Выставка нас, команду кафедры «Телематика», вдохновила на новые задачи. Благодарим организаторов выставки за хорошую организацию и предоставление таких возможностей для нас. Спасибо Вам!
    </p><br>
  <img src="server/images/IMGG1.jpg" class="img-responsive">
  <img src="server/images/IMGG2.jpg" class="img-responsive">
  <img src="server/images/IMGG3.jpg" class="img-responsive">
  <img src="server/images/IMGG4.jpg" class="img-responsive">
  <img src="server/images/IMGG5.jpg" class="img-responsive">
  <img src="server/images/IMGG6.jpg" class="img-responsive">
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Die republikanische Ausstellung «die Intellektuellen und innovativen Ressourcen-2016»',
            'slug' => 'die-republikanische-ausstellung-die-intellektuellen-und-innovativen-ressourcen-2016-de',
            'description' => 'Am 19-20. April hat 2016 die Republikanische Ausstellung «die Intellektuellen und innovativen Ressourcen-2016g» stattgefunden.',
            'content' => <<<HERE
<p>Am 19-20 April 2016 fand die Republikanische Ausstellung «Intelligente und innovative Ressourcen -Jahr 2016» organisiert von der staatlichen Dienst für geistiges Eigentum und Innovation unter der Regierung der KIRGISISCHEN Republik.</p><br>
  <p>die Abteilung "Telematik" auf der Messe präsentiert 6 Projekte: Entwicklung einer Umgebung konfigurieren und verwalten "Sortieren von Artikeln" auf der Basis einer SPS Siemens S7-1200 und HMI – Panel ( K. T. W. Koshoeva B. B., Amangulova A.), "Personenaufzug
    über SPS Siemens S7-300" ( K.T.W., Doz. Koshoeva B.B., Imanakunov S., Sultanov U.), "3D model des Herzens des Patienten" ( Batyrkanov N., K.T.W., Doz. Koshoeva B.B.), die Entwicklung des Standes «von SCADA-Arbeit Zuführung der Rohkohle für KWK-Anlagen»
    ( K.T.W., Doz. Koshoeva B.B., Umrichin S., A. Belikow, M. Azarov), Steuerung AC-Motor mit Indirekter Feedback über SPS Siemens S7-1200 und HMI – Panel (Taalaibek Uulu S., Azizbek Uulu T.), "Pumpstation auf der Basis einer SPS Siemens-LOGO" ( K.T.W.,
    Doz. Koshoeva B. B., Umrichin S., Imanakunov S., Sultanov U.).</p><br>
  <p>die Messe auf hohem Niveau, nahmen viele Forschungszentren, Schulen Hochschulen, Unternehmen und Menschen, die die Patente auf die Erfindungen aus verschiedenen Bereichen der Wissenschaft, Technik und Kultur. Diese Ausstellung ermöglichte allen Teilnehmern
    präsentieren Sie Ihre innovative wissenschaftliche und Intellektuelle Entwicklung. Diese Ausstellung ermöglichte den Kontakt zwischen Entwicklern und staatlichen, privaten Unternehmen, privaten Unternehmern und der Normalbevölkerung. Diese Ausstellung
    der Bewerber für wissenschaftliche und Entwickler hat eine neue Palette von Aufgaben auf der Grundlage der Bedürfnisse von Unternehmen und privaten Unternehmer. Diese Ausstellung ist für das Team der Abteilung «Telematik» KSTU von Rassakov war etwas
    besonderes, da erhielten wir die Staatliche Ordnung von der Verwaltung für Angelegenheiten des Präsidenten - «Automatisierung des Aufzugs». Diese Ausstellung inspiriert unser Team des Lehrstuhls «Telematik» auf neue Aufgaben. Wir danken den Organisatoren
    für die gute Organisation der Ausstellung und die Bereitstellung solcher Möglichkeiten für uns. Vielen Dank! </p><br>
  <img src="server/images/IMGG1.jpg" width="310" height="230">
  <img src="server/images/IMGG2.jpg" width="310" height="230">
  <img src="server/images/IMGG3.jpg" width="310" height="230">
  <img src="server/images/IMGG4.jpg" width="310" height="230">
  <img src="server/images/IMGG5.jpg" width="310" height="230">
  <img src="server/images/IMGG6.jpg" width="310" height="230">
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Республиканская выставка «Интеллектуальные и инновационные ресурсы -2016г»',
            'slug' => 'respublikanskaya-vystavka-intellektualnye-i-innovacionnye-resursy-2016g-kg',
            'description' => '19-20 апреля 2016г состоялась Республиканская выставка «Интеллектуальные и инновационные ресурсы -2016г».',
            'content' => <<<HERE
<p>19-20 апреля 2016г состоялась Республиканская выставка «Интеллектуальные и инновационные ресурсы -2016г», организованная государственной службой интеллектуальной собственности и инновации при правительстве КР.</p><br>
  <p>Кафедра «Телематика» на данной выставке представила 6 проектов: Разработка среды конфигурирования и управления «Сортировка изделий» на базе ПЛК Siemens S7-1200 и HMI – панели ( к.т.н. Кошоева Б.Б., Амангулова А.), “Пассажирский лифт на ПЛК Siemens S7-300”
    (к.т.н., доц. Кошоева Б.Б., Иманакунов С., Султанов У.), “3D model сердца пациента” ( Батырканов Н., к.т.н., доц. Кошоева Б.), Разработка стенда «АСУТП работы питателя сырого угля для ТЭЦ» ( к.т.н., доц. Кошоева Б.Б., Умрихин С., Беликов А., Азарова
    М.), Управление асинхронным двигателем с косвенной обратной связью с помощью ПЛК Siemens S7-1200 и HMI – панели (Таалайбек уулу С., Азизбек уулу Т), “Насосная станция на базе ПЛК Siemens LOGO” (к.т.н., доц. Кошоева Б.Б., Умрихин С., Иманакунов С.,
    Султанов У.).</p><br>
  <p>Выставка прошла на высоком уровне, участвовали множество научно-исследовательских центров, учебных ВУЗов, компаний и люди, имеющие патенты на изобретения по различным направлениям науки, техники и культуры. Данная выставка позволило всем участникам
    продемонстрировать свои научные инновационные и интеллектуальные разработки. Эта выставка позволила установить контакт между разработчиками и государственными, частными компаниями, частными предпринимателями и обычным населением. Данная выставка для
    научных соискателей и разработчиков определило новый круг задач на основе потребностей компаний и частных предпринимателей. Эта выставка для команды кафедры «Телематика» КГТУ им.И.Раззакова была особенной, так как мы получили государственный заказ
    от Управления делами Президента - «Автоматизация работы лифта». Выставка нас, команду кафедры «Телематика», вдохновила на новые задачи. Благодарим организаторов выставки за хорошую организацию и предоставление таких возможностей для нас. Спасибо Вам!
    </p><br>
  <img src="server/images/IMGG1.jpg" class="img-responsive">
  <img src="server/images/IMGG2.jpg" class="img-responsive">
  <img src="server/images/IMGG3.jpg" class="img-responsive">
  <img src="server/images/IMGG4.jpg" class="img-responsive">
  <img src="server/images/IMGG5.jpg" class="img-responsive">
  <img src="server/images/IMGG6.jpg" class="img-responsive">
HERE
        ]);





        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('11.08.2016'),
            'updated_at' => Carbon::parse('11.08.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Летняя школа  «Deutsch  und Telematik»',
            'slug' => 'letnyaya-shkola-deutsch-und-telematik-ru',
            'description' => 'С 26 июня по 3 июля 2016г состоялась летняя школа  «Deutsch  und Telematik».',
            'content' => <<<HERE
<p>С 26 июня по 3 июля 2016г состоялась летняя школа «Deutsch und Telematik» на берегу Иссык-Куля для студентов направления «Телематика», где проводились занятия по немецкому языку и по автоматизации. На конкурной основе представителями ДААД были отобраны
    12 студентов направления «Телематика». Занятия проводились согласно расписанию.</p>
  <p>&nbsp;</p>
  <p>Занятия по немецкому языку проводила Байсалова Альвира Чымырбаевна. Занятия по автоматизации по теме «Программирование промышленных контроллеров на платформе CoDeSyS 2.3 для ПЛК фирмы ОВЕН» проводил проф. Мордовского государственного университета им.Н.Огарева
    Шишов Олег Викторович.</p>
  <p>
    <img class="img-responsive" src="server/images/sommer/IMG_20160629_095113.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_204532.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_142932.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_123622.jpg">
  </p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Летняя школа  «Deutsch  und Telematik»',
            'slug' => 'letnyaya-shkola-deutsch-und-telematik-de',
            'description' => 'С 26 июня по 3 июля 2016г состоялась летняя школа  «Deutsch  und Telematik».',
            'content' => <<<HERE
<p>С 26 июня по 3 июля 2016г состоялась летняя школа «Deutsch und Telematik» на берегу Иссык-Куля для студентов направления «Телематика», где проводились занятия по немецкому языку и по автоматизации. На конкурной основе представителями ДААД были отобраны
    12 студентов направления «Телематика». Занятия проводились согласно расписанию.</p>
  <p>&nbsp;</p>
  <p>Занятия по немецкому языку проводила Байсалова Альвира Чымырбаевна. Занятия по автоматизации по теме «Программирование промышленных контроллеров на платформе CoDeSyS 2.3 для ПЛК фирмы ОВЕН» проводил проф. Мордовского государственного университета им.Н.Огарева
    Шишов Олег Викторович.</p>
  <p>
    <img class="img-responsive" src="server/images/sommer/IMG_20160629_095113.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_204532.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_142932.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_123622.jpg">
  </p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Летняя школа  «Deutsch  und Telematik»',
            'slug' => 'letnyaya-shkola-deutsch-und-telematik-kg',
            'description' => 'С 26 июня по 3 июля 2016г состоялась летняя школа  «Deutsch  und Telematik».',
            'content' => <<<HERE
<p>С 26 июня по 3 июля 2016г состоялась летняя школа «Deutsch und Telematik» на берегу Иссык-Куля для студентов направления «Телематика», где проводились занятия по немецкому языку и по автоматизации. На конкурной основе представителями ДААД были отобраны
    12 студентов направления «Телематика». Занятия проводились согласно расписанию.</p>
  <p>&nbsp;</p>
  <p>Занятия по немецкому языку проводила Байсалова Альвира Чымырбаевна. Занятия по автоматизации по теме «Программирование промышленных контроллеров на платформе CoDeSyS 2.3 для ПЛК фирмы ОВЕН» проводил проф. Мордовского государственного университета им.Н.Огарева
    Шишов Олег Викторович.</p>
  <p>
    <img class="img-responsive" src="server/images/sommer/IMG_20160629_095113.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_204532.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_142932.jpg">
    <img class="img-responsive" src="server/images/sommer/IMG_20160630_123622.jpg">
  </p>
HERE
        ]);
        




        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('14.09.2016'),
            'updated_at' => Carbon::parse('14.09.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'С 14-21 сентября 2016г. состоялся 10 летний юбилей направления "Телематика" в Кыргызстане и 5-летие кафедры "Телематика"',
            'slug' => 's-14-21-sentyabrya-2016g-sostoyalsya-10-letniy-yubiley-napravleniya-telematika-v-kyrgyzstane-i-5-letie-kafedry-telematika-ru',
            'description' => 'Планпроведения 10-летия Телематика в Кыргызстане и 5- летия кафедры «Телематика».',
            'content' => <<<HERE
<p><strong>План проведения 10-летия Телематика в Кыргызстане и 5- летия кафедры «Телематика».</strong></p>
  <p>&nbsp;</p>
  <p>10 00-10 05Представление гостей (Кошоева Б.Б.)БАЗ&nbsp;</p>
  <table class="table">
    <tbody>
      <tr>
        <td><strong>Дата</strong></td>
        <td width="80"><strong>Время</strong></td>
        <td><strong>Мероприятие</strong></td>
        <td><strong>Место</strong></td>
        <td><strong>Ответственные люди</strong></td>
      </tr>
      <tr>
        <td>14.09.16</td>
        <td>10 00</td>
        <td>Демонстрация «Информационная система MedDream в формате DICOM для медицины» (для партнеров проекта KyrMed)</td>
        <td>&nbsp;</td>
        <td>Лектор: Vytautas Baublys – директор компании Softneta (Литва)</td>
      </tr>
      <tr>
        <td rowspan="15">15.09.16</td>
        <td>9 00-10 00</td>
        <td>Выставка научно -исследовательских работ студентов и школьников</td>
        <td>Фойе БАЗа</td>
        <td>Азисбек уулу,<br>Сабырова А</td>
      </tr>
      <tr>
        <td>10 05-10 10</td>
        <td>Поздравительная речь Ректора КГТУ проф.Джаманбаев М.Дж</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 10-10 15</td>
        <td>Поздравительная речь Директора КГТИ доц. Усупкожоева А.А.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 15-10 20</td>
        <td>Поздравительная речь экс-декана КГТИ проф.Омуралиева У.К.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 20-10 30</td>
        <td>Поздравительная речь официального партнера кафедры «Телематика» проф. THK M. Bongards (Германия)</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 30-10 40</td>
        <td>Поздравительная речь академика НАН КР Кутанова А.А.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 40-10 50</td>
        <td>Поздравительная речь ДААД Лектор И.Таушвидц</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 50-11 10</td>
        <td>Поздравительная речь представителей компании ОВЕН (Россия)</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>11 10-11 20</td>
        <td>Поздравительная речь директора компании Softneta Vytautas Baublys (Литва)</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>11 20-11 30</td>
        <td>Поздравительная речь зав.каф.Телематика Кошоева Б.Б.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>11 30-12 00</td>
        <td>Концерт</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>12 00-13 00</td>
        <td>Фуршет</td>
        <td>Банкетный зал</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>13 00-14 00</td>
        <td>Презентация компании Huawei</td>
        <td>Конференц зал 1/314</td>
        <td>Генеральный директор Чжон Чжицян</td>
      </tr>
      <tr>
        <td>14 00-18 00</td>
        <td>Мастер-класс по оборудованию компании ОВЕН (Россия)</td>
        <td>Конференц зал 1/314</td>
        <td>Лектор: представители компании Овен: Шестак Евгений Васильевич Дударев Евгений Геннадьевич (Россия).</td>
      </tr>
      <tr>
        <td>19.09–21.09</td>
        <td>14 00-18 00<br>9 30-12 45</td>
        <td>Мастер–класс «Программирование промышленных контроллеров на платформе CoDeSyS 3.2»</td>
        <td>2/420</td>
        <td>Лектор: проф. МГУ им Огарева Шишов О.В.(Россия)</td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  <p>На данное мероприятие были приглашены гости по следующим направлениям: Телемедицина, информационные системы в медицине, транспортная телематика, телекоммуникация, автоматизация.<br><br> <strong>Гости :</strong><br> 1.Компания Softneta (Литва) – разработчик
    информационной системы в медицине, телемедицина<br> 2.Компания Huawei (Китай) <br> 3.Компания ОВЕН (Россия) – компания по производству промышленного оборудования автоматизации <br> 4.Министерство здравоохранения КР<br> 5.ОсОО «Кыргызмедтехника»<br>    6.Кыргызский Национальный Центр Кардиологии и терапии им. М. Миррахимова<br> 7.ДААД<br> 8.ОАО «Кыргызтелеком»<br> 9.ООО Bitel <br> 10.ЗАО «Альфа Телеком»<br> <strong>Компании по автоматизации технологических процессов:</strong><br> 11.ЗАО "Кока-Кола
    Бишкек Боттлерс" <br> 12.ЗАО «Шоро» - компания по выпуску национальных напитков <br> 13.ОАО «Дастан»<br> 14.ОАО «Электрические станции»<br> 15.Теплоэлектроцентраль (ТЭЦ г.Бишкек)<br> 16.Кантский Шиферный завод <br> 17.Кантский Молочный комбинат<br>    18.ЗАО Водоавтоматика и Водоподготовка<br> 19.ООО "Акун" мукомольный комбинат<br> 20.ООО Артезиан - Питьевая бутилированная вода<br> 21.ЗАО "АЮ" Виноводочная компания<br> 22.ОсОО "Time Soiund" КИПиА <br> 23.Бишкекское троллебусное упроавление <br>    24.ЗАО “Bear Beer”<br><br></p>
  <p><strong>Выставка:</strong></p>
  <p>Темы научно-исследовательских работ студентов:</p>
  <table class="table table-hover">
    <tbody>
      <tr>
        <td><strong>№</strong></td>
        <td><strong>Название темы</strong></td>
        <td><strong>ФИО студентов</strong></td>
      </tr>
      <tr>
        <td>1</td>
        <td>Насосная станция на базе ПЛК Siemens Logo</td>
        <td>Гр. Тг 2-14 Базарбаев Шумкарбек, Гр. Тг 2-12 Умрихин Сергей<br> Гр. Тг 2-13 Иманакунов Санжар, Султанов Улукбек</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Управление работой лифта через InTouch-Panel</td>
        <td>Гр. Тг 1-12Таалайбек у. Султангазы,Гр. Тг 2-12Умрихин Сергей<br> Гр. Тг 2-13Иманакунов Санжар,Султанов Улукбек</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Разработка среды конфигурирования и управления «Сортировка изделий» на базе ПЛК Siemens S7-1200</td>
        <td>gr. Tg-1-12Amangulova Albina</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Система управления асинхронным двигателем через InTouch-Panel с косвенной обратной связью</td>
        <td>Гр. Тг 1-12 Таалайбек у. Султангазы</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Разработка стенда АСУТП работы питателя сырого угля для ТЭЦ</td>
        <td>Гр. Тг 2-12 Азарова Мээрим,Умрихин Сергей,Беликов Андрей</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Человеческое сердце в формате DICOM и преобразование ее в 3DМodel</td>
        <td>Гр.Тг 2-12 Батырканов Нурсултан</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Анализ клинических исследований при врожденном пороке сердца на платформе Statistica</td>
        <td>Гр. Тг 1-12 Рыбина Алла</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Разработка модели светофора на базе SiemensLogo</td>
        <td>Гр. Тг 2-14Руслан у.Санжар,Текебаев Нурсултан,<br> Толонбеков Данил,Азизбеков Урмат</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Разработка программы для увеличения пропускной способности дорог г. Бишкек</td>
        <td>Гр. Тг 1-13Амантаев Алиаскар,Ажимкулов Азамат<br> Кадырканов Акжол</td>
      </tr>
      <tr>
        <td>10</td>
        <td>«Умный дом» на базе RaspberryPi</td>
        <td>Гр. Тг 1-13 Сопиев Кубат</td>
      </tr>
      <tr>
        <td>11</td>
        <td>Разработка алгоритма раннего опознавания инфарктана на базе ArduinoUno</td>
        <td>Гр. Тг 1-13Амантаев Алиаскар,Ажимкулов Азамат,<br> Кадырканов Акжол</td>
      </tr>
    </tbody>
  </table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Am 14-21 September 2016 hat 10. Jahrestag der Richtung "Telematik" in Kirgisistan und der 5. Jahrestag des Lehrstuhls "Telematik" stattgefunden.',
            'slug' => 'am-14-21-september-2016-hat-10-jahrestag-der-richtung-telematik-in-kirgisistan-und-der-5-jahrestag-des-lehrstuhls-telematik-stattgefunden-de',
            'description' => 'Infos über den 10. Jahrestages von Telematik in Kirgisistan und 5-jahrigen Jubiläum des Lehrstuhls "Telematik".',
            'content' => <<<HERE
<p><b>Infos über den 10. Jahrestages von Telematik in Kirgisistan und 5-jahrigen Jubilaum des Lehrstuhls "Telematik".
</b></p><br>
  <table class="table">
    <tbody>
      <tr>
        <td><b>Datum</b></td>
        <td width="80"><b>Zeit</b></td>
        <td><b>Veranstaltung</b></td>
        <td><b>Ort</b></td>
        <td><b>Verantwortlichen Menschen</b></td>
      </tr>
      <tr>
        <td>14.09.16</td>
        <td>10 00</td>
        <td>Die Demonstration «das informative System MedDream im Format DICOM für die Medizin» (fur die Partner des Projektes KyrMed)</td>
        <td></td>
        <td>Der Lektor: Vytautas Baublys – der Direktor der Firma «Softnet» (Litauen)</td>
      </tr>
      <tr>
        <td rowspan="15">15.09.16</td>
        <td>9 00-10 00</td>
        <td>Die Ausstellung der <br>Wissenschaftlich-Forschungsarbeiten der Studenten und der Schuler</td>
        <td>Das Foyer der großen Aula</td>
        <td>Asisbek uulu,<br>Sabyrova A</td>
      </tr>
      <tr>
        <td>10 00-10 05</td>
        <td>Die Vorstellung der Gäste (Koshoeva B.B.)</td>
        <td rowspan="11">Die große Aula</td>
        <td></td>
      </tr>
      <tr>

        <td>10 05-10 10</td>
        <td>Die Gratulationsrede des Rektors KSTU Prof. Djamanbaev M.Dj.</td>

        <td></td>
      </tr>
      <tr>

        <td>10 10-10 15</td>
        <td>Die Gratulationsrede des Direktors DKTI Doz. Usupkojoeva A.A.</td>
        <td></td>
      </tr>
      <tr>

        <td>10 15-10 20</td>
        <td>Die Gratulationsrede des Exdekanes DKTI Prof.Omuraliev U.K.</td>
        <td></td>
      </tr>
      <tr>

        <td>10 20-10 30</td>
        <td>Die Gratulationsrede des offiziellen Partners des Lehrstuhls «Telematik» Prof. M. Bongards (Deutschland)</td>
        <td></td>
      </tr>
      <tr>

        <td>10 30-10 40</td>
        <td>Die Gratulationsrede des Akademiemitgliedes NAW KR Kutanov A.A.</td>
        <td></td>
      </tr>
      <tr>

        <td>10 40-10 50</td>
        <td>Die Gratulationsrede des DAADs Lektors I.Tauschwidz, die Ubergabe der Zertifikaten DAAD den Studenten, die an der Sommerschule teilnehmen, und den Studenten, die das Diplomprojekt auf den deutschen und englischen Sprachen geschutzt haben.
        </td>
        <td></td>
      </tr>
      <tr>

        <td>10 50-11 10</td>
        <td>Die Gratulationsrede des Vertreters der Firma «OVEN» (Russland) Schestak Jewgenij mit der Ubergabe des Geschenks in Form von Ausrustung<br> der Firma «OVEN» dem Lehrstuhl «Telematik»</td>
        <td></td>
      </tr>
      <tr>

        <td>11 10-11 20</td>
        <td>Die Gratulationsrede des Direktors der Firma «Softnet» Vytautas Baublys (Litauen)</td>
        <td></td>
      </tr>
      <tr>

        <td>11 20-11 30</td>
        <td>Die Gratulationsrede der Leiterin des Lehrstuhls «Telematik» Koshoeva B.B.</td>
        <td></td>
      </tr>
      <tr>

        <td>11 30-12 00</td>
        <td>Das Konzert</td>
        <td></td>
      </tr>
      <tr>

        <td>12 00-13 00</td>
        <td>Das Gabelfruhstuck</td>
        <td>Der Bankettsaal</td>
        <td></td>
      </tr>
      <tr>

        <td>13 00-14 00</td>
        <td>Die Prasentation der Firma «Huawei»</td>
        <td>Die Konferenzhalle 1/314
        </td>
        <td>Der Generaldirektor Tjon Tjizjan</td>
      </tr>
      <tr>

        <td>14 00-18 00</td>
        <td>Die Master-class nach der Ausrustung<br> der Gesellschaft «OVEN» (Russland)</td>
        <td>Die Konferenzhalle 1/314
        </td>
        <td>Der Lektor: die Vertreter der Firma «OVEN»: Schestak Jewgenij Wasiljewitsch Dudarew Jewgenij Gennadjewitsch (Russland).
        </td>
      </tr>
      <tr>
        <td>19.09-21.09</td>
        <td>9 30-12 45<br>14 00-17 45</td>
        <td>Der Master-class «das Programmieren der industriellen Kontroller auf der <br>Plattform CoDeSyS 3.2»</td>
        <td>2/420</td>
        <td>Der Lektor: Prof. MSU von Ogarev Shishov O.V. (Russland)</td>
      </tr>
    </tbody>
  </table>

  <p>Für die gegebene Veranstaltung waren die Gäste nach den folgenden Richtungen eingeladen: die Telemedizin, die informativen Systeme in der Medizin,die Transport-Telematik, die Telekommunikation, die Automatisierung.<br>
    <b>Die Gäste:</b><br> 1. Die Firma «Softnet» (Litauen)– der Hersteller des informativen Systems in der Medizin, die Telemedizin<br> 2. Die Firma «Huawei» (China) <br> 3. Die Firma «OVEN» (Russland) – das Unternehmen nach der Produktion der industriellen
    Ausrustung der Automatisierung<br> 4. das Ministerium fur Gesundheitswesen KR<br> 5. GmbH «Kirgysmedtechnik»<br> 6. Das kirgisische Nationale Zentrum der Kardiologie und der Therapie von ihm. M.Mirrachimowa<br> 7. ОАG «Kirgystelecom»<br> 8. GmbH Bitel<br>    9. GАG «Alfa Telecom»<br>
    <b>Die Gesellschaften nach der Automatisierung der technologischen Prozesse:</b><br> 10. GАG «Coca-Cola Bischkek Bottlers» <br> 11. GАG «Schoro» - das Unternehmen nach der Ausgabe der nationalen Getranke<br> 12. ОАG «Dastan»<br> 13. ОАG «Die Kraftwerke»
    <br> 14. Das Heizkraftwerk Bischkek<br> 15. Der Schieferbetrieb in Kant<br> 16. Das Milchkombinat in Kant<br> 17. GАG Die Wassertechnik und die Wasservorbereitung<br> 18. GmbH «Akun» das Mehlkombinat<br> 19. ОАG «Artezian» - trinkbares Wasser <br>    20. GАG "AJU" -der Alkoholbetrieb<br> 21. GmbH "Time Soiund" <br> 22. Die Trolleybusverwaltung in Bischkek<br> 23. GАG “Bear Beer”<br>
  </p>
  <p><b>Ausstellung: <!-- b--> <br> 
Forschungsthemen Arbeiten der Schüler:<!-- p-->

</b></p>
  <table class="table table-hover">
    <tbody>
      <tr>
        <td><b>№</b></td>
        <td><b>Thementitel</b></td>
        <td><b>Die Namen der Studenten</b></td>
      </tr>
      <tr>
      </tr>
      <tr>
        <td>1</td>
        <td>Die Pumpstation basierend auf SPS-Siemens Logo</td>

        <td>gr. Tg-2-14 Bazarbaev Shumkarbekgr. Tg-1-12 Umrihin Sergey<br> gr. Tg-2-13 Imanakunov Sanzhar,Sultanov Ulukbek
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Betriebssteuerung des Aufzugs durch InTouch-Panel</td>
        <td>gr. Tg-1-12Taalaibek u. Sultangazy,Umrihin Sergey<br> gr. Tg-2-13Imanakunov Sanzhar,Sultanov Ulukbek
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Die Entwicklungsumgebung und Konfigurationsmanagement "Elemente sortieren" auf der Basis von Siemens S7-1200</td>
        <td>gr. Tg-1-12 Amangulova Albina</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Induktionsmotorsteuerung durch InTouch-Panel-indirekte Feedback-System</td>
        <td>gr. Tg-1-12 Taalaibek u. Sultangazy</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Die Entwicklungsarbeit Stand PCS Feeder Rohkohle für Kraftwerke</td>
        <td>gr. Tg-1-12Umrihin Sergey,Azarova Meerimgr.<br> Tg-1-13 Belikov Andrey
        </td>
      </tr>
      <tr>
        <td>6</td>
        <td>Das menschliche Herz im DICOM-Format und dessen Umwandlung in ein 3D-Modell</td>
        <td>gr. Tg-2-12 Batyrkanov Nursultan
        </td>
      </tr>
      <tr>
        <td>7</td>
        <td>Klinische Studien bei angeborenen Herzfehlern in der Statistica Plattform</td>
        <td>gr. Tg-1-12 Rybina Alla
        </td>
      </tr>
      <tr>
        <td>8</td>
        <td>Entwicklung der Ampel Model auf der Basis von Siemens Logo</td>
        <td>gr. Tg-2-14Ruslan u. Sanzhar,Tolonbekov Danil<br> Tekebaev Nursultan,Azizbekov u. Urmat
        </td>
      </tr>
      <tr>
        <td>9</td>
        <td>Entwickeln Sie ein Programm der Straßenkapazität Bischkek zu erhöhen</td>
        <td>gr. Tg-1-13 Amantaev Aliaskar,Ajimkulov Azamat<br> Kadyrakunov Akzhol
        </td>
      </tr>
      <tr>
        <td>10</td>
        <td>"Smart House" auf der Grundlage von Raspberry Pi</td>
        <td>gr. Tg-1-13 Sopiev Kubat
        </td>
      </tr>
      <tr>
        <td>11</td>
        <td>Entwicklung des Algorithmus der Früherkennung von Herzinfarkt auf der Basis des Arduino Uno</td>
        <td>gr. Tg-1-13Amantaev Aliaskar,Ajimkulov Azamat<br> Kadyrakunov Akzhol
        </td>
      </tr>
    </tbody>
  </table>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'С 14-21 сентября 2016г. состоялся 10 летний юбилей направления "Телематика" в Кыргызстане и 5-летие кафедры "Телематика"',
            'slug' => 's-14-21-sentyabrya-2016g-sostoyalsya-10-letniy-yubiley-napravleniya-telematika-v-kyrgyzstane-i-5-letie-kafedry-telematika-kg',
            'description' => 'Планпроведения 10-летия Телематика в Кыргызстане и 5- летия кафедры «Телематика».',
            'content' => <<<HERE
<p><strong>План проведения 10-летия Телематика в Кыргызстане и 5- летия кафедры «Телематика».</strong></p>
  <p>&nbsp;</p>
  <p>10 00-10 05Представление гостей (Кошоева Б.Б.)БАЗ&nbsp;</p>
  <table class="table">
    <tbody>
      <tr>
        <td><strong>Дата</strong></td>
        <td width="80"><strong>Время</strong></td>
        <td><strong>Мероприятие</strong></td>
        <td><strong>Место</strong></td>
        <td><strong>Ответственные люди</strong></td>
      </tr>
      <tr>
        <td>14.09.16</td>
        <td>10 00</td>
        <td>Демонстрация «Информационная система MedDream в формате DICOM для медицины» (для партнеров проекта KyrMed)</td>
        <td>&nbsp;</td>
        <td>Лектор: Vytautas Baublys – директор компании Softneta (Литва)</td>
      </tr>
      <tr>
        <td rowspan="15">15.09.16</td>
        <td>9 00-10 00</td>
        <td>Выставка научно -исследовательских работ студентов и школьников</td>
        <td>Фойе БАЗа</td>
        <td>Азисбек уулу,<br>Сабырова А</td>
      </tr>
      <tr>
        <td>10 05-10 10</td>
        <td>Поздравительная речь Ректора КГТУ проф.Джаманбаев М.Дж</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 10-10 15</td>
        <td>Поздравительная речь Директора КГТИ доц. Усупкожоева А.А.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 15-10 20</td>
        <td>Поздравительная речь экс-декана КГТИ проф.Омуралиева У.К.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 20-10 30</td>
        <td>Поздравительная речь официального партнера кафедры «Телематика» проф. THK M. Bongards (Германия)</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 30-10 40</td>
        <td>Поздравительная речь академика НАН КР Кутанова А.А.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 40-10 50</td>
        <td>Поздравительная речь ДААД Лектор И.Таушвидц</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>10 50-11 10</td>
        <td>Поздравительная речь представителей компании ОВЕН (Россия)</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>11 10-11 20</td>
        <td>Поздравительная речь директора компании Softneta Vytautas Baublys (Литва)</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>11 20-11 30</td>
        <td>Поздравительная речь зав.каф.Телематика Кошоева Б.Б.</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>11 30-12 00</td>
        <td>Концерт</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>12 00-13 00</td>
        <td>Фуршет</td>
        <td>Банкетный зал</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>13 00-14 00</td>
        <td>Презентация компании Huawei</td>
        <td>Конференц зал 1/314</td>
        <td>Генеральный директор Чжон Чжицян</td>
      </tr>
      <tr>
        <td>14 00-18 00</td>
        <td>Мастер-класс по оборудованию компании ОВЕН (Россия)</td>
        <td>Конференц зал 1/314</td>
        <td>Лектор: представители компании Овен: Шестак Евгений Васильевич Дударев Евгений Геннадьевич (Россия).</td>
      </tr>
      <tr>
        <td>19.09–21.09</td>
        <td>14 00-18 00<br>9 30-12 45</td>
        <td>Мастер–класс «Программирование промышленных контроллеров на платформе CoDeSyS 3.2»</td>
        <td>2/420</td>
        <td>Лектор: проф. МГУ им Огарева Шишов О.В.(Россия)</td>
      </tr>
    </tbody>
  </table>
  <p>&nbsp;</p>
  <p>На данное мероприятие были приглашены гости по следующим направлениям: Телемедицина, информационные системы в медицине, транспортная телематика, телекоммуникация, автоматизация.<br><br> <strong>Гости :</strong><br> 1.Компания Softneta (Литва) – разработчик
    информационной системы в медицине, телемедицина<br> 2.Компания Huawei (Китай) <br> 3.Компания ОВЕН (Россия) – компания по производству промышленного оборудования автоматизации <br> 4.Министерство здравоохранения КР<br> 5.ОсОО «Кыргызмедтехника»<br>    6.Кыргызский Национальный Центр Кардиологии и терапии им. М. Миррахимова<br> 7.ДААД<br> 8.ОАО «Кыргызтелеком»<br> 9.ООО Bitel <br> 10.ЗАО «Альфа Телеком»<br> <strong>Компании по автоматизации технологических процессов:</strong><br> 11.ЗАО "Кока-Кола
    Бишкек Боттлерс" <br> 12.ЗАО «Шоро» - компания по выпуску национальных напитков <br> 13.ОАО «Дастан»<br> 14.ОАО «Электрические станции»<br> 15.Теплоэлектроцентраль (ТЭЦ г.Бишкек)<br> 16.Кантский Шиферный завод <br> 17.Кантский Молочный комбинат<br>    18.ЗАО Водоавтоматика и Водоподготовка<br> 19.ООО "Акун" мукомольный комбинат<br> 20.ООО Артезиан - Питьевая бутилированная вода<br> 21.ЗАО "АЮ" Виноводочная компания<br> 22.ОсОО "Time Soiund" КИПиА <br> 23.Бишкекское троллебусное упроавление <br>    24.ЗАО “Bear Beer”<br><br></p>
  <p><strong>Выставка:</strong></p>
  <p>Темы научно-исследовательских работ студентов:</p>
  <table class="table table-hover">
    <tbody>
      <tr>
        <td><strong>№</strong></td>
        <td><strong>Название темы</strong></td>
        <td><strong>ФИО студентов</strong></td>
      </tr>
      <tr>
        <td>1</td>
        <td>Насосная станция на базе ПЛК Siemens Logo</td>
        <td>Гр. Тг 2-14 Базарбаев Шумкарбек, Гр. Тг 2-12 Умрихин Сергей<br> Гр. Тг 2-13 Иманакунов Санжар, Султанов Улукбек</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Управление работой лифта через InTouch-Panel</td>
        <td>Гр. Тг 1-12Таалайбек у. Султангазы,Гр. Тг 2-12Умрихин Сергей<br> Гр. Тг 2-13Иманакунов Санжар,Султанов Улукбек</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Разработка среды конфигурирования и управления «Сортировка изделий» на базе ПЛК Siemens S7-1200</td>
        <td>gr. Tg-1-12Amangulova Albina</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Система управления асинхронным двигателем через InTouch-Panel с косвенной обратной связью</td>
        <td>Гр. Тг 1-12 Таалайбек у. Султангазы</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Разработка стенда АСУТП работы питателя сырого угля для ТЭЦ</td>
        <td>Гр. Тг 2-12 Азарова Мээрим,Умрихин Сергей,Беликов Андрей</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Человеческое сердце в формате DICOM и преобразование ее в 3DМodel</td>
        <td>Гр.Тг 2-12 Батырканов Нурсултан</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Анализ клинических исследований при врожденном пороке сердца на платформе Statistica</td>
        <td>Гр. Тг 1-12 Рыбина Алла</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Разработка модели светофора на базе SiemensLogo</td>
        <td>Гр. Тг 2-14Руслан у.Санжар,Текебаев Нурсултан,<br> Толонбеков Данил,Азизбеков Урмат</td>
      </tr>
      <tr>
        <td>9</td>
        <td>Разработка программы для увеличения пропускной способности дорог г. Бишкек</td>
        <td>Гр. Тг 1-13Амантаев Алиаскар,Ажимкулов Азамат<br> Кадырканов Акжол</td>
      </tr>
      <tr>
        <td>10</td>
        <td>«Умный дом» на базе RaspberryPi</td>
        <td>Гр. Тг 1-13 Сопиев Кубат</td>
      </tr>
      <tr>
        <td>11</td>
        <td>Разработка алгоритма раннего опознавания инфарктана на базе ArduinoUno</td>
        <td>Гр. Тг 1-13Амантаев Алиаскар,Ажимкулов Азамат,<br> Кадырканов Акжол</td>
      </tr>
    </tbody>
  </table>
HERE
        ]);
        




        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('21.10.2016'),
            'updated_at' => Carbon::parse('21.10.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Поздравительная речь официального партнера кафедры "Телематика", профессора М.Бонгардса - почётного профессора КГТУ им. И.Раззакова.',
            'slug' => 'pozdravitelnaya-rech-oficialnogo-partnera-kafedry-telematika-professora-m-bongardsa-pochyotnogo-professora-kgtu-im-i-razzakova-ru',
            'description' => 'Поздравительная речь официального партнера кафедры "Телематика", профессора Кёльнского технического университета М.Бонгардса',
            'content' => <<<HERE
<p>Дорогие друзья, <br><br> Я решился на это личное обращение так ,как я уверен ,что найдутся среди слушателей данной речи мои друзья. С 2004 года я регулярно приезжаю в Кыргызстан и вы , мои кыргызские друзья, можно сказать ,обогатили мою жизнь. <br><br>    Почему я лично сам не смог приехать? Мой следующий визит я должен перенести , по той причине, что у меня есть много того, что я должен сделать в Гуммерсбахе. К тому же, сейчас к большому моему сожалению моя мама тяжело больна. И близиться ее уход
    в мир иной. Поэтому Я прошу вашего понимания, моего личного отсутствия . Конечно я думаю очень много о моей матери в эти дни, и мне хотелось бы юбилей телематики связать с ней. Она всегда очень интересовалась Кыргызстаном, это должно вам понравиться.
    <br><br> Моя мама родилась в 1918 году, и сейчас ей почти 98. Думали ли мы хоть один раз, как этот мир изменился для человека в этом возрасте . В 1918 году был придуман первый телефон, которым могли пользоваться только некоторые коммерсанты, и большинству
    не был доступен. <br><br> Как то мне мама рассказывала ,что в детстве она с подругами выбегала на улицы , когда кто-нибудь мимо проезжал на автомобиле. Машина для них была достопримечательностью. И Бишкеку тогда было всего 40 лет. Город был основан
    в 1878 году, так говорится в Wikipedii. В ваше время мир изменился кардинально: Сегодня почти каждый пользуется телефоном. Даже в деревне в Токтогуле большинство школьников имеют смартфоны. И плата за телефонные разговоры снижаются непрерывно. Мы
    можем например, находясь в Германии абсолютно бесплатно через видео конференц связь – скайп связаться с кафедрой телематики , чтобы принять и оценить работы выпускников бакалавра . <br><br> Почему все так сложилось? Технический прогресс всегда был
    связан с меньшими энергозатратами и улучшенной функционирующей автоматизацией . Оба фактора снижают стоимость и затраты на технологические процессы. Эта тенденция продолжается и набирает обороты: Крупные угольные и газовые электростанции обеспечивают
    относительно недорогой энергией уже несколько десятков лет. В Кыргызстане Гидроэнергетика является очень распространенным явлением. Эта энергия доступна практически бесплатно. В Германии мы работаем интенсивно над *энергетической революцией*. Мы хотим
    , например, всегда использовать энергию ветра или же энергию солнца, эти энергии неисчерпаемы и доступны по низким ценам. <br><br> И еще более удивительным является развитие автоматизации или телематики. В течение последних 30 лет, мощность компьютеров
    возросла в миллион раз. Маленький компьютер теперь намного мощнее, чем ЭВМ 1980 и вместо миллионов евро он стоит дешевле, чем хороший обед. Это развитие изменит нашу жизнь более фундаментально. Технологическое развитие будет продолжать двигаться вперед.
    Поэтому мы будем решать многие проблемы, которые в настоящее время неизбежны для нас. Мы чувствуем все на данный момент Изменение климата и конечно все что, связанное с глобальным потеплением . Генетическая модификация в сочетании с современными методами
    орошения и сбора позволит решить проблемы энергетики. <br><br> Во время моего первого визита, я узнал, что это кыргызы очень много употребляют мясо. И Я должен сказать, здесь оно на вкус очень хорош. Тем не менее, животноводство требует много природных
    ресурсов. Технический прорыв в этой области не за горами. Растительное сырье в настоящее время может быть обработан так, чтобы конечный продукт не будет определен реальным "гамбургером". Когда Кыргызстан достигнет такого прогресса, когда я отведаю
    соевый стейк в Кыргызстане? Может быть, это займет некоторое время, но и для многих населенных стран с дефицитом еды , такое развитие событий является, возможно, благом. <br><br> Моя мама выросла без телематики и без компьютера. И для молодых людей
    это сегодня выглядит немыслимо. Телематика стала необходимой технологией для нашего технического и научного прогресса. Без компьютеров сегодня не функционирует ни транспорт ,ни инфраструктура, ни снабжение продовольствия. Решающий импульс для наших
    столь необходимых инноваций в будущем исходит от вычислительной техники и автоматизации. Компьютерная техника в общем случае демократична и полезна для всех. Для этого не требуется большие вложения или редкие ресурсы. Каждый человек на этой планете
    может сделать гениальную программу для смартфона на обычном компьютере и таким образом разбогатеть или сделать жизнь счастливее для других. <br><br> Поэтому , кафедра телематики успешно развивается. Мы поставили из Германии некоторые приборы и устройства
    , дали несколько рекомендаций. Мы предоставили помощь для самореализации. <br><br> А телематы сделали своими силами из этого что-то прекрасное. Именно здесь имеется высокотехнологичный центр для автоматизации. Телематы решают сегодня сложные задачи
    в области метрологии и автоматизации с современными методами - они достигли европейского технического стандарта. Такие термины, как "промышленный Интернет" или "Industry 4.0" не являются для телематов Кыргызстана иностранными словами. Они находятся
    в середине технологических изменений и развивают современные конкурентоспособные приложения <br><br> Я хотел бы с удовольствием в будущем посетить мою вторую родину Кыргызстан. И конечно с удовольствием посещу мой второй университет, КГТУ. И я уверен
    , что буду видеть каждый раз развитие и прогресс телематики. <br><br> Дорогие телематы, Я хочу пожелать вам всего наилучшего и еще много интересных инноваций в будущем. <br><br> Михаел Бонгардс</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Die Gratulationsrede des offiziellen Partners des Lehrstuhls «Telematik» Prof.THK M. Bongards - Ehrenprofessor des KSTUs von I.Razzakov.',
            'slug' => 'die-gratulationsrede-des-offiziellen-partners-des-lehrstuhls-telematik-prof-thk-m-bongards-ehrenprofessor-des-kstus-von-i-razzakov-de',
            'description' => '',
            'content' => <<<HERE
<p>Meine lieben kirgisischen Freunde,<br><br> diese persönliche Anrede wähle ich, da ich sicher bin, unter den Zuhörern dieser Rede Freunde zu haben. Seit 2004 fahre ich regelmäßig nach Kirgistan und ihr, meine kirgisischen Freunde, habt mein Leben bereichert.<br><br>    Warum kann ich nicht selber kommen? Meinen nächsten Besuch muss ich verschieben, weil ich in Gummersbach sehr viel zu tun habe. Und nun ist leider auch meine Mutter schwer erkrankt. Ihr Tod ist nicht mehr fern. Ich bitte deshalb um euer Verständnis,
    dass ich nicht persönlich anwesend bin.<br> Natürlich denke ich in diesen Tagen viel an meine Mutter, deshalb möchte ich das Jubiläum der Telematik mit ihr verbinden.Meine Mutter hat sich immer für ferne Länder und speziell für Kirgistan interessiert,
    ihr würde dies gefallen.<br><br> Meine Mutter wurde im Jahr 1918 geboren, sie ist fast 98 Jahre alt. Bedenken wir einmal, wie sich die Welt in diesem einen Menschenalter geändert hat. 1918 war das Telefon eine Erfindung, die nur von einigen Geschäftsleuten
    genutzt wurde, die meisten Menschen konnten damit noch nichts anfangen. Meine Mutter hat mir erzählt, dass sie in ihrer Kindheit mit ihren Freundinnen an die Straße gelaufen ist, wenn ein Auto vorbei kam – ein Auto war eine Sehenswürdigkeit. Und Bishkek
    war gerade einmal 40 Jahre alt. Die Stadt wurde gegründet im Jahr 1878, so steht es in Wikipedia.<br><br> In ihrem Leben hat sich die Welt grundlegend geändert: Fast jeder Mensch nutzt heute das Telefon. Auch in den Dörfern des Toktogul haben die
    Schulkinder oft schon Smartphones. Und die Kosten für alle diese Telefongespräche sinken kontinuierlich. Wir können z.B. von Deutschland aus kostenlos stundenlang Skype-Videotelefonate mit der Telematik führen, um Bachelorarbeiten zu prüfen.<br><br>    Warum ist dies so? Der technische Fortschritt ist verbunden mit immer preiswerteren Energiequellen immer besser funktionierender Automatisierung. Beides reduziert die Kosten und den Aufwand für technische Prozesse. Diese Entwicklung setzt sich kontinuierlich
    fort: Große Kohleund Gas-Kraftwerke stellen seit Jahrzehnten Energie relativ preiswert zur Verfügung. In Kirgistan ist Wasserkraft sehr verbreitet, diese Energie ist fast kostenlos verfügbar. In Deutschland arbeiten wir intensiv an der „Energiewende“:
    Wir wollen zum Beispiel immer stärker Windenergie und Photovoltaik nutzen, diese Energien stehen zu geringen Kosten unerschöpflich zur Verfügung.
    <br><br> Und noch erstaunlicher ist die Entwicklung der Automatisierung oder Telematik: In den letzten 30 Jahren ist die Leistung der Computer millionenfach gestiegen: Ein kleiner Computer ist heute viel leistungsfähiger als die Großrechner von 1980
    und anstatt Millionen Euro kostet er weniger als ein gutes Mittagessen. Diese Entwicklung wird unser Leben weiter grundlegend verändern: Die Telematik wird in wenigen Jahren autonome Fahrzeuge ermöglichen. Ich bin persönlich sehr gespannt, wie ein
    autonomes Fahrzeug im Autoverkehr in Bishkek zurechtkommt. Vielleicht muss man einige spezielle kirgisische Softwaremodifikationen einführen, damit das autonome Fahrzeug im Autostau vorwärts kommt. Und auf alle Fälle muss speziell für Kirgistan das
    automatische Hupen eingebaut werden.<br><br> Die technische Entwicklung wird weiter voranschreiten. Damit werden wir viele Probleme lösen, die jetzt unausweichlich auf uns zukommen. Die Klimaveränderung und die damit verbundene Erwärmung der Erde
    spüren wir inzwischen alle. Gentechnische Veränderungen in Verbindung mit modernen Bewässerungsmethoden und Ernteverfahren werden die Probleme der Ernährung lösen. Schon bei meinem ersten Besuch habe ich gelernt, dass Kirgisen sehr gerne Fleisch essen.
    Und ich muss sagen: Hier schmeckt es auch sehr gut. Allerdings benötigt die Viehzucht sehr viele natürliche Ressourcen. Auf diesem Gebiet ist ein technischer Durchbruch fast erreicht: Pflanzliche Rohstoffe können inzwischen so verarbeitete werden,
    dass das Endprodukt nicht von einem echten „Hamburger“ zu unterschieden ist. Wann wird dieser Fortschritt Kirgistan erreichen, wann werde ich ein Soja-Steak in Kirgistan serviert bekommen? Möglicherweise dauert es noch etwas, aber für viele dicht
    bevölkerte Länder mit knappen Nahrungsmitteln ist diese Entwicklung ein Segen.<br><br> Und ihr jungen Menschen, die jetzt Telematik studieren, ihr werdet wahrscheinlich noch den Bergbau im Weltall erleben. Das könnte etwas Probleme für den kirgisischen
    Goldbergbau mit sich bringen, denn angeblich fliegen im All einige Himmelskörper aus massivem Gold herum.<br><br> Meine Mutter ist aufgewachsen in einer Welt weitestgehend ohne Telematik und noch ohne Computer. Für junge Menschen ist dies heute kaum
    noch vorstellbar. Die Telematik ist inzwischen die entscheidende Technologie für unseren technisch-wissenschaftlichen Fortschritt geworden. Ohne Computer funktionieren heute weder Verkehr noch Infrastruktur noch Lebensmittelversorgung. Entscheidende
    Impulse für unsere dringend erforderlichen Innovationen in der Zukunft kommen von Computertechnik und Automatisierung.<br><br> Gott war wieder einmal freundlich zu uns, denn es ist eine Gnade des Schöpfers dieser Welt: Die Computertechnik ist grundsätzlich
    demokratisch und für jeden nutzbar. Man braucht dafür nicht viel Kapital oder seltene Ressourcen. Jeder Mensch auf der Welt kann mit einem preiswerten Computer eine geniale Smartphone-App programmieren und damit reich werden oder Menschen glücklich
    machen. Erforderlich ist nur eine Ressource: Fleißige und intelligente Menschen. Diese Menschen habe ich hier an der Technischen Universität in Bishkek gefunden. Deshalb konnte sich der Lehrstuhl für Telematik so erfolgreich entwickeln. Wir haben
    aus Deutschland einige Anregungen und einige wenige Geräte geliefert, wir gaben Hilfe zur Selbsthilfe. Die Telematiker haben aus eigener Kraft daraus etwas sehr Gutes gemacht: Es entstand hier ein High-Tech-Zentrum für die Automatisierung. Die Telematiker
    lösen heute komplexe Aufgaben in der Messtechnik und Automatisierung mit modernen Methoden – sie haben inzwischen europäischen technischen Standard erreicht. Stichworte wie „Industrial Internet“ oder „Industrie 4.0“ sind für die Telematiker Kirgistans
    keine Fremdwörter. Sie sind in der Mitte dieser technologischen Umwälzungen und entwickeln moderne konkurrenzfähige Applikationen.<br><br> Gerne werde ich auch in Zukunft das schöne Kirgistan, meine zweite Heimat, besuchen. Gerne werde ich dann auch
    meine zweite Universität, die Technische Universität Bishkek, besuchen und ich bin mir sicher, jedes Mal werde ich neue Entwicklungen und Fortschritte in der Telematik sehen.
    <br><br> Liebe Telematiker, für eure Zukunft wünsche ich Alles Gute und noch viele spannende Innovationen.<br><br> Michael Bongards </p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Поздравительная речь официального партнера кафедры "Телематика", профессора М.Бонгардса - почётного профессора КГТУ им. И.Раззакова.',
            'slug' => 'pozdravitelnaya-rech-oficialnogo-partnera-kafedry-telematika-professora-m-bongardsa-pochyotnogo-professora-kgtu-im-i-razzakova-kg',
            'description' => 'Поздравительная речь официального партнера кафедры "Телематика", профессора Кёльнского технического университета М.Бонгардса',
            'content' => <<<HERE
<p>Дорогие друзья, <br><br> Я решился на это личное обращение так ,как я уверен ,что найдутся среди слушателей данной речи мои друзья. С 2004 года я регулярно приезжаю в Кыргызстан и вы , мои кыргызские друзья, можно сказать ,обогатили мою жизнь. <br><br>    Почему я лично сам не смог приехать? Мой следующий визит я должен перенести , по той причине, что у меня есть много того, что я должен сделать в Гуммерсбахе. К тому же, сейчас к большому моему сожалению моя мама тяжело больна. И близиться ее уход
    в мир иной. Поэтому Я прошу вашего понимания, моего личного отсутствия . Конечно я думаю очень много о моей матери в эти дни, и мне хотелось бы юбилей телематики связать с ней. Она всегда очень интересовалась Кыргызстаном, это должно вам понравиться.
    <br><br> Моя мама родилась в 1918 году, и сейчас ей почти 98. Думали ли мы хоть один раз, как этот мир изменился для человека в этом возрасте . В 1918 году был придуман первый телефон, которым могли пользоваться только некоторые коммерсанты, и большинству
    не был доступен. <br><br> Как то мне мама рассказывала ,что в детстве она с подругами выбегала на улицы , когда кто-нибудь мимо проезжал на автомобиле. Машина для них была достопримечательностью. И Бишкеку тогда было всего 40 лет. Город был основан
    в 1878 году, так говорится в Wikipedii. В ваше время мир изменился кардинально: Сегодня почти каждый пользуется телефоном. Даже в деревне в Токтогуле большинство школьников имеют смартфоны. И плата за телефонные разговоры снижаются непрерывно. Мы
    можем например, находясь в Германии абсолютно бесплатно через видео конференц связь – скайп связаться с кафедрой телематики , чтобы принять и оценить работы выпускников бакалавра . <br><br> Почему все так сложилось? Технический прогресс всегда был
    связан с меньшими энергозатратами и улучшенной функционирующей автоматизацией . Оба фактора снижают стоимость и затраты на технологические процессы. Эта тенденция продолжается и набирает обороты: Крупные угольные и газовые электростанции обеспечивают
    относительно недорогой энергией уже несколько десятков лет. В Кыргызстане Гидроэнергетика является очень распространенным явлением. Эта энергия доступна практически бесплатно. В Германии мы работаем интенсивно над *энергетической революцией*. Мы хотим
    , например, всегда использовать энергию ветра или же энергию солнца, эти энергии неисчерпаемы и доступны по низким ценам. <br><br> И еще более удивительным является развитие автоматизации или телематики. В течение последних 30 лет, мощность компьютеров
    возросла в миллион раз. Маленький компьютер теперь намного мощнее, чем ЭВМ 1980 и вместо миллионов евро он стоит дешевле, чем хороший обед. Это развитие изменит нашу жизнь более фундаментально. Технологическое развитие будет продолжать двигаться вперед.
    Поэтому мы будем решать многие проблемы, которые в настоящее время неизбежны для нас. Мы чувствуем все на данный момент Изменение климата и конечно все что, связанное с глобальным потеплением . Генетическая модификация в сочетании с современными методами
    орошения и сбора позволит решить проблемы энергетики. <br><br> Во время моего первого визита, я узнал, что это кыргызы очень много употребляют мясо. И Я должен сказать, здесь оно на вкус очень хорош. Тем не менее, животноводство требует много природных
    ресурсов. Технический прорыв в этой области не за горами. Растительное сырье в настоящее время может быть обработан так, чтобы конечный продукт не будет определен реальным "гамбургером". Когда Кыргызстан достигнет такого прогресса, когда я отведаю
    соевый стейк в Кыргызстане? Может быть, это займет некоторое время, но и для многих населенных стран с дефицитом еды , такое развитие событий является, возможно, благом. <br><br> Моя мама выросла без телематики и без компьютера. И для молодых людей
    это сегодня выглядит немыслимо. Телематика стала необходимой технологией для нашего технического и научного прогресса. Без компьютеров сегодня не функционирует ни транспорт ,ни инфраструктура, ни снабжение продовольствия. Решающий импульс для наших
    столь необходимых инноваций в будущем исходит от вычислительной техники и автоматизации. Компьютерная техника в общем случае демократична и полезна для всех. Для этого не требуется большие вложения или редкие ресурсы. Каждый человек на этой планете
    может сделать гениальную программу для смартфона на обычном компьютере и таким образом разбогатеть или сделать жизнь счастливее для других. <br><br> Поэтому , кафедра телематики успешно развивается. Мы поставили из Германии некоторые приборы и устройства
    , дали несколько рекомендаций. Мы предоставили помощь для самореализации. <br><br> А телематы сделали своими силами из этого что-то прекрасное. Именно здесь имеется высокотехнологичный центр для автоматизации. Телематы решают сегодня сложные задачи
    в области метрологии и автоматизации с современными методами - они достигли европейского технического стандарта. Такие термины, как "промышленный Интернет" или "Industry 4.0" не являются для телематов Кыргызстана иностранными словами. Они находятся
    в середине технологических изменений и развивают современные конкурентоспособные приложения <br><br> Я хотел бы с удовольствием в будущем посетить мою вторую родину Кыргызстан. И конечно с удовольствием посещу мой второй университет, КГТУ. И я уверен
    , что буду видеть каждый раз развитие и прогресс телематики. <br><br> Дорогие телематы, Я хочу пожелать вам всего наилучшего и еще много интересных инноваций в будущем. <br><br> Михаел Бонгардс</p>
HERE
        ]);





        $post_id = DB::table('posts')->insertGetId([
            'created_at' => Carbon::parse('23.12.2016'),
            'updated_at' => Carbon::parse('23.12.2016')
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'ru',
            'title' => 'Зимняя школа “Deutsch und Telematik” в г. Ош',
            'slug' => 'zimnyaya-shkola-deutsch-und-telematik-v-g-osh-ru',
            'description' => 'Команда кафедры «Телематика» Кыргызского государственного технического университета им.И.Раззакова и ОФ «Технолэнд» с 16 по 22 декабря 2016г в г.Оше провела Зимнюю школу “Deutsch und Telematik” при финансовой поддержке DAAD.',
            'content' => <<<HERE
<p>Команда кафедры «Телематика» Кыргызского государственного технического университета им.И.Раззакова и ОФ «Технолэнд» с 16 по 22 декабря 2016г в г.Оше провела Зимнюю школу “Deutsch und Telematik” при финансовой поддержке DAAD. Цель этой школы вызвать
    у школьников интерес к точным наукам и современной технике. ГорОНО г.Ош организовали группу школьников &nbsp;9 – 11 классов (30шк) из 13 школ: №42, 4, 22, 9, 8, 43, 23, 7, 52, 20, 31, 6,32.</p>
  <p><img class="img-responsive" src="server/images/gallery/news_1c8e8161cb81d5f24d7b58db933a1f8c.jpeg" alt="Зимняя школа “Deutsch und Telematik”" width="638" height="477"></p>
  <p>Руководство школы-гимназии №42 предоставили 2 кабинета для проведения занятий по «Электроника и робототехника» и «Немеций язык».</p>
  <p>За этот период ребят обучили практическим навыкам по&nbsp; электроники и робототехнике, программированию, проектированию 3D-моделирования.</p>
  <p><img class="img-responsive" src="server/images/gallery/news_e129e36d77f2d10f286c244c21e5bbc7.jpeg" alt="Зимняя школа “Deutsch und Telematik”" width="640" height="479"></p>
  <p>На основе полученных знаний ребята своими руками разработали следующие проекты:</p>
  <ol>
    <li><strong>«Башня Тесла</strong>»: Расул к.Тахмина, Сражидинова Нигора</li>
    <li><strong>«Звезда»: </strong>Акылбек у. Мадумар, Челядник Никита</li>
    <li><strong>«</strong><strong>LED</strong><strong> 8*8»: </strong>Мырзакматова Алия, Мамаризаева Умида, Нурланов Бектур</li>
    <li><strong>«Кран»:</strong> Исламбек к.Мээрим, Бекжанов Султан, Ормонова Махмиё</li>
    <li><strong>«Умный дом улица»:</strong> Арапбаев Заманбек, Абил к.Азиза, Аманова Айдана, Насиржанов Акмал</li>
    <li><strong>«Снежинка»:</strong> Долотбек у. Эрмек, Тагаева Насыйкат, Матиев Нуржигит</li>
    <li><strong>«Калькулятор»:</strong> Кадирова Зилола, Мирзакаримова Оматой</li>
    <li><strong>«Управление освещением дома через </strong><strong>Bluetooth</strong><strong>»:</strong> Джусмаматов Самат, Торобек у.Жусуп, Дастанов Усон</li>
    <li><strong>«Кран-Башня</strong>»: Расул к.Тахмина, Сражидинова Нигора</li>
    <li><strong>«Пианино»:</strong> Исламбек к.Мээрим</li>
  </ol>
  <p>&nbsp;</p>
  <p>Занятия проводили по электронике, робототехнике и программированию инженер кафедры «Телематика» Азисбек уулу Тимур, магистры Батырканов Нурсултан и Таалайбек уулу Султангазы и студент 4 курса Абдылдаев Казыбек. Занятия по немецкому языку проводила доцент
    кафедры «Телематика» Медралиева Бубусара Ниязбековна.</p>
  <p>Команда кафедры «Телематика» благодарит ГорОНО г.Ош и руководство школу-гимназию №42 за помощь&nbsp; в организации Зимней школы “Deutsch und Telematik”.</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p style="text-align: center;"><strong>«Deutsch und Telematik» кышкы мектеби</strong></p>
  <p style="text-align: left;">И.Раззаков атындагы Кыргыз мамлекеттик техникалык университетинин «Телематика» кафедрасынын командасы 2016-жылдын декабрь айынын 16-нан 23-но чейин Ош шаарында DAAD нын каржылоосу менен «Deutsch und Telematik»деген кышкы мектепти өткөрүштү. Бул мектептин
    максаты окуучуларды&nbsp; заманбаптык техникага жана так илимдерге кызыктыруу.&nbsp; Ош шаарынын &nbsp;ГорОНОсу 13 мектептен №42, 4, 22, 9, 8, 43, 23, 7, 52, 20, 31, 6,32 болгон 30 окучууну топтоп беришти.</p>
  <p>№42 мектеп-гимназиянын жетекчилери «Электроника жана робототехника» жана «Немис тили» сабактарын өткөрүү үчүн 2 бөлмө бөлүп беришти.</p>
  <p>Кышкы мектеп учурунда балдар электроника жана робототехника, программалоо, 3D-моделдөөну долборлоо боюнча ыкмаларга үйрөнүштү.</p>
  <p>Алган билимдеринин негизинде балдар өз колдору менен төмөнкү долбоорлорду иштеп чыгышты:</p>
  <ol>
    <li><strong>«Башня Тесла</strong>»: Расул к.Тахмина, Сражидинова Нигора</li>
    <li><strong>«Звезда»: </strong>Акылбек у. Мадумар, Челядник Никита</li>
    <li><strong>«</strong><strong>LED</strong><strong> 8*8»: </strong>Мырзакматова Алия, Мамаризаева Умида, Нурланов Бектур</li>
    <li><strong>«Кран»:</strong> Исламбек к.Мээрим, Бекжанов Султан, Ормонова Махмиё</li>
    <li><strong>«Умный дом улица»:</strong> Арапбаев Заманбек, Абил к.Азиза, Аманова Айдана, Насиржанов Акмал</li>
    <li><strong>«Снежинка»:</strong> Долотбек у. Эрмек, Тагаева Насыйкат, Матиев Нуржигит</li>
    <li><strong>«Калькулятор»:</strong> Кадирова Зилола, Мирзакаримова Оматой</li>
    <li><strong>«Управление освещением дома через </strong><strong>Bluetooth</strong><strong>»:</strong> Джусмаматов Самат, Торобек у.Жусуп, Дастанов Усон</li>
    <li><strong>«Кран-Башня</strong>»: Расул к.Тахмина, Сражидинова Нигора</li>
    <li><strong>«Пианино»:</strong> Исламбек к.Мээрим</li>
  </ol>
  <p><img class="img-responsive" src="server/images/gallery/news_783c91889315e2e0a5a90158e04e2962.jpeg" alt="Зимняя школа “Deutsch und Telematik”" width="718" height="539"></p>
  <p>Электроника, робототехника жана программалоо боюнча сабактарды өтушкөндөр : «Телематика» кафедрасынын инженери Азисбек уулу Тимур, магистрлер: Батырканов Нурсултан жана Таалайбек уулу Султангазы, жана 4-курстун студенти Абдылдаев Казыбек. «Немис тили»
    боюнча сабакты&nbsp; «Телематика» кафедрасынын доценти Медралиева Бубусара Ниязбековна өттү.</p>
  <p><img class="img-responsive" src="server/images/gallery/news_917e22f83fe8b4f12f96dbd41917bf4a.jpeg" alt="Зимняя школа “Deutsch und Telematik”" width="713" height="534"></p>
  <p>«Телематика» кафедрасынын командасы Ош шаарынын ГорОНОсуна жана №42 мектеп-гимназиясынын жетекчилерине&nbsp; «Deutsch und Nelematik» кышкы мектебин өткөрүүгө көрсөткөн жардамы үчүн тереӊ ыраазычылыгын билдирет.</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'de',
            'title' => 'Winterschule “Deutsch und Telematik”',
            'slug' => 'winterschule-deutsch-und-telematik-de',
            'description' => 'Das Team des Lehrstuhls "Telematik" und GF "Tehnolend" hat von 16 Dezember bis 22 Dezember 2016 in Osh eine Winterschule mit finanzieller Unterstützung des DAADs durchgeführt.',
            'content' => <<<HERE
<p>Das Team des Lehrstuhls "Telematik" der Kirgisischen Staatlichen Technischen Universität von.I.Razzakov und GF "Tehnolend" hat von 16 Dezember bis 22 Dezember 2016 in Osh eine Winterschule "Deutsch und Telematik" mit finanzieller Unterstützung des DAADs
    durchgeführt.&nbsp;</p>
  <p>Das Ziel dieser Schule ist es, in den Schülern das Interesse für die exakten Wissenschaften und moderner Technik zu erwecken. Osh Education Department organisiert eine Gruppe von Schülern 9. - 11. Klassen (30Sch) aus 13 Schulen: №42, 4, 22, 9, 8, 43,
    23, 7, 52, 20, 31, 6,32.</p>
  <p><img class="img-responsive" src="server/images/gallery/news_783c91889315e2e0a5a90158e04e2962.jpeg" alt="Winterschule “Deutsch und Telematik”" width="659" height="494"></p>
  <p>Die Leitung des Gymnasiums №42 gab zwei Räume für die Ausbildung in der "Elektronik und Robototechnik" und "Deutsche Sprache".</p>
  <p>Während dieser Zeit lernten die Kinder praktische Fertigkeiten in den Bereichen Elektronik und Robototechnik, Programmierung, Design, 3D-Modellierung.</p>
  <p>Auf der Grundlage der erworbenen Kentnisse haben die Jugend eigenhändig folgende Projekte erstellt:</p>
  <ol>
    <li><strong>"Der Teslaturm"</strong>: Rasul k.Tahmina, Srazhidinova Nigora</li>
    <li>
      <p><strong>"Der Stern"</strong>: Akylbek u. Madumarov, Chelyadnik Nikita</p>
    </li>
    <li>
      <p><strong>"</strong><strong>LED 8 * 8"</strong>: Myrzakmatov Alia, Mamarizaeva Umida, Nurlanov Bektur</p>
    </li>
    <li>
      <p><strong>"Der Kran"</strong>: Islambek k.Meerim, Bekzhanov Sultan, Ormonova Mahmiё</p>
    </li>
    <li><strong>"Smart Haus Straße "</strong>: Arapbaev Zamanbek, Abil k.Aziza, Amanova Aidan, Nasirzhanov Akmal</li>
    <li>
      <p><strong>"Die Schneeflocke "</strong>: Dolotbek u. Ermek, Tagaeva Nasyykat, Matiev Nurzhigit</p>
    </li>
    <li><strong>"Der Rechner"</strong>: Kadirova Zilola, Mirzakarimova Omata</li>
    <li>
      <p><strong>"Das Haus Lichtsteuerung mit dem Bluetooth"</strong>: Dzhusmamatov Samat, Torobek u.Zhusup, Dastan Uson</p>
    </li>
    <li>
      <p><strong>"Der</strong> <strong>Turmkran "</strong>: Rasul k.Tahmina, Srazhidinova Nigora</p>
    </li>
    <li>
      <p><strong>"Das Klavier "</strong>: Islambek k.Meerim</p>
    </li>
  </ol>
  <p>&nbsp;<img class="img-responsive" src="server/images/gallery/news_917e22f83fe8b4f12f96dbd41917bf4a.jpeg" alt="Winterschule “Deutsch und Telematik”" width="621" height="466"></p>
  <p>Den Unterricht auf&nbsp; Elektronik, Robototechnik und Programmierung haben Ingenieur der Abteilung "Telematik" Azisbek Uulu Timur, Masterstudenten&nbsp;&nbsp;&nbsp;&nbsp; Batyrkanov&nbsp; Nursultan,Taalaibek uulu Sultangaziev und Student des 4. Studienjahrs
    Abdyldaev Kazybek durchgeführt. Der Unterricht in deutscher Sprache hat Assistant Professor für "Telematik" Medralieva Bubusara Niyazbekovna durchgeführt.</p>
  <p>Das Team des Lehrstuhls "Telematik" bedankt sich bei der Bildungsabteilung von Osch und Leitund des Gymnasiums-Schule №42 für die Hilfe bei der Organisation der Winterschule "Deutsch und Telematik".</p>
HERE
        ]);
        DB::table('post_translations')->insert([
            'post_id' => $post_id,
            'locale' => 'kg',
            'title' => 'Зимняя школа “Deutsch und Telematik” в г. Ош',
            'slug' => 'zimnyaya-shkola-deutsch-und-telematik-v-g-osh-kg',
            'description' => 'Команда кафедры «Телематика» Кыргызского государственного технического университета им.И.Раззакова и ОФ «Технолэнд» с 16 по 22 декабря 2016г в г.Оше провела Зимнюю школу “Deutsch und Telematik” при финансовой поддержке DAAD.',
            'content' => <<<HERE
<p>Команда кафедры «Телематика» Кыргызского государственного технического университета им.И.Раззакова и ОФ «Технолэнд» с 16 по 22 декабря 2016г в г.Оше провела Зимнюю школу “Deutsch und Telematik” при финансовой поддержке DAAD. Цель этой школы вызвать
    у школьников интерес к точным наукам и современной технике. ГорОНО г.Ош организовали группу школьников &nbsp;9 – 11 классов (30шк) из 13 школ: №42, 4, 22, 9, 8, 43, 23, 7, 52, 20, 31, 6,32.</p>
  <p><img class="img-responsive" src="server/images/gallery/news_1c8e8161cb81d5f24d7b58db933a1f8c.jpeg" alt="Зимняя школа “Deutsch und Telematik”" width="638" height="477"></p>
  <p>Руководство школы-гимназии №42 предоставили 2 кабинета для проведения занятий по «Электроника и робототехника» и «Немеций язык».</p>
  <p>За этот период ребят обучили практическим навыкам по&nbsp; электроники и робототехнике, программированию, проектированию 3D-моделирования.</p>
  <p><img class="img-responsive" src="server/images/gallery/news_e129e36d77f2d10f286c244c21e5bbc7.jpeg" alt="Зимняя школа “Deutsch und Telematik”" width="640" height="479"></p>
  <p>На основе полученных знаний ребята своими руками разработали следующие проекты:</p>
  <ol>
    <li><strong>«Башня Тесла</strong>»: Расул к.Тахмина, Сражидинова Нигора</li>
    <li><strong>«Звезда»: </strong>Акылбек у. Мадумар, Челядник Никита</li>
    <li><strong>«</strong><strong>LED</strong><strong> 8*8»: </strong>Мырзакматова Алия, Мамаризаева Умида, Нурланов Бектур</li>
    <li><strong>«Кран»:</strong> Исламбек к.Мээрим, Бекжанов Султан, Ормонова Махмиё</li>
    <li><strong>«Умный дом улица»:</strong> Арапбаев Заманбек, Абил к.Азиза, Аманова Айдана, Насиржанов Акмал</li>
    <li><strong>«Снежинка»:</strong> Долотбек у. Эрмек, Тагаева Насыйкат, Матиев Нуржигит</li>
    <li><strong>«Калькулятор»:</strong> Кадирова Зилола, Мирзакаримова Оматой</li>
    <li><strong>«Управление освещением дома через </strong><strong>Bluetooth</strong><strong>»:</strong> Джусмаматов Самат, Торобек у.Жусуп, Дастанов Усон</li>
    <li><strong>«Кран-Башня</strong>»: Расул к.Тахмина, Сражидинова Нигора</li>
    <li><strong>«Пианино»:</strong> Исламбек к.Мээрим</li>
  </ol>
  <p>&nbsp;</p>
  <p>Занятия проводили по электронике, робототехнике и программированию инженер кафедры «Телематика» Азисбек уулу Тимур, магистры Батырканов Нурсултан и Таалайбек уулу Султангазы и студент 4 курса Абдылдаев Казыбек. Занятия по немецкому языку проводила доцент
    кафедры «Телематика» Медралиева Бубусара Ниязбековна.</p>
  <p>Команда кафедры «Телематика» благодарит ГорОНО г.Ош и руководство школу-гимназию №42 за помощь&nbsp; в организации Зимней школы “Deutsch und Telematik”.</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p style="text-align: center;"><strong>«Deutsch und Telematik» кышкы мектеби</strong></p>
  <p style="text-align: left;">И.Раззаков атындагы Кыргыз мамлекеттик техникалык университетинин «Телематика» кафедрасынын командасы 2016-жылдын декабрь айынын 16-нан 23-но чейин Ош шаарында DAAD нын каржылоосу менен «Deutsch und Telematik»деген кышкы мектепти өткөрүштү. Бул мектептин
    максаты окуучуларды&nbsp; заманбаптык техникага жана так илимдерге кызыктыруу.&nbsp; Ош шаарынын &nbsp;ГорОНОсу 13 мектептен №42, 4, 22, 9, 8, 43, 23, 7, 52, 20, 31, 6,32 болгон 30 окучууну топтоп беришти.</p>
  <p>№42 мектеп-гимназиянын жетекчилери «Электроника жана робототехника» жана «Немис тили» сабактарын өткөрүү үчүн 2 бөлмө бөлүп беришти.</p>
  <p>Кышкы мектеп учурунда балдар электроника жана робототехника, программалоо, 3D-моделдөөну долборлоо боюнча ыкмаларга үйрөнүштү.</p>
  <p>Алган билимдеринин негизинде балдар өз колдору менен төмөнкү долбоорлорду иштеп чыгышты:</p>
  <ol>
    <li><strong>«Башня Тесла</strong>»: Расул к.Тахмина, Сражидинова Нигора</li>
    <li><strong>«Звезда»: </strong>Акылбек у. Мадумар, Челядник Никита</li>
    <li><strong>«</strong><strong>LED</strong><strong> 8*8»: </strong>Мырзакматова Алия, Мамаризаева Умида, Нурланов Бектур</li>
    <li><strong>«Кран»:</strong> Исламбек к.Мээрим, Бекжанов Султан, Ормонова Махмиё</li>
    <li><strong>«Умный дом улица»:</strong> Арапбаев Заманбек, Абил к.Азиза, Аманова Айдана, Насиржанов Акмал</li>
    <li><strong>«Снежинка»:</strong> Долотбек у. Эрмек, Тагаева Насыйкат, Матиев Нуржигит</li>
    <li><strong>«Калькулятор»:</strong> Кадирова Зилола, Мирзакаримова Оматой</li>
    <li><strong>«Управление освещением дома через </strong><strong>Bluetooth</strong><strong>»:</strong> Джусмаматов Самат, Торобек у.Жусуп, Дастанов Усон</li>
    <li><strong>«Кран-Башня</strong>»: Расул к.Тахмина, Сражидинова Нигора</li>
    <li><strong>«Пианино»:</strong> Исламбек к.Мээрим</li>
  </ol>
  <p><img class="img-responsive" src="server/images/gallery/news_783c91889315e2e0a5a90158e04e2962.jpeg" alt="Зимняя школа “Deutsch und Telematik”" width="718" height="539"></p>
  <p>Электроника, робототехника жана программалоо боюнча сабактарды өтушкөндөр : «Телематика» кафедрасынын инженери Азисбек уулу Тимур, магистрлер: Батырканов Нурсултан жана Таалайбек уулу Султангазы, жана 4-курстун студенти Абдылдаев Казыбек. «Немис тили»
    боюнча сабакты&nbsp; «Телематика» кафедрасынын доценти Медралиева Бубусара Ниязбековна өттү.</p>
  <p><img class="img-responsive" src="server/images/gallery/news_917e22f83fe8b4f12f96dbd41917bf4a.jpeg" alt="Зимняя школа “Deutsch und Telematik”" width="713" height="534"></p>
  <p>«Телематика» кафедрасынын командасы Ош шаарынын ГорОНОсуна жана №42 мектеп-гимназиясынын жетекчилерине&nbsp; «Deutsch und Nelematik» кышкы мектебин өткөрүүгө көрсөткөн жардамы үчүн тереӊ ыраазычылыгын билдирет.</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
HERE
        ]);
    }
}
