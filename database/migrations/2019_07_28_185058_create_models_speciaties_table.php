<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateModelsSpeciatiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_speciaties', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('name');
            $table->timestamps();
	    $table->date('delete_At')->nullable();
        });
	
	Schema::table('models_etablishments',function(Blueprint $table){
		$table->foreign('speciality_id')->references('id')
						->on('models_speciaties');
	});
	
	DB::table('models_speciaties')->insert([
		'name'=>'Réseaux et Télécommunication'
	]);

	DB::table('models_speciaties')->insert([
		'name'=>'Gestion des affaires'
	]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_speciaties');
    }
}
