<template>
  <guest-layout>
    <carousel :imagelist="CarouselImages"></carousel>
    <div class="">
      <section class="mt-3">
        <div class="justify-content-center">
          <h1 class="text-center" style="color: green">CÁC DỊCH VỤ</h1>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 mb-3">
                <div class="card h-100">
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
                    <div class="d-flex justify-content-center" style="bottom: 0;">
                      <button
                        type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#kcbBHYT"
                      >
                        Đăng ký khám chữa bệnh
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary ms-1"
                        data-bs-toggle="modal"
                        data-bs-target="#banggiaBHYT"
                      >
                        Bảng giá dịch vụ
                      </button>
                      <application-modal
                        modalID="kcbBHYT"
                        modalTitle="Đăng ký khám chữa bệnh"
                        savebutton="false"
                      ></application-modal>
                      <application-modal
                        modalID="banggiaBHYT"
                        modalTitle="Bảng giá dịch vụ BHYT"
                        savebutton="false"
                      ></application-modal>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3">
                <div class="card h-100">
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
                    <div class="d-flex justify-content-center">
                      <button
                        type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#kcbTYC"
                      >
                        Đăng ký khám chữa bệnh
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary ms-1"
                        data-bs-toggle="modal"
                        data-bs-target="#banggiaTYC"
                      >
                        Bảng giá dịch vụ
                      </button>
                      <application-modal
                        modalID="kcbTYC"
                        modalTitle="Đăng ký khám chữa bệnh"
                        savebutton="false"
                      ></application-modal>
                      <application-modal
                        modalID="banggiaTYC"
                        modalTitle="Bảng giá dịch vụ khám chữa bệnh theo yêu cầu"
                        savebutton="false"
                      ></application-modal>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3">
                <div class="card h-100">
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
                    <div class="d-flex justify-content-center">
                      <button
                        type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#goikhamsk"
                      >
                        Đăng ký gói khám sức khỏe
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary ms-1"
                        data-bs-toggle="modal"
                        data-bs-target="#banggiagoikcb"
                      >
                        Bảng giá dịch vụ
                      </button>
                      <application-modal
                        modalID="goikhamsk"
                        modalTitle="Đăng ký gói khám sức khỏe"
                        savebutton="false"
                      ></application-modal>
                      <application-modal
                        modalID="banggiagoikcb"
                        modalTitle="Bảng giá các gói dịch vụ khám sức khỏe"
                        savebutton="false"
                      ></application-modal>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3 d-none d-sm-block">
                <div class="card h-100">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon :icon="['fas', 'x-ray']" /><br />
                      Kỹ thuật chuẩn đoán hình ảnh
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>
                      Các ký thuật chuẩn đoán hình ảnh và chức năng đang triển
                      khai tại Bệnh viện
                    </p>
                    <div class="d-flex justify-content-center">
                      <button
                        type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#chuandoan"
                      >
                        Xem thông tin
                      </button>                      
                      <application-modal
                        modalID="chuandoan"
                        modalTitle="Kỹ thuật chuẩn đoán chức năng và hình ảnh"
                        savebutton="false"
                      ></application-modal>                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3 d-none d-sm-block">
                <div class="card h-100">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon
                        :icon="['fas', 'file-medical']"
                      /><br />
                      Phẫu thuật - kỹ thuật cao
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>
                      Các phẫu thuật-kỹ thuật cao đang triển khai tại Bệnh viện
                    </p>
                    <div class="d-flex justify-content-center">
                      <button
                        type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#phauthuat"
                      >
                        Xem thông tin
                      </button>                    
                      <application-modal
                        modalID="phauthuat"
                        modalTitle="Phẫu thuật-kỹ thuật cao"
                        savebutton="false"
                      ></application-modal>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3 d-none d-sm-block">
                <div class="card h-100">
                  <div class="card-header text-center">
                    <h5 class="service-header">
                      <font-awesome-icon :icon="['fas', 'microscope']" /><br />
                      Kỹ thuật xét nghiệm
                    </h5>
                  </div>
                  <div class="card-body">
                    <p>Các kỹ thuật xét nghiệm đang triển khai tại Bệnh viện</p>
                    <br>
                    <div class="d-flex justify-content-center">
                      <button
                        type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#xetnghiem"
                      >
                        Xem thông tin
                      </button>                 
                      <application-modal
                        modalID="xetnghiem"
                        modalTitle="Các kỹ thuật xét nghiệm"
                        savebutton="false"
                      ></application-modal>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
  </guest-layout>
</template>

<script>
import ApplicationModal from "../Components/ApplicationModal.vue";
import Carousel from "../Components/Guest/Carousel.vue";
import PageContent from "../Components/PageContent.vue";
import GuestLayout from "../Layouts/GuestLayout.vue";

export default {
  props: ["CarouselImages"],
  components: { GuestLayout, PageContent, Carousel, ApplicationModal },
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