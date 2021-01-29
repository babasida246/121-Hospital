<template>
  <div>
    <side-bar></side-bar>
    <slot></slot>
  </div>
</template>

<script>
import {SideBar} from '../Components/Admin';
export default {
  components: {
    SideBar
  },
};
</script>

<style lang="scss" scoped>
/* @import "../../scss/Admin/material-dashboard.scss"; */
</style>