<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Courses;
use App\Models\User;
use Database\Factories\CoursesFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('Home');
Route::get('/MainCoursesGuest', [HomeController::class,'index2'])->defaults('name', null)->name('MainCoursesGuest');
Route::get('/MasterCoursesGuest', [HomeController::class,'index3'])->defaults('name', null)->name('MasterCoursesGuest');
Route::get('/Info', [HomeController::class,'index4'])->defaults('name', null)->name('Policy');
Route::get('/Courses/{courseName}/showbyname', [CoursesController::class,'showByname'])->name('showByname');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/Courses/show', [CoursesController::class,'Show'])->name('show');
    Route::delete('/Courses/{id}', [CoursesController::class,'destroy'])->name('destroy');
    Route::put('/Courses/{id}/active', [CoursesController::class,'active'])->name('active');
    Route::put('/users/{id}', [UserController::class,'update']);
    //Route::post('/user', [UserController::class,'store'])->name('newuser');
    Route::delete('/users', [UserController::class,'destroy'])->name('deleteuser');
    Route::delete('/user/{id}/Courses', [UserController::class,'deleteAllCourses'])->name('deleteuserCourses');
    Route::resource('Courses',CoursesController::class)->name('index','Courses')->except(['show','delete'])->name('edit','CourseEdit');
    Route::resource('/users',UserController::class)->name('index','Users')->except(['update','delete']);

    Route::get('/dashboard', function () {
        $users = User::all();
         $Acourse = Courses::where('State',1)->get();
         $Ecourse = Courses::where('State',0)->get();
        $chartData = [
            'labels' => ['Users', 'Active Courses','UnActive Courses'],
            'datasets' => [
                [
                    'label' => 'Number of users and Courses',
                    'backgroundColor' => ['#ff6384', '#36a2eb','#ff0000'],
                    'data' => [Count($users), Count($Acourse),Count($Ecourse)]
                ]
            ]
        ];
        return view('dashboard',[
           'ACourses' => $Acourse,
           'UnCourses' => $Ecourse,
           'Users' => $users,
           'chartData' => $chartData,
        ]);
    })->middleware(['auth', 'verified'])->name('dashboard');
});

require __DIR__.'/auth.php';
