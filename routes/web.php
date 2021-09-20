<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
Use App\Models\Category;
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
    $category = Category::all();
    return view('home',compact('category'));
})->name('home');

//Home
Route::get('/privacypolicy',[HomeController::class,'privacy'])->name('privacypolicy');
Route::get('/contact',[HomeController::class,'contact']);

//Category
Route::get('admin/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('admin/category/add',[CategoryController::class,'AddCat'])->name('add.category');
Route::get('admin/category/edit/{id}',[CategoryController::class,'EditCat']);
Route::post('admin/category/update/{id}',[CategoryController::class,'UpdateCat']);
Route::get('admin/category/delete/{id}',[CategoryController::class,'CategoryDelete']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
