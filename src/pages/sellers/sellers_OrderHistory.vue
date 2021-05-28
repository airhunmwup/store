<template>
    <div id="page-404" class="blog">
    <!-- main content -->
    
    <!-- main content -->
        <div class="wrap-banner">

            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
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
                                    <h1 class="title-page">Order History</h1>
                                    <form method="post" class="std" id="customer-form">
                                        <fieldset>
                                            <div class="input-group col-xs-12 col-sm-12 col-md-8 col-lg-10">
                                                <input type="text" id="name" name="name" placeholder="Search Order History" class="form-control" value="">
                                                <button class="btn item text-dark" type="submit" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                                                    Submit
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                <div id="mywishlist">
                                    <div id="block-history" class="block-center">
                                        <table class="std table table-fixed">
                                            <tbody>
                                                <tr id="wishlist_1">
                                                    <td><i>2018-06-14.4:34</i></td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');">
                                                            
                                                    <img src="img/product/3.jpg" alt="Product">
                                                            </a>
                                                    </td>
                                                    <td class="bold align_center">
                                                        White chair red leather faux
                                                    </td>
                                                    <td class="wishlist_default text-right">
                                                      
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');"><b class="text-info">Pending</b> </a>
                                                    </td>
                                                    <td class="wishlist_delete btn text-center">
                                                        <a href="javascript:;" onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"><i class="fa fa-eye"> View</i></a>
                                                    </td>
                                                </tr>
                                                <tr id="wishlist_1">
                                                    <td><i>2018-06-14.4:34</i></td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');">
                                                            
                                                    <img src="img/product/11.jpg" alt="Product">
                                                            </a>
                                                    </td>
                                                    <td class="bold align_center">
                                                        Lamp
                                                    </td>
                                                    <td class="wishlist_default text-right">
                                                        
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');"><b class="text-success">Processed</b> </a>
                                                    </td>
                                                    <td class="wishlist_delete btn text-center">
                                                        <a href="javascript:;" onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"><i class="fa fa-eye"> View</i></a>
                                                    </td>
                                                </tr>
                                                <tr id="wishlist_1">
                                                    <td><i>2018-06-14.4:34</i></td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');">
                                                            
                                                    <img src="img/product/3.jpg" alt="Product">
                                                            </a>
                                                    </td>
                                                    <td class="bold align_center">
                                                        Bag of Rice
                                                    </td>
                                                    <td class="wishlist_default text-right">
                                                        
                                                    </td>
                                                    <td>
                                                        <a href="javascript:;" onclick="javascript:WishlistManage('block-order-detail', '1');"><b class="text-danger">Refunded</b> </a>
                                                    </td>
                                                    <td class="wishlist_delete btn text-center">
                                                        <a href="javascript:;" onclick="return (WishlistDelete('wishlist_1', '1', 'Do you really want to delete this wishlist ?'));"><i class="fa fa-eye"> View</i></a>
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