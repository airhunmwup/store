<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
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
              <div class="justify-content-center text-center input-group col-12">
    <div class="input-group-prepend">
      <div class="input-group-text" id="btnGroupAddon"><i class="fa fa-search"></i></div>
    </div>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Search all Orders"
                  class="form-control border"
                  value=""
                />
                <button
                  class="btn-light btn text-primary  border-l-2"
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
                    class="border-warning border-b-4 p-2"
                    title="Orders"
                    ><span>Orders</span></router-link
                  >
                  <router-link
                    to="/buyagain"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="p-2"
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
                    <div class="pb-3 col-6">
                        <form method="post" class="std" id="customer-form">
                        <div class="input-group">
                <div class="page-item p-2 font-weight-bold text-dark">0 Orders placed: </div>
                                <select class="form-control-sm shadow text-xs text-primary btn select ">
                                    <option>Last 30 Days</option>
                                    <option>Past three months</option>
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    </select>

                        </div>
                        </form>
                    </div>
                <div class=""><div class="card">
  <div class="border card-header">
  <div class="text-dark row">
    <div class="col">
      <p>ORDER PLACED</p>
    <p class="text-dark">4 August 2021</p>
    </div>
    <div class="col">
      <p>TOTAL</p>
    <p class="text-dark">£0.00</p>
    </div>
    <div class="col-4">
      <p>DISPATCH TO</p>
    <p class="text-dark"> </p>
    </div>
    <div class="col-lg-4 p-2 col-md-4 col-xs-12">
        <p>ORDER # 202-0274579-1617107</p>
    <p class=""> <span class="text-primary text-sm" >View order details </span>|<span class="text-primary text-sm" > Invoice</span></p>
    </div>
  </div>
  </div>
  <div class="card-body">

  <div class="row">
    <div class="col-8">
       <p class="text-dark h6"> 
      Expected by 10 Aug
       </p>

  <div class="row">
    <div class="col-lg-5 col-md-5 col-xs-12 center">
       <img src="img/product/1.jpg" class="" alt="Product" />
    </div>
    <div class="p-3 text-dark col-7">
       <p class="pt-3 text-primary h6 underline"> Product name</p>
        <button type="button" class="btn btn-secondary btn-sm">Buy again</button>
    </div>
  </div>
    </div>
    <div class="col">
<button type="button" class="btn btn-warning btn-block">Track package</button>
<button type="button" class="btn btn-light border btn-block">Problem with order</button>
<button type="button" class="btn btn-light border btn-block">Return</button>
<button type="button" class="btn btn-light border btn-block">Leave seller feedback</button>
    </div>
  </div>
  </div>
  <div class="card-body border-t-2">
<button type="button" class="text-primary underline"> Archive order</button>
  </div>
</div>
                  <p class="text-dark text-center">You do not have any orders to display in this view.</p>
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
        