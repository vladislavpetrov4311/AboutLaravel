<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;
use App\Policies\PostPolicy;

class UpdateController extends Controller
{
    public function __invoke(Post $post , PostPolicy $policy , Request $request) {
        if($policy->update($post , $request)) {
            $post->update([
                'title' => $request->title,
                'post' => $request->post
            ]);
            return redirect()->route('post.index');
        } else {
            abort(401);
        }
    }
}
