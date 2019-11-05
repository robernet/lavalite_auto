<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateCarmodelsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: carmodels
         */
        Schema::create('carmodels', function ($table) {
            $table->increments('id');
            $table->integer('make_id')->nullable();
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
        Schema::drop('carmodels');
    }
}
