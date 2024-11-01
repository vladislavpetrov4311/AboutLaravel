<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class TransactionController extends Controller
{
    public function __invoke() {
        try {
        DB::beginTransaction();
        dump(Post::all());
        dump(Post::create([
            'title' => 'test1',
            'post' => 'post1'
        ]));
        DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    
    }
}
