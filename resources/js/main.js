import Vue from 'vue'

import App from './components/AppComponent.vue'

Vue.config.productionTip = false

new Vue({
    render: (createElement) => {
        return createElement(App)
    },
    components: { App }
}).$mount('#root')