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
  cursor: pointer;
  border: 1px solid #ccc;
  padding: 16px;
  margin: 8px;
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
