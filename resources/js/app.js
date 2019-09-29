/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueRouter from 'vue-router';
import HomeComponent from './views/HomeComponent.vue';
import ProjectsComponent from './views/ProjectsComponent.vue';
import AboutComponent from './views/AboutComponent.vue';

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('modal-component', require('./views/ModalComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//add plugins
Vue.use(VueRouter);

//set up routes
const routes = [
	{ path: '/', name: 'home', component: HomeComponent },
	{ path: '/projects', name: 'projects', component: ProjectsComponent },
	{ path: '/about', name: 'about', component: AboutComponent },
	{ path: '*', component: HomeComponent }
];

const router = new VueRouter({ routes, mode: 'history' });

const app = new Vue({
	el      : '#app',
	data    : {
		title : ''
	},
	router,
	methods : {
		projectModal(value) {
			this.title = value;
			$('#pmodal').modal();
		}
	}
});
