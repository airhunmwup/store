<template>
  <!-- main content -->

  <!-- main content -->

  <div class="">
    <div class="content pt-5 pb-5">
      <div class="row pt-2">
        <div class="container align-content-center">
          <div class="register-form text-center">
            <div class="pb-4">
              <p class="h1 text-dark">Hello</p>

              <p class="pb-4 text-dark">
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
              <p class="pb-4 text-danger" v-text="errors.message"></p>
            </div>

            <div>
              <div class="container">
                <div class="form-group p-2">
                  <input
                    class="
                      col-lg-6 col-md-6 col-sm-6
                      border-b border-dark border-t-0 border-l-0 border-r-0
                    "
                    name="email"
                    type="email"
                    placeholder=" Email"
                    v-model="formData.email"
                  />
                  <p class="text-danger" v-text="errors.email"></p>
                </div>

                <div class="form-group p-2">
                  <input
                    class="
                      col-lg-6 col-md-6 col-sm-6
                      border-b border-dark border-t-0 border-l-0 border-r-0
                      js-visible-password
                    "
                    name="password"
                    type="password"
                    placeholder="Password"
                    v-model="formData.password"
                  />

                  <p class="text-danger" v-text="errors.password"></p>
                </div>

                <router-link
                  to="/passwordrecovery"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  class="text-primary underline font-weight-bold"
                  title="Forget your password?"
                >
                  Forgot your password?
                </router-link>

                <div class="clearfix p-2">
                  <button
                    class="col-lg-6 col-md-6 col-sm-6 btn text-light"
                    style="background-color: rgb(209, 209, 208)"
                    @click="login"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr />

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
