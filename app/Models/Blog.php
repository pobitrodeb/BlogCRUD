<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private  static $blog;

    private static $image, $extension, $imageName, $directory;

    public static function getImageUrl($request)
    {
        self::$image            = $request->file('image');
        self::$extension        = self::$image->getClientOriginalExtension();
        self::$imageName        = 'blog_thumbnail'.time().'.'.self::$extension;
        // self::$imageName     = self::$image->geclClientOriginalName();
        self::$directory        = 'images/upload_images/blog/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newBlog($request)
    {
        self::$blog             = new Blog();
        self::$blog->title      = $request->title;
        self::$blog->blog       = $request->blog;
        self::$blog->image      = self::getImageUrl($request);;
        self::$blog->save();
    }



    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
