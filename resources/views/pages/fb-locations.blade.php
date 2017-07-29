@extends('layouts.headless')

@section('meta')
    <meta property="og:title" content="{{ env('APP_NAME') }}">
    <meta property="og:description" content="Mola - A boutique vinyard on a Rogami hill, on the outskirts of Podgorica - Montenegro.">
    <meta property="og:image" content="https://mola.wine/img/mola-oak.jpg">
    <meta property="og:url" content="https://mola.wine/?utm_source=meta-share">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">
    <meta property="fb:app_id" content="1588670211197528" />
    <meta property="fb:admins" content="559431022"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://mola.wine/img/mola-oak.jpg">
    <meta name="twitter:image:alt" content="{{ env('APP_NAME') }}">
    <meta name="twitter:creator" content="@milose_">
    <meta name="twitter:site" content="@website-username">
@endsection

@include('pages.partials.locations')
