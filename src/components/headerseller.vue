<template>  
<div id="product-detail">
    <header>
        <div>

                       

        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="index-2.html">
                                <img class="img-fluid" src="img/home/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-4 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                        </div>
                    </div>

                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-6 align-items-center justify-content-end d-flex">
                        

                        <!-- acount  -->
                    
                        <div class="desktop_cart pl-5">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count">1</span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th> 
                                                        <div class="" href="#">
                                                            You have a new Order  
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="remove justify-content-end" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th> 
                                                        <div class="" href="#">
                                                            You have a new Order  
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="remove justify-content-end" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="cart-button">
                                                            <a href="product-checkout.html" title="messages">Go to Message</a>
                                                        </div>
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
        

        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up d-flex align-items-center justify-content-around">


                <!-- logo -->
                <div class="mobile-logo align-items-left">
                        <img class="logo-mobile img-fluid" src="img/home/logo.png" width="20%" alt="REJEE">
                </div> 

                 
            <!-- search -->
            <div id="mobile_search" class="d-flex">

                <!-- menu right -->
                <div class="desktop_cart ">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th> 
                                                        <div class="" href="#">
                                                            You have a new Order  
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="remove justify-content-end" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th> 
                                                        <div class="" href="#">
                                                            You have a new Order  
                                                        </div>
                                                    </th>
                                                    <td>
                                                        <div class="remove justify-content-end" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="cart-button">
                                                            <a href="product-checkout.html" title="messages">Go to Message</a>
                                                        </div>
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

    </header>

</div> 
</template>

<script>
export default {
  data() {
      return{
    headerText: 'Copyright REJEE.co.uk 2021'

      }
  }
}
</script>