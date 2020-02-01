<template>

<div>
    <div v-if="show" class="intro">
       <app-intro></app-intro>
    </div>


    <div v-else class="portfolio container">
        
      <!-- ------------------------ -->
      <app-navbar></app-navbar>
      <!-- ------------------------ -->
      <!-- <app-intro class="intro"></app-intro> -->
      <div  class="pages">
          
          <transition name="fade" >
          <router-view/> 
            
            
          </transition>

          <!-- ------------------------ -->
          <app-footer></app-footer>
      
      </div>
      <app-barShow class="d-none d-sm-none d-md-block d-lg-block"></app-barShow>
      <app-homeBar class="d-none d-sm-none d-md-block d-lg-block"></app-homeBar>

      </div>
</div>
</template>




<script>
import intro from './compenents/Intro.vue'
import Navbar from './compenents/Navbar.vue'
import BarShow from './compenents/BarShow.vue'
import Footer from './compenents/Footer.vue'
import HomeBar from './compenents/HomeBar.vue'


export default {

  data(){
    return{
          show:true
    }
  },
  created(){

      setTimeout(() => this.show = false, 9000)

  },

  components:{
    appNavbar:Navbar,
    appBarShow:BarShow,
    appFooter:Footer,
    appHomeBar:HomeBar,
    appIntro:intro,
   
    
  }

  
}
</script>

<style lang="scss" >

$colorPrimary:#38deed;
$background:#0D1729;


body{
  background-color: $background;
  min-height: 100%;
  width: 100%;
  box-sizing: border-box;
   overflow-x: hidden;
   overflow-y: auto;
   position:relative;
   &::before{
   content: "</html>";
    color: $colorPrimary;
    position: absolute;
    bottom:15px;
    left: 1%;
    font-size: 18px;
    font-family: 'La Belle Aurore',cursive; 
    opacity: 0.2;
    z-index: 99;
  }
  &::after{
    content: "<html>";
    color: $colorPrimary;
    position: absolute;
    top: 15px;
    left: 1%;
    font-size: 18px;
    font-family: 'La Belle Aurore',cursive; 
    opacity: 0.2;
    z-index: 99;
  }
}
*{font-family: Nunito,sans-serif;
  padding:0;
  margin: 0;
  box-sizing: border-box;
   
  }

  html{
  overflow-y: scroll;
}


.intro{
width:100vw;
height: 100vh;
top: 0;
left: 0;
z-index: 999999999;
}
// -----------------------ScrollBar--------------
html::-webkit-scrollbar {
  width: .2em;
  position: absolute;
  
}
 
html::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
 
html::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}
// -----------------------ScrollBar-End--------------




.pages{
  margin: 0;
  padding: 0;
 
  background-color: $background;
   min-height: 100%;
  min-width: 100%;
  position: relative;
  


  
  
} 


// ------------animation----------


.fade-enter{

  opacity: 0;
  transform: translateY(-100px)
}
.fade-enter-active,.fade-leave-active{
   transition:opacity 0.6s ease-in-out,transform 0.6s ease;
}
.fade-enter-active{
  transition-delay: .7s
}
.fade-leave{
  opacity: 1;
  transform: translateY(0px)

}
.fade-enter-to{
  opacity: 1;
  transform: translateY(0px);

}
.fade-leave-to{
  opacity: 0;
  transform: translateY(100px)
}




</style>