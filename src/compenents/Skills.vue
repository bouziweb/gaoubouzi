<template>
  <div class="skills container">
    <div class="row"><h1>My Skills</h1></div>
      <div ref="skills" class="main col-md-12 col-lg-12">
        
       <div class="row">
         
        <div class="skill col-md-4 col-lg-4 ">
          <h3>Fornt-End</h3>
          <ul>
            <li>Html5</li>
            <li>Css3/SASS</li>
            <li>JavaScript es6+</li>
            <li>VueJS 2+ (VueX, Vue-router, CLI...)</li>
            <li>jQuery</li>
            <li>Bootstrap</li>
          </ul>
        </div>

         <div class="skill col-md-4 col-lg-4">
          <h3>Back-End</h3>
          <ul>
            <li>Laravel Framework</li>
            <li>PHP</li>
            <li>MySQL</li>
          </ul>
        </div>

         <div class="skill col-md-4 col-lg-4 ">
          <h3>Other Things</h3>
          <ul>
            <li>GitHub</li>
            <li>Photoshop / Figma</li>
         
          </ul>
          <h3>THINGS I WANT TO LEARN</h3>
          <ul>
            <li>API Integration (Facebook, Google, Microsoft...)</li>
            <li>Angular 5+</li>
            <li>Ionic Framework</li>
          </ul>
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
   
    const skills=this.$refs.skills;
    

    const tm = new TimelineMax();

    
    tm.fromTo(skills,2,{opacity:0,y:80},{opacity:1,y:0},"=1")
    
    
    

  }
}
</script>



<style lang="scss" scoped>

$colorPrimary:#38deed;
$textColor:#8892b0;

@mixin elementCenter() {
  display: flex;
  
  align-items: center;
  flex-direction: row;
  flex-wrap: wrap
}
*{
  padding:0;
  margin: 0;
  box-sizing: border-box;
  
}


.skills{
 
   text-align: center;
   min-width: 100%;
   min-height: 100vh;
    @include elementCenter();
    
  


   h1{
            
            align-self: flex-start;
            font-family: monospace;
            
            font-size: 30px;
            color: #fff;
            padding-top: 15%;
            position: relative;
            &::after{
              content: "What i can do?";
              bottom: -10%;
              right: -9%;
              position: absolute;
              font-size: 7px;
              color: white;
              opacity: 1;
            }
            &::before{
              content: "";
              bottom: 20%;
              left: 108%;
              position: absolute;
              background: #fff;
              width:90vh;
              height: 1px;
              opacity: .4;
            }

   
      }
  .main{
    min-width:300px;
   align-self: flex-start;
  
   
   
 
              &::before
               {
                  content: "<ul>";
                  color: $colorPrimary;
                  position: absolute;
                  top: -23%;
                  left: 0%;
                  font-size: 18px;
                  font-family: 'La Belle Aurore',cursive; 
                  opacity: 0.2;
                }
                &::after
                {
                  content: "</ul>";
                  color: $colorPrimary;
                  position: absolute;
                   bottom: -43px;
                  left: 0%;
                  font-size: 18px;
                  font-family: 'La Belle Aurore',cursive; 
                  opacity: 0.2;
                }
    
    
    
   
  }
  .skill{
    display: inline-block;
    text-align: left;
    padding-left: 7%;
    h3{
      text-align: left;
      color: #fff;
      font-size: 15px;
      opacity: .7;
      text-transform:uppercase;
      padding-top:15px; 
    }
    ul{
      text-align: left;
      color: #fff;
      padding-left:15px;
      margin: 0;
      opacity: 0.7;
      list-style: none;
      flex-basis: 33.33333%;
      
      
      li{
        position: relative;
        margin-top: 15px;
        margin-left: 15px;
        font-size: 14px;
        font-family: 'Montserrat', sans-serif;
        color: #fff ;
        opacity: .7;
        &::before{
        content: "";
        width: 10px;
        height: 10px;
        position: absolute;
        background: #38deed;
        border-radius: 100%;
        opacity: .9;
        font-size: 0.8em;
        text-transform: uppercase;
        left: -22px;
        top:5px;
        
       
        animation: skill 2s infinite alternate;
        
        @keyframes skill {
              from {
                  box-shadow:0px 0px 0px 0px rgba(6, 216, 153, 0);
                  
              }
              50% {
                  box-shadow:0px 0px 0px 5px rgba(6, 216, 153, 0.103);
              }
              to {
                   box-shadow:0px 0px 0px 10px rgba(6, 157, 216, 0.377);
              }
          }





      }

    }
    
  }
}
}


  // --------------------------Responsive-------------------------


@media (max-width: 773px) {

  .main{
    
    padding-top: 10%;
    padding-bottom:15%;
    &::before,&::after{
      display: none
    }
    

  }

  .skills h1 {
  
    padding-top: 30%;
  
}
  
}




</style>