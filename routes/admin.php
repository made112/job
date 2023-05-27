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
//define('PAGINATION_COUNT',10);

Route::group(['namespace'=>'Admin','middleware'=>'guest:admin'],function(){
    Route::get('/login','AdminController@getlogin')->name('get.admin.login');
    Route::post('/login','AdminController@postlogin')->name('admin.login');



});


Route::group(['namespace'=>'Admin','middleware'=>'auth:admin'],function(){
    Route::get('logout','AdminController@logout')->name('admin.logout');

    Route::get('/','AdminController@index')->name('admin.dashboard');



    //////////////////////////////////begin category route//////////////////////////////////////////////////
    Route::group(['prefix'=>'category'],function (){
        Route::get('/','CategoryController@index')->name('category');
        Route::get('add_category','CategoryController@create')->name('admin.category');
        Route::post('post_category','CategoryController@store')->name('category.post');
        Route::post('update/{id}','CategoryController@update') -> name('admin.category.update');
        Route::get('edit/{id}','CategoryController@edit') ->name('admin.category.edit');
        Route::get('delete/{id}','CategoryController@destroy') -> name('admin.category.delete');




    });
    Route::group(['prefix'=>'sub_category'],function (){
        Route::get('/','Sub_CategoryController@index')->name('sub_category');
        Route::get('add.sub_category','Sub_CategoryController@create')->name('admin.sub_category');
        Route::post('post.sub_category','Sub_CategoryController@store')->name('sub_category.post');
        Route::post('update/{id}','Sub_CategoryController@update') -> name('admin.sub_category.update');
        Route::get('edit/{id}','Sub_CategoryController@edit') ->name('admin.sub_category.edit');
        Route::get('delete/{id}','Sub_CategoryController@destroy') -> name('admin.sub_category.delete');




    });
    Route::group(['prefix' => 'Job'], function () {
        Route::get('/','JobController@index') -> name('admin.job');
        Route::get('create', 'JobController@create')->name('jop');
        Route::post('store/jop', 'JobController@store')->name('jop.post');
        Route::post('update/{id}','JobController@update') -> name('admin.job.update');
        Route::get('edit/{id}','JobController@edit') ->name('admin.job.edit');
        Route::get('delete/{id}','JobController@destroy') -> name('admin.job.delete');
        Route::get('/company/request','JobController@indexRquest') -> name('admin.job_request');
        Route::get('/company/delete/{id}','JobController@deleteRquest') -> name('admin.job_request.delete');
        Route::get('download-file', 'JobController@downloadFile')->name('company.download');




    });

    Route::group(['prefix' => 'company'], function () {
        Route::get('/','CompanyController@index') -> name('company.index');
        Route::get('create', 'CompanyController@create')->name('company.create');
        Route::post('store/jop', 'CompanyController@store')->name('company.post');

        Route::post('update/{id}','CompanyController@update') -> name('admin.company.update');
        Route::get('edit/{id}','CompanyController@edit') ->name('admin.company.edit');
        Route::get('delete/{id}','CompanyController@destroy') -> name('admin.company.delete');
        Route::get('/company/request','CompanyController@indexRquest') -> name('admin.company_request');
        Route::get('/company/delete/{id}','CompanyController@deleteRquest') -> name('company_request.delete');
//        Route::get('download-file', 'JobController@downloadFile')->name('company.download');
        Route::post('suggest/company', '
        @suggest')->name('company.suggest');




    });


});


