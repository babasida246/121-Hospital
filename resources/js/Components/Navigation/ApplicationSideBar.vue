<template>
  <nav
    class="collapse navbar navbar-expand navbar-dark bg-color shadow-lg rounded flex-column flex-md-row"
  >
    <div class="d-flex justify-content-center">
      <a class="navbar-brand text-center" href="#">
        <application-logo></application-logo>
        <br>
        <application-name class="ps-2" style="color:#ffe67c; font-weight:bold"></application-name>
      </a>      
    </div>
    <hr class="ms-2 me-2" style="border: 1px solid #ffe67c;color:#ffe67c">
    <div class="overflow-auto">
      <application-nav-bar-content class=""></application-nav-bar-content>
    </div>
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