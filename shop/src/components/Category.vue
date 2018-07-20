<template>
<div class="categories">

<div class="flex-container">
<div class="flex-item">
<img src="https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/ec90fa7b.jpg" class="categImg">
  <div class="category">بچه‌گانه</div>
</div>
<div class="flex-item">
<img src="https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/28291bef.jpg" class="categImg">
<div class="category">زنانه</div>
</div>
<div class="flex-item">
<img src="https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg" class="categImg">
<div class="category">مردانه</div>
</div>
</div>

</div>
</template>

<script>

export default{
name: 'categories',
  data(){
  return{
    banners : [
      {
        category: 'بچه‌گانه',
        src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg'
      },
      {
        category: 'زنانه',
        src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg'
      },
      {
        category: 'مردانه',
        src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg'
      }

    ],
    slider : [
      {
        src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg'
      },
      {
        src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg'
      },
      {
        src: 'https://file.digistyle.com/digistyle/Image/Webstore/Banner/1397/4/23/07a9ed68.jpg'
      }
    ]
  }
  }
}
</script>

<style scoped>

.flex-container{
margin-top: 30px;
display: flex;
flex-wrap: nowrap;
justify-content: center;
background-color: White;
}

.flex-item{
width:350px;
height:200px;
border:0.1px solid rgb(127,127,127);
}

.category{
width:350px;
height:30px;
border:0.1px solid rgb(127,127,127);
margin-top: -7px;
background-color: rgba(127,127,127,0.7);
color: white;
}

.categImg{
width: 348px;
height: 170px;
}


</style>
