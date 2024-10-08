<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getData() {
        $post = Post::where('post' , 'блог 2')->get(); // Получаем пост по фильтрации в види коллекции (массива)

        dump($post);
    }

    public function setData() {
        $data = [
            [
                'title' => 'заголовок',
                'post' => 'текст поста'
            ],
            [
                'title' => 'заголовок 2',
                'post' => 'текст поста 2'
            ]
            ];

            foreach($data as $item) {
                Post::create($item);
            }
    }
}
