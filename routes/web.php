<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello', function () {
    $username = 'John';
    return view('hello', [
        'name' => $username
    ]);
});

Route::get('/pass-array', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the work'
    ];
    return view('tasklist', [
        'tasks' => $tasks
    ]);
});

Route::get('/request-test', function () {
    return view('request-inputs', [
        'title' => request('title'),
    ]);
});

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'first-post' => 'Hello, this is my first blog post!',
//         'second-post' => 'Now I am getting the hang of this blogging thing'
//     ];
//     return view('post', [
//         'post' => $posts[$post] ?? 'Nothing here yet.'
//     ]);
// });

Route::get('/posts/{post}', ['App\Http\Controllers\PostController', 'show']);
