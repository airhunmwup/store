<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>
      <div class="container justify-content-center content-bottom">

        <span class="p-5 text-right">Summary is your My REJEE 
          <router-link
            to="/Summary"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="text-primary"
            title="Home Page"
            >homepage</router-link></span>
        <div class="content sidebar-block">
          <div class="text-base">
            <div class="pt-5 pl-5">
              <span class="font-weight-bold text-dark h3">
                My REJEE</span
              >
              <span class="text-dark text-sm"> UserID (0)</span>
            </div>
          </div>
        </div>
      </div>

    </div>
              <div class="row pl-5">
                <div class="container">
                  <div class="content text-dark p-3 border-b-2 font-weight-bold col-12 ">
                  <router-link
                    to="/seller_dashboard"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="border-primary border-b-4 p-3"
                    title="Activity"
                    ><span class="text-primary">Activity</span></router-link
                  >
                  <router-link
                    to="/My message"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="p-3"
                    title="Message"
                    ><span>Message (2)</span></router-link>
                  <router-link
                    to="/account"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-3"
                    title="Account"
                    ><span>Account</span></router-link>
                  </div>
                </div>
              </div>
        <div class="row">
          <div
            class="pl-4
              sidebar-3 
              col-lg-2 col-md-2
              d-xs-none
              pt-3
              font-weight-bold
            "
          >
            <!-- menu -->
            <div class="sidebar-block text-dark">
              <div class="block-content">
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Summary-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Summary"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Summary"
                  aria-selected="true"
                >
                  Summary
                </button>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Recently-viewed-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Recently-viewed"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Recently-viewed"
                  aria-selected="false"
                >
                  Recently
                    viewed
                </button>

                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Purchased-history-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Purchased-history"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Purchased-history"
                  aria-selected="true"
                >
                  Purchase History
                </button>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Watching-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Watching"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Watching"
                  aria-selected="true"
                >
                  Watching
                </button>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Saved-Search-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Saved-Search"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Saved-Search"
                  aria-selected="true"
                >
                  Saved Search
                </button>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Saved-Seller-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Saved-Seller"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Saved-Seller"
                  aria-selected="true"
                >
                  Saved Seller
                </button>
              </div>
              </div>
            </div>
          </div>

<div class="dropdown pt-2 d-lg-none h6 d-md-none justify-content-end pl-5">
  <a href="#" class="text-primary underline justify-content-end dropdown-toggle" data-toggle="dropdown">
    Menu
  </a>
  <div class="dropdown-menu">

              <div
                class="p-2 text-sm block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="dropdown-item text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Summary-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Summary"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Summary"
                  aria-selected="true"
                >
                  Summary
                </button>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Recently-viewed-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Recently-viewed"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Recently-viewed"
                  aria-selected="false"
                >
                  Recently
                    viewed
                </button>

                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Purchased-history-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Purchased-history"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Purchased-history"
                  aria-selected="true"
                >
                  Purchase History
                </button>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Watching-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Watching"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Watching"
                  aria-selected="true"
                >
                  Watching
                </button>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Saved-Search-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Saved-Search"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Saved-Search"
                  aria-selected="true"
                >
                  Saved Search
                </button>
                <button
                  class="text-left  font-weight-bold text-dark p-2"
                  id="v-pills-Saved-Seller-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Saved-Seller"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Saved-Seller"
                  aria-selected="true"
                >
                  Saved Seller
                </button>
              </div>
  </div>
</div>
          <div class="col-sm-12 col-lg-9 col-md-9 product-container">
            <div id="wrapper-site">

              <div class="col-sm-12 col-lg-12 p-3 col-md-12 product-container">
                <div id="wrapper-site">
              <div class="tab-content" id="v-pills-tabContent">

<!--Summary-->
                <div
                  class="tab-pane fade show active"
                  id="v-pills-Summary"
                  role="tabpanel"
                  aria-labelledby="v-pills-Summary-tab"
                >
                  <div id="content" class="page-content border p-3 box">
                    <p class="text h6 font-weight-bold text-dark">
                      Get more out of my REJEE
                    </p>
                    <p class="text text-dark">
                      REJEE's a big place, so here's your space to track of items that matter most to you.
                    </p>

                  <div class="row container p-3 text-dark text-md">
                  <div class="col-lg-3 col-md-3 col-sm-6 p-3 text-center">
                    <i class="fa fa-binoculars fa-lg text-warning"></i><br>
                    <b>Find deals</b> 
                    <p>on items just for you.</p>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 p-3 text-center">
                    <i class="fa fa-binoculars fa-lg text-warning"></i><br>
                    <b>Watch favorite</b> 
                    <p> sellers and searches.</p>
                  </div>
                  <div class="ol-lg-3 col-md-3 col-sm-6 p-3 text-center">
                    <i class="fa fa-folder-o fa-lg text-warning"></i><br>
                    <b>Save items</b> 
                    <p>you want to buy or bid on.</p>
                  </div>
                  <div class="ol-lg-3 col-md-3 col-sm-6 p-3 text-center">
                    <i class="fa fa-tag fa-lg text-warning"></i><br>
                    <b>Track selling</b> 
                    <p> of your listed items.</p>
                  </div>
                  </div>
                  </div>
                </div>

