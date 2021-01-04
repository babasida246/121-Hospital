<template>
  <nav
    class="collapse navbar navbar-expand navbar-light bg-color flex-column flex-md-row"
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
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ApplicationName from "@/Components/ApplicationName.vue";
import NavigationContent from '@/Components/Navigation/NavigationContent.vue';
export default {
  props: ['MenuStructure'],
  components: {
    ApplicationLogo,
    ApplicationName,
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