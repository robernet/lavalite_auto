<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectoriesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: directories
         */
        Schema::create('directories', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->text('user_type')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->integer('zipcode')->nullable();
            $table->string('latitude', 25)->nullable();
            $table->string('longitude', 25)->nullable();
            $table->longText('description')->nullable();
            $table->longText('details')->nullable();
            $table->text('images')->nullable();
            $table->integer('viewcount')->nullable();
            $table->string('uploaded_folder', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('published', ['yes','no'])->nullable();
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
        Schema::drop('directories');
    }
}
