<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubDepartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_departements', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('name',50);
	    $table->timestamps();
	    $table->date('delated_at')->nullable();
	    $table->integer('departement_id')->unsigned()->index();
	    $table->string('departement_type');	
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_departements');
    }
}
