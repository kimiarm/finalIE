<template>
  <div id="app">
<headerr></headerr>
    <ItemsinBasket></ItemsinBasket>
    <footerr></footerr>
  </div>
</template>



<script>
import Headerr from '../components/Headerr'
import Footerr from '../components/Footerr'
import ProgressBar from '../components/progressBar'
import CategoryNav from "../components/CategoryNav"
import ItemsinBasket from "../components/itemsinBasket";






export default {
  name: 'app',
  components: {
    CategoryNav,
    Headerr, Footerr, ProgressBar, ItemsinBasket
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
