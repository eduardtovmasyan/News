require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import Menu from './menu.vue'
import Home from "./components/home.vue"

let r = [
	{path: '/' , component: Menu},
	{path: '/main' , component: Home},
]

let router = new VueRouter({
	routes: r,
	mode: 'history'
})

let vm = new Vue(Vue.util.extend({router:router}, Menu)).$mount('#app');
