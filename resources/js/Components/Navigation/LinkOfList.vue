<template>
  <li :class="IsActive">
    <a v-if="CheckHastag" :href="link" v-smooth-scroll="{ offset: -20 }"
      ><slot></slot
    ></a>
    <anchor-with-icon v-else :link="link"><slot></slot></anchor-with-icon>
  </li>
</template>

<script>
import AnchorWithIcon from "./AnchorWithIcon.vue";
export default {
  components: { AnchorWithIcon },
  props: ["link", "innerHTML"],
  data() {
    return {};
  },
  methods: {},
  computed: {
    IsActive() {
      return route().current(this.link) ? "active" : "";
    },
    CheckHastag() {
      return this.link.includes("#") ? true : false;
    },
  },
};
</script>

<style>
</style>