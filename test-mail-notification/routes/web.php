<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\sendEmailNotificationController;
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

Route::get('/', function () {
    return view('welcome');
});
//send email for user
Route::get('/email', [mailController::class,'index'])->name('email');
Route::get('/sendMail', [mailController::class,'sendMail'])->name('sendMail');


//send emailnotification for user
Route::get('/emailNotification',[sendEmailNotificationController::class,'sendEmailNotification'] )->name('emailNotification');

//pdf generate  for user
Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
