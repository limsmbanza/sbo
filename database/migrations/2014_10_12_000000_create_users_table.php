<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('secteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
	    $table->timestamps();
        });
	
	Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('denomination');
            $table->string('coordonee')->nullable();
   	    $table->integer('secteur_activite')->nullable()->unsigned()->index();
	    $table->timestamps();
	    $table->foreign('secteur_activite')
      		  ->references('id')->on('secteurs');
      	
	    
        });

	Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('url');
   	    $table->string('proprite')->nullable();
  	    $table->timestamps();
	    
        });

	Schema::create('devises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
	    $table->timestamps();
        });

	Schema::create('agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('coordonnee');
   	    $table->integer('entreprise_id')->unsigned()->index()->nullable();
	    $table->timestamps();
	    
        });

	Schema::create('annee_exploitations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('annee_debut');
            $table->string('annee_fin');
	    $table->integer('entreprise_id')->unsigned()->index()->nullable();
	    $table->timestamps();	    
        });

	Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('prix_unitaire');
	    $table->timestamps();
        });

	Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_produit');
            $table->string('prix_unitaire');
	    $table->timestamps();
        });
        
 	Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
           // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
	    $table->string('account_type')->nullable();
	    $table->integer('account_id')->nullable()->unsigned();
            $table->rememberToken();
            $table->timestamps();
	    $table->date('deleted_At')->nullable();
	    $table->string('telephone')->nullable();
	    
        });
	
	Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned()->index();
            $table->integer('id_utilisateur')->unsigned()->index();
   	    $table->string('proprite')->nullable();
	    $table->timestamps();
	    $table->foreign('page_id')
      		  ->references('id')->on('pages');
	    $table->foreign('id_utilisateur')
      		  ->references('id')->on('users');
        });
	
	DB::table('secteurs')->insert([
    		['libelle'=>'Télécommunication et nouvelles technologies'],
		['libelle'=>'Transport'],
		['libelle'=>'Agroalimentaire'],
		['libelle'=>'Minier']
	]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
