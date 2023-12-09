<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BranchController;
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
    // return view('home');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// route for owner
Route::get('/branch', [BranchController::class, 'show_page'])->name('branch_page');

Route::POST('/add_branch', [BranchController::class, 'add'])->name('add.branch');

Route::get('/branch_list', [BranchController::class, 'list'])->name('branch.list');
Route::get('/user', [BranchController::class, 'user'])->name('user');
Route::POST('/add_user', [BranchController::class, 'add_user'])->name('add_user');
