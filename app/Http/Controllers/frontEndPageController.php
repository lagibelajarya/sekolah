<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndPageController extends Controller
{
    public function home()
    {
        return view('page.home');
    }
    public function about()
    {
        return view('page.about');
    }
    public function alumni()
    {
        return view('.page.alumni');
    }
    public function ppdb()
    {
        return view('page.ppdb');
    }
    public function news()
    {
        return view('page.news');
    }
    public function detailNews()
    {
        return view('page.detailNews');
    }
}
