<template>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto d-none d-md-block">
        <a href="index.html"
          ><application-name class="ps-2"></application-name
        ></a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <link-of-list :link="route().current() == 'homepage' ? '#intro' : 'homepage'">{{route().current() == 'homepage' ? "Đầu trang" : "Trang chủ"}}</link-of-list>
          <link-of-list link="#about">Hướng dẫn</link-of-list>
          <link-of-list link="#services">Dịch vụ</link-of-list>
          <link-of-list link="#departments">Chuyên khoa</link-of-list>
          <link-of-list link="#doctors">Bác sĩ</link-of-list>
          <link-of-list link="#contact">Liên hệ</link-of-list>          
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->             
        </ul>
      </nav>
      <!-- .nav-menu -->
      <a href="#appointment" class="appointment-btn scrollto"
        >Make an Appointment</a
      >
      <nav class="mobile-nav d-lg-none"></nav>
    </div>    
  </header>
  <!-- End Header -->
</template>

<script>
import Logo from "../Logo.vue";
import ApplicationName from "../Name.vue";
import LinkOfList from '../Navigation/LinkOfList.vue';

export default {
  components: {
    Logo,
    ApplicationName,
    LinkOfList,  
  },
  data() {
    return {};
  },  
};
</script>

<style>
</style>