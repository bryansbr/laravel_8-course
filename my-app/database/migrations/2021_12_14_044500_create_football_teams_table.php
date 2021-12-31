<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('football_teams', function (Blueprint $table) {
            $table->id(); // bigint, auto-increment
            $table->string('name'); // varchar
            $table->string('country'); // varchar
            $table->string('confederation'); // varchar
            $table->integer('foundation_year'); // integer
            $table->integer('titles'); // integer           
            $table->timestamps(); // created_at, updated_at (timestamp)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('football_teams');
    }
}

