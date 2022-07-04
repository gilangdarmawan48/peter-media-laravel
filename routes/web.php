<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConsumeApiController;

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

Route::get('/login', function(){
    return view('login_register.login');
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/register', function(){
    return view('login_register.register');
});

Route::get('apiwithoutkey', [ConsumeApiController::class, 'apiWithoutKey'])->name('apiWithoutKey');
Route::get('apiwithkey', [ConsumeApiController::class, 'apiWithKey'])->name('apiWithKey');   
Route::get('apiwithkey/create', [ConsumeApiController::class, 'create'])->name('apiWithKeyCreate');
Route::post('apiwithkey', [ConsumeApiController::class, 'store'])->name('apiWithKeyStore');
Route::get('apiwithkey/{id}/edit', [ConsumeApiController::class, 'edit'])->name('apiWithKeyEdit');
Route::put('apiwithkey/{id}', [ConsumeApiController::class, 'update'])->name('apiWithKeyUpdate');
Route::delete('apiwithkey/{id}', [ConsumeApiController::class, 'destroy'])->name('apiWithKeyDelete');

Route::get('/index', [NewController::class, 'indexHome']);

Route::get('/news', [NewController::class, 'index']);
Route::get('/news/create', [NewController::class, 'create']);
Route::post('/news', [NewController::class, 'store']);
Route::get('/news/{id}/edit', [NewController::class, 'edit']);
Route::put('/news/{id}', [NewController::class, 'update']);
Route::delete('/news/{id}', [NewController::class, 'destroy']);

Route::get('/writer', [WriterController::class, 'index']);
Route::get('/writer/create', [WriterController::class, 'create']);
Route::post('/writer', [WriterController::class, 'store']);
Route::get('/writer/{id}/edit', [WriterController::class, 'edit']);
Route::put('/writer/{id}', [WriterController::class, 'update']);
Route::delete('/writer/{id}', [WriterController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/category/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);