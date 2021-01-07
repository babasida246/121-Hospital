<template>
  <inertia-link :href="ScrollTopIfSamePage" :class="IsActive">
    <slot></slot>
  </inertia-link>
</template>

<script>
export default {
  props: ["href"],
  computed: {
    ScrollTopIfSamePage() {
      return route().current(route().current()) ? "#" : "route(href)";
    },
    IsActive() {
      return route().current(this.href) ? "active" : "";
    },
  },
};
</script>
