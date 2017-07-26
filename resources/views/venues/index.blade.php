@extends('layouts.app')

@section('content')
    <section class="section">

        <div class="field">
            <a href="{{ action('VenueController@create') }}" class="button is-success">
                <span class="icon"><i class="fa fa-fv fa-plus"></i></span>
                <span>Add new venue</span>
            </a>
        </div>

        <hr>

        <div class="title">Venues</div>

        <form class="mb" action="{{ action('VenueController@index') }}" method="get">
            <div class="field has-addons">
                <div class="control">
                    <input class="input" name="needle" value="{{ $needle }}" type="text" placeholder="Find a venue">
                </div>
                <div class="control">
                    <button class="button" type="submit">
                        <span class="icon">
                            <i class="fa fa-search"></i>
                        </span>
                        <span>Search</span>
                    </button>
                </div>
                <div class="controll">
                    <a href="{{ action('VenueController@index') }}" class="button">
                        <span class="icon">
                            <i class="fa fa-times"></i>
                        </span>
                    </a>
                </div>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Type</th>
                    <th><span class="icon"><i class="fa fa-eye"></i></span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($venues as $venue)
                    <tr>
                        <td><strong>{{ $venue->name}}</strong></td>
                        <td><small>{{ $venue->address}}</small></td>
                        <td><small>{{ $venue->city}}</small></td>
                        <td><small>{{ $venue->type}}</small></td>
                        <td><a href="{{ action('VenueController@show', $venue) }}" class="button is-light"><i class="fa fa-eye"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
