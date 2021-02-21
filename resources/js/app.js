import VueAxios from 'vue-axios'
import axios from 'axios'
import VueI18n from 'vue-i18n'
import i18n from '../../src/i18n'
import CountryFlag from 'vue-country-flag'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faFacebook, faTwitter, faInstagram } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faFacebook, faTwitter, faInstagram)

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue components
Vue.component('country-flag', CountryFlag)
Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.component('NavbarWeb', require('./Components/Web/Navbar/Navbar.vue').default);
Vue.component('ContentWeb', require('./Components/Web/Content/Content.vue').default);
Vue.component('FooterWeb', require('./Components/Web/Footer/Footer.vue').default);
Vue.component('AboutWeb', require('./Components/Web/About/About.vue').default);
Vue.component('EquipmentWeb', require('./Components/Web/Equipment/Equipment.vue').default);
// Vue.component('NavbarAdmin', require('./Components/Admin/Navbar/Navbar.vue').default);
// Vue.component('ContentAdmin', require('./Components/Admin/Content/Content.vue').default);
// Vue.component('FooterAdmin', require('./Components/Admin/Footer/Footer.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueI18n)
Vue.use(VueAxios, axios);

const app = new Vue({
    el: '#app',
    i18n,
});
