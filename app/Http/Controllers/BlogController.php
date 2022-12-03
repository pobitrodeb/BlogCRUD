<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index');
    }

    public function manage()
    {
        return view('admin.blog.manage');
    }

    public function newBlog(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/addBlog');
    }
    public function post()
    {
        return $this->belongsToMany(Comment::class);
    }
}
