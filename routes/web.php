<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogDetail/{id}', [HomeController::class, 'detailBlog'])->name('blog.detail');
Route::post('/newComment', [CommentController::class, 'newComment'])->name('newComment');

//// ADMIN DASHBOARD
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  // Route::get('/dashboard', function () {return view('dashboard'); })->name('dashboard');
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::get('/dashboard/addMember', [MemberController::class, 'addMember'])->name('addMember');
   Route::get('/dashboard/manageMember', [MemberController::class, 'manageMember'])->name('manageMember');
   Route::post('/dashboard/newMember', [MemberController::class, 'newMemberStore'])->name('new.member.store');

   //Blog
    Route::get('/addBlog', [BlogController::class, 'index'])->name('add.blog');
    Route::get('/manageBlog', [BlogController::class, 'manage'])->name('manage.blog');
    Route::post('/newBlog', [BlogController::class, 'newBlog'])->name('new.blog');

    //comment
    Route::get('/manageComment', [CommentController::class, 'manage'])->name('manage.comment');
});
