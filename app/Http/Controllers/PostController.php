<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();

    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	Post::create($request->all()); // not secure

    	return redirect('posts');
    }

    public function show($id)
    {
    	$post = Post::findOrFail($id);

    	return view('posts.show', compact('post'));
    }
}
