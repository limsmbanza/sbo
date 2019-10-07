<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsEtablishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_etablishments', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('name',30);
	    $table->string('adresse',50);
	    $table->string('city');
	    $table->integer('contry_id')->unsigned();
            $table->integer('speciality_id')->unsigned();
	    $table->timestamps();
	    
        });
    

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_etablishments');
    }
}
