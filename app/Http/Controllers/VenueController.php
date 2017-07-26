<?php

namespace App\Http\Controllers;

use App\Venue;

class VenueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }
    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show(Venue $venue)
    {
        //
    }

    public function edit(Venue $venue)
    {
        //
    }

    public function update(Venue $venue)
    {
        //
    }

    public function destroy(Venue $venue)
    {
        //
    }
}
