const app = window['app'] = new Vue({
  el: '#app',

  data: {
    currentLocation: window.mapCenterLocation,
    address: '',
  },

  methods: {
    createMap() {
      // load map
      this.map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(this.currentLocation.lat, this.currentLocation.lng),
        scrollwheel: false,
        zoom: this.currentLocation.zoom,
      })

      // map listeners
      this.map.addListener('bounds_changed', () => {
        let pos = this.map.getCenter()

        this.currentLocation.lat = pos.lat()
        this.currentLocation.lng = pos.lng()
      })
    },

    blurInput(event) {
      event.target.blur()
    },

    addressChanged: _.debounce(function (e) {
      this.locateAddress(this.address)
    }, 500),

    locateAddress(address) {
      let geocoder = new google.maps.Geocoder()

      geocoder.geocode({
        address
      }, (results, status) => {
        if (status === google.maps.GeocoderStatus.OK) {
          this.map.setCenter(results[0].geometry.location)
          this.map.setZoom(18)
        }
      })
    },

  },

})
