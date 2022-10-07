<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]); 
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adhelia Putri",
        "email" => "adhelia031104@gmail.com",
        "image" => "adhelia.jpeg"
    ]);
    
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);


Route::get('/add', function () {
    return view('add');
});  

Route::get('/test', function () {
    return view('master');
}); 

use App\Http\Controllers\DataController;
Route::post('/', ['uses' => 'DataController@show_by_admin']);
Route::get('/', [DataController::class, 'show_by_admin']);
Route::post('/add_process', [DataController::class, 'add_process']);
Route::get('/admin', [DataController::class, 'show_by_admin']);
Route::get('/edit/{id}', [DataController::class, 'edit']);
Route::post('/edit_process', [DataController::class, 'edit_process']);
Route::get('/delete/{id}', [DataController::class, 'delete']);

Route::get('/cari', [DataController::class, 'cari']);


