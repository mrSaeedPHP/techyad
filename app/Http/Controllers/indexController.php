<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index()
    {
        $data = [
            'car' => 'mazda',
            'title' => 'عنوان صفحه'
        ];
        return view('front.index', $data);
    }

    public function welcome()
    {
//        $city = 'tehran';
//        return view('welcome')->with('shahr',$city);
        $shahr = 'شهر';
        $keshvar = 'کشور';
        $qarre = 'قاره';
        return view('welcome', compact('shahr', 'keshvar'))->with('qarre', $qarre);
    }

    public function article($id)
    {
        return view('article', compact('id'));
    }
}
