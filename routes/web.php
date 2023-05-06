<?php

use App\Http\Controllers\dashboard\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\DashboardAuthController;
use App\Http\Controllers\dashboard\PermissionController;
use App\Http\Controllers\dashboard\RoleController;
use App\Http\Controllers\dashboard\UserController;

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
})->name('local');

Route::middleware('guest:admin')->prefix('dashboard')->group(function () {

    Route::get('/login', [DashboardAuthController::class, 'create'])->name('dashboard.showLogin');
    Route::post('/login', [DashboardAuthController::class, 'login'])->name('dashboard.login');
});

Route::middleware('auth:admin')->prefix('dashboard')->group(function () {

    Route::view('/', 'index')->name('dashboard.home');
    Route::get('/logout', [DashboardAuthController::class, 'logout'])->name('dashboard.logout');

    // Admin Controllers

    Route::resource('admins', AdminController::class)->except(['create','edit']);
    Route::match(['put', 'patch'],'admins/{admin}/restore/',[AdminController::class,'restore'])->name('admins.restore');
    Route::match(['post'],'admins/{admin}/avatar', [AdminController::class, 'updateAvatar'])->name('admins.avatar.update');
    Route::match(['put', 'patch'],'admins/{admin}/email', [AdminController::class, 'emailUpdate'])->name('admins.email.update');
    Route::match(['put', 'patch'],'admins/{admin}/password', [AdminController::class, 'passwordUpdate'])->name('admins.password.update');
    Route::match(['put', 'patch'],'admins/{admin}/role', [AdminController::class, 'roleUpdate'])->name('admins.role.update');
    Route::delete('delete-all/admins/', [AdminController::class,'deleteall'])->name('admins.deleteall');

    // User Controllers

    Route::resource('users', UserController::class)->except(['create','edit']);
    Route::match(['put', 'patch'],'users/{user}/restore/',[UserController::class,'restore'])->name('users.restore');
    Route::match(['post'],'users/{user}/avatar', [UserController::class, 'updateAvatar'])->name('users.avatar.update');
    Route::match(['put', 'patch'],'users/{user}/email', [UserController::class, 'emailUpdate'])->name('users.email.update');
    Route::match(['put', 'patch'],'users/{user}/password', [UserController::class, 'passwordUpdate'])->name('users.password.update');
    Route::match(['put', 'patch'],'users/{user}/role', [UserController::class, 'roleUpdate'])->name('users.role.update');
    Route::delete('delete-all/users/', [UserController::class,'deleteall'])->name('users.deleteall');

    //Spatie Controllers
    Route::resource('roles', RoleController::class)->except(['create','edit']);
    Route::delete('roles/revoke/{role}/{admin}', [RoleController::class,'revokeRole'])->name('roles.revoke');
    Route::delete('roles/revoke-many/{role}', [RoleController::class,'revokeMany'])->name('roles.revokeMany');

    Route::resource('permissions', PermissionController::class)->except(['create','show','edit']);

});
