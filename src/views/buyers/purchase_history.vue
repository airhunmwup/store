<template>
  <!-- main content -->
  <div class="m-3">
    <nav aria-label="breadcrumb" class="d-xs-none">
      <ol class="breadcrumb text-xs">
        <li class="breadcrumb-item text-primary"> <router-link
                            to="/account"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >
          Your Account</router-link>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Your Orders</li>
      </ol>
    </nav>

    <div class="justify-content-center row pb-4">
      <div class="container pl-2">
        <div class="row">
          <div class="col-lg-6">
            <p
              class="text p-2 text-dark h4 font-weight-bold font-weight-normal"
            >
              Your Orders
            </p>
          </div>
        </div>
      </div>

      <div class="col-12">
        <!--Purchase History-->
        <div class="row">
          <div class="p-2">
<nav class="navbar navbar-expand-lg navbar-light">
            <form method="post" class="std" id="customer-form">
              <div class="input-group">
                <select
                  class="
                    form-control-sm
                    
                    mr-2
                    text-sn 
                    btn
                    select
                  "
                >
                  <option>{{data.length}} Orders</option>
                  <option>{{data.length}} Cancelled</option>
                  <option>{{data.length}} Returned</option>
                </select>
                <select
                  class="
                    form-control-sm
                    shadow-inner
                    
                    text-xs text-primary
                    btn
                    select
                  "
                >
                  <option>Last 30 Days</option>
                  <option>Past three months</option>
                  <option>2021</option>
                  <option>2020</option>
                  <option>2019</option>
                </select>
              </div>
            </form>
</nav>
            <div class="card mb-4" v-for="ord in order" :key="ord.id">
              <div class=" card-header">
                <div class="text-dark row text-xs">
                  <div class="col-12 col-md-6 p-2">
                    <p class="text"><span class="font-weight-bold">ORDER # </span><span class="text-dark underline dashed"> {{ord['orderid']}}</span></p>
                  </div>
                  <div class="col-12 col-md-6 text-md-right p-2">
                    <span class="font-weight-bold">ORDER PLACED </span>
                    <span class="text-dark underline"> {{ord['created_at'].substring(0,10)}}</span>
                  </div>
                </div>
              </div>
              <div class="card-body row">
                <div v-for="items in ord.order_items" :key="items.id" class="col-12 col-md-6">
                  <div class="row col-12">
                    <div class="col-12 m-1 p-2">
                      <div class="row">
                        <div class="col-6 col-lg-4 center">
                          <img v-bind:src="API_BASE_URL + items.product_image" class="card-img-top" alt="Product" style="height:180px; width: 100%;" />
                        </div>
                        <div class="text-dark col-6 col-md-7 col-lg-8">
                          <p class="pt-3 mt-2 text-dark h6 ">
                            {{items.name}}
                          </p>
                          <div class="mb-3">
                              <p>Quantity : {{items.quantity}}</p>
                              <p>Price : £{{items.price}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 <!-- <div class="row col-4 col-xs-12 justify-content-center">
                    <div class="content ml-4 mt-3">
                      <a
                        href="https://www.royalmail.com/track-your-item/"
                        class="p-1"
                        ><button
                          type="button"
                          class="text-xs btn-sm  btn-warning btn-block"
                        >
                          Track package
                        </button></a
                      >
                      <button
                        type="button"
                        class="text-xs btn-sm btn-light  btn-block"
                      >
                        Problem with order
                      </button>
                      <button
                        class="text-xs btn-sm btn-light  btn-block"
                        type="button"
                        data-toggle="collapse"
                        data-target="#productfeedback-1"
                        aria-expanded="false"
                        aria-controls="productfeedback-1"
                      >
                        Leave seller feedback
                      </button>
                    </div>
                  </div> -->
                </div>
                    <p>
                   <router-link         
                   :to="{ name: 'orderdetails', params: { orderid: ord.orderid}}"
                   class="dropright"
                   data-toggle="collapse"
                   data-target=".navbar-collapse"
                   >
                      <span 
                        
                        class="text-primary text-sm underline"
                          >View order details </span>
                    </router-link>
                    </p>
              </div>
            </div>
            <p class="text-dark text-center" v-show="!orders">
              You do not have any orders to display in this view.
            </p>
          </div>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>
    <hr />
  </div>
</template>
<script>
import { mapState } from 'vuex';
import User from "../../apis/User";
import Constants from "../../common/constants";
export default {
  data() {
    return {
      user: {
        email: this.$store.state.currentUser.email,
      },
      email: this.$store.state.currentUser.email,
      userid: this.$store.state.currentUser.id,
      data: "",
      order_info: '',
      myproducts: '',
      order: '',
      fullname: "",
      productHistory: "",
      myorders_id: "",
      orders: [],
      order_id: [],
      orderDetail_id : "",
      API_BASE_URL: Constants.API_BASE_URL,
    }
  },
  computed: mapState(['currentUser']),
  methods:{
    getOrders(){
      User.getOrders(this.userid).then(res => {
        this.order = res.data;
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
    },  
    getMyOrders(){
      User.myOrders(this.email).then(res => {
        this.data = res.data.products;
        this.order_info = res.data.myorders;
        this.myproducts = res.data.myproducts;
        this.fullname = res.data.user;
        this.productHistory = res.data.productHistory;
        console.log(this.myproducts);
        this.products();
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
    orderDetails(id) {
      this.orderDetail_id = id;
        this.$router.push({
        name: 'orderdetails',
        params: {
          data: this.data, order_info: this.order_info, 
          myproducts: this.myproducts, fullname: this.fullname,
          id: this.orderDetail_id, productHistory: this.productHistory,
          }
      });
    },
    async products(){
      let order = Object.keys(this.productHistory);
      order.map((key,index) => {
        this.order_id.push(key);
        if(this.productHistory[key][0] == this.data[index].id){
          this.orders.push(this.data[index]);
        }
      });
    }
  },
  async mounted() {
    this.getMyOrders(); 
    this.getOrders();
  },
};
</script>