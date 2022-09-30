<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {

        $post = Post::paginate(2);
        return view('pages.home')->with('post', $post);
    }
}
