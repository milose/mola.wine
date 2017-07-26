@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="title">Welcome {{ auth()->user()->name }}</div>
        <hr>
        <div><a href="{{ action('VenueController@index') }}" class="button is-primary"><i class="fa fa-fv fa-map-marker"></i> &nbsp; Venues</a></div>
        <hr>
        <div><a href="{{ action('Auth\RegisterController@showRegistrationForm') }}" class="button is-warning"><i class="fa fa-fv fa-plus"></i> &nbsp; Add new user</a></div>
        <hr>
        <div>
            <form action="{{ action('Auth\LoginController@logout') }}" method="post">

                {{ csrf_field() }}

                <button type="submit" class="button is-danger"><i class="fa fa-fv fa-sign-out"></i> &nbsp; Logout</button>
            </form>
        </div>
    </section>
@endsection
