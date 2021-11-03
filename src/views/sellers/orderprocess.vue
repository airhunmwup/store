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
                <img v-bind:src="API_BASE_URL + orders.product_image" class="" alt="Product" style="height:100px;/>
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
            <p class="">Full name</p>
            <p class="">Address line 1</p>
            <p class="">city/town</p>
            <p class="">Country , postcode</p>
          </div>
          <div class="col-sm">
            <p class="font-weight-bold">Shipping method:</p>
            <p class="">Flat: Same cost to all buyers:</p>
            <p class="">
              Shipping rate table: Economy Service (2 to 9 business days)
            </p>
            <p class="">Price: £5.23</p>
            <p class="">
              Status:<span class="alert-danger m-2 rounded">
                Pending delivery</span
              >
            </p>
            <div class="form-group m-2">
              <label class="font-weight-bold">Tracking ID:</label>
              <input
                type="text"
                class="form-control col-lg-6 col-12"
                placeholder=""
              />
            </div>
            <div class="form-group m-2">
              <label class="font-weight-bold">Shipping agent:</label>
              <select class="form-control col-lg-6 col-12">
                <option value="https://www.royalmail.com/track-your-item">
                  Royal mail
                </option>
                <option value="https://www.dhl.com/us-en/home/tracking.html">
                  DHL
                </option>
                <option value="https://www.myhermes.co.uk/track#/">
                  Hermes
                </option>
                <option value="https://www.parcelforce.com/track-trace">
                  Parcel Force
                </option>
              </select>
            </div>
            <div class="row">
              <div class="mb-2 col-sm">
                <button type="button" class="btn m-1 btn-light btn-sm border">
                  Cancel
                </button>
                <button type="button" class="btn m-1 btn-success btn-sm border">
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
export default {
  data() {
    return {
      data: '',
      API_BASE_URL: Constants.API_BASE_URL,
      order: this.$route.params.order,
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
  },
  mounted() {
    //this.products();
  },
  beforeMount() {
    this.getItems();
  },
}
</script>