<template>
  <!-- main content -->
    <div >
        <div class="row">
    <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
      <span class="text-left shadow p-1"><router-link
        to="/menu"
        data-toggle="collapse"
        data-target=".navbar-collapse"
        title="Menu"
      >
        <i class="fa fa-bars"></i></router-link
      ></span></div>
        </div>
        <div id="main">
              <div class="p-3">
                <div class="row">
                  <div
                    class="shadow-lg  
                      sidebar-3 sidebar-collection
                      col-lg-3 col-md-3
                      d-xs-none pl-3 pt-3
                      col-sm-4
                    "
                  >
                    <!-- category menu -->
                    <div class="sidebar-block">
                      <div class="block-content">
                        <div class="title-block">
                          User Business name display here
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/seller_dashboard"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Dashboard"
                            ><i class="fa fa-tachometer"></i> Dashboard</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Product Listing"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Product Listing"
                            ><i class="fa fa-shopping-basket"></i> Product
                            Listing</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Order History"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Order History"
                            ><i class="fa fa-file-o"></i> Orders</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Seller change password"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Change password"
                            ><i class="fa fa-lock"></i> Change
                            Password</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Seller account settings"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Account settings"
                            ><i class="fa fa-university"></i> Account
                            settings</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Seller support service"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Support service"
                            ><i class="fa fa-headphones"></i> Support
                            ?</router-link
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-sm-12 col-lg-9 col-md-9 product-container"
                  >
               
        <div id="wrapper-site">
            <div id="main">
              <div id="content" class="page-content  pt-5">
                <div id="mywishlist">
                  <h1 class="title-page">Product Listing</h1>
                  <form method="post" class="std" id="customer-form">
                    <fieldset>
                      <div
                        class="input-group col-xs-12 col-sm-12 col-md-6 col-lg-6"
                      >
                        <input
                          type="text"
                          id="name"
                          name="name"
                          placeholder="Search"
                          class="form-control shadow-inner"
                          value=""
                        />
                        <button
                          class="btn shadow text-success font-weight-bold"
                          type="submit"
                          data-action="show-password"
                          data-text-show="Show"
                          data-text-hide="Hide"
                        >
                          Submit
                        </button>
                      </div>
                      <br />
                    </fieldset>
                  </form>
                  <div id="block-history" class="block-center">
                    <table class="shadow std table table-fixed">
                      <tbody>
                        <tr class="text-dark font-weight-bold text-sm" id="wishlist_1">
                          <td></td>
                          <td>Name</td>
                          <td>Qty</td>
                          <td>Price</td>
                          <td></td>
                          <td>
                            <router-link
                              to="/Create New Listing"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="Create New Listing"
                              ><i class="btn btn-dark fa fa-plus">
                                New</i
                              ></router-link
                            >
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="std table table-fixed">
                      <tbody>
                        <tr id="wishlist_1">
                          <td>
                            <a
                              href="javascript:;"
                              onclick="javascript:WishlistManage('block-order-detail', '1');"
                            >
                              <img src="img/product/7.jpg" class="shadow" alt="Product" />
                            </a>
                          </td>
                          <td class="bold align_center">Bag of Rice</td>
                          <td class="">
                            <input class="focus:underline ..." value="5" />
                          </td>
                          <td class="text-center">
                            <input class="focus:underline ..." value="500" />
                          </td>
                          <td class="wishlist_default text-right">
                            <p class="is_wish_list_default">
                              <i class="btn fa fa-edit"> edit</i>
                            </p>
                            <p class="is_wish_list_default">
                              <i class="btn text-success fa fa-refresh">
                                update</i
                              >
                            </p>
                          </td>
                          <td class="wishlist_delete text-center">
                            <a
                              href="javascript:;"
                              onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"
                              ><i class="fa fa-trash"> delete</i></a
                            >
                          </td>
                        </tr>
                        <tr id="wishlist_1">
                          <td>
                            <a
                              href="javascript:;"
                              onclick="javascript:WishlistManage('block-order-detail', '1');"
                            >
                              <img src="img/product/7.jpg" class="shadow" alt="Product" />
                            </a>
                          </td>
                          <td class="bold align_center">Bag of Rice</td>
                          <td class="">
                            <input class="focus:underline ..." value="5" />
                          </td>
                          <td class="text-center">
                            <input class="focus:underline ..." value="500" />
                          </td>
                          <td class="wishlist_default text-right">
                            <p class="is_wish_list_default">
                              <i class="btn fa fa-edit"> edit</i>
                            </p>
                            <p class="is_wish_list_default">
                              <i class="btn text-success fa fa-refresh">
                                update</i
                              >
                            </p>
                          </td>
                          <td class="wishlist_delete text-center">
                            <a
                              href="javascript:;"
                              onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"
                              ><i class="fa fa-trash"> delete</i></a
                            >
                          </td>
                        </tr>
                        <tr id="wishlist_1">
                          <td>
                            <a
                              href="javascript:;"
                              onclick="javascript:WishlistManage('block-order-detail', '1');"
                            >
                              <img src="img/product/9.jpg" class="shadow" alt="Product" />
                            </a>
                          </td>
                          <td class="bold align_center">Bag of Rice</td>
                          <td class="">
                            <input class="focus:underline ..." value="5" />
                          </td>
                          <td class="text-center">
                            <input class="focus:underline ..." value="500" />
                          </td>
                          <td class="wishlist_default text-right">
                            <p class="is_wish_list_default">
                              <i class="btn fa fa-edit"> edit</i>
                            </p>
                            <p class="is_wish_list_default">
                              <i class="btn text-success fa fa-refresh">
                                update</i
                              >
                            </p>
                          </td>
                          <td class="wishlist_delete text-center">
                            <a
                              href="javascript:;"
                              onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"
                              ><i class="fa fa-trash"> delete</i></a
                            >
                          </td>
                        </tr>
                      </tbody>
                    </table>

            <div class="row">
            <span class="col-3"><div><button class="form-control"><i class="fa fa-arrow-left"></i></button></div></span>
            <span class="col-6">
              <div class="row">
              <div class="h6 col-2">
                <p>1</p>
              </div>
              <div class="h6 col-2">
                <p>2</p>
              </div>
              <div class="h6 col-2">
                <p>3</p>
              </div>
              <div class="h6 col-2">
                <p>4</p>
              </div>
              <div class="h6 col-2">
                <p>5</p>
              </div>
              <div class="h6 col-2">
                <p>6</p>
              </div>
              </div>
            </span>
            <span class="col-3"><div><button class="form-control"><i class="fa fa-arrow-right"></i></button></div></span>
            </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
                  </div>

                  <!-- end col-md-9-1 -->
                </div>
              </div>
        </div>

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
    </div>
</template>
        