<template>
  <div @click="viewDetail" class="product-card">
    <img :src="product.image" alt="Product Image" />
    <h2>{{ product.name }}</h2>
    <p>Ціна: {{ product.price }} грн</p>
    <button @click.stop="buyProduct">Купити</button>
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
    buyProduct() {
      alert('Товар придбано!');
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
</style>
