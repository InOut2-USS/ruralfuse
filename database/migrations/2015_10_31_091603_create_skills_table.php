<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')->unsigned();
            $table->integer('skill_id')->unsigned();
            $table->timestamps();

            $table->foreign('profile_id')
                    ->references('id')
                    ->on('profiles')
                    ->onDelete('cascade');

            $table->foreign('skill_id')
                    ->references('id')
                    ->on('hardskills')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('skills');
    }
}
