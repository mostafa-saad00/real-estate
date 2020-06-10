<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_id');
            $table->string('city');
            $table->string('area');
            $table->string('buyorrent');
            $table->string('type');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('parking');
            $table->unsignedInteger('price');
            $table->unsignedInteger('total_area');
            $table->text('ar_desc');
            $table->text('en_desc');
            $table->string('ar_title');
            $table->string('en_title');
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
        Schema::dropIfExists('properties');
    }
}
