<template>
  <guest-layout>
    
  </guest-layout>
</template>

<script>
/* const image = require.context("../../img/carousel", false, /^.*\.jpg$/);
console.log(image.keys()); */

import PageContent from "../Components/PageContent.vue";
import GuestLayout from "../Layouts/GuestLayout.vue";

export default {
  props:['dir'],
  components: { GuestLayout, PageContent },
  data(){
    return{
      test: $page['props']['dir']
    }
  }
};

</script>

<style>
</style>