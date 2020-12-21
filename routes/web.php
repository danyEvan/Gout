<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeleteBookingController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\profile2Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\ShopController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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


Route::get('/', [searchController::class, 'index'])->name('index');
Route::get('/list', [searchController::class, 'Result'])->name('search.negocio');
Route::get('/profile/{id}', [ ProfileController::class, 'Profile'])->name('profile.profile');

Route::resource('search', searchController::class)->middleware('auth');
Route::resource('booking', BookingController::class)->middleware('auth');
Route::resource('Customer', CustomerController::class)->middleware('auth');
Route::resource('menu', MenuController::class)->middleware('auth');
Route::resource('Shop', ShopController::class)->middleware('auth');
Route::resource('history', HistoryController::class)->only(['index','show', 'destroy'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::view('home', 'home')->name('home');
});

/*
Route::get('/ver', function () {
    User::find(1)->assignRole('commerce');
    User::find(2)->assignRole('client');
    
    });
Route::get('/create', function () {
    Role::create([ 'name'=> 'customer']);
    Role::create([ 'name'=> 'commerce']);
    Permission::create(['name'=> 'make bookings']);
    Permission::create(['name'=> 'take bookings']);
    return "se logro";
});

Route::get('/ver', function () {
Role::find(1)->givePermissionTo(Permission::find(1));
Role::find(2)->givePermissionTo(Permission::find(2));
dd(Role::find(1)->permissions, Role::find(2)->permissions);
});
*/