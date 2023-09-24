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
Route::get('/create', function () {
    return view('create');
});
Route::get('/edit', function () {
    return view('edit');
});

Route::get('/normalMeme', function () {
    return view('subpages/normalMeme');
});
Route::get('/highEnergyMeme', function () {
    return view('subpages/highEnergyMeme');
});
Route::get('/recommendRead', function () {
    return view('subpages/recommendRead');
});
Route::get('/recommendWatch', function () {
    return view('subpages/recommendWatch');
});
Route::get('/recommendMusic', function () {
    return view('subpages/recommendMusic');
});
Route::get('/recommendGame', function () {
    return view('subpages/recommendGame');
});
Route::get('/recommendWebsite', function () {
    return view('subpages/recommendWebsite');
});
Route::get('/shareThePath', function () {
    return view('subpages/shareThePath');
});
Route::get('/myPage', function () {
    return view('mypage/myPage');
});
Route::get('/mySpace', function () {
    return view('mypage/mySpace');
});
Route::get('/profile', function () {
    return view('mypage/profile');
});
Route::get('/resetPassword', function () {
    return view('mypage/resetPassword');
})->name('resetPassword');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store']);
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::get('/resetPassword/{token}', 'Auth\ResetPasswordController@showResetForm');


Route::post('/user/update_password', [App\Http\Controllers\UserController::class, 'update_password'])->name('user.update_password');




