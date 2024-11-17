<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Service\Post\Service;
use App\DTO\Post\PostDTO;

class DataDTOController extends Controller {

    public function __invoke(Service $service, Post $post) {
        return response()->json($service->updateDTO(new PostDTO(request()->all()), $post));
    }
}