  <template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-color shadow-lg rounded army-color">
    <div class="container-fluid">
      <a class="navbar-brand d-inline-block" href="#">
        <!-- <application-logo></application-logo>
        <br> -->
        <application-name class="ps-2" style="color:red; font-weight:bold"></application-name>
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
    <application-nav-bar-left id="navbar"></application-nav-bar-left>
  </nav>
</template>

<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import ApplicationName from "@/Components/ApplicationName.vue";
import ApplicationNavBarLeft from "./ApplicationNavBarLeft.vue";

export default {
  props: {},
  components: {
    ApplicationLogo,
    ApplicationName,
    ApplicationNavBarLeft,
  },
  data() {
    return {
      logo_img: process.env.MIX_APP_LOGO,
      app_name: process.env.MIX_APP_NAME,
    };
  },
  computed: {},
};
</script>

<style>
</style>