<template>
  <div class="product-short">
    <router-link to="/">
      <h2>{{this.title}}</h2>
      <img :src="this.image" alt="">
      <p>{{this.price}}</p>
    </router-link>
    <button type="button" v-on:click="addToCart(firstVariation.id)">Add to cart</button>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'ProductShort',
  props: {
    id: String
  },
  data() {
    return {
      product: null,
      firstVariation: null,
      image: null,
      title: null,
      price: null,
      test: null
    }
  },
  methods: {
    addToCart(id) {
      this.test = id;
      const transport = axios.create({
        withCredentials: true
      });
      transport.post('http://localhost/demo-commerce/web/cart/add?_format=json',
              {"purchased_entity_type": "commerce_product_variation", "purchased_entity_id": id, "quantity": "1"}
      )
    }
  },
  mounted () {
    axios
            .get("http://localhost/demo-commerce/web/jsonapi/commerce_product/clothing/" + this.id)
            .then(response => {
              this.product = response.data.data;
              this.title = this.product.attributes.title;
            })
            .then(
                    () => {
                      let link = this.product.relationships.variations.links.related.href;
                      axios.get(link).then(response => {
                        this.firstVariation = response.data.data[0];
                        this.price = this.firstVariation.attributes.price.formatted;
                      })
                              .then(
                                      () => {
                                        let link = this.firstVariation.relationships.field_images.links.related.href;
                                        axios.get(link).then(response => (this.image = "http://localhost" + response.data.data[0].attributes.uri.url))
                                      }
                              )
                    }
            )


  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.product-short {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-content: center;
  height: 410px;
  width: 250px;
}

button {
  width: 80px;
  border-color: black;
  background-color: #ff5b52;
  margin-left: auto;
  margin-right: auto;
}

button:hover{
  background-color: #42b983;
}

.product-short a {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

a:hover{
  background-color: rgba(255, 0, 0, 0.53);
}
img {
  max-height: 200px;
  max-width: 200px;
}
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
