  <template>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-lg rounded mt-3">
    <div class="container-fluid">
      <a class="navbar-brand d-lg-none" href="#">Menu</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <nav-left></nav-left>
  </nav>
</template>

<script>
import NavLeft from "./NavLeft.vue";
import Logo from "../ApplicationLogo";
import AppName from "../ApplicationName";

export default {
  props:{
    
  },
  components: {
    NavLeft,
    Logo,
    AppName
  },
  data() {
    return {
      logo_img: process.env.MIX_APP_LOGO,
      app_name: process.env.MIX_APP_NAME,
    };
  },
  computed:{
    
  }
};
</script>

<style>
</style>