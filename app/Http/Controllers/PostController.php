<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        return view('guest.posts.index', compact('posts'));
    }
}
