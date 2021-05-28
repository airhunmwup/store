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
                        <h1 class="title-page">ADD ADDRESS</h1>
                            <table class="std table" id="block-history">
                                <tbody>
                                    <tr class="bg-grey">
                                        <th class="h6 text-dark">
                                            Contact Details
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="first_item">
                                            <p>First Name</p>
                                            <p>
                                                <input class="" type="" value="" placeholder=""/>
                                            </p>
                                            <hr>
                                            <p>last Name</p>
                                            <p>
                                                <input class="" type="" value="" placeholder=""/>
                                            </p>
                                            <hr>
                                            <p>Mobile</p>
                                            <p>
                                                <input class="" type="" value="" placeholder=""/>
                                            </p>
                                        </th>
                                    </tr>
                                    <tr class="bg-grey">
                                        <th class="h6 text-dark">
                                            Address Details
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="first_item">
                                            <p>Country</p>
                                            <p>
                                                <select class="form-group" type="" value="" placeholder="">
                                                <option>UK</option>
                                                <option>USA</option>
                                                <option></option>
                                                </select>
                                            </p>
                                            <hr>
                                            <p>Address</p>
                                            <p>
                                                <input class="" type="" value="" placeholder=""/>
                                            </p>
                                            <hr>
                                            <br>
                                            <p>
                                                <input class="" type="" value="" placeholder="Optional"/>
                                            </p>
                                            <hr>
                                            <p>Town/City</p>
                                            <p>
                                                <input class="" type="" value="" placeholder=""/>
                                            </p>
                                            <hr>
                                            <p>County</p>
                                            <p>
                                                <input class="" type="" value="" placeholder=""/>
                                            </p>
                                            <hr>
                                            <p>Postcode</p>
                                            <p>
                                                <input class="" type="" value="" placeholder=""/>
                                            </p>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table" id="block-history">
                                <tbody>
                                    <tr>
                                        <th class="first_item">Default delibery address</th>
                                        <td class="btn item"><b><i class="fa fa-check"></i></b></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Default billing address</th>
                                        <td class="btn item"><b><i class="fa fa-close"></i></b></td>
                                    </tr>
                                    <tr>
                                       
                                        <th class="first_item">
                      <router-link
                        to="/Address Book"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Address Book"
                      >
                        <button class="btn item" data-link-action="sign-in" type="submit">
                            Save 
                        </button>
                        </router-link>
                                        </th>
                                        <td>
                      <router-link
                        to="/Address Book"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Address Book"
                      >
                        <button class="btn item" data-link-action="sign-in" type="submit">
                            Cancel
                        </button>
                        </router-link>
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
</template>