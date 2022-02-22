<?php

namespace App\Http\Controllers\front;

use App\frontmodels\Article;
use App\frontmodels\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    public function store(Article $article, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required'
        ]);
        $article->comments()->create([
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body
        ]);
        $msg='نظر شما با موفقیت ثبت شد. پس از تایید مدیریت سایت نمایش داده میشود';
        return back()->with('success',$msg);
    }
}
