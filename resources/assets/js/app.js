import './bootstrap'
import Vue from 'vue'
import createMarker from './functions/createMarker.js'

window['Vue'] = Vue

const app = window['app'] = new Vue({
  el: '#app',

  data: {
    markers: [],
    infoWindow: {},
    icon: {},
    allLocations: [],
    visibleLocations: [],
    currentPosition: {
      lat: 42.5,
      lng: 19.3,
      zoom: 10,
    },
  },

  mounted() {
    // Get current position
    navigator.geolocation.getCurrentPosition(this.getCurrentPosition)

    // Load locations from the API
    axios.get('/api/locations')
      .then(response => {
        this.allLocations = response.data
        this.loadMarkers()
      })
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
        this.visibleLocations = []

        this.markers.forEach(marker => {
          if (bounds.contains(marker.getPosition())) {
            this.visibleLocations.push(this.allLocations.find(location => {
              return location.id == marker.id
            }))
          }
        })
      })

      this.infoWindow = new google.maps.InfoWindow

      this.icon = {
        url: '/img/mola.png',
        scaledSize: new google.maps.Size(32, 32),
      }
    },

    loadMarkers() {
      this.allLocations.forEach(location => {
        this.markers.push(createMarker(google, this.map, location, this.infoWindow, this.icon))
      })

      this.showAll()
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

    setLocation(selectedLocation) {
      this.map.setCenter(new google.maps.LatLng(selectedLocation.lat, selectedLocation.lng))
      this.map.setZoom(18)
    },

    showAll() {
      // set zoom and center to show all markers
      let totalBounds = new google.maps.LatLngBounds()

      this.markers.forEach(marker => totalBounds.extend(marker.getPosition()))
      this.map.setCenter(totalBounds.getCenter())
      this.map.fitBounds(totalBounds)
      this.map.setZoom(this.map.getZoom() - 1)
    }

  },

  computed: {
    filtered() {
      return this.allLocations > this.visibleLocations
    },
  },

})
