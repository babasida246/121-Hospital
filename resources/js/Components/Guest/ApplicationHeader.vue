<template>
  <nav
    class="navbar navbar-expand app-header navbar-light bg-color flex-column flex-md-row"
  >
    <div class="container-fluid">
      <!--  <application-logo width="50" height="50"></application-logo
        >
      <a class="navbar-brand d-inline-block" href="#">
       
        <application-name class="ps-2 app-name"></application-name>        
      </a> -->

      <!-- <marquee class="ms-4"
        ><span style="color: green; font-weight: bold"
          >THÂN THIỆN - TẬN TÂM - TRUNG THỰC - TÔN TRỌNG</span
        >
        </marquee> -->
      <div class="navbar-nav-scroll ms-auto me-auto" id="header-menu">
        <ul class="navbar-nav bd-navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Giới thiệu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Khám chữa bệnh</a>
          </li>
          <li class="nav-item">
            <div class="d-flex justify-content-center">
              <a class="navbar-brand text-center" href="#">
                <application-logo width="80" height="80"></application-logo>
                <br />
                <application-name class="ps-2 app-name"></application-name>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Đội ngũ chuyên môn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Thông báo</a>
          </li>         
          <!--  <li>
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
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
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
ul.navbar-nav {
  display: table;
}
li.nav-item {
  display: table-cell;
  vertical-align: middle;
}
</style>