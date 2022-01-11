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

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';



Route::group([
    'middleware' => ['auth'],
    'prefix' => 'administrator',
], function ($router) {
    Route::get('/dashboard', 'admin\DashboardController@index');
    Route::get('/global-settings/parish/list', 'admin\ParishController@getParishList');

    Route::get('/users/list', 'admin\UserController@list');
    Route::get('/users/register', 'admin\UserController@register');
    Route::post('/users/save', 'admin\UserController@saveUser');
    Route::any('/users/{id}', 'admin\UserController@update');



    Route::get('/family/list', 'admin\FamilyController@list');

});
