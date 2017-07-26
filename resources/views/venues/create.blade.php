@extends('layouts.app')

@section('content')
    <section class="section" id="app">

        <div class="field">
            <a href="{{ action('VenueController@index') }}" class="button">
                <span class="icon"><i class="fa fa-fv fa-times"></i></span>
            </a>
        </div>

        <hr>

        <div class="title">New Venue</div>

        <form action="{{ action('VenueController@store') }}" method="post">

            {{ csrf_field() }}

            @include('venues.form')

            <div class="field is-horizontal">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary">
                                <span class="icon"><i class="fa fa-plus"></i></span>
                                <span>Create a Venue</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </section>

    @push('scripts')
        <script>
            var mapCenterLocation = {
                lat: 42.44,
                lng: 19.25,
                zoom: 14,
            }
        </script>
        <script src="{{ $venueJs }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY') }}&amp;callback=app.createMap" async defer></script>
    @endpush
@endsection
