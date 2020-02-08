<template>
<div class="offline">

  <div class="content">
    <h2> 404 Not Found</h2>
    <img src="../assets/error.svg" alt="">
    <router-link to="/">Go to home page</router-link>
  </div>
  
</div>
  


</template>


<style lang="scss" scoped>
.offline{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  text-align: center;
  height: 100vh;

  .content{
    h2{
      font-size: 50px;
      background-color: antiquewhite;
      border-radius: 5px;
      margin: 20px;
      padding: 5px;
    }
    img{
      max-width: 30vw;
    }
    
      
      a{
        margin-top: 10px;
        font-size: 20px;
        text-decoration:underline;
        display:block;
      }
    
  }
}


</style>