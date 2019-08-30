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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'revalidate'], function(){
    Route::prefix('admin')->group(function(){
        Route::namespace('Backend')->group(function() {
            Route::get('/', 'DashboardController@index')->name('admin');

            Route::prefix('masterdata')->group(function(){
                Route::prefix('item')->group(function(){
                    Route::get('/', 'ItemController@index')->name('item.index');
                    Route::get('{action}/{id?}', 'ItemController@showForm')->where(['action'=>'new|edit', 'id'=>'[0-9]+'])->name('item.showForm');
                    Route::post('{action}', 'ItemController@action')->where(['action'=>'save|delete'])->name('item.action');
                });
            });

        });
    });
});
