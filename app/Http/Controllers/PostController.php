<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(
            ),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title'       => 'required',
            'thumbnail'   => 'required|image',
            'excerpt'     => 'required',
            'body'        => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $attributes['thumbnail'] = public_path('/images/illustration-1.png');

        $thumbnail = request()->file('thumbnail') ?? false;
        if ($thumbnail) {
            $attributes['thumbnail'] = $thumbnail->store('thumbnails');
        }

        $attributes['user_id'] = auth()->user()->id;

        Post::create($attributes);

        return redirect('/')->with('success', 'Your post has been published');
    }
}
