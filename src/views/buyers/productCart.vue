<template>
  <!-- main -->
  <div class="container justify-content-center">
    <!-- breadcrumb -->
      <section class="row pb-5">

                    <div class="col-lg-6 col-xs-12">
                  <p class="text pt-3 text-dark h3 font-weight-bold font-weight-normal">
                  Your Cart
                  </p>
                    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <ul class="cart-items">
              <li class="cart-item " v-for="cart in this.$store.state.basket" :key="cart.id">
                <div class="product-line-grid border-2 row justify-content-between">
                  <!--  product left content: image-->
                  <div
                    class=" p-3 product-line-grid-center col-md-3 col-lg-3 col-sm-6 col-xs-6"
                  >
                    <img class="" :src="'img/product/' + cart['product_image1']" />
                  </div>
                  <div
                    class="product-line-grid-body col-md-9 col-sm-6 col-xs-6"
                  >
                    <div class="pl-3 product-line-info">
                      <p class="pt-4 h4 text-dark">
                        {{cart['product_name']}}
                      </p>
                    </div>
                    <div class="pl-3 product-line-info">
                      <span class="label-atrr">New</span>
                    </div>
                    <div class="pl-3 product-line-info">
                      <span class="label-atrr">Color:</span>
                      <span class="value">Blue</span>
                    </div>
                    <div class="pl-3 row">
                      <div class="col-md-6 col-sm-6 col text-dark">
                        <div class="quantity pt-2">
                          <p class="value text-lg text-dark font-weight-bold">
                            £{{cart['qnty_price']}}
                          </p>
                          <p class="value text-xs">2 days delivery</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col price">
                        <div class="">
                          <p class="label text-dark">
                            Qty:
                            <span class="value"
                              ><input
                                type="number"
                                name="qty"
                                value="3"
                                max="5"
                                min="1"
                                class="form-control-lg border p-2"
                                v-model.number="cart['qnty']"
                            /></span>
                          </p>
                        </div>
                      </div>
                    </div>
                          <div class="pt-3">
                            <p class="">
                              <span class="btn text-xs text-primary underline p-3" @click="removeBasket(cart['id'])">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              Remove
                              </span>
                              <span class="btn text-xs text-primary underline p-3">
                               <i class="fa fa-trash-o" aria-hidden="true"></i>
                              add to watching
                              </span>
                            </p>
                          </div>
                  </div>
                </div>
              </li>
              
            </ul>
    </div>
    <div class="col">
      <div class="p-3 card">
  <div class="border card-header">
  <div class="text-dark">
    <p class="text-primary underline">( {{ this.$store.state.basket.length }} ) Item in Cart</p>
  </div>
  </div>
  <div class="card-body">

  <div class="row text-dark font-weight-bold h6">
    <div class="col">
      Total:
    </div>
    <div class="col text-left">
      £{{this.$store.state.basketTotal}}
    </div>
  </div>
  </div>
  <div class="card-body justify-content-center">
                      <router-link
                        to="/checkout"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Pay now"
                      >
<button type="button" class="col-12 btn btn-success font-weight-bold btn-block">Pay now</button>
</router-link>
      
  </div>
      </div>
    </div>
      </section>
  </div>
</template>

<script>
export default {
  name: "productCart",
  data() {
    return {
    }
  },
  methods:{
    removeBasket: function (id){
      var itemToRemove = id;
      this.$store.dispatch('removeFromBasket', itemToRemove);
    }
  },
  mounted() {
    console.log("productCart");
    console.log(this.$store.state.basket);
  }
}
</script>