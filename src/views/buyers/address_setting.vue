<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left"></div>
    </div>

    <div class="pt-3 justify-content-center">
      <div class="col-sm-12 col-lg-12 col-md-12 product-container">
        <div class="col-lg-6 col-xs-12">
          <p class="text p-3 text-dark h5 font-weight-bold font-weight-normal">
            Your Addresses
          </p>
        </div>
        <!--Addresses-->
        <div class="row pl-3">
          <div class="col-12 row col-sm-12 col-md-12 col-lg-12">
            <div class="row">
              <div class="p-2 col-sm-4">
                <div class="card border-dashed border-secondary">
            <router-link
              class=""
              to="/addnewaddress"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
                  <div class="p-4 card-body">
                  <div class="p-4 card-body">
                    <p class="text-center text-grey h1">
                      <i class="fa fa-plus"></i>
                    </p>
                    <p class="text-center text-dark h5">Add Address</p>
                  </div>
                  </div>
            </router-link>
                </div>
              </div>
              <div class="p-2 col-sm-3">
                <div class="card border">
                  <div class="card-header">
                    <p class="text-sm font-weight-bold text-dark">
                      Default:
                      <span
                        ><img
                          class="logo-mobile img-fluid"
                          src="img/home/logo.png"
                          width="30px"
                          alt="REJEE COMPANY"
                      /></span>
                    </p>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold text-dark">
                      John Maxwell
                    </h5>
                    <p class="text-dark">Address line 1</p>
                    <p class="text-dark">City, Postcode</p>
                    <p class="text-dark">Country</p>
                  </div>
                  <p class="">
                    <button type="button" class="btn-sm text-primary underline">
                      Edit
                    </button>
                    |
                    <button type="button" class="btn-sm text-primary underline">
                      Remove
                    </button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>
    <section class="appion">
              <div class="col-12">
                <p class="h3 text-dark">Similer Items</p>
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
  </div>
</template>
        