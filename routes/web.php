<?php

use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Period;

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

Route::get('/', function () {
    return view('index');
});
// Route::get('/blog', function () {
//     return view('blog');
// });
// Route::get('/read', function () {
//     return view('read');
// });
Route::get('/admin', function () {
    return view('auth/login');
});

Route::get('/analytics', function () {

    $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
    return view('analytics', ['analyticsData' => $analyticsData]);
});

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
Route::get('read/{id}',[App\Http\Controllers\BlogController::class, 'read'])->name('project.read');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addblog', [App\Http\Controllers\HomeController::class, 'addblog'])->name('addblog');
Route::post('/insert', [App\Http\Controllers\HomeController::class, 'insert'])->name('insert');
Route::get('emp/listing', [App\Http\Controllers\HomeController::class, 'getEmployees'])->name('emp.listing');
Route::get('edit/{id}',[App\Http\Controllers\HomeController::class, 'edit'])->name('project.edit');
Route::post('/update',[App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('delete/{id}',[App\Http\Controllers\HomeController::class, 'delete'])->name('project.delete');


