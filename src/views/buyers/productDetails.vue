<template>
  <!-- main content -->

  <section class="justify-content-center">
      <!--adverts banners of store, product or anything related to banner adverts this will be set inrespect to the advertising actions-->
      <div class="appion d-xs-none shadow">
        <!-- breadcrumb -->
        <div class="ul gs full">
          <li class="lix  p-2">
                <img src="img/home/effect2.jpg" class="malami" alt="banner" />
          </li>
          <li class="lix  p-2">
                <img src="img/home/effect3.jpg" class="malami" alt="banner" />
          </li>
          <li class="lix  p-2">
                <img src="img/home/effect4.jpg" class="malami" height="120px" alt="banner" />
          </li>
          <li class="lix  p-2">
                <img src="img/home/effect4.jpg" class="malami" height="120px" alt="banner" />
          </li>
        </div>
      </div>
      <!-- breadcrumb -->
          <div class="row justify-content-center pt-3 ">
              <div class="product-single col-sm-12 col-lg-9 col-md-9 row justify-content-center">
                <div class="product-detail col-xs-12 col-lg-6 col-md-5 col-sm-12">
                  <div class="page-content" id="content">
                    <div class="images-container">
                      <div class="js-qv-mask tab-content border">
                        <div v-bind:id="'item' + num" class="tab-pane fade "
                            v-for="num in nums" :key="num" v-bind:class="activeImage(num)"
                        >
                          <img v-bind:src="'img/product/' + img['product_image' + num]" alt="img" />
                        </div>
                      </div>
                      <ul class="product-tab nav p-2 nav-tabs d-flex">
                      <li class="col" v-for="num in nums" :key="num">
                        <a
                          v-bind:href="'#item' + num"
                          data-toggle="tab"
                          >
                            <img v-bind:src="'img/product/' + img['product_image' + num]" alt="img" />
                          </a>
                      </li>
                      
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="product-info col-xs-12  pt-3 col-lg-6 col-md-7 col-sm-12">
                  <div class="">
                    <div class="price-del">
                    <span class="text-xl pb-4text-dark"> {{ productDetails.product_name }} </span>
                      <span class="text-success float-right">
                        <span class="text-xs">Availability: </span>
                        <span class="check">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i
                          >IN STOCK</span
                        >
                      </span>
                    </div>
                    <p class="description">
                      <span class="text-xs text-danger">
                      <i class="fa fa-fire"></i>
                      1 viewed per hour
                      </span>
                    </p>
                    <!--the option below is suppose to show if the category has size, e.g shoes and cloths only sizes available displays-->
                    <div class="option has-border d-lg-flex size-color">
                      <div class="size">
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-6 table-responsive">
                        <table class="table std">
                          <tbody>
                            <tr>
                              <td class="text-left">
                                Condition:
                              </td>
                              <td class="text-left font-weight-bold">
                                {{ productDetails.product_condition }}
                              </td>
                            </tr>
                            <tr class="">
                              <td class="text-left">
                                Quantity:
                              </td>
                              <td class="text-left">
                              <input
                                type="number"
                                name="qty"
                                max="4"
                                min="1"
                                value="1"
                                v-model.number="order_qnty"
                                class="input-group form-control-sm"
                              />
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                              <div class="col">
                                <p class="">30-day return</p>
                              </div>
                            </div>
                          </div>
                                </div>
                  </div>
                </div>

                                            <div class="row">
                                            <div class="col-3">
                                              Collection:
                                            </div>
                                            <div class="col-9">
                                              <p>Click & Collect - Select store at checkout.</p>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-3">
                                              Postage:
                                            </div>
                                            <div class="col-9">
                                              <p class="text-success underline">Free 3 day postage</p>
                                              <p>Between Thu. 08 Jul. and Fri. 09 Jul.</p>
                                              <p>Item location:
                                              London, London, United Kingdom</p>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-3">
                                              Payment
                                            </div>
                                            <div class="col-9">
                                              <p>card</p>
                                            </div>
                                            </div>
                                            </div>

                </div>
              </div>

              <div class="col-sm-12 col-lg-3 col-md-3">
                    <div class="p-2 box border-l-2">
                      <p class="text-dark h6 font-weight-bold ">Seller information</p>
                      <p class="text-primary p-2 font-weight-bold">seller-account ID (23960 )</p>
                      <hr>
                      <p class="text-primary"><i class="fa fa-heart fa-lg"></i> Save Seller</p>
                      <a href="mailto:#"><p class="text-primary p-2">Contact Seller</p></a>
                  <!--to view thesame sellers listing-->
                      <p class="text-primary">See other items</p>
                      <hr>
                      <p class="text p-3 text-xs">Registered as a business seller</p>
                    </div>
              </div>

            
          </div>


              <section class="review col-12 text-dark">
                <ul class="nav nav-tabs">
                  <li class="active font-weight-bold text-dark p-2 border-l-2 border-r-2 border-b-0 border-t-2">
                    <a data-toggle="tab" href="#description" class="active show"
                      >Description</a
                    >
                  </li>
                  <li class="p-2 font-weight-bold text-dark border-l-2 border-r-2 border-b-0 border-t-2">
                    <a data-toggle="tab" href="#review">Postage and Payment</a>
                  </li>
                </ul>
                <hr>
                <p class="text-sm p-3">Seller assumes all responsibility for this listing.</p>
                <div class="tab-content p-4 border">
                  <div id="description" class="tab-pane fade in active show">
                              <strong class="h5">Item specifics</strong> 
                    
                            <div class="p-3 table-responsive">
                        <table class="table text-sm std ">
                          <tbody>
                            <tr>
                              <td class="text-xs font-weight-bold">
                                Condition:
                              </td>
                              <td class="text-xs">
                              <p>A brand-new, unused, unopened and undamaged item. See the seller's listing for full details.</p>
                              </td>
                              <td class="text-xs font-weight-bold">
                                Brand
                              </td>
                              <td class="text-xs">
                                {{productDetails.product_brand}}
                              </td>
                            </tr>
                            <tr>
                              <td class="text-xs font-weight-bold">
                                Type:
                              </td>
                              <td class="text-xs">
                                Integrated Design Environments
                              </td>
                              <td class="text-xs font-weight-bold">
                                Location:
                              </td>
                              <td class="text-xs">
                                {{ productDetails.product_location}}
                              </td>
                            </tr>
                            <tr>
                              <td class="text-xs font-weight-bold">
                                Sub-Type:
                              </td>
                              <td class="text-xs">
                                Templates
                              </td>
                            <tr>
                              <td class="text-xs font-weight-bold">
                                MPN:
                              </td>
                              <td class="text-xs">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                            </div>
                  </div>

