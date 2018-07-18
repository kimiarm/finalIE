<template>
<div class="categories">

<div class="flex-container">
<div class="flex-item">
1
</div>
<div class="flex-item">2</div>
<div class="flex-item">3</div>
</div>

</div>
</template>

<script>

export default{
name: 'categories'
}
</script>

<style scoped>

.flex-container{
margin-top: 30px;
display: flex;
flex-wrap: nowrap;
justify-content: center;
background-color: White;
}

.flex-item{
flex:auto;
min-width:100px;
height:130px;
border:5px solid #000;
}

.flex-container4 {
  margin-top: 30px;
  display: flex;
  flex-wrap: nowrap;
  justify-content: center;
  background-color: White;
  margin-bottom: 50px;
}

.flex-item4 {
  background-color: White;
  width: 100px;
  height: 80px;
  color:#808080;
  text-align: center;
  line-height: 50px;
  font-size: 15px;
}


</style>
