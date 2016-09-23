 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
// Route::get('admin',function(){
// 	return "working on Get";
// });

/////GitHuB

	Route::group(array('prefix' => 'admin'), function() {
	Route::post('/', 'AdminHomeController@store');
	Route::get('/', 'AdminHomeController@index');
	Route::get('category', 'AdminCategoryController@index');
	Route::get('category/create', 'AdminCategoryController@create');
	Route::post('category', 'AdminCategoryController@store');
	Route::get('category/{a}/edit', 'AdminCategoryController@edit');
	Route::put('category/{id}', 'AdminCategoryController@update');
	Route::delete('category/{id}', 'AdminCategoryController@destroy');
	Route::put('category/status/{id}', 'AdminCategoryController@status');
});
Route::get('/', function() {
	return "adsfdsafdsfsd";
});

