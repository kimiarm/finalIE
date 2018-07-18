<template>
<div class="footerr">

<div class="flex-container5">
<div class="flex-item5" style="width: 40%">
 <p style="font-size: 15px;line-height: 18px;text-shadow: 1px 1px 8px #808080;text-align: right;"><br>تمامی حقوق این سایت متعلق به دانشگاه امیرکبیر بوده و هرگونه استفاده از منابع و طراحی‌های این سایت توسط نهادی خارج از دانشگاه با پیگرد قانونی همراه خواهد بود.</p>
</div>
<div class="flex-item5" style="width: 30%">
 <p style="font-size: 18px;line-height: 10px;"><b>به ما در رسانه‌های اجتماعی بپیوندید</b></p>
 <div>
   <icon id="f" name="facebook-f"></icon>
   <icon id="g" name="google-plus"></icon>
   <icon id="t" name="twitter"></icon>
 </div>
 <div>
 <icon id="f" name="facebook-f"></icon>
 <icon id="g" name="google-plus"></icon>
 <icon id="t" name="twitter"></icon>
  </div>
</div>
<div class="flex-item5" style="width: 15%">
 <div style="direction: rtl; line-height: 18px;text-align: right;">
   <br>
   <p ><b>اطلاعات ما</b></p>
   <p class="onMenu">درباره‌ی ما</p>
   <p class="onMenu">تماس با ما</p>
 </div>
</div>
<div class="flex-item5" style="width: 15%;">
 <div style="direction: rtl; line-height: 18px;text-align: right;">
   <br>
   <p ><b>خدمات مشتریان</b></p>
   <p class="onMenu">سوالات متداول</p>
   <p class="onMenu">بازگرداندن کالا</p>
   <p class="onMenu">شرایط استفاده</p>
   <p class="onMenu">حریم شخصی</p>
 </div>
</div>

</div>
</div>

</template>

<script>
export default{
name: 'footerr'
}
</script>

<style scoped>

.onMenu:hover{
  color:#3b55ef;
}

.flex-container5{
  display: flex;
  align-items: stretch;
  margin-left: 70px;
  margin-right: 100px;
  background-color: rgba(127,127,127,0.1);
  border-radius: 3px;
}

.flex-item5{
  background-color: rgba(0,0,0,0);
  height:220px;
  margin: 5px;
  margin-left: 20px;
  text-align: center;
  line-height: 75px;
  font-size: 16px;
  color: rgb(127,127,127);
}

#f {
  padding: 20px;
  margin:3px;
  font-size: 10px;
  background: #808080;
  color: white;
  width: 25px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

#f:hover{
  background-color: #3b55ef
}

#t {
  padding: 20px;
  margin:3px;
  font-size: 10px;
  background: #808080;
  color: white;
  text-align: center;
  width: 25px;
  justify-content: center;
  text-decoration: none;
  border-radius: 50%;

}

#t:hover{
  background-color: #3b55ef
}

#g {
  padding: 20px;
  font-size: 10px;
  margin:3px;
  background: #808080;
  color: white;
  width: 25px;
  padding-left: 20px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;

}

#g:hover{
  background-color: #3b55ef
}

</style>
