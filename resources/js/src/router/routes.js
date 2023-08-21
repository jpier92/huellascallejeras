import {createRouter, createWebHashHistory} from 'vue-router'


const routes = [
    {
      path: '/',
      redirect: '/home'
    },
    { 
      path: '/home', 
      name:'home',
      component: ()=> import(/* webpackChunkName:"AboutPage"*/'../modulos/huellas/pages/Home.vue') //webPAck me permite cambiar el nombre de esto modulo en red del navegador
    },
    { 
      path: '/about',
      name:'nosotros', 
      component: ()=> import(/* webpackChunkName:"AboutPage"*/'../modulos/huellas/pages/AboutPage.vue')
    },
    { 
      path: '/involucrate',
      name:'involucrate', 
      component: ()=> import(/* webpackChunkName:"AboutPage"*/'../modulos/huellas/pages/AboutPage.vue')
    },
    { 
      path: '/contacto',
      name:'contacto', 
      component: ()=> import(/* webpackChunkName:"AboutPage"*/'../modulos/huellas/pages/AboutPage.vue')
    },
    { 
      path: '/haz-tu-aporte',
      name:'haz-tu-aporte', 
      component: ()=> import(/* webpackChunkName:"AboutPage"*/'../modulos/huellas/pages/AboutPage.vue')
    },
    { 
      path: '/adopta',
      name:'adopta', 
      component: ()=> import(/* webpackChunkName:"AboutPage"*/'../modulos/huellas/pages/AboutPage.vue')
    },
    { 
      path: '/animalid/:id', 
      name: 'animal-id',
      component: ()=> import(/* webpackChunkName:"AnimalPage"*/'../modulos/huellas/pages/AnimalPage.vue'),
      props: (route) => {
        const id = Number(route.params.id);
        return isNaN(id) ? {id:1} : {id}
      } 
    },
    // {
    //     path: '/adopta',
    //     name:'adopta', 
    //     component: ()=> import(/* webpackChunkName:"AdoptaLayouts"*/'../modulos/huellas/layouts/AdoptaLayout'), //webPAck me permite cambiar el nombre de esto modulo en red del navegador    
        
    // },
    { 
      path: '/:pathMatch(.*)*', 
      component: ()=> import(/* webpackChunkName:"NoPageFound"*/'../modulos/shared/pages/NoPageFound.vue')
    },
    
  ]

  const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHashHistory(),
    routes, // short for `routes: routes`
  });


  export default router;