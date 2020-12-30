<template>
  <admin-layout>
    <form @submit.prevent="submit">
      <label for="first_name">First name:</label>
      <input id="first_name" v-model="form.first_name" />
      <label for="last_name">Last name:</label>
      <input id="last_name" v-model="form.last_name" />
      <label for="email">Email:</label>
      <input id="email" v-model="form.email" />
      <button type="submit">Submit</button>
    </form>
  </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
  components: { AdminLayout,NavContent },
  data() {
    return {
      form: {
        first_name: null,
        last_name: null,
        email: null,
      },
    }
  },
  methods: {
    submit() {
      this.$inertia.post('/users', this.form)
    },
  },
};
</script>

<style>
</style>