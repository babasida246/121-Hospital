<template>
  <div>
    <app-header></app-header>

    <div class="card">
      <div class="card-header">Featured</div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">
          With supporting text below as a natural lead-in to additional content.
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <!--     <vs-row vs-justify="">
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
        <vs-card actionable>
          <div slot="header">
            <h3>Hello world !</h3>
          </div>
          <div>
            <span
              >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.</span
            >
          </div>
          <div slot="footer">
            <vs-row vs-justify="flex-end">
              <vs-button
                type="gradient"
                color="danger"
                icon="favorite"
              ></vs-button>
              <vs-button color="primary" icon="turned_in_not"></vs-button>
              <vs-button
                color="rgb(230,230,230)"
                color-text="rgb(50,50,50)"
                icon="settings"
              ></vs-button>
            </vs-row>
          </div>
        </vs-card>
      </vs-col>
      
    </vs-row> -->
  </div>
</template>

<script>
import AppHeader from "../Components/Admin/Header.vue";
export default {
  components: { AppHeader },
};
</script>

<style lang="scss" scoped>
@import "../../scss/Admin/admin.scss";
</style>