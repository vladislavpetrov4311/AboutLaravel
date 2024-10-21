<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke($id) {
        $post = Post::findOrFail($id); // findOrFail - успешный поиск или 404 ошибка
        $data = request()->validate([
            'title' => 'string',
            'post' => 'string'
        ]);
        $post->update($data);
        return redirect()->route('post.index');
    }
}
