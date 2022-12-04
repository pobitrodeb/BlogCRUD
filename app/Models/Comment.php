<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function comment()
    {
        return $this->belongsTo(Blog::class);
    }

    public function subComments()
    {
        return $this->hasMany(SubComment::class);
    }
}
