<template>
  <li :class="IsActive">
    <inertia-link :href="route(link)" class="nav-link">
      <i class="material-icons">{{icon}}</i>
      <p>{{label}}</p>
    </inertia-link>
  </li>
</template>

<script>
export default {
  props: ["link", "icon", "label"],
  computed: {
    IsActive() {
      return route().current(this.link) ? "active" : "";
    },
  },
};
</script>

<style>
</style>