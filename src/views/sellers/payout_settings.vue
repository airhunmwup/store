<template>
  <!-- main content -->
  <div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb text-xs">
        <li class="breadcrumb-item text-primary"> <router-link
                            to="/account"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >
          Your Account</router-link>
        </li>
        <li class="breadcrumb-item text-primary" aria-current="page"> <router-link
                            to="/Overview"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >
          Sellers hub</router-link>
        </li>
    <li class="breadcrumb-item active" aria-current="page">Your Payout</li>
  </ol>
</nav>

        <div class="justify-center row pt-4 pb-4">
            

          <div class="col-sm-12 col-lg-12 col-md-12 product-container mb-4">

  <div class="row">
    <div class="col">
                  <p class="h4 text-dark text-left">Your payout manager</p>
                  <p class="text-dark text-sm text-left">Your default preferences are used for receiving payments and will be credited after orders has been processed.</p>
    </div>
    <div class="col-sm">
    </div>
  </div>


    <p class="p-3"></p>
  <div class="row">
    <div class="col-8 col-xs-12">
<div class="m-1">
    <div v-if="payout" class="row">
                  <p class="text-dark text-sm text-left">Add Bank details</p>
              <div class="p-2 col-4 col-xs-12">
                <div class="card border-dashed border-secondary">
            <router-link
              class=""
              to="/addpayout"
              data-toggle="collapse"
              data-target=".navbar-collapse"
              title="Add bank account"
            >
                  <div class="m-2 card-body">
                    <p class="text-center text-grey h1">
                      <i class="fa fa-plus"></i>
                    </p>
                  </div>
            </router-link>
                </div>
              </div>
    </div>
    <div v-if="payoutData" class="row">
              <div class="p-2 col-6 col-xs-12">
                <div class="card backdrop-brightness-100 shadow text-sm">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-4 border-r-2">
                    <p class="text-grey h1 m-3">
                      <i class="fa fa-university fa-lg"></i>
                    </p>
                        </div>
                        <div class="col-8">
                    <p class="text-grey">
                      {{payoutData.bank_name}}
                    </p>
                    <p class="text-grey">
                      {{payoutData.account_number}}
                    </p>
                    <p class="text-grey">
                      {{payoutData.sort_code}}
                    </p>
                    <p>
                        <span class="alert-xs text-xs rounded-3 p-1 mt-4 alert-success" style="height: 2rem;" role="alert">
                          approved
                        </span>
                    </p>
                        </div>
                        
                      </div>
                  </div>
                  <div class="card">
                    <span class="p-2"><button type="button" class="text-xs underline border btn btn-sm btn-warning">Remove</button></span>
                  </div>
                </div>
              </div>
    </div>
</div>
    </div>
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
      payout: "",
      payoutData: "",
      errors: {

      }
    }
  },
  methods: {
    checkPayout(){         
          User.checkPayout(this.formData,{             
          }).then(res =>{
              if (res.data.length > 0){
              this.payoutData = res.data[0];
              console.log(this.payoutData);
        }else{
            this.payout = "1"; 
            
        }
            
            
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
  beforeMount() {
    this.checkPayout();
  },
  mounted() {   
    
    
  },
  computed: {

  }
}
</script>
        