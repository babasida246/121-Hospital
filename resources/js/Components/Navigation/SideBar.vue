<template>
  <nav
    class=""
  >
   <!--  <div class="d-flex justify-content-center" style="border-bottom:2px solid green">
      <a class="navbar-brand text-center" href="#">
        <application-logo width="80" height="80"></application-logo>
        <br>
        <application-name class="ps-2 app-name"></application-name>
        <application-name class="ps-2" style="color:#ffe67c; font-weight:bold"></application-name>
      </a>      
    </div> -->
    
    <div class="overflow-auto"> 
      <navigation-content :MenuStructure='menulist'></navigation-content>
    </div>    
  </nav>  
</template>

<script>
import Logo from "../Logo.vue";
import Name from "../Name.vue";
import NavigationContent from './Content.vue';
export default {
  props: ['MenuStructure'],
  components: {
    Logo,
    Name,
    NavigationContent,
  },
   data(){
    return{
      menulist: this.MenuStructure
    }
  }
};
</script>

<style>
</style>