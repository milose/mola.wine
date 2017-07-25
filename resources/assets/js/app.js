import './bootstrap'
import Vue from 'vue'
import createMarker from './functions/createMarker.js'

window['Vue'] = Vue

const app = window['app'] = new Vue({
  el: '#app',

  data: {
    icon: {},
    needle: '',
    markers: [],
    allVenues: [],
    infoWindow: {},
    visibleVenues: [],
    currentPosition: {
      lat: 42.5,
      lng: 19.3,
      zoom: 10,
    },
  },

  mounted() {
    // Get current position
    navigator.geolocation.getCurrentPosition(this.getCurrentPosition)
  },

  methods: {
    createMap() {
      // load map
      this.map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(this.currentPosition.lat, this.currentPosition.lng),
        scrollwheel: false,
        zoom: this.currentPosition.zoom,
      })

      // map listeners
      this.map.addListener('bounds_changed', () => {
        let bounds = this.map.getBounds()
        this.visibleVenues = []

        this.markers.forEach(marker => {
          if (bounds.contains(marker.getPosition())) {
            this.visibleVenues.push(this.allVenues.find(venue => {
              return venue.id == marker.id
            }))
          }
        })
      })

      this.infoWindow = new google.maps.InfoWindow

      this.icon = {
        url: '/img/mola-pin.png',
        scaledSize: new google.maps.Size(24, 34),
      }

      this.getVenuesFromApi()
    },

    getVenuesFromApi() {
      // Load locations from the API
      axios.get('/api/locations')
        .then(response => {
          this.allVenues = response.data
          this.loadMarkers()
        })
    },

    loadMarkers(locations = this.allVenues) {
      this.markers = []

      locations.forEach(location => {
        this.markers.push(createMarker(google, this.map, location, this.infoWindow, this.icon))
      })

      this.showMarkersOnMap()
    },

    getCurrentPosition(acquired) {
      this.currentPosition = {
        lat: acquired.coords.latitude,
        lng: acquired.coords.longitude,
        zoom: 14,
      }
      try {
        this.map.setCenter(new google.maps.LatLng(this.currentPosition.lat, this.currentPosition.lng))
      } catch (err) {}
    },

    showVenue(selectedVenue) {
      this.needle = ''

      this.map.setCenter(new google.maps.LatLng(selectedVenue.lat, selectedVenue.lng))
      this.map.setZoom(18)
    },

    showMarkersOnMap() {
      // set zoom and center to show all markers
      let totalBounds = new google.maps.LatLngBounds()

      this.markers.forEach(marker => totalBounds.extend(marker.getPosition()))
      this.map.setCenter(totalBounds.getCenter())
      this.map.fitBounds(totalBounds)
      let zoom = this.map.getZoom() - 1
      if (zoom > 18) zoom = 18
      this.map.setZoom(zoom)
    },

    loadMarkersForCity(city) {
      this.needle = ''

      this.loadMarkers([...new Set(this.allVenues.filter(venue => venue.city == city))]);
    },

    loadMarkersFromSearch() {
      let needle = this.needle.toLowerCase()

      this.loadMarkers([...new Set(this.allVenues.filter(venue => {
        return venue.name.toLowerCase().includes(needle) ||
          venue.address.toLowerCase().includes(needle) ||
          venue.city.toLowerCase().includes(needle)
      }))]);
    },

  },

  computed: {
    filtered() {
      return this.allVenues > this.visibleVenues
    },

    citiesOfVisible() {
      return [...new Set(this.visibleVenues.map(venue => venue.city))]
    },

    citiesOfAll() {
      return [...new Set(this.allVenues.map(venue => venue.city))]
    },

  },

})
