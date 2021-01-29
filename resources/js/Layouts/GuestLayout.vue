<template>
  <div class="main container-fluid full-height">
    <!-- Page Header -->
    <app-header></app-header>

    <div>
      <!-- Page Contents -->
      <div class="main container-fluid d-flex">
        <main class="main container-fluid">
          <slot></slot>
        </main>
        <div class="collapse" id="sidebar"></div>
      </div>
      <!-- Page Footer -->
    </div>
    <!-- Page Sider Menu -->
  </div>
</template>

<script>
import {Header as AppHeader} from "../Components/Guest"; 

export default {
  components: {
    AppHeader,
  },
  data() {
    return {
  
    };
  },
};
</script>
<style lang="scss" scoped>
  @import "@css/guest.css";
</style>