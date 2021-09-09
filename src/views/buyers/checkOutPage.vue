<template>
  <!-- main content -->

  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left"></div>
    </div>

    <div class="row justify-center">
      <!--recently viewed-->

      <div class="row col-sm-12 col-xs-12 p-3 col-lg-6 col-md-6">
        <div class="content">
          <p class="text-center text-dark font-weight-bold h5 text-lg">
            Checkout
          </p>

          <div class="tab-content">
            <div
              class="
                tab-pane
                fade
                in
                active
                show
                justify-content-center
                col-sm-12 col-xs-12
                p-3
                col-lg-12 col-md-12
              "
              id="checkout-guest-form"
              role="tabpanel"
            >
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="row">
                      

                    </div>

                    <div class="row">
                      <label for="card_element"></label>
                      <div id="card-element"></div>
                    </div>
                    <hr />

                    <hr class="mb-4" />
                  </form>
                  <div class="p-2">
                    <button
                      type="button"
                      class="
                        btn btn-warning
                        border border-dark
                        btn-sm btn-block
                      "
                      @click="processPayment"
                      :disabled="paymentProcessing"
                      v-text="paymentProcessing ? 'processing' : 'Pay Now'"
                    ></button>
                  </div>
=======
  <div class="justify-content-center">
    <div class="row">
      <div class="col-6 d-lg-none h6 d-md-none text-lg pl-3 text-left">
        
      </div>

    </div>
        <div class="row justify-center">

<!--recently viewed-->
                <div class="row col-sm-12 col-xs-12 p-3 col-lg-6 col-md-6">
                    
                  
                      <div class="content">

              <p class="text-center text-dark font-weight-bold h5 text-lg">Checkout</p>
                        <div class="tab-content">
                          <div
                            class="tab-pane fade in active show justify-content-center  col-sm-12 col-xs-12 p-3 col-lg-12 col-md-12"
                            id="checkout-guest-form"
                            role="tabpanel"
                          >
                            <div class="card ">
                            <div class="card-body">

<form>

            <div class="row">

              <div class="mb-3">
                <label for="cc-name" class="text-sm">Name on card</label>
                <input type="text" class="border-dark form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="mb-3">
                <label for="cc-number" class="text-sm">Card number</label>
                <input type="text" class="border-dark form-control" id="cc-number" placeholder="xxxx xxxx xxxx xxxx" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="row col-md-6 col-sm-6 col-xs-12 mb-3">
                <label for="cc-expiration" class="text-sm">Expiration</label>
              <div class="col mb-2">
                <select type="text" class="border-dark form-control" id="cc-expiration" placeholder="" required>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                </select>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col mb-3">
                <select type="text" class="border-dark form-control" id="cc-expiration" placeholder="" required>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                    <option>2029</option>
                    <option>2030</option>
                </select>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              </div>
              <div class="col-4 mb-3">
                <label for="cc-expiration" class="text-sm">CVV</label>
                <input type="text" class="border-dark col-xs-4 col-sm-5  form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
      </div>

      <!-- end col-md-9-1 -->
    </div>

    <hr />
  </div>
</template>
<script>
import { loadStripe } from "@stripe/stripe-js";
import User from "../../apis/User";
export default {
  data() {
    return {
      stripe: {},
      cardElement: {},
      customer: {
        first_name: '',
        last_name: '',
        email: '',
        address: '',
        city: "",
        state: "",
        zip_code: "",
      },
      paymentProcessing: false,
    };
  },
  async mounted() {
    this.stripe = await loadStripe(
      "pk_test_51JSfU7ED6G9gw43fSzGj5UjJH8cvfKlZVrGi5FQ3EqYlHIlxw8EpeMJWjbbd7waAQoSvdagHvsNYAnf3lpCGp56j00t9EsvJji"
    );
    const elements = this.stripe.elements();
    this.cardElement = elements.create("card", {
      classes: {
        base: "rounded border focus:border-indigo-500 text-base outline-none text-gray-700 p-3 leading-8 transition-colors duration-200 ease-in-out",
      },
    });
    this.cardElement.mount("#card-element");
  },
  methods: {
    async processPayment() {
      this.paymentProcessing = true;

      const { paymentMethod, error } = await this.stripe.createPaymentMethod(
        "card",
        this.cardElement,
        {
          billing_details: {
            name: this.customer.first_name + " " + this.customer.lastname_name,
            email: this.customer.email,
            address: {
              line1: this.customer.address,
              city: this.customer.city,
              state: this.customer.state,
              postal_code: this.customer.zip_code,
            },
          },
        }
      );

      if (error) {
        this.paymentProcessing = false;
        console.error(error);
      } else {
        console.log(paymentMethod);
        this.customer.payment_method_id = paymentMethod.id;
        this.customer.amount = this.$store.state.cart.reduce(
          (acc, item) => acc + item.price * item.quantity,
          0
        );
        this.customer.cart = JSON.stringify(this.$store.state.cart);

        User.purchase(this.customer)
          .then((response) => {
            this.paymentProcessing = false;
            console.log(response);
            this.$store.commit("updateOrder", response.data);
            this.$store.dispatch("clearCart");
            this.$router.push({ name: "order.summary" });
          })
          .catch((error) => {
            this.paymentProcessing = false;
            console.error(error);
          });
      }
    },
  },
  computed: {
    getCurrentUser() {
      this.customer.first_name = this.$store.getters.getCurrentUser.first_name;
      this.customer.last_name = this.$store.getters.getCurrentUser.last_name;
      this.customer.email = this.$store.getters.getCurrentUser.email;
      this.customer.address = this.$store.getters.getAddress[0].address_line1;
      this.customer.city = this.$store.getters.getAddress[0].town_city;
      this.customer.state = this.$store.getters.getAddress[0].county;
      this.customer.zip_code = '';
    }
  }
};
</script

    <hr>
  </div>
</template>
        