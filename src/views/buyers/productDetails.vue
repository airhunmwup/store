<template>
  <!-- main content -->

  <section class="justify-content-center">
  <div class="container">

<nav aria-label="breadcrumb" class="d-xs-none">
  <ol class="breadcrumb text-xs">
    <li class="breadcrumb-item text-primary"><a href="#">Your Account</a></li>
    <li class="breadcrumb-item active" aria-current="page">Your Orders</li>
  </ol>
</nav>

        <div class="justify-content-center row  pb-4">
            

          <div class="p-4 col-12 product-container">

<!--Purchase History-->
                <div class="row">
                  <div class="container">
  <div class="row">
    <div class="col-12 col-lg-6">
       <img src="img/product/1.jpg" class="mt-3" alt="Product" />
    </div>
    <div class="col-sm text-sm">
      <p class="lead text-primary mt-4">
         {{ productDetails.product_name }} 
      </p>
      <hr>
      <p class="font-weight-bold mt-2 text-dark">
         Price:<span class=""></span>
      </p>
      <p class="font-weight-bold text-dark mt-2">
         Condition:<span class=""></span>
      </p>
      <p class="font-weight-bold text-success mt-2">
         In stock
      </p>
      <p class="font-weight-bold text-dark mt-2">
         
      </p>
      <form class="form-inline">
        <div class="form-group mt-2">
          <label for="inputPassword6">Quantity</label>
          <input type="number" class="form-control form-control-sm col-3 mx-sm-3" aria-describedby="passwordHelpInline">
          
        </div>
      </form>
        <div class="form-group mt-2">
<button type="button" class="btn btn-warning btn-sm btn-block">Move to basket</button>
<button type="button" class="btn btn-secondary btn-sm btn-block">Add to watchlist</button>
    </div>
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
                <div class="">
                  <div class="card">
  <div class="border card-header">
  <div class="text-dark row text-xs">
    <div class="m-1 col-2 col-xs-12">
      <p class="font-weight-bold">ORDER PLACED</p>
    <p class="text-dark">4 August 2021</p>
    </div>
    <div class="m-1 col-2 col-xs-12">
      <p class="font-weight-bold">TOTAL</p>
    <p class="text-dark">£0.00</p>
    </div>
    <div class="m-1 col-3 col-xs-12">
      <p class="font-weight-bold">DISPATCH TO</p>
    <p class="text-dark" title="Tooltip on bottom">John maxwell </p>

    </div>
    <div class="m-1 col-4 col-xs-12">
        <p class="font-weight-bold">ORDER # 202-0274579-1617107</p>
                                    <p><router-link
                                      to="/orderdetails"
                                      data-toggle="collapse"
                                      data-target=".navbar-collapse"
                                      ><span class="text-primary text-sm" >View order details </span>|<span class="text-primary text-sm" > Invoice</span></router-link></p>
    </div>
  </div>
  </div>
  <div class="card-body">

  <div class="row">
  <div class="row ml-2 col-8 col-xs-12">
       <p class="text-dark h6"> 
      Expected by 10 Aug
       </p>
    <div class="col-12 m-1 p-2">

  <div class="row">
    <div class="col-5 col-lg-4 center">
       <img src="img/product/1.jpg" class="mt-3" alt="Product" />
    </div>
    <div class="p-3 text-dark col-7 col-md-7 col-lg-8">
       <p class="pt-3 mt-2 text-info text-sm h6 underline"> Product namenjnjbhvgcfcfcfgcfgcgfg</p>
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text text-dark" id="basic-addon1"><i class="fa fa-refresh"></i></span>
        <button type="button" class="btn border underline text-dark text-xs p-2 btn-sm">Buy it again</button>
  </div>
</div>
    </div>
  </div>
    </div>
  </div>
  <div class="row col-4 col-xs-12 justify-content-center">
    <div class="content ml-4 mt-3">
<a href="https://www.royalmail.com/track-your-item/" class="p-1"><button type="button" class="text-xs btn-sm border btn-warning btn-block">Track package</button></a>
<button type="button" class="text-xs btn-sm  btn-light border btn-block">Problem with order</button>
<button type="button" class="text-xs btn-sm  btn-light border btn-block">Return</button>
   <button class="text-xs btn-sm  btn-light border btn-block" type="button" data-toggle="collapse" data-target="#productfeedback-1" aria-expanded="false" aria-controls="productfeedback-1">
    Leave seller feedback
  </button>
<div class="collapse" id="productfeedback-1">
  <div class="form-group m-2">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">...</textarea>
<button class="btn btn-sm m-1 btn-success" type="submit">send</button>
  </div>
</div>
    </div>
  </div>
  </div>
  </div>
