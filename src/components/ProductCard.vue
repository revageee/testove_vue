<template>
  <div @click="viewDetail" class="product-card">
    <img :src="product.image" alt="Product Image" />
    <h2>{{ product.name }}</h2>
    <p>Ціна: {{ product.price }} грн</p>
    <button class="buy-button">Купити</button>
  </div>
</template>

<script>
export default {
  name: 'ProductCard',
  props: {
    product: Object,
  },
  methods: {
    viewDetail() {
      this.$emit('viewDetail', this.product);
    },
  },
};
</script>

<style>
.product-card {
  max-width: 800px;
  margin: 20px auto;
  padding: 70px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.buy-button {
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}
</style>
