<template>
<div class="homeBottom">
<br/>
<p style="align-text:center; font-size:25px;">بهترین‌ها را از ما خرید کنید</p>
<div class="flex-container1">
<div class="flex-item1 bshadow" style="width:300px;  background-color: #3b55ef; border-radius: 5px; border-color:#3b55ef">
  <img src="https://cdn0.iconfinder.com/data/icons/thin-communication-messaging/57/thin-013_mail_envelope_email_open-512.png" style="position:relative; top:20px; width: 50px; height: 50px;">
  <p style="position: relative; font-size: 20px; left: 5px; top: 10px; color:White;">در خبرنامه‌ی ما</p>
  <p style="position: relative; font-size: 20px; left: 5px; top: 15px; color:White">!عضو شوید</p>
  <div>
    <input  type="text" id="demo" class="join email" value="آدرس ایمیل خود را وارد کنید" style="  color:#3b55ef; font-size: 10px">
    <button type="T" class="button joinBtn" style="position: relative;top:40px;left:0px;font-size: 10px">عضو شوید</button>
  </div>
</div>

<div class="flex-item1" style="width:700px;"">
        <img src="http://www.prodirectcareers.com/media/1181/logos-1.png" id="brands" style="width: 670px; height: 300px; opacity: 0.1;">
        <button type="T" class="button brandsBtn" style="width: 250px;border-color: #3b55ef; background-color: #3b55ef; color: rgb(255,255,255);  position: relative; right: 10px; bottom: 170px; ">تمام برندهای معتبر را با ما تجربه کنید</button>
      </div>
</div>


</div>
</div>
</template>

<script>

export default{
name: 'homeBottom'
}
</script>

<style scoped>

.join{
  position: relative;
  top:20px;
  left:5px;

}

.email{
  width: 230px;
  height: 30px;
  padding-right: 40px;
  background-color: White;
  border-radius: 20px;
  border-style: none;
  direction: rtl;
  outline: none;
}


.envelop{
  position: absolute;
  top: 850px;
  left: 160px;
  color: #3b55ef;
}


.bshadow{
  box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
}

.button {
  width: 100px;
  height: 35px;
  display: inline-block;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  font-family: 'Shabnam', sans-serif;
  border:1px solid rgba(127,127,127,1);
  border-radius: 80px;
 }

.brandsBtn:hover{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.joinBtn{
  width: 100px;
  height: 35px;
  background-color: Black;
  color: White;
  border-color:Black;
}

.flex-container1{
margin-top: 30px;
margin-bottom: 30px;
display: flex;
flex-wrap: nowrap;
justify-content: center;
background-color: White;

}

.flex-item1{
margin-right: 40px;
width:450px;
height:300px;
border:0.1px solid rgb(127,127,127);
}

</style>
