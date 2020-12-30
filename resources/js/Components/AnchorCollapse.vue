<template>
  <a
    class="nav-link fw-bold"
    data-bs-toggle="collapse"
    :href="'#' + CollapseTaget"
    role="button"
    aria-expanded="false"
    :aria-controls="CollapseTaget"
  >
    <font-awesome-icon v-if="IconName" :icon="['fas', IconName]" />
    <span>{{ InnerData }}</span>
    <font-awesome-icon :icon="['fas', 'caret-down']" />
  </a>
</template>

<script>
export default {
  props: ['CollapseTaget', 'InnerData','IconName'],
  computed: {},
};
</script>

<style>
</style>