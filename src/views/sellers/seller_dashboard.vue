<template>
  <!-- main content -->
  <div class="box">
    
    <div class="row">
      <div class="container justify-content-center content-bottom">

        <div class="content sidebar-block">
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
                  </div>
                </div>
              </div>

        <div class="row p-3">
          <div
            class="
              sidebar-3 
              col-lg-4 col-md-4 col-sm-12
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
                    <p class="h6 text-dark">Total Sales: <span class="text-success h5" style="font-family: sans-serif;">£1,200.00</span></p>
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
                                        <th class="first_item">Last 7 days </th>
                                        <td><p class="text-right text-dark">0</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Last 31 days </th>
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
                  <router-link
                    to="/Orders"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="p-2 text-primary underline"
                    title="Orders"
                    >
                  See all orders
                  </router-link>
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
        