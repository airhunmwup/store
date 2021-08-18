<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row pt-3 pb-4 justify-content-center">

                <div class="container pl-2">
                    <div class="row">
                    <div class="col-lg-6 col-xs-12">
                  <p class="text font-weight-bold">
                  <span class="p-3 font-weight-bolder text-dark h4 underline">Watchlist</span>
                  <span>Purchases & Rentals</span>
                  </p>
                    </div>
                    </div>
                </div>

<!--Watching-->
                <div class="row justify-center">

        <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12 check-info">
            <ul class="cart-items border-2" v-for="list in this.$store.state.wishList" :key="list.id">
              <li class="cart-item">
                <div class="product-line-grid row p-2 justify-content-between">
                  <!--  product left content: image-->
                  <div
                    class="product-line-grid-center col-md-3 col-lg-3 col-sm-6 col-xs-6"
                  >
                    <img class="" :src="'img/product/' + list['product_image']" />
                  </div>
                  <div
                    class="product-line-grid-body col-md-9 col-sm-6 col-xs-6"
                  >
                    <div class="product-line-info">
                      <p class="h4 pt-4 text-dark">
                        {{list['product_name']}}
                      </p>
                    </div>
                    <div class="product-line-info">
                      <span class="label-atrr">{{list['product_condition']}}</span>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col text-dark">
                        <div class="quantity pt-2">
                          <p class="value text-lg text-dark font-weight-bold">
                            £{{list['product_price']}}
                          </p>
                          <p class="value text-xs">2 days delivery</p>
                        </div>
                      </div>
                    </div>
                          <div class="pt-4">
                            <p class="text-xs text-right">
                              <span class="text-primary underline btn p-3"
                              @click="removeWishlist(list['id'])"
                              >
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              Remove
                              </span>
                              <span class="text-primary underline btn p-3">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              ADD to basket
                              </span>
                            </p>
                          </div>
                  </div>
                </div>
                <hr />
              </li>
              
            </ul>
        </div>
                </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
<script>
import User from '../../apis/User'
export default {
  data () {
    return {
      wishlist : [],
    }
  },
  methods:{
    removeWishlist(id){
      this.$store.dispatch('removeWishlist',id)
    }
  },
  computed:{
    myWislist () {
      return this.$store.dispatch('showWishlist');
    }
  },
  updated () {
    this.myWislist;
  }
}
</script>
        