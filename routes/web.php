<?php

use App\Livewire\AboutUs;
use App\Livewire\ContactUs;
use App\Livewire\Home;
use App\Livewire\MadeToMeasure;
use App\Livewire\OurMission;
use App\Livewire\OrderProcess;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', Home::class)->name('home');
Route::get('/about', AboutUs::class)->name('about');
Route::get('/made-to-measure', MadeToMeasure::class)->name('made-to-measure');
Route::get('/contact', ContactUs::class)->name('contact');


Route::get('/mission', OurMission::class)->name('mission');
Route::get('/how-we-work', OrderProcess::class)->name('order-process');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
