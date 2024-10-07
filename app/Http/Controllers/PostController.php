<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getData() {
        $posts = Post::all(); // Получаем все посты из таблицы

        foreach($posts as $post) {
            dump($post->getAttributes()); // Выводим каждый пост по атрибутам (столбцам)
        }
    }
}
