import Home from './compenents/Home.vue';
import About from './compenents/About.vue';
import Skills from './compenents/Skills.vue';
import Works from './compenents/Works.vue';
import Contact from './compenents/Contact.vue';
import offline from './compenents/offline.vue';


export const routes=[
  {path:'/',component:Home},
  {path:'/about',component:About},
  {path:'/skills',component:Skills},
  {path:'/works',component:Works},
  {path:'/contact',component:Contact},
  {path:'*',component:offline}
]