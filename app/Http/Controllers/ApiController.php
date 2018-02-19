<?php

namespace App\Http\Controllers;

use App\Models\CareerItem;
use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    /**
     * @return array
     */
    public function posts(Request $request)
    {
        $page = $request->get('page');
        $perPage = $request->get('perPage');

        $posts = Post::published()
            ->orderBy('published_at', 'desc')
            ->get();
        return $posts;
    }
}
