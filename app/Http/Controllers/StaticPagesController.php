<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StaticPagesController extends Controller
{
    public function home()
    {
		$feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }
		
		return view('static_pages/home', compact('feed_items'));
        //return '主页';
    }

    public function help()
    {
		return view('static_pages/help');
        //return '帮助页';
    }

    public function about()
    {
		return view('static_pages/about');
        //return '关于页';
    }
}
