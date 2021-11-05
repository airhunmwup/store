<template>
  <div class="container">
    <!-- main content -->
    <div class="card">
      <div class="card-header">
        <p class="h5 text-dark">Order Details</p>
      </div>
      <div class="card-body text-sm text-dark">
        <p class="">Order number: <span class="text-sm">#{{order.orderid}}</span></p>
        <p class="">
          Order date: <span class="text-sm">{{order.created_at.substring(0,10)}}</span>
        </p>
      </div>
      <!--for webview -->
      <div class="card-footer text-xs d-xs-none">
        <div class="row">
          <div class="col-4">
            <p class="h5 text-dark">Product</p>
          </div>
          
          <div class="col-2 text-center">
            <p class="">Qty</p>
          </div>
          <div class="col-1">
            <p class="text-right">Each</p>
          </div>
          <div class="col-1">
            <p class="text-right">Total</p>
          </div>
        </div>
      </div>
      <div class="card-body text-xs text-dark d-xs-none" v-for="(orders,index) in order.order_items" :key="index">
        <div class="row">
          <div class="col-4">
            <div class="row">
              <div class="col-6">
                <img v-bind:src="API_BASE_URL + orders.product_image" class="" alt="Product" style="height:50px;"/>
              </div>
              <div class="col-6">
                <p class="text-dark">{{orders.name}}</p>
                
              </div>
            </div>
          </div>
          
          <div class="col-2 text-center">
            <p class="">{{orders.quantity}}</p>
          </div>
          <div class="col-1">
            <p class="text-right">£{{orders.price}}</p>
          </div>
          <div class="col-1 t">
            <p class="text-right">£{{ orders.quantity * orders.price }}</p>
          </div>
        </div>
      </div>
      <!--sub total -->
      <!--end webview -->
      <!--for mobileview -->
      <div class="card-footer d-md-none d-lg-none">
        <div class="row">
          <div class="col-sm">
            <p class="h5 text-dark">Product</p>
          </div>
        </div>
      </div>
      <div class="card-body text-xs text-dark d-md-none d-lg-none" v-for="(orders,index) in order.order_items" :key="index">
        <div class="row">
          <div class="col-6 col-sm-6">
                <img v-bind:src="API_BASE_URL + orders.product_image" class="" alt="Product" style="height:100px;"/>
          </div>
          <div class="col-6 col-sm-6">
            <p class="h6 text-dark">{{orders.name}}</p>
            <p class="">Qty: {{orders.quantity}}</p>
            <p class="">Each: £{{orders.price }}</p>
            <p class="">Total:<span class="text-right"> £{{ orders.quantity * orders.price }}</span></p>
          </div>
        </div>
      </div>
      <div class="card-body border text-sm text-dark">
        <div class="row">
          <div class="col text-left font-weight-bold">
            <p class="">Order Subtotal:</p> 
            <p class="">Tax:</p>
            <p class="">Shipping:</p>
            <p class="">Order Total:</p>
          </div>
          <div class="col">
            <p class="">£{{order.total}}</p>
            <p class="">£</p>
            <p class="">£</p>
            <p class="text-danger">£{{order.total}}</p>
          </div>
        </div>
      </div>
      <!--for mobileview -->
      <div class="card-footer">
        <p class="h5 text-dark">Shipping information</p>
      </div>
      <div class="card-body text-sm text-dark">
        <div class="row">
          <div class="col-sm">
            <p class="font-weight-bold">Shipping information:</p>
            <p class="">{{order.firstname}} {{order.lastname}}</p>
            <p class="">{{order.address_line1}}</p>
            <p class="">{{order.town_city}}</p>
            <p class="">{{order.country}} , {{order.postal_code}}</p>
          </div>
          <div class="col-sm">
            <p class="font-weight-bold">Shipping method:</p>
            <p class="">
              Status:<span class="alert-danger m-2 rounded">
                {{order.payment_status}}</span
              >
            </p>
            <div class="form-group m-2">
              <label class="font-weight-bold">Tracking ID:</label>
              <input
                type="text"
                class="form-control col-lg-6 col-12"
                placeholder=""
                v-model="formData.tracking_id"
              />
            </div>
            <div class="form-group m-2">
              <label class="font-weight-bold">Shipping agent:</label>
              <select class="form-control col-lg-6 col-12" v-model="shipping_agent">
                <option :value="{url: 'https://www.royalmail.com/track-your-item', name: 'Royal mail'}">
                  Royal mail
                </option>
                <option :value="{url: 'https://www.dhl.com/us-en/home/tracking.html', name: 'DHL'}">
                  DHL
                </option>
                <option  :value="{url: 'https://www.myhermes.co.uk/track#/', name: 'Hermes'}">
                  Hermes
                </option>
                <option  :value="{url: 'https://www.parcelforce.com/track-trace', name: 'Parcel Force'}">
                  Parcel Force
                </option>
              </select>
            </div>
            <div class="row">
              <div class="mb-2 col-sm">
                <button type="button" class="btn m-1 btn-light btn-sm border">
                  Cancel
                </button>
                <button type="button" class="btn m-1 btn-success btn-sm border" @click="processOrder(order.orderid)">
                  Process
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body text-sm text-dark"></div>
    </div>
  </div>
</template>


<script>
import Constants from "../../common/constants";
import User from "../../apis/User";
export default {
  data() {
    return {
      data: '',
      API_BASE_URL: Constants.API_BASE_URL,
      order: this.$route.params.order,
      formData: {
        tracking_id : '',         
      },
      shipping_agent : '',
    }
  },
  methods: {
    async products(){
      let objkeys = Object.keys(this.$route.params.orderdetails);
      objkeys.map((key) => {
        this.data = this.$route.params.orderdetails[key];
      });
      console.log(this.data);
    },
    getItems(){
      console.log(this.order);  
    },
    processOrder(orderid){
        this.formData.orderid = orderid;
        this.formData.shipping_agent_name = this.shipping_agent.name;
        this.formData.shipping_agent_url = this.shipping_agent.url;
        console.log(this.formData);
        if (this.formData.tracking_id !== ""){
        User.processOrder(this.formData,{             
          }).then(res =>{
              console.log(res);    
              this.$router.push("/Orders");
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
  },
  mounted() {
    //this.products();
  },
  beforeMount() {
    this.getItems();
  },
}
</script>