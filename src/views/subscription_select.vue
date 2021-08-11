<template>
  <!-- main content -->

  <!-- main content -->
    <div class="main-content box pt-4">
      <div class="container justify-content-center font-weight-bold content-bottom">

                  <span class="p-2 text-primary font-weight-normal">
                  Home
                  </span>>
                  <span class="text text-primary font-weight-normal">
                  My REJEE Stores
                  </span>>
                  <span class="text  text-primary  font-weight-normal">
                  My Account
                  </span>>
                  <span class="text text-primary font-weight-normal">
                  Subscriptions
                  </span>>
                  <span class="text font-weight-normal">
                  Subscribe
                  </span>
      </div>
      <div id="wrapper-site">
        <div id="content-wrapper">
          <div id="main">
            <div class="page-home">
              <!-- breadcrumb -->
              <div class="container">
                <div class="content">
                  <!-- main content -->
                  <div class="main-content">
                        <div class="border-danger text-dark alert alert-danger">
                        <strong><i class="fa fa-info-circle fa-lg"></i></strong> You do not have a valid payment method on file. Please add a valid payment method before choosing your subscription. <router-link
          class="text-primary font-weight-bold text-sm text-right pr-4"
          to="/account"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="account"
        >Add Payment Method</router-link>
Your account status is not confirmed.<br>You do not have a valid billing REJEE Stores account. Please provide a valid account before choosing your Store.<router-link
          class="text-primary font-weight-bold text-sm text-right pr-4"
          to="/Subscriptions"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="summary"
        >Billing Account</router-link>
                        </div>
                    <div id="wrapper-site">
                      <div id="content-wrapper">
                        <section class="page-home">
                          <div class="container">
                              <div class="">
                                <p class="h3 text-dark">Choose a Store subscription</p>
                              </div>
                              <hr>
                            <div class="card p-4">
                            <div class="row">
                                
                              <div class="border p-2 col-lg-3 col-md-3 col-sm-8">
                            <div class="content p-3 h-100 justify-content-center text-center box">
                                    <p class="h5 font-weight-bold">
                                      Starter
                                    </p>
                                    <p class="h4 p-2 font-weight-bold">
                                      $4.95 /mo
                                    </p>
                                    <p class="text-xs p-2 font-weight-bold">
                                      with 1-yr plan* or
                                    $7.95/mo without
                                    </p>
                                    <p class="text-sm pt-3 text-dark  font-weight-bold">
                                      For sellers who want an entry level solution.
                                    </p>
                            </div>
                              </div>
                              <div class="border p-2 col-lg-3 col-md-3 col-sm-8">
                                    
                            <div class="content p-3 h-100 justify-content-center text-center box">
                                    <p class="h5 font-weight-bold">
                                      Basic
                                    </p>
                                    <p class="h4 p-2 font-weight-bold">
                                      $21.95 /mo
                                    </p>
                                    <p class="text-xs p-2 font-weight-bold">
                                     with 1-yr plan* or
                                     $27.95/mo without
                                    </p>
                                    <p class="text-sm pt-3 text-dark  font-weight-bold">
                                      For sellers who want lower selling fees.
                                    </p>
                            </div>
                              </div>
                              <div class="border p-2 col-lg-3 col-md-3 col-sm-8">
                                    
                            <div class="content p-3 h-100 justify-content-center text-center box">
                                    <p class="h5 font-weight-bold">
                                      Premium
                                    </p>
                                    <p class="h4 p-2 font-weight-bold">
                                      $59.95 /mo
                                    </p>
                                    <p class="text-xs p-2 font-weight-bold">
                                      with 1-yr plan* or
                                      $74.95/mo without
                                    </p>
                                    <p class="text-sm pt-3 text-dark  font-weight-bold">
                                      For sellers wanting lower listing fees and more business tools.
                                    </p>
                            </div>
                              </div>
                              <div class="border p-2 col-lg-3 col-md-3 col-sm-8">
                                    
                            <div class="content p-3 h-100 justify-content-center text-center box">
                                    <p class="h5 font-weight-bold">
                                     Anchor
                                    </p>
                                    <p class="h4 p-2 font-weight-bold">
                                      $299.95 /mo
                                    </p>
                                    <p class="text-xs  p-2 font-weight-bold">
                                      with 1-yr plan* or
                                    $349.95/mo without
                                    </p>
                                    <p class="text-sm pt-3 text-dark  font-weight-bold">
                                      For high volume sellers who want lower fees.
                                    </p>
                            </div>
                              </div>
                            </div>
                              <div class="text-center p-4">
                                <p class="h3 text-dark">Compare Stores</p>
                                <p class="text-dark">Find the Store that's right for you</p>
                              </div>
                      <div class="row container text-md table-responsive">
                        <table class="std table">
  <thead>
    <tr class="text-center">
      <th scope="col-3"></th>
      <th scope="col">Starter</th>
      <th scope="col">Basic</th>
      <th scope="col">Premium</th>
      <th scope="col">Anchor</th>
    </tr>
  </thead>
  <p class="h5 text-dark pt-4">Pricing</p>
  <tbody>
    <tr>
      <th scope="row">Yearly subscription</th>
      <td class="border text-center">$4.95</td>
      <td class="border text-center">$21.95</td>
      <td class="border text-center">$59.95</td>
      <td class="border text-center">$299.95</td>
    </tr>
    <tr>
      <th scope="row">Monthly subscription</th>
      <td class="border text-center">$4.95</td>
      <td class="border text-center">$27.95</td>
      <td class="border text-center">$74.95</td>
      <td class="border text-center">$349.95</td>
    </tr>
  </tbody>
  <p class="h5 text-dark pt-4">Fees</p>
  <tbody>
    <tr>
      <th scope="row">Free fixed price insertions</th>
      <td class="border text-center">250 /mo250 /mo</td>
      <td class="border text-center">350 /mo</td>
      <td class="border text-center">1,000 /mo</td>
      <td class="border text-center">10,000 /mo</td>
    </tr>
    <tr>
      <th scope="row">Free Auctions in Collectibles and Fashion</th>
      <td class="border text-center">250 /mo250 /mo	</td>
      <td class="border text-center">250 /mo</td>
      <td class="border text-center">500 /mo</td>
      <td class="border text-center">1,000 /mo</td>
    </tr>
    <tr>
      <th scope="row">Additional fixed price insertion</th>
      <td class="border text-center">$0.30</td>
      <td class="border text-center">$0.25</td>
      <td class="border text-center">$0.10</td>
      <td class="border text-center">$0.05</td>
    </tr>
    <tr>
      <th scope="row">Additional auction insertion</th>
      <td class="border text-center">$0.30</td>
      <td class="border text-center">$0.25</td>
      <td class="border text-center">$0.15</td>
      <td class="border text-center">$0.10</td>
    </tr>
    <tr>
      <th scope="row">Final value fee cap</th>
      <td class="border text-center">$750.00</td>
      <td class="border text-center">$350.00</td>
      <td class="border text-center">$350.00</td>
      <td class="border text-center">$250.00</td>
    </tr>
    <tr>
      <th scope="row">Final value fee</th>
      <td class="border text-center">2.0 - 12.20%</td>
      <td class="border text-center">1.5 - 12.20%</td>
      <td class="border text-center">1.5 - 12.20%</td>
      <td class="border text-center">1.5 - 12.20%</td>
    </tr>
  </tbody>
  <p class="h5 text-dark pt-4">Benefits</p>
  <tbody>
    <tr>
      <th scope="row">Insertion fee credits for auction-style items that sell	</th>
      <td class="border text-success text-center"></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
    </tr>
    <tr>
      <th scope="row">Promotions Manager</th>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
    </tr>
    <tr>
      <th scope="row">Markdown Manager</th>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
    </tr>
    <tr>
      <th scope="row">Subscriber discounts</th>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
    </tr>
    <tr>
      <th scope="row">Store home page</th>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
    </tr>
    <tr>
      <th scope="row">Link to REJEE Stores Store on listings</th>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
    </tr>
    <tr>
      <th scope="row">Dedicated customer support</th>
      <td class="border text-success text-center"></td>
      <td class="border text-success text-center"></td>
      <td class="border text-success text-center"></td>
      <td class="border text-success text-center"><i class="fa fa-check fa-lg"></i></td>
    </tr>
  </tbody>
  <p class="h5 text-dark pt-4">Who it's for</p>
  <tbody>
    <tr>
      <th scope="row">Best for sellers who</th>
      <td class="border">Best for sellers who have a handful of products and want a storefront to brand and promote their business.</td>
      <td class="border">nlock more zero insertion fee listings, final value fee discounts, and a coupon for REJEE Stores-branded shipping supplies each quarter.</td>
      <td class="border">If you have an extensive product assortment, a Premium Store subscription gives you substantially more zero insertion fee listings.</td>
      <td class="border">For high volume sellers who have an extensive product catalog or are running a business that would benefit from dedicated customer support.</td>
    </tr>
    <tr>
      <th scope="row">Eligibility</th>
      <td class="border">Have an REJEE Stores seller account.</td>
      <td class="border">Have an REJEE Stores seller account.</td>
      <td class="border">Have an REJEE Stores seller account.</td>
      <td class="border">Have an REJEE Stores seller account.</td>
    </tr>
  </tbody>
  <p class="h5 text-dark pt-4">Summary</p>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td class="border">
          <div class="p-2 text-center">
                                    <p class="h5 font-weight-bold">
                                      Starter
                                    </p>
                                    <p class="h4 p-2 font-weight-bold">
                                      $4.95 /mo
                                    </p>
                                    <p class="text-xs p-2 font-weight-bold">
                                      with 1-yr plan* or
                                    $7.95/mo without
                                    </p>
                                    <p class="text-sm pt-3 text-dark  font-weight-bold">
                                      For sellers who want an entry level solution.
                                    </p>
          </div>
                            </td>
      <td class="border">
          <div class="p-2 text-center">
              <p class="h5 font-weight-bold">
                                      Basic
                                    </p>
                                    <p class="h4 p-2 font-weight-bold">
                                      $21.95 /mo
                                    </p>
                                    <p class="text-xs p-2 font-weight-bold">
                                     with 1-yr plan* or
                                     $27.95/mo without
                                    </p>
                                    <p class="text-sm pt-3 text-dark  font-weight-bold">
                                      For sellers who want lower selling fees.
                                    </p>
          </div>
      </td>
      <td class="border">
          <div class="p-2 text-center">
              <p class="h5 font-weight-bold">
                                      Premium
                                    </p>
                                    <p class="h4 p-2 font-weight-bold">
                                      $59.95 /mo
                                    </p>
                                    <p class="text-xs p-2 font-weight-bold">
                                      with 1-yr plan* or
                                      $74.95/mo without
                                    </p>
                                    <p class="text-sm pt-3 text-dark  font-weight-bold">
                                      For sellers wanting lower listing fees and more business tools.
                                    </p>
          </div>
      </td>
      <td class="border">
          <div class="p-2 text-center">
               <p class="h5 font-weight-bold">
                                     Anchor
                                    </p>
                                    <p class="h4 p-2 font-weight-bold">
                                      $299.95 /mo
                                    </p>
                                    <p class="text-xs  p-2 font-weight-bold">
                                      with 1-yr plan* or
                                    $349.95/mo without
                                    </p>
                                    <p class="text-sm pt-3 text-dark  font-weight-bold">
                                      For high volume sellers who want lower fees.
                                    </p>
          </div>
      </td>
    </tr>
  </tbody>
</table>
                      </div>
<div class="">
    <router-link
          class="text-dark font-weight-bold text-sm text-right pr-4"
          to="/Subscription"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="summary"
        >
    <button class="border-primary border p-2 font-weight-bold text-primary">Back to My Subscriptions</button>
    </router-link>
</div>
                            </div>

                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>