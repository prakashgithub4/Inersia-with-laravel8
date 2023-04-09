<template>

   <div class="container">
    <Header/>
  <h2>Add User</h2>
  <form class="form-horizontal" method="post" @submit.prevent="form.post('/store-data')">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="f_name" placeholder="Enter first name"  v-model ="form.first_name"/>
        <div v-if="form.errors.first_name">{{ form.errors.first_name }}</div>

      </div>

    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" placeholder="Enter last name"  v-model ="form.last_name"/>

      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>

    </div>
  </form>
</div>
</template>
<script>
import { router,useForm } from '@inertiajs/vue2';
import Header from './Header.vue';
export default {
 name:"Add",
 props: {
    errors: Object,
  },
 data(){
    console.log(this.form)
    return{
        form: useForm({
            first_name:null,
            last_name:null,
        })
    }
 },

 components:{
    Header
 },

 methods:{
    // submit(){
    //     router.post('/store-data',this.form);
    //     this.form.first_name = null;
    //     this.form.last_name = null;
    // }
 }
}
</script>
