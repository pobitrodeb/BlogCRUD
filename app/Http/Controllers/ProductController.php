<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function manage()
    {
        return view('admin.product.manage');
    }

    public function allAccess()
    {
        return view('admin.product.allAccess');
    }
}
