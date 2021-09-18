<template>
  <div class="container">
    <!-- main content -->
    <div class="card">
      <div class="card-header">
        <p class="h5 text-dark">Order Details</p>
      </div>
      <div class="card-body text-sm text-dark">
        <p class="">Order number: <span class="text-sm">#2534262</span></p>
        <p class="">
          Order date: <span class="text-sm">25 August, 2020.</span>
        </p>
      </div>
      <div class="card-footer">
        <p class="h5 text-dark">Shipping information</p>
      </div>
      <div class="card-body text-sm text-dark">
        <div class="row">
          <div class="col-sm">
            <p class="font-weight-bold">Shipping information:</p>
            <p class="">{{this.$store.state.full_name}}</p>
            <p class="">{{this.$store.state.address[0].address_line1}}</p>
            <p class="">{{this.$store.state.address[0].county}}/{{this.$store.state.address[0].town_city}}</p>
            <p class="">{{this.$store.state.address[0].country}}, {{this.$store.state.address[0].postal_code}}</p>
          </div>
          <div class="col-sm">
            <p class="font-weight-bold">Shipping method:</p>
            <p class="">
              Shipping rate table: Economy Service (2 to 9 business days)
            </p>
            <p class="">
              Status:<span class="alert-info m-2 rounded">
                out for delivery</span
              >
            </p>
            <div class="form-group m-2">
              <p class="font-weight-bold">Tracking ID: 8374626263273723</p>
              <p>
                <a
                  href="https://www.royalmail.com/track-your-item"
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
          <div class="col-4">
            <p class="h5 text-dark">Product</p>
          </div>
          <div class="col-2">
            <p class="">Requested shipping date:</p>
          </div>
          <div class="col-2">
            <p class="">status</p>
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
      <div class="card-body text-xs text-dark d-xs-none">
        <div class="row">
          <div class="col-4">
            <div class="row">
              <div class="col-6">
                <img src="img/product/6.jpg" class="" alt="Product" />
              </div>
              <div class="col-6">
                <p class="text-dark">Product name</p>
                <p class="text-dark">SKU: CTZ086DT</p>
                <p class="text-dark">Brand: basket</p>
              </div>
            </div>
          </div>
          <div class="col-2">
            <p class="">29 August, 2020</p>
          </div>
          <div class="col-2">
            <p class="">Order processing</p>
          </div>
          <div class="col-2 text-center">
            <p class="">4</p>
          </div>
          <div class="col-1">
            <p class="text-right">£50</p>
          </div>
          <div class="col-1 t">
            <p class="text-right">£200</p>
          </div>
        </div>
      </div>
      <div class="card-body text-xs text-dark d-xs-none">
        <div class="row">
          <div class="col-4">
            <div class="row">
              <div class="col-6">
                <img src="img/product/16.jpg" class="" alt="Product" />
              </div>
              <div class="col-6">
                <p class="text-dark">Product name</p>
                <p class="text-dark">SKU: CTZ086DT</p>
                <p class="text-dark">Brand: basket</p>
              </div>
            </div>
          </div>
          <div class="col-2">
            <p class="">29 August, 2020</p>
          </div>
          <div class="col-2">
            <p class="">Order processing</p>
          </div>
          <div class="col-2 text-center">
            <p class="">4</p>
          </div>
          <div class="col-1">
            <p class="text-right">£50</p>
          </div>
          <div class="col-1 t">
            <p class="text-right">£200</p>
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
      <div class="card-body text-xs text-dark d-md-none d-lg-none">
        <div class="row">
          <div class="col-6 col-sm-6">
            <img src="img/product/6.jpg" class="" alt="Product" />
          </div>
          <div class="col-6 col-sm-6">
            <p class="h6 text-dark">Product name</p>
            <p class="">Requested shipping date:</p>
            <p class="">status: Order processing</p>
            <p class="">Qty: 4</p>
            <p class="">Each: £50</p>
            <p class="">Total:<span class="text-right"> £200</span></p>
          </div>
        </div>
      </div>
      <div class="card-body text-xs text-dark d-md-none d-lg-none">
        <div class="row">
          <div class="col-6">
            <img src="img/product/16.jpg" class="" alt="Product" />
          </div>
          <div class="col-6">
            <p class="h6 text-dark">Product name</p>
            <p class="">Requested shipping date:</p>
            <p class="">status: Order processing</p>
            <p class="">Qty: 4</p>
            <p class="">Each: £50</p>
            <p class="">Total:<span class="text-right"> £200</span></p>
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
            <p class="">£200</p>
            <p class="">£2</p>
            <p class="">£5.9</p>
            <p class="text-danger">£207.9</p>
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
            <p class="">{{this.$store.state.full_name}}</p>
            <p class="">{{this.$store.state.address[0].address_line1}}</p>
            <p class="">{{this.$store.state.address[0].county}}/{{this.$store.state.address[0].town_city}}</p>
            <p class="">{{this.$store.state.address[0].country}}, {{this.$store.state.address[0].postal_code}}</p>
          </div>
          <!-- <div class="mb-2 col-sm">
            <p class="font-weight-bold">Payment method: card</p>
            <p class="">******7645</p>
            <p class="">23/20</p>
          </div> -->
        </div>
      </div>
      <div class="card-body text-sm text-dark">
        <div class="row">
          <div class="mb-2 col-sm">
            <button type="button" class="btn m-1 btn-light btn-sm border">
              Cancel
            </button>
            <button type="button" class="btn m-1 btn-warning btn-sm border">
              Print
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data () {
    return {
      //
      data: this.$route.params.data,
      order_info: this.$route.params.order_info
    }
  },
  methods: {
    //
  }
}
</script>