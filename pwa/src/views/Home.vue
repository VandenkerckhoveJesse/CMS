<template>
  <div class="home">
    <h1>About us</h1>
    <span v-html="about"></span>
  </div>
</template>

<script>
// @ is an alias to /src
import axios from "axios";

export default {
  name: 'home',
  data() {
    return {
      about: null
    }
  },
  mounted() {
    const transport = axios.create({
      withCredentials: true
    });
    transport.get('http://localhost/demo-commerce/web/jsonapi/node/page')
            .then(response => {
              this.about = response.data.data[0].attributes.body.processed
            })
  }
}
</script>

<style scoped>
  .home {
    display: flex;
    flex-direction: column;
  }
</style>