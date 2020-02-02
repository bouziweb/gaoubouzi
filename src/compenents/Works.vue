<template>
  <div class="works ">
    
     <div class="title col-md-12"><h1>My Works</h1></div>
     <div class="contentGlobal">
       
       
     <!-- ------------------------------------- -->
     <div ref="work" class="row">
        <div class="mockup col-md-6">
           <div class="content1 right"><img src="../assets/works/dragaVision.png" alt=""></div>
        </div>
        <div class="discription right col-md-6">
          <h6>Featured Project</h6>
          <h3>Optometrist Project</h3>
          <div class="content2">
            <p>I built this website recently as a full-stack developer for an optometrist who had  hired me to make a  website to grow thier business
               and to make sure their  clients are able to make an appointments and contact them easily</p>
           
          </div>
           <div class="feature">
              <ul>
                <li>JavaScript</li>
                <li>jQeury</li>
                <li>PHP</li>
              </ul>
            </div>
            <div class="links">
              <a href=""><i class="fab fa-github"></i></a>
              <a href=""><i class="fas fa-external-link-alt"></i></a>
            </div>
        </div>
     </div>
        <hr>

        <!-- ------------------------------------- -->
        <div class="row">
        <div class="discription left col-md-6">
          <h6>Featured Project</h6>
          <h3>TodoList Project</h3>
          <div class="content2">
            <p>TodoList it's a small web app which you can add and remove your daily todo with nice animation.</p>
            <p>I used Vuejs2 to create this web app to improve my skills init.</p>
           
          </div>
           <div class="feature">
              <ul>
                <li>Vue</li>
                <li>SASS</li>
                <li>Bootstrap</li>
              </ul>
            </div>
            <div class="links">
              <a href=""><i class="fab fa-github"></i></a>
              <a href=""><i class="fas fa-external-link-alt"></i></a>
            </div>
        </div>
           <div class="mockup  col-md-6">
           <div class="content1 "><img  class="imageRight" src="../assets/works/todoList.png" alt=""></div>
        </div>
        </div>
       <hr>

          <!-- ------------------------------------- -->
        <div class="row">
           <div class="mockup left col-md-6">
           <div class="content1"><img src="../assets/works/bouziWeb.png" alt=""></div>
        </div>
        <div class="discription right col-md-6">
          <h6>Featured Project</h6>
          <h3>Social Media app (BouziWeb)</h3>
          <div class="content2">
            <p>BouziWeb is a social media-inspired blog website that I made It is my third project using Laravel's new features.
              The main goal of this app it's to make it a platform for the beginning developer.</p>
              <p>The main technologies I've been used in this project are JQeury, Ajax and Laravel.</p>
           
          </div>
           <div class="feature">
              <ul>
                <li>jQeury</li>
                <li>Laravel</li>
                <li>Bootstrap</li>

              </ul>
            </div>
            <div class="links">
              <a href=""><i class="fab fa-github"></i></a>
              <a href=""><i class="fas fa-external-link-alt"></i></a>
            </div>
        </div>
        
      </div>
       <hr>
       <!-- ------------------------------------- -->
        <div class="row">
        <div class="discription left col-md-6">
          <h6>Featured Project</h6>
          <h3>Portfolio-V1 Project</h3>
          <div class="content2">
            <p>this is was  my secound secound portfolio built using jQeury And PHP which contains some of my project and my skills  </p>
           
          </div>
           <div class="feature">
              <ul>
                <li>Html5</li>
                <li>jQeury</li>
                <li>Css3</li>
                <li>Bootstrap</li>
              </ul>
            </div>
            <div class="links">
              <a href=""><i class="fab fa-github"></i></a>
              <a href=""><i class="fas fa-external-link-alt"></i></a>
            </div>
        </div>
           <div class="mockup  col-md-6">
           <div class="content1 "><img  class="imageRight" src="../assets/works/portfolio.png" alt=""></div>
        </div>
        </div>
       <hr>

          <!-- ------------------------------------- -->


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
   
    const work=this.$refs.work;
    

    const tm = new TimelineMax();

    
    tm.fromTo(work,2,{opacity:0,y:80},{opacity:1,y:0},"=1")
    
    
    

  }
}
</script>


