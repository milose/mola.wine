'use strict'

export default (google, map, item, infoWindow, icon) => {
  const marker = new google.maps.Marker({
    id: item.id,
    map: map,
    position: new google.maps.LatLng(item.lat, item.lng),
    icon: icon,
  })

  marker.addListener('click', () => {
    infoWindow.setContent(boxContent(item))
    infoWindow.open(map, marker)
  })

  return marker
}

let boxContent = (item) => {
  const box = document.createElement('div')
  const title = document.createElement('div')
  const content = document.createElement('div')
  const ctaIcon = document.createElement('i')
  const cta = document.createElement('a')

  title.className = 'bb mbh'
  title.textContent = item.name

  content.className = 'mb'
  content.textContent = item.address

  ctaIcon.className = 'fa fa-fv fa-external-link'

  cta.href = `https://maps.google.com/maps?ll=${item.lat},${item.lng}`
  cta.target = '_blank'
  cta.className = 'button is-primary is-small'
  cta.innerHTML = 'Open in App &nbsp;'
  cta.appendChild(ctaIcon)

  box.appendChild(title)
  box.appendChild(content)
  box.appendChild(cta)

  return box;
}
