<template>
  <div class="login">
    <h1>Login</h1>
    <p>Welcome back {{input.username}}</p>
    <b>{{ messsage }}</b>
    <input type="text" name="username" v-model="input.username" placeholder="Username" />
    <input type="password" name="password" v-model="input.password" placeholder="Password" />
    <button type="button" v-on:click="login()">Login</button>
  </div>
</template>

<script>
  import axios from "axios";
  export default {
    name: 'Login',
    data() {
      return {
        input: {
          username: "",
          password: ""
        },
        messsage: ""
      }
    },
    methods: {
      login() {
        const transport = axios.create({
          withCredentials: true
        });
        transport.post("http://localhost/demo-commerce/web/user/login?_format=json",
                {"name": this.input.username, "pass": this.input.password},
                {headers: {"Content-type": "application/json"}}
        )
                .then(response => {
                  this.messsage = response;
                })
      }
    }
  }
</script>

<style scoped>

</style>