<template>
  <div>
    <ul>
      <li>
        <router-link :to="{ name: 'admin.dashboard' }">Dashboard</router-link>
      </li>
      <li>
        <router-link :to="{ name: 'admin.categories' }">Categorias ({{totalCategories}})</router-link>
      </li>
    </ul>

    <router-view></router-view>
  </div>
</template>

<script>
export default {
    computed: {
        totalCategories() {
            return this.$store.state.categories.itens.data.length
        }
    }
};
</script>

<style scoped>
</style>
