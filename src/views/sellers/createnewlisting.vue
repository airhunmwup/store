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
                        <div class="row pt-5 justify-content-center">
                            <div class="col-lg-12 col-sm-12 pl-5 pt-2">
                                    <h1 class="title-page">Create New Listing</h1>
                            </div>
                            <div class="col-lg-6 col-sm-6 pl-5 pb-3 pt-2">
                            <div id="content" class="page-content">
                                <div class="register-form text-center ">
                                    <form action="#" id="customer-form" class="js-customer-form" method="post">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <select class="form-control js-child-focus js-visible-password" name="password" type="password">
                                                            <option>Category</option>
                                                            <option></option>
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" name="lastname" type="text" placeholder="Product name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control col-5" name="Phonenumber" type="text" placeholder="Price">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control col-5" name="password" type="password" placeholder="Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control col-5 js-child-focus js-visible-password" name="password" type="password" placeholder="SKU">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 pl-5 pb-3 pt-2">
                            <div id="content" class="page-content">
                                <div class="register-form text-center ">
                                    <form action="#" id="customer-form" class="js-customer-form" method="post">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <textarea class="form-control" rows="6" name="email" type="email" placeholder="Product Details"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <br>
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                                            <div>
                                                <button class="btn-success form-control" data-link-action="sign-in" type="submit">
                                                    NEXT
                                                </button>
                                            </div></router-link>
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