<template>
  <div id="app">
<headerr></headerr>
<productDetails></productDetails>
<footerr></footerr>
  </div>
</template>



<script>
import Headerr from './components/headerr'
import Footerr from './components/footerr'
import ProductDetails from './components/productDetails'


export default {
  name: 'App',
  components: {
  Headerr, Footerr,ProductDetails
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
