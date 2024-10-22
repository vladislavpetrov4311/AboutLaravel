<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke($id , UpdateRequest $request) {
        $post = Post::findOrFail($id); // findOrFail - успешный поиск или 404 ошибка
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('post.index');
    }
}
