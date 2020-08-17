require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import Menu from './menu.vue'
import Ex from "./components/Ex.vue"

let r = [
	{path: '/menu' , component: Menu},
	{path: '/ex' , component: Ex},
]

let router = new VueRouter({
	routes: r,
	mode: 'history'
})

let vm = new Vue(Vue.util.extend({router:router}, Menu)).$mount('#app');
