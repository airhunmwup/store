<template>
  <!-- main content -->

  <!-- main content -->
  <div class="text-sm">
    <div class="main-content pb-5">
      <div id="wrapper-site">
        <div id="content-wrapper" class="pb-5">
          <div id="main">
            <div class="page-home pb-5">
              <!-- breadcrumb -->
              <div class="container pb-5">
                        <section class="page-home p-3 rounded" style="background-color: rgb(195, 245, 182);">
                              <div class="col-lg-10 pt-3 pb-3 pl-5 col-sm-10">
                                <p class="h3 text-dark">You've signed out.</p>
                                <p class="text-sm p-2 text-dark">Return to your account to enjoy buying and selling.</p>
                                <router-link
                                            to="/login"
                                            data-toggle="collapse"
                                            data-target=".navbar-collapse"
                                            class="text-dark underline font-weight-bold "
                                            title="sign in"
                                          ><button class=" border-2 border-dark p-3 text-md text font-weight-bold">Sign in again <i class="fa fa-arrow-right"></i></button>
                                </router-link>
                              </div>
                        </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>