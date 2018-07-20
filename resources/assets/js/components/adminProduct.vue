<template>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" :src="def" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title font-weight-bold">Girls T-shirt</h4>
                <p class="card-text">This is a T-shirt</p>
                <button type="button" class="btn btn-danger" v-on:click="deleteItem(this.id)">Delete</button>
                <button type="button" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-default" >Comments</button>
            </div>
        </div>

</template>
<script>
    export default {
        props: ['brand' , 'name' , 'img' , 'price' , 'disscount' , 'id'] ,
        data () {
            return {
                        def : '../s.jpg'
            };
        } ,
        methods : {
            destroy(){
                let uri = `http://localhost:8000/productes/${id}`;

                this.axios.delete(uri);
            }
        }
    };
</script>