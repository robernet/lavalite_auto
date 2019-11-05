<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessoriesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: accessories
         */
        Schema::create('accessories', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->enum('category', ['All','Tires','Bumpers','Body Parts','Axels','Steering','Interior','Stereo','Auto security','Turbochargers','Carburetor','Auto Electric','Break Parts','Batteries','Car Care Products','Suspension','Wheels'])->nullable();
            $table->string('company', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->integer('price')->nullable();
            $table->text('images')->nullable();
            $table->enum('status', ['show','hide'])->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('upload_folder', 255)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('accessories');
    }
}
