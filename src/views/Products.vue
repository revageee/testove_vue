<template>
  <div>
    <h1>Список товарів</h1>
    <label for="sort">Сортувати за:</label>
    <select id="sort" v-model="sortOption" @change="sortProducts">
      <option value="date">Датою</option>
      <option value="price">Ціною</option>
    </select>
    <div v-for="product in sortedProducts" :key="product.id">
      <ProductCard :product="product" @viewDetail="viewDetail" />
    </div>
  </div>
</template>

<script>
import ProductCard from '../components/ProductCard.vue';

export default {
  name: 'Products',
  components: {
    ProductCard,
  },
  data() {
    return {
      products: [
        { id: 1, name: 'Товар 1', price: 100, date: '2024-10-01', image: 'path/to/image1.jpg' },
        { id: 2, name: 'Товар 2', price: 200, date: '2024-10-02', image: 'path/to/image2.jpg' },
        { id: 3, name: 'Товар 3', price: 150, date: '2024-10-03', image: 'path/to/image3.jpg' },
      ],
      sortOption: 'date',
    };
  },
  computed: {
    sortedProducts() {
      return this.products.sort((a, b) => {
        if (this.sortOption === 'date') {
          return new Date(a.date) - new Date(b.date);
        } else {
          return a.price - b.price;
        }
      });
    },
  },
  methods: {
    viewDetail(product) {
      this.$router.push({path: `/product/${product.id}`});
    },
  },
};
</script>
