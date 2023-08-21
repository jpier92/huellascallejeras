<template>
    <div>
        <Navbar />
        <Home />
        <Footer />
    </div>
</template>
<script>
import { defineAsyncComponent } from "vue";

export default {
    name: 'App',
     components: {
    Navbar: defineAsyncComponent(()=> import(/* webpackChunkName:"Navbar"*/'./modulos/shared/components/Navbar.vue')),
    Home: defineAsyncComponent(()=> import(/* webpackChunkName:"Home"*/'./modulos/huellas/pages/Home.vue')),
    Footer: defineAsyncComponent(()=> import(/* webpackChunkName:"Footer"*/'./modulos/shared/components/Footer.vue')),


  }
}
</script>
<style lang="">
    
</style>

