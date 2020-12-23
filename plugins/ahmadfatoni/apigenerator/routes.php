<?php

use AhmadFatoni\ApiGenerator\Controllers\API\IndexofnewsController as IndexofnewsController;

// Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
// Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
// Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

// Route::resource('api/news', 'AhmadFatoni\ApiGenerator\Controllers\API\IndexofnewsController', ['except' => ['destroy', 'create', 'edit']]);
// Route::get('api/news/{id}/delete', ['as' => 'api/news.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\IndexofnewsController@destroy']);


// Custom Routes
Route::get('api/posts/{locale}', 'AhmadFatoni\ApiGenerator\Controllers\API\IndexofnewsController@news');

Route::get('api/post/{id}', 'AhmadFatoni\ApiGenerator\Controllers\API\IndexofnewsController@post');

Route::get('api/posts/search/{title}', 'AhmadFatoni\ApiGenerator\Controllers\API\IndexofnewsController@search');

Route::get('api/posts/filter/{date}', 'AhmadFatoni\ApiGenerator\Controllers\API\IndexofnewsController@filterDate');

Route::get('api/categories/', 'AhmadFatoni\ApiGenerator\Controllers\API\IndexofcategoriesController@index');
