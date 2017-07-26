@extends('layouts.app')

@section('content')
    <section class="section" id="app">

        <div class="block">
            <a href="{{ action('VenueController@index') }}" class="button">
                <span class="icon"><i class="fa fa-fv fa-times"></i></span>
            </a>

            <a href="{{ action('VenueController@edit', $venue) }}" class="button is-primary">
                <span class="icon"><i class="fa fa-edit"></i></span>
                <span>Edit This Venue</span>
            </a>
        </div>

        <hr>

        <div class="title">{{ $venue->name }} ({{ $venue->type }})</div>
        <div class="subtitle">{{ $venue->address }}</div>
        <div class="subtitle">{{ $venue->city }}</div>

        <div id="mapContainer" class="panel">
            <div id="map"></div>
            <div id="crosshair"><img src="/img/crosshair.png"></div>
        </div>

        <hr>

        <div class="field">
            <form action="{{ action('VenueController@destroy', $venue) }}" method="post"
                onsubmit="return confirm('Are you sure?')">

                {{ csrf_field() }}

                {{ method_field('DELETE') }}

                <button type="submit" class="button is-danger">
                    <span class="icon"><i class="fa fa-fv fa-trash"></i></span>
                    <span>Delete This Venue</span>
                </button>
            </form>
        </div>

    </section>

    @push('scripts')
        <script>
            var createMap = function() {
              var map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng({{ $venue->lat }}, {{ $venue->lng }}),
                draggable: false,
                scrollwheel: false,
                keyboardShortcuts: false,
                zoom: 18,
              })
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY') }}&amp;callback=createMap" async defer></script>
    @endpush
@endsection
