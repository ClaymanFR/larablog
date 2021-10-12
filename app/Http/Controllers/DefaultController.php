<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class DefaultController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->paginate(5);
        
        return view('homepage', [
            'posts' => $posts    
        ]);
    }
}
