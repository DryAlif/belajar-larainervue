<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
//        sleep(3);
        $posts = PostResource::collection(Post::all());

        return inertia('Posts/Index', compact('posts'));
    }

    public function create()
    {
        return inertia('Posts/Create');
    }

    public function store(StorePostRequest $request)
    {
//        $attributes = $request->validate([
//            'title' => ['required'],
//            'content' => ['required'],
//        ]);

        Post::create($request->validated());

        return redirect()->route('posts.index')->with('message','Post Created successfully!');
    }

    public function edit(Post $post)
    {
        return inertia('Posts/Edit', compact('post'));
    }
//
    public function update(Post $post, StorePostRequest $request)
    {

        $post->update($request->validated());

        return redirect()->route('posts.index')
            ->with('message', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('message', 'Post deleted successfully');
    }
}
