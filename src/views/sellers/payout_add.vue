<template>
  <!-- main content -->
  <div class="justify-content-center" >
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row justify-center text-sm" >

<!--recently viewed-->
                <div class="row col-sm-12 p-3 col-lg-6 col-md-6">
                  <span class="text text-dark mt-4 h4 font-weight-bold font-weight-normal">
                  Where should we send your payouts?
                  </span>
                  <div class="p-4">
                    <div class="mb-3">
                    <p class="text-dark font-weight-bold form-label">Currency</p>
                    <input type="text" class="col-12 col-lg-6 form-control" placeholder="GBP" disabled>
                    </div>
                    <div class="mb-3">
                    <p class="text-dark font-weight-bold form-label">Account name</p>
                    <input type="text" class="col-12 col-lg-6 form-control" v-model="formData.account_name" placeholder="">
                    </div>
                    <div class="mb-3">
                    <p class="text-dark font-weight-bold form-label">Sort code</p>
                    <input type="text" class="col-4 form-control" placeholder="00-00-00" v-model="formData.sort_code">
                    </div>
                    <div class="mb-3">
                    <p class="text-dark font-weight-bold form-label">Account Number</p>
                    <input type="text" class="col-12 col-lg-6  form-control" placeholder="0123456789" v-model="formData.account_number">
                    </div>
                      <div class="mb-3">
                    <p class="text-dark font-weight-bold form-label">Bank Name</p>
                    <input type="text" class="col-12 col-lg-6  form-control" placeholder="" v-model="formData.bank_name">
                    </div>
                    <button type="button" @click="savePayout" class="btn font-weight-bold btn-warning  border">Submit</button>
                </div>
                </div>


          <!-- end col-md-9-1 -->
        </div>

  </div>
</template>
<script>
import User from '../../apis/User';
export default {
  data() {
    return {
      formData: {
        currency: "GBP",
        account_name: "",
        bank_name: "",
        sort_code: "",
        account_number : "",
        user_id : this.$store.state.currentUser.id,
      },
      errors: {

      }
    }
  },
  methods: {
    savePayout(){         
          User.savePayout(this.formData,{             
          }).then(res =>{
            console.log(res.data);
            this.$router.push("/managepayout");
          }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
             console.log(error.response.data.message);
        }
      });
  },
    errorStyle(err){
      if(err){
        return {
          color: 'red',
          fontSize: '12px'
        }
      }
    }
  },
  computed: {
    
  }
}
</script>
        