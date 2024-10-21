<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class GetDataController extends Controller
{
    public function __invoke() {
        $user = User::find(1);
        $posts = Post::where('user_id' , $user->id)->first();
        dd($posts);
        foreach($posts as $post) {
            print_r(" $post->id "." $post->title "." $post->post ");
        }
    }
}
