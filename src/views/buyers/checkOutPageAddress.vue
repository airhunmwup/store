<template>
  <div class="container">
    <!-- main content -->

    <!-- breadcrumb -->

    <!-- main -->

    <div class="row p-4 text-sm">
      <div class="col-12">
        <p class="text-dark h4">Select a delivery address</p>
      </div>

      <div class="col-12">
        <p class="text-dark text-xs">
          Is the address you'd like to use displayed below? If so, click the
          corresponding "Deliver to this address" button. Or you can
          <a href="#AddAddress" class="text-primary underline"
            >enter a new delivery address.
          </a>
        </p>
      </div>

      <div class="dropdown-divider"></div>

      <div class="row">
        <div class="m-2 col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-dark h6">{{this.$store.state.full_name}}</h5>

              <p class="card-text text-dark">{{this.$store.state.address[0].address_line1}},</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].address_line2}}</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].town_city}}, {{this.$store.state.address[0].postal_code}}</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].country}}</p>
            </div>

            <p class="p-2">
              <router-link
                class=""
                to="/checkoutpayment"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="Home"
                ><button
                  type="button"
                  class="btn border text-sm btn-sm btn-warning btn-block"
                >
                  Deliver to this address
                </button>
              </router-link>
            </p>

            <p class="">
              <button
                type="button"
                class="
                  col-5
                  text-primary text-sm
                  underline
                  btn-sm
                  m-1
                  btn btn-light
                "
              >
                Edit
              </button>
              <button
                type="button"
                class="
                  col-5
                  text-sm
                  btn-sm
                  m-1
                  text-primary
                  underline
                  btn btn-light
                "
              >
                Remove
              </button>
            </p>
          </div>
        </div>
      </div>

      <hr />
    </div>
  </div>
</template>
