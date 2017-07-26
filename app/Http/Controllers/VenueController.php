<?php

namespace App\Http\Controllers;

use App\Venue;

class VenueController extends Controller
{
    public function index()
    {
        $needle = request('needle');

        return view('venues.index')
            ->with('venues', Venue::findOrAll($needle))
            ->with('needle', $needle);
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
