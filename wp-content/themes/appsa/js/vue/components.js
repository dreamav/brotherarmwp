import Vue from 'vue';
import Accounts from './accounts.vue';

// window.axios = require('axios');
Vue.config.devtools = true

Vue.component('Accounts', Accounts);

new Vue({
  el: '#accounts',
})