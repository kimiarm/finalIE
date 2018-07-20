<template>
  <div class="slider">
    <br/>
    <br/>
    <div class="border">
      <carousel >
      <slide>
<img :src="src" class="slider">
      </slide>
      <slide >
        <img :src="src" class="slider">
      </slide>
      <slide>
        <img :src="src" class="slider">
      </slide>
      <slide>
        <img :src="src" class="slider">
      </slide>
      <slide>
        <img :src="src" class="slider">
      </slide>
      <slide >
        <img :src="src" class="slider">
      </slide>
      <slide>
        <img :src="src" class="slider">
      </slide>
      <slide>
        <img :src="src" class="slider">
      </slide>


    </carousel>
    </div>

  </div>
</template>

<script>

  import { Carousel, Slide } from 'vue-carousel';


  export default{
    name: 'slider',
    components:Carousel,
    Slide,
    data () {
      return {

            src: 'https://file.digistyle.com/digistyle/image/webstore/banner/1397/4/27/d6b6dd12_set1.jpg'

      }
    }
  }
</script>

<style scoped>

  .slider{
    width: 1200px;
    height: 300px;

  }


  .border{
    width: 1050px;
    height: 300px;
    border: 1px solid gray;
    margin-left: 100px;

  }
  </style>




