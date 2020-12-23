<template>
  <img
    :src="src"
    :width="width"
    :height="height"
    class="d-inline-block align-top"
    alt=""
    loading="lazy"
  />
</template>

<script>
export default {
  props:['width','height'],
  data(){
    return{
      src: process.env.MIX_APP_LOGO,
    }
  }
};
</script>

<style>
</style>