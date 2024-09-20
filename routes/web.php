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
    return view('front.index');
})->name('home');
Route::get('/about', function () {
    return view('front.about');
})->name('about');
Route::get('/blog', function () {
    return view('front.blog');
})->name('blog');
Route::get('/services', function () {
    return view('front.services');
})->name('services');
Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

//Route::prefix('front')->group(function () {
//    Route::get('/','index');
//});


Route::prefix('admin')->name("admin.")->group(function () {
    Route::get('/', AdminHomeController::class)->name("home");
    Route::controller(TeacherController::class)->name("teacher.")->group(function () {
        Route::get('/teacher', 'index')->name('index');
        Route::get('/teacher/create', 'create')->name('create');
        Route::get('/teacher/{id}', 'show')->where([" id "=>" [0-9]+ "])->name('show');
        Route::post('/teacher/store', 'store')->name('store');
        Route::get('/teacher/edit/{id}', 'edit')->where([" id "=>" [0-9]+ "])->name('edit');
        Route::put('/teacher/{id}', 'update')->name('update');            
        Route::delete('teacher/{id}', 'destroy')->name('destroy');
    });


    Route::controller(StudentController::class)->name("student.")->group(function () {
        Route::get('/student', 'index')->name('index');
        Route::get('/student/{id}', 'show')->where([" id "=>" [0-9]+ "])->name('show');
        Route::delete('student/{id}', 'destroy')->name('destroy');
        Route::get('/student/edit/{id}', 'edit')->where([" id "=>" [0-9]+ "])->name('edit');
        Route::put('/student/{id}', 'update')->name('update');            
    
    });


    Route::controller(CourseController::class)->name("course.")->group(function () {
        Route::get('/course', 'index')->name('index');
        Route::get('/course/create', 'create')->name('create');
        Route::post('/course/store', 'store')->name('store');
        Route::get('/course/{id}', 'show')->where([" id "=>" [0-9]+ "])->name('show');
        Route::delete('course/{id}', 'destroy')->name('destroy');
        Route::get('/course/edit/{id}', 'edit')->where([" id "=>" [0-9]+ "])->name('edit');
        //if data is validated do that Route
        Route::put('/course/{id}', 'update')->name('update');

    });
});
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'save'])->name('auth.login');

//-----------------start of register----------------
Route::group(['prefix'=>'/auth'],function(){
    Route::get('/register',[RegisterController::class,'index'])->name('register');
    Route::post('/register',[RegisterController::class,'save'])
        ->name('auth.register');
});
//-----------------end of register----------------
Route::get('/logout',[LogoutController::class,'logout_system']);
Route::get('/profile', function () {
    return view('auth.profile');
})->name('profile');

// Route::get('/services', action: [CourseController::class, 'showcources'])->name('services');
