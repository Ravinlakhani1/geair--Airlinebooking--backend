<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RazorpayController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/', [HomeController::class, 'index'])->name('web.home');
Route::get('/booking', [HomeController::class, 'booking'])->name('web.booking');
Route::get('{id}/book', [HomeController::class, 'book'])->name('web.book');
Route::get('booked/{token}', [HomeController::class, 'booked'])->name('web.booked');

Route::get('pay', [RazorpayController::class, 'index']);
Route::post('payment', [RazorpayController::class, 'payment'])->name('payment');

Route::get('ticket/{id}', [HomeController::class, 'ticket'])->name('web.ticket');


require __DIR__ . '/auth.php';
