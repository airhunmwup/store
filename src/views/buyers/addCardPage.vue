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
                    <div id="main">
                        <h1 class="title-page">CREDIT/DEBIT CARD</h1>
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">
                                            <p><b class="fa fa-credit-card"></b> Card number</p>
                                            <p>
                                                <input class="col-6" type="text" value="" />
                                            </p>
                                            <hr>
                                            <p>Expiry date</p>
                                            <span>
                                                <select class="form-group" type="text">
                                                <option>Month</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                </select>
                                            </span>
                                            <span>
                                                <select class="form-group" type="text">
                                                <option >Year</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                </select>
                                            </span>
                                            <hr>
                                            <p>Name on Card</p>
                                            <p>
                                                <input class="col-8" type="text" value="" placeholder=""/>
                                            </p>
                                            <hr>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item btn">Set as default payment method <b><i class="fa fa-check"></i></b></th>
                                    </tr>
                                    <tr>
                                       
                                        <th class="box first_item text-center">
                        <button class="btn item form-control" data-link-action="sign-in" type="submit">
                            Save Card
                        </button>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>

                         <p class="h7 text-center">
                         </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</template>