<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateModelsAccessListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_access_lists', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('access_list');
	    $table->integer('user_id')->unsigned();
            $table->timestamps();
	    $table->foreign('user_id')->references('id')->on('users')
							->onDelete('cascade')
							->onUpdate('cascade');
       	    
	 });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_access_lists');
    }
}
