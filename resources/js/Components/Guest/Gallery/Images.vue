<template>
  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a
        :href="'/images/gallery/' + this.Image.name"
        class="venobox"
        data-gall="gallery-item"
      >
        <img
          :src="'/images/gallery/' + this.Image.name"
          alt=""
          class="img-fluid"
        />
      </a>
    </div>
  </div>
</template>

<script>
export default {
  props: ["Image"],
};
</script>

<style>
</style>