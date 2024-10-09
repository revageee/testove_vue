<template>
  <header class="header">
    <nav>
      <ul class="nav-list">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Головна</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/products" class="nav-link">Список товарів</router-link>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'Header',
};
</script>

<style scoped>
.header {
  background-color: #007bff;
  padding: 15px;
  color: white;
  text-align: center;
}

.nav-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
}

.nav-item {
  margin: 0 15px;
}

.nav-link {
  color: white;
  text-decoration: none;
  font-size: 18px;
  transition: color 0.3s ease;
}

.nav-link:hover {
  color: #ddd;
}
</style>
