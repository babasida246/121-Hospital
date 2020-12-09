<template>
  <header
    class="navbar navbar-expand navbar-light bg-light flex-column flex-md-row shadow-lg ml-md-3 mt-md-1 rounded"
  >
    <a class="navbar-brand d-inline-block d-md-none" href="#">
      <app-logo></app-logo><app-name class="pl-2"></app-name>
    </a>
    <div class="navbar-nav-scroll ml-md-auto">
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
  </header>
</template>

<script>
import AppLogo from "./ApplicationLogo";
import AppName from "./ApplicationName";

export default {
  components: {
    AppLogo,
    AppName,
  },
  data() {
    return {};
  },
};
</script>

<style>
</style>