<?php
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:full_admin|website_admin']], function () {
    Route::get('/category/index', ['as' => 'category.index', 'uses' => 'CategoryController@index']);
    Route::get('/category/create', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
    Route::post('/category/store', ['as' => 'category.store', 'uses' => 'CategoryController@store']);
    Route::get('/category/edit/{id}', ['as' => 'category.edit', 'uses' => 'CategoryController@edit']);
    Route::post('/category/update', ['as' => 'category.update', 'uses' => 'CategoryController@update']);
    Route::get('/category/show/{id}', ['as' => 'category.show', 'uses' => 'CategoryController@show']);
    Route::get('/category/destroy/{id}', ['as' => 'category.destroy', 'uses' => 'CategoryController@destroy']);
    Route::get('/category/trash/', ['as' => 'category.trash', 'uses' => 'CategoryController@trash']);
    Route::get('/category/restore/{id}', ['as' => 'category.restore', 'uses' => 'CategoryController@restore']);
    Route::get('/category/delete/{id}', ['as' => 'category.delete', 'uses' => 'CategoryController@delete']);
});
