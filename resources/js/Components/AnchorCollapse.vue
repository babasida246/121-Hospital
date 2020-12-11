<template>
  <a
    class="nav-link fw-bold"
    data-bs-toggle="collapse"
    :href="'#' + CollapseTaget"
    role="button"
    aria-expanded="false"
    :aria-controls="CollapseTaget"
  > 
    <font-awesome-icon :icon="['fas', IconName]" />
    <span>{{ InnerData }}</span>
    <font-awesome-icon :icon="['fas', 'caret-down']" />
  </a>
</template>

<script>
export default {
  props: {
    CollapseTaget: String,
    InnerData: String,
    IconName: String
  },
  computed: {},
};
</script>

<style>
</style>