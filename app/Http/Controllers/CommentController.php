<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public  $comment;
    public function newComment(Request $request)
    {

        $comment              = new Comment();
        $comment->blog_id     = $request->blog_id;
        $comment->name        = $request->name;
        $comment->email       = $request->email;
        $comment->comment     = $request->comment;
        $comment->save();

        return redirect()->back();
    }

    public function manage()
    {
        return view('admin.comment.manage',[
            'comments' => Comment::all(),
        ]);
    }
    public function comment()
    {

        return $this->belongsToMany(Blog::class);
    }
}
