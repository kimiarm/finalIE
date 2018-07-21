<template>
  <article class="suggestions">
    <div style="text-align: right;margin-right: 300px;position: relative;top: 20px; z-index: 1;">محصولات مرتبط</div>

    <div class="flex-container1">
      <br/>
      <div class="flex-item1" v-for="s in suggestions">
        <img class="image1" :src="s.src" />
        <button class="off">N%</button>
        <div style="margin-top: -20px;"  v-text="s.brand"></div>
        <div v-text="s.name"></div>
        <div v-text="s.priceBeforeOff"></div>
        <div v-text="s.priceAfterOff"></div>
      </div>
    </div>
    <br/>
    <br/>
    <br/>
  </article>
</template>


<script>
  export default{
    name: 'suggestions',
    data() {
      return {
        suggestions: [
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
            off: '',
            brand: 'brand',
            name: 'name',
            priceBeforeOff:'price',
            priceAfterOff: 'price'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
            off: '',
            brand: 'brand',
            name: 'name',
            priceBeforeOff:'price',
            priceAfterOff: 'price'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
            off: '',
            brand: 'brand',
            name: 'name',
            priceBeforeOff:'price',
            priceAfterOff: 'price'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
            off: '',
            brand: 'brand',
            name: 'name',
            priceBeforeOff:'price',
            priceAfterOff: 'price'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
            off: '',
            brand: 'brand',
            name: 'name',
            priceBeforeOff:'price',
            priceAfterOff: 'price'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
            off: '',
            brand: 'brand',
            name: 'name',
            priceBeforeOff:'price',
            priceAfterOff: 'price'
          }
        ]
      }
    }
  }
</script>

<style scoped>

  .flex-container1{
    margin-left: 20px;
    margin-right: 5px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color: rgba(127,127,127,0.1);
    position:relative;
    left: 50px;
    width:1100px;
    height: 200px;
  }

  .flex-item1{
    line-height: 10px;
    font-size: 12px;
    width:80px;
    height:80px;
    margin: 15px;
    margin-top: 50px;
    border:0.1px solid rgb(127,127,127);
  }

  .image1{
    width:80px;
    height:80px;
  }

  .off{
    height:30px;
    width:30px;
    border-radius:50%;
    background-color: #ff1a75;
    font-size:10px;
    position:relative;
    top: -100px;
    right:-40px;
    border:none;
  }

</style>
