<template>
  <!-- main content -->

  <!-- main content -->

  <div class="text-sm">
    <p class="pb-4 pr-4 text-dark text-right">
      Already a member?

      <router-link
        to="/Login"
        data-toggle="collapse"
        data-target=".navbar-collapse"
        class="text-primary underline font-weight-bold"
        title="sign in"
        >Sign in</router-link
      >
    </p>

    <div class="container pb-5">
      <div class="row align-content-center">
        <div class="pb-4 text-center">
          <p class="h1 text-dark">Create an account</p>
        </div>

        <p class="pb-4 text-dark text-center">
          Are you a business or nonprofit? <br />

          <router-link
            to="/registertosell"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="text-primary underline font-weight-bold"
            title="Create Business Account"
            >Create sellers account</router-link
          >
        </p>

        <div class="row justify-center text-sm" >

<!--recently viewed-->
                <div class="col-sm-12 col-lg-4 col-md-4">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First name</label>
                      <input
                        class="form-control text-sm"
                        name="First_Name"
                        type="text"
                        value=""
                        placeholder="First Name"
                        v-model="formData.first_name"
                      />
    <div id="emailHelp" class="form-text"><p class="text-danger text-left" v-text="errors.first_name"></p></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last name</label>
                      <input
                        class="form-control text-sm"
                        name="Last_name"
                        type="text"
                        value=""
                        placeholder="Last Name"
                        v-model="formData.last_name"
                      />
    <div id="emailHelp" class="form-text"><p class="text-danger text-left" v-text="errors.last_name"></p></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input
                        class="form-control text-sm"
                        name="Email"
                        type="email"
                        value=""
                        placeholder="Email"
                        v-model="formData.email"
                      />
    <div id="emailHelp" class="form-text"><p class="text-danger text-left" v-text="errors.email"></p></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input
                        class="form-control text-sm"
                        name="Pass_word"
                        type="password"
                        value=""
                        placeholder="Password"
                        v-model="formData.password"
                      />
    <div id="emailHelp" class="form-text"><p class="text-danger text-left" v-text="errors.password"></p></div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label text-xs" for="exampleCheck1">By Creating an account, you agree to our

                    <router-link
                      to="/User Agreement"
                      data-toggle="collapse"
                      data-target=".navbar-collapse"
                      class="text-primary"
                      title="User Agreement"
                      >User Agreement</router-link
                    >

                    and acknowledge reading our

                    <router-link
                      to="/User Privacy"
                      data-toggle="collapse"
                      data-target=".navbar-collapse"
                      class="text-primary"
                      title="User Privacy"
                      >User Privacy Notice</router-link
                    ></label>
  </div><div class="d-grid gap-2">
                    <button
                    class="btn btn-warning bg-gradient border"
                      @click='userRegister'>
                      Create account
                    </button>
</div>
</form>
                </div>

      <!-- end col-md-9-1 -->
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

export default {
  data() {
    return {
      formData: {
        first_name: "",
        last_name: "",
        email: "",
        password: "",
        user_type: "buyer"
      },
      errors: {},
      loading: false
    };
  },
  methods: {
    userRegister() {
      this.loading = true;
      this.$http
      .post('http://localhost:8000/api/register', this.formData).then((response) =>{
          console.log(response.data);
          this.formData.first_name = this.formData.last_name = this.formData.email = this.formData.password = ''
          this.errors = {}
          this.$router.push('/login');
      }).catch((errors) => {
          this.errors = {};
          const err = Object.keys(errors.response.data.errors);
          err.forEach((key)=>{
            var strError = errors.response.data.errors[key][0];
            this.errors[key] = strError;
          })
          
      }).finally(() => this.loading = false);
    },
  }
};
</script>