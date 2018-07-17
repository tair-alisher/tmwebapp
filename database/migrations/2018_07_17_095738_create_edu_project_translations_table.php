<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEduProjectTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_project_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edu_project_id')->usnigned();
            $table->string('locale')->index();

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');

            $table->unique(['edu_project_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edu_project_translations');
    }
}
