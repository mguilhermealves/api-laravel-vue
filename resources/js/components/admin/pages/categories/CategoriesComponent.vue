<template>
  <div>
    <table class="table table-dark">
      <thead>
        <tr>
          <td>ID</td>
          <td>NOME</td>
          <td>AÇÕES</td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(category, index) in categories.data" :key="index">
          <td>{{ category.id }}</td>
          <td v-text="category.name"></td>
          <td widht="100%">...</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from "axios";

export default {
  created() {
      this.$store.dispatch('loadCategories')
  },
  computed: {
      categories() {
          return this.$store.state.categories.itens
      }
  }
};
</script>

<style scoped>
</style>
