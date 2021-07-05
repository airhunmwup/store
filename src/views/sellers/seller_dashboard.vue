<template>
  <!-- main content -->
  <div class="box">
    
    <div class="row">
      <div class="container justify-content-center content-bottom">

        <div class="content sidebar-block">
                  <router-link
                    to="/message"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="pl-2 text-right text-primary underline justify-content-end"
                    title="Performance"
                    ><span class="p-2 text-right text-primary underline justify-content-end">Message (2)</span></router-link>
          <div class="text-base">
            <div class="pt-3 pl-3">
              <span class="font-weight-bold text-dark h3">
                Seller Hub</span
              >
              <span class="text-dark text-sm"> UserID (0)</span>
            </div>
          </div>
        </div>
      </div>

    </div>
              <div class="row pl-4">
                <div class="container pl-3">
                  <div class="content text-dark p-2 border-b-2 font-weight-bold col-12  pl-2">
                  <router-link
                    to="/Overview"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="border-primary border-b-4 p-2"
                    title="Overview"
                    ><span class="text-primary">Overview</span></router-link
                  >
                  <router-link
                    to="/Orders"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="p-2"
                    title="Orders"
                    ><span>Orders</span></router-link>
                  <router-link
                    to="/Listing"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="listing"
                    ><span>Listing</span></router-link>
                  <router-link
                    to="/Account Page"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-2"
                    title="Account"
                    ><span>Account</span></router-link>
                  </div>
                </div>
              </div>

                <div class="content justify-content-center text-center">
              <div class="row box">
                <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                              <p class="font-weight-bold">
                                Unread messages
                              </p>
                              <p class="pt-3 text-dark h6 border-b-2">
                                0
                              </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                              <p class="font-weight-bold">
                                Awaiting shipment
                              </p>
                              <p class="pt-3 text-dark h6 border-b-2">
                                0
                              </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 p-3">
                              <p class="font-weight-bold">
                                Sales (31 days)
                              </p>
                              <p class="pt-3 text-dark h6 border-b-2">
                                £12,000.00
                              </p>
                </div>
                </div>
              </div>
        <div class="row p-3">
          <div
            class="
              sidebar-3 
              col-lg-4 col-md-4 col-sm-12
              pt-3
              font-weight-bold
            "
          >
            <!-- category menu -->
            <div class="card ktit sidebar-block border-2 p-3 ">
              <div class="block-content">
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="text-left h4 font-weight-bold text-dark p-2 active"
                  id="v-pills-Summary-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Summary"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Summary"
                  aria-selected="true"
                >
                  Tasks
                </button>
                <hr>
                  <p class="text-xs p-2">No task pending</p>
               <p class="text-left text-dark p-2">Alerts</p>
               <hr>
              </div>
              </div>
            </div>
          </div>
          <div
            class="
              sidebar-3 
              col-lg-4 col-md-4 col-sm-12
              pt-3
              font-weight-bold
            "
          >
            <!-- category menu -->
            <div class="card ktit sidebar-block border-2 p-3 ">
              <div class="block-content">
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="text-left h4 font-weight-bold text-dark p-2 active"
                  id="v-pills-Summary-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Summary"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Summary"
                  aria-selected="true"
                >
                  Sales
                </button>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Line Series</h3>
                </div>
                    <div id="canvas"></div>
                <div class="panel-body">
                    <div id="canvas"></div>
                </div>
            </div>
                <hr>
               <hr>
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">Today </th>
                                        <td><p class="text-right text-dark">0</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Last 7days </th>
                                        <td><p class="text-right text-dark">0</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Last 31days </th>
                                        <td><p class="text-right text-dark">0</p></td>
                                    </tr>
                                </tbody>
                            </table>
              </div>
              </div>
            </div>
          </div>
          <div
            class="
              sidebar-3 
              col-lg-4 col-md-4 col-sm-12
              pt-3
              font-weight-bold
            "
          >
            <!-- category menu -->
            <div class="card ktit sidebar-block border-2 p-3 ">
              <div class="block-content">
              <div
                class="block-content nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="text-left h4 font-weight-bold text-dark p-2 active"
                  id="v-pills-Summary-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Summary"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Summary"
                  aria-selected="true"
                >
                  Orders 
                </button>
                <hr>
                <button
                  class="text-left text-primary p-2"
                  id="v-pills-Recently-viewed-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Recently-viewed"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Recently-viewed"
                  aria-selected="false"
                >
                  See all orders
                </button>
                <hr>

                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">Awaiting shipment -print shipping label</th>
                                        <td><p class="text-right text-dark">0</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Shipped and awaiting your feedbacks </th>
                                        <td><p class="text-right text-dark">0</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Awaiting payment </th>
                                        <td><p class="text-right text-dark">0</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">All Open returns/replacement </th>
                                        <td><p class="text-right text-dark">0</p></td>
                                    </tr>
                                </tbody>
                            </table>

              </div>
              </div>
            </div>
          </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
        