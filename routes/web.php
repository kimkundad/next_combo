<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\MyUserController;

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

Route::get('/images/{file}', function ($file) {
	$url = Storage::disk('do_spaces')->temporaryUrl(
	  $file,
	  date('Y-m-d H:i:s', strtotime("+5 min"))
	);
	if ($url) {
	   return Redirect::to($url);
	}
	return abort(404);
  })->where('file', '.+');

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome']);

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/service', [App\Http\Controllers\HomeController::class, 'service']);

Route::get('/create_account', [App\Http\Controllers\HomeController::class, 'create_account']);


Route::post('/create_new_user', [App\Http\Controllers\HomeController::class, 'create_new_user']);


Route::get('/test', function () {
    return view('emails.password');
});

Route::group(['middleware' => ['UserRole:superadmin|admin|user']], function() {

    Route::post('/post_open_ticket', [App\Http\Controllers\HomeController::class, 'post_open_ticket']);
    Route::post('/post_close_ticket', [App\Http\Controllers\HomeController::class, 'post_close_ticket']);
    Route::post('/post_add_ticket', [App\Http\Controllers\HomeController::class, 'post_add_ticket']);
    Route::post('/post_change_newpass', [App\Http\Controllers\HomeController::class, 'post_change_newpass']);

    Route::post('/post_servey_before', [App\Http\Controllers\HomeController::class, 'post_servey_before']);
    Route::post('/post_servey_after', [App\Http\Controllers\HomeController::class, 'post_servey_after']);

    Route::get('/create_complete', function () {
        return view('create_complete');
    });

    Route::get('/create_complete2', function () {
        return view('create_complete2');
    });

    Route::get('/video', function () {
        return view('video');
    });

    Route::post('/create_user_profile', [App\Http\Controllers\HomeController::class, 'create_user_profile']);
    Route::post('/create_user_profile2', [App\Http\Controllers\HomeController::class, 'create_user_profile2']);


    Route::get('/api/api_post_case', [App\Http\Controllers\HomeController::class, 'api_post_case']);
    Route::get('/create_account2', [App\Http\Controllers\HomeController::class, 'create_account2']);

    Route::get('/account_setting', [App\Http\Controllers\HomeController::class, 'account_setting']);

    Route::get('/case_list_seaarch', [App\Http\Controllers\HomeController::class, 'case_list_seaarch']);

    Route::get('/case_list', [App\Http\Controllers\HomeController::class, 'case_list']);

    Route::get('/open_ticket', function () {
        return view('open_ticket');
    });

    Route::get('/detail_ticket/{id}', [App\Http\Controllers\HomeController::class, 'detail_ticket']);

    Route::get('/close_ticket/{id}', [App\Http\Controllers\HomeController::class, 'close_ticket']);

    Route::get('/add_ticket/{id}', [App\Http\Controllers\HomeController::class, 'add_ticket']);

    Route::get('/servey_after/{id}', [App\Http\Controllers\HomeController::class, 'servey_after']);

    Route::get('/servey_before/{id}', [App\Http\Controllers\HomeController::class, 'servey_before']);

    Route::get('/servey_success', function () {
        return view('success_1');
    });
    Route::get('/servey_success2', function () {
        return view('success_2');
    });

});


Route::group(['middleware' => ['UserRole:superadmin|admin']], function() {

    Route::get('export/csv', [App\Http\Controllers\DashboardController::class, 'exportCSVFile'])->name('export.csv');

    Route::get('export/userx', [App\Http\Controllers\DashboardController::class, 'userx'])->name('userx.csv');

    Route::get('/admin/case', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('admin/sace_search/', [App\Http\Controllers\DashboardController::class, 'sace_search']);

    Route::get('api/modal-data/{id}', [App\Http\Controllers\DashboardController::class, 'getData']);

    Route::resource('/admin/MyUser', MyUserController::class);
    Route::post('/api/api_post_status_MyUser', [App\Http\Controllers\MyUserController::class, 'api_post_status_MyUser']);
    Route::get('api/del_MyUser/{id}', [App\Http\Controllers\MyUserController::class, 'del_MyUser']);

});
