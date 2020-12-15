<template>
  <nav
    class="collapse navbar navbar-expand navbar-light shadow-lg rounded flex-column flex-md-row"
  >
    <div class="d-flex justify-content-center">
      <a class="navbar-brand text-center" href="#">
        <application-logo clas></application-logo>
        <br>
        <application-name class="ps-2" style="color:red; font-weight:bold"></application-name>
      </a>      
    </div>
    <hr class="ms-2 me-2">  
    <application-nav-bar-content class=""></application-nav-bar-content>
  </nav>  
</template>

<script>
import ApplicationNavBarContent from "./ApplicationNavBarContent.vue";
import ApplicationLogo from "../ApplicationLogo.vue";
import ApplicationName from "../ApplicationName.vue";
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