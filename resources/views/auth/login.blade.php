@extends('layouts.app')

@section('meta')
    <title>{{ config('app.name') . ' | Login' }}</title>
@endsection

@section('content')
<section class="hero is-bold">

    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Login
                    </h1>
                    <div class="box">
                        <form role="form" method="POST" action="{{ url('/login') }}">

                            {{ csrf_field() }}


                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Email</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input
                                                id="email"
                                                name="email"
                                                type="email"
                                                class="input {{ $errors->has('email') ? 'is-danger' : '' }}"
                                                value="{{ old('email') }}"
                                                placeholder="Email"
                                                required
                                                autofocus
                                            >

                                            @if ($errors->has('email'))
                                                <p class="help is-danger">
                                                    {{ $errors->first('email') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Password</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input
                                                id="password"
                                                name="password"
                                                type="password"
                                                class="input {{ $errors->has('password') ? 'is-danger' : '' }}"
                                                placeholder="Password"
                                                required
                                            >

                                            @if ($errors->has('password'))
                                                <p class="help is-danger">
                                                    {{ $errors->first('password') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-label"></div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <button type="submit" class="button is-primary">
                                                <span>Login</span>
                                            </button>
                                            <a href="{{ url('/password/reset') }}" class="button">Forgot password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
@endsection
