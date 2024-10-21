<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class FirstOrCreateController extends Controller
{
    public function __invoke() {
        $data = [
            'title' => 'заголовок 2'
        ];
        $newData = [
            'title' => 'новый заголовок',
            'post' => 'новый пост'
        ];

        $post = Post::firstOrCreate($data, $newData);
        dd($post);
    }
}
