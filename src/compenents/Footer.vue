<template>
    <footer>
         <div ref="footer" class="footer">Made with <span><i class="fas fa-heart"></i></span> by Achraf Gaoubouzi using Vuejs & Sass</div>
     </footer>
</template>

<script>
export default {
  data(){
    return{

    }
  },
  mounted() 
  {
  
    const footer=this.$refs.footer;

    const tm = new TimelineMax();

  
    tm.fromTo(footer,3,{opacity:0,y:30},{opacity:.3,y:0})

  }
}
</script>


<style lang="scss" scoped>

footer{
  min-width: 100vw;
  .footer{
        bottom: 0;
        padding-bottom: 10px;
        color: rgb(255, 255, 255);
        position: absolute;
        text-align: center;
        font-family: Nunito,sans-serif;
        font-weight: 700;
        min-width: 100%;
        font-size: 12px;
        opacity: .3;
      }
}




 // --------------------------Responsive-------------------------
      


@media (max-width: 480px) {
   .footer{
     font-size: 9px;
   }
}
    
</style>