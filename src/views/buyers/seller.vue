<template>
  <!-- main content -->
    <div class="m-4 text-sm">
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
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light">
    <p class="text m-1 text-dark h5 font-weight-bold font-weight-normal">
        {{ username }}
    </p>
  
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
                      
                      <!-- FEATURED Listings -->
                        <div class="row">
                            <div v-for="listing in newListings" v-bind:key="listing.id"
                               class="col-6 col-md-3 col-lg-3"
                            >
                            <router-link
                                class=""
                                :to="{ name: 'productDetails_1', params: { pid: listing.id, pname: listing.product_name}}"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                            >
                                <div v-for="img in listing.product_images.slice(0,1)" v-bind:key="img.id"><img v-bind:src="API_BASE_URL + img.product_image_path" class="card-img-top" alt="Product" style="height:200px; width: 100%;" v-bind:data-id="img.id" /></div>
                            </router-link>
                            <div class="card-body">
                                <p class="text-dark text-sm">{{ listing.product_name }}</p>
                                <p class="font-weight-bold p-2 text-sm text-dark">£{{ listing.product_price }}</p>
                            </div>

                            
                       </div>
                        <div v-for="listing in newVehicles" v-bind:key="listing.id"
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
                        <div v-for="listing in newProperties" v-bind:key="listing.id"
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
                        <div class="justify-content-center p-4">
                <nav aria-label="Page navigation example" class="col-12">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link underline" href="#">1</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
    <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
  </ul>
</nav>
                      </div>
                    </div>

                  </div>
    </div>

</template>

<script>

import User from "../../apis/User";
import Constants from "../../common/constants";
export default {
  name: "landingPage",
  data() {
    return {
      uid: this.$route.params.uid,
      username: this.$route.params.username,
      categoryList: [],
      newListings:[],
      newVehicles:[],
      newProperties:[],
      subcat: '',
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
    
    getNewListings() {
      User.getListingBySeller(this.uid).then(response => {
      this.newListings = response.data.products;
      this.newVehicles = response.data.vehicles;
      this.newProperties = response.data.properties;
console.log(this.newProperties);
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
     getSubcat(){
        User.catInfo(this.cid).then(response => {
        this.subcat = response.data[0].sub_catname;
        console.log(this.subcat);
    }).catch((errors) => {
        console.log(errors);
        console.log("new listing api call error");
      });
     },
     getNewListings2() {
      User.getNewListings2(this.cid).then(response => {
      this.newListings = response.data;
    }).catch((errors) => {
        console.log(errors);
        console.log("new listing api call error");
      });
    },
    sort_by(event){
      User.sortListings(event.target.value).then(response => {
      this.newListings = response.data;
      //console.log(this.newListings);
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
   
    product_detail_link(event){
      var id = event.target.getAttribute("data-id");
      this.$store.dispatch("product_detail_page", id);
    }

  },
  mounted() {
    this.getCategoryList();
    this.getNewListings();   
    console.log(this.categoryList);
  },
}
</script>
