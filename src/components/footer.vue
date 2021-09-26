<template>
    <!-- footer -->
    <footer class="justify-content-center footer-one d-md-none d-lg-none fixed-bottom"><div class="card container">
  <div class="row">
    <div class="col center ">
<a v-if="this.$store.state.isLoggedIn"  class="btn p-2 text-dark font-weight-bold " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  <span  class="fa fa-lg fa-user"></span>
</a> 
      <router-link v-else 
            to="/login"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="login"
            >
        <a class="text-sm btn p-2 text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="zmdi zmdi-lock"></i> Sign in
        </a></router-link>
    </div>
    <div class="col center "> 
      <router-link v-if="this.$store.state.isLoggedIn" 
                      class="d-md-none d-lg-none"
                        to="/newlisting"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Start Selling."
                      >
          <p class="btn p-2 text-dark"><img src="img/myaccount/sellershub.png" style="width: 1.3rem; height: 1.3rem" />
          
  </p></router-link>
                      <router-link  v-else  
                      class="d-md-none d-lg-none"
                        to="/registertosell"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Start Selling."
                      >
          <p class="btn text-dark p-2"><img src="img/myaccount/sellershub.png" style="width: 1.3rem; height: 1.3rem" />
          
  </p></router-link>
    </div>
    <div class="col center ">
                            <button type="button" class="text-dark btn ">
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
    </div>
  </div>
</div>
        
    </footer>

  <!-- footer -->
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