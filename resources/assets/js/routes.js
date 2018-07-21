/**
 * Created by asus on 7/20/2018.
 */
import Home from './components/Home.vue';
import Example from './components/Example.vue';
import Products from './components/Products.vue';
import editProducts from './components/editProducts.vue';

export const routes = [
    { path: '/shop', component: Home, name: 'Home' },
    { path: '/shop/example', component: Example, name: 'Example' } ,
    { path: '/admin', component: Products, name: 'Products' } ,
    {path: '/admin/Products/edit/:id', component: editProducts, name: 'editProduct'}
];
