import Alpine from 'alpinejs'

window.Alpine = Alpine

import MenuCanvas from './menu-canvas'

Alpine.data('MenuCanvas', MenuCanvas)

Alpine.start()

console.log('Alpine dir loaded')