<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return "selamat datang";
});

Route::get('/about', function () {
    return "NIM : 234172040";
});

Route::get('/user/{name}', function ($name) {
    return "Nama saya\n" . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman artikel dengan ID " . $id;
});


Route::get('/user/{name?}', function ($name = null) {
    return "Nama saya\n" . $name;
});


Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/', [PagesController::class, 'index']);
// Route::get('/about', [PagesController::class, 'about']);


Route::get('/about', AboutController::class);
Route::get('/articles', ArticleController::class);


Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);


Route::get('/greeting', function () {
    return view('hello', ['name' => 'Alexander']);
});

Route::get('/greeting', [
    WelcomeController::class,
    'greeting'
]);
