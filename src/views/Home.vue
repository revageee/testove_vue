<template>
  <div class="about-container">
    <h1 class="about-title">Про мене</h1>
    <p class="about-description">Привіт! Я розробник Vue.js.</p>
    <p class="about-time">На виконання цього тестового завдання пішло приблизно 2 години.</p>
  </div>
</template>

<script>
export default {
  name: 'Home',
};
</script>

<style scoped>
.about-container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.about-title {
  font-size: 24px;
  color: #333;
  margin-bottom: 10px;
}

.about-description,
.about-time {
  font-size: 18px;
  color: #555;
  line-height: 1.6;
  margin-bottom: 15px;
}
</style>
