<template>
  <header class="row border-b border-secondary">
      
    <section class="row box">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-3 text-xs">
        

              <i class="zmdi zmdi-account h4"></i>
            Welcome {{ this.$store.state.full_name }}
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-2 text-right">
        
          <router-link
            to="/mechantregister"
            title="sell">
        <p class="nav-link border-warning text-primary text-sm font-weight-bold underline" href="#"><span class="fa fa-star"></span> Sell on REJEE Stores</p>
          </router-link>


      </div>


      <!-- header left mobie -->
    </section>
      <div class="col-2 d-xs-none">
          <a href="index.html">
          <img
            src="img/home/logo.png"
            width="200px"
            alt="REJEE COMPANY"
          /></a>
      </div>
      <div class="col-6 d-md-none">
          <a href="index.html">
          <img
            src="img/home/logo.png"
            width="150px"
            alt="REJEE COMPANY"
          />
           </a>
      </div>
      <div class="col-6 row d-md-none">
      <div class="col-6 text-left">
    <ul class="nav  pr-3">
      <li v-if="this.$store.state.isLoggedIn" class="nav-item dropdown pt-3">
        <a class="nav-link text-dark font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="zmdi zmdi-account"></i> Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="text-md nav flex-column">
            <!-- primary info buttons ends/-->

                <router-link
                  class="dropdown-item text-left underline pl-4 pb-2  font-weight-bold"
                            to="/account"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Personal Information"
                            >
                  Your Account
                </router-link>
            <!-- Account preferences/-->

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/watchingpage"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Watching
            </router-link>

            <!-- Account preferences/

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/recentlyviewed"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Recently viewed
            </router-link>-->

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
      <li v-else class="nav-item dropdown pt-3">
        <a class="nav-link text-dark font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <div class="p-3"> <router-link
            class="text-dark font-weight-bold"
            to="/login"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="login"
            >
            <button type="button" class="btn btn-warning btn-sm border font-weight-bold btn-block">Sign in</button>
            </router-link>
        </div>
          <a class="dropdown-item" href="#">Create an account</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
      </div>
      <div class="col-6 justify-content-end">
    <ul class="nav">
      <li class="nav-item pl-3">
                            <button type="button" class="text-dark pt-3 btn ">
          <router-link
                              to="/ViewCart"
                              data-toggle="collapse"
                              data-target=".navbar-collapse"
                              title="view Shopping basket"
                            >
  <i
                  class="fa fa-lg p-2 fa-shopping-cart"
                  aria-hidden="true"
                ></i><span class="badge badge-danger">{{basketState}}</span>
                </router-link>
</button>
      </li>
    </ul>
      </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12">
            <form method="post" class="" id="customer-form">
              <div class="input-group pt-2">
  <div class="input-group-prepend">
    <span class="input-group-text bg-white border-l-2 border-t-2 border-b-2 border-warning"><i class="fa fa-search"></i></span>
  </div>
  <input type="text" class="form-control border-t-2 border-b-2 border-l-0 border-warning p-2 shadow-inner" placeholder="Search for anything" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="btn btn-warning border input-group-text">Search</span>
  </div>
</div>
            </form>
      </div>
      <div class="text-right col-4 d-xs-none">

    <ul class="nav justify-content-center">
      <li v-if="this.$store.state.isLoggedIn" class="nav-item dropdown pt-3">
        <a class="nav-link text-dark font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="zmdi zmdi-account"></i> Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="text-md nav flex-column">


            <!-- primary info buttons ends/-->

                <router-link
                  class="dropdown-item text-left underline pl-4 pb-2  font-weight-bold"
                            to="/account"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Personal Information"
                            >
                  Your Account
                </router-link>
            <!-- Account preferences/-->

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/watchingpage"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Watching
            </router-link>

            <!-- Account preferences/

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/recentlyviewed"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              Recently viewed
            </router-link>-->

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
      <li v-else class="nav-item dropdown pt-2">
        <a class="nav-link text-dark font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <div class="p-3"> <router-link
            class="text-dark font-weight-bold"
            to="/login"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="login"
            >
            <button type="button" class="btn btn-warning btn-sm border font-weight-bold btn-block">Sign in</button>
            </router-link>
        </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Create an account</a>
        </div>
      </li>

      <li class="nav-item pt-3 ">
          
        <a class="nav-link text-dark font-weight-bold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-question-circle"></i> Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
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
  </header>
</template>
<script>

export default {
  data() {
    return {
      loading: false,  
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

