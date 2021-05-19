<template>
<div class="user-acount">

    <!-- main content -->
    <div class="main-content">
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
                                    <span>My Account</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <div class="acount head-acount  container-center">
                <div class="container">
                    <div id="main">
                            <div id="content" class="page-content col-lg-9">
                                <div class="register-form">
                                    <h1 class="title-page">Change Password</h1>
                                    <form action="#" id="customer-form" class="js-customer-form col-lg-6" method="post">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                            <div class="form-group row">
                                                                <span class="custom-checkbox d-inline-flex check-input">
                                                                    <input class="check" name="newsletter" type="checkbox" value="1" checked disabled>
                                                                    <label class="label-absolute">Password must be not less than 10 words</label>
                                                                </span>
                                                            </div>
                                        <div class="clearfix">
                                            <div>
                                                <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>