<template>
  <div class="progressBar">

    <svg height="100" width="1400">
      <line x1="100" y1="100" x2="400" y2="100" style="stroke:rgb(127,127,127);stroke-width:2" />

      <line x1="500" y1="100" x2="600" y2="100" style="stroke:rgb(127,127,127);stroke-width:2" />

      <line x1="100" y1="100" x2="400" y2="100" style="stroke:rgb(127,127,127);stroke-width:2" />

    </svg>
    <svg viewBox='-325 50 1024 1024'>
      <!--<circle cx="50" cy="50" r="50" />-->
      <path d="M0,50 a1,1 0 0,0 100,0" fill="white" style="stroke:rgb(127,127,127);" />
    </svg>

  </div>
</template>

<script>
  export default{
    name: 'progressBar',
    data () {
      return {

      }
    }
  }
</script>


<style scoped>

</style>




