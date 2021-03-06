
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);





Vue.component('icon', require('./components/Icon.vue'));
Vue.component('subheader', require('./components/Subheader.vue'));
Vue.component('overview-table', require('./components/OverviewTable.vue'));
Vue.component('devices', require('./components/Devices.vue'));
Vue.component('create-device', require('./components/devices/create.vue'));
Vue.component('edit-device', require('./components/devices/edit.vue'));
Vue.component('lectures-table', require('./components/lecture/table.vue'));
Vue.component('my-lectures', require('./components/lecture/my.vue'));
Vue.component('edit-lecture', require('./components/lecture/edit.vue'));
Vue.component('create-announcement', require('./components/announcement/create.vue'));
Vue.component('edit-announcement', require('./components/announcement/edit.vue'));
Vue.component('broadcast-table', require('./components/broadcast/index.vue'));
Vue.component('create-lecture', require('./components/lecture/create.vue'));
Vue.component('create-broadcast', require('./components/broadcast/create.vue'));
Vue.component('edit-broadcast', require('./components/broadcast/edit.vue'));
Vue.component('settings', require('./components/settings/index.vue'));
Vue.component('devices-modal', require('./components/devices-modal.vue'));
Vue.component('register-form', require('./components/auth/register.vue'))
Vue.component('edit-profile', require('./components/profile/edit.vue'));
Vue.component('change-pass', require('./components/auth/change-pass.vue'));
Vue.component('users-list', require('./components/users/index.vue'));
Vue.component('user', require('./components/users/show.vue'));

// Passport
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
