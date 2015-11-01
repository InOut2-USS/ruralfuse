<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('middleman_id')->unsigned();
            $table->string('name');
            $table->string('phone', 15);
            $table->string('email', 30);
            $table->integer('age');
            $table->string('gender', 8);
            $table->string('payee_name');
            $table->date('available_from')->nullable();
            $table->date('available_to')->nullable();
            $table->boolean('differently_abled')->default(false);
            $table->float('rating')->default(0.0);
            $table->boolean('active')->default(true);
            $table->boolean('willingToGoOut');
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
        Schema::drop('profiles');
    }
}
