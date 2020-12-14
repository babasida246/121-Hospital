<template>
  <div class="container-fluid">
    <!-- Page Header -->
    <application-header class="d-none d-md-block"></application-header>
    <application-nav-bar class="d-md-none"></application-nav-bar>
    <div class="d-flex">
      <!-- Page Contents -->
      <div class="container-fluid">
        <main>
          <slot></slot>
        </main>
      </div>
      <!-- Page Sider Menu -->
      <div>
        <application-side-bar class="d-none d-md-block"></application-side-bar>
      </div>
      <!-- Page Footer -->
    </div>
  </div>
</template>

<script>
import ApplicationHeader from "../Components/ApplicationHeader.vue";
import ApplicationLogo from "../Components/ApplicationLogo.vue";
import ApplicationName from "../Components/ApplicationName.vue";
import ApplicationNavBar from "../Components/Navigation/ApplicationNavBar.vue";
import ApplicationSideBar from "../Components/Navigation/ApplicationSideBar.vue";
import PageContent from "../Components/PageContent.vue";

export default {
  components: {
    ApplicationHeader,
    ApplicationLogo,
    ApplicationName,
    ApplicationNavBar,
    ApplicationSideBar,
    PageContent,
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
</style>