<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;
use App\Service\Post\Service;

class StoreController extends Controller
{
    public function __invoke() {
        $data = request();
        $service = new Service();
        $service->Store($data);
        
        return redirect()->route('post.index');
    }
}
