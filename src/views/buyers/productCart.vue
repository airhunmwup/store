<template>
  <!-- main -->
  <div class="container justify-content-center pb-5">
    <!-- breadcrumb -->
    <section id="main">
      <div class="cart-grid row pb-5">

        <div class="col-md-10 col-xs-12 col-sm-12 check-info">
          <div class="cart-container">
            <ul class="cart-items">
              <li class="cart-item p-3">
                <div class="product-line-grid row p-2 justify-content-between">
                  <!--  product left content: image-->
                  <div
                    class="product-line-grid-center col-md-3 col-lg-3 col-sm-6 col-xs-6"
                  >
                    <img class="" src="img/product/16.jpg" />
                  </div>
                  <div
                    class="product-line-grid-body col-md-9 col-sm-6 col-xs-6"
                  >
                    <div class="product-line-info">
                      <p class="h4 text-dark">
                        Organic Strawberry Fruits
                      </p>
                    </div>
                    <div class="product-line-info">
                      <span class="label-atrr">New</span>
                    </div>
                    <div class="product-line-info">
                      <span class="label-atrr">Color:</span>
                      <span class="value">Blue</span>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col text-dark">
                        <div class="quantity pt-2">
                          <p class="value text-lg text-dark font-weight-bold">
                            £20.00
                          </p>
                          <p class="value text-xs">2 days delivery</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col price">
                        <div class="">
                          <p class="label text-dark">
                            Qty:
                            <span class="value"
                              ><input
                                type="number"
                                name="qty"
                                value="3"
                                max="5"
                                min="1"
                                class="form-control-lg border p-2"
                            /></span>
                          </p>
                        </div>
                      </div>
                    </div>
                          <div class="p-3">
                            <p class="text-xs text-primary underline">
                              <span class="p-3">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              Remove
                              </span>
                              <span>
                               <i class="fa fa-trash-o" aria-hidden="true"></i>
                              add to watching
                              </span>
                            </p>
                          </div>
                  </div>
                </div>
              </li>
              <hr />
              <li class="cart-item p-3">
                <div class="product-line-grid row p-2 justify-content-between">
                  <!--  product left content: image-->
                  <div
                    class="product-line-grid-center col-md-3 col-lg-3 col-sm-6 col-xs-6"
                  >
                    <img class="" src="img/product/12.jpg" />
                  </div>
                  <div
                    class="product-line-grid-body col-md-9 col-sm-6 col-xs-6"
                  >
                    <div class="product-line-info">
                      <p class="h4 text-dark">
                        Organic Strawberry Fruits
                      </p>
                    </div>
                    <div class="product-line-info">
                      <span class="label-atrr">New</span>
                    </div>
                    <div class="product-line-info">
                      <span class="label-atrr">Color:</span>
                      <span class="value">Blue</span>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col text-dark">
                        <div class="quantity pt-2">
                          <p class="value text-lg text-dark font-weight-bold">
                            £20.00
                          </p>
                          <p class="value text-xs">2 days delivery</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col price">
                        <div class="">
                          <p class="label text-dark">
                            Qty:
                            <span class="value"
                              ><input
                                type="number"
                                name="qty"
                                value="3"
                                max="5"
                                min="1"
                                class="form-control-lg border p-2"
                            /></span>
                          </p>
                        </div>
                      </div>
                    </div>
                          <div class="p-3">
                            <p class="text-xs text-primary underline">
                              <span class="p-3">
                              <i class="fa fa-trash-o" aria-hidden="true"></i>
                              Remove
                              </span>
                              <span>
                               <i class="fa fa-trash-o" aria-hidden="true"></i>
                              add to watching
                              </span>
                            </p>
                          </div>
                  </div>
                </div>
              </li>
              <hr />
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-lg-2 col-md-2">
          <div class="p-2">
            <table class="std shadow">
              <tbody class="">
                <tr>
                  <td colspan="3" class="h6 col-12">
                    <div class="text-dark font-weight-bold col-8">
                      2 Items
                    </div>
                  </td>
                </tr>
                <tr class="total font-weight-bold h6 text-dark">
                  <td class="p-3" colspan="2">Total:</td>
                  <td class="p-3" colspan="2">£92.96</td>
                </tr>
              <tr>
                <td colspan="4">
                    <span class="justify-content-center">
                      <router-link
                        to="/checkout"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        class="p-3"
                        title="Message"
                      >
                        <button class="form-control text-dark h5 btn-warning">
                          Pay
                        </button></router-link
                      >
                    </span>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>