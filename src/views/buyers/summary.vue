<template>
  <!-- main content -->
  <div>
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>
      <div class="container justify-content-center content-bottom">
      </div>

    </div>
        <div class="row pb-4">
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
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/summary"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Summary"
                            >
                  Summary
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/recentlyviewed"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Recently viewed"
                            >
                  Recently
                    viewed
                </router-link>

                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/purchasehistory"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Purchase History"
                            >
                  Purchase History
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/watchingpage"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Watching"
                            >
                  Watching
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/savedsearch"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Saved Search"
                            >
                  Saved Search
                </router-link>
                <router-link
                  class="text-left  font-weight-bold text-dark p-2"
                            to="/savedseller"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Saved Seller"
                            >
                  Saved Seller
                </router-link>
              </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12 p-4 col-lg-9 col-md-9 product-container">
            <div id="wrapper-site">

              <div class="tab-content" id="v-pills-tabContent">

<!--Summary-->
                  <div id="content" class="page-content border p-3 box">

                    <div class="content p-4 sidebar-block">
                      <div class="text-base">
                        <div class="pl-5">
                          <span class="font-weight-bold text-dark h3">
                            My REJEE Stores</span
                          >
                          <span class="text-dark text-sm"> UserID (0)</span>
                        </div>
                      </div>
                    </div>
                    <p class="text h6 font-weight-bold text-dark">
                      Get more out of my REJEE Stores
                    </p>
                    <p class="text text-dark">
                      REJEE Stores's a big place, so here's your space to track of items that matter most to you.
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
            </div>
          </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        