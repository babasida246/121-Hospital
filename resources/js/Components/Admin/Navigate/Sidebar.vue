<template>
  <div
    class="sidebar"
    data-color="green"
    data-background-color="white"
    data-image="../assets/img/sidebar-1.jpg"
  >
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <route-link link='admin' icon='dashboard' label='Dashboard'></route-link>
        <route-link link='user.list' icon='person' label='User List'></route-link>
        
      </ul>
    </div>
  </div>
</template>

<script>
import RouteLink from './RouteLink.vue';

export default {
  components:{
    RouteLink
  }
};
</script>

<style lang="scss">
</style>