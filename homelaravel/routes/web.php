<?php

use App\Http\Controllers\AdminController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FeaturedImagesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\DemoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('demo', function(){
//     $users = array(
//         1 => array(
//             'name' => 'Trương Xuân Trường'
//         ),
//         2 => array(
//             'name' => 'Hoàng Anh'
//         ),
//         3 => array(
//             'name' => 'Hoàng'
//         ),
//     );
//     return view('demo', compact('users'));
// });
// // Route::get('users/insert',function(){
// //     DB::table('users')->insert(
// //         ['name' => 'Trần Anh','email' => 'trananh22@gmail.com','password' => bcrypt('truong')]
// //     );
// // });
// Route::get('posts/add',[PostController::class, 'add']);
// Route::get('posts/show',[PostController::class,'show']);
// Route::get('posts/update/{id}',[PostController::class,'update']);
// Route::get('posts/delete/{id}',[PostController::class,'delete']);

// Route::get('admin/product/add',[AdminController::class,'add']);
// Route::get('admin/product/update/{id}',[AdminController::class,'update']);
// Route::get('admin/product/show',[AdminController::class,'show']);
// Route::get('admin/product/delete/{id}',[AdminController::class,'delete']);

// //ELOQUENT ORM
// // Route::get('posts/read',function(){
// //     $post = Post::all();
// //     return $post;
// // });

// Route::get('posts/read',[PostController::class,'read']);
// Route::get('posts/add',[PostController::class,'read']);


// Route::get('posts/permanentlydelete/{id}',[PostController::class,'permanentlyDelete']);


// Route::get('images/read',[FeaturedImagesController::class,'read']);

// Route::get('role/show',[RoleController::class,'show']);

#FORM
Route::get('post/add',[PostController::class,'add']);
Route::post('/post/store', [PostController::class, 'store'])->name('posts.store');

Route::get('post/show',[PostController::class,'show'])->name('post.show');

Route::get('helper/url',[PostController::class,'url']);

Route::get('helper/string',[HelperController::class,'string']);


Route::get('user/reg',function(){
    return view('user/reg');
});


//Session
Route::get('session/add',[SessionController::class,'add']);
Route::get('session/show',[SessionController::class,'show']);
Route::get('session/add_flash',[SessionController::class,'add_flash']);
Route::get('session/delete',[SessionController::class,'delete']);
//Cookie
Route::get('cookie/set',[CookieController::class,'set']);
Route::get('cookie/get',[CookieController::class,'get']);

Route::get('demo/sendmail',[DemoController::class,'sendmail']);

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
