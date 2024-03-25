<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Post;
class PostContoroller extends Controller
{
    public function index(Post $post)
{
    return $post->get();
}
}

