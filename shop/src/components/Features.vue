<template>
  <div class="features flex-container">


    <div class="flex-item" style="width:50%">

    </div>

    <div class="flex-item" style="width:50%">
      <p>ویژگی‌ها</p>
      <ul>
        <li v-for="f in features" v-text="f.feature">
        </li>
      </ul>
    </div>

  </div>
</template>

<script>
  export default{
    name: 'features',
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
  }

</style>
