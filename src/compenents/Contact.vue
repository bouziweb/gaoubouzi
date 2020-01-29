<template>

<div class="contact">
  <div class="row"><h1>Contact</h1></div>
  <div class="row  text-center">
    <h2 ref="touch" class="col-md-12 text-center">Get In Touch</h2>
    
    <div class="col-md-12  discreption"><p> I'm  currently looking for full time jop opportunities, my inbox is always open. Whether for a potential project or just to say hi, I'll try my best to answer your email!</p></div>
   
     <form id="contact-form" data-netlify="true"  action="POST"  class="col-md-12">
     <div class="row justify-content-between">
       <input type="hidden" name="contact_number">
          <div class="input col-lg-5 col-md-5 align-self-end col-sm-12">
             <input type="text" v-model="Name" name="name" autocomplete="off"  required/>
             <label for="name"  class="label-name"><span class="content-name">Name</span></label>
             <span class="error"  id="name">{{ErrorName}}</span>
        </div>
        <div class="input col-lg-6 offset-md-1 offset-lg-1  col-md-6 col-sm-12">
             <input type="email" v-model='Email'  autocomplete="off" name="email" required/>
             <label for="email"  class="label-name"><span class="content-name">Email</span></label>
             <span class="error"  id="email">{{ErrorEmail}}</span>
        </div>
     </div>
       <div class="row text-center">
          <div class="input  col-lg-12 col-md-12 col-sm-12">
             <input type="text" v-model="Message" autocomplete="off" name="message" required/>
             <label for="name"   class="label-name"><span class="content-name">Message</span></label>
             <span class="error"   id="message">{{ErrorMessage}}</span>
        </div>
       </div>
        <div class="col-lg-12 col-md-12 text-center">
          <button  type="submit"     value="Send Email" class="submit">Send Message</button>
        </div>
         <div class="col-lg-12 col-md-12 text-center">
          <span class="info">If you'd rather get in touch with me by email <span class="microInfo">gaoubouzi@gmail.com</span> or phone <span class="microInfo">+212 6 97 85 41 90</span> I'll happy to hear from you.</span>
        </div>
    </form>
  </div>
</div>
  



</template>

<script>

