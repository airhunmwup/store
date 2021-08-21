<template>
              <!-- breadcrumb -->
              <div class="container">
              <!-- breadcrumb -->
                  <div class="row">

                    <!-- ####Side bar Cataloge starts here the categorie active wouldnt ###
                    #########collapse other can and should have text-primary underline ####
                    ######### to indicate its active,###################################-->
                    <div
                      class="
                        sidebar-3 sidebar-collection
                        col-lg-3 col-md-3 col-sm-3 d-xs-none border-r-2
                      "
                    >
                      <!-- ###category menu### -->
                      <div class="sidebar-block">
                        <div class="title-block">All Categories</div>
                        <div class="block-content font-weight-bold text-dark">
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#livingroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem " href="#">Category</a>
                            <div
                              class="subCategory "
                              id="livingroom"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem text-primary underline">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                            </div>
                          </div>
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#bathroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">Category</a>
                            <div
                              class="subCategory collapse"
                              id="bathroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                            </div>
                          </div>
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#diningroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">Category</a>
                            <div
                              class="subCategory collapse"
                              id="diningroom"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                            </div>
                          </div>
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#bedroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">Category</a>
                            <div
                              class="subCategory collapse"
                              id="bedroom"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">Tsubcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                            </div>
                          </div>
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#kitchen"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">Category</a>
                            <div
                              class="subCategory collapse"
                              id="kitchen"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">subcategory</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- best seller -->
                      <div class="sidebar-block"></div>
                    </div>



                    <div class="col-lg-9 col-md-9 col-sm-12">
                      <p class="text p-3 text-dark h5 font-weight-bold font-weight-normal">
                        Featured categories
                      </p>
                      <br />
                      <!-- FEATURED CATEGORIES -->
                        <div class="row pt-4 pb-4">
                          <div
                            class="
                              col-6 col-sm-6 col-md-4 col-lg-3
                            "
                          >
                              <p class="underline h6  text-dark">
                                Sub-Category
                              </p>
                          </div>
                          <div
                            class="
                              col-6 col-sm-6 col-md-4 col-lg-3
                            "
                          >
                              <p class="underline h6  text-dark">
                                Sub-Category
                              </p>
                          </div>
                          <div
                            class="
                              col-6 col-sm-6 col-md-4 col-lg-3
                            "
                          >
                              <p class="underline h6  text-dark">
                                Sub-Category
                              </p>
                          </div>
                          <div
                            class="
                              col-6 col-sm-6 col-md-4 col-lg-3
                            "
                          >
                              <p class="underline h6  text-dark">
                                Sub-Category
                              </p>
                          </div>
                          <div
                            class="
                              col-6 col-sm-6 col-md-4 col-lg-3
                            "
                          >
                              <p class="underline h6  text-dark">
                                Sub-Category
                              </p>
                          </div>
                        </div>
                      <!-- spot light'any random product under the selected category -->
                      
                      <!-- FEATURED Listings -->
                      <div class="title-product">
                        <div class="row">
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
                  class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                >
            <router-link
              class=""
              to="/Product Detail"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Home"
            >
            <div class="card" style="width: 11rem;">
  <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
  <div class="card-body">
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                        </div>
                      </div>
                        <div class="justify-content-center p-4">
                <nav aria-label="Page navigation example" class="col-12">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link underline" href="#">1</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
  </ul>
</nav>
                      </div>
                    </div>

                  </div>
              </div>
</template>
