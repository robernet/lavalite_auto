<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateMakesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: makes
         */
        Schema::create('makes', function ($table) {
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->string('slug', 100)->nullable();
            $table->enum('status', ['Show','Hide'])->nullable();
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
        Schema::drop('makes');
    }
}
