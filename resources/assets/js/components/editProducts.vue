<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit Product</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">

                        <div class=" form-group">
                            <label class="control-label">Product name</label>
                            <input type="text" v-model="product.name" class="form-control">
                        </div>


                        <div class=" form-group">
                            <label class="control-label">Product brand</label>
                            <input type="text" v-model="product.brand" class="form-control">
                        </div>


                        <div class=" form-group">
                            <label class="control-label">Product price</label>
                            <input type="text" v-model="product.price" class="form-control">
                        </div>


                        <div class=" form-group">
                            <label class="control-label">Product disscount</label>
                            <input type="text" v-model="product.disscount" class="form-control">
                        </div>


                        <div class=" form-group">
                            <button class="btn btn-success">Update</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    import VueAxios from 'vue-axios'
    export default {

        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.productId = id;
            axios.get('/api/v1/products/' + id)
                .then(function (resp) {
                    app.product = resp.data;

                })
                .catch(function () {
                    alert(id)
                });
        },
        data: function () {
            return {
                product: null,
                product: {
                    name: '',
                    brand: '',
                    price: '',
                    disscount: '',
                }
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newProduct = app.product;
                axios.patch('/api/v1/products/' + app.productId, newProduct)
                    .then(function (resp) {

                    //    app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);

                    });
            }
        }
    }
</script>