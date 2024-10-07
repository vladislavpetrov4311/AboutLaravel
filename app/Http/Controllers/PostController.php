<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getData() {
        $post = Post::where('post' , 'блог 2')->first(); // Получаем пост по фильтрации

        dump($post);
    }
}