export default {

  data(){
    return{
     
        ErrorName:"",
        ErrorEmail:"",
        ErrorMessage:"",
        Name:"",
        Email:"",
        Message:""

    }
  },
  mounted() 
  {
   
    const touch=this.$refs.touch;
    

    const tm = new TimelineMax();

    
    tm.fromTo(touch,2,{opacity:0,y:-60},{opacity:1,y:0})
    
    
    

  },


  methods:{
      sendEmail(e){
               
        //  if(this.Name===""){
        //   this.ErrorName="Insert your name Please!"
        //  }
        //   else if(this.Email===""){
        //   this.ErrorEmail="Insert your Email Please!"
        // }
        //  else if(this.Message===""){
        //   this.ErrorMessage="Insert your Message Please!"
        // }

      
                e.preventDefault();
                let currentObj = this;
                this.axios.post('http://localhost:8000/php/contact.php', {
                    name: this.Name,
                    email: this.Email,
                    Message:this.Message
                })
                .then(function (response) {
                    currentObj.output = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }
        
       
        //       else 
        //       // if(!this.Name==="" && !this.Email==="" && !this.Message===""){
               
                  
                  // $('#contact-form').submit(function(e) {
                      // e.preventDefault();
                      // var postdata = $('#contact-form').serialize();
                      //  console.log(this.Name,this.Email,this.Message)
                      // $.ajax({
                      //     type: 'POST',
                      //     url: '../php/contact.php',
                      //     data: postdata,
                      //     dataType: 'json',
                      //     success: function(json) {
                              
                      //         if(json.isSuccess) 
                      //         {
                                 
                      //             alert('good job');
                      //             this.Name="";
                      //             this.Email="";
                      //             this.Message="";
                      //         }
                                        
                      //     }
                      // });
                  // });

         
              
      // }



                
         
        
         
    
  }
}
</script>


<style lang="scss" scoped>
$colorPrimary:#38deed;
$textColor:#8892b0;


*{padding: 0;
margin: 0;
}


 h1{
            left: 0;
            font-family: monospace;
            font-size: 30px;
            color: #fff;
            top: 12%;
            position: absolute;
            &::after{
              content: "Say Hi to me ?";
              bottom: -10%;
              right: -9%;
              position: absolute;
              font-size: 7px;
              color: white;
              opacity: 1;
            }
            &::before{
              content: "";
              bottom: 40%;
              left: 130%;
              position: absolute;
              background: #fff;
              width: 100vh;
              height: 1px;
              opacity: .7;
            }

   
      }
         h2{
            font-family: 'Fredoka One', cursive;
            font-size:  50px;
            color:  #fff;

            margin-top: -120px
            
          }
      .discreption{
       
        justify-content: center;
        text-align: center;
        color: $textColor;
        margin-top: -40px;
        p{
          display: inline-block;
        max-width: 500px;
        }
      }

.contact{
  justify-content: space-around;
  align-items: center;
  display: flex;
  flex-direction: column;
  height: 100vh;
  
  form{
    width: 100%;
    display: inline-table;
    padding: 0px 100px;

     &::before
               {
                  content: "<form>";
                  color: $colorPrimary;
                  position: absolute;
                  top: -10px;
                  left: 0%;
                  font-size: 18px;
                  font-family: 'La Belle Aurore',cursive; 
                  opacity: 0.3;
                }
                &::after
                {
                  content: "</form>";
                  color: $colorPrimary;
                  position: absolute;
                   bottom: -10px;
                  left: 0%;
                  font-size: 18px;
                  font-family: 'La Belle Aurore',cursive; 
                  opacity: 0.3;
                }
    .submit{
    width: 150px;
    height: 50px;
    background-color: transparent;
    color: $colorPrimary;
    border-radius: 10px;
    margin: 30px 0px;
        
    
      }
  .info{
    font-size: 10px;
    color: #fff;
    opacity: .9;
    .microInfo{
      color: $colorPrimary;

    }
    
  }
  
    
     .input
     {
      width: 100%;
      position: relative;
       margin:  20px 0px;
      height: 60px;
      display: inline-block;
      
      input{
        width: 100%;
        height: 100%;
        
        padding-top: 30px;
        font-size: 20px;
        color: antiquewhite;
        border: none;
        outline-style: none;
        background-color: #0D1729;
        transition: all .5s ease;
         &:focus + .label-name .content-name, &:valid + .label-name .content-name{
          transform: translateY(-100%);
          font-size: 14px;
          color: $colorPrimary;
          opacity: .5;

        }
        &:focus + label::after,&:valid + label::after{
          transform: translateY(0%)
        }
          
          }
      }
         label{
          position: absolute;
          width: 100%;
          height:100%;
          left: 0%;
          bottom:0px;
          color: aliceblue;
          pointer-events: none;
          border-bottom: 1px solid #fff;
          overflow: hidden;
          &::after{
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0px;
            bottom:-1px;
            border-bottom: 3px solid $colorPrimary;
            transform: translateX(-100%) ;
            transition: all .5s ease;

          }
          .content-name{
            position: absolute;
            bottom: 5px;
            left: 0px;
            transition: all .2s ease;
          }

        }
      
    }
  
  }

.error{
            float: left;
                color: #e20f0fcb;
                padding-top: 5px;
                font-size: 14px;
            }

 



 @media(max-width:700px){
   .contact{
         min-height: 100%;
        
         form{
          padding:0px;
        }
        h1{
          top:5%
        }
        h2{
          padding-top: 10px;
          font-size: 35px;
        }
        .discreption{
          margin-top: 0;

          p{
          font-size: 15px;
        }

        }
       
        
   }
 }

</style>