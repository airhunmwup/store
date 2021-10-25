<template>
  <!-- main content -->
  <div class="m-2">
    <nav aria-label="breadcrumb" class="d-xs-none">
      <ol class="breadcrumb text-xs">
        <li class="breadcrumb-item text-primary"> <router-link
                            to="/account"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >
          Your Account</router-link>
        </li>
        <li class="breadcrumb-item text-primary" aria-current="page"> <router-link
                            to="/Overview"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >
          Sellers hub</router-link>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Listings</li>
      </ol>
    </nav>

    <div class="justify-content-center row pb-4">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <p
              class="text pl-3 pt-3 text-dark h5 font-weight-bold font-weight-normal"
            >
              Listings
            </p>
          </div>
        </div>

      <div class="col-lg-12 m-1 col-xs-12">
       
            <!--  <form method="post" class="std" id="customer-form">
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
        </form>Example single danger button -->
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
                0 Listings <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu text-xs">
                <a class="dropdown-item font-weight-bold" href="#"
                  >Active (2)</a
                >
                <a class="dropdown-item font-weight-bold" href="#"
                  >Unsold (0)</a
                >
                <a class="dropdown-item font-weight-bold" href="#"
                  >Out of Stock (0)</a
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
              class="btn-group btn-group-sm"
            >
              <router-link
                to="/newlisting"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="add new listings"
              >
                <button type="button" class="btn border btn-xs">
                  <span class="zmdi zmdi-plus-square"></span> 
                </button>
              </router-link>
              <router-link
                to="/newlisting"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="add new listings"
              >
                <button type="button" class="btn border btn-xs">
                <span class="zmdi zmdi-delete"></span> 
              </button>
              </router-link>
              
            </div>
      </div>
      <div class="pb-2 col-12">
        <!--Purchase History-->
        <div class="row m-1 rounded">

          <!--start Web view-->
          <div class="card m-2 border d-xs-none">
            <div class="card-header font-weight-bold">
              <div class="row text-xs">
                <div class="col-1">
                  <div class="input-group">
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
                  <p class="">Category</p>
                </div>
                <div class="col">
                  <p class="">Price</p>
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
                  <div v-for="img in prods.product_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path"  alt="Product" style="height:50px; margin:auto;" v-bind:data-id="img.id" /></div>
                </div>
                <div class="col">
                  <p class="">{{prods.product_subcat}}</p>
                </div>
                <div class="col">
                  <p class="">£{{prods.product_price}}</p>
                </div>
                <div class="col text-center">
                  <p class="">{{prods.product_quantity}}</p>
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
                      text-dark
                      border btn-xs
                    "
                    @click="deletelisting(prods.id)"
                  >
                    <span class="zmdi zmdi-delete"></span>
                  </button>
                  
                  <button
                    type="button"
                    class="
                      btn
                      text-dark
                      border btn-xs
                      ml-1
                    "
                  >
                   <i class="zmdi zmdi-edit"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card m-2 border d-xs-none">
        <div class="p-2 card-header">
        <h3><b>Vehicles</b></h3>
        </div>
        <div class="card-body border-b-2 text-dark" v-for="listing in this.$store.state.myvehicles" :key="listing.id" >
            
              <div class="row text-xs">
                <div class="col-1">
                  <div class="input-group">
                    <input
                      type="checkbox"
                      aria-label="Checkbox for following text input"
                    />
                  </div>
                </div>
                <div class="col">
                  <p class="">{{ listing.vehicle_make + ' ' + listing.vehicle_model }}</p>
                </div>
                <div class="col">
                  <div v-for="img in listing.vehicle_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path"  alt="Product" style="height:50px; margin:auto;" v-bind:data-id="img.id" /></div>
                </div>
                <div class="col">
                  <p class="">{{listing.product_subcat}}</p>
                </div>
                <div class="col">
                  <p class="">£{{listing.vehicle_price}}</p>
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
                  <p class="">0</p>
                </div>
                <div class="col text-right">
                 
                  <button
                    type="button"
                    class="
                      btn
                      text-dark
                      border btn-xs
                    "
                    @click="deletelisting(listing.id)"
                  >
                    <span class="zmdi zmdi-delete"></span>
                  </button>
                  
                  <button
                    type="button"
                    class="
                      btn
                      text-dark
                      border btn-xs
                      ml-1
                    "
                  >
                   <i class="zmdi zmdi-edit"></i>
                  </button>
                </div>
              </div>
            </div>
            
          </div>
        <div class="card m-2 border d-xs-none">
        <div class="p-2 card-header">
            <h3><b>Properties</b></h3>
        </div>
            <div class="card-body border-b-2 text-dark" v-for="listing in this.$store.state.myproperties" :key="listing.id" >
                <div class="row text-xs">
                    <div class="col-1">
                       <div class="input-group">
                            <input
                               type="checkbox"
                               aria-label="Checkbox for following text input"
                            />
                        </div>
                    </div>
                    <div class="col">
                       <p class="">{{ listing.property_name }}</p>
                    </div>
                    <div class="col">
                  <div v-for="img in listing.property_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path"  alt="Product" style="height:50px; margin:auto;" v-bind:data-id="img.id" /></div>
                </div>
                <div class="col">
                  <p class="">{{listing.product_subcat}}</p>
                </div>
                <div class="col">
                  <p class="">£{{listing.property_price}}</p>
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
                  <p class="">0</p>
                </div>
                <div class="col text-right">
                 
                  <button
                    type="button"
                    class="
                      btn
                      text-dark
                      border btn-xs
                    "
                    @click="deletelisting(listing.id)"
                  >
                  <span class="zmdi zmdi-delete"></span>
                  </button>
                  <button
                    type="button"
                    class="
                      btn
                      text-dark
                      border btn-xs
                      ml-1
                    "
                  >
                   <i class="zmdi zmdi-edit"></i>
                  </button>
                </div>
            </div>
        </div>
        </div>
        </div>
        
        
        <!--end Web view-->

        <!--start mobile view-->
        <div class="d-md-none card mt-2 text-xs" v-for="prods in this.$store.state.mylistings" :key="prods.id" >
          <div class="card-header">
            <div class="row text-xs">
              <div class="col">
                <div class="input-group">
                  <input
                    type="checkbox"
                    aria-label="Checkbox for following text input"
                  />
                  <span class="ml-2 "> 
                <span
                  class="alert-xs p-1 mt-4 rounded alert-success"
                  style="height: 2rem"
                  role="alert"
                >
                  Active
                </span> </span>
                </div>
              </div>
              <div class="col">
                <p class="text-right"><b></b></p>
              </div>
            </div>
          </div>
          <div class="card-header">
            <div class="row text-xs">
              <div class="col-6 pt-2">
                <div v-for="img in prods.product_images.slice(0,1)" v-bind:key="img.id">
                <img
                  class=""
                  style="width: 70%"
                  v-bind:src="API_BASE_URL + img.product_image_path"
                  alt="Card image cap"
                /></div>
              </div>
              <div class="col-6">
                <p class="text-left mt-4 text-lg text-dark font-weight-bold">
                  {{prods.product_name}}
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
                  {{prods.product_subcat}}
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
                <p class="m-1 text-dark font-weight-bold">£{{prods.product_price}}</p>
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
            <a href="#" class="btn border text-dark border m-1 btn-sm"
               @click="deletelisting(prods.id)"
              >Delete</a
            >
            <a href="#" class="btn bborder text-dark border m-1 btn-sm"
              >Edit</a
            >
          </div>
        </div>
        <div class="d-md-none card mt-2 text-xs" v-for="listing in this.$store.state.myvehicles" :key="listing.id" >
          <div class="card-header">
            <div class="row text-xs">
              <div class="col">
                <div class="input-group">
                  <input
                    type="checkbox"
                    aria-label="Checkbox for following text input"
                  />
                  <span class="ml-2 "> 
                <span
                  class="alert-xs p-1 mt-4 rounded alert-success"
                  style="height: 2rem"
                  role="alert"
                >
                  Active
                </span> </span>
                </div>
              </div>
              <div class="col">
                <p class="text-right"><b></b></p>
              </div>
            </div>
          </div>
          <div class="card-header">
            <div class="row text-xs">
              <div class="col-6 pt-2">
                <div v-for="img in listing.vehicle_images.slice(0,1)" v-bind:key="img.id">
                <img
                  class=""
                  style="width: 70%"
                  v-bind:src="API_BASE_URL + img.product_image_path"
                  alt="Card image cap"
                /></div>
              </div>
              <div class="col-6">
                <p class="text-left mt-4 text-lg text-dark font-weight-bold">
                  {{ listing.vehicle_make + ' ' + listing.vehicle_model }}
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
                  {{listing.product_subcat}}
                </p>
              </div>
              <div class="col-4">
                <p class="m-1">Price:</p>
              </div>
              <div class="col-8 text-right">
                <p class="m-1 text-dark font-weight-bold">£{{listing.vehicle_price}}</p>
              </div>
              <div class="col-4">
                <p class="m-1">Watches</p>
              </div>
              <div class="col-8 text-right">
                <p class="text-dark">0</p>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="btn border text-dark border m-1 btn-sm"
               @click="deletelisting(listing.id)"
              >Delete</a
            >
            <a href="#" class="btn bborder text-dark border m-1 btn-sm"
              >Edit</a
            >
          </div>
        </div>

        <div class="d-md-none card mt-2 text-xs" v-for="listing in this.$store.state.myproperties" :key="listing.id" >
          <div class="card-header">
            <div class="row text-xs">
              <div class="col">
                <div class="input-group">
                  <input
                    type="checkbox"
                    aria-label="Checkbox for following text input"
                  />
                  <span class="ml-2 "> 
                <span
                  class="alert-xs p-1 mt-4 rounded alert-success"
                  style="height: 2rem"
                  role="alert"
                >
                  Active
                </span> </span>
                </div>
              </div>
              <div class="col">
                <p class="text-right"><b></b></p>
              </div>
            </div>
          </div>
          <div class="card-header">
            <div class="row text-xs">
              <div class="col-6 pt-2">
                <div v-for="img in listing.property_images.slice(0,1)" v-bind:key="img.id">
                <img
                  class=""
                  style="width: 70%"
                  v-bind:src="API_BASE_URL + img.product_image_path"
                  alt="Card image cap"
                /></div>
              </div>
              <div class="col-6">
                <p class="text-left mt-4 text-lg text-dark font-weight-bold">
                  {{ listing.property_name }}
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
                  {{listing.product_subcat}}
                </p>
              </div>
              <div class="col-4">
                <p class="m-1">Price:</p>
              </div>
              <div class="col-8 text-right">
                <p class="m-1 text-dark font-weight-bold">£{{listing.property_price}}</p>
              </div>
              <div class="col-4">
                <p class="m-1">Watches</p>
              </div>
              <div class="col-8 text-right">
                <p class="text-dark">0</p>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <a href="#" class="btn border text-dark border m-1 btn-sm"
               @click="deletelisting(listing.id)"
              >Delete</a
            >
            <a href="#" class="btn bborder text-dark border m-1 btn-sm"
              >Edit</a
            >
          </div>
        </div>
        <!--end mobile view-->

            <p class="text-dark text-center" v-if="!this.$store.state.mylistings">
              You do not have any item to display in this view.
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

</template>
<script>
import User from '../../apis/User';
import Constants from '../../common/constants';
export default {
  data() {
    return {
      API_BASE_URL: Constants.API_BASE_URL,
      prodIncrement: 1,
    };
  },
  methods: {
    deletelisting(id) {
      User.deletelisting(id).then(response => {
        console.log(response);
        this.$store.dispatch('getlistings', this.$store.state.currentUser.id);
      }).catch(error => {
        console.log(error);
      });
    }
  },
};
</script>
        