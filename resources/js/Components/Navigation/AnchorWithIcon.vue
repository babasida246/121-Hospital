<template>
  <inertia-link :href="route(link)" :class="IsActive">
    <span v-if="icon"
      ><vs-icon
        :icon="icon"
        :icon-pack="iconPack"
        :color="iconColor"
        :bg="iconBg"
        :size="iconSize"
        :round="iconRound"
        :click="iconClick"
      >
      </vs-icon>
    </span>
    <slot></slot>
  </inertia-link>
</template>

<script>
export default {
  props: [
    "link",
    "icon",
    "iconPack",
    "iconSize",
    "iconColor",
    "iconBg",
    "iconRound",
    "iconClick",
  ],
  computed: {
    IsActive() {
      return route().current(this.link) ? "active" : "";
    },
  },
};
</script>
