<template>
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">{{ tableTitle }}</h4>
      <p class="card-category">{{ tableSubtitle }}</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <th v-for="column in tableData.columns" :key="column">
              {{ column.name }}
            </th>
          </thead>
          <tr v-for="row in tableData.rows" :key="row">
            <td
              v-for="(data, index) in row"
              :key="data"
              :class="tableData.columns[index].class"
            >
              {{ data }}
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  props: ["tableTitle", "tableSubtitle", "tableData"],
  data() {
    return {};
  },
};
</script>

<style>
</style>