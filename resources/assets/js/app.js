
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.use(VueRouter)
Vue.use(VueResource)

const App 		= Vue.extend({})

const Home = {
  template: 'Welcome to the <b>home page</b>!'
}

const People = {
  template: 'Look at all the people who work here!'
}

const routes = [
	{ path: '/', component: Home },
	{ path: '/people', component: People }
]

const router = new VueRouter({
  routes // short for routes: routes
})

// 4. Create and mount the root instance.
// Make sure to inject the router with the router option to make the
// whole app router-aware.
const app = new Vue({
  router
}).$mount('#app')
