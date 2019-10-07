<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateModelsContriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_contries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
	    $table->string('abbreviation',15)->nullable();
	    $table->timestamps();
        });

	Schema::table('models_etablishments',function(Blueprint $table){
		$table->foreign('contry_id')->references('id')->on('models_contries');
	});
	
	DB::table('models_contries')->insert([
		'name'=> 'Allemagne'
	]);	
	
	DB::table('models_contries')->insert([
		'name'=>'Angleterre'
	]);

	DB::table('models_contries')->insert([
		'name'=> 'Afrique du Sud'
	]);
	
	DB::table('models_contries')->insert([
		'name'=>'RDC'
	]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_contries');
    }
}
