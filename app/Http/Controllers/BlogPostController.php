<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index(){

        $posts = BlogPost::where('status', 2)->latest('id')->paginate(7);

        return view('posts.index', compact('posts'));
    }

    public function show(BlogPost $post){

        $similares = BlogPost::where('blog_category_id', $post->blog_category_id)
                    ->where('status',2)
                    ->where('id', '!=', $post->id)
                    ->latest('id')
                    ->take(4)
                    ->get();

        return view('posts.show', compact('post','similares'));
    }
}
