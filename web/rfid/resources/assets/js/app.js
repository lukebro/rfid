
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('line-graph', require('./components/LineGraph.vue'));
Vue.component('modal', require('./components/Modal.vue'));

window.Bus = new Vue({});

const app = new Vue({
    el: '#app',

    mounted() {
        this.$on('modal', name => {
            Bus.$emit('modal', name);
        });
    }
});
