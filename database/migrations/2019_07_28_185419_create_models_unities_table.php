<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsUnitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_unities', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('reduction');
	    $table->integer('number_of_months');
            $table->timestamps();
	    $table->date('deleted_At')->nullable();
        });
	
	DB::table('models_unities')->insert([
		'reduction'=>0,
		'number_of_months'=>1
	]);
	
	DB::table('models_unities')->insert([
		'reduction'=>3,
		'number_of_months'=>3
	]);

	DB::table('models_unities')->insert([
		'reduction'=>6,
		'number_of_months'=>5
	]);

	DB::table('models_unities')->insert([
		'reduction'=>7,
		'number_of_months'=>12
	]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_unities');
    }
}
