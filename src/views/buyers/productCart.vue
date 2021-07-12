<template>
        <!-- main -->
        <div class="container  justify-content-center pb-5">
            <!-- breadcrumb -->
                        <section id="main">
                            <div class="cart-grid row pb-5">
                                    <p class="h3 text-dark">Your Cart</p>
                                                <div class="summary-label">There are 2 item in your cart</div>
                                         
                                <div class="col-md-9  col-xs-12 col-sm-12 check-info">
                                    <div class="cart-container">
                                            <ul class="cart-items">
                                                <li class="cart-item p-3">
                                                    <div class="product-line-grid row p-2 justify-content-between">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-center col-md-2 col-sm-6 col-xs-6">
                                                                <a href="product-detail.html">
                                                                    <img class="" src="img/product/3.jpg">
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
                                                                    <img class="" src="img/product/6.jpg">
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
                                <div class="col-xs-12 col-md-3 col-lg-3">
                                        <div class="border p-3">
                                            <div class="text-dark p-2 cart-summary-line">
                                                <span class="font-weight-bold">
                                                    Total products:
                                                </span>
                                                <span class="value"> £200.00</span>
                                            </div>
                                            <div class="text-dark p-2 cart-summary-line">
                                                <span class="font-weight-bold">
                                                    Total Shipping:
                                                </span>
                                                <span class="value"> Free</span>
                                                <div>
                                                    <small class="value"></small>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="text-dark text-lg text-right pt-3 cart-total">
                                                <span class="font-weight-bold">Total:</span>
                                                <span class="value"> £200.00 </span>
                                                <p class="text-sm">(tax incl.)</p>
                                            </div>
                                            <div class="p-3">
                                            <router-link
                                to="/Checkout"
                                class="text-center"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Home"
                              >
                                <button
                                  class="text-center align-content-center text-sm btn-lg col-lg-12 col-md-12 col-sm-12 btn btn-warning form-control add-to-cart"
                                  data-button-action="add-to-cart"
                                  type="submit"
                                >
                                  Check Out
                                </button></router-link
                              >
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </section>
        </div>
</template>