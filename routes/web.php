<?php
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->name("admin.")->group(function () {
    Route::get('/', AdminHomeController::class)->name("home");
    Route::controller(TeacherController::class)->name("teacher.")->group(function () {
        Route::get('/teacher', 'index')->name('index');
        Route::get('/teacher/create', 'create')->name('create');
        Route::get('/teacher/{id}', 'show')->where([" id "=>" [0-9]+ "])->name('show');
        Route::post('/teacher/store', 'store')->name('store');
    });


    Route::controller(StudentController::class)->name("student.")->group(function () {
        Route::get('/student', 'index')->name('index');
        Route::get('/student/{id}', 'show')->where([" id "=>" [0-9]+ "])->name('show');
    });


    Route::controller(CourseController::class)->name("course.")->group(function () {
        Route::get('/course', 'index')->name('index');
        Route::get('/course/create', 'create')->name('create');
        Route::post('/course/store', 'store')->name('store');
        Route::get('/course/{id}', 'show')->where([" id "=>" [0-9]+ "])->name('show');
    });
});
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'save'])->name('auth.login');
//-----------------start of register----------------
Route::group(['prefix'=>'/auth'],function(){
    Route::get('/register',[RegisterController::class,'index']);
    Route::post('/register',[RegisterController::class,'save'])
        ->name('auth.register');
});
//-----------------end of register----------------
Route::get('/logout',[LogoutController::class,'logout_system']);
