<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Employee\ActionController;
use App\Http\Controllers\Employee\CustomerController;

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

Route::get('login',[DashboardController::class,'login'])->name('login');;
Route::post('login/post',[DashboardController::class,'postLogin'])->name('post.login');
Route::get('logout',[DashboardController::class,'logout'])->name('logout');
Route::group(['middleware' => ['auth', 'admin']], function () {
Route::get('admin',[DashboardController::class,'index'])->name('admin');
Route::get('employee',[AdminController::class,'employee'])->name('employee');
Route::post('store/emplyee',[AdminController::class,'storeEmployee'])->name('store.crm.employee');
Route::get('customers',[AdminController::class,'customers'])->name('customers');
Route::post('store/customers',[AdminController::class,'storeCustomers'])->name('store.crm.customers');
});
// Employee Routes
Route::group(['middleware' => ['auth', 'employee']], function () {
    Route::resource('emp-customers', CustomerController::class);
    Route::post('store/customers',[AdminController::class,'storeCustomers'])->name('store.crm.customers');
    Route::post('actions', [ActionController::class,'store'])->name('actions.store');
});