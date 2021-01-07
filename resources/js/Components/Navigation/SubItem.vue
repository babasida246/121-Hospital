<template>
  <ul class="collapse ms-1" :id="id">
    <li v-for="MenuItem of menulist" :key="MenuItem.id">
      <anchor-with-icon
        v-if="!MenuItem.submenu"
        class="nav-link align-bottom"
        :link="MenuItem.link"
        :IconName="MenuItem.icon"
      >
        {{ MenuItem.innerhtml }}
      </anchor-with-icon>
      <anchor-collapse
        v-else
        class="nav-item"
        :CollapseTaget="MenuItem.target"
        :InnerData="MenuItem.innerhtml"
        :IconName="MenuItem.icon"
      ></anchor-collapse>
      <sub-item
        v-if="MenuItem.submenu"
        :id="MenuItem.target"
        :menulist="MenuItem.submenu"
      ></sub-item>
    </li>
  </ul>
</template>

<script>
import AnchorCollapse from "../AnchorCollapse.vue";
import AnchorWithIcon from './AnchorWithIcon.vue';
export default {
  name: "sub-item",
  components: {AnchorCollapse, AnchorWithIcon },
  props: ["menulist", "id"],
};
</script>

<style>
</style>