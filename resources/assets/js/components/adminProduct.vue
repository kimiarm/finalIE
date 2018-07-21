<template>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" :src="this.img" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title font-weight-bold" v-text="this.name">Girls T-shirt</h4>
                <p class="card-text" v-text="this.brand">This is a T-shirt</p>
                <button type="button" class="btn btn-danger" v-on:click="deleteItem(this.id)">Delete</button>
                <router-link :to="{name: 'editProduct', params: {id: this.id}}" class="btn btn-xs btn-success">Edit</router-link>

                <button type="button" class="btn btn-default" >Comments</button>
            </div>
        </div>

</template>
<script>
    export default {
        props: ['brand' , 'name' , 'src' , 'price' , 'disscount' , 'id' ] ,
        data () {
            return {
                        def : '../s.jpg' ,
                        img : "../" + this.src
            };
        } ,
        created(){
console.log(this)
        } ,
        methods : {
            destroy(id){
                let uri = `http://localhost:8000/productes/${id}`;

                this.axios.delete(uri);
            } ,
            edit(id)
            {
                this.$router.push({path : '/shop'})
            } ,
             comments(id){

             }
        }
    };
</script>