<?php

namespace App\Http\Controllers;

use BaconQrCode\Common\Mode;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
     public $membersc, $count;
    public  function addMember()
    {
        return view('admin.member.index');
    }

    public function manageMember()
    {

        return view('admin.member.manage',[
            'members' => Member::all(),
        ]);
    }

    public function newMemberStore(Request $request)
    {
        Member::newMember($request);
        return redirect('/dashboard/manageMember')->with('message', 'New Member Add Successfully');
    }
}
