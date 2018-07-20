<template>
  <div id="productDetils">
    <headerr></headerr>
    <categoryNav></categoryNav>
    <productDetails></productDetails>
    <features></features>
    <footerr></footerr>
  </div>
</template>



<script>
  import Headerr from './components/Headerr'
  import Footerr from './components/Footerr'
  import ProductDetails from '../components/ProductDetails'
  import Features from "./components/Features";
  import CategoryNav from "./components/CategoryNav";





  export default {
    name: 'productDetils',
    components: {
      Headerr, Footerr,ProductDetails, Features, CategoryNav
    }
  }
</script>

<style>
  #productDetils {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
