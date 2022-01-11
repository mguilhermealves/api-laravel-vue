require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue';
import router from './routes/routers'
import store from './vuex/store'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/**
 * components globais
 */

Vue.component('app-component', require('./components/App'). default)

const app = new Vue({
    router,
    store,
    el: '#app',
});
