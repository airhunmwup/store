<template>
  <!-- main content -->
  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left"></div>
    </div>
    <div class="row justify-center">
      <!--recently viewed-->
      <div class="row col-sm-10 p-3 col-lg-6 col-md-6">
        <span class="text text-dark h4 font-weight-bold font-weight-normal">
          Change Your Name
        </span>
        <div class="card border">
          <p class="text-dark p-2">
            If you want to change the name associated with your REJEE Stores
            account, you may do so below. Make sure that you click the
            <b>Save Changes</b> button when you have finished.
          </p>
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <div class="form-group mx-sm-3 mb-2 pt-3">
                  <p class="font-weight-bold text-dark">First name:
                    <span style="color: red; font-size: 12px;" v-text="errors.first_name"></span>
                  </p>
                  <input
                    type="text"
                    class="form-control border-dark"
                    v-model="data.first_name"
                  />
                </div>
                <div class="form-group mx-sm-3 mb-3 pt-2">
                  <p class="font-weight-bold text-dark">Last name:
                    <span style="color: red; font-size: 12px;" v-text="errors.last_name"></span>
                  </p>
                  <input
                    type="text"
                    class="form-control border-dark"
                    v-model="data.last_name"
                  />
                </div>

                <p class="mx-sm-3 mb-2">
                  <a
                    class=""
                    data-toggle="collapse"
                    data-target=".navbar-collapse"
                    ><button
                      type="button"
                      class="btn border-dark btn-sm btn-warning"
                      @click="changeName"
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
      data: {
        first_name: '',
        last_name: '',
        id: '',
      },
      errors: '',
    }
  },
  methods:{
    changeName(){
      this.errors = "";
      this.data.id = this.$store.state.currentUser.id;
      User.changename(this.data).then(res => {
        console.log(res.data);
        this.$store.dispatch('userloginInfo');
        this.$router.push('/buyersigninsecsetting');
      }).catch((errors) => {
        this.errors = {};
          const err = Object.keys(errors.response.data.errors);
          err.map( keys => {
            this.errors[keys] = errors.response.data.errors[keys][0];
          });
          console.log(this.errors);
      });
    }
  }
}
</script>