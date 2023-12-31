<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TODO: Add sort by functionality
        $posts = Post::latest()->filter(request(['tag', 'search']))->paginate(6);
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
        $form = $request->validate([
            'name' => 'required|min:3',
            'country' => 'required',
            'size' => 'required',
            'description' => 'required'
        ]);

        $form['city'] = $request->city;
        $form['tags'] = $request->tags;
        $form['user_id'] = auth()->id();

        if($request->hasFile('photo')) {
            $form['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Post::create($form);

        return redirect(route('manage'))->with('message', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findorfail($id); 
        $comments = Comment::where('post_id','=',$post->id)->latest()->paginate(5); 
        return view('post', ['post' => $post, 'comments' => $comments]);
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
        //Make sure logged in user is owner
        if($post->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $form = $request->validate([
            'name' => 'required|min:3',
            'country' => 'required',
            'city' => 'required',
            'size' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('photo')) {
            $form['photo'] = $request->file('photo')->store('photos', 'public');
        }
        
        $post->update($form);

        $url = '/posts/'.$id;
        return redirect($url)->with('message', 'Post edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if($post->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $post = Post::findorfail($id);
        $post->delete();
        return redirect('/posts/manage')->with('message', 'Post deleted successfully!');
    }

    public function manage()
    {
        return view('manage', ['posts' => auth()->user()->posts()->get()->sortDesc()]);
    }
}
