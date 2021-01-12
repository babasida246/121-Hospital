<template>
  <guest-layout>
    <!-- ======= Hero Section ======= -->
    <section id="intro" class="d-flex align-items-center">
      <div class="container">
        <h1>Bệnh viện Quân y 121</h1>
        <h2>TÔN TRỌNG - TẬN TÂM - TRUNG THỰC - THÂN THIỆN</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </section>
    <!-- End Hero -->
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Vì sao nên chọn bệnh viện Quân y 121?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis
                aute irure dolor in reprehenderit Asperiores dolores sed et.
                Tenetur quia eos. Autem tempore quibusdam vel necessitatibus
                optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"
                  >Tìm hiểu thêm<i class="bx bx-chevron-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Đội ngũ bác sĩ trình độ chuyên môn cao</h4>
                    <p>
                      Consequuntur sunt aut quasi enim aliquam quae harum
                      pariatur laboris nisi ut aliquip
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Trang thiết bị hiện đại</h4>
                    <p>
                      Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Phục vụ tận tâm</h4>
                    <p>
                      Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                      maiores omnis facere
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End .content-->
          </div>
        </div>
      </div>
    </section>
    <!-- End Why Us Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <about></about>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i><vs-icon icon="fa-user-md" icon-pack="fas" size="25px"></vs-icon></i>
                <span data-toggle="counter-up">85</span>
                <p>Nhân viên y tế</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i><vs-icon icon="fa-user-md" icon-pack="fas" size="25px"></vs-icon></i>
                <span data-toggle="counter-up">18</span>
                <p>Chuyên khoa</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i><vs-icon icon="fa-user-md" icon-pack="fas" size="25px"></vs-icon></i>
                <span data-toggle="counter-up">8</span>
                <p>Chuẩn đoán kỹ thuật cao</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i><vs-icon icon="fa-user-md" icon-pack="fas" size="25px"></vs-icon></i>
                <span data-toggle="counter-up">150</span>
                <p>Thành tích - Phần thưởng</p>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
     <service></service>
    </section>
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Đăng ký khám chữa bệnh trực tuyến</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
            aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos
            quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
            fugiat sit in iste officiis commodi quidem hic quas.
          </p>
        </div>

        <form
          action="forms/appointment.php"
          method="post"
          role="form"
          class="php-email-form"
        >
          <div class="row">
            <div class="col-md-4 form-group">
              <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                placeholder="Your Name"
                data-rule="minlen:4"
                data-msg="Please enter at least 4 chars"
              />
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                placeholder="Your Email"
                data-rule="email"
                data-msg="Please enter a valid email"
              />
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input
                type="tel"
                class="form-control"
                name="phone"
                id="phone"
                placeholder="Your Phone"
                data-rule="minlen:4"
                data-msg="Please enter at least 4 chars"
              />
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input
                type="datetime"
                name="date"
                class="form-control datepicker"
                id="date"
                placeholder="Appointment Date"
                data-rule="minlen:4"
                data-msg="Please enter at least 4 chars"
              />
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea
              class="form-control"
              name="message"
              rows="5"
              placeholder="Message (Optional)"
            ></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">
              Your appointment request has been sent successfully. Thank you!
            </div>
          </div>
          <div class="text-center">
            <button type="submit">Make an Appointment</button>
          </div>
        </form>
      </div>
    </section>
    <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <department></department>
    </section>
    <!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <doctor></doctor>
    </section>
    <!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <frequently-asked-questions></frequently-asked-questions>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <testimonial></testimonial>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <gallery></gallery>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Liên hệ</h2>
          <p>
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
            aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos
            quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
            fugiat sit in iste officiis commodi quidem hic quas.
          </p>
        </div>
      </div>

      <div>
        <iframe
          style="border: 0; width: 100%; height: 350px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6607.569043491652!2d105.78671875267939!3d10.026425364103385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a088206560564f%3A0xa210cac183dc92c9!2s121%20Military%20Hospital!5e0!3m2!1sen!2s!4v1609898897598!5m2!1sen!2s"
          frameborder="0"
          allowfullscreen
        ></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Địa chỉ:</h4>
                <p>
                  Số 01, đường 30/4, phường An Lạc, quận Ninh Kiều, TP Cần Thơ
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>benhvienquany121@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Số điện thoại:</h4>
                <p>0292 3820625</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form
              action="forms/contact.php"
              method="post"
              role="form"
              class="php-email-form"
            >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                  />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject"
                />
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  data-rule="required"
                  data-msg="Please write something for us"
                  placeholder="Message"
                ></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your message has been sent. Thank you!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </guest-layout>
</template>

<script>
import About from '../Components/Guest/About/About.vue';
import Department from '../Components/Guest/Departments/Department.vue';
import Doctor from "../Components/Guest/Doctors/Doctor.vue";
import FrequentlyAskedQuestions from '../Components/Guest/FAQ/FrequentlyAskedQuestions.vue';
import Gallery from '../Components/Guest/Gallery/Gallery.vue';
import Service from '../Components/Guest/Services/Service.vue';
import Testimonial from '../Components/Guest/Testimonial/Testimonial.vue';
import GuestLayout from '../Layouts/GuestLayout.vue';

export default {
  props: ["CarouselImages","Contents"],
  components: { GuestLayout, Doctor, Department, Gallery, FrequentlyAskedQuestions, Service, About, Testimonial},
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
</style>