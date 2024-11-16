<?php

namespace App\Repository\Post;
use App\Models\Post;

class PostRepository {

    public function getAll() {
        return Post::all();
    }
}
