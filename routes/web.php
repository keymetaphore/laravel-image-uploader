<?php

use Illuminate\Support\Facades\Auth;
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
    if (Auth::check()) {
        return redirect('start');
    }

    return redirect('login');
});

Route::get('/start', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/image/{unique}', 'App\Http\Controllers\ImageController@view')->name('file.view');
Route::get('/gallery', 'App\Http\Controllers\ImageController@gallery')->middleware(['auth'])->name('gallery');
Route::get('/settings', 'App\Http\Controllers\SettingsController@view')->middleware(['auth'])->name('settings');
require __DIR__.'/auth.php';

Route::post('file-upload', 'App\Http\Controllers\UploadController@upload')->name('file.upload.post');
