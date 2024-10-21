<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
