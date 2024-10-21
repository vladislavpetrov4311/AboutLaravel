<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;

class UserPostController extends Controller
{
    public function __invoke() { // У user достаём все посты
        $user = User::find(1);

        dd($user->posts);
    }
}

