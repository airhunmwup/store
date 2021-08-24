<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left"></div>
    </div>

    <div class="pt-3 justify-content-center">
      <div class="col-sm-12 col-lg-12 col-md-12 product-container">
        <div class="col-lg-6 col-xs-12">
          <p class="text p-3 text-dark h5 font-weight-bold font-weight-normal">
            Your Addresses
          </p>
        </div>
        <!--Addresses-->
        <div class="row pl-3" style="height: 30rem;">
          <div class="col-12 row col-sm-12 col-md-12 col-lg-12">
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
                  <div class="p-4 card-body">
                    <p class="text-center text-grey h1">
                      <i class="fa fa-plus"></i>
                    </p>
                    <p class="text-center text-dark h5">Add Address</p>
                  </div>
                  </div>
            </router-link>
                </div>
              </div>
              <div class="p-2 col-sm-3">
                <div class="card border" v-if="this.$store.state.address">
                  <div class="card-header">
                    <p class="text-sm font-weight-bold text-dark">
                      Default:
                      <span
                        ><img
                          class="logo-mobile img-fluid"
                          src="img/home/logo.png"
                          width="30px"
                          alt="REJEE COMPANY"
                      /></span>
                    </p>
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
                        to="/addnewaddress"
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
        