<template>
  <div class="full-height">
    <header
      class="navbar navbar-expand navbar-dark army-color m-1 shadow-lg rounded flex-column flex-md-row"
    >
      <div class="container-fluid">
          <a class="navbar-brand d-inline-block" href="#">
            <application-logo class="ms-3"></application-logo
            ><application-name class="ps-2" id="app-name"></application-name>
          </a>
          <div class="navbar-nav-scroll ms-auto">
            <ul class="navbar-nav bd-navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hướng dẫn</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a>
              </li>
            </ul>
          </div>
      </div>
    </header>
    <application-nav-bar class="d-lg-none army-color"></application-nav-bar>
    <div class="container-fluid full-height">
      <div class="row flex-xl-nowrap full-height">
        <application-nav-bar class="col-lg-2 d-none d-lg-block army-color"></application-nav-bar>
        <div class="col-md-8 col-lg-10 nopadding">
          <main class="shadow-lg ms-md-3 mt-md-1 rounded">
            <div class="card rounded">
              <div class="card-header rounded">Featured</div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                  With supporting text below as a natural lead-in to additional
                  content.
                </p>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
    <footer></footer>
  </div>
</template>

<script>
import ApplicationHeader from "../Components/ApplicationHeader.vue";
import ApplicationLogo from "../Components/ApplicationLogo.vue";
import ApplicationName from "../Components/ApplicationName.vue";
import ApplicationNavBar from "../Components/Navigation/ApplicationNavBar.vue"
export default {
  components: { ApplicationHeader, ApplicationLogo, ApplicationName, ApplicationNavBar},
};
</script>

<style>
#app-name {
  font-weight: bold;
}
.nav-link{
  font-weight: 150;
}
</style>