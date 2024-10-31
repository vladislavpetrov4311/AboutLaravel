<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\Post\PostResource;

class GetAllController extends Controller
{
    public function __invoke() {
        $posts = Post::find(1);
        return new PostResource($posts);
    }
}
