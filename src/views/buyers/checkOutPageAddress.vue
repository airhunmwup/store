<template>
  <div class="container">
    <!-- main content -->

    <!-- breadcrumb -->

    <!-- main -->

    <div class="row p-4">
        <div class="col-md-6 col-12 p-2 col-xs-12">
            <p class="text-dark h4">Ordered Items</p>
            {{ this.$store.state.basket.length }} Item(s)
            <div
          class="text-sm pb-2"
          v-for="cart in this.$store.state.basket"
          :key="cart.id"
          >
                <p> {{ cart["product_name"] }} x {{ cart["qnty"] }} - GBP £{{ cart["qnty_price"] }}</p>
            </div>
            <hr>
            <b class="text-dark">Subtotal: £{{ this.$store.state.basketTotal }}</b> <br>
            <b class="text-dark">Shipping: £{{this.$store.state.basket.product_shipping_cost }}</b> <hr>
            <b class="text-dark">Total: £{{ parseInt(this.$store.state.basketTotal + this.$store.state.basket.product_shipping_cost)}}</b>
        </div>
        <div class="col-md-6 col-12">
          <div class="p-2"></div>
      <div class="col-12">
        <p class="text-dark h4">Billing Details</p>
      </div>
            <div class="row">
      <div class="col-6 col-xs-12">           
           <label>First Name</label>
           <input type="text" class="form-control"  v-model="formData.order_firstname" disabled />        
      </div>
      <div class="col-6 col-xs-12">           
           <label>Last Name</label>
           <input type="text" class="form-control"  v-model="formData.order_lastname" disabled />        
      </div> 
            </div>
            <div class="row">
                <div class="col-6 col-xs-12">           
                    <label>Email</label>
                    <input type="text" class="form-control"  v-model="formData.order_email" disabled/>        
                </div>
      <div class="col-6 col-xs-12">           
           <label>Phone</label>
           <input type="text" class="form-control"  v-model="formData.order_phone"/>        
      </div>  
      
            </div>
            <div class="row">
      <div class="col-12">           
           <label>Order Notes</label>
           <textarea type="text" class="form-control" v-model="formData.order_notes"></textarea>        
      </div>
            </div>
      </div>      
          <div class="p-2"></div>
      <div class="col-12">
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

      <div class="row">
        <div class="m-1 col-md-6 col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-dark h6">{{this.$store.state.full_name}}</h5>

              <p class="card-text text-dark">{{this.$store.state.address[0].address_line1}},</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].address_line2}}</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].town_city}}, {{this.$store.state.address[0].postal_code}}</p>

              <p class="card-text text-dark">{{this.$store.state.address[0].country}}</p>
            </div>
          <div class="dropdown-divider"></div>
            <p class="text-center p-2">
              <router-link
                  class="text-sm m-1  btn border btn-blocked bg-gradient btn-warning"
                style="width: 90%;"  
                to="/checkoutpayment"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="Home"
                >
                Continue
              </router-link>
              
            </p>
          </div>
        </div>
      </div>

          <div class="dropdown-divider pb-4"></div>
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
      },
      
      errors: {},
      loading: false
    };
  },
  methods: {
    uploadImage(event) {
      const file = event.target.files[0];
      if(file){
        if(this.num <= 4){
          this.image.push(file);
          this.formData.imageData.push(file);
          this.formData.testImage = file;
          this.imagePreview.push(URL.createObjectURL(file));
          this.num++;
        }else{
          console.log('max 4');
        }
      }
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