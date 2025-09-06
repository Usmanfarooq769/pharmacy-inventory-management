<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductOutController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SystemUserController;
use App\Http\Controllers\ProfileController;



Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/', function () {
    return redirect()->route('login');
});




// user 
// Route::get('profile', function () {
//     return view('profile');
// })->name('profile');

Route::get('mail-settings', function () {
    return view('mail-settings');
})->name('mail-settings');


Route::get('mail', function () {
    return view('mail');
})->name('mail');

// Route::middleware(['auth','role:admin'])->group(function () {
    // Roles
    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/data', [RoleController::class, 'getData'])->name('roles.data');
    Route::post('roles/store', [RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::delete('roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
   Route::get('permissions/data', [PermissionController::class, 'getData'])->name('permissions.data');
   Route::resource('permissions', PermissionController::class)->except(['create', 'edit', 'show']);
    // Users & assign role
    Route::get('system-users', [SystemUserController::class, 'index'])->name('users.index');
    Route::get('system-users/data', [SystemUserController::class, 'getData'])->name('users.data');
   Route::post('system-users/store', [SystemUserController::class, 'store'])->name('users.store');
Route::get('system-users/{id}/edit', [SystemUserController::class, 'edit'])->name('users.edit');
Route::delete('system-users/{id}', [SystemUserController::class, 'destroy'])->name('users.destroy');

//




Route::group(['middleware' => 'auth'], function () {
	Route::resource('categories', CategoryController::class);
    Route::get('/categories/api', [CategoryController::class, 'apiCategories'])->name('categories.api');
	Route::post('/importCustomers',  [CustomerController::class, 'ImportExcel'])->name('import.customers');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/customers/data', [CustomerController::class, 'getData'])->name('customers.data');
    Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
	Route::post('/importSales', 'SaleController@ImportExcel')->name('import.sales');
    Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
    Route::get('/sales/data', [SaleController::class, 'getData'])->name('sales.data');
    Route::post('/sales/store', [SaleController::class, 'store'])->name('sales.store');
    Route::get('/sales/edit/{id}', [SaleController::class, 'edit'])->name('sales.edit');
    Route::delete('/sales/delete/{id}', [SaleController::class, 'destroy'])->name('sales.destroy');
	Route::post('/importSuppliers', [SupplierController::class, 'ImportExcel'])->name('import.suppliers');
    Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
    Route::get('/suppliers/data', [SupplierController::class, 'data'])->name('api.suppliers');
    Route::post('/suppliers/store', [SupplierController::class, 'store'])->name('suppliers.store');
    Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
    Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

	Route::resource('products', ProductController::class); 
	Route::get('/apiProducts', [ProductController::class, 'apiProducts'])->name('api.products');
    
    Route::get('/product-out', [ProductOutController::class, 'index'])->name('productsOut.index');
    Route::get('/product-out/data', [ProductOutController::class, 'getData'])->name('product_out.data');
    Route::post('/product-out/store', [ProductOutController::class, 'store'])->name('product_out.store');
    Route::get('/product-out/{id}/edit', [ProductOutController::class, 'edit'])->name('product_out.edit');
    Route::delete('/product-outr/{id}', [ProductOutController::class, 'destroy'])->name('product_out.destroy');
    Route::get('/invoice/data', [ProductOutController::class, 'data'])->name('invoice.data');


	// Route::resource('productsIn', ProductInController::class);

     Route::get('/products-in', [ProductInController::class, 'index'])->name('productsIn.index');
    Route::get('/product-in/data', [ProductInController::class, 'getData'])->name('product_in.data');
    Route::get('/product-in/invoice-data', [ProductInController::class, 'invoiceData'])->name('product_in.invoiceData');
    Route::post('/product-in/store', [ProductInController::class, 'store'])->name('product_in.store');
    Route::get('/product-in/{id}/edit', [ProductInController::class, 'edit'])->name('product_in.edit');
    Route::delete('/product-in/{id}', [ProductInController::class, 'destroy'])->name('product_in.destroy');


	Route::resource('user', UserController::class);
	Route::get('/apiUser', 'UserController@apiUsers')->name('api.users');
});