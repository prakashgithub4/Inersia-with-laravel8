<template>
    <div>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Inersia Crud</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li><a href="#" @click="tab='Add'">Add</a></li>
      <li><a href="#" @click="tab='Home'">List</a></li> -->
      <li><Link href="/add" >Add</Link></li>
      <li><Link href="/home-two" >List</Link></li>
    </ul>
  </div>
</nav>

<!-- <components v-bind:is="tab"/> -->

</div>
</template>
<script>
// import Add from './Add.vue';
// import Home from './Home.vue';
import { Link } from '@inertiajs/vue2'

export default {
    name:"Header",
    components:{
    // Add,
     //Home
     Link
    },
    // data(){
    //     return {tab:"Home"}
    // },
    props:{

    }
}
</script>
