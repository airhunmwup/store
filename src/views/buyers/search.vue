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
                              v-bind:to="'/CategoriePage/' + category.id"
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
                      <p class="text p-3 text-dark h5 font-weight-bold font-weight-normal">
                        <span id="dis"></span> {{ keywords }}
                      </p>
                    
                      
                      <!-- spot light'any random product under the selected category -->
                      
                      <!-- FEATURED Listings -->
                      <div class="title-product">
                        <div class="row">
                            <div v-for="listing in newListings" v-bind:key="listing.id"
                               class=" p-2 col-6 col-sm-6 col-md-3 col-lg-3"
                            >
                            <router-link
                                class=""
                                to="/Product Detail"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                title="Home"
                            >
                            <div class="card" style="width: 11rem;">
                                <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="h6 text-dark">{{ listing.product_name }}</p>
                                <p class="font-weight-bold h6 text-dark">£{{ listing.product_price }}</p>
                                <p class="text-dark">RRP: <del> £350</del></p>
                            </div>

                            <button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
                            </div>
                            </router-link>
                       </div>
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

export default {
  props: ['cid'],
  name: "landingPage",
  data() {
    return {
     keywords: this.$route.params.data,
     formData: {
        keywords: this.$route.params.data,
      },      
      categorie: [],
      categoryList: [],
      newListings:[]
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
    getResults() {
      User.getResults(this.formData).then(response => {
      if (response.data[0].length !==0){
      this.newListings = response.data[0];
      }else{
        document.getElementById("dis").innerHTML = "No results found on";
      }
      console.log(this.newListings);
    }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
           // document.getElementById("alat").innerHTML = error.response.data.message;
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
    this.getResults();
    console.log(this.categoryList);
  },
}
</script>
