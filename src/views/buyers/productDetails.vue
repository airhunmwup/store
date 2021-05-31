<template>
  <!-- main content -->

  <div class="container" id="product-detail">
    <div class="content">
      <!-- breadcrumb -->
      <div class="row">
        <div class="product-container">
          <div class="js-product-list-top firt nav-top">
            <div class="d-flex justify-content-around row">
              <div class="col col-xs-12">
                <div class="hidden-sm-down total-products">
                  <!--banner area-->
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-lg-12 col-md-12">
            <div class="main-product-detail">
              <div class="product-single row">
                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                  <div class="page-content" id="content">
                    <div class="images-container">
                      <div class="js-qv-mask mask tab-content border">
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
                      <ul class="product-tab nav nav-tabs d-flex">
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
                    </div>
                  </div>
                </div>
                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                  <div class="detail-description">
                    <h2>Product name here</h2>
                    <div class="price-del">
                      <span class="price">£150.00</span>
                      <span class="float-right">
                        <span class="availb">Availability: </span>
                        <span class="check">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i
                          >IN STOCK</span
                        >
                      </span>
                    </div>
                    <p class="description">
                      Proin gravida nibh vel velit auctor aliquet. Aenean lorem
                      quis bibendum auctor, nisi elit consequat etiam non
                      auctor.
                    </p>
                    <!--the option below is suppose to show if the category has size, e.g shoes and cloths only sizes available displays-->
                    <div class="option has-border d-lg-flex size-color">
                      <div class="size">
                        <span class="size">size :</span>
                        <select>
                          <option value="">Choose your size</option>
                          <option value="">M</option>
                          <option value="">l</option>
                          <option value="">xl</option>
                        </select>
                      </div>
                    </div>
                    <div class="has-border cart-area">
                      <div class="product-quantity">
                        <div class="qty">
                          <div class="input-group">
                            <div class="quantity">
                              <span class="control-label">QTY : </span>
                              <input
                                type="number"
                                name="qty"
                                max="4"
                                min="1"
                                value="1"
                                class="input-group form-control"
                              />
                            </div>
                            <span class="add">
                              <a class="addToWishlist" href="#">
                                <i class="fa fa-heart" aria-hidden="true"></i> 
                              </a>
                            </span>
                            <span class="justify-content-end"
                              ><router-link
                                to="/Checkout"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Home"
                              >
                                <button
                                  class="col-lg-3 col-md-3 col-sm-12 btn btn-warning form-control add-to-cart"
                                  data-button-action="add-to-cart"
                                  type="submit"
                                >
                                  Buy now
                                </button></router-link
                              >
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <p class="product-minimal-quantity"></p>
                    </div>
                    <div class="d-flex2 has-border">
                      <div class="btn-group">
                        <a href="#">
                          <i class="zmdi zmdi-share"></i>
                          <span>Share</span>
                        </a>
                        <a href="#" class="email">
                          <i class="fa fa-envelope" aria-hidden="true"></i>
                          <span>Message seller</span>
                        </a>
                        <a href="#" class="print">
                          <i class="zmdi zmdi-save"></i>
                          <span>save</span>
                        </a>
                      </div>
                    </div>
                    <div class="rating-comment has-border d-flex">
                      <div class="review-description d-flex">
                        <span>REVIEW :</span>
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
                    </div>
                    <div class="content">
                      <p>
                        SKU :
                        <span class="content2">
                          <a href="#">e-02154</a>
                        </span>
                      </p>
                      <p>
                        Categories :
                        <span class="content2">
                          <a href="#">Clothing</a>,
                          <a href="#">Men's Jackets</a>
                        </span>
                      </p>
                      <p>
                        tags :
                        <span class="content2">
                          <a href="#">Jacket</a>, <a href="#">Overcoat</a>,
                          <a href="#">Luxury</a>, <a href="#">men</a>,
                          <a href="#">summer</a>,
                          <a href="#">autumn</a>
                        </span>
                      </p>
                      <p>
                        Payment methods:
                        <span class="content2">
                          <image src="#" class="" />
                        </span>
                      </p>
                      <p>
                        tags :
                        <span class="content2">
                          <a href="#">Jacket</a>, <a href="#">Overcoat</a>,
                          <a href="#">Luxury</a>, <a href="#">men</a>,
                          <a href="#">summer</a>,
                          <a href="#">autumn</a>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="review">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#description" class="active show"
                      >Description</a
                    >
                  </li>
                  <li>
                    <a data-toggle="tab" href="#tag">Product Tags</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#review">Reviews (2)</a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div id="description" class="tab-pane fade in active show">
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
                            class="spr-form-input spr-form-input-text form-control"
                            value=""
                            placeholder="Enter your name"
                          />
                        </div>
                        <div class="spr-form-contact-email">
                          <input
                            class="spr-form-input spr-form-input-email form-control"
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
                  <div id="tag" class="tab-pane fade in">
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
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

        <!-- Related Products -->
        <div class="container">
          <div class="content">
            <div class="title-product col-12">
              <br />
              <div class="box col-12">
                <h2 class="">Related Products</h2>
              </div>
              <br />
              <div class="row product-container">
                <div
                  class="thumbnail-container col-6 col-sm-6 col-md-3 col-lg-3"
                >
                  <router-link
                    to="/Product Detail"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    title="Home"
                  >
                    <div class="">
                      <img
                        src="img/product/4.jpg"
                        class="border"
                        alt="Product"
                      />
                      <p class="text-dark">Product name</p>
                      <p class="text-dark"><b>£12.00</b></p>
                      <p class="text-dark">location</p>
                    </div></router-link
                  >
                </div>
                <div
                  class="thumbnail-container col-6 col-sm-6 col-md-3 col-lg-3"
                >
                  <router-link
                    to="/Product Detail"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    title="Home"
                  >
                    <div class="">
                      <img
                        src="img/product/4.jpg"
                        class="border"
                        alt="Product"
                      />
                      <p class="text-dark">Product name</p>
                      <p class="text-dark"><b>£12.00</b></p>
                      <p class="text-dark">location</p>
                    </div></router-link
                  >
                </div>
                <div
                  class="thumbnail-container col-6 col-sm-6 col-md-3 col-lg-3"
                >
                  <router-link
                    to="/Product Detail"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    title="Home"
                  >
                    <div class="">
                      <img
                        src="img/product/4.jpg"
                        class="border"
                        alt="Product"
                      />
                      <p class="text-dark">Product name</p>
                      <p class="text-dark"><b>£12.00</b></p>
                      <p class="text-dark">location</p>
                    </div></router-link
                  >
                </div>
                <div
                  class="thumbnail-container col-6 col-sm-6 col-md-3 col-lg-3"
                >
                  <router-link
                    to="/Product Detail"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    title="Home"
                  >
                    <div class="">
                      <img
                        src="img/product/1.jpg"
                        class="border"
                        alt="Product"
                      />
                      <p class="text-dark">Product name</p>
                      <p class="text-dark"><b>£12.00</b></p>
                      <p class="text-dark">location</p>
                    </div></router-link
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</template>
