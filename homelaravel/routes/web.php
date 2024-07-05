<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\DB;
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


Route::get('demo', function(){
    $users = array(
        1 => array(
            'name' => 'Trương Xuân Trường'
        ),
        2 => array(
            'name' => 'Hoàng Anh'
        ),
        3 => array(
            'name' => 'Hoàng'
        ),
    );
    return view('demo', compact('users'));
});
// Route::get('users/insert',function(){
//     DB::table('users')->insert(
//         ['name' => 'Trần Anh','email' => 'trananh22@gmail.com','password' => bcrypt('truong')]
//     );
// });
Route::get('posts/add',[PostController::class, 'add']);
Route::get('posts/show',[PostController::class,'show']);
Route::get('posts/update',[PostController::class,'update']);
Route::get('posts/delete/{id}',[PostController::class,'delete']);

Route::get('admin/product/add',[AdminController::class,'add']);
Route::get('admin/product/update/{id}',[AdminController::class,'update']);
Route::get('admin/product/show',[AdminController::class,'show']);
Route::get('admin/product/add',[AdminController::class,'add']);
