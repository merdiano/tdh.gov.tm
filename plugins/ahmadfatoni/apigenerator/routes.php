<?php

use AhmadFatoni\ApiGenerator\Controllers\API\newsController as newsController;

// Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
// Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
// Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

// Route::resource('api/news', 'AhmadFatoni\ApiGenerator\Controllers\API\newsController', ['except' => ['destroy', 'create', 'edit']]);
// Route::get('api/news/{id}/delete', ['as' => 'api/news.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\newsController@destroy']);


// Custom Routes
Route::get('{locale}/api/posts', 'AhmadFatoni\ApiGenerator\Controllers\API\newsController@news');

Route::get('api/post/{id}', 'AhmadFatoni\ApiGenerator\Controllers\API\newsController@post');

Route::get('api/posts/search/{title}', 'AhmadFatoni\ApiGenerator\Controllers\API\newsController@search');

Route::get('api/posts/filter/{date}', 'AhmadFatoni\ApiGenerator\Controllers\API\newsController@filterDate');

Route::get('api/categories/', 'AhmadFatoni\ApiGenerator\Controllers\API\categoriesController@index');
