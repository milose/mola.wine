const app = window['app'] = new Vue({
  el: '#app',

  data: {
    currentLocation: window.mapCenterLocation,
    readingLocation: false,
  },

  methods: {
    createMap() {
      // load map
      this.map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(this.currentLocation.lat, this.currentLocation.lng),
        scrollwheel: false,
        zoom: this.currentLocation.zoom,
      })

      console.log(this.map)

      // map listeners
      this.map.addListener('bounds_changed', () => {
        let pos = this.map.getCenter()

        this.currentLocation.lat = pos.lat()
        this.currentLocation.lng = pos.lng()
      })
    },

    showCurrentLocation() {
      this.readingLocation = true

      // read current location
      navigator.geolocation.getCurrentPosition(acquired => {
          this.currentLocation = {
            lat: acquired.coords.latitude,
            lng: acquired.coords.longitude,
            zoom: 18,
          }

          // center map
          try {
            this.map.setCenter(new google.maps.LatLng(this.currentLocation.lat, this.currentLocation.lng))
            this.map.setZoom(this.currentLocation.zoom)
          } catch (err) {}

          this.readingLocation = false
        },
        () => {
          this.readingLocation = false
        })
    },

    blurInput(event) {
      event.target.blur()
    }

  },

})
