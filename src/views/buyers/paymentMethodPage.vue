<template>
<div class="user-acount">

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">

            <!-- breadcrumb -->

            <div class="acount head-acount  container">
                <div class="container">
                    <div id="main">
                        <h1 class="title-page">Payment Methods</h1>
                      <router-link
                        to="/ADD Payment Method"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="ADD Payment Method"
                      >
                        <button class="btn item" data-link-action="sign-in" type="submit">
                            Add new Payment Method
                        </button>
                        </router-link>
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">
                                            <p>Debit Mastercard</p>
                                            <p>David Billian</p>
                                            <p>Epx: 12/22</p>
                                        </th>
                                        <td class="item"><b><i class="fa fa-cc-mastercard"></i></b></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Default payment method</th>
                                        <td class="item"><b><i class="fa fa-check"></i></b></td>
                                    </tr>
                                </tbody>

                            </table>
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">
                                            <p>Debit Mastercard</p>
                                            <p>David Billian</p>
                                            <p>Epx: 12/22</p>
                                        </th>
                                        <td class="item"><b><i class="fa fa-cc-visa"></i></b></td>
                                    </tr>
                                    <tr class="btn">
                                        <th class="first_item text-success">Set as default payment method</th>
                                    </tr>
                                </tbody>

                            </table>
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">
                                            <p>You'll need to enter your login details when you place your order.</p>
                                        </th>
                                        <td class="item"><b><i class="text-primary fa fa-paypal"></i></b></td>
                                    </tr>
                                    <tr class="btn">
                                        <th class="first_item text-success">Set as default payment method</th>
                                    </tr>
                                </tbody>

                            </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</template>