<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; //

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

// 1. Vista de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');   

Route::get('/admin', function () {
    return 'Hello, admin';
})->name('admin');

// 2. Vista users con parámetro por defecto
Route::get('/users/{id?}', function ($id = 'undefined') {
    //return 'Hello, user: '.$id;
    return redirect('admin');
})
    ->where('id', '[0-9]+')
    ->middleware('userAdmin');

// 3. Vista de usuarios a través de un controlador
//Route::get('/users', [UserController::class, 'index']);

// 4. Vista users con expresiones regulares
// Route::get('/users/{id?}', function ($id = 'Hello') {
//     return 'Hello, user: '.$id;
// })->where('id', '[A-Za-z]+');

// 5. Vista users con expresiones regulares
// Route::get('/users/{name}/{id}', function ($name, $id) {
//     return [$name, $id];
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

/*Route::get('/users', function () {
    return view('user');  
});*/


