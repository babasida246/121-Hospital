<template>
  <div class="wrapper">
    <side-bar></side-bar>
    <div class="main-panel">
      <nav-bar></nav-bar>
    </div>
    <slot></slot>
  </div>
</template>

<script>
import { SideBar, NavBar } from "../Components/Admin";
export default {
  components: {
    SideBar,
    NavBar,
  },
};
</script>

<style lang="scss">
@import "@scss/Admin/material-dashboard.scss";
</style>