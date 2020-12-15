<template>
  <header
    class="navbar navbar-expand navbar-light bg-light ms-2 mb-1 shadow-lg rounded flex-column flex-md-row sticky-top"
  >
    <div class="container-fluid">
      <!-- <a class="navbar-brand d-inline-block" href="#">
        <application-logo></application-logo
        >
        <application-name class="ps-2"></application-name>
      </a> -->
      <marquee class="ms-4"><span style="color:red; font-weight:bold">THÂN THIỆN - TẬN TÂM - TRUNG THỰC - TÔN TRỌNG</span></marquee>
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
          <!-- <li>
            <a
              class="nav-link"
              type="button"
              role="button"
              data-bs-toggle="collapse"
              data-bs-target="#sidebar"
              aria-controls="sidebar"
              aria-expanded="true"
              aria-label="Ẩn/hiện Menu"
            >
              Menu <span class="navbar-toggler-icon"></span>
            </a>
          </li> -->
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
#header-menu{
  min-width: 280px;
}
</style>