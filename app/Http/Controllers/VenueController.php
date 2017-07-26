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
        return view('venues.create')
            ->with('venue', new Venue);
    }

    public function store()
    {
        $rules = [
            'type' => 'required',
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ];

        $this->validate(request(), $rules);

        // @TODO: Fix this when 5.5 comes out
        $venue = Venue::create(request(array_keys($rules)));

        return redirect(action('VenueController@show', $venue))
            ->with('notification', 'success')
            ->with('notificationTitle', 'Venue created.');
    }

    public function show(Venue $venue)
    {
        return view('venues.show')
            ->with('venue', $venue);
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
        $venue->delete();

        return redirect(action('VenueController@index'))
            ->with('notification', 'success')
            ->with('notificationTitle', 'Venue deleted.');
    }
}
