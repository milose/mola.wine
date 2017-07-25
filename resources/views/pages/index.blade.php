@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="title">Mola Wine Network</div>

        <div class="box">
            <div id="map"></div>
        </div>

        <a href="#map" @click="showAll" :disabled="filtered ? false : true" class="button is-primary">
            <i class="fa fa-fv fa-globe"></i> &nbsp; Show All
        </a>

        <div class="section">
            <div class="columns is-multiline">

                <div class="column is-one-third-tablet is-one-quarter-desktop" v-for="loc in visibleLocations">
                    <div class="card">
                        <div class="card-content location">
                            <div class="location__left"><i class="fa fa-fw fa-map-marker"></i></div>
                            <div class="location__right">
                                <p class="title">@{{ loc.name }}</p>
                                <p class="subtitle">
                                    @{{ loc.address }}
                                    <br>
                                    @{{ loc.city }}
                                </p>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <p class="card-footer-item cc">
                                <span>
                                    <a href="#map" @click="setLocation(loc)" class="button is-primary">
                                        <i class="fa fa-fw fa-map-o"></i>
                                    </a>
                                    <br>
                                    <small>Show on Map</small>
                                </span>
                            </p>
                            <p class="card-footer-item cc">
                                <span>
                                    <a :href="'https://maps.google.com/maps/@' + loc.lat + ',' + loc.lng + ',20z'" class="button is-primary" target="_blank">
                                        <i class="fa fa-fw fa-external-link"></i>
                                    </a>
                                    <br>
                                    <small>Open in App</small>
                                </span>
                            </p>
                        </footer>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
