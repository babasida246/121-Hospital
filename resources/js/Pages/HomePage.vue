<template>
  <guest-layout>
    <div class="row">
      <div class="col-md-7" id="imageCarousel">
        <carousel :imagelist="CarouselImages"></carousel>
      </div>
      <div class="col-md-5">
        <div class="row align-middle">
          <div class="col-md-6">
            <button class="btn btn-primary">
              <font-awesome-icon :icon="['fas', 'calendar-alt']" /> Đăng ký khám
            </button>
          </div>
          <div class="col-md-6">
            <button class="btn btn-primary">
              <font-awesome-icon :icon="['fas', 'phone-alt']" /> Liên hệ
            </button>
          </div>
          <div class="col-md-6"><button class="btn btn-primary">
              <font-awesome-icon :icon="['fas', 'user-md']" /> Đội ngũ bác sĩ
            </button></div>
          <div class="col-md-6"><button class="btn btn-primary">
              <font-awesome-icon :icon="['fas', 'comments']" /> Tư vấn online
            </button></div>
        </div>
      </div>
    </div>
    <page-content></page-content>
  </guest-layout>
</template>

<script>
import Carousel from "../Components/Guest/Carousel.vue";
import PageContent from "../Components/PageContent.vue";
import GuestLayout from "../Layouts/GuestLayout.vue";

export default {
  props: ["CarouselImages"],
  components: { GuestLayout, PageContent, Carousel },
  data() {
    return {};
  },
  computed: {},
};
</script>

<style>
</style>