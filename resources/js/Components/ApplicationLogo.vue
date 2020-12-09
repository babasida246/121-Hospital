<template>
  <img
    :src="src"
    width="30"
    height="30"
    class="d-inline-block align-top"
    alt=""
    loading="lazy"
  />
</template>

<script>
export default {
  data(){
    return{
      src: process.env.MIX_APP_LOGO,
    }
  }
};
</script>

<style>
</style>