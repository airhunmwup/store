<template>
  <!-- main content -->
  <div class="m-4">
    <nav aria-label="breadcrumb" class="d-xs-none">
      <ol class="breadcrumb text-xs">
        <li class="breadcrumb-item text-primary">
          <a href="#">Your Account</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Your Orders</li>
      </ol>
    </nav>

    <div class="justify-content-center row pb-4">
      <div class="container pl-2">
        <div class="row">
          <div class="col-lg-6 col-xs-12">
            <p
              class="text p-3 text-dark h4 font-weight-bold font-weight-normal"
            >
              Your Orders
            </p>
          </div>
          <div class="col-lg-6 col-xs-9">
            <div class="pt-2">
              <form method="post" class="std" id="customer-form">
                <div
                  class="justify-content-center text-center input-group col-12"
                >
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddon">
                      <i class="fa fa-search"></i>
                    </div>
                  </div>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Search all Orders"
                    class="form-control border"
                    value=""
                  />
                  <button
                    class="btn-light btn text-primary border-l-2"
                    type="submit"
                    data-action="show-password"
                    data-text-show="Show"
                    data-text-hide="Hide"
                  >
                    Search
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div
          class="content text-dark p-2 border-b-2 font-weight-bold col-12 pl-2"
        >
          <router-link
            to="/purchasehistory"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="border-warning border-b-4 p-2"
            title="Orders"
            ><span>Orders</span></router-link>
          <router-link
            to="/cancelledorder"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-2"
            title="Cancelled Orders"
            ><span>Cancelled Orders</span></router-link
          >
          <router-link
            to="/buyerreturns"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            class="p-2"
            title="Returns"
            ><span>Returns</span></router-link
          >
        </div>
      </div>

      <div class="p-4 col-12 product-container">
        <!--Purchase History-->
        <div class="row">
          <div class="pb-3 col-12">
            <form method="post" class="std" id="customer-form">
              <div class="input-group">
                <div class="page-item p-2 font-weight-bold text-dark">
                  {{orders.length}} Orders placed:
                </div>
                <select
                  class="
                    form-control-sm
                    shadow-inner
                    border
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
          </div>
          <div class="">
            <div class="card" v-for="(products, index) in orders" :key="index">
              <div class="border card-header">
                <div class="text-dark row text-xs">
                  <div class="m-1 col-2 col-xs-12">
                    <p class="font-weight-bold">ORDER PLACED</p>
                    <p class="text-dark">{{order_info[index].created_at.substring(0,10)}}</p>
                  </div>
                  <div class="m-1 col-2 col-xs-12">
                    <p class="font-weight-bold">TOTAL</p>
                    <p class="text-dark">£{{order_info[index].total}}</p>
                  </div>
                  <div class="m-1 col-3 col-xs-12">
                    <p class="font-weight-bold">DISPATCH TO</p>
                    <p class="text-dark" title="Tooltip on bottom">
                      {{ fullname.name }}
                    </p>
                  </div>
                  <div class="m-1 col-4 col-xs-12">
                    <p class="font-weight-bold">ORDER # 202-0274579-1617107</p>
                    <p>
                      <a
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        @click.prevent="orderDetails(order_id[index])"
                        ><span 
                        
                        class="text-primary text-sm"
                          >View order details </span>|
                          <span class="text-primary text-sm">
                          Invoice</span
                        ></a>
                    </p>
                    <button> </button>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="row ml-2 col-8 col-xs-12">
                    <p class="text-dark h6">Expected by 10 Aug</p>
                    <div class="col-12 m-1 p-2">
                      <div class="row">
                        <div class="col-5 col-lg-4 center">
                          <img
                            v-bind:src="API_BASE_URL + products.product_image1"
                            class="mt-3"
                            alt="Product"
                          />
                        </div>
                        <div class="p-3 text-dark col-7 col-md-7 col-lg-8">
                          <p class="pt-3 mt-2 text-info text-sm h6 underline">
                            {{products.product_name}}
                          </p>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span
                                class="input-group-text text-dark"
                                id="basic-addon1"
                                ><i class="fa fa-refresh"></i
                              ></span>
                              <button
                                type="button"
                                class="
                                  btn
                                  border
                                  underline
                                  text-dark text-xs
                                  p-2
                                  btn-sm
                                "
                              >
                                Buy it again
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row col-4 col-xs-12 justify-content-center">
                    <div class="content ml-4 mt-3">
                      <a
                        href="https://www.royalmail.com/track-your-item/"
                        class="p-1"
                        ><button
                          type="button"
                          class="text-xs btn-sm border btn-warning btn-block"
                        >
                          Track package
                        </button></a
                      >
                      <button
                        type="button"
                        class="text-xs btn-sm btn-light border btn-block"
                      >
                        Problem with order
                      </button>
                      <button
                        type="button"
                        class="text-xs btn-sm btn-light border btn-block"
                      >
                        Return
                      </button>
                      <button
                        class="text-xs btn-sm btn-light border btn-block"
                        type="button"
                        data-toggle="collapse"
                        data-target="#productfeedback-1"
                        aria-expanded="false"
                        aria-controls="productfeedback-1"
                      >
                        Leave seller feedback
                      </button>
                      <div class="collapse" id="productfeedback-1">
                        <div class="form-group m-2">
                          <form>
                            <textarea
                              class="form-control"
                              id="exampleFormControlTextarea1"
                              
                              rows="3"
                              required
                            ></textarea>
                            <router-link
                              to="purchase_history"
                              title="send message"
                            >
                              <button
                                class="btn btn-sm m-1 btn-success"
                                
                                type="submit"
                              >
                                send
                              </button>
                            </router-link>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
    <section class="appion">
      <div class="col-12">
        <p class="h3 text-dark">Recently viewed</p>
        <p class="text-dark text-right">
          <b class=""> see all </b>
          <b class="fa fa-caret-square-o-right"></b>
        </p>
      </div>
      <!-- breadcrumb -->
      <div class="ul gs full">
        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <img
                  class="card-img-top"
                  src="img/product/1.jpg"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="h6 text-dark">Product name</p>
                  <p class="font-weight-bold h6 text-dark">£149.99</p>
                  <p class="text-dark">RRP: <del> £350</del></p>
                </div>
              </div>
            </div>
          </router-link>
        </li>
        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <img
                  class="card-img-top"
                  src="img/product/9.jpg"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="h6 text-dark">Product name</p>
                  <p class="font-weight-bold h6 text-dark">£149.99</p>
                  <p class="text-dark">RRP: <del> £350</del></p>
                </div>
              </div>
            </div>
          </router-link>
        </li>
        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <img
                  class="card-img-top"
                  src="img/product/7.jpg"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="h6 text-dark">Product name</p>
                  <p class="font-weight-bold h6 text-dark">£149.99</p>
                  <p class="text-dark">RRP: <del> £350</del></p>
                </div>
              </div>
            </div>
          </router-link>
        </li>
        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <img
                  class="card-img-top"
                  src="img/product/10.jpg"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="h6 text-dark">Product name</p>
                  <p class="font-weight-bold h6 text-dark">£149.99</p>
                  <p class="text-dark">RRP: <del> £350</del></p>
                </div>
              </div>
            </div>
          </router-link>
        </li>
        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <img
                  class="card-img-top"
                  src="img/product/8.jpg"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="h6 text-dark">Product name</p>
                  <p class="font-weight-bold h6 text-dark">£149.99</p>
                  <p class="text-dark">RRP: <del> £350</del></p>
                </div>
              </div>
            </div>
          </router-link>
        </li>
        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <img
                  class="card-img-top"
                  src="img/product/13.jpg"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="h6 text-dark">Product name</p>
                  <p class="font-weight-bold h6 text-dark">£149.99</p>
                  <p class="text-dark">RRP: <del> £350</del></p>
                </div>
              </div>
            </div>
          </router-link>
        </li>
        <li class="li itemi">
          <router-link
            class=""
            to="/Product Detail"
            data-toggle="collapse"
            data-target=".navbar-collapse"
            title="Home"
          >
            <div class="p-2">
              <div class="card" style="width: 11rem">
                <img
                  class="card-img-top"
                  src="img/product/11.jpg"
                  alt="Card image cap"
                />
                <div class="card-body">
                  <p class="h6 text-dark">Product name</p>
                  <p class="font-weight-bold h6 text-dark">£149.99</p>
                  <p class="text-dark">RRP: <del> £350</del></p>
                </div>
              </div>
            </div>
          </router-link>
        </li>
      </div>
    </section>

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
        email: "alfredgreemie@gmail.com",
      },
      data: "",
      order_info: '',
      myproducts: '',
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
    getMyOrders(){
      User.myOrders(this.user).then(res => {
        this.data = res.data.products;
        this.order_info = res.data.myorders;
        this.myproducts = res.data.myproducts;
        this.fullname = res.data.user;
        this.productHistory = res.data.productHistory;
        this.products();
      }).catch(errors => {
        console.log(errors);
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
  },
};
</script>
        z