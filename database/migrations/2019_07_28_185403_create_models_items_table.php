<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_items', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('order_id')->unsigned();
	    $table->integer('offer_id')->unsigned();
	    $table->integer('unity_id')->unsigned();
            $table->timestamps();
	    $table->date('delete_At')->nullable();
	    $table->foreign('order_id')->references('id')->on('models_orders')
							->onDelete('cascade')
							->onUpdate('cascade');
	    $table->foreign('offer_id')->references('id')->on('models_offers')
							->onDelete('cascade')
							->onUpdate('cascade');
    	    /*$table->foreign('unity_id')->references('id')->on('models_unities')
							->onDelete('cascade')
							->onUpdate('cascade');*/
	   
		
        });
	
	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_items');
    }
}
