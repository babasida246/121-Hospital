<template>
  <li class="nav-item">
    <a
      class="nav-link active show"
      data-bs-toggle="tab"
      :href="'#' + departmentID"
      >{{ departmentName }}</a
    >
  </li>
</template>

<script>
export default {
  props: ["departmentName", "departmentID"],
};
</script>

<style>
</style>