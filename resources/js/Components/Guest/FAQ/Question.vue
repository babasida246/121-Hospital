<template>
  <li data-aos="fade-up" data-aos-delay="100">
    <i class="bx bx-help-circle icon-help"></i>
    <a
      data-bs-toggle="collapse"
      class="collapsed"
      :data-bs-target="'#' + this.Question.id"
      >{{ this.Question.question }} <i class="bx bx-chevron-down icon-show"></i
      ><i class="bx bx-chevron-up icon-close"></i
    ></a>
    <div :id="this.Question.id" class="collapse" data-bs-parent=".faq-list">
      <p>
        {{ this.Question.answer }}
      </p>
    </div>
  </li>
</template>

<script>
export default {
  props: ["Question"],
};
</script>

<style>
</style>