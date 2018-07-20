<template>
  <div id="home">
    <headerr></headerr>
    <categoryNav></categoryNav>
    <category></category>
    <homeBottom></homeBottom>
    <footerr></footerr>
  </div>
</template>



<script>
  import Headerr from './components/Headerr'
  import Footerr from './components/Footerr'
  import Slider from './components/Slider'
  import Category from './components/Category'
  import HomeBottom from './components/HomeBottom'
  import CategoryNav from "./components/CategoryNav";



  export default {
    name: 'home',
    components: {
      Headerr, Footerr, Slider, Category, HomeBottom, CategoryNav
    }
  }
</script>

<style>
  #home {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
