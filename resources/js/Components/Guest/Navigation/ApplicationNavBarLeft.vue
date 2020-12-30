<template>
  <div class="collapse navbar-collapse ms-1">
    <navigation-content :MenuStructure='menulist'></navigation-content>
  </div>
</template>

<script>
import Menu from './navigation.json';
import NavigationContent from '../../Navigation/NavigationContent.vue';

export default {
  props: {},
  components: {
    NavigationContent,
  },
   data(){
    return{
      menulist: Menu
    }
  }
};
</script>

<style>
</style>