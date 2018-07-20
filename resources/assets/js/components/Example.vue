<template>
    <div><h3>This shows that the route is really working!!</h3>
        @{{ message }}
        <router-link to="/vue"><a>Back to the root</a></router-link>
        <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-end">
            <div v-for="item in this.items1">
                <Home  v-bind:brand="item.price"
                       v-bind:name="item.name"
                       v-bind:price="item.price"
                       v-bind:disscount="item.discount"
                ></Home><div>&nbsp;</div></div>
        </div>
            <div class="d-flex flex-row justify-content-end">
                <div v-for="item in this.items2">
                    <Home  v-bind:brand="item.price"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.discount"
                    ></Home><div>&nbsp;</div></div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <div v-for="item in this.items3">
                    <Home  v-bind:brand="item.price"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.discount"
                    ></Home><div>&nbsp;</div></div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <div v-for="item in this.items4">
                    <Home  v-bind:brand="item.price"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.discount"
                    ></Home><div>&nbsp;</div></div>
            </div>
        </div>
    </div>

</template>
<script>
    import Home from './Home.vue';
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
            Home
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
                        console.log(this.items4)
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