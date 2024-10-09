<template>
  <div class="products-container">
    <h1 class="products-title">Список товарів</h1>
    <label for="sort" class="sort-label">Сортувати за:</label>
    <select id="sort" v-model="sortOption" @change="sortProducts" class="sort-select">
      <option value="date">Датою</option>
      <option value="price">Ціною</option>
    </select>
    <div class="products-list">
      <ProductCard
          v-for="product in sortedProducts"
          :key="product.id"
          :product="product"
          @viewDetail="viewDetail"
      />
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
      this.$router.push({ path: `/product/${product.id}` });
    },
  },
};
</script>

<style scoped>
.products-container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.products-title {
  font-size: 28px;
  margin-bottom: 20px;
  text-align: center;
  color: #333;
}

.sort-label {
  font-size: 16px;
  margin-right: 10px;
}

.sort-select {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
  font-size: 16px;
}

.products-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 20px;
}
</style>
