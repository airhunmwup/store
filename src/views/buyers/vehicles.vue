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
    <input type="number" v-model="formData.min_price" class="form-control m-1 text-xs" placeholder="min">
  </div>
  <div class="col-5">
    <input type="number" v-model="formData.max_price" class="form-control m-1 text-xs" placeholder="max">
  </div>
    </div>
    <div class="col-12 col-md-4 row">
    <label for="inputminprice" class="m-1 font-weight-bold text-xs">Year</label>
  <div class="col-5">
    <select class="form-control m-1 text-xs" v-model="formData.min_year">
                  <option value="">min</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1976">1976</option>
                </select>
  </div>
  <div class="col-5">
    <select class="form-control m-1 text-xs" v-model="formData.max_year">
                  <option value="">max</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1976">1976</option>
                </select>
  </div>
    </div>
    <div class="col-12 col-md-4 row">
  <div class="col-5">
    <label for="inputcondition" class="m-1 font-weight-bold text-xs">Number of owners</label>
    <select type="number" id="inputcondition" v-model="formData.owners" class="form-control m-1 text-xs" placeholder="max">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3+">3+</option>
    </select>
  </div>
  <div class="col-5">
    <label for="inputcondition" class="m-1 font-weight-bold text-xs">Engine type</label>
    <select type="number" id="inputcondition" v-model="formData.engine_type" class="form-control m-1 text-xs" placeholder="max">
                  <option value=""></option>
                  <option value="Manual transmission">Manual transmission</option>
                  <option value="Automatic transmission">Automatic transmission</option>
                  <option value="Hybrid">Hybrid</option>
    </select>
  </div>
    </div>
    <div class="col-12 col-md-4 m-2 pt-4 center">
<button type="button" class="btn btn-warning text-sm btn-sm border btn-block" @click="filter">See Listings</button>
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
                                :to="{ name: 'vehiclepage', params: { pid: listing.id, pname: listing.vehicle_make + ' ' + listing.vehicle_model}}"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                            >
                                <div v-for="img in listing.vehicle_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path" class="card-img-top" alt="Product" style="height:200px; width: 100%;" v-bind:data-id="img.id" /></div>
                            <div class="card-body">
                                <p class="text-dark h6 text-sm">{{ listing.vehicle_make + ' ' + listing.vehicle_model }}</p>
                                <p class="font-weight-bold text-sm text-dark">£{{ listing.vehicle_price }}</p>
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
      formData: {
        user_id : this.$store.state.currentUser.id,
        min_price: "",
        max_price: "",
        min_year: "",
        max_year: "",
        owners: "",
        engine_type: "",
      },
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
      User.getCats().then(response => {
      this.categorie = response.data[0];
    }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
           document.getElementById("alat").innerHTML = error.response.data.message;
        }
      })
    },
    getNewListings() {
      User.getVehicles().then(response => {
      this.newListings = response.data;
      console.log(this.newListings);
    }).catch((errors) => {
        console.log(errors);
        console.log("new listing api call error");
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
    },
    filter(){
        console.log(this.formData);
        if (this.formData.min_price > 0 || this.formData.max_price > 0 || this.formData.condition !== "" || this.formData.min_year !== "" || this.formData.max_year !== "" || this.formData.engine_type !== ""){
        User.filterVehicles(this.formData,{             
          }).then(res =>{              
              this.newListings = res.data;
              console.log(res.data);                   
          }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
             console.log(error.response.data.message);
        }
        });
        }else{
            console.log("all fields are empty");
        }
    },

  },

  
  mounted() {
    this.getCategory();
    this.getCategoryList();
    this.getNewListings();
    console.log(this.categoryList);
  },
}
</script>