<!--recently viewed-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Recently-viewed"
                  role="tabpanel"
                  aria-labelledby="v-pills-Recently-viewed-tab"
                >
                <div class="row border">
                  <span class="text text-dark h5 p-3 font-weight-normal">
                    Recently Viewed
                  <hr>
                  </span>
                <div class="col-12 row col-sm-12 col-md-12 col-lg-12 ">
                <div
                  class="thumbnail-container p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                ><router-link
          to="/Product Detail"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="Home"
        >
                  <div class="content shadow p-2">
                    <img src="img/product/4.jpg" class="" alt="Product" />
                  <div class="row p-1">
                    <div class="content col-12 font-weight-bold tex-2">
                    <span class="text-lg text-dark border-r-2 border-dark pr-2"><b>£12.00</b> </span>
                    <span class="text-lg text-dark"> Product name</span>
                    </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"><i class="fa fa-lg fa-trash-o"></i> </span>
                  </div>
                  </div>
                  </div>
        </router-link>
                </div>
                <div
                  class="thumbnail-container p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                ><router-link
          to="/Product Detail"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="Home"
        >
                  <div class="content shadow p-2">
                    <img src="img/product/4.jpg" class="" alt="Product" />
                  <div class="row p-1">
                    <div class="content col-12 font-weight-bold tex-2">
                    <span class="text-lg text-dark border-r-2 border-dark pr-2"><b>£12.00</b> </span>
                    <span class="text-lg text-dark"> Product name</span>
                    </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"><i class="fa fa-lg fa-trash-o"></i> </span>
                  </div>
                  </div>
                  </div>
        </router-link>
                </div>
                <div
                  class="thumbnail-container p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                ><router-link
          to="/Product Detail"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="Home"
        >
                  <div class="content shadow p-2">
                    <img src="img/product/4.jpg" class="" alt="Product" />
                  <div class="row p-1">
                    <div class="content col-12 font-weight-bold tex-2">
                    <span class="text-lg text-dark border-r-2 border-dark pr-2"><b>£12.00</b> </span>
                    <span class="text-lg text-dark"> Product name</span>
                    </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"><i class="fa fa-lg fa-trash-o"></i> </span>
                  </div>
                  </div>
                  </div>
        </router-link>
                </div>
                <div
                  class="thumbnail-container p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                ><router-link
          to="/Product Detail"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="Home"
        >
                  <div class="content shadow p-2">
                    <img src="img/product/4.jpg" class="" alt="Product" />
                  <div class="row p-1">
                    <div class="content col-12 font-weight-bold tex-2">
                    <span class="text-lg text-dark border-r-2 border-dark pr-2"><b>£12.00</b> </span>
                    <span class="text-lg text-dark"> Product name</span>
                    </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"><i class="fa fa-lg fa-trash-o"></i> </span>
                  </div>
                  </div>
                  </div>
        </router-link>
                </div>
                </div>
                </div>
                  -------
                </div>

<!--Purchase History-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Purchased-history"
                  role="tabpanel"
                  aria-labelledby="v-pills-Purchased-history-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  p-3 font-weight-normal">
                  Orders
                  <hr>
                  </span>
                  <span class="justify-content-end p-3">
                    <form
                      method="post"
                      class="justify-content-end"
                      id="customer-form"
                    >
                      <div
                        class="
                          input-group
                          col-xs-12 col-sm-12 col-md-7 col-lg-6
                        "
                      >
                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="Search Your Orders"
                          class="form-control border-r-none border"
                          value=""
                        />
                        <button
                          class="btn border border-l-none"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          <i class="fa fa-search fa-1x font-weight-bold"></i>
                        </button>
                      </div>
                    </form><p  class="justify-content-end p-3 text-dark text-right">
                        <span class="justify-content-end text-right">See Orders from:
                        <select class="btn-sm text-primary select btn border">
                          <option>Last 60 Days</option>
                          <option>2021</option>
                          <option>2020</option>
                        </select></span>
                        <span class=" justify-content-end pl-3 text-right"> Filter by:
                        <select class="btn-sm text-primary select btn border">
                          <option>All</option>
                          <option>Shipped</option>
                          <option>Ready for feed back</option>
                        </select></span></p>
                <hr>
                  </span>
                <div class="">
                  You do not have any orders to display in this view.
