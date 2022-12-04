<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Controllers\BlogController;
use App\Models\Comment;
use App\Http\Controllers\SubCommentController;
use App\Models\SubComment;

class HomeController extends Controller
{
    public $blog,  $blogpost;
    public function index()
    {
       // $blog = Blog::orderby()->get()
        return view('website.home.index',[
            'blogs' => Blog::all(),
        ]);
    }

    public function detailBlog($id)
    {
        $blog=Blog::find($id);
        return view('website.blog.detail',[
            'blogPost' => $blog,
          //  'allComment' => $blog->comments,

        ]);



//        return view('website.blog.detail',[
//            'blogPost' => Blog::find($id),
//            'allComment' => Comment::where('blog_id',$id)->get(),
//        ]);
    }

}
