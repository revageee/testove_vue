<template>
  <div v-if="product">
    <h1>{{ product.name }}</h1>
    <img :src="product.image" alt="Product Image" />
    <p>Ціна: {{ product.price }} грн</p>
    <p>Дата: {{ product.date }}</p>
    <button @click="buyProduct">Купити</button>
    <router-link to="/products">Назад до товарів</router-link>
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
    // Припустимо, що тут ми отримуємо дані про товар з API або локальної бази
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
