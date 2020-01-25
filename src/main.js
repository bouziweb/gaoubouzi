import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import {routes} from './router.js'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)
   
Vue.config.productionTip = false

Vue.use(VueRouter);
const router =new VueRouter({
   routes,
   mode:'history',
   linkActiveClass: "active",
  linkExactActiveClass: "exact-active",
});

new Vue({
  el: '#app',
  router,
  render: h => h(App)
});
