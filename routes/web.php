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
#Nueva ruta: post.blade.php
Route::get('/', function () {    
    return view('posts',[
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {
    return view('post',[
        'post'=>Post::findOrFail($slug)
    ]);
})->where('post','[A-z_\-]+');



   // if(!file_exists($path= dirname(__FILE__,2). "/resources/posts/$slug.html")){
   //    return redirect('/');
   // }
   // $post= cache()->remember("posts.$slug", 1200, fn() => file_get_contents($path));
   // return view('post',['post'=>$post]);
   // })->where('post','[A-z_\-]+');