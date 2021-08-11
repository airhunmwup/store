<template>
  <!-- main content -->
  <div class="">
    <div class="row pb-4">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>
      <div class="container justify-content-center content-bottom">

        <span class="p-3 text-right">Summary is your My REJEE 
          <router-link
            to="/Summary"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="text-primary"
            title="Home Page"
            >homepage</router-link></span>
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

          <div class="col-sm-12 col-lg-9 col-md-9 product-container">
            <div id="wrapper-site">

              <div class="tab-content" id="v-pills-tabContent">

<!--Saved Seller-->
                <div class="row p-4">
                  <span class="text text-dark h5 font-weight-bold p-3 font-weight-normal">
                  Saved Search
                  </span>
                </div>
              </div>
            </div>
          </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        