<template>
  <!-- main content -->
  <div class="container text-sm">
<nav aria-label="breadcrumb ">
  <ol class="breadcrumb d-xs-none">
        <li class="breadcrumb-item text-primary"> <router-link
                            to="/account"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >
          Your Account</router-link>
        </li>
    <li class="breadcrumb-item active" aria-current="page">Your Addresses</li>
  </ol>
</nav>

    <div class="justify-content-center">
      <div class="col-sm-12 col-lg-12 col-md-12">
        <div class="col-lg-6 col-xs-12">
          <p class="text p-3 text-dark h5 font-weight-bold font-weight-normal">
            Your Addresses
          </p>
        </div>
        <!--Addresses-->
        <div class="row" style="height: 30rem;">
          <div class="justify-content-center">
            <div class="row">
              <div class="p-2 col-sm-4">
                <div class="card border-dashed border-secondary">
            <router-link
              class=""
              to="/addnewaddress"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
                  <div class="p-4 card-body">
                    <p class="text-center text-grey h1">
                      <i class="fa fa-plus"></i>
                    </p>
                    <p class="text-center  h6">Add Address</p>
                  </div>
            </router-link>
                </div>
              </div>
              <div class="p-2 col-sm-3">
                <div class="card border" v-if="this.$store.state.address">
                  <div class="card-header">
<div class="input-group">
 
                    <p class="text-xs text-success"><span class="m-1">
      <input class="text-sm" type="radio" aria-label="Radio button for following text input"></span>set as default <span class="fa fa-un-check"></span>
                    </p>
</div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold text-dark">
                      {{this.$store.state.address[0].fullname.toUpperCase()}}
                    </h5>
                    <p class="text-dark">{{this.$store.state.address[0].address_line1}}</p>
                    <p class="text-dark">{{this.$store.state.address[0].town_city}}, {{this.$store.state.address[0].postal_code}}</p>
                    <p class="text-dark">{{this.$store.state.address[0].country}}</p>
                  </div>
                  <p class="">
                    <button type="button" class="btn-sm text-primary underline">
                      <router-link
                        class=""
                        v-bind:to="'/editaddress/' + this.$store.state.address[0].id"
                       
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                        :pid="this.$store.state.address[0].id"
                      >
                      Edit
                      </router-link>
                    </button>
                    |
                    <button type="button" class="btn-sm text-primary underline" v-bind:pid="this.$store.state.address[0].id" @click.prevent="deleteaddress">
                      Remove
                    </button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{

    }
  },
  methods: {
    deleteaddress(event){
      const id = event.target.attributes.pid.nodeValue;
      const data = {
        id : id
      }
      this.$store.dispatch('deleteaddress', data);
    }
  }
}
</script>
        