<template>
  <header
    class="navbar navbar-expand app-header navbar-light bg-color shadow-lg flex-column flex-md-row sticky-top"
  >
    <div class="container-fluid">
      <!--  <application-logo width="50" height="50"></application-logo
        >
      <a class="navbar-brand d-inline-block" href="#">
       
        <application-name class="ps-2 app-name"></application-name>        
      </a> -->

      <marquee class="ms-4"
        ><span style="color: green; font-weight: bold"
          >THÂN THIỆN - TẬN TÂM - TRUNG THỰC - TÔN TRỌNG</span
        >
        </marquee>
      <div class="navbar-nav-scroll ms-auto" id="header-menu">
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
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#sidebar"
              aria-controls="sidebar"
              aria-expanded="false"
              aria-label="Ẩn/hiện Menu"
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
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ApplicationName from "@/Components/ApplicationName.vue";
import Button from "@/Jetstream/Button.vue";

export default {
  components: {
    ApplicationLogo,
    ApplicationName,
    Button,
  },
  data() {
    return {};
  },
};
</script>

<style>
#header-menu {
  min-width: 360px;
}
</style>