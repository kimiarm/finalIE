<template>
  <article class="suggestions">
    <div>product image</div>
    <button >N%</button>
    <p>نام برند</p>
    <p>نام محصول</p>
    <p>قیمت قبل تخفیف</p>
    <p>قیمت بعد تخفیف</p>
    <p>تومان</p>
  </article>
</template>


<script>
  export default{
    name: 'suggestions',
    data() {
      return {
        features: [
          {
            feature: 'ویژگی'
          },
          {
            feature: 'ویژگی'
          },
          {
            feature: 'ویژگی'
          }
        ]
      }
    }
  }
</script>

<style scoped>

  .features{
    direction:rtl;
    position: relative;
  }

  .flex-container{
    margin-right: 100px;
    display: flex;
    flex-wrap: nowrap;
    background-color: White;
    direction:rtl;
    position:relative;
    text-align: right;
    bottom: 30px;
  }

  .flex-item{
  }

</style>
