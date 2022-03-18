<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    return view('posts.index', [
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
    ]);
})->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('posts.view', [
        'post' => $post
    ]);
})->name('posts.view');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts.index', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('categories.view');

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts.index', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
})->name('authors.view');
