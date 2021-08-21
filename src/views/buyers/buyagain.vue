<template>
  <!-- main content -->
  <div class="container">
    <p class="h6 text-sm p-3"><span class="text-primary">Your Account</span> > <span class="text-primary">Your Orders</span> > <span class=" ">Buy Again</span>
</p>

        <div class="justify-content-center row  pb-4">
            
                <div class="container pl-2">
                    <div class="row">
                    <div class="col-lg-6 col-xs-12">
                  <p class="text p-3 text-dark h5 font-weight-bold font-weight-normal">
                  Your Orders
                  </p>
                    </div>
                    <div class="col-lg-6 col-xs-9">
          <div class="pt-2">
            <form method="post" class="std" id="customer-form">
              <div class="justify-content-center text-center input-group col-12 border-2">
                  <i class="pr-3 pt-3 fa fa-search fa-lg"></i>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Search all Orders"
                  class="form-control border-0"
                  value=""
                />
                <button
                  class="btn text-primary  border-l-2"
                  type="submit"
                  data-action="show-password"
                  data-text-show="Show"
                  data-text-hide="Hide"
                >
                  Search
                </button>
              </div>
            </form>
          </div>
                    </div>
                    </div>
                  <div class="content text-dark p-2 border-b-2 font-weight-bold col-12  pl-2">
                  <router-link
                    to="/purchasehistory"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Orders"
                    ><span>Orders</span></router-link
                  >
                  <router-link
                    to="/buyagain"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="border-warning border-b-4 p-2"
                    title="Buy Again"
                    ><span>Buy Again</span></router-link>
                  <router-link
                    to="/cancelledorder"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Cancelled Orders"
                    ><span>Cancelled Orders</span></router-link>
                  <router-link
                    to="/buyerreturns"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Returns"
                    ><span>Returns</span></router-link>
                  </div>
                </div>

          <div class="p-4 col-sm-10 col-lg-10 col-md-10 product-container">

<!--Purchase History-->
                <div class="row">
                <div class="">
                  <p class="text-dark text-center">You do not have iterm to display in this view.</p>
                </div>
                </div>

          </div>

          <!-- end col-md-9-1 -->
        </div>
<hr>
    <section class="appion">
              <div class="col-12">
                <p class="h3 text-dark">Recently viewed</p>
                <p class="text-dark text-right">
                  <b class=""> see all </b>
                  <b class="fa fa-caret-square-o-right"></b>
                </p>
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
                <img src="img/product/1.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
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
                <img src="img/product/2.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
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
                <img src="img/product/3.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
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
                <img src="img/product/4.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
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
                <img src="img/product/5.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
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
                <img src="img/product/6.jpg" class="" alt="Product" />
                <div class="row">
                  <div class="content col-12">
                    <p class="text-lg text-dark underline">Product name</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
                  </div>
                </div>
              </div>
            </router-link>
          </li>
        </div>
    </section>

    <hr>
  </div>
</template>
        