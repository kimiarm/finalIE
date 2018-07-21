<template>
  <div class="productFeatures">


      <div class="title">

        <div class="flex-container1">
          <div class="flex-item1">مشخصات محصول</div>
          <div class="flex-item1">نظرات کاربران</div>
        </div>
      </div>

    <br/>
    <br/>


      <div class="flex-container" v-for="(f,index) in features">
        <div class="flex-item" style=" background-color: rgba(127,127,127,0.1)" v-if="index % 2==0">
          <div style="display: inline-block; margin-left: 100px;margin-right: 20px;">مشخصه</div>
          <div v-text="f.feature" style="display: inline-block;"></div>
        </div>

        <div class="flex-item" style=" background-color: white" v-if="index % 2==1">
          <div style="display: inline-block; margin-left: 100px;margin-right: 20px;">مشخصه</div>
          <div v-text="f.feature" style="display: inline-block;"></div>
        </div>

    </div>


    </div>
</template>

<script>
  export default{
    name: 'productFeatures',
    data() {
      return {
        features: [
          {
            feature: 'ویژگی'
          },
          {
            feature: 'ویژگی'
          },
          {
            feature: 'ویژگی'
          }
        ]
      }
    }
  }
</script>

<style scoped>

  .features{
    direction:rtl;
    position: relative;
  }

  .flex-container{
    margin-right: 100px;
    display: flex;
    flex-wrap: nowrap;
    background-color: White;
    direction:rtl;
    position:relative;
    text-align: right;
    bottom: 30px;
  }

  .flex-item{
    width: 1000px;
    margin-right: 22px;
    height: 30px;
  }

  .flex-container1 {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    width:1000px;
    direction: rtl;
  }

  .flex-item1 {
    height: 40px;
    border: none;
    width: 260px;
    margin-top: 10px;
  }

  .title{
    background-color: rgba(127,127,127,0.1);
    height: 40px;
    width: 1000px;
    display: block;
    margin-left: 140px;

  }

</style>
