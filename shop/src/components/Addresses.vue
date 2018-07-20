<template>
  <div class="addresses">
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
      <div style="display: inline-block; text-align: right; font-size:20px">آدرس‌ها</div>

    </div>

    <br/>

    <br/>
    <div class="flex-container" v-for="add in addresses">
      <div class="flex-item">
        <div class="flex-container1">
          <div class="flex-item1" style=" width: 50px; border-bottom: none">
            <input type="radio" style="position: relative;right:15px; top:40px">
          </div>
          <div class="flex-item1" style="width: 250px;">
            <div style="display: inline-block; margin-right: 10px; margin-top:10px">تحویل گیرنده:</div>
            <div style="display: inline-block;" v-text="add.name"></div>
          </div>
          <div class="flex-item1" style="width: 400px;">
            <div style="display: inline-block; margin-right: 10px; margin-top:10px">شماره تلفن ثابت:</div>
            <div style="display: inline-block;" v-text="add.phone"></div>
          </div>
          <div class="flex-item1" style="width: 250px;">
            <div style="display: inline-block; margin-right: 10px; margin-top:10px">شماره تلفن همراه:</div>
            <div style="display: inline-block;" v-text="add.name"></div>
          </div>
          <div class="flex-item1" style="width: 50px;">
            <svg version="1.1" fill="gray" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="-200 -200 900.331 900.331" style="enable-background:new 0 0 469.331 469.331;" xml:space="preserve">
<g>
	<path d="M438.931,30.403c-40.4-40.5-106.1-40.5-146.5,0l-268.6,268.5c-2.1,2.1-3.4,4.8-3.8,7.7l-19.9,147.4
		c-0.6,4.2,0.9,8.4,3.8,11.3c2.5,2.5,6,4,9.5,4c0.6,0,1.2,0,1.8-0.1l88.8-12c7.4-1,12.6-7.8,11.6-15.2c-1-7.4-7.8-12.6-15.2-11.6
		l-71.2,9.6l13.9-102.8l108.2,108.2c2.5,2.5,6,4,9.5,4s7-1.4,9.5-4l268.6-268.5c19.6-19.6,30.4-45.6,30.4-73.3
		S458.531,49.903,438.931,30.403z M297.631,63.403l45.1,45.1l-245.1,245.1l-45.1-45.1L297.631,63.403z M160.931,416.803l-44.1-44.1
		l245.1-245.1l44.1,44.1L160.931,416.803z M424.831,152.403l-107.9-107.9c13.7-11.3,30.8-17.5,48.8-17.5c20.5,0,39.7,8,54.2,22.4
		s22.4,33.7,22.4,54.2C442.331,121.703,436.131,138.703,424.831,152.403z"/>
</g>
</svg>

          </div>

        </div>

        <div class="flex-container1">
          <div class="flex-item1" style=" width: 50px;">

          </div>
          <div class="flex-item1" style="width: 650px;">
            <div style="display: inline-block; margin-right: 10px; margin-top:10px">آدرس:</div>
            <div style="display: inline-block;" v-text="add.address"></div>

          </div>
          <div class="flex-item1" style="width: 250px;">
            <div style="display: inline-block; margin-right: 10px; margin-top:10px">کد پستی:</div>
            <div style="display: inline-block;" v-text="add.post"></div>
          </div>
          <div class="flex-item1" style="width: 50px;">
            <button type="T" class="delete">X</button>
          </div>

        </div>

      </div>

    </div>

    <br/>

    <button type="T" class="button">اضافه کردن آدرس جدید</button>

    <br/>
    <br/>



  </div>
</template>

<script>
  export default{
    name: 'addresses',
    data () {
      return {
        addresses : [
          {
            name: 'نام',
            phone: 'شماره',
            mobile: 'شماره',
            address: 'متن آدرس',
            post: 'کد پستی'
          },
      {
        name: 'نام',
          phone: 'شماره',
        mobile: 'شماره',
        address: 'متن آدرس',
        post: 'کد پستی'
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
    height: 100px;
    border: 1px solid darkgray;
    margin-bottom: 20px;
  }

  .flex-container1 {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color: White;
    width:1000px;
    direction: rtl;
    margin-left:250px;
  }

  .flex-item1 {
    background-color: White;
    height: 50px;
    border: 1px solid darkgray;
    border-right: none;
    border-top:none;
    text-align: right;
    color: gray;
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
    right:400px;
  }

  .delete{
    position: relative;
    border:none;
    width:50px;
    height: 50px;
    outline: none;
    font-size: 20px;
    color: gray;
  }

  .show{
    border:none;
    background-color: white;
    outline: none;
  }
</style>




