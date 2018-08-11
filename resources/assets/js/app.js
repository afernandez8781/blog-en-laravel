require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';

import router from './routes';

// require('vue2-animate/dist/vue2-animate.min.css');

Vue.component('post-header', require('./components/PostHeader'));
Vue.component('posts-list', require('./components/PostsList'));
Vue.component('posts-list-item', require('./components/PostsListItem'));
Vue.component('nav-bar', require('./components/NavBar'));
Vue.component('category-link', require('./components/CategoryLink'));
Vue.component('tag-link', require('./components/TagLink'));
Vue.component('post-link', require('./components/PostLink'));
Vue.component('disqus-comments', require('./components/DisqusComments'));
Vue.component('paginator', require('./components/Paginator'));
Vue.component('pagination-links', require('./components/PaginationLinks'));
Vue.component('social-links', require('./components/SocialLinks'));
Vue.component('contact-form', require('./components/ContactForm'));

const app = new Vue({
    el: '#app',
    router
});


