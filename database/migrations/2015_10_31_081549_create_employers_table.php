<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('name', 30);
            // $table->string('password');
            // $table->string('email', 30);
            // $table->string('phone', 15);
            $table->integer('user_id')->unsigned();
            $table->string('company_name');
            $table->string('location');
            $table->float('rating')->default(0.0);
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employers');
    }
}
