<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostController extends Controller
{
    public function getData() {
        $post = Post::withTrashed()->where('id' , 1)->get(); // Получаем пост по фильтрации в види коллекции (массива)

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

    public function deleteData() {
        $post = Post::find(1);
        $post->delete();
    }

    public function restoreData() {
        $post = Post::withTrashed()->find(1);
        $post->restore();
    }

    public function first_or_create() {
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

    public function update_or_create() {
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
