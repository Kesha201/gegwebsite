<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;

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
    return view('main');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/post/create', function () {
    DB::table('post')->insert([
        'title' => 'First',
        'body' => 'Almaty'
    ]);
});

Route::get('/post', [BlogController::class, 'index']);
Route::get('blog/create', function(){
    return view('post.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}', [BlogController::class, 'get_post']);

Route::get('/uploadfile', 'App\Http\Controllers\UploadFileController@index');
Route::post('/uploadfile', 'App\Http\Controllers\UploadFileController@showUploadFile');

Route::get('/multiuploads', 'App\Http\Controllers\UploadController@uploadForm');
Route::post('/multiuploads', 'App\Http\Controllers\UploadController@uploadSubmit');

Route::get('mail/send', 'App\Http\Controllers\MailController@send');