</div>
                  <p class="text-dark text-center">You do not have any orders to display in this view.</p>
                </div>
                </div>

          </div>

          <!-- end col-md-9-1 -->
        </div>
  </div>
  <!-- main content -->
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
                      <hr>
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
                      <div class="col-6 align-text-bottom">
                        <p class="text-sm pt-5">4 available</p>
                        <p class="text-sm text-danger underline">223 sold</p>
                      </div>
                      </div>
                      <div class="clearfix border-b-0 border-t-2 border-l-2 border-r-2">

                    <p class="text text-sm p-3 font-weight-bold">Price: <span class="font-weight-bold text-dark h5 border-dark pr-2"> £{{ productDetails.product_price }}</span></p>
                    
                                            <div class="pb-2"><router-link
                                to="/Checkout"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                              >
                                            <button class="p-2 shadow border col-lg-12 col-md-12 col-sm-12 btn text-light" style="background-color: blue;" type="submit">
                                                   Buy it now
                                            </button></router-link>
                                            </div>

                                            <div class="pb-2">
                                            <button 
                                            @click="addToBasket"
                                            class="p-2 shadow border col-lg-12 col-md-12 col-sm-12 btn text-light" 
                                            style="background-color: rgb(130, 231, 238)" 
                                            type="submit">
                                                    Add to basket
                                                </button>
                                            </div>
                                            <div class="pb-2">
                                            <button 
                                            @click="addToWatchlist(productDetails['id'])"
                                            class="p-2 shadow border-primary text-primary col-lg-12 col-md-12 col-sm-12 btn" 
                                            type="submit">
                                                    <i class="fa fa-heart"></i> Watch this item
                                                </button>
                                            </div>

                        <table class="table std font-weight-bold">
                          <tbody>
                            <tr>
                              <td class="border text-danger border-l-0 text-center">
                                Click & Collect
                              </td>
                              <td class="border text-center">
                                {{ watchCount }} watchers
                              </td>
                              <td class="border border-r-0 text-center">
                                30-day return
                              </td>
                            </tr>
                          </tbody>
                        </table>
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
                                            <div class="row">
                                            <div class="col-3">
                                              Returns:
                                            </div>
                                            <div class="col-9">
                                              <p>30 days refund, buyer pays return postage</p>
                                            </div>
                                            </div>


                            <span class="justify-content-end"
                              >
                            </span>
                    <div class="content">
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

                  <div id="review" class="tab-pane fade">
                    <div class="spr-form">
                      <div class="user-comment">
                        <div class="spr-review">
                          <div class="spr-review-header">
                            <span class="spr-review-header-byline">
                              <strong class="h5">Postage and packaging</strong> 
                            </span>
                              <div class="p-2">
                              <p class=" "><b>Item location:</b> Item location from listing</p>
                              <p class=" "><b>Postage to:</b> Worldwide</p>
                              </div>
                            <div class="p-3 table-responsive">
                        <table class="table text-sm std ">
                          <tbody>
                            <tr class="font-weight-bold">
                              <td class="text-xs">
                                Postage and packaging
                              </td>
                              <td class="text-xs">
                                To
                              </td>
                              <td class="text-xs">
                                Service
                              </td>
                              <td class="text-xs">
                                Delivery*
                              </td>
                            </tr>
                            <tr>
                              <td class="text-xs">
                                <p>Free P&P</p>
                              </td>
                              <td class="text-xs">
                                <p>United Kingdom</p>
                              </td>
                              <td class="text-xs">
                                <p>Express Delivery (Royal Mail Special Delivery (TM) 11:00 am)</p>
                              </td>
                              <td class="text-xs">
                                <p>Delivery</p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                              <p class="text-xs text-primary">You’ll see an estimated delivery date based on the seller’s dispatch time and delivery service. Delivery times may vary, especially during peak periods and will depend on when your payment clears.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="spr-form">
                      <div class="user-comment">
                        <div class="spr-review">
                          <div class="spr-review-header">
                            <span class="spr-review-header-byline">
                              <strong class="h5">Return Policy</strong> 
                            </span>
                            <div class="p-3 table-responsive">
                        <table class="table text-sm std ">
                          <tbody>
                            <tr class="font-weight-bold">
                              <td class="text-xs">
                               After receiving the item, cancel the purchase within
                              </td>
                              <td class="text-xs">
                                Return postage
                              </td>
                            </tr>
                            <tr>
                              <td class="text-xs">
                                <p>30 days</p>
                              </td>
                              <td class="text-xs">
                                <p>Seller pays return postage</p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                              <p class="text">Take a look at our 
                          <router-link
                          class="text-primary underline"
                            to="/managing_returns_missing_items_and_refunds_for_sellers"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Returning an item help page</router-link> for more details.</p>
                            <p class="text-xs p-3">The seller is responsible for return postage costs.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


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
