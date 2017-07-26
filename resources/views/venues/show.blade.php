@extends('layouts.app')

@section('content')
    <section class="section">

        <div class="field">
            <a href="{{ action('VenueController@index') }}" class="button">
                <span class="icon"><i class="fa fa-fv fa-times"></i></span>
            </a>
        </div>

        <hr>

        <div class="title">{{ $venue->name }} ({{ $venue->type }})</div>
        <div class="subtitle">{{ $venue->address }}</div>
        <div class="subtitle">{{ $venue->city }}</div>

        <div class="panel">map</div>

        <hr>

        <div class="field">
            <form action="{{ action('VenueController@destroy', $venue) }}" method="post"
                onsubmit="return confirm('Are you sure?')">

                {{ csrf_field() }}

                {{ method_field('DELETE') }}

                <button type="submit" class="button is-danger">
                    <span class="icon"><i class="fa fa-fv fa-trash"></i></span>
                    <span>Delete this venue</span>
                </button>
            </form>
        </div>

    </section>
@endsection
