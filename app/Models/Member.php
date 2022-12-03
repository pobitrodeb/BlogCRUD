<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    private static $member;
    public static function newMember($request)
    {
        self::$member           = new Member();
        self::$member->name     = $request->name;
        self::$member->email    = $request->email;
        self::$member->phone   = $request->phone;
        self::$member->save();
    }
}
