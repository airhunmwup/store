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
                      <br />
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="">
    <p class="text m-1 text-dark h5 font-weight-bold font-weight-normal">
        {{ subcat }}
    </p>
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
    <div class="col-12 col-md-4">
    <label for="inputcondition" class="m-1 font-weight-bold text-xs">Items condition</label>
    <select type="number" id="inputcondition" class="form-control m-1 col-5 text-xs" placeholder="max">
      <option>Any</option>
      <option>New</option>
      <option>Used</option>
    </select>
    </div>
    <div class="col-12 col-md-4 m-2 pt-4 center">
<button type="button" class="btn btn-warning text-sm btn-sm border btn-block">See Listings</button>
    </div>
    
</div>
                            </div>
                        </div>
                      </div>
                      <!-- FEATURED Listings -->
                        <div class="row">
                            <div v-for="listing in newListings" v-bind:key="listing.id"
                               class="col-6 col-md-3 col-lg-3"
                            >
                            <router-link
                                class=""
                                to="/ProductDetail"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                            >
                                <img class="card-img-top" src="img/product/22.jpg" alt="Card image cap">
                            </router-link>
                            <div class="card-body">
                                <p class="text-dark text-sm">{{ listing.product_name }}</p>
                                <p class="font-weight-bold p-2 text-sm text-dark">£{{ listing.product_price }}</p>
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
  name: "landingPage",
  data() {
    return {
      cid: this.$route.params.cid,
      categoryList: [],
      newListings:[],
      subcat: '',
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
      User.getNewListings().then(response => {
      this.newListings = response.data;
    }).catch((errors) => {
        console.log(errors);
        console.log("new listing api call error");
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
    if (this.cid){
       this.getNewListings2();
       this.getSubcat();
    }else{
       this.getNewListings();
    }
    console.log(this.categoryList);
  },
}
</script>
