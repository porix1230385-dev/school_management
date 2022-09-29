<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuperAdmin\SchoolController;
use App\Http\Controllers\SuperAdmin\SettingController;
use App\Http\Controllers\SupportTeam\PaymentController;
use App\Http\Controllers\SupportTeam\StudentRecordController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Auth::routes();

// Route::get('/', [LoginController::class, 'index'])->name('welcome');

// Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/', [LoginController::class, 'login'])->name('login');
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route::view('/test/timetable', 'timetable');
// Route::get('/privacy-policy', 'HomeController@privacy_policy')->name('privacy_policy');
// Route::get('/terms-of-use', 'HomeController@terms_of_use')->name('terms_of_use');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');
    // Route::get('/dashboard', [HomeController::class,'dashboard'])->name('home');
    // Route::get('/dashboard', [HomeController::class,'dashboard'])->name('home');
    // Route::get('/home', [HomeController::class,'dashboard'])->name('home');
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
    // Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    // Route::get('/dashboard/{locale}', 'HomeController@dashboard')->name('lang.set');

    // Route::group(['prefix' => 'my_account'], function () {
    //     Route::get('/', 'MyAccountController@edit_profile')->name('my_account');
    //     Route::put('/', 'MyAccountController@update_profile')->name('my_account.update');
    //     Route::put('/change_password', 'MyAccountController@change_pass')->name('my_account.change_pass');
    // });

//       /*************** Users *****************/
//   Route::group(['prefix' => 'users'], function () {
//     Route::get('reset_pass/{id}', 'UserController@reset_pass')->name('users.reset_pass');
//     });

/*************** Payments *****************/
    Route::group(['prefix' => 'payments'],function(){
        Route::get('/{student_id}', [PaymentController::class,'getViewInscription'])->name('payments.getView');
        Route::post('/inscription',[PaymentController::class,'store'])->name('payments.store');

    });
    Route::resource('students',StudentRecordController::class);
    // Route::resource('users', 'UserController');
    // Route::resource('classes', 'MyClassController');
    // Route::resource('sections', 'SectionController');
    // Route::resource('subjects', 'SubjectController');
    // Route::resource('grades', 'GradeController');
    // Route::resource('exams', 'ExamController');
    // Route::resource('dorms', 'DormController');
    // Route::resource('payments', [App\Http\Controllers\SupportTeam\PaymentController::class]);

    // Route::get('students/add',[StudentController::class,'add'])
    // username = c1884357c_folo, mdp school_management

    /** helpController**/
    Route::get('get_classes', [HelpController::class,'get_classes'])->name('get_classes');

    Route::get('get_sco_info',[HelpController::class,'get_sco_info'])->name('get_sco_info');

});

/************************ SUPER ADMIN ****************************///'namespace' => 'SuperAdmin',
Route::group(['middleware' => 'super_admin', 'prefix' => 'super_admin'], function () {
  
    // Route::get('/school' , [SchoolController::class,'create'])->name('school.create');
    // Route::get('/school' , [SchoolController::class,'index'])->name('school.index');
    Route::get('/settings', [SettingController::class,'index'])->name('settings');
    Route::post('/settings/add', [SettingController::class,'store'])->name('settings.store');
    Route::put('/settings', [SettingController::class,'update'])->name('settings.update');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
