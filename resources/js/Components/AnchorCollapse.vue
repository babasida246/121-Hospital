<template>
  <a
    class="nav-link"
    data-bs-toggle="collapse"
    :href='"#" + CollapseTaget'
    role="button"
    aria-expanded="false"
    :aria-controls="CollapseTaget"
  >
  {{InnerData}}
  </a>
</template>

<script>
export default {
  props: {
    "CollapseTaget": String,
    "InnerData": String
  },
};
</script>

<style>
</style>