<template>
  <div>
    <div class="container">
      <div class="section-title">
        <h2>Thư viện hình ảnh</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus animi
          excepturi officiis sunt saepe, culpa vitae obcaecati minus aperiam
          consectetur. Dolor eaque, magni vero labore maxime debitis aspernatur
          perspiciatis provident!
          <!-- {{ this.Gallery.mainDescription }} -->
        </p>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row no-gutters">
        <images v-for="Image of Gallery" :key="Image" :Image="Image"></images>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a
              href="/images/gallery/gallery-1.jpg"
              class="venobox"
              data-gall="gallery-item"
            >
              <img
                src="/images/gallery/gallery-1.jpg"
                alt=""
                class="img-fluid"
              />
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a
              href="/images/gallery/gallery-2.jpg"
              class="venobox"
              data-gall="gallery-item"
            >
              <img
                src="/images/gallery/gallery-2.jpg"
                alt=""
                class="img-fluid"
              />
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a
              href="/images/gallery/gallery-3.jpg"
              class="venobox"
              data-gall="gallery-item"
            >
              <img
                src="/images/gallery/gallery-3.jpg"
                alt=""
                class="img-fluid"
              />
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a
              href="/images/gallery/gallery-4.jpg"
              class="venobox"
              data-gall="gallery-item"
            >
              <img
                src="/images/gallery/gallery-4.jpg"
                alt=""
                class="img-fluid"
              />
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a
              href="/images/gallery/gallery-5.jpg"
              class="venobox"
              data-gall="gallery-item"
            >
              <img
                src="/images/gallery/gallery-5.jpg"
                alt=""
                class="img-fluid"
              />
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a
              href="/images/gallery/gallery-6.jpg"
              class="venobox"
              data-gall="gallery-item"
            >
              <img
                src="/images/gallery/gallery-6.jpg"
                alt=""
                class="img-fluid"
              />
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a
              href="/images/gallery/gallery-7.jpg"
              class="venobox"
              data-gall="gallery-item"
            >
              <img
                src="/images/gallery/gallery-7.jpg"
                alt=""
                class="img-fluid"
              />
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a
              href="/images/gallery/gallery-8.jpg"
              class="venobox"
              data-gall="gallery-item"
            >
              <img
                src="/images/gallery/gallery-8.jpg"
                alt=""
                class="img-fluid"
              />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Images from "./Images.vue";
export default {
  props: ["Gallery"],
  components: { Images },
};
</script>

<style>
</style>