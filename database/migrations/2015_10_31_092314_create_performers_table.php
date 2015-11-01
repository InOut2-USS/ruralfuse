<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')->unsigned();
            $table->integer('profile_id')->unsigned();
            $table->boolean('reviewed')->default(false);
            $table->timestamps();

            $table->foreign('task_id')
                    ->references('id')
                    ->on('tasks')
                    ->onDelete('cascade');

            $table->foreign('profile_id')
                    ->references('id')
                    ->on('profiles')
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
        Schema::drop('performers');
    }
}
