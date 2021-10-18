<template>
              <!-- breadcrumb -->
              <div class="m-4">
              <!-- breadcrumb -->
                  <div class="row">

                    <!-- ####Side bar Cataloge starts here the categorie active wouldnt ###
                    #########collapse other can and should have text-primary underline ####
                    ######### to indicate its active,###################################-->
                    <div
                      class="
                        sidebar-3 sidebar-collection
                        col-lg-2 col-md-2 d-xs-none border-r-2
                      "
                    >
                      <!-- ###category menu### -->
                      <div class="sidebar-block">
                        <div class="h6">Shop by Categories</div>
                        <div class="text-sm block-content text-dark">
                          <div v-for="category in categoryList" v-bind:key="category.id" class="cateTitle hasSubCategory open level1">
                            <router-link 
                              :to="{ name: 'UserCategoriePage', params: { cid: category.id, catname: category.cat_name}}"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                            ><a class="cateItem" href="#">{{ category.cat_name }}</a>
                           </router-link>
                            
                          </div>
                          
                        </div>
                      </div>

                      <!-- best seller -->
                      <div class="sidebar-block"></div>
                    </div>



                    <div class="col-lg-10 col-md-10 col-sm-12">
                      <p class="text pt-2 text-dark h5 font-weight-bold font-weight-normal">
                        {{ categorie.cat_name }}
                      </p>
                      <!-- FEATURED CATEGORIES -->
                        <div class="row m-1 pb-4">
                          <div v-for="subcategory in categorie.subcategories" v-bind:key="subcategory.id" 
                            class="
                              col-sm-6 p-2 col-md-4 col-lg-4
                            "
                          >
                              <p class="underline text-sm  text-dark">
                                <router-link
                                    class="text-dark"
                                    :to="{ name: 'ProductPage', params: { cid: subcategory.id, subcatname: subcategory.sub_catname}}"
                                    data-toggle="collapse"
                                    data-target=".navbar-collapse"
                                    >{{ subcategory.sub_catname }}
                                </router-link>
                                
                              </p>
                          </div>
                          
                        </div>
                      <!-- spot light'any random product under the selected category -->
                      
                      <!-- FEATURED CATEGORIES -->
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="">
    <select class=" mr-4 text-center text-xs" @change="sort_by($event)">
                                <option value="0">Sort by</option>
                                <option value="1">Name, A to Z</option>
                                <option value="2">Name, Z to A</option>
                                <option value="3">Price, low to high</option>
                                <option value="4">Price, high to low</option>
                              </select>
                            <a
                              class="ml-1 cateItem"
                              data-toggle="collapse"
                              data-target="#filter"
                              href="#"
                            >
                              <span class="pr-2 text-xs"
                                ><b>filter <i class="fa fa-sliders"></i></b></span
                            ></a>
    </div>
  </div>
</nav>
    <div class="col justify-content-end">
  <div class="form-group mx-sm-3 mb-2 ">
                            <form class="form-inline">
