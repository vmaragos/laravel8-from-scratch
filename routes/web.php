<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('posts', [                                  //finally, pass the new objects to the view
        'posts' => Post::all()
    ]);
});

Route::get('post/{post}', function ($id) {

    // $post = Post::findOrFail($slug);
    // ddd($post);
    return view("post", [
        'post' => Post::findOrFail($id),
    ]);
    
});

