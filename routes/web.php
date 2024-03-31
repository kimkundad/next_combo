<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

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

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/service', [App\Http\Controllers\HomeController::class, 'service']);

Route::get('/create_account', function () {
    return view('create_account');
});

Route::get('/create_account2', [App\Http\Controllers\HomeController::class, 'create_account2']);

Route::get('/account_setting', [App\Http\Controllers\HomeController::class, 'account_setting']);

Route::get('/create_complete', function () {
    return view('create_complete');
});

Route::get('/case_list', function () {
    return view('case_list');
});

Route::get('/open_ticket', function () {
    return view('open_ticket');
});

Route::get('/close_ticket', function () {
    return view('close_ticket');
});

Route::get('/servey_after', function () {
    return view('servey_after');
});

Route::get('/add_ticket', function () {
    return view('add_ticket');
});

Route::get('/servey_before', function () {
    return view('servey_before');
});

Route::get('/servey_success', function () {
    return view('success_1');
});
Route::get('/servey_success2', function () {
    return view('success_2');
});



Route::group(['middleware' => ['UserRole:superadmin|admin']], function() {

    Route::get('/admin/case', [App\Http\Controllers\DashboardController::class, 'index']);

});