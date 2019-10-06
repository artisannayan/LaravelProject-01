<?php

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


/*
|--------------------------------------------------------------------------
| Frontend Routes Pages Start
|--------------------------------------------------------------------------
*/

Route::get('/','Frontend\PagesController@index')->name('homepage');

Route::group(['prefix' => 'product'], function(){
	 Route::get('/create','Frontend\ProductsController@create')->name('products.create');
});

/*
|--------------------------------------------------------------------------
| Frontend Routes Pages End
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Backend Routes Pages Start
|--------------------------------------------------------------------------
*/
    Route::group(['prefix' => 'admin'], function(){
    Route::get('/','Backend\PagesController@index')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Backend Routes Pages Start
|--------------------------------------------------------------------------
*/

    Route::group(['prefix'=>'product'] , function(){
  	Route::get('/create','Backend\ProductsController@create')->name('product.create');
    Route::get('/','Backend\ProductsController@index')->name('product.index');
    Route::get('/{id}','Backend\ProductsController@edit')->name('product.edit');



  	Route::post('/store','Backend\ProductsController@store')->name('produc.store');
    Route::post('/edit/{id}','Backend\ProductsController@update')->name('produc.update');
  	Route::get('/delete/{id}','Backend\ProductsController@destroy')->name('product.destory');

  });


  });  

/*
|--------------------------------------------------------------------------
| Backend Routes Pages End
|--------------------------------------------------------------------------
*/