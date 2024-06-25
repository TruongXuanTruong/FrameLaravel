<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
// Route::get('post', function () {
//     return "Trang test";
// });
// Route::get('/admin/product/', function () {
//     return "Trang quản lý";
// });
// Route::get('/admin/product/add', function () {
//     return "Trang thêm sản phẩm";
// });

// //Định tuyến URL có tham số

// Route::get('post/{id}', function ($id) {
//     return $id;
// });
// Route::get('post/{cat_id}/page/{page}', function ($cat_id, $page) {
//     return $cat_id . '-' . $page;
// });

// //Đặt tên định tuyến
// Route::get('users/profile', function () {
//     return route('profile');
// })->name('profile');

// Route::get('/admin/product/add', function () {
//     return route('product.add');
// })->name('product.add');

// //Định tuyến có tham số tùy chọn
// // xuanturong.com/users => Hiển thị ra danh sách users
// // xuanturong.com/users/4 => Hiển thị ra thông tin của người dùng có id = 4


// Route::get('users/{id?}', function ($id = 0) {
//     if ($id == 0) {
//         return 'Hiển thị ra danh sách users';
//     } else {
//         return 'Hiển thị ra thông tin của người dùng có id = ' . $id;
//     }
// });

// //Định tuyến với tham số có ràng buộc biểu thức chính quy
// // Route::get('product/{id}', function ($id) {
// //     return $id;
// // })->where('id', '[0-9]+');

// Route::get('product/{id}/{slug}', function ($id, $slug) {
//     return $id . '---' . $slug;
// })->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-_]+']);


// //Định tuyến qua một view
// Route::view('welcome', 'welcome');

Route::view('/post', 'post', ['id' => 20]);

// //Định tuyến qua Controller
// Route::get('/post/{id}', [PostController::class, 'detail']);

//Bài tập 39 - quản lý bài viết trong admin

Route::get('admin/post/add', function(){
    return "Admin: thêm bài viết";
});
Route::get('admin/post/update/{id}', function($id){
    return "Admin: Cập nhật bài viết có id{$id}";
});
Route::get('admin/post/show', function(){
    return "Admin: Hiển thị danh sách bài viết";
});
Route::get('admin/post/delete/{id}', function($id){
    return "Admin: Xóa bài viết có id {$id}";
});
