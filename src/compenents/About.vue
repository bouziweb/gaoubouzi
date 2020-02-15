<template>

<div class="aboutPage">
  <div class="row">
    
    <div class="main col-md-12 col-sm-12 col-xs-12 col-lg-12">
       
      <div class=" firstSection col-md-4 col-sm-12 col-xs-12  col-lg-4">
         <div ref="picture" class="Picture"><img src="../assets/me.jpg" alt=""></div>
      </div>
      <div ref="text" class="content col-md-6 col-sm-12  col-12 col-xs-12 col-lg-6">
        <h1 class="">About Me.</h1><br><br>
        <p>Hello! I'm Achraf, a web devloper based in Hamilton, ON who enjoys building things, specializing in building (and occasionally designing) exceptional, high-quality websites and applications.</p>
        <p>After graduating from Specialized Institute of Applied Technology in Morocco, I started working as a freelancer with a very small company who needed a website for their business. </p>
        <div class="col-md-12 links">
          <p @click="resume" class="col-md-5"> See my resume</p>
         <a href="mailto:gaoubouzi@gmail.com"><p class="col-md-6">Git in touch</p></a>
        </div>
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
   
    const picture=this.$refs.picture;
    const text=this.$refs.text;

    const tm = new TimelineMax();

    
    tm.fromTo(text,1,{opacity:0,x:80},{opacity:1,x:0})
    .fromTo(picture,1,{opacity:0,x:-30},{opacity:1,x:0})
    
    

  },
  methods:{
    resume(){
      window.open("../../src/assets/Resume2020.pdf", "_blank");  
    }
  }
}
</script>

<style lang="scss" scoped>

$colorPrimary:#38deed;
$textColor:#8892b0;
*{
  display: inline-block
  }

@mixin elementCenter() {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  
}



 .aboutPage{
   height: 100vh;
   width: 100%;
   @include elementCenter();

    h1{
            
            font-family: monospace;
            font-size: 30px;
            color: #fff;
            
            position: relative;
            &::after{
              content: "some information about me";
              bottom: -10%;
              right: 3%;
              position: absolute;
              font-size: 7px;
              color: white;
              opacity: .7;
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
   

      .main 
      {
          margin: 50px;
          margin: 50px;
          display: inline-block;
          
          align-items: center;
          P{
             
                line-height: 1.3;
                font-family: Calibre, "San Francisco", "SF Pro Text", "Helvetica Neue", "Segoe UI", Arial, sans-serif;
                font-size: 16px;
                color: $textColor !important;
                text-align: justify;

            }
          
         

            .firstSection
            {
              position: relative;
              

               &::before
               {
                  content: "</img>";
                  color: $colorPrimary;
                  position: absolute;
                  bottom: -20px;
                  left: -5%;
                  font-size: 18px;
                  font-family: 'La Belle Aurore',cursive; 
                  opacity: 0.2;
                }
                &::after
                {
                  content: "<img>";
                  color: $colorPrimary;
                  position: absolute;
                  top: -20px;
                  left: -5%;
                  font-size: 18px;
                  font-family: 'La Belle Aurore',cursive; 
                  opacity: 0.2;
                }
            }
            .content{
              text-align: left;
              overflow: hidden;
              padding: 0;
              margin: 20px;
              .links p{
                font-size: 12px;
                color: $colorPrimary !important;
                opacity: .8;
                position: relative;
                transition: all .5s ease-out;
                cursor: pointer;
                display: inline;
                width: auto;
                &::before{
                  content: "";
                  width: auto;
                  background-color: $colorPrimary;
                  height: 1px;
                  width: 40%;
                  bottom: 0;
                  position: absolute;
                  transition: all .5s ease-out;

                }
                &:hover::before{
                    width: 80%;
                  }
              }
            }
          
        }


        .Picture 
        {
          width: auto;
          position: relative;
          float: left;

           &::before
           {
                
                content: "";
                position: absolute;
                background: #38deed00;
                bottom: 4px;
                left: 11px;
                border-radius: 50%;
                width: 250px;
                height: 250px;
                z-index: 10;
                border: 2px solid #f7f7f7;
                transition:all .9s ease-out;
                pointer-events: none;
                
              }

             img
             {
        
              max-width: 250px;
              border-radius: 50%;
              -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
              filter: grayscale(100%);
              transition:all .9s ease-out;
              margin-top: 30px;
              position: relative;

             
              &:hover 
              {
                -webkit-filter:none; /* Safari 6.0 - 9.0 */
                filter: none;
              }
               

           
             }
             
        } 


    .Picture:hover::before  {
                bottom: 0;
                left: 0;
              }



      }
 



   // --------------------------Responsive-------------------------

  @media(max-width: 995px)
  {
    .aboutPage{
         .main{
            display: inline-block;
            .Picture{
              img{
                float: left;
              }
            } 
            .content{
              float: right;
            }
          }
    }
   
  }


  @media(max-width: 600px)
  {
    .aboutPage{
         .main{
           margin: auto;
            text-align: center;
            .content{
             max-width: 400px;
             min-width: 200px;
             padding: auto 0;
             float: left;
             p{
               font-size: 13px;
             }
              
            }
          }
    }
   
  }

  @media(max-width: 450px)
  {
    .aboutPage{
         .main{
           margin: auto;
            text-align: center;
            .Picture{
             margin-left: 35px;
            } 
            .content{
             max-width: 350px;
             
             padding: auto 0;
             float: left;
             p{
               font-size: 13px;
             }
              
            }
          }
    }
   
  }

</style>