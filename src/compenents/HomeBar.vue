<template>
  
  <div ref="homeBar" class="homeBar">
        <ul class="bar">
          
          <li><i class="fab fa-instagram"></i></li>
          <li><i class="fab fa-github-square"></i></li>
          <li><i class="fab fa-linkedin"></i></li>
          
        </ul>
   </div>

</template>

<script>
export default {
  data(){
    return{

    }
  },
  mounted() 
  {
   
    const homeBar=this.$refs.homeBar;

    const tm = new TimelineMax();

    
    tm.fromTo(homeBar,10,{opacity:0,x:30},{opacity:1,x:0})
    

  }
}
</script>


<style lang="scss" scoped>
$colorPrimary:#38deed;
$background:#0D1729;
  

  .homeBar{
    float: right;
    position: fixed;
    right: 8vh;
    bottom: 5vh;
  .bar
  {
    display: flex;
    flex-direction: column;
    max-width: 2px;
    position: relative;
    opacity: .5;
    z-index: 99;
    padding: 0px;
    list-style-type: none;
      li{
        margin-top:6px;
        font-size: 20px;
        color: #fff;
        transition:  all .5s ease;
        cursor: pointer;
        &:hover
        {
        color: $colorPrimary;  
        }
    }

      &::before{
       content: "";
        background-color: #fff;
        height: 20vh;
        width: 1px;
        position: relative;
        top: 0;
        left: 7px;
      }
      
    }

   
  }   



</style>