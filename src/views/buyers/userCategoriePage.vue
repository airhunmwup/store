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
                      <p class="text p-2 text-dark h5 font-weight-bold font-weight-normal">
                        {{ categorie.cat_name }}
                      </p>
                      <br />
                      <!-- FEATURED CATEGORIES -->
                        <div class="row m-2 pb-4">
                          <div v-for="subcategory in categorie.subcategories" v-bind:key="subcategory.id" 
                            class="
                              col-6 col-sm-6 p-2 col-md-4 col-lg-4
                            "
                          >
                              <p class="underline text-sm  text-dark">
                                {{ subcategory.sub_catname }}
                              </p>
                          </div>
                          
                        </div>
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
                            >
                                <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="text-dark text-sm">{{ listing.product_name }}</p>
                                <p class="font-weight-bold p-2 text-sm text-dark">£{{ listing.product_price }}</p>
                            <button type="button" class="border btn btn-sm mr-1"><span class="fa fa-shopping-cart"></span></button>
                            <button type="button" class="border btn btn-sm ml-1"><span class="fa fa-eye"></span></button>
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
    getCategory() {
      User.getCategory(this.cid).then(response => {
      this.categorie = response.data[0];
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
    getNewListings() {
      User.getNewListings().then(response => {
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
