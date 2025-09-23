<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;


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

#rota POst
Route::post('/admin/posts/create', function(Request $request){

    Post::create([
        'user_id' => 1,
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'description' => $request->description,
        'date' => $request->date
    ]);

    return redirect('/admin/posts');
});

#Rota Editar
Route::get('/admin/posts/{id}/edit', function($id){

    // dd($id);

    $post = Post::find($id);

    if (!$post) {
        return redirect('/admin/posts');
    }

    return view('admin.posts.edit', compact('post'));
});

Route::put('/admin/posts/{id}/edit', function(Request $request, $id){
    $post = Post::find($id);

    if (!$post = Post::find($id)) {
        return redirect('/admin/posts');
    }

    $post->update([
        'id' => 1,
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'description' => $request->description,
        'date' => $request->date
    ]);

    return redirect('/admin/posts/' . $post->id . '/edit');
});


#Rota index geral
Route::get('/blog', function(){
    return view('web.blog.index');
});

#Rota listagem com id
Route::get('/blog/{id}', function($id){
    return view('web.blog.show');
});