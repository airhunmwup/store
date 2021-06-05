<template>
    <div id="page-404" class="blog">
    <!-- main content -->
    
    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <section class="page-home">
                    <div class="container">
                    <div class="content">
                        <div class="row pt-5">
                            <div class="content-404 col-lg-5 col-sm-6 text-left">
                                    <h1 class="title-page">Create an account</h1>
                                    <p class="text-dark pb-3">Are you a business or nonprofit? <br><router-link
                                to="/Register Personal Account"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-info font-weight-bold"
                                title="Register Business Account"
                              >Create a personal account</router-link></p>
                              
                                    <hr>
                            </div>
                            <div class="col-lg-5 col-sm-6 pl-5 pb-3 pt-2 justify-content-end">
                            <div id="content" class="page-content">
                                <div class="register-form text-center">
                                    <form action="#" id="customer-form" class="js-customer-form" method="post">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="lastname" type="text" placeholder="Business name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="email" type="email" placeholder="Business email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="Phonenumber" type="text" placeholder="Business Phone number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Password">
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
                                            <p class="text-left">If you don't have a legal business, enter country of your residence.</p>
                                            <p class="text-left pt-2 pb-2">By creating an account, you agree to our 
                                            <router-link
                                                to="/User Agreement"
                                                data-toggle="collapse"
                                                data-target=".navbar-collapse"
                                                class="text-info"
                                                title="User Agreement"
                                            >User Agreement</router-link> and acknowledge reading our 
                                            <router-link
                                                to="/User Privacy"
                                                data-toggle="collapse"
                                                data-target=".navbar-collapse"
                                                class="text-info"
                                                title="User Privacy"
                                            >User Privacy Notice</router-link></p>
                                        </div>
                                        <div class="clearfix">
                                            <br>
                                            <div>
                                                <button class="btn-success form-control" data-link-action="sign-in" type="submit">
                                                    Create Account
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <div class="text-left pt-3">
                            <p class="box border text-center">
                              <router-link
                                to="/Login"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Login"
                              ><i class="fa fa-question-circle"></i> Need Help?</router-link></p>
                        </div>
                            </div>
                        </div>
                     </div>
                     </div>
                </section>
            </div>
        </div>
    </div>

                        <!-- breadcrumb -->
                        <nav class="breadcrumb-bg">
                            <div class="container no-index">
                                <div class="breadcrumb">
                                    <ol>
                                        <li>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
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