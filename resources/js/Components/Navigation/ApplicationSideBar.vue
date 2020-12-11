<template>
  <nav class="collapse navbar navbar-dark army-color shadow-lg rounded flex-column flex-md-row" id="navigation-sidebar">
    <application-nav-bar-content></application-nav-bar-content>
  </nav>
</template>

<script>
import ApplicationNavBarContent from './ApplicationNavBarContent.vue';

export default {
  props: {},
  components: {
    ApplicationNavBarContent,
  },
};
</script>

<style>
#navigation-sidebar {
  /* don't forget to add all the previously mentioned styles here too */
  max-width: 400px;
  min-width: 200px;
}
</style>