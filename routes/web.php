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

Auth::routes();

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

Route::get('/mySpace', function () {
    return view('mypage/mySpace');
});
Route::get('/profile', function () {
    return view('mypage/profile');
});
Route::get('/resetPassword', function () {
    return view('mypage/resetPassword');
})->name('resetPassword');


Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/myPage', [App\Http\Controllers\MyPage\MyPageController::class, 'index'])->name('my_page');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/', [App\Http\Controllers\HomeController::class, 'store']);
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::get('/resetPassword/{token}', 'Auth\ResetPasswordController@showResetForm');


Route::post('/user/update_password', [App\Http\Controllers\UserController::class, 'update_password'])->name('user.update_password');


Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'showLoginForm'])->name('admin.login');

Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login.submit');

/* High Meme Route */
Route::get('/my/high-meme', [App\Http\Controllers\MySpace\HighMemeController::class, 'index'])->name('my_space.high_meme.index');
Route::get('/my/high-meme/upload', [App\Http\Controllers\MySpace\HighMemeController::class, 'create'])->name('my_space.high_meme.create');
Route::post('/my/high-meme/upload', [App\Http\Controllers\MySpace\HighMemeController::class, 'store'])->name('my_space.high_meme.store');

Route::get('/my/high-meme/edit/{high_meme}', [App\Http\Controllers\MySpace\HighMemeController::class, 'edit'])->name('my_space.high_meme.edit');
Route::post('/my/high-meme/update/{high_meme}', [App\Http\Controllers\MySpace\HighMemeController::class, 'update'])->name('my_space.high_meme.update');

Route::delete('/my/high-meme/{high_meme}', [App\Http\Controllers\MySpace\HighMemeController::class, 'destroy'])->name('my_space.high_meme.destory');

/* Normal Meme Route */
Route::get('/my/normal-meme', [App\Http\Controllers\MySpace\NormalMemeController::class, 'index'])->name('my_space.normal_meme.index');
Route::get('/my/normal-meme/upload', [App\Http\Controllers\MySpace\NormalMemeController::class, 'create'])->name('my_space.normal_meme.create');
Route::post('/my/normal-meme/upload', [App\Http\Controllers\MySpace\NormalMemeController::class, 'store'])->name('my_space.normal_meme.store');

Route::get('/my/normal-meme/edit/{normal_meme}', [App\Http\Controllers\MySpace\NormalMemeController::class, 'edit'])->name('my_space.normal_meme.edit');
Route::post('/my/normal-meme/update/{normal_meme}', [App\Http\Controllers\MySpace\NormalMemeController::class, 'update'])->name('my_space.normal_meme.update');

Route::delete('/my/normal-meme/{normal_meme}', [App\Http\Controllers\MySpace\NormalMemeController::class, 'destroy'])->name('my_space.normal_meme.destory');
