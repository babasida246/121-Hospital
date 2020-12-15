<template>
  <guest-layout>
    <carousel :imagelist="CarouselImages"></carousel>
    <div class="container-fluid">
      <section class="mt-3">
        <div class="justify-content-center">
          <h1 class="text-center" style="color: green">CÁC DỊCH VỤ</h1>
          <br />
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon :icon="['fas', 'heartbeat']" /> <br />
                      Khám chữa bệnh Bảo hiểm y tế
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>
                      Hướng dẫn khám chữa bệnh, các vấn đề liên quan bảo hiểm y
                      tế
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon
                        :icon="['fas', 'hand-holding-heart']"
                      /><br />
                      Khám chữa bệnh theo yêu cầu
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>
                      Khám chữa bệnh, thực hiện các cận lâm sàng theo yêu cầu
                      khách hàng
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon :icon="['fas', 'diagnoses']" /><br />
                      Khám sức khỏe
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>
                      Cung cấp các gói kiểm tra sức khỏe định kỳ cho các cơ quan
                      đơn vị
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon :icon="['fas', 'x-ray']" /><br />
                      Kỹ thuật chuẩn đoán hình ảnh
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>Các ký thuật chuẩn đoán hình ảnh, chức năng đang triển khai tại Bệnh viện</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon
                        :icon="['fas', 'file-medical']"
                      /><br />
                      Phẫu thuật - kỹ thuật cao
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>Các phẫu thuật, kỹ thuật cao đang triển khai tại Bệnh viện</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon :icon="['fas', 'microscope']" /><br />
                      Kỹ thuật xét nghiệm
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>Các kỹ thuật xét nghiệm đang triển khai tại Bệnh viện</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
.service-header {
  color: green;
}
</style>