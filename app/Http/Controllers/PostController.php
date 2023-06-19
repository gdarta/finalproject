<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->city = $request->city;
        $post->country = $request->country;
        $post->size = $request->size;
        $post->tags = $request->tags;
        $post->description = $request->description;
        $post->save();
        return redirect('/')->with('message', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findorfail($id);
        return view('post', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findorfail($id);
        return view('edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findorfail($id);
        $post->name = $request->name;
        $post->city = $request->city;
        $post->country = $request->country;
        $post->size = $request->size;
        $post->tags = $request->tags;
        $post->description = $request->description;
        $post->save();
        $url = '/'.$id;
        return redirect($url)->with('message', 'Post edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
