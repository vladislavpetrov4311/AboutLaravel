<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class PostUserController extends Controller
{
    public function __invoke() { // У postа достаём всех user
        $post = Post::find(1);

        dd($post->users);
    }
}
