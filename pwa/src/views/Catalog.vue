<template>
  <div class="catalog">
    <Cart></Cart>
    <div id="products">
      <ProductShort class="cart" v-for="product in products" v-bind:key="product.id" :id="product.id"></ProductShort>
    </div>
  </div>
</template>

<script>
  // @ is an alias to /src
  /*import Header from '@/components/Header.vue'
  import Footer from '@/components/Footer.vue'*/
  import ProductShort from "../components/ProductShort"
  import Cart from "../components/Cart"
  import axios from 'axios';

  export default {
    name: 'Catalog',
    components: {
      Cart,
      ProductShort
    },
    data() {
      return {
        products: null
      }
    },
    mounted() {
      axios
              .get("http://localhost/demo-commerce/web/jsonapi/commerce_product/clothing")
              .then(response => {
                this.products = response.data.data
              })
    }
  }
</script>

<style scoped>
  .catalog {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  #cart {
    width: 10%;
    height: 100%;
  }
  #products {
    width: 60%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
</style>