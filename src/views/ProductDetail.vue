<template>
  <div v-if="product" class="product-detail">
    <h1 class="product-title">{{ product.name }}</h1>
    <img :src="product.image" alt="Product Image" class="product-image" />
    <p class="product-price">Ціна: {{ product.price }} грн</p>
    <p class="product-date">Дата: {{ product.date }}</p>
    <button class="buy-button" @click.stop="buyProduct">Купити</button>
    <router-link to="/products" class="back-link">Назад до товарів</router-link>
  </div>
</template>

<script>
export default {
  name: 'ProductDetail',
  props: ['id'],
  data() {
    return {
      product: null,
    };
  },
  created() {
    const products = [
      {id: 1, name: 'Товар 1', price: 100, date: '2024-10-01', image: 'path/to/image1.jpg'},
      {id: 2, name: 'Товар 2', price: 200, date: '2024-10-02', image: 'path/to/image2.jpg'},
      {id: 3, name: 'Товар 3', price: 150, date: '2024-10-03', image: 'path/to/image3.jpg'},
    ];
    this.product = products.find(p => p.id === Number(this.id));
  },
  methods: {
    buyProduct() {
      alert('Товар придбано!');
    },
  },
};
</script>

<style scoped>
.product-detail {
  max-width: 600px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  text-align: center;
}

.product-title {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333;
}

.product-image {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  margin-bottom: 15px;
}

.product-price {
  font-size: 20px;
  color: #28a745;
  margin-bottom: 10px;
}

.product-date {
  font-size: 14px;
  color: #888;
  margin-bottom: 20px;
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

.buy-button:hover {
  background-color: #0056b3;
}

.back-link {
  display: inline-block;
  margin-top: 15px;
  color: #007bff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.back-link:hover {
  color: #0056b3;
}
</style>
