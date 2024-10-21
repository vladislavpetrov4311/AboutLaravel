<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class UpdateOrCreateController extends Controller
{
    public function __invoke() {
        $post = Post::updateOrCreate(
        [
            'title' => 'заголовок 2'
        ], 
        [
            'title' => 'обновлённый',
            'post' => 'пост'
        ]);

        dd($post);
    }
}
