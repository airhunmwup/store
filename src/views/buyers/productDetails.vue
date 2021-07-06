<template>
  <!-- main content -->

  <div class="container" id="product-detail">
    <div class="content">
      <!-- breadcrumb -->
      <div class="row">
          <div class="js-product-list-top firt nav-top">
            <div class="d-flex justify-content-around row">
              <div class="col col-xs-12">
                <div class="hidden-sm-down total-products">
                  <!--banner area-->
                </div>
              </div>
            </div>
          </div>
              <hr>

          <div class="col-sm-12 col-lg-12 col-md-12">
            <div class="row main-product-detail">
              <div class="product-single col-sm-12 col-lg-9 col-md-9 row">
                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
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
                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                  <div class="">
                    <div class="price-del">
                    <span class="text-xl pb-4 text-dark"> This is where the product title goes </span>
                      <span class="float-right">
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
                    <hr>
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
                                            <button class="p-2 shadow border col-lg-12 col-md-12 col-sm-12 btn text-light" style="background-color: blue;" type="submit">
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
              <div class="card col-sm-12 col-lg-3 col-md-3 row">
                    <div class="container p-2 border">
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
              <hr>


              <div class="review col-12">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#description" class="active show"
                      >Description</a
                    >
                  </li>
                  <li>
                    <a data-toggle="tab" href="#review">Reviews (2)</a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div id="description" class=" border p-3 tab-pane fade in active show">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                  </div>

                  <div id="review" class="tab-pane fade">
                    <div class="spr-form">
                      <div class="user-comment">
                        <div class="spr-review">
                          <div class="spr-review-header">
                            <span class="spr-review-header-byline">
                              <strong>Peter Capidal</strong> -
                              <span>Apr 14, 2018</span>
                            </span>
                            <div class="rating">
                              <div class="star-content">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                              </div>
                            </div>
                          </div>
                          <div class="spr-review-content">
                            <p class="spr-review-content-body">
                              In feugiat venenatis enim, non finibus metus
                              bibendum eu. Proin massa justo, eleifend fermentum
                              varius quis, semper gravida quam. Cras nec enim
                              sed lacus viverra luctus. Nunc quis accumsan
                              mauris. Aliquam fermentum sit amet est id
                              scelerisque. Nam porta risus metus.
                            </p>
                          </div>
                        </div>
                        <div class="spr-review preview2">
                          <div class="spr-review-header">
                            <span class="spr-review-header-byline">
                              <strong>David James</strong> -
                              <span>Apr 13, 2018</span>
                            </span>
                            <div class="rating">
                              <div class="star-content">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                              </div>
                            </div>
                          </div>
                          <div class="spr-review-content">
                            <p class="spr-review-content-body">
                              In feugiat venenatis enim, non finibus metus
                              bibendum eu. Proin massa justo, eleifend fermentum
                              varius quis, semper gravida quam. Cras nec enim
                              sed lacus viverra luctus. Nunc quis accumsan
                              mauris. Aliquam fermentum sit amet est id
                              scelerisque. Nam porta risus metus.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <form method="post" action="#" class="new-review-form">
                      <input type="hidden" name="review[rating]" value="3" />
                      <input type="hidden" name="product_id" />
                      <h3 class="spr-form-title">Write a review</h3>
                      <fieldset>
                        <div class="spr-form-review-rating">
                          <label class="spr-form-label">Your Rating</label>
                          <fieldset class="ratings">
                            <input
                              type="radio"
                              id="star5"
                              name="rating"
                              value="5"
                            />
                            <label
                              class="full"
                              for="star5"
                              title="Awesome - 5 stars"
                            ></label>
                            <input
                              type="radio"
                              id="star4half"
                              name="rating"
                              value="4 and a half"
                            />
                            <input
                              type="radio"
                              id="star4"
                              name="rating"
                              value="4"
                            />
                            <label
                              class="full"
                              for="star4"
                              title="Pretty good - 4 stars"
                            ></label>
                            <input
                              type="radio"
                              id="star3half"
                              name="rating"
                              value="3 and a half"
                            />
                            <input
                              type="radio"
                              id="star3"
                              name="rating"
                              value="3"
                            />
                            <label
                              class="full"
                              for="star3"
                              title="Meh - 3 stars"
                            ></label>
                            <input
                              type="radio"
                              id="star2half"
                              name="rating"
                              value="2 and a half"
                            />
                            <input
                              type="radio"
                              id="star2"
                              name="rating"
                              value="2"
                            />
                            <label
                              class="full"
                              for="star2"
                              title="Kinda bad - 2 stars"
                            ></label>
                            <input
                              type="radio"
                              id="star1half"
                              name="rating"
                              value="1 and a half"
                            />
                            <input
                              type="radio"
                              id="star1"
                              name="rating"
                              value="1"
                            />
                            <label
                              class="full"
                              for="star1"
                              title="Sucks big time - 1 star"
                            ></label>
                            <input
                              type="radio"
                              id="starhalf"
                              name="rating"
                              value="half"
                            />
                          </fieldset>
                        </div>
                      </fieldset>
                      <fieldset class="spr-form-contact">
                        <div class="spr-form-contact-name">
                          <input
                            class="
                              spr-form-input spr-form-input-text
                              form-control
                            "
                            value=""
                            placeholder="Enter your name"
                          />
                        </div>
                        <div class="spr-form-contact-email">
                          <input
                            class="
                              spr-form-input spr-form-input-email
                              form-control
                            "
                            value=""
                            placeholder="Enter your email"
                          />
                        </div>
                      </fieldset>
                      <fieldset>
                        <div class="spr-form-review-body">
                          <div class="spr-form-input">
                            <textarea
                              class="spr-form-input-textarea"
                              rows="10"
                              placeholder="Write your comments here"
                            ></textarea>
                          </div>
                        </div>
                      </fieldset>
                      <div class="submit">
                        <input
                          type="submit"
                          name="addComment"
                          id="submitComment"
                          class="btn btn-default"
                          value="Submit Review"
                        />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
      </div>

    </div>
  </div>
</template>
