<template>
  <!-- main content -->

  <div class="container" id="product-detail">
      <!-- breadcrumb -->
      <div class="row">

          <div class="col-sm-12 col-lg-12 col-md-12">
            <div class="row main-product-detail">
              <div class="product-single col-sm-12 col-lg-9 col-md-9 row">
                <div class="product-detail col-xs-12 col-lg-6 col-md-5 col-sm-12">
                  <div class="page-content" id="content">
                    <div class="images-container">
                      <div class="js-qv-mask tab-content border">
                        <div id="item1" class="tab-pane fade active in show">
                          <img src="img/product/1.jpg" alt="img" />
                        </div>
                        <div id="item2" class="tab-pane fade">
                          <img src="img/product/2.jpg" alt="img" />
                        </div>
                        <div id="item3" class="tab-pane fade">
                          <img src="img/product/3.jpg" alt="img" />
                        </div>
                        <div id="item4" class="tab-pane fade">
                          <img src="img/product/5.jpg" alt="img" />
                        </div>
                      </div>
                      <ul class="product-tab nav p-2 nav-tabs d-flex">
                        <li class="active col">
                          <a
                            href="#item1"
                            data-toggle="tab"
                            aria-expanded="true"
                            class="active show"
                          >
                            <img src="img/product/1.jpg" alt="img" />
                          </a>
                        </li>
                        <li class="col">
                          <a href="#item2" data-toggle="tab">
                            <img src="img/product/2.jpg" alt="img" />
                          </a>
                        </li>
                        <li class="col">
                          <a href="#item3" data-toggle="tab">
                            <img src="img/product/3.jpg" alt="img" />
                          </a>
                        </li>
                        <li class="col">
                          <a href="#item4" data-toggle="tab">
                            <img src="img/product/5.jpg" alt="img" />
                          </a>
                        </li>
                      </ul>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="product-info col-xs-12 col-lg-6 col-md-7 col-sm-12">
                  <div class="">
                    <div class="price-del">
                    <span class="text-xl pb-4 text-dark"> This is where the product title goes </span>
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
                                New
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

                    <p class="text text-sm p-3 font-weight-bold">Price: <span class="font-weight-bold text-dark h5 border-dark pr-2"> £12.00 </span></p>
                    
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
                                            <button class="p-2 shadow border col-lg-12 col-md-12 col-sm-12 btn text-light" style="background-color: rgb(130, 231, 238)" type="submit">
                                                    Add to basket
                                                </button>
                                            </div>
                                            <div class="pb-2">
                                            <button class="p-2 shadow border-primary text-primary col-lg-12 col-md-12 col-sm-12 btn" type="submit">
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
                                126 watchers
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
              <div class="ccontainer col-sm-12 col-lg-3 col-md-3 row">
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
                                Funiture
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
                                United Kingdom
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
                              <p class=" ">Item location: Item location from listing</p>
                              <p class=" ">Postage to: Worldwide</p>
                              </div>
                            <div class="p-3 table-responsive">
                        <table class="table text-sm std ">
                          <tbody>
                            <tr>
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
                            <tr class="font-weight-bold">
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
                            <tr>
                              <td class="text-xs">
                               After receiving the item, cancel the purchase within
                              </td>
                              <td class="text-xs">
                                Return postage
                              </td>
                            </tr>
                            <tr class="font-weight-bold">
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
            </div>
            
          </div>
      </div>

  </div>
</template>
