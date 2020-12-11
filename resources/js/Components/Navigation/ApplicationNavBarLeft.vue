<template>
  <div class="collapse navbar-collapse ms-1" id="navbarSupportedContent">
    <application-nav-bar-content></application-nav-bar-content>
  </div>
</template>

<script>
import ApplicationNavBarContent from "./ApplicationNavBarContent.vue";

export default {
  props: {},
  components: {
    ApplicationNavBarContent,
  },
};
</script>

<style>
</style>