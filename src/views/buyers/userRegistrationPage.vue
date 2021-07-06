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
        
                    <div class="container pb-5">
                            <div class="row container align-content-center">
                                    <div class="pb-4 text-center">
                                    <p class="h1 text-dark">Create an account</p>
                                    </div>
                                    <p class="pb-4 text-dark text-center">Are you a business or nonprofit? <br><router-link
                                to="/Register Business Account"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-primary underline font-weight-bold"
                                title="Register Business Account"
                              >Create a business account</router-link></p>
                            <div class="col-lg-6 col-sm-6 pb-3 pt-4 justify-content-center">
                                
                            <div id="content" class="page-content">
                                <div class="register-form text-center">
                                    <form action="#" id="customer-form" class="" method="post">
                                        <div class="text-center">
                                    <div class="row">
                                    <div class="form-group text-left col-lg-6 col-md-6 col-sm-6  pb-3">
                                        <input class="col-lg-12 col-md-12 col-sm-12 border-b border-dark border-t-0 border-l-0 border-r-0" name="First_name" type="text" value="" placeholder="First Name">
                                    </div>    
                                    <div class="form-group text-left col-lg-6 col-md-6 col-sm-6  pb-3">
                                        <input class="col-lg-12 col-md-12 col-sm-12 border-b border-dark border-t-0 border-l-0 border-r-0" name="Last_name" type="text" value="" placeholder="Last Name">
                                    </div>
                                                
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 pb-3">
                                        <input class="col-lg-12 col-md-12 col-sm-12 border-b border-dark border-t-0 border-l-0 border-r-0" name="Email" type="email" value="" placeholder="Email">
                                    </div>       
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 pb-3">
                                        <input class="col-lg-12 col-md-12 col-sm-12 border-b border-dark border-t-0 border-l-0 border-r-0" name="Pass_word" type="password" value="" placeholder="Password">
                                    </div> 
                                     </div>
                                        </div>
                                        <div>
                                            <p class="text-left pt-2 pb-2">By Creating an account, you agree to our 
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
                                        <div class="clearfix">
                                            <div>
                                                
                               <button class="col-lg-12 col-md-12 col-sm-12  btn text-light" style="background-color: rgb(209, 209, 208);" data-link-action="sign-in" type="submit">
                                           Create account
                                        </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            </div>
                            <div class="col-lg-6 col-sm-6">
                                    
                              
                                        <div class="clearfix p-3 justify-content-center text-center">
                                <p class="text-dark pb-3">Continue with:</p>
                                            <div class="pt-3 pb-3">
                                            <button class="p-2 shadow border col-lg-12 col-md-12 col-sm-12 btn text-light" style="background-color: blue;" data-link-action="sign-in" type="submit">
                                                   <i class="text-lg fa fa-facebook"></i> 
                                            </button>
                                            </div>

                                            <div class="pt-3 pb-3">
                                            <button class="p-2 shadow border col-lg-12 col-md-12 col-sm-12 btn text-light" style="background-color: red;" data-link-action="sign-in" type="submit">
                                                    <i class="text-lg fa fa-google"></i> 
                                                </button>
                                            </div>
                                        </div>
                                    <hr>
                            </div>
                            </div>
                     </div>
                        <hr>
    </div>


</template>