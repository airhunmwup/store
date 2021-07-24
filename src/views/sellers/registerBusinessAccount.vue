<template>
    <!-- main content -->
    
    <!-- main content -->
    <div class="">
                                    <p class="pb-4 pr-4 text-dark text-right">Already a member? <router-link
                                to="/Login"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-primary underline font-weight-bold"
                                title="sign in"
                              >Sign in</router-link></p>
        
                    <div class="content pb-5">
                        <div class="row pt-2">
                                
                            <div class="container align-content-center">
                                <div class="register-form text-center">
                                    <div class="pb-4 text-center">
                                    <p class="h1 text-dark">Create an account</p>
                                    <p class="text-dark font-weight-bold underline">Business account</p>
                                    </div>
                            <form id="customer-form" action="#" method="post">
                                <div class="container">
                                    <input type="hidden" name="back" value="my-account">
                                    <div class="form-group p-3">
                                        <input class="col-lg-6 col-md-6 col-sm-6 border-b border-dark border-t-0 border-l-0 border-r-0" name="Business_name" type="text" value="" placeholder="Business Name">
                                    </div>
                                    <div class="form-group p-3">
                                        <input class="col-lg-6 col-md-6 col-sm-6 border-b border-dark border-t-0 border-l-0 border-r-0" name="email" type="email" value="" placeholder="Business Email">
                                    </div>
                                    <div class="form-group p-3">
                                            <input class="col-lg-6 col-md-6 col-sm-6 border-b border-dark border-t-0 border-l-0 border-r-0 js-visible-password" name="password" type="password" value="" placeholder="Password">
                                    </div>
                                    <div class="form-group p-3">
                                     <p class="pt-2 pb-2">By Creating an account, you agree to our 
                              <router-link
                                to="/User Agreement"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-primary"
                                title="User Agreement"
                              >User Agreement</router-link> and acknowledge reading our 
                              <router-link
                                to="/User Privacy"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-primary"
                                title="User Privacy"
                              >User Privacy Notice</router-link></p>
                                    </div>
                                    
                                        
                                <div class="clearfix p-2">
                                        <button class="col-lg-6 col-md-6 col-sm-6  btn text-light" style="background-color: rgb(209, 209, 208);" data-link-action="sign-in" type="submit">
                                            Submit
                                        </button>
                                </div>
                                </div>
                            </form>
                                </div>
                            </div>
                        </div>
                     </div>
                        <hr>
        <div class="page-loading">
            <div class="dot text-center text-danger font-italic font-extrabold">R</div>
            <div class="dot text-center text-danger font-italic font-extrabold">E</div>
            <div class="dot text-center text-danger font-italic font-extrabold">J</div>
            <div class="dot text-center text-danger font-italic font-extrabold">E</div>
            <div class="dot text-center text-danger font-italic font-extrabold">E</div>
        </div>
    </div>


</template>
