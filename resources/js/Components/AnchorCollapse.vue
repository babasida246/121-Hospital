<template>
  <a
    class="nav-link fw-bold"
    data-bs-toggle="collapse"
    :href="'#' + CollapseTaget"
    role="button"
    aria-expanded="false"
    :aria-controls="CollapseTaget"
  >
    {{ InnerData }} <font-awesome-icon :icon="['fas', 'caret-down']" />
  </a>
</template>

<script>
export default {
  props: {
    CollapseTaget: String,
    InnerData: String,
    Icon: Array,
  },
  computed: {},
};
</script>

<style>
</style>