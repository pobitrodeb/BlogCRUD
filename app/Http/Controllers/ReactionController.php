<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Reaction;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;

class ReactionController extends Controller
{
    public $reaction;
    public function create(Request $request)
    {
        $reaction               = new Reaction();
        $reaction->blog_id      = $request->blog_id;
        $reaction->auth_id      = Auth::id();
        $reaction->save();
        return redirect()->back();
    }

    public function blogs()
    {
        return $this->belongsTo(Blog::class);
    }
}
