<template>
  <ul class="navbar-nav ms-1 flex-column">
    <li v-for="MenuItem of menulist" :key="MenuItem.id">
      <application-link
        v-if="!MenuItem.submenu"
        class="nav-link align-bottom"
        :link="MenuItem.link"
        :iconname="MenuItem.icon"
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
import menutructure from "@/navigation.json";
import SubItem from "./SubItem.vue";
import ApplicationLink from "../ApplicationLink.vue";
import AnchorCollapse from "@/Components/Admin/AnchorCollapse.vue";
console.log(menutructure);
export default {
  components: { SubItem, ApplicationLink, AnchorCollapse },
  props: [""],
  data() {
    return {
      menulist: menutructure,
    };
  },
  computed: {
    CheckSubMenu() {},
  },
};
</script>

<style>
</style>