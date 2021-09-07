<template>
  <!-- main content -->
  <div class="m-4">
    <nav aria-label="breadcrumb" class="d-xs-none">
      <ol class="breadcrumb text-xs">
        <li class="breadcrumb-item text-primary">
          <a href="#">Your Account</a>
        </li>
        <li class="breadcrumb-item text-primary" aria-current="page">
          Sellers hub
        </li>
        <li class="breadcrumb-item active" aria-current="page">Listings</li>
      </ol>
    </nav>

    <div class="justify-content-center row pb-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <p
              class="text pl-3 text-dark h4 font-weight-bold font-weight-normal"
            >
              Listings
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-xs-12">
        <form method="post" class="std" id="customer-form">
          <div
            class="
              justify-content-center
              text-center
              input-group
              pt-2
              pb-2
              col-lg-6 col-xs-12
            "
          >
            <div class="input-group-prepend">
              <div class="input-group-text bg-light" id="btnGroupAddon">
                <i class="fa fa-search"></i>
              </div>
            </div>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Search all Listings"
              class="form-control border"
              value=""
            />
            <button
              class="btn-light btn text-primary text-sm border"
              type="submit"
              data-action="show-password"
              data-text-show="Show"
              data-text-hide="Hide"
            >
              Search
            </button>
          </div>
        </form>
      </div>
      <div class="pb-2 col-12">
        <!--Purchase History-->
        <div class="row rounded">
          <div class="pb-2 pt-2 col-lg-6 col-xs-12">
            <!-- Example single danger button -->
            <div class="btn-group">
              <!-- Example split danger button -->
              <button
                type="button"
                class="
                  font-weight-bold
                  text-dark
                  btn-xs
                  text-sm
                  dropdown-toggle dropdown-toggle-split
                "
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                All Listings <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu text-xs">
                <a class="dropdown-item font-weight-bold" href="#"
                  >Active (2)</a
                >
                <a class="dropdown-item font-weight-bold" href="#"
                  >Unsold (0)</a
                >
                <a class="dropdown-item font-weight-bold" href="#"
                  >Scheduled (0)</a
                >
                <a class="dropdown-item font-weight-bold" href="#">Ended (0)</a>
                <a class="dropdown-item font-weight-bold" href="#"
                  >Drafts (0)</a
                >
              </div>
            </div>
            <div class="btn-group">
              <button
                type="button"
                class="btn m-2 text-sm border dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Sort
              </button>
              <div class="dropdown-menu text-xs">
                <a class="dropdown-item">Last 30 Days</a>
                <a class="dropdown-item">Past three months</a>
                <a class="dropdown-item">2021</a>
                <a class="dropdown-item">2020</a>
                <a class="dropdown-item">2019</a>
              </div>
            </div>
            <div
              class="btn-group btn-group-md"
              role="group"
              aria-label="Basic example"
            >
              <router-link
                to="/newlisting3"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="add new listings"
              >
                <button type="button" class="btn text-lg">
                  <span class="zmdi zmdi-plus-square"></span>
                </button>
              </router-link>
              <button type="button" class="btn btn-sm text-lg">
                <span class="zmdi zmdi-delete"></span>
              </button>
            </div>
          </div>

          <!--start Web view-->
          <div class="card m-2 border d-xs-none">
            <div class="card-header font-weight-bold">
              <div class="row text-xs">
                <div class="col-1">
                  <div class="input-group">
                    <span class="mr-2"> # </span>
                    <input
                      type="checkbox"
                      aria-label="Checkbox for following text input"
                    />
                  </div>
                </div>
                <div class="col">
                  <p class="">Product title</p>
                </div>
                <div class="col text-center">
                  <p class="">Image</p>
                </div>
                <div class="col">
                  <p class="">SKU</p>
                </div>
                <div class="col">
                  <p class="">Price</p>
                </div>
                <div class="col">
                  <p class="">Category</p>
                </div>
                <div class="col text-center">
                  <p class="">in-stock</p>
                </div>
                <div class="col text-center">
                  <p class="">Status</p>
                </div>
                <div class="col text-center">
                  <p class="">Watches</p>
                </div>
                <div class="col">
                  <p class="text-right">Actions</p>
                </div>
              </div>
            </div>
            <div class="card-body border-b-2 text-dark" v-for="prods in this.$store.state.mylistings" :key="prods.id" >
              <div class="row text-xs">
                <div class="col-1">
                  <div class="input-group">
                    <span class="mr-2"></span>
                    <input
                      type="checkbox"
                      aria-label="Checkbox for following text input"
                    />
                  </div>
                </div>
                <div class="col">
                  <p class="">{{prods.product_name}}</p>
                </div>
                <div class="col">
                  <img
                    class=""
                    style="width: 70%"
                    :src="API_BASE_URL + prods.product_image1"
                    alt="Card image cap"
                  />
                </div>
                <div class="col">
                  <p class="">P012S</p>
                </div>
                <div class="col">
                  <p class="">£{{prods.product_price}}</p>
                </div>
                <div class="col">
                  <p class="">{{prods.product_subcat}}</p>
                </div>
                <div class="col text-center">
                  <p class="">16</p>
                </div>
                <div class="col text-center">
                  <span
                    class="alert-xs p-1 mt-4 rounded alert-success"
                    style="height: 2rem"
                    role="alert"
                  >
                    Active
                  </span>
                </div>
                <div class="col text-center">
                  <p class="">160</p>
                </div>
                <div class="col text-right">
                  <button
                    type="button"
                    class="
                      btn
                      text-light
                      btn-danger btn-xs
                      text-xs
                      underline
                      btn-block
                    "
                    @click="deleteProduct(prods.id)"
                  >
                    Delete
                  </button>
                  <button
                    type="button"
                    class="
                      btn
                      text-light
                      btn-info btn-xs
                      text-xs
                      underline
                      btn-block
                    "
                  >
                    Edit
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end Web view-->

        <!--start mobile view-->
        <div class="card m-1 d-md-none border text-xs">
          <div class="card-header">
            <div class="row text-xs">
              <div class="col">
                <div class="input-group">
                  <input
                    type="checkbox"
                    aria-label="Checkbox for following text input"
                  />
                  <span class="ml-2"> 2 </span>
                </div>
              </div>
              <div class="col">
                <p class="text-right">SKU: <b>P62X</b></p>
              </div>
            </div>
          </div>
          <div class="card-header">
            <div class="row text-xs">
              <div class="col-6 pt-2">
                <img
                  class=""
                  style="width: 70%"
                  src="img/product/11.jpg"
                  alt="Card image cap"
                />
              </div>
              <div class="col-6">
                <p class="text-left mt-4 text-lg text-dark font-weight-bold">
                  This na the product title
                </p>
              </div>
            </div>
          </div>
          <div class="card-body text-xs">
            <div class="row">
              <div class="col-4">
                <p class="m-1">Category:</p>
              </div>
              <div class="col-8 text-right">
                <p class="m-1 text-dark font-weight-bold">
                  Electronics, TVs and DVDs
                </p>
              </div>
              <div class="col-4">
                <p class="m-1">In-stock:</p>
              </div>
              <div class="col-8 text-right">
                <p class="m-1 text-dark font-weight-bold">16</p>
              </div>
              <div class="col-4">
                <p class="m-1">Price:</p>
              </div>
              <div class="col-8 text-right">
                <p class="m-1 text-dark font-weight-bold">£150.00</p>
              </div>
              <div class="col-6">
                <p class="m-1">Status:</p>
              </div>
              <div class="col-6 p-2 text-right">
                <span
                  class="alert-xs p-1 mt-4 rounded alert-success"
                  style="height: 2rem"
                  role="alert"
                >
                  Active
                </span>
              </div>
              <div class="col-4">
                <p class="m-1">Watches</p>
              </div>
              <div class="col-8 text-right">
                <p class="text-dark">160</p>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-danger text-light border m-1 btn-sm"
              >Delete</a
            >
            <a href="#" class="btn btn-info text-light border m-1 btn-sm"
              >Edit</a
            >
          </div>
        </div>

        <div class="card m-1 d-md-none border">
          <div class="card-header">
            <div class="row text-xs">
              <div class="col">
                <div class="input-group">
                  <input
                    type="checkbox"
                    aria-label="Checkbox for following text input"
                  />
                  <span class="ml-2"> 2 </span>
                </div>
              </div>
              <div class="col">
                <p class="text-right">SKU: <b>P62X</b></p>
              </div>
            </div>
          </div>
          <div class="card-header">
            <div class="row text-xs">
              <div class="col pt-2">
                <img
                  class=""
                  style="width: 70%"
                  src="img/product/12.jpg"
                  alt="Card image cap"
                />
              </div>
              <div class="col">
                <p class="text-left mt-4 text-lg text-dark font-weight-bold">
                  This na the product title
                </p>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row text-xs">
              <div class="col-4">
                <p class="m-1">Category:</p>
              </div>
              <div class="col-8">
                <p class="m-1 text-right text-dark font-weight-bold">
                  Funitures, Chairs
                </p>
              </div>
            </div>
            <div class="row text-xs">
              <div class="col-4">
                <p class="m-1">In-stock:</p>
              </div>
              <div class="col-8">
                <p class="m-1 text-right text-dark font-weight-bold">16</p>
              </div>
            </div>
            <div class="row text-xs">
              <div class="col-4">
                <p class="m-1">Price:</p>
              </div>
              <div class="col-8">
                <p class="m-1 text-right text-dark font-weight-bold">£150.00</p>
              </div>
            </div>
            <div class="row text-xs">
              <div class="col-6">
                <p class="m-1">Status:</p>
              </div>
              <div class="col-6 p-2 text-right">
                <span
                  class="alert-xs p-1 mt-4 rounded alert-danger"
                  style="height: 2rem"
                  role="alert"
                >
                  Pending
                </span>
              </div>
              <div class="col-4">
                <p class="">Watches</p>
              </div>
              <div class="col-8 text-right">
                <p class="text-dark">160</p>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-danger text-light border m-1 btn-sm"
              >Delete</a
            >
            <a href="#" class="btn btn-info text-light border m-1 btn-sm"
              >Edit</a
            >
          </div>
        </div>
        <!--end mobile view-->

        <p class="text-dark text-center" v-if="prodIncrement == 0">
          You do not have any listings to display in this view.
        </p>

        <div class="justify-content-center p-2 text-sm">
          <nav aria-label="Page navigation example" class="col-12">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link text-dark" href="#">Previous</a>
              </li>
              <li class="page-item">
                <a class="page-link underline" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link text-dark" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>
  </div>
</template>
<script>
import User from '../../apis/User';
import Constants from '../../common/constants';
export default {
  data() {
    return {
      products: [],
      API_BASE_URL: Constants.API_BASE_URL,
      prodIncrement: 1,
    };
  },
  methods: {
    deleteProduct(id) {
      User.getlistings(2).then(response => {
        console.log(response);
        this.products = response.data;
        this.getlistings();
      }).catch(error => {
        console.log(error);
      });
    }
  },
};
</script>
        