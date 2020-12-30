<template>
  <ul class="navbar-nav ms-1 flex-column">
    <li v-for="MenuItem of menulist" :key="MenuItem.id">
      <application-link
        v-if="!MenuItem.submenu"
        class="nav-link align-bottom"
        :link="MenuItem.link"
        :IconName="MenuItem.icon"
      >
        {{ MenuItem.innerhtml }}
      </application-link>
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
import SubItem from "./NavigationSubItem.vue";
import ApplicationLink from "@/Components/ApplicationLink.vue";
import AnchorCollapse from "@/Components/AnchorCollapse.vue";
import customFunction from "@/custom.js"

export default {
  components: { SubItem, ApplicationLink, AnchorCollapse },
  props: ["MenuStructure"],
  data() {
    return {
      menulist: customFunction.menuModifier(this.MenuStructure),
    };
  },
  computed: {
    CheckSubMenu() {},
  },
};
</script>

<style>
</style>