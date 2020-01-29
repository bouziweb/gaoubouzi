<template>


    <div ref="barShow" class="barShow">
        <ul>
          
          <router-link  v-for="(link) in links" :key="link.name"  :to="link.path" exact><li><span class="point" ></span><span class="section">{{link.name}}</span></li></router-link>
          
        </ul>
      </div>


      
</template>

<script>
export default {
  data(){
    return{
      links:[
        {path:'/',name:'home'},
        {path:'/about',name:'about'},
        {path:'/skills',name:'skills'},
        {path:'/works',name:'works'},
        {path:'/contact',name:'contact'}
      ],
      active:true

    }
  },
  mounted() 
  {
   
    const barShow=this.$refs.barShow;

    const tm = new TimelineMax();

    
    tm.fromTo(barShow,3,{opacity:0,x:-10},{opacity:1,x:0})
    

  }

  
}
</script>


<style lang="scss" scoped>


  // --------------barShow------------

a{
  transition: all .5s ease;
  list-style: none;
      text-decoration: none;
      list-style-type: none;
      border-bottom: none;
      transition: transform .2s,opacity .2s ;
      transform: scale(.6);
}
  .barShow{ 
    top: 40%;
    left: 30px;
    position: fixed;
    
      
    ul{
    display: contents;
    max-width: 2px;
    opacity: .5;
    z-index: 99;
    text-align: center;
    padding: 0px;
    height: 100%;
    list-style-type: none;
    transition: all .5s ease;
        
    
      a{
        li{
       width: 10px;
      height: 10px;
      border-radius: 100%;
      text-align: center;
      background-color: #333a46;
      display: flex;
      transition: all .5s ease;
      margin-bottom: 25px;
      position: relative;
      cursor: pointer;
       
      .section{
            padding-left: 20px;
            color: aliceblue;
            font-size: 14px;
            top: 5%;
            transition: all .5s ease;
            transition: transform .2s,opacity .2s ;
            display: none;
            margin-top: -5px;
            transform-origin: 100% 50%;
          }
           .point{
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            text-align: center;
            display: none;
            margin-bottom: 25px;
            cursor: pointer;
           transition: all .5s ease;
            transform: scale(.6);
            
          }
          
       
       &:hover .section{
          display: flex;
          transition: all .5s ease-out;
           }
           
          
         
          
         
        }
        &:hover .point{
          display: flex;
          background-color: #38deed;
          transition: all .5s ease;
           }
        
      }
    }
  }
    
    .barShow  ul .active li .point ,.barShow ul  .exact-active li .point{
          display: flex;
          background-color: #38deed;
          transition: all .5s ease;
          transition: transform .2s,opacity .2s ;
    } 


</style>