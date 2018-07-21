
<template>

<div class="productDetails flex-container">
      <div class="flex-item" style="width: 50%">
      <h1  v-text="Product.brand"></h1>
      <p  v-text="Product.name"></p>
      <span style="text-decoration:line-through;" v-text="Product.priceBeforeOff"></span>
      <span style="color:#ff1a75;" v-text="Product.priceAfterOff"></span>
      <p v-text="Product.color"></p>
      <div class="flex-container2">
          <div class="flex-item2" v-for="image in Product.productColors">
            <img class="image" :src="image.src">
          </div>
      </div>
        <br/>

        <div>
      <span style="display:inline-block">راهنمای سایز</span>
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="10.929px" height="10.929px" viewBox="0 0 284.929 284.929" style=" position: relative;left: 20px;enable-background:new 0 0 284.929 284.929;"
	 xml:space="preserve">
<g>
	<path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441
		L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082
		c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647
		c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"/>
</g>
</svg>
          <button style="display:inline-block" class="chooseSize">انتخاب کنید</button>

        </div>
        <br/>
        <br/>
<div>
        <button style="display:inline-block" class="addToCard">افزودن به سبد خرید</button>
</div>
        <br/>

        <div>
          <p style="font-size: 12px; display:inline-block">ضمانت هفت روز بازگشت کالا</p>
        <svg viewBox="0 0 48 53" id="return3" width="7%" height="7%">
          <g fill-rule="nonzero" fill="none">
            <path d="M24.002 52.955C10.86 52.955.167 42.155.167 28.877c0-12.887 9.978-23.453 22.712-24.05.596-.093 1.141.453 1.166 1.075.03.62-.45 1.15-1.068 1.175-11.542.541-20.584 10.113-20.584 21.8 0 12.034 9.692 21.823 21.603 21.823 11.91 0 21.602-9.789 21.602-21.823a21.93 21.93 0 0 0-7.352-16.396 1.137 1.137 0 0 1-.103-1.592 1.11 1.11 0 0 1 1.576-.104c5.16 4.574 8.111 11.17 8.111 18.088.007 13.281-10.685 24.082-23.828 24.082z" fill="#919191"></path>
            <path d="M17.27 22.022a1.123 1.123 0 0 0-.855.037 1.145 1.145 0 0 0-.546 1.499l7.3 15.857a1.11 1.11 0 0 0 1.484.54 1.14 1.14 0 0 0 .545-1.498l-7.3-15.858c-.13-.277-.36-.479-.629-.577z" fill="#919191"></path>
            <path d="M31.589 22.02c.268-.097.574-.09.854.038.555.266.801.942.545 1.498l-7.3 15.858a1.11 1.11 0 0 1-1.483.54 1.14 1.14 0 0 1-.545-1.499l7.3-15.857c.13-.278.36-.48.629-.577zM19.54 13.525c-.217 0-.43-.06-.621-.192a1.134 1.134 0 0 1-.306-1.562l3.842-5.78-5.764-3.885a1.134 1.134 0 0 1-.313-1.56A1.113 1.113 0 0 1 17.923.23l6.698 4.51c.243.168.42.425.475.716.056.295-.004.602-.167.848l-4.463 6.718c-.219.327-.57.503-.927.503z" fill="#919191"></path>
          </g>
        </svg>
          <p style="font-size: 12px; display:inline-block">تحویل رایگان</p>
        <svg style="fill: gray; display:inline-block" viewBox="0 0 95 80" id="shipping2" width="11%" height="11%">
          <path d="M25.43 64.91c-2.03 0-3.682 1.652-3.682 3.684s1.652 3.683 3.682 3.683 3.682-1.651 3.682-3.683-1.653-3.684-3.682-3.684zm0 4.71c-.565 0-1.026-.461-1.026-1.026s.46-1.027 1.026-1.027 1.026.462 1.026 1.027-.461 1.026-1.026 1.026z"></path>
          <path d="M92.5 63.948c0-.861-.045-1.712-.118-2.556.003-.036.021-.067.021-.104 0-.083-.032-.155-.046-.233-1.327-13.441-11.799-24.228-25.091-26.05v-.03h-.236a29.382 29.382 0 0 0-3.752-.249h-2.652v-5.309c0-4.396-3.577-7.972-7.973-7.972h-37.18c-4.396 0-7.973 3.577-7.973 7.972v33.197c0 4.395 3.577 7.972 7.973 7.972h.197c.925 4.542 4.949 7.969 9.76 7.969s8.835-3.427 9.76-7.969h32.277c.925 4.542 4.949 7.969 9.76 7.969s8.835-3.427 9.76-7.969H92.5v-6.638zm-5.531-11.956H73.91a6.652 6.652 0 0 1-6.645-6.644v-7.633c8.629 1.308 15.894 6.762 19.704 14.277zM25.43 75.898c-4.027 0-7.305-3.276-7.305-7.305s3.277-7.305 7.305-7.305 7.305 3.276 7.305 7.305-3.278 7.305-7.305 7.305zm9.927-7.968c-.344-5.183-4.659-9.297-9.927-9.297s-9.583 4.114-9.927 9.297h-.03a5.322 5.322 0 0 1-5.316-5.313h3.047a1.329 1.329 0 0 0 0-2.656h-3.047V29.417a5.322 5.322 0 0 1 5.316-5.316h37.18a5.322 5.322 0 0 1 5.316 5.316V59.96h-20.86a1.327 1.327 0 1 0 0 2.656h20.859v5.313H35.357zm41.87 7.968c-4.027 0-7.305-3.276-7.305-7.305s3.277-7.305 7.305-7.305 7.305 3.276 7.305 7.305-3.278 7.305-7.305 7.305zm12.617-7.968h-2.69c-.343-5.183-4.658-9.297-9.927-9.297s-9.584 4.114-9.927 9.297h-6.675v-5.313h4.373a1.329 1.329 0 0 0 0-2.656h-4.373V37.383h2.652c.45 0 .889.045 1.332.067v7.898c0 5.129 4.173 9.3 9.301 9.3h14.221a26.367 26.367 0 0 1 1.381 5.313h-2.324a1.327 1.327 0 1 0 0 2.656h2.589c.022.443.067.882.067 1.331v3.982z"></path>
          <path d="M77.227 64.91c-2.03 0-3.683 1.652-3.683 3.684s1.652 3.683 3.683 3.683 3.683-1.651 3.683-3.683-1.653-3.684-3.683-3.684zm0 4.71c-.565 0-1.026-.461-1.026-1.026s.461-1.027 1.026-1.027 1.026.462 1.026 1.027-.461 1.026-1.026 1.026z"></path>
        </svg>
          <p style="font-size: 12px; display:inline-block">ضمانت اصل بودن کالا</p>
        <svg style="fill: gray;" viewBox="0 0 61.6100006 74.325002625" id="guarantee2" width="6%" height="6%">
          <path d="M60.55 8.9L31.24.06a1.5 1.5 0 0 0-.87 0L1.07 8.9A1.5 1.5 0 0 0 0 10.34V39.8c0 23.76 16.26 31.8 28.48 35.78l1.86.61a1.5 1.5 0 0 0 .93 0l1.86-.61c12.23-4 28.48-12 28.48-35.78V10.34a1.5 1.5 0 0 0-1.06-1.44zm-1.94 30.9c0 10.45-2.74 25.22-26.41 32.93l-1.4.45-1.4-.45C18.07 69 3 61.61 3 39.8V11.45l27.81-8.38 27.81 8.38-.01 28.35z"></path>
          <path d="M18.35 59.82c-6.22-4.68-9.12-11-9.12-20V15.65a1.5 1.5 0 1 0-3 0V39.8c0 10 3.28 17.13 10.31 22.42a1.5 1.5 0 0 0 1.8-2.4h.01zM29.37 7.46a1.5 1.5 0 0 0 1 1.87l22.7 6.84V39.8c0 9.15-2.54 20.48-22.29 27a1.5 1.5 0 0 0-.75 2.9l.31.1a1.5 1.5 0 0 0 .93 0l.31-.1c11.42-3.76 24.5-10.51 24.5-29.9V15.06A1.5 1.5 0 0 0 55 13.63L31.24 6.46a1.5 1.5 0 0 0-1.87 1z"></path>
          <path d="M44.87 29.62a1.5 1.5 0 0 0-2.12 0L26.23 46.14l-7.36-7.36a1.5 1.5 0 0 0-2.12 2.12l8.42 8.42a1.5 1.5 0 0 0 2.12 0l17.58-17.57a1.5 1.5 0 0 0 0-2.13z"></path>
        </svg>
      </div>
      </div>
      <div class="flex-item" style="width: 30%">
        <img src="https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg" class="categImg">
        <button class="off">N%</button>
      </div>
      <div class="flex-item" style="width: 20%">
          <div class="flex-container1">
            <div class="flex-item1" v-for="image in Product.productImages">
              <img class="image1" :src="image.src">
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

      Product : {

        brand: 'نام برند',
        name: ' نام محصول نام محصول نام محصول',
        color: 'رنگ: نام رنگ',
        priceBeforeOff: 'قیمت قبل تخفیف',
        priceAfterOff: 'قیمت بعد تخفیف',
        productColors: [
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg'
          }
        ],
        productImages: [
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg'
          },
          {
            src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg'
          }
        ],
        sizes: {
          size: '1',
          size: '2',
          size: '3'
        },
        features: {
          feature : {
            description: ''
          }
        }


      }
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
line-height:10px;
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

  .image{
    width:50px;
    height:50px;
  }

.image1{
  width:80px;
  height:80px;
}

  .addToCard{

    background-color:#ff1a75 ;
    border:none;
    font-size: 14px;
    color:white;
    text-align: center;
    width:200px;
    height: 30px;
    outline: none;

  }

  .chooseSize{

    font-size: 14px;
    text-align: center;
    width:200px;
    height: 30px;
  }

</style>
