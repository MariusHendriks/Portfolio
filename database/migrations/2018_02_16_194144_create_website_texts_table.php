<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_texts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('textContent');
            $table->integer('week');
            $table->integer('sprint');
            $table->string('title');
            $table->string('course');
            $table->integer('proudness');
            $table->string('photopath');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_texts');
    }
}
