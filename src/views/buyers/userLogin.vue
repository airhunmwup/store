<template>
    <div id="page-404" class="blog">
    <!-- main content -->
    
    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <section class="page-home">
                    <div class="container">
                    <div class="content pt-5 pb-5">
                        <div class="row pt-2">
                            <div class="content-404 col-lg-5 col-sm-6 text-left">
                                    <h1 class="title-page">Login account</h1>
                              
                                        
                                        <div class="clearfix p-3 justify-content-center">
                                <p class="text-dark pb-3">Continue with:</p>
                                            <span class="p-2">
                                                <button class="p-4  text-light border btn-info" data-link-action="sign-in" type="submit">
                                                   <i class="text-large fa fa-facebook"></i> 
                                                </button>
                                            </span>

                                            <span class="p-2">
                                                <button class="p-4 border btn-danger" data-link-action="sign-in" type="submit">
                                                    <i class="text-large fa fa-google"></i> 
                                                </button>
                                            </span>
                                        </div>
                                    <hr>
                            </div>
                            <div class="col-lg-5 col-sm-6 pl-5 pb-3 pt-5 justify-content-end">
                                
                            <div id="content" class="page-content">
                                <div class="register-form text-center">
                            <form id="customer-form" action="#" method="post">
                                <div class="container col-6">
                                    <input type="hidden" name="back" value="my-account">
                                    <div class="form-group no-gutters">
                                        <input class="form-control" name="email" type="email" value="" placeholder=" Email">
                                    </div>
                                    <div class="form-group no-gutters">
                                        <div class="input-group js-parent-focus">
                                            <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="no-gutters text-left">
                                        <div class="forgot-password ">
                                            <a href="user-reset-password.html" rel="nofollow" class="text-primary">
                                                Forgot your password?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <br>
                                    <div class="text-left">
                                        <input type="hidden" name="submitLogin" value="1">
                                        <button class="btn-success form-control" data-link-action="sign-in" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                                </div>
                        <div class="p-3 pt-4 text-left">
                                    <p class="text-dark">Don't have an account? <br><router-link
                                to="/Register Personal Account"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-primary font-weight-bold"
                                title="Register Personal Account"
                              >Sign Up now</router-link></p>
                            </div>
                            </div>
                            </div>
                        </div>
                     </div>
                     </div>
                </section>
            </div>
        </div>
    </div>

                        <hr>
    </div>

</template>