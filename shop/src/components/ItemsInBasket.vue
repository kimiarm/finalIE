<template>
  <div class="itemsInBasket">
<br/>
    <br/>
    <p class="title" style="width:939px;">&nbsp n</p>
    مشخصات محصول  تعداد قیمت


    <div class="flex-container" v-for="item in items">
      <div class="flex-item" style="width:40%;    border: 1px solid darkgray;">
        <img :src="item.src" class="image">
        <div class="text1" v-text="item.brand"></div>
        <div class="text" v-text="item.name"></div>
        <div class="text">
          <div style="display:inline-block">رنگ:</div>
          <div style="display:inline-block" v-text="item.color"></div>
        </div>
        <div class="text">
          <div style="display:inline-block">سایز:</div>
          <div style="display:inline-block" v-text="item.size"></div>
        </div>
        <div class="text">
          <div style="display:inline-block">کد کالا:</div>
          <div style="display:inline-block" v-text="item.code"></div>
        </div>
      </div>

      <div class="flex-item" style="width:30%">

        <button type="T" class="numButton">+</button>
        <textarea class="number">{{item.number}}</textarea>
        <button type="T" class="numButton">-</button>

      </div>

      <div class="flex-item" style="width:30%">

        <div class="price">
          <div style="display:inline-block; margin-left:80px;">قیمت واحد</div>
          <div style="display:inline-block;" v-text="item.price"></div>
          <div style="display:inline-block; margin-left:15px;">تومان</div>
        </div>

        <div class="price" style="color: hotpink">
          <div style="display:inline-block; margin-left:100px;">تخفیف</div>
          <div style="display:inline-block;" v-text="item.off"></div>
          <div style="display:inline-block; margin-left:10px;">تومان</div>
          <br/>
          <br/>
          <hr style="opacity:0.4"/>

        </div>

        <div class="price">
          <div style="display:inline-block; margin-left:80px;">قیمت نهایی</div>
          <div style="display:inline-block;" v-text="item.finalPrice"></div>
          <div style="display:inline-block; margin-left:15px;">تومان</div>
        </div>

      </div>

      <div class="flex-item" style="width:5%;">
          <button type="T" class="delete">X</button>
      </div>

    </div>

    <br/>
    <br/>

    <button type="T" class="button">ثبت و مرحله بعد</button>

    <br/>
    <br/>



  </div>
</template>

<script>
  export default{
    name: 'itemsInBasket',
    data () {
      return {
        items : [
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
            brand: 'brand',
            name: 'name',
            color: 'color',
            size: 'size',
            code:'code',
            number: 1,
            price: 0,
            off: 0,
            finalPrice: 0,
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
            brand: 'brand',
            name: 'name',
            color: 'color',
            size: 'size',
            code:'code',
            number: 1,
            price: 0,
            off: 0,
            finalPrice: 0,
          }
        ]

      }
    }
  }
</script>


<style scoped>

  .flex-container {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color: White;
    width:800px;
    direction: rtl;
    margin-left:250px;
  }

  .flex-item {
    background-color: White;
    height: 150px;
    width: 100px;
    border: 1px solid darkgray;
    border-right:none;
  }

  .image{
    position: relative;
    width:100px;
    height: 120px;
    top:15px;
    right:10px;
    float: right;
  }

  .button {
    width: 200px;
    height: 35px;
    display: inline-block;
    font-size: 15px;
    text-align: center;
    outline: none;
    font-family: 'Shabnam', sans-serif;
    border:none;
    border-radius: 80px;
    color:white;
    background-color: #3b55ef;
    position: relative;
    right:200px;
  }

  .numButton {
    width: 35px;
    height: 40px;
    display: inline-block;
    font-size: 30px;
    text-align: center;
    outline: none;
    border:none;
    border-radius: 50%;
    color:white;
    background-color: gray;
    position: relative;
    top:40px;
  }

  .text1{
    text-align: right;
    position: relative;
    right:20px;
    top:10px;
    font-weight: bold;

  }

  .text{
    text-align: right;
    position: relative;
    right:20px;
    top:10px;
    color:darkgray;
    font-size: 12px;
    font-weight: bold;
  }

  .number{
    width:20px;
    resize: none;
    border:none;
    position: relative;
    top:60px;
    text-align: center;
    font-size: 20px;
  }

  .delete{
    color: darkgray;
    position: relative;
    background-color: rgba(100,100,100,0.1);
    border:none;
    width:40px;
    height: 150px;
    outline: none;
    font-size: 20px;
  }
  .price{
    position: relative;
    top:20px;
  }

  .title{
    display:inline-block;
    height:40px;
    border:none;
    background-color: rgba(100,100,100,0.1);
    margin: 0px;
    left:25px;
    position: relative;

  }
</style>




