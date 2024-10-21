<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class RestoreDataController extends Controller
{
    public function __invoke() {
        $post = Post::withTrashed()->find(1);
        $post->restore();
    }
}