</form>
                          </div>
    </div>
    <div class="col">
    </div>
  </div>
                      <div
                        class="
                          cateTitle
                          pb-3
                          hasSubCategory
                          open
                          level1
                          text-dark
                        "
                      >
                        <!--filter section-->
                        <div
                          class="pt-2 collapse"
                          id="filter"
                          aria-expanded="true"
                          role="status"
                        >
                            <div class="row product-container border-b">
  <div class="row">
    <div class="col-12 col-md-4 row">
    <label for="inputminprice" class="m-1 font-weight-bold text-xs">Price</label>
  <div class="col-5">
    <input type="number" class="form-control m-1 text-xs" placeholder="min">
  </div>
  <div class="col-5">
    <input type="number" class="form-control m-1 text-xs" placeholder="max">
  </div>
    </div>
    <div class="row col-12 col-md-4">
    <div class="col-4">
    <label for="inputcondition" class="m-1 font-weight-bold text-xs">Type</label>
    <select type="number" id="inputcondition" class="form-control m-1 text-xs" placeholder="max">
                  <option value=""></option>
                  <option value="Flat">Flat</option>
                  <option value="House">House</option>
                  <option value="Room only">Room only</option>
                  <option value="Town house">Town house</option>
    </select>
    </div>
    <div class="col-4">
    <label for="inputcondition" class="m-1 font-weight-bold text-xs">Bedroom</label>
    <select type="number" id="inputcondition" class="form-control m-1 text-xs" placeholder="max">
                  <option value=""></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="4">5</option>
                  <option value="4">6</option>
                  <option value="4">7</option>
                  <option value="4">8</option>
                  <option value="4">9</option>
                  <option value="4">10</option>
    </select>
    </div>
    <div class="col-4">
    <label for="inputcondition" class="m-1 font-weight-bold text-xs">Bathroom</label>
    <select type="number" id="inputcondition" class="form-control m-1 text-xs" placeholder="max">
                  <option value=""></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="4">5</option>
                  <option value="4">6</option>
                  <option value="4">7</option>
                  <option value="4">8</option>
                  <option value="4">9</option>
                  <option value="4">10</option>
    </select>
    </div>
    </div>
    <div class="col-12 col-md-4 m-2 pt-4 center">
<button type="button" class="btn btn-warning text-sm btn-sm border btn-block">See Listings</button>
    </div>
    
</div>
                            </div>
                        </div>
                      </div>
                      <!-- FEATURED Listings -->
                      <div class="title-product">
                        <div class="row">
                            <div v-for="listing in newListings" v-bind:key="listing.id"
                               class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                            >
                            <router-link
                                class=""
                                :to="{ name: 'propertyPage', params: { pid: listing.id, pname: listing.property_name}}"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                            >
                                <div v-for="img in listing.property_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path" class="card-img-top" alt="Product" style="height:200px; width: 100%;" v-bind:data-id="img.id" /></div>
                            <div class="card-body">
                                <p class="text-dark h6 text-sm">{{ listing.property_name }}</p>
                                <p class="font-weight-bold text-sm text-dark">£{{ listing.property_price }}</p>
                            </div>

                            </router-link>
                       </div>
                        </div>
                      </div>
                       
                       <!-- <div class="justify-content-center p-4">
                <nav aria-label="Page navigation example" class="col-12">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link underline" href="#">1</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
  </ul>
</nav>
                      </div> -->
                    </div>

                  </div>
              </div>
</template>

<script>

import User from "../../apis/User";
import { mapState } from 'vuex';
import Constants from "../../common/constants";
export default {
  name: "landingPage",
  data() {
    return {
      cid: '',
      categorie: [],
      categoryList: [],
      newListings:[],
      API_BASE_URL: Constants.API_BASE_URL,
    };
  },
  methods: {
    getCategoryList() {
      User.getCategoryList().then(response => {
      this.categoryList = response.data;
    }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
            //document.getElementById("alat").innerHTML = error.response.data.message;
        }
      })
    },
    getCategory() {
      User.getCats2().then(response => {
      this.categorie = response.data[0];
    }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
           console.log(error.response.data.message);
        }
      })
    },
    getNewListings() {
      User.getProperties().then(response => {
      this.newListings = response.data;
      console.log(this.newListings);
    }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
           console.log(error.response.data.message);
        }
      });
    },
    doThis(id){
    User.getCategory(id).then(response => {
      this.categorie = response.data[0];
    }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
           // document.getElementById("alat").innerHTML = error.response.data.message;
        }
      });
    User.getNewLists(id).then(response => {
      this.newListings = response.data;
    }).catch((errors) => {
        console.log(errors);
        console.log("new listing api call error");
      });
    },
    product_detail_link(event){
      var id = event.target.getAttribute("data-id");
      this.$store.dispatch("product_detail_page", id);
    }

  },
  
  mounted() {
    this.getCategory();
    this.getCategoryList();
    this.getNewListings();
    console.log(this.categoryList);
  },
}
</script>
