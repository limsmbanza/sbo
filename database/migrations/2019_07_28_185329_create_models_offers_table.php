<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB as DB;

class CreateModelsOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_offers', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('name');
	    $table->string('abbr');
	    $table->json('characteristic');
	    $table->string('price');
            $table->timestamps();
	    $table->date('deleted_At')->nullable();
        });
	
		
	DB::table('models_offers')->insert([
		'name'=>'Evaluation',
		'abbr'=>'free',
		'characteristic'=> collect(['capacite'=>'15GB','utilisateur'=>'3 utilisateurs'])->toJson(),
		'price'=> '0$'
	]);
	
	DB::table('models_offers')->insert([
		'name'=>'Standard',
		'abbr'=>'stand',
		'characteristic'=> collect(['capacite'=>'250GB','utilisateur'=>'150 utilisateurs'])->toJson(),
		'price'=> '15$'
	]);
	
	DB::table('models_offers')->insert([
		'name'=>'Entreprise',
		'abbr'=>'entre',
		'characteristic'=> collect(['capacite'=>'Illimité','utilisateur'=>'Illimité'])->toJson(),
		'price'=> '25$'
	]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_offers');
    }
}
