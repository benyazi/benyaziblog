<?php

namespace App\Http\Controllers;

use App\Models\CareerItem;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * @return array
     */
    public function view(Request $request, $slug)
    {
        $post = Post::query()->where('slug', $slug)->first();
        if(empty($post)) {
            abort(404, "Post not found");
        }
        return view('post.view', [
            'post' => $post->toArray()
        ]);
    }

    /**
     * @return array
     */
    public function tag(Request $request, $tagName)
    {
        $tag = Tag::query()->where('name', $tagName)->first();
        if(empty($tag)) {
            abort(404, "Tag not found");
        }
        return view('post.tag');
    }
}
