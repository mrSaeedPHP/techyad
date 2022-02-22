<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    public function index()
    {
        $pagetitle = 'صفحه خوش آمدگویی';

        $pcount = DB::table('posts')->count();
        $minId = DB::table('posts')->min('id');
        $posts=DB::table('posts')->orderBy('id','DESC')->paginate(1);
        return view('posts', compact('pagetitle', 'pcount', 'minId','posts'));
    }
}
