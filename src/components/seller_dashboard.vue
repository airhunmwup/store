<template>
    <div id="page-404" class="blog">
    <!-- main content -->
    
    <!-- main content -->
        <div class="wrap-banner">

            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Products</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <div id="main">
                            <div id="content" class="page-content">
                                    <form method="post" class="std" id="customer-form">
                                        <fieldset>
                                            <div class="input-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <input type="text" id="name" name="name" placeholder="Search" class="form-control" value="">
                                                <button class="btn btn-dark" type="submit" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                                                    Submit
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <hr>
                                <div id="mywishlist">
                                    <h1 class="title-page">Product Listing</h1>
                                    <div id="block-history" class="block-center">
                                        <table class="std table table-fixed">
                                            <thead>
                                                <tr>
                                                    <th class="first_item">#</th>
                                                    <th class="item mywishlist_first">Product</th>
                                                    <th class="item mywishlist_first"></th>
                                                    <th class="item mywishlist_second">quantity available</th>
                                                    <th class="item mywishlist_second"></th>
                                                    <th class="last_item mywishlist_first"><i class="btn btn-dark fa fa-plus"> Add Product</i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="wishlist_1">
                                                    <td><i>2018-06-14.4:34</i></td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');">
                                                            
                                                    <img src="img/product/7.jpg" alt="Product">
                                                            </a>
                                                    </td>
                                                    <td class="bold align_center">
                                                        Bag of Rice
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');"><b>15</b> available in stock</a>
                                                    </td>
                                                    <td class="wishlist_default text-right">
                                                        <p class="is_wish_list_default">
                                                            <i class="fa fa-edit"> edit</i>
                                                        </p>
                                                    </td>
                                                    <td class="wishlist_delete text-center">
                                                        <a href="javascript:;" onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"><i class="fa fa-trash"> delete</i></a>
                                                    </td>
                                                </tr>
                                                <tr id="wishlist_1">
                                                    <td><i>2018-06-14.4:34</i></td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');">
                                                            
                                                    <img src="img/product/7.jpg" alt="Product">
                                                            </a>
                                                    </td>
                                                    <td class="bold align_center">
                                                        Bag of Rice
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');"><b>15</b> available in stock</a>
                                                    </td>
                                                    <td class="wishlist_default text-right">
                                                        <p class="is_wish_list_default">
                                                            <i class="fa fa-edit"> edit</i>
                                                        </p>
                                                    </td>
                                                    <td class="wishlist_delete text-center">
                                                        <a href="javascript:;" onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"><i class="fa fa-trash"> delete</i></a>
                                                    </td>
                                                </tr>
                                                <tr id="wishlist_1">
                                                    <td><i>2018-06-14.4:34</i></td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');">
                                                            
                                                    <img src="img/product/9.jpg" alt="Product">
                                                            </a>
                                                    </td>
                                                    <td class="bold align_center">
                                                        Bag of Rice
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');"><b>15</b> available in stock</a>
                                                    </td>
                                                    <td class="wishlist_default text-right">
                                                        <p class="is_wish_list_default">
                                                            <i class="fa fa-edit"> edit</i>
                                                        </p>
                                                    </td>
                                                    <td class="wishlist_delete text-center">
                                                        <a href="javascript:;" onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"><i class="fa fa-trash"> delete</i></a>
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

</template>
<script>
export default {
  data() {
      return{
    footerText: 'Copyright REJEE.co.uk 2021'

      }
  }
}
</script>