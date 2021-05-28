<template>
  <div class="user-acount">
    <!-- main content -->
    <div class="main-content">
      <div class="wrap-banner">
        <!-- breadcrumb -->
        <nav class="breadcrumb-bg">
          <div class="container no-index">
            <div class="breadcrumb"></div>
          </div>
        </nav>

        <div class="acount head-acount container">
          <div class="container">
            <div id="main">
              <h1 class="title-page">Add Payment Method</h1>
              <table class="std table" id="block-history">
                <tbody>
                  <tr>
                    <th class="box first_item text-center">
                      <router-link
                        to="/Add New Card"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Add New Card"
                      >
                        <button
                          class="btn item form-control"
                          data-link-action="sign-in"
                          type="submit"
                        >
                          <b class="fa fa-credit-card"></b> CREDIT/ DEBIT CARD
                        </button>
                      </router-link>
                    </th>
                  </tr>
                  <tr>
                    <th class="first_item"></th>
                  </tr>
                  <tr>
                    <th class="box first_item text-center">
                      <button
                        class="btn item form-control"
                        data-link-action="sign-in"
                        type="submit"
                      >
                        <b class="fa fa-paypal text-primary"></b> PAYPAL
                      </button>
                    </th>
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