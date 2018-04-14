window.Vue = require('vue')

window.axios = require('axios')

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
}

import Box from './components/box.vue'

new Vue({

    el: '#vue-app',

    components: {
        Box
    }
})
