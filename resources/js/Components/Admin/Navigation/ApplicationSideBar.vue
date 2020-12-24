<template>
  <nav
    class="collapse navbar navbar-expand navbar-dark bg-color shadow-lg rounded flex-column flex-md-row"
  >
    <div class="d-flex justify-content-center" style="border-bottom:2px solid #ffe67c">
      <a class="navbar-brand text-center" href="#">
        <application-logo width="50" height="50"></application-logo>
        <br>
        <application-name class="ps-2" style="color:#ffe67c; font-weight:bold"></application-name>
      </a>      
    </div>
    
    <div class="overflow-auto">
      <application-nav-bar-content class=""></application-nav-bar-content>
    </div>
  </nav>  
</template>

<script>
import ApplicationNavBarContent from "./ApplicationNavBarContent.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ApplicationName from "@/Components/ApplicationName.vue";
export default {
  props: {},
  components: {
    ApplicationNavBarContent,
    ApplicationLogo,
    ApplicationName,
  },
};
</script>

<style>
</style>