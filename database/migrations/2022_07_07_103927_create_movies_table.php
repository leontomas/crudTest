<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
  
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
            $table->string('title');
            $table->string('movie_url');
            $table->text('description');
            $table->string('cast');
            $table->string('language');
            $table->string('quality');
            $table->string('tags');
            $table->time('duration');
            $table->dateTime('year');
            $table->dateTime('upload_date');
        });
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};