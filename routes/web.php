<?php

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
    return view('home',[
        'title' => 'Home',
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
    ]);
});
Route::get('/posts', function () {
    $blog_posts = [
        [
            'title' => 'judul post pertama',
            'slug' =>'judul-post-pertama',
            'author' => 'hendra mustopa',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolore repudiandae, quos sapiente voluptatibus ducimus vel. Laboriosam, perferendis dicta nam debitis libero, explicabo aspernatur expedita in sed, dolore adipisci quas doloremque enim error at et beatae. Autem laboriosam reprehenderit velit.'
        ],
        [

            'title' => 'judul post kedua',
            'slug' =>'judul-post-kedua',
            'author' => 'nia ramadhan',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. orem ipsum, dolor sit amet consectetur adipisicing elit. .Blanditiis dolore repudiandae, quos sapiente voluptatibus ducimus vel. Laboriosam, perferendis dicta nam debitis libero, explicabo aspernatur expedita in sed, dolore adipisci quas doloremque enim error at et beatae. Autem laboriosam reprehenderit velit.'

        ]
    ];
    return view('posts',[
        'title' => 'Posts',
        'posts' =>$blog_posts
    ]);
});
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'judul post pertama',
            'slug' =>'judul-post-pertama',
            'author' => 'hendra mustopa',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis dolore repudiandae, quos sapiente voluptatibus ducimus vel. Laboriosam, perferendis dicta nam debitis libero, explicabo aspernatur expedita in sed, dolore adipisci quas doloremque enim error at et beatae. Autem laboriosam reprehenderit velit.'
        ],
        [

            'title' => 'judul post kedua',
            'slug' =>'judul-post-kedua',
            'author' => 'nia ramadhan',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. orem ipsum, dolor sit amet consectetur adipisicing elit. .Blanditiis dolore repudiandae, quos sapiente voluptatibus ducimus vel. Laboriosam, perferendis dicta nam debitis libero, explicabo aspernatur expedita in sed, dolore adipisci quas doloremque enim error at et beatae. Autem laboriosam reprehenderit velit.'

        ]
    ];
    $new_post=[];
    foreach ($blog_posts as $post) {
        if ($post['slug']===$slug) {
            $new_post=$post;
        }
    }
    return view('post',[
        'title' => 'single post',
        'post' => $new_post
    ]);
});
