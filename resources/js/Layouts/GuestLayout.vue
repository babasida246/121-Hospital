<template>
  <div class="main container-fluid full-height">    
    <!-- Page Header -->
    <application-header></application-header>

    <div>
      <!-- Page Contents -->
      <div class="main container-fluid d-flex">
        <main class="main container-fluid">
          <slot></slot>
        </main>
        <div class="collapse" id="sidebar">
      
        </div>
      </div>
      <!-- Page Footer -->
    </div>
    <!-- Page Sider Menu -->
  </div>
</template>

<script>
import Menu from "../Components/Guest/navigation.json";
import ApplicationHeader from "../Components/Guest/ApplicationHeader.vue";
import Logo from "../Components/Logo.vue";
import Name from "../Components/Name.vue";
import NavigationSideBar from "../Components/Navigation/SideBar.vue";
import NavigationTopBar from "../Components/Navigation/TopBar.vue";

export default {
  components: {
    ApplicationHeader,
    Logo,
    Name,
    NavigationSideBar,
    NavigationTopBar,
  },
  data() {
    return {
      menulist: Menu,
    };
  },
};
</script>
<style>
#app-name {
  font-weight: bold;
}
.nav-link {
  font-weight: 150;
}
#sidebar {
  left: -450px;
  transition: left cubic-bezier(0.95, 0.05, 0.795, 0.035);
}
#sidebar .show {
  left: 0px;
}
#navigation-sidebar {
  /* don't forget to add all the previously mentioned styles here too */
  /*  max-width: 450px; */
  min-width: 250px;
  height: 100%;
}
</style>