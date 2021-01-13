<template>
  <div>
    <vs-navbar v-model="activeItem" class="nabarx">
      <div slot="title">
        <vs-button
          @click="active = !active"
          icon="menu"
          type="flat"
          text-color="rgb(10, 20, 30)"
          >Menu</vs-button
        >
      </div>
      <vs-navbar-item index="0">
        <a href="#">Home</a>
      </vs-navbar-item>
      <vs-navbar-item index="1">
        <a href="#">News</a>
      </vs-navbar-item>
      <vs-navbar-item index="2">
        <a href="#">Update</a>
      </vs-navbar-item>
      <vs-input icon="search" placeholder="Search" v-model="search" />
    </vs-navbar>
    <div id="parentx">
      <vs-sidebar
        parent="body"
        default-index="1"
        color="primary"
        class="sidebarx"
        spacer
        v-model="active"
      >
        <div class="header-sidebar" slot="header">
          <vs-avatar
            size="70px"
            src="https://randomuser.me/api/portraits/men/85.jpg"
          />

          <h4>
            My Name
            <!-- <vs-button
              color="primary"
              icon="more_horiz"
              type="flat"
            ></vs-button> -->
          </h4>
        </div>

        <vs-sidebar-item index="1" icon="question_answer">
          Dashboard
        </vs-sidebar-item>
        <vs-sidebar-item index="2" icon="push_pin">
          Post
        </vs-sidebar-item>

        <vs-sidebar-item index="3" icon="perm_media">
          Media
        </vs-sidebar-item>
        <vs-sidebar-item index="4" icon="web">
          Pages
        </vs-sidebar-item>
        <vs-sidebar-item index="5" icon="comment">
          Comments
        </vs-sidebar-item>
        <vs-sidebar-item index="6" icon="build_circle">
          Tool
        </vs-sidebar-item>         

        <vs-sidebar-item index="7" icon="history"> History </vs-sidebar-item>

        <vs-divider icon="person" position="left"> User </vs-divider>

        <vs-sidebar-item index="8" icon="verified_user">
          Configurations
        </vs-sidebar-item>
        <vs-sidebar-item index="9" icon="account_box">
          Profile
        </vs-sidebar-item>
        <vs-sidebar-item index="10"> Card </vs-sidebar-item>

        <div class="footer-sidebar" slot="footer">
          <vs-button icon="reply" color="danger" type="flat">log out</vs-button>
          <vs-button icon="settings" color="primary" type="border"></vs-button>
        </div>
      </vs-sidebar>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      active: false,
      activeItem: 0,
    };
  },
};
</script>

<style lang='scss'>
@import "@scss/Admin/sidebar.scss";
</style>