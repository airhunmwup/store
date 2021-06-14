<template>
  <div class="user-acount">
    <!-- main content -->
    <div class="main-content">
      <div class="wrap-banner">
        <!-- breadcrumb -->

        <div class="acount head-acount container">
          <div class="container">
            <div id="main">
              <h1 class="title-page">Address book</h1>
              <table class="std table" id="block-history">
                <tbody>
                  <tr>
                    <th class="first_item">
                      <p>David James</p>
                      <p>123 canberra Street, New York, USA</p>
                      <p>New York</p>
                      <p>B98 7qG</p>
                      <p>United Kingdom</p>
                      <p>0123456789</p>
                    </th>
                    <router-link
                      to="/Edit Address"
                      data-toggle="collapse"
                      data-target=".navbar-collapse"
                      title="Edit Address"
                    >
                      <td class="btn item">
                        <b><i class="fa fa-angle-right"></i></b>
                      </td>
                    </router-link>
                  </tr>
                  <tr>
                    <th class="first_item">Default delibery address</th>
                    <td class="btn item">
                      <b><i class="fa fa-check"></i></b>
                    </td>
                  </tr>
                  <tr>
                    <th class="first_item">Default billing address</th>
                    <td class="btn item">
                      <b><i class="fa fa-check"></i></b>
                    </td>
                  </tr>
                </tbody>

                <tbody>
                  <tr>
                    <th class="first_item">
                      <p>David James</p>
                      <p>123 canberra Street, New York, USA</p>
                      <p>New York</p>
                      <p>B98 7qG</p>
                      <p>United Kingdom</p>
                      <p>0123456789</p>
                    </th>
                    <router-link
                      to="/Edit Address"
                      data-toggle="collapse"
                      data-target=".navbar-collapse"
                      title="Edit Address"
                    >
                      <td class="btn item">
                        <b><i class="fa fa-angle-right"></i></b>
                      </td>
                    </router-link>
                  </tr>
                  <tr>
                    <th class="first_item">Default delibery address</th>
                    <td class="btn item">
                      <b><i class="fa fa-close"></i></b>
                    </td>
                  </tr>
                  <tr>
                    <th class="first_item">Default billing address</th>
                    <td class="btn item">
                      <b><i class="fa fa-close"></i></b>
                    </td>
                  </tr>
                </tbody>
              </table>

          <router-link
            to="/Add New Address"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Edit Address"
          >
            <button class="btn item" data-link-action="sign-in" type="submit">
              Add new Address
            </button></router-link
          >
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</template>