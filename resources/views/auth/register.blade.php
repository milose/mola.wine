@extends('layouts.app')

@section('meta')
    <title>{{ config('app.name') . ' | Register' }}</title>
@endsection

@section('content')
<section class="hero is-bold">

    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Register an Account
                    </h1>
                    <div class="box">

                        <form role="form" method="POST" action="{{ url('/register') }}">

                            {{ csrf_field() }}

                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Name</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input
                                                id="name"
                                                name="name"
                                                type="text"
                                                class="input {{ $errors->has('name') ? 'is-danger' : '' }}"
                                                value="{{ old('name') }}"
                                                placeholder="Name"
                                                required
                                                autofocus
                                            >

                                            @if ($errors->has('name'))
                                                <p class="help is-danger">
                                                    {{ $errors->first('name') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                <div class="field-label is-normal">
                                    <label class="label">Confirm Password</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                type="password"
                                                class="input"
                                                placeholder="Confirm Password"
                                                required
                                            >
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
                                                <span>Register</span>
                                            </button>
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
