<?php
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:full_admin']], function () {
    Route::get('/users', ['as' => 'user.index', 'uses' => 'UserController@index']);
});
