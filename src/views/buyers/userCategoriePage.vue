<template>
              <!-- breadcrumb -->
              <div class="container">
              <!-- breadcrumb -->
                  <div class="row">

                    <!-- ####Side bar Cataloge starts here the categorie active wouldnt ###
                    #########collapse other can and should have text-primary underline ####
                    ######### to indicate its active,###################################-->
                    <div
                      class="
                        sidebar-3 sidebar-collection
                        col-lg-3 col-md-3 col-sm-3 d-xs-none border-r-2
                      "
                    >
                      <!-- ###category menu### -->
                      <div class="sidebar-block">
                        <div class="title-block">All Categories</div>
                        <div class="block-content font-weight-bold text-dark">
                          <div v-for="category in categoryList" v-bind:key="category.id" class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              v-bind:data-target="'#livingroom' + category.id" 
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <router-link 
                              v-bind:to="'/CategoriePage/' + category.id"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                            ><a class="cateItem" href="#">{{ category.cat_name }}</a>
                           </router-link>
                            
                            <div
                              class="subCategory "
                              v-bind:id="'livingroom' + category.id"
                              aria-expanded="true"
                              role="status"
                            >
                              <div  v-for="subcategory in category.subcategories" v-bind:key="subcategory.id" class="cateTitle">
                                <a href="#" class="cateItem">{{ subcategory.sub_catname }}</a>
                              </div>
                              
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      <!-- best seller -->
                      <div class="sidebar-block"></div>
                    </div>



                    <div class="col-lg-9 col-md-9 col-sm-12">
                      <p class="text p-3 text-dark h5 font-weight-bold font-weight-normal">
                        {{ categorie.cat_name }}
                      </p>
                      <br />
                      <!-- FEATURED CATEGORIES -->
                        <div class="row pt-4 pb-4">
                          <div v-for="subcategory in categorie.subcategories" v-bind:key="subcategory.id" 
                            class="
                              col-6 col-sm-6 col-md-4 col-lg-3
                            "
                          >
                              <p class="underline h6  text-dark">
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
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
                    <p class="text-dark">RRP: <del> £350</del></p>
  </div>

<button type="button" class="border btn btn-sm btn-warning">Add to Cart</button>
</div>
            </router-link>
                </div>
                <div
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
                    <p class="h6 text-dark">Product name</p>
                    <p class="font-weight-bold h6 text-dark">£149.99</p>
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
