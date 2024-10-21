<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request();

        Post::create([
            'title' => $data->title,
            'post' => $data->post
        ]);
        
        return redirect()->route('post.index');
    }
}
