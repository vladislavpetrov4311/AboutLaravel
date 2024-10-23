<?php

namespace App\Service\Post;
use App\Models\Post;
use App\Models\User;
use DB;

class Service {
    
    public function FirstOrCreate() {
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

    public function GetData() {
        $user = User::find(1);
        $posts = Post::where('user_id' , $user->id)->first();
        dd($posts);
        foreach($posts as $post) {
            print_r(" $post->id "." $post->title "." $post->post ");
        }
    }

    public function SetData() {
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

    public function Store($data) {
        Post::create([
            'title' => $data->title,
            'post' => $data->post
        ]);
    }

    public function UpdateData() {
        $post = Post::find(1);
        $post->update([
            'title' => 'обновленный',
            'post' => 'обновленный'
        ]);
    }

    public function UpdateOrCreate() {
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