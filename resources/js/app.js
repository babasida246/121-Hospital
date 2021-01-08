require('./bootstrap');
require('bootstrap');
require('moment');

/* Default dev-dependencies */
import Vue from 'vue';
import { App, plugin } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
Vue.mixin({ methods: { route } });
Vue.use(plugin);
Vue.use(InertiaForm);
Vue.use(PortalVue);


/* Font-Awesome */
import '@fortawesome/fontawesome-free';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fab } from '@fortawesome/free-brands-svg-icons';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
library.add(fab, fas, far)
Vue.component('font-awesome-icon')

/* Custom dev-dependencies */
/* Vuesax */
import Vuesax from 'vuesax'
Vue.use(Vuesax)
import 'material-icons/iconfont/material-icons.css';

/* Bootstrap-Vue */
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

/* VueSmoothScroll */
import VueSmoothScroll from 'vue2-smooth-scroll'
Vue.use(VueSmoothScroll)

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(App, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
