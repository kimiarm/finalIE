<template>
    <div>
        <router-link  class="btn btn-defualt" :to="{name: 'createProduct'}">Create New Product</router-link>
        <br>
        <router-link to="/vue"><a>Back to the root</a></router-link>
        <div class="d-flex flex-column">
            <div class="d-flex flex-row justify-content-around">
                <div v-for="item in this.items1">
                    <adminProduct  v-bind:brand="item.brand"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.discount"
                                   v-bind:id="item.id"
                                   v-bind:src="item.src"
                    ></adminProduct><div>&nbsp;</div></div>
            </div>
            <div class="d-flex flex-row justify-content-around">
                <div v-for="item in this.items2">
                    <adminProduct  v-bind:brand="item.brand"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.discount"
                                   v-bind:id="item.id"
                                   v-bind:src="item.src"
                    ></adminProduct><div>&nbsp;</div></div>
            </div>
            <div class="d-flex flex-row justify-content-around">
                <div v-for="item in this.items3">
                    <adminProduct  v-bind:brand="item.brand"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.discount"
                                   v-bind:id="item.id"
                                   v-bind:src="item.src"
                    ></adminProduct><div>&nbsp;</div></div>
            </div>
            <div class="d-flex flex-row justify-content-around">
                <div v-for="item in this.items4">
                    <adminProduct  v-bind:brand="item.brand"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.discount"
                                   v-bind:id="item.id"
                                   v-bind:src="item.src"
                    ></adminProduct><div>&nbsp;</div></div>
            </div>
        </div>
    </div>

</template>
<script>
    import adminProduct from './adminProduct.vue';
    import axios from 'axios'
    import VueAxios from 'vue-axios'
    export default {
        data () {
            return {
                message: 'Hoera!!!!',
                disscount: '10%' ,

                items1 : [],
                items : [],
                items2 : [],
                items3 : [],
                items4 : [],
            };
        },
        created: function()
        {
            this.fetchItems();
        },
        components: {
            adminProduct
        },

        methods: {
            fetchItems()
            {
                let uri = 'http://127.0.0.1:8000/api/v1/products';
                let i = 0 , j ;
                axios.get('http://127.0.0.1:8000/api/v1/products').then((response) => {
                    this.items = response.data;
                    for(j= 0 ; j<16 ; j+=4){
                        this.items1.push(this.items[j])
                        this.items2 .push(this.items[j+1])
                        this.items3.push(this.items[j+2])
                        this.items4.push(this.items[j+3])

                    }

                });

            },
            deleteItem(id)
            {

                let uri = `http://localhost:8000/items/${id}`;
                this.items.splice(id, 1);
                this.axios.delete(uri);
            }
        }
    };
</script>