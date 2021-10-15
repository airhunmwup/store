<template>

  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left"></div>
    </div>
    <!-- breadcrumb -->

        <div class="row justify-center text-sm" >
    <!-- main -->
<div class="row col-10 pt-2">
  <div class="row">
    <div class="col-12">
<p class="h4 text-dark font-weight-bold">Order Items</p>
<span> {{ this.$store.state.basket.length }} Item(s)</span>
            <div
          class="text-sm"
          v-for="cart in this.$store.state.basket"
          :key="cart.id"
          >
                <p class="text-dark"> {{ cart["product_name"] }} x {{ cart["qnty"] }} - GBP £{{ cart["qnty_price"] }}</p>
      <div class="dropdown-divider"></div>
            </div>

            <p class="font-weight-bold text-dark">Subtotal: £{{ this.$store.state.basketTotal }}</p>
            <p class="font-weight-bold text-dark">Shipping: £{{this.$store.state.basket.product_shipping_cost }}</p> 
      <div class="dropdown-divider"></div>
            <p class="font-weight-bold text-dark">Total: £{{ parseInt(this.$store.state.basketTotal + this.$store.state.basket.product_shipping_cost)}}</p>
    </div>
  </div>
    <div class="row p-4 text-sm">
        <div class="col-6 pt-2">
      <div class="col-12">
        <p class="text-dark h4">Billing Details</p>
      </div>
            <div class="row">
      <div class="col-6 col-xs-12">           
           <label>First Name</label>
           <input type="text" class="form-control border-0"  v-model="formData.order_firstname" disabled />        
      </div>
      <div class="col-6 col-xs-12">           
           <label>Last Name</label>
           <input type="text" class="form-control border-0"  v-model="formData.order_lastname" disabled />        
      </div> 
            </div>
            <div class="row">
                <div class="col-6 col-xs-12">           
                    <label>Email</label>
                    <input type="text" class="form-control border-0"  v-model="formData.order_email" disabled/>        
                </div>
      <div class="col-6 col-xs-12">           
           <label>Phone</label>
           <input type="text" class="form-control"  v-model="formData.order_phone"/>        
      </div>  
                <input type="hidden" v-model="formData.order_shipping">
                <input type="hidden" v-model="formData.order_total">
            </div>
            <div class="row">
      <div class="col-12">           
           <label>Order Notes</label>
           <textarea type="text" class="form-control" v-model="formData.order_notes"></textarea>        
      </div>
            </div>
      </div>      
      <div class="col-12 pt-2">
        <p class="text-dark h4">Select a delivery address</p>
      </div>

      <div class="col-12">
        <p class="text-dark text-xs">
          Is the address you'd like to use displayed below? If so, click the
          corresponding "Deliver to this address" button. Or you can
          <a href="#AddAddress" class="text-primary underline"
            >enter a new delivery address.
          </a>
        </p>
      </div>

      <div class="dropdown-divider"></div>

      <div class="row pb-4">
        <div class="m-2 col-12 col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-dark h6">{{this.$store.state.full_name}}</h5>

              <p class="card-text text-dark">{{this.$store.state.address[0].address_line1}},</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].address_line2}}</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].town_city}}, {{this.$store.state.address[0].postal_code}}</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].country}}</p>
              <button
                type="button"
                class="
                  col-4
                  text-primary text-sm
                  underline
                  btn-xs
                  m-1
                  btn 
                "
              >
                Edit
              </button>
            </div>
            
            <p class="text-center">
              <button
                type="button"
                style="width: 90%;" 
                class="text-sm m-1 col-12 btn border btn-sm btn-warning"
                @click="createOrder"
                >
               create order
              </button>  
              
              
            </p>
          </div>
        </div>
      </div>

      <hr />
    </div>
</div>
        </div>
  </div>
</template>
<script>
import User from '../../apis/User';
export default {
  data() {
    return {
      formData: {       
        order_userid: this.$store.state.currentUser.id,
        order_firstname : this.$store.state.currentUser.first_name,
        order_lastname : this.$store.state.currentUser.last_name,
        order_phone: "",
        order_email: this.$store.state.currentUser.email,
        order_notes: "",
        order_total: this.$store.state.basketTotal,
        order_shipping: this.$store.state.basket.product_shipping_cost,
        address_line1: this.$store.state.address[0].address_line1,
        address_line2: this.$store.state.address[0].address_line2,
        town_city: this.$store.state.address[0].town_city,
        postal_code: this.$store.state.address[0].postal_code,
        country: this.$store.state.address[0].country,
      },
      
      errors: {},
      loading: false
    };
  },
  methods: {
    createOrder() {
      this.formData.amount = this.$store.state.basket.reduce((acc, item) => acc + (item.product_price * item.qnty), 0);
        this.formData.cart = JSON.stringify(this.$store.state.basket);
        console.log(this.formData);
        User.createOrder(this.formData)
          .then((response) => {
            console.log(response);
            this.$router.push({
                name: 'CheckOutPayment',
                params: { orderid: response.data.orderid }
            }).catch(()=>{});
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
  computed: {

  }
}
</script>
