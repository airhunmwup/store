<template>
<div class="user-acount">

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                    </div>
                </div>
            </nav>

            <div class="acount head-acount  container">
                <div class="container">
                    <div id="main box">
                        <h1 class="title-page"> MY ORDER</h1>
                        <p class="box">3 orders</p>
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">
                                            <p class="text-dark">IT'S DELIVERD!</p><span class="text-small">Delivered on 14 MAR 2021</span>
                                            <div class="row content col-12">
                                                    <img src="img/product/6.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/9.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/3.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/4.jpg" class="col-3 " alt="Product">
                                            </div>

                                            <p>Order No: <span class="text-small"> 567328996</span></p>
                                            <p>Shipping date: <span class="text-small"> 11 MAR 2021</span></p>
                                        </th>
                        <router-link
                          to="/Order Details"
                          data-toggle="collapse"
                          data-target=".navbar-collapse"
                          title="Home"
                          >
                                        <td class="btn item"><b><i class="fa fa-angle-right"></i></b></td>
                        </router-link>
                                    </tr>
                                    <tr>
                                        <th class="btn form-control text-success first_item">Track Order</th>
                                    </tr>
                                </tbody>

                                
                            </table>
                            <p class="box"><br></p>
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">
                                            <p class="text-dark">IT'S DELIVERD!</p><span class="text-small">Delivered on 14 MAR 2021</span>
                                            <div class="row content col-12">
                                                    <img src="img/product/6.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/9.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/3.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/4.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/7.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/10.jpg" class="col-3 " alt="Product">
                                                    <img src="img/product/1.jpg" class="col-3 " alt="Product">
                                            </div>

                                            <p>Order No: <span class="text-small"> 567328996</span></p>
                                            <p>Shipping date: <span class="text-small"> 11 MAR 2021</span></p>
                                        </th>
                        <router-link
                          to="/Order Details"
                          data-toggle="collapse"
                          data-target=".navbar-collapse"
                          title="Home"
                          >
                                        <td class="btn item"><b><i class="fa fa-angle-right"></i></b></td>
                        </router-link>
                                    </tr>
                                    <tr>
                                        <th class="btn text-success form-control first_item">Track Order</th>
                                    </tr>
                                </tbody>

                                
                            </table>
                            <p class="box"><br></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</template>