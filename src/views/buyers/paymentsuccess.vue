<template>
  <!-- main content -->
  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row justify-center">

<!--recently viewed-->
                <div class="row col-sm-12 col-xs-12 p-3 col-lg-6 col-md-6">
                    
                  
                      <div class="content">

                        <div class="tab-content">
                          <div
                            class="tab-pane fade in active show justify-content-center  col-sm-12 col-xs-12 p-3 col-lg-12 col-md-12"
                            id="checkout-guest-form"
                            role="tabpanel"
                          >
                            <div class="justify-center p-4">
                            <div class="p-4">
              <p class="text-center m-4 text-dark font-weight-bold h5 text-lg">Payment Successful</p>
                                <div class="mx-auto" style="width: 200px;">
                                <img src="img/myaccount/paymentsuccess.png"  style="height: 40%;" class="p-4"/>
                                </div>


              <p v-if="this.orderid" class="text-center m-4 text-dark font-weight-bold h6 text-md">Your Order has been placed</p>
              <p v-else class="text-center m-4 text-dark font-weight-bold h6 text-md">You have been subscribed</p>
                            </div>
                            </div>
                              <div>
<router-link
            v-if="this.orderid"
            to="/purchasehistory"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            >
<button type="button" class="btn btn-link">View Orders</button>
</router-link>
                            
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
import User from "../../apis/User";
export default {
  data() {
    return {
      orderid: this.$route.params.orderid,
    };
  },
  async mounted() {
     
  },
  methods: {

    
  },
  computed: {

  },

};
</script>        