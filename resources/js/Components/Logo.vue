<template>
  <span>
    <img
      src="/images/app/logo.svg"
      :width="width"
      :height="height"
      class="d-inline-block align-top"
      alt=""
      loading="lazy"
    />
    <slot></slot>
  </span>
</template>

<script>
export default {
  props:['width','height'],
  data(){
    return{
      
    }
  }
};
</script>

<style>
</style>