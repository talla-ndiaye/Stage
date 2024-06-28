<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('questions_paysage', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->string('a');
        $table->string('b');
        $table->string('c');
        $table->string('d');
        $table->string('correct');
        $table->timestamps();
    });
}

public function up1()
{
    Schema::create('questions_sport', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->string('a');
        $table->string('b');
        $table->string('c');
        $table->string('d');
        $table->string('correct');
        $table->timestamps();
    });
}

public function up2()
{
    Schema::create('questions_histoire', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->string('a');
        $table->string('b');
        $table->string('c');
        $table->string('d');
        $table->string('correct');
        $table->timestamps();
    });
}

public function up3()
{
    Schema::create('questions_education', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->string('a');
        $table->string('b');
        $table->string('c');
        $table->string('d');
        $table->string('correct');
        $table->timestamps();
    });
}

public function up4()
{
    Schema::create('questions_personnage', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->string('a');
        $table->string('b');
        $table->string('c');
        $table->string('d');
        $table->string('correct');
        $table->timestamps();
    });
}

public function up5()
{
    Schema::create('questions_culture', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->string('a');
        $table->string('b');
        $table->string('c');
        $table->string('d');
        $table->string('correct');
        $table->timestamps();
    });
}

};