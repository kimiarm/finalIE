<template>
  <div class="headerr">
    <div id="siteName"">Clothster</div>
    <button type="T" class="button login">ورود</button>
    <button type="T" class="button register">عضویت</button>
    <div class="search">
      <i class="fa fa-search" ></i>
      <font-awesome-icon icon="search" style="float: left; font-size:20px"/>
    </div>

  </div>
</template>


<script>
export default{
name: 'headerr'
}
</script>


<style scoped>

.search{
  position: absolute;
  left:75px;
  top:50px;
  width: 250px;
  height: 25px;
  display: inline-block;
  font-size: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  padding-left: 10px;
  padding-top: 5px;
  border:1px solid rgba(127,127,127,1);
  border-radius: 20px;
}


.search:hover{
 border-color:  #3b55ef ;
  color: #3b55ef ;
}

.search:hover .fa{
  color: #3b55ef ;
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

 hr{
   border-width: 0.5px;
   opacity: 0.9;
 }

.register{
  position: absolute;
  right: 75px;
  top: 50px ;
  color: rgba(127,127,127,1);
  background-color: #FFFFFF;

}

.login{
  position: absolute;
  right: 180px;
  top: 50px ;
  color: #ffffff;
  background-color: #666666;
}

.register:hover{
  color:  #3b55ef  ;
  border-color:  #3b55ef ;
  border:1px solid  #3b55ef ;
}

.login:hover{
  background-color: #3b55ef ;
  border-color:  #3b55ef ;
  color: #ffffff ;
}
#siteName{
  color: rgb(127,127,127);
  top: 20px;
  font-size:30px;
  font-weight: normal;
}

.flex-container4 {
  margin-top: 30px;
  display: flex;
  flex-wrap: nowrap;
  justify-content: center;
  background-color: White;
}

.flex-item4 {
  background-color: White;
  width: 100px;
  height: 80px;
  color:#808080;
  text-align: center;
  line-height: 50px;
  font-size: 15px;
}

.flex-item4:hover .a1{
  opacity: 1;
  border: 1px solid #3b55ef;
  color:#3b55ef;
}
.flex-item4:hover .a2{
  color:#3b55ef;
}

.invisible{
  width:40px;
  opacity: 0;
}
</style>
