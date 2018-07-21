<template>
  <div id="productDetails">
    <headerr></headerr>
    <categoryNav></categoryNav>
    <productDetails></productDetails>
    <features></features>
    <productFeatures></productFeatures>
    <suggestions></suggestions>
    <footerr></footerr>
  </div>
</template>



<script>
  import Headerr from './components/Headerr'
  import Footerr from './components/Footerr'
  import ProductDetails from './components/ProductDetails'
  import Features from "./components/Features";
  import CategoryNav from "./components/CategoryNav";
  import ProductFeatures from "./components/productFeatures";
  import Suggestions from "./components/suggestions";







  export default {
    name: 'productDetails',
    components: {
      Headerr, Footerr,ProductDetails, Features, CategoryNav,ProductFeatures,Suggestions
    }
  }
</script>

<style>
  #productDetails {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
