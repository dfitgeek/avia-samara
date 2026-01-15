<?php

use App\Livewire\AdminRegister;
use App\Livewire\AllCategory;
use App\Livewire\AvailableProducts;
use App\Livewire\CreateProduct;
use App\Livewire\Dashboard;
use App\Livewire\EditProduct;
use App\Livewire\Home;
use App\Livewire\Shop;
use App\Livewire\Shoes;
use App\Livewire\AboutUs;
use App\Livewire\ContactUs;
use App\Livewire\AdminLogin;
use App\Livewire\Alteration;
use App\Livewire\OurMission;
use App\Livewire\Accessories;
use App\Livewire\ReadyToWear;
use App\Livewire\StreetUrban;
use App\Livewire\CustomDesign;
use App\Livewire\OrderProcess;
use App\Livewire\MadeToMeasure;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', Home::class)->name('home');
Route::get('/about', AboutUs::class)->name('about');
Route::get('/made-to-measure', MadeToMeasure::class)->name('made-to-measure');

Route::get('/contact', ContactUs::class)->name('contact');

Route::get('/shop', AllCategory::class)->name('shop');

Route::get('/shop/custom-design', CustomDesign::class)->name('custom-design');

Route::get('/shop/trending', StreetUrban::class)->name('street-urban');

Route::get('/shop/ready-to-wear', ReadyToWear::class)->name('ready-to-wear');

Route::get('/shop/shoes', Shoes::class)->name('shoes');

Route::get('/shop/alteration', Alteration::class)->name('alteration');

Route::get('/shop/accessories', Accessories::class)->name('accessories');


Route::get('/mission', OurMission::class)->name('mission');
Route::get('/how-we-work', OrderProcess::class)->name('order-process');


// Admin Route Endpoint
Route::get('/admin/login', AdminLogin::class)->name('admin.login');

Route::get('/admin/register', AdminRegister::class)->name('admin.register');


Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/admin/products', AvailableProducts::class)->name('admin.products');

    Route::get('/admin/product/{id}/edit', action: EditProduct::class)->name('edit-product');

    Route::get('/admin/product/create', CreateProduct::class)->name('create-product');

    Route::get('/admin/app-configuration', App\Livewire\AppConfiguration::class)->name('app.settings');

    Route::get('/admin/orders', App\Livewire\CustomerOrders::class)->name('admin.orders');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
