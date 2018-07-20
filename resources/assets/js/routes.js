/**
 * Created by asus on 7/20/2018.
 */
import Home from './components/Home.vue';
import Example from './components/Example.vue';
export const routes = [
    { path: '/shop', component: Home, name: 'Home' },
    { path: '/shop/example', component: Example, name: 'Example' }
];
