<template>
    <!-- main content -->
    <div class="">
    <div class="card pb-4">
      <div class="card-header">
        <div class="row">
          <div class="mb-2 col-8">
        <p class="h5 text-dark">Order Details</p>
          </div>
          <div class="mb-2 col-sm">
            <button type="button" class="btn m-1 underline btn-light btn-sm ">
              Problem with Order?
            </button>
            <button type="button" class="btn m-1 btn-sm border">
              <i class="zmdi zmdi-print"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="card-body text-sm text-dark">
        <p class="">Order number: <span class="text-sm">#{{order.orderid}}</span></p>
        <p class="">
          Order date: <span class="text-sm">{{order['created_at'].substring(0,10)}}</span>
        </p>
      </div>
      <div class="card-footer">
        <p class="h5 text-dark">Shipping information</p>
      </div>
      <div class="card-body text-sm text-dark">
        <div class="row">
          <div class="col-sm">
            <p class="font-weight-bold">Shipping information:</p>
            <p class="">{{order['firstname']}} {{order['lastname']}}</p>
            <p class="">{{order['firstname']}}</p>
            <p class="">{{order['town_city']}}</p>
            <p class="">{{order['country']}}, {{order['postal_code']}}</p>
          </div>
          <div class="col-sm">
            <p class="font-weight-bold">Shipping method:</p>
            <p class="">
              Shipping rate table: Economy Service (2 to 9 business days)
            </p>
            <p class="">
              Status:<span class="alert-info m-2 rounded">
                {{order['shipment_status']}}</span
              >
            </p>
            <div class="form-group m-2">
              <p class="font-weight-bold">Tracking ID: {{order['tracking_id']}}</p>
              <p>
                <a
                  :href="order['shipping_agent_url']"
                  class="text-primary underline"
                  >track your shipment</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--for webview -->
      <div class="card-footer text-xs d-xs-none">
        <div class="row">
          <div class="col-6">
            <p class="h5 text-dark">Product</p>
          </div>
          <div class="col-2">
            <p class="">Requested shipping date:</p>
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
      <div class="card-body text-xs text-dark d-xs-none" v-for="items in order.order_items" :key="items.id">
        <div class="row">
          <div class="col-6">
            <div class="row">
              <div class="col-4">
                <img v-bind:src="API_BASE_URL + items.product_image" class="card-img-top" alt="Product" style="width: 80%;" />
              </div>
              <div class="col-8">
                <p class="text-dark font-weight-bold pt-3">{{items.name}}</p>
                
              </div>
            </div>
          </div>
          <div class="col-2">
            <p class="">{{items.created_at.substring(0,10)}}</p>
          </div>
          
          <div class="col-2 text-center">
            <p class="">{{items.quantity}}</p>
          </div>
          <div class="col-1">
            <p class="text-right">£{{items.price}}</p>
          </div>
          <div class="col-1 t">
            <p class="text-right">£{{items.quantity * items.price}}</p>
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
      <div class="card-body text-xs text-dark d-md-none d-lg-none" v-for="items in order.order_items" :key="items.id">
        <div class="row">
          <div class="col-6 col-sm-6">
            <img v-bind:src="API_BASE_URL + items.product_image" class="card-img-top" alt="Product" style="height:80px; width: 100%;" />
          </div>
          <div class="col-6 col-sm-6">
            <p class="h6 text-dark">{{items.name}}</p>
            <p class="">Requested shipping date: {{items.created_at.substring(0,10)}}</p>
            <p class="">Qty: {{items.quantity}}</p>
            <p class="">Each: £{{items.price}}</p>
            <p class="">Total:<span class="text-right"> £{{items.quantity * items.price}}</span></p>
          </div>
        </div>
      </div>
      
      <div class="card-body border text-sm text-dark">
        <div class="row">
          <div class="col-6 col-md-2 text-left font-weight-bold">
            <p class="">Order Subtotal:</p>
            <p class="">Tax:</p>
            <p class="">Shipping:</p>
            <p class="">Order Total:</p>
          </div>
          <div class="col-6 col-md-10">
              <p class="">£{{order.total}}</p>
            <p class="">£</p>
            <p class="">£{{order.shipping}}</p>
            <p class="text-danger">£{{+order.total + +order.shipping}}</p>
          </div>
        </div>
      </div>
      <!--for mobileview -->
      <div class="card-footer">
        <p class="h5 text-dark">Billing information</p>
      </div>
      <div class="card-body text-sm text-dark">
        <div class="row">
          <div class="mb-2 col-sm">
            <p class="font-weight-bold">Billing information:</p>
            <p class="">{{order['firstname']}} {{order['lastname']}}</p>
            <p class="">{{order['firstname']}}</p>
            <p class="">{{order['town_city']}}</p>
            <p class="">{{order['country']}}, {{order['postal_code']}}</p>
        <p class="pt-2">
          <span class="text-dark font-weight-bold">Payment status: </span><span class="text-sm">{{order.payment_status}}</span>
        </p>
          </div>
          <!-- <div class="mb-2 col-sm">
            <p class="font-weight-bold">Payment method: card</p>
            <p class="">******7645</p>
            <p class="">23/20</p>
          </div> -->
        </div>
      </div>
      <div class="card-body text-sm text-dark">
      </div>
    </div>
    </div>
</template>
<script>
import { mapState } from 'vuex';
import User from "../../apis/User";
import Constants from "../../common/constants";
export default {
  data () {
    return {
      //
      order: '',
      orderid: this.$route.params.orderid,
      data: this.$route.params.data,
      order_info: this.$route.params.order_info,
      myproducts: this.$route.params.myproducts,
      id: this.$route.params.id,
      orders: [],
      API_BASE_URL: Constants.API_BASE_URL,
    }
  },
  methods: {
    async products(){
      let objkeys = Object.keys(this.$route.params.productHistory);
      objkeys.map((key) => {
        if(this.$route.params.id == key){
          for(let i=0;i<this.$route.params.productHistory[key].length;i++){
            if(this.$route.params.productHistory[key][i] == this.$route.params.data[i].id){
              this.orders.push(this.$route.params.data[i]);
            }
          }
        }
      });
      console.log(this.$route.params.productHistory[7]);
      console.log(this.data[0].id);
    },
    getorder(){
        console.log(this.orderid);
        User.getOrder(this.orderid).then(res => {
        this.order = res.data[0];
        console.log(res);
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
  async mounted () {
    //this.products();
    this.getorder();
  }
}
</script>