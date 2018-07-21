<template>
    <div >
<div class="d-flex flex-row-reverse justify-content-center">

<div class="d-flex flex-column" style="width: 20% ;background-color: #2e6da4">
    <div class="d-flex flex-column align-items-center"  style="background-color: #cc2255" dir="rtl">

    <h2>براساس برند </h2>
    <input type="text" style="width: 90% ; height:50px" width="80%" placeholder="جستجوی برند">
        <br>

    </div>
    <div class="d-flex flex-column align-items-center"  style="background-color: #1c7430" dir="rtl">
        <h2>رنگ </h2>
        <div class="d-flex flex-column align-content-between" style="width: 100%">
            <div class="d-flex flex-row justify-content-around " >
                <div>
                <button style="width: 50px; height: 50px ; background-color: #cc2255">

                </button>
                </div>
                <div>

                <button style="width: 50px ; height: 50px ; background-color: #2e6da4">

                </button>
                </div>
                <div>
                <button style="width: 50px ; height: 50px ; background-color: #002752">

                </button>
                </div>
                <div>
                <button style="width: 50px ; height: 50px ; background-color: #985f0d">

                </button>
                </div>
                <div>
                <button style="width: 50px ; height: 50px ; background-color: #171a1d">

                </button>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around " >
                <div>
                    <button style="width: 50px; height: 50px ; background-color: #cc2255">

                    </button>
                </div>
                <div>

                    <button style="width: 50px ; height: 50px ; background-color: #2e6da4">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #002752">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #985f0d">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #171a1d">

                    </button>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around " >
                <div>
                    <button style="width: 50px; height: 50px ; background-color: #cc2255">

                    </button>
                </div>
                <div>

                    <button style="width: 50px ; height: 50px ; background-color: #2e6da4">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #002752">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #985f0d">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #171a1d">

                    </button>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around " >
                <div>
                    <button style="width: 50px; height: 50px ; background-color: #cc2255">

                    </button>
                </div>
                <div>

                    <button style="width: 50px ; height: 50px ; background-color: #2e6da4">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #23527c">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #721c24">

                    </button>
                </div>
                <div>
                    <button style="width: 50px ; height: 50px ; background-color: #17a2b8">

                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

        <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-end">
            <div v-for="item in this.items1">
                <Home  v-bind:brand="item.price"
                       v-bind:name="item.name"
                       v-bind:price="item.price"
                       v-bind:disscount="item.disscount"
                       v-bind:src="item.src"
                ></Home><div>&nbsp;</div></div>
        </div>
            <div class="d-flex flex-row justify-content-end">
                <div v-for="item in this.items2">
                    <Home  v-bind:brand="item.price"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.disscount"
                           v-bind:src="item.src"
                    ></Home><div>&nbsp;</div></div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <div v-for="item in this.items3">
                    <Home  v-bind:brand="item.price"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.disscount"
                           v-bind:src="item.src"
                    ></Home><div>&nbsp;</div></div>
            </div>
            <div class="d-flex flex-row justify-content-end">
                <div v-for="item in this.items4">
                    <Home  v-bind:brand="item.price"
                           v-bind:name="item.name"
                           v-bind:price="item.price"
                           v-bind:disscount="item.disscount"
                           v-bind:src="item.src"
                    ></Home><div>&nbsp;</div></div>
            </div>
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