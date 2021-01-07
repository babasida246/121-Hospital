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
          <li class="active"><a :href="route('homepage')" v-smooth-scroll="{offset:-20}">Trang chủ</a></li>
          <li><a href="#about" v-smooth-scroll="{offset:-20}">Hướng dẫn</a></li>
          <li><a href="#services" v-smooth-scroll="{offset:-20}">Dịch vụ</a></li>
          <li><a href="#departments" v-smooth-scroll="{offset:-20}">Chuyên khoa</a></li>
          <li><a href="#doctors" v-smooth-scroll="{offset:-20}">Bác sĩ</a></li>
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
          <li><a href="#contact" v-smooth-scroll="{offset:-20}">Liên hệ</a></li>      
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
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ApplicationName from "@/Components/ApplicationName.vue";
import ZiggyAnchor from '@/Components/Navigation/ZiggyAnchor.vue';

export default {
  components: {
    ApplicationLogo,
    ApplicationName,
    ZiggyAnchor,
  
  },
  data() {
    return {};
  },  
};
</script>

<style>
</style>