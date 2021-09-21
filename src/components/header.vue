<template>
  <header class="row border-b border-danger border-secondary">
      <div class="alert alert-warning text-sm alert-dismissible fade show fixed-top" style="display: none"  id="alertBox" role="alert">
  <strong>Alert! </strong> <span id='alat'> You fit use this place take do notifications.</span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
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
    <ul class="nav">
      <li v-if="this.$store.state.isLoggedIn" class="nav-item dropdown pt-3">
<a class="nav-link btn text-dark font-weight-bold " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  <p class="text-sm"><span  class="zmdi zmdi-account"></span><span class="text-xs"> {{ this.$store.state.full_name }}</span></p>
</a> 
      </li>
      <li v-else class="nav-item dropdown pt-3"><router-link
            to="/login"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="login"
            >
        <a class="nav-link text-sm btn text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="zmdi zmdi-lock"></i> Sign in
        </a></router-link>
      </li>
    </ul>
      </div>
      <div class="col-6 justify-content-end">
    <ul class="nav">
      <li class="nav-item">
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
  <div class="offcanvas-header">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    
          <div v-if="this.$store.state.isLoggedIn"  class="text-md text-dark nav flex-column">
            <!-- primary info buttons ends/-->

    Hello! {{ this.$store.state.full_name }}
                <router-link
                  class="dropdown-item text-left underline pl-4 pb-2  font-weight-bold"
                            to="/account"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            title="Personal Information"
            data-bs-dismiss="offcanvas" aria-label="Close"
                            >
                  Your Account
                </router-link>
            <!-- Account preferences/-->

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/watchingpage"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            data-bs-dismiss="offcanvas" aria-label="Close"
            >
              Watching
            </router-link>

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/purchasehistory"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            data-bs-dismiss="offcanvas" aria-label="Close"
            >
              Your Orders
            </router-link>

            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/My message"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            data-bs-dismiss="offcanvas" aria-label="Close"
            >
              Message (2)
            </router-link>
            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/Overview"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            data-bs-dismiss="offcanvas" aria-label="Close"
            >
              Sellers Hub
            </router-link>
            <router-link
              class="dropdown-item text-left text-dark pl-4 pb-2 font-weight-bold"
              to="/Overview"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            data-bs-dismiss="offcanvas" aria-label="Close"
            >
              Help!
            </router-link>

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

