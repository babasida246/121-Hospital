<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-color shadow-lg rounded">
    <div class="container-fluid">
      <a class="navbar-brand d-inline-block" href="#">
        <!-- <application-logo></application-logo>
        <br> -->
        <name
          class="ps-2"
          style="color: red; font-weight: bold"
        ></name>
      </a>
      <div class="navbar-nav-scroll ms-auto">
        <ul class="navbar-nav bd-navbar-nav">
          <li>
            <a
              class="nav-link"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbar"
              aria-controls="navbar"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <navigation-content
    class="collapse"
      :MenuStructure="menulist"
      id="navbar"
    ></navigation-content>
  </nav>
</template>

<script>
import Logo from "../Logo.vue";
import Name from "../Name.vue";
import NavigationContent from "./Content.vue";

export default {
  props: ["MenuStructure"],
  components: {
    Logo,
    Name,
    NavigationContent,
  },
  data() {
    return {
      menulist: this.MenuStructure,
    };
  },
};
</script>

<style>
</style>