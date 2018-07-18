<template>
<div class="productDetails flex-container">
      <div class="flex-item" style="width: 50%">
      <h1 style="" v-text="brand"></h1>
      <p> نام محصول نام محصول نام محصول</p>
      <span style="text-decoration:line-through;">قیمت قبل تخفیف</span>
      <span style="color:#ff1a75;">قیمت بعد تخفیف</span>
      <p>رنگ: نام رنگ</p>
      <div class="flex-container2">
          <div class="flex-item2">
          </div>
          <div class="flex-item2">
          </div>
          <div class="flex-item2">
          </div>
      </div>
      <span>راهنمای سایز</span>


<div>
<b-dropdown id="ddown1" text="Dropdown Button" class="m-md-2">
<b-dropdown-item>First Action</b-dropdown-item>
<b-dropdown-item>Second Action</b-dropdown-item>
<b-dropdown-item>Third Action</b-dropdown-item>
</b-dropdown>
</div>

      <div>
          <p>ضمانت هفت روز بازگشت کالا</p>
          <i class="fa fa-caret-down"></i>
          <p>تحویل رایگان</p>
          <i class="fa fa-caret-down"></i>
          <p>ضمانت اصل بودن کالا</p>
          <i class="fa fa-caret-down"></i>
      </div>
      </div>
      <div class="flex-item" style="width: 30%">
        <img src="https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg" class="categImg">
        <button class="off">N%</button>
      </div>
      <div class="flex-item" style="width: 20%">
          <div class="flex-container1">
              <div class="flex-item1">
              </div>
              <div class="flex-item1">
              </div>
              <div class="flex-item1">
              </div>
              <div class="flex-item1">
              </div>
          </div>
      </div>
</div>
</template>

<script>

export default {
  name: 'productDetails',
  data() {
    return {

      brand: 'adidas'
    }
  }
}
</script>

<style scoped>

.categImg{
height: 350px;
width: 300px;
position:relative;
}

.off{
height:50px;
width:50px;
border-radius:50%;
background-color: #ff1a75;
font-size:20px;
position:relative;
bottom: 350px;
right:250px;
border:none;
}

.flex-container{
margin-top: 30px;
margin-bottom: 30px;
display: flex;
flex-wrap: nowrap;
justify-content: center;
background-color: White;
width: 1000px;
position:relative;
left:100px;
text-align:right;
}

.flex-item{
height:350px;
margin-left:15px;
line-height:5px;
}

.flex-container1{
margin-left: 20px;
margin-right: 5px;
display: flex;
flex-direction:column;
flex-wrap: nowrap;
justify-content: center;
background-color: White;
position:relative;
bottom:4px;
}

.flex-item1{
width:80px;
height:80px;
margin: 5px;
border:0.1px solid rgb(127,127,127);
}

.flex-container2{
margin-right: 5px;
display: flex;
flex-wrap: nowrap;
background-color: White;
direction:rtl;
position:relative;
bottom:4px;
}

.flex-item2{
width:50px;
height:50px;
margin: 5px;
border:0.1px solid rgb(127,127,127);
}

.dropdown {
    float: left;
    overflow: hidden;
}

 .dropbtn {
    font-size: px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

</style>
