<template>
    <div class="container">
        <Header/>
        <label>Post List</label>
        <table class="table">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Second</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(item,index) in posts" :key="index">
      <th scope="row">{{ index + 1 }}</th>
      <td>{{ item.first_name }}</td>
      <td>{{ item.last_name }}</td>

    </tr>
  </tbody>
</table>

    </div>
</template>
<script>
import Header from './Header.vue';
export default {

    name:"Home",
    components:{
        Header
    },
    props:{
        posts: Object
    }
}
</script>
