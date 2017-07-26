<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicVenueController extends Controller
{
    public function index()
    {
        return App\Venue::all();
    }
}
