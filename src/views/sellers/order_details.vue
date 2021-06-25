<template>
  <!-- main content -->
  <div class="box">
    <div class="row">
      <div class="container justify-content-center content-bottom">

                  <span class="text-primary font-weight-normal">
                  All Order 
                  </span>>
                  <span class="text pont-weight-normal">
                  Order details
                  </span>
        <div class="content sidebar-block">
          <div class="text-base">
            <div class="pt-5 pl-3">
              <span class="font-weight-bold text-dark h3">
                Seller Hub</span
              >
              <span class="text-dark text-sm"> UserID (0)</span>
            </div>
          </div>
        </div>
      </div>

    </div>
              <div class="row pl-2">
                <div class="container pl-2">
                  <div class="content text-dark p-3 border-b-2 font-weight-bold col-12  pl-2">
                  <router-link
                    to="/Overview"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="p-3"
                    title="Overview"
                    ><span>Overview</span></router-link
                  >
                  <router-link
                    to="/Orders"
                    data-toggle="collapse"
                    data-target=".navbar-collapse" 
                    class="border-primary border-b-4 p-3"
                    title="Orders"
                    ><span class="text-primary">Orders</span></router-link>
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
                    class="p-3"
                    title="Account"
                    ><span>Account</span></router-link>
                  <router-link
                    to="/message"
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    class="pl-4 text-right text-primary underline justify-content-end"
                    title="Performance"
                    ><span class="p-2 text-right text-primary underline justify-content-end">Message (2)</span></router-link>
                  </div>
                </div>

              </div>

                <div class="content justify-content-center">
              <div class="pl-5 pr-5">
                  <p class="text p-2 h5 font-weight-bold">
                  Order number 00176293
                  </p>
                  <!-- this should appear when order has been shipped-->
              <div class="card">
                <div class="row p-4 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-8 col-md-8 p-3">
                              <p class="h4 font-weight-bold text-dark font-weight-bold">
                                Shipped on Jun 21
                              </p>
                              <p class="text-dark">
                                You successfully shipped your order
                              </p>
                              <p class="text-dark">
                                Estimated delivery date shown to buyer: Jun 21, 2021 - Jun 22, 2021
                              </p>
                    </div>
                    <div class="col-lg-4 col-md-4 p-3 justify-content-center text-center">
                        <button class="btn text-primary border-primary">Leave Feedback</button>
                    </div>
                </div>
                </div>
              </div>
              </div>
        <div class="row p-5">
          <div
            class="
              sidebar-3 
              col-lg-6 col-md-6 col-sm-12
              pt-3
              font-weight-bold
            "
          >
            <!-- category menu -->
            <div class="card ktit sidebar-block border-2 p-3 ">
              <div class="block-content">
                <button
                  class="text-left h5 font-weight-bold text-dark p-2"
                  type="button"
                  role="tab"
                  aria-selected="true"
                >
                  Purchase details
                </button>
                
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">Buyer </th>
                                        <td><p class="text-right text-primary">buyerusername</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Email </th>
                                        <td><p class="text-right text-primary underline">buyer@email.com</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Phone</th>
                                        <td><p class="text-right text-dark">0123456789</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Date sold</th>
                                        <td><p class="text-right text-dark">Jun 21, 2021</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Date paid</th>
                                        <td><p class="text-right text-dark">Jun 21, 2021</p></td>
                                    </tr>
                                </tbody>
                            </table>
              </div>
            </div>
          </div>
          <div
            class="
              sidebar-3 
              col-lg-6 col-md-6 col-sm-12
              pt-3
              font-weight-bold
            "
          >
            <!-- category menu -->
            <div class="card ktit sidebar-block border-2 p-3 ">
              <div class="block-content">
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
                  Shipping details
                </button>
                
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">Shipping method </th>
                                        <td><p class="text-right text-primary">Royal mail</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Shipping type</th>
                                        <td><p class="text-right text-dark">Fast delivery</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Tracking </th>
                                        <td><p class="text-right text-primary underline">1209384748946</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Date shipped</th>
                                        <td><p class="text-right text-dark">Jun 21, 2021</p></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Shipped to</th>
                                        <td><p class="text-right text-dark">11 lowend street, London lx12d0f</p></td>
                                    </tr>
                                </tbody>
                            </table>

                    <button class="btn border-primary text-primary" onclick="on()">Process shipping</button>
                       
                    <div id="overlay">
                <div class="container justify-content-center row">
                <div class="content card col-10">
                    <p class="text-primary text-right" onclick="off()"><i class="fa fa-close fa-lg"></i></p>
                
                <div class="content ktit col-10">

                </div>
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
        