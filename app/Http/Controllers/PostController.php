<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostController extends Controller
{
    public function getData() {
        $post = Post::where('id' , 1)->get(); // Получаем пост по фильтрации в види коллекции (массива)

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
                DB::table('posts')->insert($item);
            }
    }

    public function updateData() {
        $post = Post::find(1);
        $post->update([
            'title' => 'обновленный',
            'post' => 'обновленный'
        ]);
    }
}
