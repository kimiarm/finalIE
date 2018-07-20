<template>
  <div class="categoryNav">

  <div class="flex-container4">
    <div class="flex-item4">&nbsp<hr class="invisible"><hr></div>
    <div class="flex-item4">&nbsp<hr class="invisible"><hr></div>
    <div class="flex-item4">&nbsp<hr class="invisible"><hr></div>
    <div class="flex-item4"><a class="a2">برندها</a><hr class="invisible a1"><hr></div>
  <div class="flex-item4"><a class="a2">تخفیف</a><hr class="invisible a1"><hr></div>
  <div class="flex-item4"><a class="a2">ورزشی</a><hr class="invisible a1"><hr></div>
  <div class="flex-item4"><a class="a2">بچه‌گانه</a><hr class="invisible a1"><hr></div>
  <div class="flex-item4"><a class="a2">زنانه</a><hr class="invisible a1"><hr></div>
  <div class="flex-item4"><a class="a2">مردانه</a><hr class="invisible a1"><hr></div>
  <div class="flex-item4">&nbsp<hr class="invisible"><hr></div>
  <div class="flex-item4">&nbsp<hr class="invisible"><hr></div>
  <div class="flex-item4">&nbsp<hr class="invisible"><hr></div>
  </div>
  </div>
</template>


<script>
  export default{
    name: 'categoryNav'
  }
</script>

<style scoped>



  .flex-container4 {
    margin-top: 30px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color: White;
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

  .flex-item4:hover .a1{
    opacity: 1;
    border: 1px solid #3b55ef;
    color:#3b55ef;
  }
  .flex-item4:hover .a2{
    color:#3b55ef;
  }

  .invisible{
    width:40px;
    opacity: 0;
  }
</style>