<style lang="scss" scoped>

$background-discription:#172945;

@mixin elementCenter() {
  justify-content: center;
  align-items: center;
  display: flex;
  flex-direction: column
}


.row{padding-bottom: 150px;}




.works
{ 
  overflow-x: hidden;
  box-sizing: border-box;
  padding-top: 10%;
  
  height: 100%;
  display: block;
   .title{
    text-align: left;
    
     h1{
     
            
            font-family: monospace;
            font-size: 30px;
            color: #fff;
            top: 15%;
            position: absolute;
            &::after{
              content: "I care about the details.";
              bottom: -10%;
              right: -25%;
              position: absolute;
              font-size: 7px;
              color: white;
              opacity: 0.7;
            }
            &::before{
              content: "";
              bottom: 40%;
              left: 108%;
              position: absolute;
              background: #fff;
              width: 100vh;
              height: 1px;
              opacity: .4;
            }

   
      }
    }

   @include elementCenter();
    width:100%;
   min-height: auto;
   
  .contentGlobal{
    padding-top: 10%;
   


   
  

  //------------------------



  .mockup
  {
      .content1 
      { 
        .imageRight{
          float: right;
        }
          img{
              max-width: 180%;
          
             
              -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
              filter: grayscale(100%);
              transition:all .9s ease-out;
              position: relative;
              &:hover 
              {
                -webkit-filter:none; /* Safari 6.0 - 9.0 */
                filter: none;
              }
          
            }
      }
  }

  // ------------------------
   .discription
    { z-index: 9;

          h6
          {
            font-size: 13px;
            font-weight: normal;
            color: rgb(100, 255, 218);
            font-family: 'Montserrat', sans-serif;
            margin-top: 10px;
            opacity: .8;
            padding-top: 0px;
          
          }
          h3
          {
            font-size: 25px;
            font-weight: normal;
            color: rgb(255, 255, 255);
            font-family:'Fredoka One', cursive;
            margin-top: 10px;
            opacity: .8;
            padding-top: 0px;
            &:hover{
              color: rgb(100, 255, 218);
              cursor: pointer;
            }

          }

        .content2 
        {
          box-shadow: rgba(2, 12, 27, 0.7) 0px 10px 30px -15px;
          position: relative;
          z-index: 2;
          background-color: rgb(23, 42, 69);
          color: rgb(168, 178, 209);
          font-size: 18px;
          transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1) 0s;
          padding: 20px;
          margin-top: 20px;
          border-radius: 3px;
          pointer-events: none;
          
        
          p
          {
            margin: 0;
            color: rgb(168, 178, 209);
            font-size: 14px;
            font-family: 'Montserrat', sans-serif;
          }
          
          
        }
         .feature
          {
            display: block;
            position: relative;
            
            ul
            {
              position: relative;
              margin-top: 10px;
              li
              {
                display: inline-block;
                padding: 7px 7px 5px;
                margin-right: 5px;
                color: #777;
                border: 1px solid #777;
                background: #0b1629;
                border-radius: 3px;
                text-transform: uppercase;
                font-size: 10px;
                font-weight: 500;
                letter-spacing: .5px;
              }

            }

          }
          .links{
            a{
              cursor: pointer;
              i{
                font-size: 25px;
                padding: 10px;
                opacity: .8;
                color: aliceblue;
              }
            }
          }
        
      
    }
    hr {
    margin-top: 1rem;
    margin-bottom: 4rem;
    /* color: red; */
    border-radius: 41%;
    border: 0;
    /* max-width: 600px; */
    border-top: 3px solid rgba(133, 139, 147, 0.2);
      }
   
  
   .right
    {
      text-align: right;
    }
    .left
    {
      text-align: left;
    }

  }
   
}



  // --------------------------Responsive-------------------------

  @media (max-width:692px){


      .mockup
  {
      .content1 
      { 
            padding-top: 20%;
        .imageRight{
          
        }
          img{
              width: 100%;
              max-width: 180%;
          
             
             
          
            }
      }
  }

  }


</style>

    