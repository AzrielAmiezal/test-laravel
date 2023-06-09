<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // vardump search == dd(request('search'));

        //title for All Post in 'category name'
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        //title for All Post by 'author name'
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view(
            'posts',
            [
                "title" => "All Posts" . $title,
                "active" => 'posts',
                //"posts" => Post::all()
                //"posts" => Post::latest()->filter(request(['search', 'category', 'author']))->get()
                // using paginate() instead of get()
                "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            ]
        );
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
