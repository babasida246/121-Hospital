  <template>
  <nav class="navbar navbar-expand-sm navbar-dark shadow-lg rounded army-color">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand d-md-none" href="#">
        <application-logo class="ms-2"></application-logo>
        <application-name class="ps-2"></application-name>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
       Menu <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <nav-left></nav-left>
  </nav>
</template>

<script>
import NavLeft from "./NavLeft.vue";
import ApplicationLogo from "../ApplicationLogo.vue";
import ApplicationName from "../ApplicationName.vue";

export default {
  props:{
    
  },
  components: {
    NavLeft,
    ApplicationLogo,
    ApplicationName
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