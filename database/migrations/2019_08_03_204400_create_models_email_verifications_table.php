<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateModelsEmailVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_email_verifications', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('user_id')->unsigned();
	    $table->boolean('is_active')->default(0);
	    $table->string('verification_token');	
            $table->timestamps();
        });

	DB::table('users',function($table){
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
        Schema::dropIfExists('models_email_verifications');
    }
}
