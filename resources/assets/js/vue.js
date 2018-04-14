window.Vue = require('vue')

window.axios = require('axios')

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
}

import Example from './components/Example.vue'

new Vue({

    el: '#vue-app',

    components: {
        Example
    }
})
