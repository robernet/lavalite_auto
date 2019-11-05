<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateAutomobilesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: automobiles
         */
        Schema::create('automobiles', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('user_type', 255)->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->integer('make_id')->nullable();
            $table->integer('model_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->enum('type', ['Any','Pickup','SUV','Cupe','Convertible','Sedan','Minicar'])->nullable();
            $table->date('releaseyear')->nullable();
            $table->string('color', 255)->nullable();
            $table->string('mileage', 255)->nullable();
            $table->integer('price')->nullable();
            $table->enum('transmission', ['Manual','Automatic','Semi-automatic'])->nullable();
            $table->enum('fuel_type', ['Gasoline','Diesel','Petrol','LPG'])->nullable();
            $table->text('description')->nullable();
            $table->enum('conditionn', ['Used','New'])->nullable();
            $table->enum('engine', ['3 cylinders','4 cylinders','5 cylinders','6 cylinders','8 cylinders','10 cylinders','12 cylinders'])->nullable();
            $table->text('features')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('neighborhood', 255)->nullable();
            $table->string('zip', 255)->nullable();
            $table->text('images')->nullable();
            $table->enum('status', ['Show','Hide'])->nullable();
            $table->string('slug', 255)->nullable();
            $table->integer('viewcount')->nullable();
            $table->string('upload_folder', 250)->nullable();
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
        Schema::drop('automobiles');
    }
}
