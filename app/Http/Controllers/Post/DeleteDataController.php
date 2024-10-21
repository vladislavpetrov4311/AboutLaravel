<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class DeleteDataController extends Controller
{
    public function __invoke() {
        $post = Post::find(1);
        $post->delete();
    }
}
