<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function fbLocations()
    {
        return view('pages.fb-locations');
    }

    public function adminHome()
    {
        return view('pages.adminHome');
    }
}
