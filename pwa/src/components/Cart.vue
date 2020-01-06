<template>
  <div class="cart">
    <h2>Cart</h2>
    <ul>
      <li v-for="item in cart" v-bind:key="item.order_item_id"><button type="button">x</button>{{item.title}} x {{item.quantity}} = {{item.total_price.formatted}}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Cart',
  data() {
    return {
      cart: null
    }
  },
  methods: {
    /*delete() {

      const transport = axios.create({
        withCredentials: true
      });
      transport.delete("http://localhost/demo-commerce/web/cart?_format=json")
    }*/
  },
  mounted() {
    const transport = axios.create({
      withCredentials: true
    });
    transport.get('http://localhost/demo-commerce/web/cart?_format=json')
            .then(response => {
              this.cart = response.data.length <= 0 ? [] : response.data[0].order_items;
            })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.cart{
  background-color: rgba(255, 0, 0, 0.57);
  margin: 10px;
  width: 400px;
}

h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
  margin:5px
}
li {
  margin: 0;
  margin-top: 10px;
}
a {
  color: #42b983;
}
</style>
