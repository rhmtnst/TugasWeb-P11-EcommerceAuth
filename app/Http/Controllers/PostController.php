<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function edit(Post $post)
    {
       Gate::authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
       Gate::authorize('update', $post);

        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'body' => ['required'],
        ]);

        $post->update($validated);

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post berhasil diperbarui.');
    }

    public function destroy(Post $post)
    {
        Gate::authorize('delete', $post);

        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('success', 'Post berhasil dihapus.');
    }
}