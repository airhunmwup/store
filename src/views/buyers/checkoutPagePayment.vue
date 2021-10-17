<template>
  <div class="container">
    <p class="h6 p-3"><span class="text-primary"></span> <span class=" "></span>
</p>
    <!-- main content -->
    <!-- breadcrumb -->

    <!-- main -->
    <div class="row pt-4 pb-4 text-sm" style="height: 30rem;">
      <div class="">
          <p class="text-dark h4">Order ID: {{ order.orderid }}</p><hr>
          <div class="row">
          <div class="col-md-6">
              <p class="h5"><b>{{ order.firstname }} {{ order.lastname }}</b></p>
              <p  class="">{{ order.email }}</p>
              <p  class="">{{ order.phone }}</p><br>
              <p class="">{{ order.address_line1 }}</p>
              <p class="">{{ order.address_line2 }}</p>
              <p class="">{{ order.town_city }}</p>
              <p class="">{{ order.postal_code }}</p>
              <p class="">{{ order.country }}</p>
          </div>
          <div class="col-md-6">
              <p class="h5"><b>Status</b></p>
              <p>Payment status: {{ order.payment_status }}</p>
              <p>Shipment status: {{ order.shipment_status }}</p>
          </div>
          </div>
          <div class="row">
              <table class="table table-bordered order-list">
            <thead>
            <tr>           
                <th width="20%">Item(s)</th>
                <th width="10%">Quantity</th>
                <th width="10%">Price</th>
                <th width="10%">Total (£)</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="item in order.order_items" v-bind:key="item.id">
                    <td>{{ item.name }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item.price }}</td>
                    <td>{{ item.quantity * item.price }}</td>
                </tr>
                <tr class="ite_tt">
                    <td colspan="3" align="right" style="text-align:right;"><b>Shipping</b></td>
                    <td class="items_total" align="right">{{ order.shipping }}</td>
                </tr>
                <tr class="ite_tt">
                    <td colspan="3" align="right" style="text-align:right;"><b>Total</b></td>
                    <td class="items_total" align="right">{{ order.total }}</td>
                </tr>
            </tbody>
              </table>
          </div>
        <p class="text-dark h4">Select a payment method</p>
        <hr />
        <div class="card-body">
          <div class="row">
              <p class="text-dark h6">Credit or debit cards</p>
              <p class="text-dark">
                REJEE Stores accepts major credit and debit cards.
              </p>
            <div class="col-6 m-3">

        <p class="card bg-light border">
          <router-link
            :to="{ name: 'CheckOut', params: { orderid: order.orderid, order_total: order.total}}" 
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
            ><button
              type="button"
              class="btn border btn-sm btn-warning btn-block"
            >
              Continue
            </button>
          </router-link>
        </p>

            </div>

          </div>
        </div>

        <hr />
        <div class="card-body pb-4">
          <div class="row">
            <div class="col-8">
              <p class="text-dark h6">Gift Cards & Promotional Codes</p><p>
  <a class="text-primary text-sm underline" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    
                Enter a gift card, gift voucher or promotional code
  </a>
</p>
<div class="collapse" id="collapseExample">
  <form class="form-inline pt-4">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Enter Code</label>
    <input type="text" class="form-control-sm border shadow-inner" id="inputPassword2" placeholder="Enter Code">
  </div>
  <button type="submit" class="btn-light border btn-sm mb-2">Apply</button>
</form>
</div>

              <div class="col-8 pt-4">
              </div>
            </div>
            <div class="col">
                      <div
                        ><img
                          class="bg-dark rounded bg-gradient logo-mobile img-fluid p-3 border"
                          src="img/home/logo.png"
                          width="100px"
                          alt="REJEE COMPANY"
                      /></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pb-4"></div>
    </div>
  </div>
</template>
<script>
import User from '../../apis/User';
export default {
  data() {
    return {
      orderid: this.$route.params.orderid,
      order: [],
      errors: {},
      loading: false
    };
  },
  methods: {
    getOrder() {
      console.log(this.orderid);
      User.getOrder(this.orderid)
          .then((response) => {
            this.order = response.data[0];
            console.log(this.order);
          })
          .catch(error => {
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
  mounted() {
    this.getOrder();
  },
  computed: {

  }
}
</script>
