import './bootstrap';
import './parallax';
import './venobox';
import './core';
// import 'particles.js/particles.js';
import './akita-particles.js';
import { createApp, h } from 'vue';
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import '../sass/app.scss'

// import Vue from 'vue';
// Vue.component('navbar', require('./components/Navbar.vue').default);
// Vue.component('articles', require('./components/articles.vue').default);
// Vue.component('users', require('./components/Users.vue').default);
// const app = new Vue({
// el: '#content-wrapper'
// });
// import { createApp } from 'vue'
// window.Vue = require('vue');
// InertiaProgress.init();


// import Im from './Pages/Im.vue';

// Vue.component('im', require('./Pages/Im.vue').default);

// const app = new Vue({
//     el: '#content-wrapper'
// });
// const app = createApp({})
// app.component('im', Im)
// app.mount('#content-wrapper')


// InertiaProgress.init()

// createInertiaApp({
//   resolve: (name) => require(`./Pages/${name}.vue`),
//   setup({ el, App, props, plugin }) {
//       createApp({ render: () => h(App, props) })
//           .use(plugin)
//           .mount(el);
//   },
// });