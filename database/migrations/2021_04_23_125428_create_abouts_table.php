<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 100);
            $table->text('description');
            $table->string('image', 300);
            $table->string('subtitle', 300);
            $table->string('subparagraph', 300);
            $table->string('birthday', 100);
            $table->string('website', 100);
            $table->bigInteger('phone');
            $table->string('city', 500);
            $table->integer('age');
            $table->string('degree', 500);
            $table->string('email', 500);
            $table->string('freelance', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
