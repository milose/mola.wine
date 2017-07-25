@extends('layouts.app')

@section('content')
    <div id="app">
        <div class="title cc">Mola Wine Network</div>

        <div class="box">
            <div id="map" class="mb"></div>

            <div class="mb">
                <div class="field-body">
                    <button href="#map" @click="loadMarkers(allVenues)" :disabled="filtered ? false : true" class="button is-primary mrh">
                        <i class="fa fa-fv fa-globe"></i> &nbsp; Show All Venues
                    </button>

                    <button href="#map" @click="showCurrentLocation" class="button is-primary">
                        <i :class="readingLocation ? 'fa fa-fv fa-spinner' : 'fa fa-fv fa-location-arrow'"></i> &nbsp; Show Current Location
                    </button>
                </div>
            </div>

            <div class="mb">
                <div class="mbh"><strong>Filter by City</strong></div>

                <div class="mbh">
                    <span v-for="city in citiesOfAll" :class="_.includes(citiesOfVisible, city) ? 'tag is-light-blue mrh' : 'tag is-visible mrh'">
                        <strong><a href="#map" @click="loadMarkersForCity(city)">@{{ city }}</a></strong>
                    </span>
                </div>

                <div class="mbh"><strong>Search Venues</strong></div>

                <form class="field is-horizontal" @submit.prevent="loadMarkersFromSearch">
                    <div class="field has-addons">
                        <div class="control">
                            <input class="input" type="text" placeholder="Search" v-model="needle" @keyup.enter="blurInput">
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-info">
                                <i class="fa fa-fw fa-search"></i>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div class="section">
            <div class="columns is-multiline">

                <div class="column is-one-third-tablet is-one-quarter-desktop" v-for="venue in visibleVenues">
                    <div class="card">
                        <div class="card-content location">
                            <div class="location__left"><i class="fa fa-fw fa-map-marker"></i></div>
                            <div class="location__right">
                                <p class="title">@{{ venue.name }}</p>
                                <p class="subtitle">
                                    @{{ venue.address }}
                                    <br>
                                    @{{ venue.city }}
                                </p>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <p class="card-footer-item cc">
                                <span>
                                    <a href="#map" @click="showVenue(venue)" class="button is-primary">
                                        <i class="fa fa-fw fa-map-o"></i>
                                    </a>
                                    <br>
                                    <small>Show on Map</small>
                                </span>
                            </p>
                            <p class="card-footer-item cc">
                                <span>
                                    <a :href="'https://maps.google.com/maps/@' + venue.lat + ',' + venue.lng + ',20z'" class="button is-primary" target="_blank">
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
