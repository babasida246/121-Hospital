<template>
  <div class="tab-pane active show" id="tab-1">
    <div class="row">
      <div class="col-lg-8 details order-2 order-lg-1">
        <h3>{{ this.Department.name }}</h3>
        <p class="font-italic">
          {{ this.Department.description }}
        </p>
        <p>
          {{ this.Department.info }}
        </p>
      </div>
      <div class="col-lg-4 text-center order-1 order-lg-2">
        <img
          :src="'/images/departments/' + this.Department.img"
          alt=""
          class="img-fluid"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["Department"],
};
</script>

<style>
</style>