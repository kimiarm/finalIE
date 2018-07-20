<template>
  <div class="orders">
    <br/>
    <br/>
    <div style="float:right; margin-right:150px">
      <button class="show" style="display: inline-block">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="10.929px" height="10.929px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;"
	 xml:space="preserve">
<g>
	<path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441
		L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082
		c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647
		c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"/>
</g>
</svg>


      </button>
      <div style="display: inline-block; text-align: right; font-size:20px">سفارشات</div>

    </div>
    <br/>
    <br/>

    <div class="title">

      <div class="flex-container1">
        <div class="flex-item1">ردیف</div>
        <div class="flex-item1">کد</div>
        <div class="flex-item1">تاریخ و ساعت</div>
        <div class="flex-item1">مبلغ کل</div>
        <div class="flex-item1">وضعیت</div>
        <div class="flex-item1">عملیات</div>
        <div class="flex-item1">جزییات</div>


      </div>

    </div>


    <br/>
    <div class="flex-container" v-for="order in orders">
      <div class="flex-item">
        <span style="margin-left: 110px" v-text="order.number"></span>
        <span style="margin-left: 100px" v-text="order.code"></span>
        <span style="margin-left: 90px" v-text="order.date"></span>
        <span style="margin-left: 110px" v-text="order.price"></span>
        <span style="margin-left: 130px" v-text="order.status"></span>
        <button type="T" class="button" v-text="order.operation"></button>
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="10.929px" height="10.929px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;"
	 xml:space="preserve">
<g>
	<path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441
		L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082
		c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647
		c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"/>
</g>
</svg>
      </div>

    </div>


    <br/>
    <br/>



  </div>
</template>

<script>
  export default{
    name: 'orders',
    data () {
      return {
        orders : [
          {
            number: 'ردیف',
            code: 'کد',
            date: 'تاریخ و ساعت',
            price: 'مبلغ کل',
            status: 'وضعیت',
            operation: 'عملیات',
            details: [
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
          },
          {
            number: 'ردیف',
            code: 'کد',
            date: 'تاریخ و ساعت',
            price: 'مبلغ کل',
            status: 'وضعیت',
            operation: 'عملیات',
            details: [
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
    width:1000px;
    direction: rtl;
    width: 1000px;
    flex-direction:column;
    margin-left: 120px;
  }

  .flex-item {
    background-color: White;
    height: 40px;
    border: none;
    margin-bottom: 10px;
    background-color: rgba(127,127,127,0.1);
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
    width: 150px;
    margin-top: 10px;
  }


  .button {
    width: 100px;
    height: 30px;
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
    left: 80px;
    top:5px;
  }


  .show{
    border:none;
    background-color: white;
    outline: none;
  }

  .title{
    background-color: darkgray;
    height: 40px;
    width: 1000px;
    display: block;
    margin-left: 120px;

  }
</style>




