import './bootstrap';
import './parallax';
import './venobox';
import './core';
// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
const vuetify = createVuetify({
    components,
    directives,
})

// import 'particles.js/particles.js';
import './akita-particles.js';
// import { createApp } from 'vue';
// import { createInertiaApp } from "@inertiajs/inertia-vue3";
// import { InertiaProgress } from "@inertiajs/progress";
import '../sass/app.scss';

import { createRouter, createWebHistory } from 'vue-router';
import { createApp } from 'vue/dist/vue.esm-bundler';

import Sidebar from './components/Sidebar.vue';
import IM from './components/IM.vue';
import Resume from './components/Resume.vue';
import Contact from './components/Contact.vue';

const routes = [
    { 
        path: '/', 
        component: IM,
        meta: { transition: 'fade' }
    },
    { 
        path: '/resume', 
        component: Resume,
        meta: { transition: 'fade' }
    },
    { 
        path: '/contact', 
        component: Contact,
        meta: { transition: 'fade' }
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});


const app = createApp({
})
app.component('im', IM)
app.component('resume', Resume)
app.component('sidebar', Sidebar)

app.use(router);
app.use(vuetify)
app.mount('#app');
