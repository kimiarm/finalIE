<template>
    <div class="d-flex flex-row">

        <div class="d-flex flex-column" >
            <div class="d-flex flex-row justify-content-center">
            <img :src="img" width="150" height="200"/>

                <div v-text="disscount" class="rounded-circle" style="background-color: #cc2255 ;width: 20% ;height: 50% ; color:white" ></div>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <small v-text="brand"></small>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <p v-text="name"></p>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <small class="" style="color: red" > قیمت بعد از تخفیف   </small> &nbsp; <del><small> قیمت قبل از تخفیف </small></del>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <p v-text="price"></p>
            </div>
        </div>

    </div>
</template>
<script>
    export default {
        props: ['brand' , 'name' , 'src' , 'price' , 'disscount'] ,
        data () {
            return {
                img : "../" + this.src
            };
        }
    };
</script>