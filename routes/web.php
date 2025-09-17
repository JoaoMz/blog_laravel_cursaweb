<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () 
//     return view('welcome');
// });

#Rota Login
Route::get('/login', function(){
    return view('admin.auth.login');
});

#Rota Posts
Route::get('/admin/posts', function(){
    return view('admin.posts.index');
});


#Rota Create
Route::get('/admin/posts/create', function(){

    return view('admin.posts.create');
});

#Rota Editar
Route::get('/admin/posts/{id}/edit', function($id){

    // dd($id);
    return view('admin.posts.edit');
});

#Rota index geral
Route::get('/blog', function(){
    return view('web.blog.index');
});

#Rota listagem com id
Route::get('/blog/{id}', function($id){
    return view('web.blog.show');
});