<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getData() {
        $post = Post::find(2); // Получаем пост на id = 2
        dump($post);
    }
}
