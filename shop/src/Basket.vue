<template>
  <div id="basket">
    <headerr></headerr>
    <ItemsinBasket></ItemsinBasket>
    <footerr></footerr>
  </div>
</template>



<script>
  import Headerr from './components/Headerr'
  import Footerr from './components/Footerr'
  import ProgressBar from './components/ProgressBar'
  import CategoryNav from "./components/CategoryNav"
  import ItemsinBasket from "./components/ItemsInBasket";






  export default {
    name: 'basket',
    components: {
      CategoryNav,
      Headerr, Footerr, ProgressBar, ItemsinBasket
    }
  }
</script>

<style>
  #basket {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
