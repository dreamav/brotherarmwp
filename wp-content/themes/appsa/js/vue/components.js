import Vue from 'vue';
import Accounts from './accounts.vue';

// window.axios = require('axios');
Vue.config.devtools = false

Vue.component('Accounts', Accounts);

new Vue({
  el: '#accounts',
})