TIP: Change the view using the filters at the top of the section.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold  p-3 font-weight-normal">
                  Canceled items
                  <hr>
                  </span>
                <div class="">
                <hr>
                You do not have any canceled unpaid items to display in this view.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold p-3 font-weight-normal">
                  Canceled invoices
                  <hr>
                  </span>
                <div class="">
                <hr>
                  You do not have any canceled invoices to display in this view.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold p-3 font-weight-normal">
                  Returns and canceled orders
                  <hr>
                  </span>
                <div class="">
                <hr>
                  You do not have any returned orders to display in this view.
TIP: Change the view using the filters at the top of the section.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold p-3 font-weight-normal">
                  Unpaid items
                  <hr>
                  </span>
                <div class="">
                <hr>
                  You do not have any ready for payment items to display in this view.
                </div>
                </div>
                <div class="row">
                  <span class="text text-dark h5 p-3 font-weight-bold font-weight-normal">
                  Unpaid items
                  <hr>
                  </span>
                <div class="">
                <hr>
                  You do not have any invoices to display in this view.
                </div>
                </div>
                </div>

<!--Watching-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Watching"
                  role="tabpanel"
                  aria-labelledby="v-pills-Watching-tab"
                >
                <div class="row">
                  <span class="text text-dark h5 font-weight-bold p-3 font-weight-normal">
                  Wishlist
                  </span>
                                    <div class="cart-container">

                        <div class="cart-container">
                                            <ul class="cart-items">
                                                <li class="cart-item p-3">
                                                    <div class="product-line-grid row p-2 justify-content-between">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-center col-md-2 col-sm-6 col-xs-6">
                                                                <a href="product-detail.html">
                                                                    <img class="" src="img/product/3.jpg" width="100%">
                                                                </a>
                                                        </div>
                                                        <div class="product-line-grid-body col-md-6 col-sm-6 col-xs-6">
                                                            <div class="product-line-info">
                                                                <a class="label text-lg text-dark" href="product-detail.html" data-id_customization="0">Organic Strawberry Fruits</a>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">New</span>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">Color:</span>
                                                                <span class="value">Blue</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-line-grid-center text-center product-line-actions col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-6 col text-dark">
                                                                    <div class="quantity border p-2">
                                                                    <p class="label">Qty: <span class="value"><input type="number" name="qty" value="3" max="5" min="1" class="form-control-sm"></span></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col price">
                                                                    <div class="text-right ">
                                                                <p class="value text-lg text-dark font-weight-bold">£20.00</p>
                                                                <p class="value text-xs ">2 days delivery</p>
                                                                    <div class="text-right p-3">
                                                                            <p class="text-xs text-primary underline"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</p>
                                                                    </div>
                                                                    </div>
                                                                <div class="col-md-2 text-right col align-self-end">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <hr>
                                                <li class="cart-item p-3">
                                                    <div class="product-line-grid row p-2 justify-content-between">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-center col-md-2 col-sm-6 col-xs-6">
                                                                <a href="product-detail.html">
                                                                    <img class="" src="img/product/6.jpg" width="100%">
                                                                </a>
                                                        </div>
                                                        <div class="product-line-grid-body col-md-6 col-sm-6 col-xs-6">
                                                            <div class="product-line-info">
                                                                <a class="label text-lg text-dark" href="product-detail.html" data-id_customization="0">Organic Strawberry Fruits</a>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">New</span>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">Color:</span>
                                                                <span class="value">Blue</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-line-grid-center text-center product-line-actions col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-6 col text-dark">
                                                                    <div class="quantity border p-2">
                                                                    <p class="label">Qty: <span class="value"><input type="number" name="qty" value="3" max="5" min="1" class="form-control-sm"></span></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col price">
                                                                    <div class="text-right ">
                                                                <p class="value text-lg text-dark font-weight-bold">£20.00</p>
                                                                <p class="value text-xs ">2 days delivery</p>
                                                                    <div class="text-right p-3">
                                                                            <p class="text-xs text-primary underline"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</p>
                                                                    </div>
                                                                    </div>
                                                                <div class="col-md-2 text-right col align-self-end">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <hr>
                                            </ul>
                                    </div>
                                    </div>
                </div>
                </div>
<!--Saved Search-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Saved-Search"
                  role="tabpanel"
                  aria-labelledby="v-pills-Saved-Search-tab"
                >
                  -------Saved-Search
                </div>
<!--Saved Seller-->
                <div
                  class="tab-pane fade"
                  id="v-pills-Saved-Seller"
                  role="tabpanel"
                  aria-labelledby="v-pills-Saved-Seller-tab"
                >
                  -------Saved-Seller
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        