<template>
  <div id="profile">
    <headerr></headerr>
    <categoryNav></categoryNav>
    <profileInfo></profileInfo>
    <addresses></addresses>
    <orders></orders>
    <footerr></footerr>
  </div>
</template>



<script>
  import Headerr from './components/Headerr'
  import Footerr from './components/Footerr'
  import CategoryNav from "./components/CategoryNav"
  import ProfileInfo from "./components/ProfileInfo";
  import Addresses from "./components/addresses";
  import Orders from "./components/orders";







  export default {
    name: 'profile',
    components: {
      ProfileInfo,
      CategoryNav,
      Headerr, Footerr,Addresses,Orders
    }
  }
</script>

<style>
  #profile {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
