

import Vue from 'vue'

import Panel from './components/Panel.vue'

 new Vue({
    el: '#app',
    components: {Panel},
    created: function () {
        
        console.log('se ejecuta el created de instancia principal')
        
    },
});



