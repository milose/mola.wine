<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function adminHome()
    {
        return view('pages.adminHome');
    }
}
