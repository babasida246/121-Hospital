<template>
  <ul class="navbar-nav ms-1 flex-column">
    <li class="nav-item">
        <application-nav-bar-link
          class="nav-link align-bottom"
          link="homepage"
          >Dashboard</application-nav-bar-link
        >     
    </li>
    
  </ul>
</template>

<script>
import AnchorCollapse from "../AnchorCollapse";
import ApplicationNavBarLink from "@/Components/ApplicationNavBarLink.vue";

export default {
  components: { AnchorCollapse,ApplicationNavBarLink },
};
</script>

<style>
</style>