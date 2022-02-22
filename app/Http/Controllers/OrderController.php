<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $pagetitle = 'لیست سفارش مشتریان';
        $tablevalues = Order::orderBy('id', 'DESC')->get();
        return view('orders', compact('pagetitle', 'tablevalues'));
    }
}
