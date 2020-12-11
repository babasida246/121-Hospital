<template>
  <header
    class="navbar navbar-expand navbar-dark army-color mb-1 shadow-lg rounded flex-column flex-md-row sticky-top"
  >
    <div class="container-fluid">
      <a class="navbar-brand d-inline-block" href="#">
        <application-logo class="ms-3"></application-logo
        ><application-name class="ps-2"></application-name>
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
          <li>
            <a
              class="nav-link"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navigation-sidebar"
              aria-controls="navigation-sidebar"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
             Menu <span class="navbar-toggler-icon"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>
</template>

<script>
import ApplicationLogo from "../Components/ApplicationLogo.vue";
import ApplicationName from "../Components/ApplicationName.vue";

export default {
  components: {
    ApplicationLogo,
    ApplicationName,
  },
  data() {
    return {};
  },
};
</script>

<style>
</style>