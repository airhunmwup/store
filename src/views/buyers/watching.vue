<template>
  <!-- main content -->
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb text-xs">
        <li class="breadcrumb-item text-primary">
          <a href="#">Your Account</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Watchlist</li>
      </ol>
    </nav>
    <div class="row pb-4 justify-content-center">
      <div class="container pl-2">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <p class="text font-weight-bold">
              <span class="p-3 font-weight-bolder text-dark h4">Watchlist</span>
              <span></span>
            </p>
          </div>
        </div>
      </div>

      <!--Watching-->
      <div class="row justify-center">
        <nav>
          <div class="row">
            <div class="col-sm">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a
                  class="nav-item nav-link active"
                  id="nav-home-tab"
                  data-toggle="tab"
                  href="#nav-home"
                  role="tab"
                  aria-controls="nav-home"
                  aria-selected="true"
                  ><span class="fa fa-list"></span
                ></a>
                <a
                  class="nav-item nav-link"
                  id="nav-profile-tab"
                  data-toggle="tab"
                  href="#nav-profile"
                  role="tab"
                  aria-controls="nav-profile"
                  aria-selected="false"
                  ><span class="fa fa-th"></span
                ></a>

                <div class="dropdown">
                  <button
                    class="btn btn-sm font-weight-bold dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Filters and Sort
                  </button>
                  <div
                    class="dropdown-menu text-xs"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <a
                      class="
                        dropdown-item
                        bg-secondary
                        border-warning border
                        text-light
                      "
                      href="#"
                      >Filter</a
                    >
                    <a class="dropdown-item" href="#">Purchased</a>
                    <a class="dropdown-item" href="#">All items</a>
                    <a
                      class="
                        dropdown-item
                        bg-secondary
                        border-warning border
                        text-light
                      "
                      href="#"
                      >Sort</a
                    >
                    <a class="dropdown-item" href="#">Default</a>
                    <a class="dropdown-item" href="#">Priority (high to low)</a>
                    <a class="dropdown-item" href="#">Price(low to high)</a>
                    <a class="dropdown-item" href="#">Price(high to low)</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="nav-home"
            role="tabpanel"
            aria-labelledby="nav-home-tab"
          >
            <div
              class="card border m-2"
              v-for="list in this.$store.state.wishList"
              :key="list.id"
            >
              <div class="row">
                <div class="col-4 col-lg-4 pt-4 p-4 img-fluid">
                  <img
                    class=""
                    style="width: 14rem; height: 100%"
                    :src="API_BASE_URL + list['product_image']"
                  />
                </div>
                <div class="col-8 col-lg-5">
                  <p class="h4 mt-4 mt-5 text-info">
                    {{ list["product_name"] }}
                  </p>
                  <p class="value text-md text-dark font-weight-bold">
                    £{{ list["product_price"] }}
                    &
                    <span class="value text-xs"> 2 days delivery</span>
                  </p>
                  <p class="label-atrr underline mt-2">
                    {{ list["product_condition"] }}
                  </p>
                </div>
                <div class="col-lg-3 col-sm-12">
                  <div class="p-3">
                    <p class="text-xs underline p-2">
                      Item added 13 August 2021
                    </p>
                    <button
                      type="button"
                      class="btn btn-warning border btn-sm btn-block"
                    >
                      Add to basktet
                    </button>
                    <button
                      type="button"
                      class="
                        btn btn-light
                        border
                        btn-sm btn-block
                        text-primary
                        underline
                      "
                      @click="removeWishlist(list['id'])"
                    >
                      Remove
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <p class="text-dark text-center" v-if="!this.$store.state.wishList">
              You do not have any listings to display in this view.
            </p>
          </div>

          <div
            class="tab-pane fade"
            id="nav-profile"
            role="tabpanel"
            aria-labelledby="nav-profile-tab"
          >
            <div class="container">
              <div class="row">
                <div
                  class="col-lg-3 col-sm-12"
                  v-for="list in this.$store.state.wishList"
                  :key="list.id"
                >
                  <div class="card border">
                    <img
                      class="card-img-top"
                      :src="API_BASE_URL + list['product_image']"
                    />
                    <div class="card-body">
                      <p class="card-title h6 text-dark">
                        {{ list["product_name"] }}
                      </p>
                      <p class="card-text text-dark">
                        £{{ list["product_price"] }}
                      </p>
                    </div>
                    <a
                      @click="addToBasket"
                      class="m-2 btn btn-warning border text-sm btn-sm"
                      >Add to basket</a
                    >
                    <a
                      class="
                        m-2
                        btn btn-light
                        border
                        text-primary
                        underline
                        text-sm
                        btn-sm
                      "
                      @click="removeWishlist(list['id'])"
                      >Remove</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>
  </div>
</template>
<script>
import Constants from "../../common/constants";
export default {
  data() {
    return {
      wishlist: [],
      API_BASE_URL: Constants.API_BASE_URL,
    };
  },
  watch: {
    $route: "myWislist",
  },
  methods: {
    removeWishlist(id) {
      this.$store.dispatch("removeWishlist", id);
    },
  },
  computed: {
    getUser: function () {
      return this.$store.getters.wishListUser;
    },
  },
  created() {},
  updated() {
    console.log(this.getUser);
  },
};
</script>
        