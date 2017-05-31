window.Vue = require('vue')

window.axios = require('axios')

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
}

import VueSticky from 'vue-sticky'
import Example from './components/Example.vue'
import DraggableExample from './components/draggable-example.vue'

new Vue({

    el: '#vue-app',

    components: {
        Example,
        DraggableExample
    },

    directives: {
        'sticky': VueSticky,
    },
})
