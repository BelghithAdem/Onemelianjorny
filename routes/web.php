<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PartnerController;
use App\Models\Partner; // Ensure you have a Partner model
use App\Models\Roles; // Ensure you have a Partner model
use App\Http\Controllers\ContactController;



use App\Models\Product;
use Illuminate\Http\Request;  // Make sure to import the Request class




Route::get('/users', function () {
    return view('dashboard.users');
})->middleware(['auth', 'verified'])->name('users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::resource('productDashboard', ProductController::class);

Route::resource('requests', RequestController::class);

Route::resource('roles', RolesController::class);

Route::resource('users', UsersController::class);

Route::resource('parthner', PartnerController::class);
Route::resource('contact', ContactController::class);
});



Route::get('/', function (Request $request) {
    $products = Product::paginate(3); // Retrieves 3 products per page
    $partners =Partner::all();
    return view('landing',compact("products","partners"));
});
Route::get('/dashboard', function (Request $request) {
    $query = Roles::query();

    if ($request->search) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    $roles = $query->paginate(10);

    return view('dashboard.roles', compact('roles'));

});

Route::get('/about-us', function () {
    return view('aboutUs');
});
Route::get('/contact-us', function () {
    return view('contactUs');
});
Route::get('/products', function (Request $request) {
    $query = Product::query();

    if ($request->search) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    $products = $query->paginate(10);
    return view('product', compact('products'));
});
Route::get('/demande-avis', function (Request $request) {
    $products = Product::all();
    return view('requestAvis',compact("products"));
});


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');






require __DIR__.'/auth.php';
