<template>
  <!-- main content -->
  <div class="m-4">
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
        <li class="breadcrumb-item text-primary" aria-current="page"> <router-link
                            to="/Overview"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >
          Sellers hub</router-link>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Orders</li>
      </ol>
    </nav>

    <div class="justify-content-center row pb-4">
      <div class="container pl-2">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <p
              class="text pl-3 text-dark h4 font-weight-bold font-weight-normal"
            >
              Manage Orders
            </p>
          </div>
        </div>
      </div>

      <div class="pb-2 col-12">
        <!--Purchase History-->
        <div class="row">
          <div class="pb-2 pt-2 col-lg-6 col-xs-12">
            <!-- Example single danger button -->
            <div class="btn-group">
              <!-- Example split danger button -->
              <button type="button" class="btn btn-xs text-sm">
                {{manageorders.length}} Orders placed:
              </button>
              <button
                type="button"
                class="
                  font-weight-bold
                  text-dark
                  btn-xs
                  text-sm
                  dropdown-toggle dropdown-toggle-split
                "
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                All Orders <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu text-xs">
                <a class="dropdown-item font-weight-bold" href="#"
                  >Awaiting delivery (2)</a
                >
                <a class="dropdown-item font-weight-bold" href="#"
                  >Delivered (0)</a
                >
                <a class="dropdown-item font-weight-bold" href="#"
                  >Cancelled (0)</a
                >
                <a class="dropdown-item font-weight-bold" href="#"
                  >Returns (0)</a
                >
              </div>
            </div>
            <div class="btn-group">
              <button
                type="button"
                class="btn m-2 text-sm border dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Sort
              </button>
              <div class="dropdown-menu text-xs">
                <a class="dropdown-item">Last 30 Days</a>
                <a class="dropdown-item">Past three months</a>
                <a class="dropdown-item">2021</a>
                <a class="dropdown-item">2020</a>
                <a class="dropdown-item">2019</a>
              </div>
            </div>
          </div>

            <!--start Web view-->
            <div class="m-2 border d-xs-none">
              <div class="card-header font-weight-bold">
                <div class="row text-xs">
                  <div class="col">
                    <div class="input-group">
                      <span class="ml-2"> #ORDER ID</span>
                    </div>
                  </div>
                  <div class="col">
                    <p class="">CREATED</p>
                  </div>
                  <div class="col">
                    <p class="">CUSTOMER</p>
                  </div>
                  <div class="col">
                    <p class="">PAYMENT STATUS</p>
                  </div>
                  <div class="col">
                    <p class="">SHIPMENT STATUS</p>
                  </div>
                  <div class="col">
                    <p class="text-right">PRICE</p>
                  </div>
                </div>
              </div>
              <a
                href="#"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="View Order details"
                v-for="(order, index) in orders"
                :key="index"
                @click.prevent="orderDetails(order)"
              >
                <div class="card-body border-b-2 text-dark">
                  <div class="row text-xs">
                    <div class="col">
                      <div class="input-group">
                        <span class="ml-2 font-weight-bold"> #{{order.orderid}}</span>
                      </div>
                    </div>
                    <div class="col">
                      <p class="">{{order.created_at.substring(0,10)}}</p>
                    </div>
                    <div class="col">
                      <p class="">{{order.firstname}} {{order.lastname}}</p>
                    </div>
                    <div class="col">
                      <span
                        class="alert-xs p-1 mt-4 rounded alert-danger"
                        role="alert"
                      >{{order.payment_status}}
                      </span>
                    </div>
                    <div class="col">
                      <p class="">{{order.shipment_status}}</p>
                    </div>
                    <div class="col">
                      <p class="text-right">£{{order.total}}</p>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <!--end Web view-->

            <!--start mobile view-->
            <div class="m-2 d-md-none border"
                v-for="(order, index) in orders"
                :key="index"
                @click.prevent="orderDetails(order)">
              <div class="card-header">
                <div class="row text-xs">
                  <div class="col">
                    <p class="text-left">{{order.created_at.substring(0,10)}}</p>
                  </div>
                  <div class="col">
                    <p class="text-right">Order ID: <b>{{order.orderid}}</b></p>
                  </div>
                </div>
              </div>
              <div class="card-header">
                <div class="row text-xs">
                  <div class="col pt-2">
                    <span
                      class="alert-xs p-1 mt-4 rounded alert-danger"
                      style="height: 2rem"
                      role="alert"
                    >
                      {{order.payment_status}}
                    </span>
                  </div>
                  <div class="col">
                    <p class="text-right h5">
               <a
                href="#"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="View Order details"
                v-for="(order, index) in orders"
                :key="index"
                @click.prevent="orderDetails(order)"
              ><b
                          class="
                            fa fa-angle-right fa-lg
                            text-dark
                            font-weight-bold
                          "
                        ></b>
              </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="card-body text-xs">
                <div class="row">
                  <div class="col-4">
                    <p class="m-1">Customer:</p>
                  </div>
                  <div class="col-8 text-right">
                    <p class="m-1 text-dark font-weight-bold">{{order.firstname}} {{order.lastname}}</p>
                  </div>
                  
                  <div class="col-4">
                    <p class="m-1">Price:</p>
                  </div>
                  <div class="col-8 text-right">
                    <p class="m-1 text-dark font-weight-bold">£{{order.total}}</p>
                  </div>
                  <div class="col-6">
                    <p class="m-1">Delivery status:</p>
                  </div>
                  <div class="col-6 text-right">
                    <p class="m-1 text-dark font-weight-bold">
                      {{order.shipment_status}}
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!--end mobile view-->

            <p class="text-dark p-4 text-center" v-show="!manageorders">
              You do not have any orders to display in this view.
            </p>

            <div class="justify-content-center p-2 text-sm">
              <nav aria-label="Page navigation example" class="col-12">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link text-dark" href="#">Previous</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link underline" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-dark" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-dark" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link text-dark" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>
  </div>
</template>
<script>
import { mapState } from 'vuex';
import User from "../../apis/User";
export default {
  data() {
    return {
      formData: {
        user_id : this.$store.state.currentUser.id,
      },  
      manageorders: '',
      orderdetails: '',
      data: '',
      orders: '',
    }
  },
  methods: {
    getOrders(){         
          User.getmyOrders(this.formData,{             
          }).then(res =>{              
              this.orders = res.data;
              console.log(res.data);                   
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
    async getMyOrders(id){
        if(id){
          console.log(id);
          User.manageorders(id).then(res => {
            this.manageorders = res.data.manageorders;
            this.orderdetails = res.data.orderdetails;
          console.log(res.data);
        }).catch(errors => {
          console.log(errors);
        });
      }
    },
    orderDetails(data) {
      this.data = data;
      console.log(data);
        this.$router.push({
        name: 'processorder',
        params: {
          order: data,
          }
      });
    },
    getuser() {
      User.getUser(this.$store.state.token).then((response)=>{ 
        console.log(response.data.id);
        this.getMyOrders(response.data.id);
      }).catch((errors) => {
        console.log(errors);
      });
    }
  },
  computed: mapState(['setCategoryList','setSubCategoryList','getCurrentUser']),
  created() {
    this.getuser();
  },
  beforeMount() {
    this.getOrders();
  },
}
</script>
        