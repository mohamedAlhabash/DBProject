<?php

//use App\Http\Controllers\homePageController;
//use App\Http\Controllers\profileController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DBController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\project;
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
// Route::prefix('project')->group(function(){
//   Route::get('/home',[project::class,'home'])->name('home');
//   Route::get('/page1',[project::class,'page1'])->name('page1');
//   Route::get('/page2',[project::class,'page2'])->name('page2');
// });




Route::get('posts',[DBController::class,'index']);
Route::delete('posts/delete/{id}',[DBController::class,'delete'])->name('delete');
Route::get('posts/add',[DBController::class,'add'])->name('add');
Route::post('posts/add',[DBController::class,'store'])->name('posts.add');
Route::get('posts/{id}/edit',[DBController::class,'edit'])->name('edit');
Route::put('posts/{id}/edit',[DBController::class,'update'])->name('posts.update');

Route::resource('category', CategoryController::class);





// Route::get('/home',[pageController::class,'home'])-> name('homePage');
// Route::get('/about',[pageController::class,'about'])->name('aboutPage');
// Route::get('/contact',[pageController::class,'contact'])->name('contactPage');
// Route::get('/services',[pageController::class,'servcies'])->name('servicesPage');
// Route::get('/team',[pageController::class,'team'])->name('teamPage');





//Route::get('/',[profileController::class,'home']) ;

//Route::get('/blog',[homePageController::class,'greeting']);

// Route::get('/', function () {
//     return view('welcome');
// });
/*Route::get('/blog', function () {
    return 'Blog Page';
});


Route::get('/blog/{name}', function ($name) {
    return 'the name is '.$name;
});*/


