<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;


class PostController extends Controller
{
    public function index(){
        $posts_api = Post::All();

        return response()->json($posts_api);
    }
}