</div>

    <section class="appion">
              <div class="col-12">
                <p class="h3 text-dark">Similer Items</p>
                <span class="text-dark text-right">
                  <b class=""> see all </b>
                  <b class="fa fa-caret-square-o-right"></b>
                </span>
              </div>
      <!-- breadcrumb -->
        <div class="ul gs full">
          <li class="li itemi">
              
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/1.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>
</div>
</div>
            </router-link>
          </li>
          <li class="li itemi">
              
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/9.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>
</div>
</div>
            </router-link>
          </li>
          <li class="li itemi">
              
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/7.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>
</div>
</div>
            </router-link>
          </li>
          <li class="li itemi">
              
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/10.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>
</div>
</div>
            </router-link>
          </li>
          <li class="li itemi">
              
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/8.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>
</div>
</div>
            </router-link>
          </li>
          <li class="li itemi">
              
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/13.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>
</div>
</div>
            </router-link>
          </li>
          <li class="li itemi">
              
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
              <div class=" p-2">
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/11.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>
</div>
</div>
            </router-link>
          </li>
        </div>
    </section>
  </section>
</template>

<script>

import User from "../../apis/User";

export default {
  name: "productDetails",
  data() {
    return {
      productDetails: [],
      p_id: this.$store.state.product_detail_id,
      img: [],
      nums: 4,
      order_qnty: 1,
      watchCount: 0,
    };
  },
  computed: {
    basket: function(){
      return this.$store.state.basket;
    },
    
  },
  methods: {
    getProductDetails(pid) {
      User.product_detail_page(pid).then(response => {
        this.productDetails = response.data;
        const img = Object.keys(response.data);
        let index = 1;
        img.map((key) => {
          if(key == `product_image${index}`){
          this.img[key] = response.data[key];
          index++;
        }
      });
        console.log(this.img);
      }).catch(error => {
        console.log(error);
      });
      console.log(this.productDetails);
    },
    getImages(){
      const img = Object.keys(this.productDetails);
        img.map((key) => {
          this.img[key] = this.getProductDetails;
      });
      console.log(this.img)
    },
    activeImage(id){
      if(id == 1){
        return "active in show"
      }else{
        return ""
      }
    },
    findBasket(index){
        return index.id == this.productDetails.id;
    },
    addToBasket(){
      if(this.$store.state.basket.length == 0){
          this.productDetails["qnty"] = this.order_qnty;
          this.productDetails["qnty_price"] = this.productDetails.product_price * this.order_qnty;
          this.$store.dispatch("addToBasket", this.productDetails);
        }else if(this.$store.state.basket.length > 0){
          var basketStore = this.$store.state.basket;
          var updateBasket = basketStore.find(this.findBasket);
          //if product exists in basket and qnty is not equals to the qnty in the basket
          if(basketStore.findIndex(this.findBasket) >= 0 && updateBasket.qnty != this.order_qnty){
            
            this.productDetails["qnty"] = this.order_qnty;
            this.productDetails["qnty_price"] = this.productDetails.product_price * this.order_qnty;
            this.$store.dispatch("updateBasket", this.productDetails);
            //if product does not exist in basket
          }else if(basketStore.findIndex(this.findBasket) == -1){
            
            this.productDetails["qnty"] = this.order_qnty;
            this.productDetails["qnty_price"] = this.productDetails.product_price * this.order_qnty;
            this.$store.dispatch("addToBasket", this.productDetails);
          }else if(basketStore.findIndex(this.findBasket) >= 0){
            console.log("Already Added");
          }
      }
    },
    addToWatchlist(product_id){
      var data = {
        product_name: this.productDetails.product_name,
        product_image: this.productDetails.product_image1,
        product_price: this.productDetails.product_price,
        product_condition: this.productDetails.product_condition,
        user_id: this.$store.state.currentUser.id,
      };

      const checkWishlist = {
        product_name: this.productDetails.product_name,
        user_id: this.$store.state.currentUser.id,
      }

      if(this.$store.state.token){
        User.checkwishlist(checkWishlist)
        .then((response) => {
          if(response.data.status == 1){
            console.log("Already in wishlist");
          }else if(response.data.status == 0){
            User.addToWishlist(data)
            .then(response => {
              console.log("Added to wish list");
              this.$store.dispatch('getuser', data.user_id);
            }).catch(error => {
              console.log(error);
            });
          }
        }).catch(error => {
          console.log(error);
        })
      }else if(!this.$store.state.token){
        this.$router.push("/login");
        console.log(product_id);
      }

    },
    watchCounter(){
      const data = {'product_name': this.productDetails.product_name};
      console.log(this.productDetails.product_name);
      return User.watchersCounter(data)
      .then((response) => {
        this.watchCount = response.data.status;
        console.log(this.watchCount);
      }).catch(error => {
        console.log(error);
      });
    }
  },
  mounted() {
    this.getProductDetails(this.p_id);
    this.watchCounter();
  }
}
</script>
