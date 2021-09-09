<template>
  <!-- main content -->
    <div class="container pt-2">
              <!-- breadcrumb -->
              <div class="container">
                  <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-9">
                      <p class="text p-3 text-dark h5 font-weight-bold font-weight-normal">
                    REJEE Properties
                  </p>
              <div class="card">
                  <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand text-sm font-weight-bold" href="#">For sale</a><a class="navbar-brand text-sm font-weight-bold" href="#">To rent</a>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="navbar-collapse" id="navbarSupportedContent">

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 m-1" type="search" placeholder="Search area" aria-label="Search">
    
  <select class="custom-select m-1" aria-label="Example select with button addon">
    <option value="">Search radius</option>
                        <option value="">This area</option>
                        <option value="">+1 mile</option>
                        <option value="">+3 miles</option>
                        <option value="">+5 miles</option>
                        <option value="">+10 miles</option>
                        <option value="">+15 miles</option>
                        <option value="">+20 miles</option>
                        <option value="">+30 miles</option>
                        <option value="">+40 miles</option>
                        </select>
      
<select class="custom-select m-1" aria-label="Example select with button addon">
    <option value="">Property type</option>
                        <option value="">House</option>
                        <option value="">Flats</option>
                        <option value="">Farm/Land</option>
                        </select>
  <select class="custom-select m-1" aria-label="Example select with button addon">
    <option value="">Bedrooms</option>
                        <option value="">Studio</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10+</option>
                        </select>
                        <div class="dropdown">
  <button class="btn border bg-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Price Range
  </button>
        <div class="dropdown-menu p-2" aria-labelledby="navbarDropdown">
          <a class="text-sm">Min</a>
          <div class="input-group input-group-sm ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">£</span>
  </div>
  <input type="text" class="form-control " placeholder="" aria-describedby="basic-addon1">
</div>
          <div class="dropdown-divider"></div>
          <a class="text-sm">Max</a>
          <div class="input-group input-group-sm">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">£</span>
  </div>
  <input type="text" class="form-control " placeholder="" aria-describedby="basic-addon1">
</div>
        </div>
</div>
      <button class="btn btn-outline-success m-1 " type="submit">Search</button>
    </form>
  </div>
</nav>

              </div>
                      <br />
                      <!-- FEATURED Listings -->
                      <div class="title-product">
                        <div class="row">
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
    </div>

</template>

<script>

import User from "../../apis/User";

export default {
  name: "landingPage",
  data() {
    return {
      categoryList: [],
      newListings:[]
    };
  },
  methods: {
    getCategoryList() {
      User.getCategoryList().then(response => {
      this.categoryList = response.data;
    }).catch((errors) => {
        console.log(errors);
        console.log("cat list info api call error");
      });
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
    this.getCategoryList();
    this.getNewListings();
    console.log(this.categoryList);
  },
}
</script>
