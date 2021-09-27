<template>
  <!-- main content -->
  <div class="justify-content-center">
        <div class="justify-center text-sm" >

<!--recently viewed-->
                <div class="row col-sm-12 p-2 col-lg-6 col-md-6">
                  <span class="text m-4 text-dark h4 font-weight-bold font-weight-normal">
                  Sign in & security preference
                  </span>
                  <div class="" >
  <div class="card-body border-b-2">
    <div class="row">
  <div class="col-8">
      <p class="font-weight-bold text-dark">Name:</p>
      <p class="text-dark">{{this.$store.state.currentUser.first_name}} {{this.$store.state.currentUser.last_name}}</p>
  </div>
  <div class="col-4 text-end">
                <router-link
                  to="/editloginname"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
      <a class="btn-md btn text-sm-center text-xs btn-light border" href="#" role="button">Edit</a>
                </router-link>
  </div>
</div>
  </div>
  <div class="card-body border-b-2">
    <div class="row" >
  <div class="col-8">
      <p class="font-weight-bold text-dark">E-mail:</p>
      <p class="text-dark">{{this.$store.state.currentUser.email}}</p>
  </div>
  <div class="col-4 text-end">
                <router-link
                  to="/editloginemail"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
      <a class="btn-md btn text-sm-center text-xs btn-light border" href="#" role="button">Edit</a>
                </router-link>
              </div>
            </div>
          </div>
          <div class="card-body border-b-2">
            <div class="row">
              <div class="col-8">
                <p class="font-weight-bold text-dark">Mobile Phone Number:</p>
                <p class="text-dark">+447823038483</p>
              </div>
              <div class="col-4 text-end">
                <router-link
                  to="/editloginnumber"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
      <a class="btn-md btn text-sm-center text-xs btn-light border" href="#" role="button">Edit</a>
                </router-link>
              </div>
            </div>
          </div>
          <div class="card-body border-b-2">
            <div class="row">
              <div class="col-8">
                <p class="font-weight-bold text-dark">Password:</p>
                <p class="text-dark">********</p>
              </div>
              <div class="col-4 text-end">
                <router-link
                  to="/editpassword"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
      <a class="btn-md btn text-sm-center text-xs btn-light border" href="#" role="button">Edit</a>
                </router-link>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-8">
                <p class="font-weight-bold text-dark">
                  Two-Step Verification (2SV) Settings:
                </p>
                <p class="text-dark">
                  Manage your Two Step Verification (2SV) Authenticators
                </p>
              </div>
              <div class="col-4 text-end">
                <router-link
                  to="/buyersigninsecsetting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Personal Information"
                >
      <a class="btn-md btn text-sm-center text-xs btn-light border" href="#" role="button">Edit</a>
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- end col-md-9-1 -->
    </div>

  </div>
</template>
        