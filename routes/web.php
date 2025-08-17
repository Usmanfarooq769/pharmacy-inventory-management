<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMasukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductKeluarController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleUserController;





Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
});

// user 
Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('mail-settings', function () {
    return view('mail-settings');
})->name('mail-settings');


Route::get('sign-in-cover', function () {
    return view('sign-in-cover');
})->name('sign-in-cover');


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


    // Permissions (optional page)
   Route::get('permissions/data', [PermissionController::class, 'getData'])->name('permissions.data');
   Route::resource('permissions', PermissionController::class)->except(['create', 'edit', 'show']);
    // Users & assign role
    Route::get('userrole', [RoleUserController::class, 'index'])->name('users.index');
    Route::get('userrole/data', [RoleUserController::class, 'getData'])->name('users.data');
    Route::get('userrole/{id}/edit-role', [RoleUserController::class, 'editRole'])->name('users.editRole'); // return user + role info
    Route::post('userrole/{id}/assign-role', [RoleUserController::class, 'assignRole'])->name('users.assignRole');
// });

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
    
    Route::get('/product-keluar', [ProductKeluarController::class, 'index'])->name('productsOut.index');
    Route::get('/product-keluar/data', [ProductKeluarController::class, 'getData'])->name('product_keluar.data');
    Route::post('/product-keluar/store', [ProductKeluarController::class, 'store'])->name('product_keluar.store');
    Route::get('/product-keluar/{id}/edit', [ProductKeluarController::class, 'edit'])->name('product_keluar.edit');
    Route::delete('/product-keluar/{id}', [ProductKeluarController::class, 'destroy'])->name('product_keluar.destroy');
    Route::get('/invoice/data', [ProductKeluarController::class, 'data'])->name('invoice.data');


	// Route::resource('productsIn', ProductMasukController::class);

     Route::get('/productsIn', [ProductMasukController::class, 'index'])->name('productsIn.index');
    Route::get('/product-masuk/data', [ProductMasukController::class, 'getData'])->name('product_masuk.data');
    Route::get('/product-masuk/invoice-data', [ProductMasukController::class, 'invoiceData'])->name('product_masuk.invoiceData');
    Route::post('/product-masuk/store', [ProductMasukController::class, 'store'])->name('product_masuk.store');
    Route::get('/product-masuk/{id}/edit', [ProductMasukController::class, 'edit'])->name('product_masuk.edit');
    Route::delete('/product-masuk/{id}', [ProductMasukController::class, 'destroy'])->name('product_masuk.destroy');


	Route::resource('user', UserController::class);
	Route::get('/apiUser', 'UserController@apiUsers')->name('api.users');
});