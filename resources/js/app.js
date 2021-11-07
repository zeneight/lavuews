require('./bootstrap');
// core
import Vue from 'vue'
import VueRouter from 'vue-router'
import { BootstrapVue } from 'bootstrap-vue'
// custom import
import routes from './routes'
import App from './components/App.vue'
// import './theme.js'

// Import Bootstrap an BootstrapVue CSS
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// use it
Vue.use(VueRouter)
Vue.use(BootstrapVue)

// import Vuetify from 'vuetify'
// Vue.use(Vuetify)

const app = new Vue({
    el: '#app',
    components: { App },
    router: new VueRouter(routes)
    // vuetify: new Vuetify()
})
