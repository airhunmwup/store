<template>
  <!-- main content -->
  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left"></div>
    </div>
    <div class="row justify-center">
      <!--recently viewed-->
      <div class="row col-sm-12 p-3 col-lg-6 col-md-6">
        <span class="text text-dark h4 font-weight-bold font-weight-normal">
          Change Password
        </span>
        <div class="card border">
          <p class="text-dark p-2">
            Use the form below to change the password for your REJEE Stores
            account
          </p>
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <div class="form-group mx-sm-3 mb-2 pt-3">
                  <p class="font-weight-bold text-dark">Current password:
                    <span style="color: red; font-size: 12px;" v-text="errors.currentpassword"></span>
                    <span style="color: red; font-size: 12px;" v-text="errors.message"></span>
                  </p>
                  <input
                    type="password"
                    class="form-control border-dark"
                    placeholder=""
                    v-model="data.currentpassword"
                  />
                </div>
                <div class="form-group mx-sm-3 mb-2 pt-3">
                  <p class="font-weight-bold text-dark">New password:
                    <span style="color: red; font-size: 12px;" v-text="errors.password_confirmation"></span>
                  </p>
                  <input
                    type="password"
                    class="form-control border-dark"
                    placeholder=""
                    v-model="data.password_confirmation"
                  />
                </div>
                <div class="form-group mx-sm-3 mb-2 pt-3">
                  <p class="font-weight-bold text-dark">
                    Re-enter new password:
                    <span style="color: red; font-size: 12px;" v-text="errors.password"></span>
                  </p>
                  <input
                    type="password"
                    class="form-control border-dark"
                    placeholder=""
                    v-model="data.password"
                  />
                </div>

                <p class="mx-sm-3 mt-4 mb-2">
                  <a
                    class=""
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    @click="changePassword"
                    ><button
                      type="button"
                      class="btn border-dark btn-sm btn-warning"
                    >
                      Save changes
                    </button>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>

    <hr />
  </div>
</template>
<script>
import User from "../../../src/apis/User";
export default {
  data(){
    return{
      data:{
        currentpassword: '',
        password: '',
        password_confirmation: '',
        id: ''
      },
      errors: ""
    }
  },
  methods:{
    changePassword(){
      this.errors ="";
      this.data.id = this.$store.state.currentUser.id;
      console.log(this.data);
      User.changepassword(this.data)
      .then(res => {
        console.log(res);
        this.$store.dispatch('userloginInfo');
        this.$router.push('/buyersigninsecsetting');
      })
      .catch(error => {
        this.errors = {};
        const err = Object.keys(error.response.data.errors);
        err.map(keys => {
        this.errors[keys] = error.response.data.errors[keys][0];
        });
        
      });
    }
  }
}
</script>