<template>
<header>
  <div class="row border-b border-danger border-secondary">
      <div class="col-2 d-xs-none">
          <a href="index.html">
          <img
            src="img/home/logo.png"
            width="200px"
            alt="REJEE COMPANY"
          /></a>
      </div>
      <div class="col-12 d-md-none">
  <div class="row">
    <div class="col justify-center">
          <a href="index.html">
          <img  class="pt-2 pl-2"
            src="img/home/logo2.png"
            width="70%"
            alt="REJEE COMPANY"
          />
           </a>
    </div>
    <div class="col-9">
    </div>
  </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="input-group pt-2">
  
  <input type="text" id="searchBox" v-model="keywords" class="form-control text-sm border-t-2 border-b-2 border-l-0 border p-2 shadow-inner" placeholder="Search store" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-prepend shadow border-r-2" @click.prevent="search">
    <span id="searchFa" class="btn btn-default input-group-text bg-dark text-light rounded  border"><i class="fa fa-search"></i></span>
  </div>  

</div>
      </div>
      <div class="text-right col-4 d-xs-none">

    <ul class="nav justify-content-center">
      <li v-if="this.$store.state.isLoggedIn" class="nav-item dropdown pt-3">
        <a class="nav-link text-dark font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="zmdi zmdi-account"></i>  <span class="text-xs"> {{ this.$store.state.full_name }}</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="text-md nav flex-column">


                <router-link
                  class="dropdown-item text-left underline pl-4 pb-2  font-weight-bold"
                            to="/account"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Personal Information"
                            >
                  Your Account
                </router-link>

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/watchingpage"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Watching
            </router-link>

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/purchasehistory"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Your Orders
            </router-link>

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/My message"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Message (2)
            </router-link>
            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/Overview"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Sellers Hub
            </router-link>

            <!-- Account preferences Ends/-->
            <!-- Account preferences Ends/-->
        <a
              class="dropdown-item text-left text-dark pt-2 pl-2 text-xs pb-2 font-weight-bold"
              data-toggle="collapse"
              title="sign out"
              @click="signOut"
            ><i class="fa fa-sign-out fa-2x pr-2"></i>
              Sign out
         </a>
          </div>
        </div>
      </li>
      <li v-else class="nav-item dropdown pt-2"><router-link
            class="text-dark font-weight-bold"
            to="/login"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="login"
            >
        <a class="nav-link text-dark font-weight-bold m-2 " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="zmdi zmdi-lock"></i> Sign in
        </a></router-link>
      </li>

      <li class="nav-item pt-3 ">
        
          <router-link
                              to="/help"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="help"
                            >  
        <a class="nav-link text-dark font-weight-bold " href="#">
          <i class="fa fa-question-circle"></i> Help
        </a></router-link>
      </li>
      <li class="nav-item ">
          <router-link
                              to="/ViewCart"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >
                            <button type="button" class="text-dark pt-3 btn ">
  <i
                  class="fa fa-lg p-2 fa-shopping-cart"
                  aria-hidden="true"
                ></i><span class="badge badge-danger">{{basketState}}</span>
</button></router-link>
      </li>
</ul>
      </div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  
        
          <div v-if="this.$store.state.isLoggedIn"  class="p-2 text-md text-dark nav flex-column">
            <!-- primary info buttons ends/-->
<div class="offcanvas-header">
            <p class="text text-dark h5 font-weight-bold">
    Hello! {{ this.$store.state.full_name }}
            </p>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
          <!--Sigin-and-security-->
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/purchasehistory"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Your Orders"
                  class="card p-3"
                  aria-label="Close"
                  data-bs-dismiss="offcanvas"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/orderimg.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h6">Your Orders</p>
                      <span class=" text-xs">Track,return, or cancel orders.</span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/buyersigninsecsetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Sign in & Security"
                  class="card p-3"
                  aria-label="Close"
                  data-bs-dismiss="offcanvas"
                >
                  <div class="text-left row">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/siginsec4.png" width="100%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h6">Sign in & Security</p>
                      <span class=" text-xs">
                        Edit Sign in, name, and mobile number.
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/buyeraddresssetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Your Addresses"
                  class="card p-3"
                  aria-label="Close"
                  data-bs-dismiss="offcanvas"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/address.png" width="60%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h6">Your Addresses</p>
                      <span class=" text-xs">
                        Edit address and delivery preferences.
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/My message"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Message Center"
                  class="card p-3"
                  aria-label="Close"
                  data-bs-dismiss="offcanvas"
                >
                  <div class="row text-left">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/message.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h6">Message Center</p>
                      <span class=" text-xs">
                        View your REJEE Stores and Seller Messages.
                      </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/overview"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Sellers Hub"
                  class="card p-3"
                  aria-label="Close"
                  data-bs-dismiss="offcanvas"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/sellershub.png" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h6">Sellers Hub</p>
                      <span class=" text-xs">Sale on Rejee Stores, manage sellers account. </span>
                    </div>
                  </div>
                </router-link>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 p-2">
                <router-link
                  to="/help"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="help"
                  class="card p-3"
                  aria-label="Close"
                  data-bs-dismiss="offcanvas"
                >
                  <div class="row text-left ">
                    <div class="col-3 content-end">
                      <img src="img/myaccount/help.ico" width="70%" />
                    </div>
                    <div class="col-9">
                      <p class="text-dark h6">Help</p>
                      <span class=" text-xs">Browes available help topics</span>
                    </div>
                  </div>
                </router-link>
              </div>
        <a
              class="dropdown-item text-left text-dark pt-2 pl-2 text-xs pb-2 font-weight-bold"
              data-toggle="collapse"
              title="sign out"
              @click="signOut"
            data-bs-dismiss="offcanvas" aria-label="Close"
            ><i class="fa fa-sign-out fa-2x pr-2"></i>
              Sign out
         </a>
            </div>
      <!-- end col-md-9-1 -->

          </div>
          
        <div v-else >
        <div class="p-3"> <router-link
            class="text-dark font-weight-bold"
            to="/login"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="login"
            data-bs-dismiss="offcanvas" aria-label="Close"
            >
            <button type="button" class="btn btn-warning btn-sm border font-weight-bold btn-block">Sign in</button>
            </router-link>
        </div>
        <div class="p-3"> <router-link
            class="text-dark font-weight-bold"
            to="/register"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="register"
            >
            <button type="button" class="btn btn-light btn-sm border font-weight-bold btn-block">Create an account</button>
            </router-link>
        </div>
          <div class="dropdown-divider"></div>
        </div>
</div>
  </div>
  </header>
</template>
<script>
export default {
  data() {
    return {
      loading: false, 
      keywords: '', 
    };
  },
  computed:{
    basketState: function(){
      return this.$store.state.basket.length;
    }
  },
  methods: {
    login() {
      this.$store.dispatch("userloginInfo");
    },
    search() {
    if (this.keywords !==""){
      this.$router.push({
        name: 'searching',
        params: {data: this.keywords},
        });
    }else{
        document.getElementById("alat").innerHTML = "search box empty";
             
    }
    },
    signOut() {
      this.$store.dispatch("logout");
      this.$router.push("/signout");
    },
    removeBasket: function (id){
      var itemToRemove = id;
      this.$store.dispatch('removeFromBasket', itemToRemove);
    }
  },
  created() {
    this.$http.defaults.headers.common['Authorization'] = `Bearer ${this.$store.state.token}`;
    this.login();
  },
  mounted() {
    console.log(this.$store.state.currentUser); 
  },
};
</script>

