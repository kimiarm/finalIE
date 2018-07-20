/**
 * Created by asus on 7/20/2018.
 */


import Vue from 'vue'
import VueRouter from 'vue-router';
import Home from './components/Home.vue';
import { routes } from './routes';
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes
});
new Vue({
    el: '#app',
    router
});
