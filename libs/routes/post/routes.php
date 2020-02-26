<?php
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:full_admin|website_admin']], function () {
    Route::get('/posts', ['as' => 'post.index', 'uses' => 'PostController@index']);
    Route::get('/post/create', ['as' => 'post.create', 'uses' => 'PostController@create']);
    Route::post('/post/store', ['as' => 'post.store', 'uses' => 'PostController@store']);
    Route::get('/post/edit/{id}', ['as' => 'post.edit', 'uses' => 'PostController@edit']);
    Route::post('/post/update', ['as' => 'post.update', 'uses' => 'PostController@update']);
    Route::get('/post/show/{id}', ['as' => 'post.show', 'uses' => 'PostController@show']);
    Route::get('/post/destroy/{id}', ['as' => 'post.destroy', 'uses' => 'PostController@destroy']);
    Route::get('/post/trash/', ['as' => 'post.trash', 'uses' => 'PostController@trash']);
    Route::get('/post/restore/{id}', ['as' => 'post.restore', 'uses' => 'PostController@restore']);
    Route::get('/post/delete/{id}', ['as' => 'post.delete', 'uses' => 'PostController@delete']);
    Route::get('/post/fDelete/{id}', ['as' => 'post.forceDelete', 'uses' => 'PostController@fDelete']);
    Route::get('/post/active/{id}', ['as' => 'post.active', 'uses' => 'PostController@active']);
    Route::get('/post/inActive/{id}', ['as' => 'post.inActive', 'uses' => 'PostController@inActive']);
});
