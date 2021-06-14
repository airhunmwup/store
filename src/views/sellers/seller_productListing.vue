<template>
  <!-- main content -->
    <div id="wrapper-site">
      <div id="content-wrapper">
        <div id="main">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div
                    class="
                      sidebar-3 sidebar-collection
                      col-lg-3 col-md-3
                      d-xs-none
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
                            title="Seller changepassword"
                            ><i class="fa fa-lock"></i> Change
                            Password</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Seller account settings"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Seller accountsettings"
                            ><i class="fa fa-university"></i> Account
                            settings</router-link
                          >
                        </div>
                        <div class="cateTitle hasSubCategory open level1">
                          <router-link
                            to="/Seller support service"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Seller support service"
                            ><i class="fa fa-headphones"></i> Support
                            ?</router-link
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-sm-8 col-lg-9 col-md-8 product-container"
                  >
                  
    <div id="wrapper-site">
      <div class="container">
        <div class="row">
          <div
            id="content-wrapper"
            class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol"
          >
            <div id="main">
              <div id="content" class="page-content">
                <hr />
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
                          class="form-control"
                          value=""
                        />
                        <button
                          class="btn border btn-warning"
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
                    <table class="std table table-fixed">
                      <tbody>
                        <tr id="wishlist_1">
                          <td></td>
                          <td>Product name</td>
                          <td>quantity</td>
                          <td>Price</td>
                          <td></td>
                          <td>
                            <router-link
                              to="/Create New Listing"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="Create New Listing"
                              ><i class="btn btn-dark fa fa-plus">
                                Add</i
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
                              <img src="img/product/7.jpg" alt="Product" />
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
                              <img src="img/product/7.jpg" alt="Product" />
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
                              <img src="img/product/9.jpg" alt="Product" />
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
                  </div>
                </div>
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
        </div>
      </div>
    </div>
</template>
        