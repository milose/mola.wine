<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        return App\Venue::all();
    }
}
