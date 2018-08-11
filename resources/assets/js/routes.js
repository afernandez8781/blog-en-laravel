import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export default new Router({
	routes: [
		{
			path: '/',
			name: 'home',
			component: require('./views/Home')
		},
		{
			path: '/nosotros',
			name: 'about',
			component: require('./views/About')
		},
		{
			path: '/archivo',
			name: 'archive',
			component: require('./views/Archive')
		},
		{
			path: '/contacto',
			name: 'contact',
			component: require('./views/Contact')
		},
		{
			path: '/blog/:url',
			name: 'posts_show',
			component: require('./views/PostsShow'),
			props: true
		},
		{
			path: '/categorias/:category',
			name: 'category_posts',
			component: require('./views/CategoryPosts'),
			props: true
		},
		{
			path: '/etiquetas/:tag',
			name: 'tags_posts',
			component: require('./views/TagsPosts'),
			props: true
		},
		{
			path: '*',
			component: require('./views/404')
		}
	],
	linkExactActiveClass: 'active',
	mode: 'history',
	scrollBehavior(){
		return {x:0, y:0}
	}
});