<?php

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

Route::get('/', 'PublicController@index')->name('index');
Route::get('post/{id}', 'PublicController@singlePost')->name('singlePost');
Route::get('about', 'PublicController@about')->name('about');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::post('contact', 'PublicController@contactPost')->name('contactPost');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


#=====   User Dashboard    =============
Route::prefix('/user')->group(function() {
    Route::post('new-comment', 'UserController@newComment')->name('newComment');
    Route::get('dashboard', 'UserController@dashboard')->name('userDashboard');
    Route::get('comments', 'UserController@comments')->name('userComments');
    Route::post('comments/{id}/delete', 'UserController@deleteComment')->name('deleteComment');
    Route::get('profile', 'UserController@profile')->name('userProfile');
    Route::post('profile', 'UserController@profilePost')->name('userProfilePost');
});
#=====   Auther Dashboard    =============
Route::prefix('/auther')->group(function() {
    Route::get('dashboard', 'AutherController@dashboard')->name('autherDashboard');
    Route::get('posts', 'AutherController@posts')->name('autherPosts');
    Route::get('posts/new', 'AutherController@newPost')->name('newPost');
    Route::post('posts/new', 'AutherController@createPost')->name('createPost');
    Route::get('comments', 'AutherController@comments')->name('autherComments');
    Route::get('posts/{id}/edit', 'AutherController@postEdit')->name('postEdit');
    Route::post('posts/{id}/edit', 'AutherController@postEditPost')->name('postEditPost');
    Route::post('posts/{id}/delete', 'AutherController@deletePost')->name('deletePost');
});
#=====   Admin Dashboard    =============
Route::prefix('/admin')->group(function() {
    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
    Route::get('posts', 'AdminController@posts')->name('adminPosts');
    Route::get('comments', 'AdminController@comments')->name('adminComments');
    Route::get('users', 'AdminController@users')->name('adminUsers');
    Route::get('posts/{id}/edit', 'AdminController@postEdit')->name('adminPostEdit');
    Route::post('posts/{id}/edit', 'AdminController@postEditPost')->name('adminPostEditPost');
    Route::post('posts/{id}/delete', 'AdminController@deletePost')->name('adminDeletePost');
    Route::post('comments/{id}/delete', 'AdminController@deleteComment')->name('adminDeleteComment');
    Route::get('users/{id}/edit', 'AdminController@editUser')->name('adminEditUser');
    Route::post('users/{id}/edit', 'AdminController@editUserPost')->name('adminEditUserPost');
    Route::post('users/{id}/delete', 'AdminController@deleteUser')->name('adminDeleteUser');


    Route::get('products', 'AdminController@products')->name('adminProducts');
    Route::get('products/new', 'AdminController@newProduct')->name('adminNewProduct');
    Route::post('products/new', 'AdminController@newProductPost')->name('adminNewProductPost');
    Route::get('products/{id}', 'AdminController@editProduct')->name('adminEditProduct');
    Route::post('products/{id}', 'AdminController@editProductPost')->name('adminEditProductPost');
    Route::post('products/{id}', 'AdminController@deleteProduct')->name('adminDeleteProduct');
});
#=====   Shop   =============
Route::prefix('/shop')->group(function() {
    Route::get('/', 'ShopController@index')->name('shop.index');
});
