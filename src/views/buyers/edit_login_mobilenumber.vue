<template>
  <!-- main content -->
  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row justify-center">

<!--recently viewed-->
                <div class="row col-sm-12 p-3 col-lg-6 col-md-6">
                  <span class="text text-dark h4 font-weight-bold font-weight-normal">
                  Change Mobile Phone Number
                  </span>
                  <div class="card border">
  <div class="card-body">
    <div class="row">
  <div class="col-8">
      <p class="font-weight-bold text-dark">Old mobile phone number:</p>
      <p class="text-dark">{{mobile}}</p>
  </div>
</div>
    <div class="row">
  <div class="col-12">
  <div class="form-group row mb-2 pt-3">
      <p class="font-weight-bold text-dark mb-2">Mobile number:</p>
  <div class="col-2">
    <input type="text" class="form-control form-control-sm border-dark" placeholder="" v-model="formData.code">
  </div>
  <div class="col-6">
    <input type="number" class="form-control form-control-sm border-dark" placeholder="" v-model="formData.mobile">
  </div>
    
  </div>

      <p class="text-xs mb-2 text-dark">By enrolling your mobile phone number, you consent to receiving automated security notifications via text message from REJEE Stores. You can opt out by removing your mobile number on the Login & Security page located in Your Account settings. Message and data rates may apply.</p>

                <p class="mb-2 mt-2">
                    <button @click="saveMobile" type="button" class="form-control btn border-dark btn-sm btn-warning">
                      Save
                    </button>               
                </p>
                
  </div>
</div>
  </div>
</div>
                </div>


          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>
<script>
import { mapState } from 'vuex';
import User from "../../apis/User";
export default {
  data() {
    return {
      formData: {
        code : '+44',
        mobile : '',
      }, 
      mobile : '',
    }
  },
  methods: {
    saveMobile(){
        if (this.formData.mobile !==""){
        console.log(this.formData);
          User.saveMobile(this.formData,{             
          }).then(res =>{                          
              console.log(res); 
              this.$router.push("/buyersigninsecsetting");
          }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
             console.log(error.response.data.message);
        }
      });
                    }
  },  
   getMobile(){

          User.getMobile(this.formData,{             
          }).then(res =>{                          
              console.log(res); 
              this.formData.mobile = res.data.phonenumber;
              this.mobile = res.data.phonenumber;
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


  },
 

  beforeMount() {
     this.getMobile();
  },
}
</script>
        