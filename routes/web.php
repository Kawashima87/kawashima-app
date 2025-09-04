<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskTagController;
use App\Models\Task;

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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');//ログインしていない状態でアクセスすると、ログイン画面にリダイレクトする

Route::get('/', function () {
    return view('todo/index');
})->middleware('auth');//ログインしていない状態でアクセスすると、ログイン画面にリダイレクトする

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {//複数のミドルウェア設定;
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/* 
get(表示)リクエスト('URL',[コントローラー名]::class,'メソッド名')
->name('ルート名')
*/
Route::get('/test',[TestController::class,'test'])
->name('test');


//TODOリスト
Route::get('todo',[TaskController::class,'index']);

Route::get('todo/index',[TaskController::class,'create']);

Route::post('todo',[TaskController::class,'store'])
->name('todo.store');

//投稿サイト
Route::get('post/create',[PostController::class,'create'])
->middleware(['auth','admin']);//このページは管理者権限がないとリクエストできないミドルウェア制限 + ログインしていないとログイン画面にリダイレクトするミドルウェア制限;

Route::post('post',[PostController::class,'store'])
->name('post.store');

Route::get('post',[PostController::class,'index'])
->middleware('auth');

Route::get('post/show/{post}',[PostController::class,'show'])
->name('post.show');

Route::get('post/{post}/edit',[PostController::class,'edit'])
->name('post.edit');

Route::patch('post/{post}',[PostController::class,'update'])
->name('post.update');

Route::delete('post/{post}',[PostController::class,'destroy'])
->name('post.destroy');