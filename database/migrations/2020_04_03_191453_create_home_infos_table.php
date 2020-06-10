<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_infos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->text('text_1');
            $table->text('text_2');
            $table->text('text_3');
            $table->text('section_1_p');
            $table->text('section_1_t');
            $table->text('section_2_p');
            $table->text('section_2_t');
            $table->text('section_3_p');
            $table->text('section_3_t');
            $table->text('section_4_p');
            $table->text('section_4_t');

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
        Schema::dropIfExists('home_infos');
    }
}
