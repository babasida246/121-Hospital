<template>
  <div class="mt-1 rounded-1 d-none d-md-block">
    <b-carousel
      id="carousel-1"
      :interval="5000"
      controls
      indicators
      background="#ababab"
      img-width="300"
      img-height="500"
      style="text-shadow: 1px 1px 2px #333"
    >
      <!-- Text slides with image -->
      <b-carousel-slide
        v-for="image in imagelist"
        :key="image"
        caption=""
        text=""
        :img-src="'images/carousel/' + image"
      ></b-carousel-slide>
    </b-carousel>
  </div>
</template>

<script>
export default {
  props: ["imagelist"],
};
</script>

<style>
</style>