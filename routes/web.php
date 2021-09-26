<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
Use App\Models\Category;
Use App\Models\Post;
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
Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::get('/', function () {
    $category = Category::all();
    $latestposts = Post::latest('created_at')->paginate(3);
    return view('home',compact('category','latestposts'));
})->name('home');

//Home
Route::get('/privacypolicy',[PublicController::class,'privacy'])->name('privacypolicy');
Route::get('/contact',[PublicController::class,'contact'])->name('contact');
Route::get('/about',[PublicController::class,'about'])->name('about');

//Home category select
Route::get('category/{id}',[PublicController::class,'ViewCategory']);
Route::get('post/{id}',[PublicController::class,'ViewPost']);

//Admin 
Route::get('admin/profile',[HomeController::class,'Adminprofile'])->name('admin.profile');
Route::get('admin/logout',[HomeController::class,'Logout'])->name('admin.logout');

//Admin Category
Route::get('admin/category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('admin/category/add',[CategoryController::class,'AddCat'])->name('add.category');
Route::get('admin/category/edit/{id}',[CategoryController::class,'EditCat']);
Route::post('admin/category/update/{id}',[CategoryController::class,'UpdateCat']);
Route::get('admin/category/delete/{id}',[CategoryController::class,'CategoryDelete']);

//Admin Contact
Route::get('admin/contact/all',[HomeController::class,'AdminContact'])->name('all.contact');
Route::get('admin/addcontact',[HomeController::class,'AdminAddContact'])->name('add.contact');
Route::post('admin/storecontact',[HomeController::class,'StoreContact'])->name('store.contact');
route::get('admin/contact/delete/{id}',[HomeController::class,'DeleteContact']);
route::get('admin/contact/edit/{id}',[HomeController::class,'EditContact']);
Route::post('admin/contact/update/{id}',[HomeController::class,'UpdateContact']);

//Admin Contact Messages
Route::get('admin/contactmessages',[HomeController::class,'getmessages'])->name('show.messages');
Route::get('admin/contactmessages/delete/{id}',[HomeController::class,'deletemessages']);

//Contact Form  
Route::post('contactform',[PublicController::class,'ContactForm'])->name('contactform');


//Admin Slider Routes
Route::get('admin/slider/all',[HomeController::class,'HomeSlider'])->name('all.slider');
Route::get('add/slider/add',[HomeController::class,'addSlider'])->name('add.slider');
Route::post('store/slider',[HomeController::class,'storeSlider'])->name('store.slider');
Route::get('admin/slider/delete/{id}',[HomeController::class,'deleteSlider'])->name('delete.slider');
route::get('admin/slider/edit/{id}',[HomeController::class,'EditeSlider'])->name('edit.slider');
Route::post('admin/slider/update/{id}',[HomeController::class,'updateSlider']);


//Post Routes
// Route::get('admin/posts',[PostController::class,'index'])->name('all.post');
Route::get('admin/articles',[PostController::class,'AllArticle'])->name('all.article');
Route::get('admin/hackerrank',[PostController::class,'AllHackeRank'])->name('all.hackerank');
Route::get('admin/codesnippet',[PostController::class,'AllCodeSnippet'])->name('all.codechef');
Route::get('admin/posts/add',[PostController::class,'AddPost'])->name('add.post');
Route::post('admin/post/store',[PostController::class,'StorePost'])->name('store.post');
Route::get('admin/post/delete/{id}',[PostController::class,'DeletePost']);
Route::get('admin/post/edit/{id}',[PostController::class,'EditPost']);
Route::post('admin/post/update/{id}',[PostController::class,'UpdatePost'])->name('update.post');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
 
});


