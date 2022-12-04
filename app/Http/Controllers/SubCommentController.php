<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubComment;

class SubCommentController extends Controller
{
    public $subComment;
    public function index()
    {
        return view('website.blog.subComment');
    }

    public function create(Request $request)
    {
        $subComment                         = new SubComment();
        $subComment->blog_id                = $request->blog_id;
        $subComment->comment_id             = $request->comment_id;
        $subComment->name                   = $request->name;
        $subComment->email                  = $request->email;
        $subComment->comment                = $request->comment;
        $subComment->save();
        return redirect()->back();
    }
    public function post()
    {
        return $this->belongsToMany(Comment::class);
    }
}
