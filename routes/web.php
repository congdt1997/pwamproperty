<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::group(['prefix' => 'admin', 'middleware' => 'checkMid'], function(){
    Route::group(['prefix' => 'location'], function(){
        Route::get('list','LocationController@getList');

        Route::get('add','LocationController@getAdd');
        Route::post('add','LocationController@postAdd');

        Route::get('edit/{id}','LocationController@getEdit');
        Route::post('edit/{id}','LocationController@postEdit');

        Route::get('delete/{id}','LocationController@getDelete');
    });
    Route::group(['prefix' => 'news'], function(){
        Route::get('list','NewsController@getList');

        Route::get('add','NewsController@getAdd');
        Route::post('add','NewsController@postAdd');

        Route::get('edit/{id}','NewsController@getEdit');
        Route::post('edit/{id}','NewsController@postEdit');

        Route::get('delete/{id}','NewsController@getDelete');
    });
    Route::group(['prefix' => 'typeproperty'], function(){
        Route::get('list','TypeofpropertyController@getList');

        Route::get('add','TypeofpropertyController@getAdd');
        Route::post('add','TypeofpropertyController@postAdd');

        Route::get('edit/{id}','TypeofpropertyController@getEdit');
        Route::post('edit/{id}','TypeofpropertyController@postEdit');

        Route::get('delete/{id}','TypeofpropertyController@getDelete');
    });
    Route::group(['prefix' => 'typecode'], function(){
        Route::get('list','TypeofcodeController@getList');

        Route::get('add','TypeofcodeController@getAdd');
        Route::post('add','TypeofcodeController@postAdd');

        Route::get('edit/{id}','TypeofcodeController@getEdit');
        Route::post('edit/{id}','TypeofcodeController@postEdit');

        Route::get('delete/{id}','TypeofcodeController@getDelete');
    });
    Route::group(['prefix' => 'role'], function(){
        Route::get('list','RoleController@getList');

        Route::get('add','RoleController@getAdd');
        Route::post('add','RoleController@postAdd');

        Route::get('edit/{id}','RoleController@getEdit');
        Route::post('edit/{id}','RoleController@postEdit');

        Route::get('delete/{id}','RoleController@getDelete');
    });
    Route::group(['prefix' => 'user'], function(){
        Route::get('list','UserController@getList');

        Route::get('add','UserController@getAdd');
        Route::post('add','UserController@postAdd');

        Route::get('edit/{id}','UserController@getEdit');
        Route::post('edit/{id}','UserController@postEdit');

        Route::get('delete/{id}','UserController@getDelete');
    });
    Route::group(['prefix' => 'property'], function(){
        Route::get('list','PropertyController@getList');

        Route::get('add','PropertyController@getAdd');
        Route::post('add','PropertyController@postAdd');

        Route::get('edit/{id}','PropertyController@getEdit');
        Route::post('edit/{id}','PropertyController@postEdit');

        Route::get('delete/{id}','PropertyController@getDelete');
    });
    Route::group(['prefix' => 'payment'], function(){
        Route::get('list','PaymentController@getList');
    });
    Route::group(['prefix' => 'review'], function(){
        Route::get('delete/{id}/{idProperty}','ReviewController@getDelete');


    });
    Route::group(['prefix' => 'dashboard'], function(){
        Route::get('showdata','DashboardController@getShowdata');
    });
});
Route::group(['prefix' => 'client'], function(){
    Route::group(['prefix' => 'home'], function(){
        Route::get('home','ClientController@getHome');
        Route::get('error','ClientController@getError');

        Route::get('home-logout','UserController@getLogout');
        Route::post('home-login','UserController@postLogin');
        Route::post('home-register','UserController@postRegister');
    });
    Route::group(['prefix' => 'profile'], function(){
        Route::get('detail','ClientController@getProfile');
        Route::post('detail','ClientController@postProfile');
    });

    Route::group(['prefix' => 'email'], function(){
        Route::get('verified-email-success/{id}','UserController@getVerifiedemail');
    });

    Route::group(['prefix' => 'news'], function(){
        Route::get('listnews','ClientController@getListnews');
        Route::get('newsdetail/{id}','ClientController@getNewsdetail');
    });

    Route::group(['prefix' => 'product'], function(){
        Route::get('detail/{id}','ClientController@getProperty');
//        Route::post('detail','ClientController@postProperty');
        Route::get('listproduct','ClientController@getListproduct');

        Route::post('detail/{id}','ReviewController@postReview');
    });

});
