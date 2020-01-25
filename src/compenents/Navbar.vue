<template>
<div>
<div class="navbar" :class="menu ? 'showbar':''">
   <ul class="nav">
     
     <router-link to='/'><li>Home</li></router-link>
     <router-link to='/about'><li>About</li></router-link>
     <router-link to='/skills'><li>Skills</li></router-link>
     <router-link to='/works'><li>works</li></router-link>
     <router-link to='/contact'><li>Contact</li></router-link>
   </ul>
</div>

 <div ref="navbar" class="menu" @click="menu=!menu" :class="menu ? 'lines-close' : 'showMenu'">
		
      <span></span>
		
		</div>
</div>
 
</template>

<script>
export default {

  data(){
    return{
      menu:false
    }
  },
  mounted() 
  {
  
    const navbar=this.$refs.navbar;

    const tm = new TimelineMax();

  
    tm.fromTo(navbar,10,{opacity:0,x:-10},{opacity:1,x:0})

  }
  
}





</script>

<style lang="scss" scoped>

  $navbarColor: #0D1729;
  $navColor:#c5ebef;
  $navColorHover:#39dfee;

// ------------------------------------------------

a{
  list-style: none;
      text-decoration: none;
      list-style-type: none;
      border-bottom: none;
}
  .navbar{
    min-height: 100vh;
    width: 15%;
    text-align: center;
    background-color: $navbarColor;
    z-index: 99;
    color: $navColor;
    position: absolute;
    right: 0;
    border-left: 1px solid $navColor;
    transition: all .8s ease;
    top: 0;
    transform:translateX(100vh);

    .nav{
      display: block;
      width: 100%;
      text-align: left;
      transition: all .8s ease;
      display: block;
      list-style: none;
      text-decoration: none;
      list-style-type: none;
      border-bottom: none;
      
        li{
          list-style: none;
          font-family: 'Montserrat', sans-serif;
          margin: 20px;
          display: block;
          transition: all .8s ease;
          font-size: 25px;
          text-decoration: none;
          color: #fff;
          position: relative;
          text-decoration-style: none;
          list-style-type: none;
          border-bottom: none;
          &:hover{
            list-style: none;
            text-decoration-style: none;
            text-decoration: none;
            border-bottom: none;

          }
          &::before{
            content: "";
            bottom: 0;
            left: 0px;
            width: 30%;
            height: 7px;
            display: inline-block;
            border-radius: 5px;
            opacity: .5;
            position: absolute;
            background-color: #177485;
            transition: all .8s ease;

          }
          &:hover::before{
            left: 20px;
            

          }
        }
      
       
    }
  }

// ------------------------------------------------
   .portfolio .menu {
    float: right;
    right: 3%;
    cursor: pointer;
    height: 30px;
    position: fixed;
    z-index: 999;
    width: 38px;
    top: 4%;
    transition: all ease 0.3s;
    
   
}
.portfolio .menu span {
    width: 100%;
    height: 4px;
    position: relative;
    margin-top: 4px;
    opacity: .8;
    background: #fff;
    
    border-radius: 1px;
    float: right;
    transition: all ease 0.3s;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    &::before{
      content: "";
      width: 100%;
      height: 100%;
      top: -10px;
      background-color: #fff;
      position: absolute;
      transition: all ease 0.3s;
    }
    &::after{
      content: "";
      width: 100%;
      height: 100%;
      bottom: -10px;
      background-color: #fff;
      position: absolute;
      transition: all ease 0.3s;
    }
}
// .portfolio .menu span {
//     margin-top: 4px;
//     opacity: .8;
//     width: 65px;
//     animation: MoveLeft 3s infinite alternate ;
//      animation-duration: 2s;
// }
@keyframes MoveLeft {
  0%, 100% {
    width: 65%;
  }
  50% {
    width: 100%;
  }
}


.menu.lines-close span:before,.menu.lines-close span:after{
  bottom: 0;
  top: 0;
}

.showbar{
  transform:translateX(0vh);
}

</style>