require('./bootstrap');
require('bootstrap');
require('moment');

/* Default dev-dependencies */
import Vue from 'vue';
import VueLazyload from 'vue-lazyload'
import { App, plugin } from '@inertiajs/inertia-vue';
import { InertiaProgress } from '@inertiajs/progress'
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
Vue.mixin({ methods: { route } });
Vue.use(plugin);
Vue.use(InertiaForm);
Vue.use(PortalVue);
InertiaProgress.init({
    // The delay after which the progress bar will
    // appear during navigation, in milliseconds.
    delay: 250,
  
    // The color of the progress bar.
    color: '#29d',
  
    // Whether to include the default NProgress styles.
    includeCSS: true,
  
    // Whether the NProgress spinner will be shown.
    showSpinner: false,
  })
  
// or with options
Vue.use(VueLazyload, {
    preLoad: 1.3,
    error: 'dist/error.png',
    loading: 'dist/loading.gif',
    attempt: 1
  })

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

/* Register Service Worker */
import './registerServiceWorker'

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
