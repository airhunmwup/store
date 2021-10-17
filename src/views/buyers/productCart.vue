<template>
  <!-- main -->
  <div class="container justify-content-center">
    <!-- breadcrumb -->
    <section class="row pb-5">
      <div class="col-lg-6 col-xs-12">
        <p class="text pt-3 text-dark h5 font-weight-bold font-weight-normal">
          Shopping Basket
        </p>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div
          class="card m-2 text-sm"
          v-for="cart in this.$store.state.basket"
          :key="cart.id"
        >
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-lg-4">
                <img v-bind:src="API_BASE_URL + cart['product_images'][0].product_image_path" class="card-img-top" alt="Product" style="height:200px; width: 100%;"  />
              </div>
              <div class="col-12 col-lg-4">
                <p class="mt-4  m-1 text-lg text-dark font-weight-bold">
                  {{ cart["product_name"] }}
                </p>
                <p class="value m-1 font-weight-bold text-dark">
                  GBP £{{ cart["qnty_price"] }}
                </p>
                <p class="value m-1 font-weight-bold  text-dark">
                  Quantity: {{ cart["qnty"] }}
                </p>

                <p class="text-xs m-1  text-primary">
                  {{cart.product_shipping_rate}}
                </p>
              </div>
              <div class="col-12 col-lg-4 mt-4 align-content-between">
                <button
                  type="button"
                  class="btn m-1 underline border btn-block btn-sm"
                  @click="removeBasket(cart['id'])"
                >
                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                  Remove
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 card">
          <div class="card-body">
            <div class="row text-sm text-dark">
              <div class="col">
                <p class="">
                  Subtotal:
                  <span class="text-xs"
                    > {{ this.$store.state.basket.length }} Item(s)
                  </span>
                </p>
              </div>
              <div class="col text-right">
                £{{ this.$store.state.basketTotal }}
              </div>
            </div>
            <div class="row text-sm text-dark">
              <div class="col">Shipping:</div>
              <div class="col text-right">
                £{{this.$store.state.basket.product_shipping_cost}}
              </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="row m-1 text-dark font-weight-bold h6">
              <div class="col">Total:</div>
              <div class="col text-right">
                £{{ this.$store.state.basketTotal }}
              </div>
            </div>
          </div>
          <div class="card-body">
            <router-link  v-if="this.$store.state.isLoggedIn" 
              to="/checkoutAddress"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Process to Checkout"
            >
              <button
                type="button"
                class="col-12 text-sm border btn btn-warning btn-block"
              >
                Process to Checkout
              </button>
            </router-link>
            <router-link v-else 
              to="/login"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Process to Checkout"
            >
              <button
                type="button"
                class="col-12 text-sm border btn btn-warning btn-block"
              >
                Process to Checkout
              </button>
            </router-link>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Constants from "../../common/constants";
export default {
  name: "productCart",
  data() {
    return {
      API_BASE_URL: Constants.API_BASE_URL,
    };
  },
  methods: {
    removeBasket: function (id) {
      var itemToRemove = id;
      this.$store.dispatch("removeFromBasket", itemToRemove);
    },
  },
  mounted() {
    console.log("productCart");
    console.log(this.$store.state.basket);
  },
};
</script>