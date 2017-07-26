@extends('layouts.app')

@section('content')
    <section class="section" id="app">

        <div class="block">
            <a href="{{ action('VenueController@show', $venue) }}" class="button">
                <span class="icon"><i class="fa fa-fv fa-times"></i></span>
            </a>
        </div>

        <hr>

        <div class="title">Update Venue</div>

        <form action="{{ action('VenueController@update', $venue) }}" method="post">

            {{ csrf_field() }}

            {{ method_field('PATCH') }}

            @include('venues.form')

            <div class="field is-horizontal">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary">
                                <span class="icon"><i class="fa fa-save"></i></span>
                                <span>Update Venue</span>
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
                lat: {{ $venue->lat }},
                lng: {{ $venue->lng }},
                zoom: 18,
            }
        </script>
        <script src="{{ $venueJs }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_KEY') }}&amp;callback=app.createMap" async defer></script>
    @endpush
@endsection
