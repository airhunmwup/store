<template>
  <!-- main content -->

  <!-- main content -->

  <div class="text-sm">
    <div class="content pt-5 pb-5">
      <div class="row pt-2">
        <div class="container align-content-center">
          <div class="register-form">
            <div class="pb-4">
              <p class="h1 text-dark text-center">Hello</p>

              <p class="pb-4 text-dark text-center">
                Sign in to REJEE Stores or

                <router-link
                  to="/register"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="text-primary underline font-weight-bold"
                  title="Register Personal Account"
                  >create an account</router-link
                >
              </p>
              <p class="pb-2 text-danger" v-text="errors.message"></p>
            </div>

        <div class="row justify-center text-sm" >

<!--recently viewed-->
                <div class="row col-sm-12 col-lg-4 col-md-4"><form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input
                    class="form-control"
                    name="email"
                    type="email"
                    placeholder=" Email"
                    v-model="formData.email"
                  />
    <div id="emailHelp" class="form-text"><p class="text-danger" v-text="errors.email"></p></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input
                    class="form-control"
                    name="password"
                    type="password"
                    placeholder="Password"
                    v-model="formData.password"
                  />

    <div id="emailHelp" class="form-text"><p class="text-danger" v-text="errors.password"></p></div>
  </div>
  <div class="mb-3 form-check">
                <router-link
                  to="/passwordrecovery"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="text-primary underline font-weight-bold"
                  title="Forget your password?"
                >
                  Forgot your password?
                </router-link>
  </div>
                  <div class="d-grid gap-2">
  <button class="btn btn-warning bg-gradient border" type="button" @click="login">Submit</button>
</div>
</form>
      </div>

      <!-- end col-md-9-1 -->
    </div>
          </div>
        </div>
      </div>
    </div>


    <div v-if="loading" id="page-preloader" class="redit">
      <div class="page-loading">
            <div class="dot text-center text-danger font-italic font-extrabold"></div>
            <div class="dot text-center text-danger font-italic font-extrabold"></div>
            <div class="dot text-center text-danger font-italic font-extrabold"></div>
      </div>
    </div>
  </div>
</template>
<script>
import User from "../../apis/User";

export default {
  data() {
    return {
      formData: {
        email: "",
        password: "",
      },
      loading: false,
      errors: {},
    };
  },
  methods: {
  login() {
    this.loading = true;  
    User.login(this.formData)
    .then((response)=>{ 
      this.errors = {};
      localStorage.setItem('token', response.data.token);
      localStorage.setItem('isLoggedIn', true);
      this.$store.dispatch("login");
      this.$router.push("/");
    }).catch((errors) => {
          this.errors = {};
          console.log(errors.response);
          const err = Object.keys(errors.response.data.errors);
          err.map((key) => {
            this.errors[key] = errors.response.data.errors[key][0];
          });
          console.log(this.errors);
        })
        .finally(() => (this.loading = false));
    }
  },
  
};
</script>
