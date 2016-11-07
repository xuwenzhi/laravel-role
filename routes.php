<?php

/**
 *  role authorization routes.
 */
Route::group(['prefix' => '/role'], function()
{
    Route::get('group', 'Role\GroupController@getList');
    Route::get('group/detail', 'Role\GroupController@getDetail');
    Route::get('group/edit', 'Role\GroupController@edit');
    Route::get('group/create', 'Role\GroupController@create');
});

Route::group(['prefix' => '/api'], function() {
    Route::group(['prefix' => '/role'], function () {
        Route::get('group', 'Role\GroupController@groupList');
        Route::get('group/detail', 'Role\GroupController@getGroupDetail');
        Route::any('group/save', 'Role\GroupController@save');
        Route::any('group/delete', 'Role\GroupController@delete');
        Route::any('group/adduser', 'Role\GroupController@addUser');
        Route::any('group/removeuser', 'Role\GroupController@removeUser');
        Route::get('menu', 'Role\RoleController@getRoleMenu');
    });
});