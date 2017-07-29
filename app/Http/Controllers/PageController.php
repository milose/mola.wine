<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index')
            ->with('headless', false);
    }

    public function fbVenues()
    {
        return view('pages.index')
            ->with('headless', true);
    }

    public function adminHome()
    {
        return view('pages.adminHome');
    }
}
