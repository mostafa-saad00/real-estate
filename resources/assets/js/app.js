
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

import { Form, HasError, AlertError } from 'vform'

import swal from 'sweetalert2'

window.swal = swal;



const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  
});

window.toast = toast;




window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import objectToFormData from 'object-to-formdata';
window.objectToFormData = objectToFormData;
import VueRouter from 'vue-router'

Vue.use(VueRouter)

window.Fire = new Vue();




let routes = [
  { path: '/admin', component: require('./components/dashboard.vue') },
  { path: '/properties', component: require('./components/PropertyAll.vue') },
  { path: '/dashboard', component: require('./components/dashboard.vue') },
  { path: '/message', component: require('./components/Message.vue') },
  { path: '/bookingrequest', component: require('./components/Bookingrequest.vue') },
  { path: '/profile', component: require('./components/Profile.vue') },
  { path: '/add_user', component: require('./components/Adduser.vue') },
  { path: '/add-property', component: require('./components/AddProperty.vue') },
  
]


const router = new VueRouter({
	mode: "history",
  routes // short for `routes: routes`
})




Vue.component('example-component', require('./components/ExampleComponent.vue'));



const app = new Vue({
    el: '#app',
    data: {
    	showModal: false,
    	options: ['Admin', 'Super Admin', 'User']
    },
    router
});
