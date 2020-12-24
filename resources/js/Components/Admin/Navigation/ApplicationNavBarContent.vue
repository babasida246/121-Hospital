<template>
  <ul class="navbar-nav ms-1 flex-column">
    <li class="nav-item">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="adminpage"
          iconname="home"
          >Dashboard</application-nav-bar-link
        >     
    </li>    
    <li class="nav-item">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="NavManage"
          iconname="home"
          >Menu</application-nav-bar-link
        >     
    </li>    
  </ul>
</template>

<script>
import AnchorCollapse from "../AnchorCollapse";
import ApplicationNavBarLink from "@/Components/ApplicationLink.vue";

export default {
  components: { AnchorCollapse,ApplicationNavBarLink },
};
</script>

<style>   

</style>