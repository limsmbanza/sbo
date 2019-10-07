<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStakeHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stake_holders', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('name',30);
	    $table->string('lastname',30);
	    $table->string('firstname',30);
	    $table->string('adresse',50);
	    $table->string('phone_number',20);
	    $table->morphs('departement');
	    $table->integer('user_id')->unsigned()->index();
            $table->timestamps();

	    $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stake_holders');
    }
}
