<template>
    <!-- main content -->
    
    <!-- main content -->
    <div class="text-sm">
                                    <p class="pb-4 pr-4 text-dark text-right">Already a member? <router-link
                                to="/Login"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-primary underline font-weight-bold"
                                title="sign in"
                              >Sign in</router-link></p>
        
                    <div class="content pb-5">
                        <div class="row pt-2">
                                
                            <div class="container align-content-center">
                                <div class="register-form">
                                    <div class="pb-4 text-center">
                                    <p class="h3 text-dark">Create an account</p>
                                    <p class="text-info p-2 font-weight-bold">Start Selling on REJEE Stores.</p>
                                    </div>
        <div class="row justify-center text-sm" >

<!--recently viewed-->
                <div class="row col-sm-12 col-lg-4 col-md-4"><form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Business name</label>
    <input name="First_Name" type="text" value="" placeholder="First Name" v-model="formData.first_name" class="form-control">
    <div class="form-text"><p class="text-danger text-left" v-text="errors.first_name"></p></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input  name="Email" type="email" value="" placeholder="Email" v-model="formData.email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="form-text"><p class="text-danger text-left" v-text="errors.email"></p></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Pass_word" value="" placeholder="Password" v-model="formData.password">
    <div class="form-text"><p class="text-danger text-left" v-text="errors.password"></p></div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-xs" for="exampleCheck1">By Creating an account, you agree to our 
                              <router-link
                                to="/User Agreement"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-primary"
                                title="User Agreement"
                              >User Agreement</router-link> and acknowledge reading our 
                              <router-link
                                to="/User Privacy"
                                data-toggle="collapse"
                                data-target=".navbar-collapse"
                                class="text-primary"
                                title="User Privacy"
                              >User Privacy Notice</router-link></label>
  </div><div class="d-grid gap-2">
  <button class="btn btn-warning bg-gradient border" type="button" @click='userRegister'>Create account</button>
</div>
</form>
      </div>

      <!-- end col-md-9-1 -->
    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                        <hr>
        <div class="page-loading">
            <div class="dot text-center text-danger font-italic font-extrabold"></div>
            <div class="dot text-center text-danger font-italic font-extrabold"></div>
            <div class="dot text-center text-danger font-italic font-extrabold"></div>
        </div>
    </div>


</template>

<script>

export default {
  data() {
    return {
      formData: {
        first_name: "",
        last_name: "Store",
        email: "",
        password: "",
        user_type: "seller"
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
