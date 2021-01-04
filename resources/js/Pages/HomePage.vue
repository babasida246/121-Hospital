<template>
  <guest-layout>
    <div class="d-none d-lg-block " id="bhyt">
      
    </div>
  </guest-layout>
</template>

<script>
import ApplicationModal from "@/Components/Guest/ApplicationModal.vue";
import Carousel from "@/Components/Guest/Carousel.vue";
import PageContent from "@/Components/Guest/PageContent.vue";
import GuestLayout from "../Layouts/GuestLayout.vue";

export default {
  props: ["CarouselImages"],
  components: { GuestLayout, PageContent, Carousel, ApplicationModal },
  data() {
    return {
      message: {
        numberonly: "Chỉ được nhập số!",
      },
    };
  },
  methods: {
    isNumber: function (evt) {
      evt = evt ? evt : window.event;
      var charCode = evt.which ? evt.which : evt.keyCode;
      if (
        charCode > 31 &&
        (charCode < 48 || charCode > 57) &&
        charCode !== 46
      ) {
        evt.preventDefault();
      } else {
        return true;
      }
    },
  },
  computed: {},
};
</script>

<style>
.service-header {
  color: green;
  margin-left: 34%;
}
#bhyt {
  background-image: url("/images/homepage/BHYT.jpg");
  background-size: cover;
  height: 730px;
}
#bhyt .info-area {
  height: 250px;
}
#bhyt .info {
  width: 45%;
  text-align: justify;
}
#bhyt .dangky {
  margin-left: 2%;
  text-align: center;
  height: 350px;
}
</style>