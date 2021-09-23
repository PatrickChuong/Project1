require('./bootstrap');

//import Components from 'laravel-mix/src/components/Components';
//import "./bootstrap";
import Vue from 'vue';
import Example from './components/Example/Example.vue';

//window.Vue = require('vue');

Vue.component('example',Example);

const app = new Vue({
    el: "#abc",
});