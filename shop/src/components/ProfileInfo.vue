<template>
  <div class="profileInfo">
<div class="flex-container">
  <div class="flex-item">

      <p id="text">نام و نام‌خانوادگی</p>
      <input id="input" type="text" :placeholder="name">
      <p id="text">شماره تلفن همراه</p>
      <input  id="input" type="text" pattern="[0-9]" :placeholder="mobile">
      <p id="text">تاریخ تولد</p>
    <input type="date" id="input" max="1979-12-31" :placeholder="date.month/date.day/date.year">
    <p id="text">رمز عبور فعلی</p>
      <input id="input" type="text">
  </div>
    <div class="flex-item">

    <p v-text="name"></p>
      <img class="avatar" :src="avatar">
      <p id="text1" >رمز عبور جدید</p>
      <input id="input1" type="text">
    </div>

    <div class="flex-item">


      <p id="text">شهر</p>
      <input id="input" type="text" :placeholder="city">
      <p id="text">شماره تلفن ثابت</p>
      <input id="input" type="text" :placeholder="phone">
      <p id="text">شماره کارت ۱۶ رقمی</p>
      <input id="input" type="text" :placeholder="card">
      <p id="text">تکرار رمز عبور جدید</p>
      <input id="input" type="text">
    </div>
      <br><br>
</div>
    <button type="T" class="edit">ثبت تغییرات</button>

  </div>
</template>

<script>
  export default{
    name: 'profileInfo',
    data () {
      return {
        name : 'نام کاربر',
        mobile: '09101111111',
        phone: '0211111111',
        gender: 'female',
        avatar: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg',
        city: 'city',
        date : {
          day: '1',
          month: '2',
          year: '98'
        },
        card: 'card'
      }
    }
  }
</script>


<style scoped>

  *{
    line-height: 10px;
  }

  #text{
    color: blue;
    font-size: 12px;
    position: relative; top: 100px;
    text-align: right;
    margin-right: 90px;
  }

  #input{
    border-radius: 15px;
    border: 1px solid lightgray;
    height: 25px;
    width: 200px;
    background-color: lightgray;
    position: relative; top: 100px;
    opacity: 0.4;
    outline: none;
  }

  #text1{
    color: blue;
    font-size: 12px;
    text-align: right;
    margin-right: 90px;
    position: relative; top: 50px;

  }

  #input1{
    border-radius: 15px;
    border: 1px solid lightgray;
    height: 25px;
    width: 200px;
    background-color: lightgray;
    opacity: 0.4;
    position: relative; top: 50px;

  }

  .edit {
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
    bottom: 20px;
    right:10px;

  }

  .avatar{
    border-radius:50%;
    width: 200px;
    height: 200px;
  }

  .flex-container {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color: White;
    direction: rtl;
    width: 1000px;
    border: 1px solid darkgray;
    margin-left: 120px;



  }

  .flex-item {
    background-color: White;
    height: 400px;
    width: 350px;
    border:none;

  }

</style>




