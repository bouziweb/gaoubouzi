<template>
  
    <div class="homePage">
     <div class="row">
       <div class=" main col-md-12 col-sm-12 col-lg-12">
         <div ref="content" class="TitleName col-sm-12 col-xs-12 col-lg-6">
           <h1 ref="name">Achraf Bouzi</h1>
           <h2>I'm Achraf</h2>
           <h2 class="textMoving">   Web developer</h2>
           <h2>Quality Product</h2>
           <div class="AboutMe ">
             <p ref="text" class="col-md-12">Hi, I'm Achraf Gaoubouzi. A full stack web developer  based in Hamilton, Canada. I develop exceptional websites and web apps that provide intuitive, pixel-perfect user interfaces with efficient and modern backends.</p>
           </div>

         </div>
        <div class="imgSvg col-lg-4 d-none d-sm-none d-md-block d-lg-block  col-md-4">
          <img ref="img" src="../assets/work.svg" alt="">
        </div>
        
         
       </div>
       
       
     </div>
      
   
   
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
    const img = this.$refs.img;
    const content=this.$refs.content;
    const name=this.$refs.name;
    const text=this.$refs.text;

    const tm = new TimelineMax();

    tm.fromTo(content,2,{opacity:0},{opacity:1,ease:Power2.easeInOut})
    // .fromTo(img,2,{height:'0%'},{height:'80%',ease:Power2.easeInOut},"-=2")
    .fromTo(img,2,{width:'200%',x:50},{width:'150%',x:0,ease:Power2.easeInOut},"-=2")
    .fromTo(name,1,{opacity:0,x:50},{opacity:0.2,x:0})
    .fromTo(text,1,{opacity:0,x:50},{opacity:1,x:0},"-=1")

  }
}
</script>

<style lang="scss" scoped>

//  --------Varaible-----------
 
 $colorPrimary:#38deed;

//  --------Mixin-----------
@mixin elementCenter() {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  
}

.row{
  @include elementCenter();
  
}



.main{
    display: flex;
    flex-direction: row;
  
  }

.homePage{
  @include elementCenter(); 
  width: 100%;
  height: 100vh;
  color:#fff;

  

  .TitleName{
    margin-left: 40px;
    display: flex;
    flex-direction: column;

    &::before{
   content: "</Welcome>";
    color: $colorPrimary;
    position: absolute;
    bottom: -20px;
    left: -5%;
    font-size: 18px;
    font-family: 'La Belle Aurore',cursive; 
    opacity: 0.3;
  }
  &::after{
    content: "<Welcome>";
    color: $colorPrimary;
    position: absolute;
    top: -20px;
    left: -5%;
    font-size: 18px;
    font-family: 'La Belle Aurore',cursive; 
    opacity: 0.3;
  }
    h1{
      font-family: 'Fredoka One', cursive;
      font-size:  75px;
      color:  $colorPrimary;
      opacity: 0.2;
      margin-bottom: -37px;
    }
     
    h2{
      font-size: 55px;
      font-weight: 700;
      line-height: 45px;
      position: relative;
      background: transparent;
      margin-bottom: 20px;
      float: left;
    }
    .textMoving{
      padding-left: 40px;
      font-size: 50px;

      &::before{
      content: "";
      width: 40px;
      height: 6px;
      left: 0%;
      top: 50%;
      opacity: 0.3;
      position: absolute;
      background-color:  $colorPrimary;


      }
    }

    
    
  }
  

  
  

   p{
    font-size: 15px;
    color: #7d7d7d !important;
    text-align: justify;
  }
  .imgSvg {
   
    padding-right:40px ;
    text-align: right;
    img{
        width: 400px;
        height: 100%;
    }
  }

  
  

}


  
 
  // --------------------------Responsive-------------------------
      


@media (max-width: 992px) {
  .imgSvg img{
    display: none;
    
  }
  p{
    max-width: 500px;
    color: red
  }
 
}

@media (max-width: 575px) {
  content h1{
    font-size: 55px;

  }
   content h2{
    font-size: 35px;
  }
}
    
   
      
    
  






</style>