<?php

namespace App\Http\Controllers\Api;

use App\Venue;
use App\Http\Controllers\Controller;

class VenueController extends Controller
{
    public function index()
    {
        return Venue::all();
    }
}
