<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShowController;


// Client side --------------------------------------------------------------

Route::get('/',[ShowController::class, 'push_data_index']);
Route::get('/category',[ShowController::class, 'push_data_category']);
Route::get('/blog-details-{id}',[ShowController::class, 'push_data_blog']);
Route::get('/contact',[ShowController::class, 'push_data_contact']);
Route::post('/contact.create',[ContactController::class, 'create_contact']);
Route::get('/aboutme',[ShowController::class, 'push_data_aboutme']);

// End client side--------------------------------------------------------------


// Admin side --------------------------------------------------------------\
Route::post('/register_user',[UserController::class, 'create_user']);
Route::post('/check_login',[UserController::class, 'check_login']);
Route::post('/logout',[UserController::class, 'logout']);

Route::get('/login', function () { return view('admin.auth-login'); });
Route::get('/auth-login', function () { return view('admin.auth-login'); });
Route::get('/auth-register', function () { return view('admin.auth-register'); });

// Check User
Route::middleware('auth')->group(function(){
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'view_dashboard']);

    // Categories
    Route::get('/categories',[CategoriesController::class, 'view_categories']);
    Route::post('/categories.create',[CategoriesController::class, 'create_category']);
    Route::put('/cate-edit/{id}',[CategoriesController::class, 'edit_category']);
    Route::delete('/cate-delete/{id}',[CategoriesController::class, 'delete_category']);

    // Blogs
    Route::get('/blogs', [BlogsController::class, 'view_blogs']);
    Route::post('/blog.create',[BlogsController::class, 'create_blog']);
    Route::put('/blog-edit/{id}',[BlogsController::class, 'edit_blog']);
    Route::delete('/blog-delete/{id}',[BlogsController::class, 'delete_blog']);

    // Contacts
    Route::get('/contacts', [ContactController::class, 'view_contacts']);
    Route::delete('/contact-delete/{id}',[ContactController::class, 'delete_contact']);

    // Users
    Route::get('/pages-account-settings-account', [UserController::class, 'view_user']);
    Route::put('/edit-pages-account-settings-account/{id}',[UserController::class, 'edit_user']);
});
// End admin side--------------------------------------------------------------

