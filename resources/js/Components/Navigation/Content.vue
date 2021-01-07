<template>
  <ul class="navbar-nav ms-1 flex-column">
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
import SubItem from "./SubItem.vue";
import AnchorCollapse from "@/Components/AnchorCollapse.vue";
import customFunction from "@/custom.js"
import AnchorWithIcon from './AnchorWithIcon.vue';

export default {
  components: { SubItem, AnchorCollapse, AnchorWithIcon },
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