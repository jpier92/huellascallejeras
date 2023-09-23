<template>
    <div>
        <Navbar />
        <router-view></router-view>
        <Footer />
    </div>
</template>
<script>
import { defineAsyncComponent } from "vue";
import {mapState, mapActions} from 'vuex';

export default {
    name: 'App',
     components: {
    Navbar: defineAsyncComponent(()=> import(/* webpackChunkName:"Navbar"*/'./modulos/shared/components/Navbar.vue')),
    Footer: defineAsyncComponent(()=> import(/* webpackChunkName:"Footer"*/'./modulos/shared/components/Footer.vue')),
  },
  methods:{
      // getAnimalesAdopcion(){
      //   this.$store.commit('huellas/getAnimalesAdopcion');
      // },
      ...mapActions('huellas',['getAnimalesAdopcion'])
      
  },
  computed(){
  },
  created(){
    this.getAnimalesAdopcion()
  }
}
</script>
<style>
    
</style>

