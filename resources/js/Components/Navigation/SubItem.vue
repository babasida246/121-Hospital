<template>
  <ul class="collapse ms-3" :id="id">
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
import AnchorCollapse from "../Admin/AnchorCollapse.vue";
import ApplicationLink from "../ApplicationLink.vue";
export default {
  name: "sub-item",
  components: { ApplicationLink, AnchorCollapse },
  props: ["menulist", "id"],
};
</script>

<style>
</style>