<?php

namespace App\DTO\Post;

class PostDTO {

    public $title, $post;
    
    public function __construct($data) {
        $this->title = $data['title'];
        $this->post = $data['post'];
    }
}