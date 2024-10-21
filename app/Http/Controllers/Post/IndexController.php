<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke() {
        $posts = Post::all();
        return view('posts' , compact('posts'));
    }
}
