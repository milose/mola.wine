import _ from 'lodash'
import axios from 'axios'
import Vue from 'vue'
import navbarToggle from './functions/navbarToggle'

window['_'] = _
window['axios'] = axios
window['Vue'] = Vue

window['defaultLocation'] = {
  lat: 42.44,
  lng: 19.25,
  zoom: 10,
}

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

let token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

window.addEventListener('DOMContentLoaded', () => {
  navbarToggle()
}, true)
