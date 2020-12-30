<template>
  <div class="container-fluid main full-height d-flex">
    <!-- Page Sider Menu -->
    <div class="collapse show" id="sidebar">
      <navigation-side-bar
        id="navigation-sidebar"
        class="d-none d-md-block"
        :MenuStructure="menulist"
      ></navigation-side-bar>
    </div>
    <div>
      <!-- Page Header -->
      <application-nav-bar class="d-md-none"></application-nav-bar>
      <!-- Page Contents -->
      <div class="container-fluid main">
        <main>
          <slot></slot>
        </main>
      </div>
      <!-- Page Footer -->
    </div>
  </div>
</template>

<script>
import Menu from "@/Components/Guest/Navigation/navigation.json";
import ApplicationHeader from "@/Components/Admin/ApplicationHeader.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ApplicationName from "@/Components/ApplicationName.vue";
import ApplicationNavBar from "@/Components/Admin/Navigation/ApplicationNavBar.vue";
import NavigationSideBar from "../Components/Navigation/NavigationSideBar.vue";

export default {
  components: {
    ApplicationHeader,
    ApplicationLogo,
    ApplicationName,
    ApplicationNavBar,
    NavigationSideBar,
  },
  data() {
    return {
      menulist: Menu,
    };
  },
};
</script>

<style>
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