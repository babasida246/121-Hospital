<template>
  <div class="container-fluid">
    <application-header class="d-none d-md-block"></application-header>
    <application-nav-bar class="d-md-none"></application-nav-bar>
    <div class="d-flex">
      <div class="container-fluid">
        <page-content></page-content>
      </div>
      <div>
        <application-side-bar></application-side-bar>
      </div>
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