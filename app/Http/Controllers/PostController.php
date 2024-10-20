<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts' , compact('posts'));
    }

    public function userPost() { // У user достаём все посты
        $user = User::find(1);

        dd($user->posts);
    }

    public function postUser() { // У postа достаём всех user
        $post = Post::find(1);

        dd($post->users);
    }
    public function getData() {
        $user = User::find(1);
        $posts = Post::where('user_id' , $user->id)->first();
        dd($posts);
        foreach($posts as $post) {
            print_r(" $post->id "." $post->title "." $post->post ");
        }
    }

    public function store() {
        $data = request();

        Post::create([
            'title' => $data->title,
            'post' => $data->post
        ]);
        
        return redirect()->route('post.index');
    }

    public function update($id) {
        $post = Post::findOrFail($id); // findOrFail - успешный поиск или 404 ошибка
        $data = request()->validate([
            'title' => 'string',
            'post' => 'string'
        ]);
        $post->update($data);
        return redirect()->route('post.index');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index');
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
