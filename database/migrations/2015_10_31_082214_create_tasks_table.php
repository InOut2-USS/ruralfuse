<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('middleman_id')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->integer('noOfPeople');
            $table->integer('noOfDays');
            $table->float('budget');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('preferred_gender', 10)->nullable();
            $table->integer('min_age')->nullable();
            $table->integer('max_age')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('available')->default(true);
            $table->boolean('reviewed')->default(false);
            $table->boolean('workFromHome')->default(true);
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
        Schema::drop('tasks');
    }
}
