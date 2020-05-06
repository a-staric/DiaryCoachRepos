/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



import Vue from 'vue'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'

Vue.use(VueMaterial)

Vue.component('my-student', require('./components/StudentIndex.vue').default);
Vue.component('avatar-student', require('./components/AvatarStudent.vue').default);
Vue.component('progress-student', require('./components/ProgressStudent.vue').default);





const app = new Vue({
    el: '#app',
});
