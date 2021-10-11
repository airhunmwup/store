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
                    <div class="row"></div>

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

                  <!-- end col-md-9-1 -->
                </div>

                <hr />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
        user_id: "",
        first_name: "",
        last_name: "",
        email: "",
        address: "",
        city: "",
        state: "",
        zip_code: "533416",
      },
      paymentProcessing: false,
    };
  },
  async mounted() {
    this.getCurrentUser;
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
            name: this.customer.first_name + " " + this.customer.last_name,
            email: this.customer.email,
            address: {
              line1: this.customer.address,
              city: this.customer.city,
              state: this.customer.state,
              postal_code: this.customer.zip_code,
            },
          },
        }
      ).then(function(result) {

                console.log(result);
            });

      if (error) {
        this.paymentProcessing = false;
        console.error(error);
      } else {
        console.log(paymentMethod);
        this.customer.payment_method_id = paymentMethod.id;
        this.customer.amount = this.$store.state.basket.reduce((acc, item) => acc + (item.product_price * item.qnty), 0);
        this.customer.cart = JSON.stringify(this.$store.state.basket);

        console.log(this.customer.amount);

        User.purchase(this.customer)
          .then((response) => {
            this.paymentProcessing = false;
            console.log(response);
          })
          .catch((error) => {
            this.paymentProcessing = false;
            console.error(error);
          });
      }
    },
    
  },
  computed: {
    async getCurrentUser() {
      this.customer.user_id = this.$store.getters.getCurrentUser.id;
      this.customer.first_name = this.$store.getters.getCurrentUser.first_name;
      this.customer.last_name = this.$store.getters.getCurrentUser.last_name;
      this.customer.email = this.$store.getters.getCurrentUser.email;
      this.customer.address = this.$store.getters.getAddress[0].address_line1;
      this.customer.city = this.$store.getters.getAddress[0].town_city;
      this.customer.state = this.$store.getters.getAddress[0].county;
    },
  }
};
</script>