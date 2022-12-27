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
}
