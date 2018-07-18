<template>
  <div id="home">
<headerr></headerr>
<category></category>
<homeBottom></homeBottom>
<footerr></footerr>
  </div>
</template>



<script>
import Headerr from './components/headerr'
import Footerr from './components/footerr'
import Slider from './components/slider'
import Category from './components/category'
import HomeBottom from './components/homeBottom'


export default {
  name: 'home',
  components: {
  Headerr, Footerr, Slider, Category, HomeBottom
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
