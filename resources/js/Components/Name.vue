<template>
    <span>{{app_name}}</span>
</template>

<script>
export default {
  data() {
    return {
      app_name: process.env.MIX_APP_NAME,
    };
  },
};
</script>

<style>
</style>