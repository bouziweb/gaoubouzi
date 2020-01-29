<template>
  
  <div ref="homeBar" class="homeBar">
        <ul class="bar">
          
          <li><a target="_blanck" href="//www.instagram.com/gaoubouzi/"><i class="fab fa-instagram"></i></a></li>
          <li><a target="_blanck" href="https://github.com/bouziweb"><i class="fab fa-github-square"></i></a></li>
          <li><a target="_blanck" href="https://www.linkedin.com/in/achraf-gaoubouzi-ba69b5121/"><i class="fab fa-linkedin"></i></a></li>
          
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

    
    tm.fromTo(homeBar,3,{opacity:0,x:30},{opacity:1,x:0})
    

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
      li,a{
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