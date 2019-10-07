<?php
use App\ModelsOffer;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   $offers=ModelsOffer::all();
   
   return view('index',compact('offers'));     

});

Route::get('offer/subscribe/{abbr}','OfferController@subscribe')->where(['abbr'=>'[a-z]+']);
	

//Route::resources(['name'=>'offer','controller'=>'OfferController']);

Route::resource('order','OrderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/verify/{token}',function(){
		
});

Route::middleware(['auth'])->group(function(){
	Route::resource('departement','DepartementController');
        Route::resource('subdepartement','SubDepartementController');
	Route::resource('stakeholder','StakeHolderController');  		
});
