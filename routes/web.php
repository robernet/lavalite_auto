<?php

// Resource routes  for automobile
Route::group(['prefix' => set_route_guard('web').'/automobile'], function () {
    Route::resource('automobile', 'AutomobileResourceController');
});

// Public  routes for automobile
Route::get('automobile/popular/{period?}', 'AutomobilePublicController@popular');
Route::get('automobiles/', 'AutomobilePublicController@index');
Route::get('automobiles/{slug?}', 'AutomobilePublicController@show');


// Resource routes  for make
Route::group(['prefix' => set_route_guard('web').'/automobile'], function () {
    Route::resource('make', 'MakeResourceController');
});

// Public  routes for make
Route::get('make/popular/{period?}', 'MakePublicController@popular');
Route::get('automobiles/', 'MakePublicController@index');
Route::get('automobiles/{slug?}', 'MakePublicController@show');


// Resource routes  for carmodel
Route::group(['prefix' => set_route_guard('web').'/automobile'], function () {
    Route::resource('carmodel', 'CarmodelResourceController');
});

// Public  routes for carmodel
Route::get('carmodel/popular/{period?}', 'CarmodelPublicController@popular');
Route::get('automobiles/', 'CarmodelPublicController@index');
Route::get('automobiles/{slug?}', 'CarmodelPublicController@show');


// Resource routes  for directory
Route::group(['prefix' => set_route_guard('web').'/automobile'], function () {
    Route::resource('directory', 'DirectoryResourceController');
});

// Public  routes for directory
Route::get('directory/popular/{period?}', 'DirectoryPublicController@popular');
Route::get('automobiles/', 'DirectoryPublicController@index');
Route::get('automobiles/{slug?}', 'DirectoryPublicController@show');


// Resource routes  for accessory
Route::group(['prefix' => set_route_guard('web').'/automobile'], function () {
    Route::resource('accessory', 'AccessoryResourceController');
});

// Public  routes for accessory
Route::get('accessory/popular/{period?}', 'AccessoryPublicController@popular');
Route::get('automobiles/', 'AccessoryPublicController@index');
Route::get('automobiles/{slug?}', 'AccessoryPublicController@show');

