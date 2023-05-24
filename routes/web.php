<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpenAiController;


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

Route::get('/', function () {
    return view('welcome');
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/chat', [OpenAiController::class, 'chat'])->name('openai.chat');
    Route::get('/image', [OpenAiController::class, 'image'])->name('openai.image');
    Route::get('/example', [OpenAiController::class, 'example'])->name('openai.example');
    Route::get('/dashboard',  function () {
        return view(
            'openai.dashboard'
        );
    })->name('dashboard');
});

require __DIR__ . '/auth.php';
