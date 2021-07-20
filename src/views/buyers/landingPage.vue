<template>
  <!-- main content -->

  <!-- main content -->
  <!-- main -->
  <div>
    <!-- breadcrumb -->

    <div class="appion">
      <!-- breadcrumb -->
      <ul class="hs full">
        <router-link
          v-for="category of categoryList"
          :key="category.id"
          to="/categorie page"
          data-toggle="collapse"
          data-target=".navbar-collapse"
          title="Home"
        >
          <li class=" item text-dark  text-sm text-center font-weight-regular">{{category.cat_name}}</li></router-link
        >
      </ul>
    </div>

    <ul class="hax d-xs-none -lg">
      <li class="">
        <a href="#">
          <img
            class="hax"
            src="img/home/effect4.jpg"
            alt="banner-1"
            title="banner-1"
          />
        </a>
      </li>
      <li class="">
        <a href="#">
          <img
            class="hax"
            src="img/home/effect2.jpg"
            alt="banner-1"
            title="banner-1"
          />
        </a>
      </li>
    </ul>
    <!-- main content -->
    <div class="main-content">
      <!-- main -->

      <div class="appion">
        <div class="col-12">
          <p class="h3 text-dark">Newly listed</p>
          <p class="text-dark text-right">
            <b class="">
              <router-link
                class=""
                to="/Product Page"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="Home"
                >see all
              </router-link></b
            >
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
              <div class=" p-2">
                <img src="img/product/3.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/5.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/9.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/8.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/11.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/6.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
                  </div>
                </div>
              </div>
            </router-link>
          </li>
        </div>
      </div>
      <!--each sections from down below will be resend update from different categories eg like the vehicle way they under, just display only for-->

      <div class="appion">
        <div class="col-12">
          <p class="h3 text-dark">Vehicles</p>
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
              <div class=" p-2">
                <img src="img/product/10.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/2.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/4.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/15.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/13.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/16.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
                  </div>
                </div>
              </div>
            </router-link>
          </li>
        </div>
      </div>
      <!--search history go display under here , stuff way he don check before-->

      <div class="appion">
        <div class="col-12">
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
              <div class=" p-2">
                <img src="img/product/10.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/22.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/13.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/17.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/16.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/14.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
                  </div>
                </div>
              </div>
            </router-link>
          </li>
        </div>
      </div>

      <div class="appion">
        <div class="col-12">
          <p class="h3 text-dark">Property to Rent</p>
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
              <div class=" p-2">
                <img src="img/product/12.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/6.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/8.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/4.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/7.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
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
              <div class=" p-2">
                <img src="img/product/4.jpg" class="" alt="Product" />
                <div class="row p-1">
                  <div class="content col-12">
                    <p class="text-lg text-dark">Product name</p>
                    <p>New</p>
                    <p class="font-weight-bold text-lg text-dark">£149.99</p>
                    <p>Free P&P</p>
                    <p class="font-weight-bold text-dark">12 sold</p>
                  </div>
                  <div class="col-6">
                    <span class="text align-text-bottom">location</span>
                  </div>
                  <div class="col-6 justify-content-end text-right">
                    <span class="text align-text-bottom item-right"
                      ><i class="fa fa-lg fa-heart-o"></i>
                    </span>
                  </div>
                </div>
              </div>
            </router-link>
          </li>
        </div>
      </div>
    </div>

    <div id="home3" class="pt-3">
      <footer class="footer-one">
    <hr />
        <div class="inner-footer">
          <div class="container col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="footer-top">
              <div class="row pl-5">
                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block">Buy</div>
                      <ul>
                        <li>
                          <router-link
                            to="/register"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Registration</router-link
                          >
                        </li>
                        <li>
                          <router-link
                            to="/money back guarantee"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >REJEE Money back Guarantee</router-link
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="block-content pt-3">
                      <div class="title-block">Sell</div>
                      <ul>
                        <li>
                          <router-link
                            to="/Start selling"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Start Selling</router-link
                          >
                        </li>
                        <li>
                          <router-link
                            to="/Start selling guide"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >How to sell</router-link
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block">About REJEE</div>
                      <ul>
                        <li>
                          <a
                            href="https://find-and-update.company-information.service.gov.uk/company/13151308"
                            >Company info</a
                          >
                        </li>
                        <li>
                          <router-link
                            to="/User Privacy"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Policies</router-link
                          >
                        </li>
                        <li>
                          <router-link
                            to="/User Agreement"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >User Agreement</router-link
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block">Help & Contact</div>
                      <ul>
                        <li>
                          <router-link
                            to="/Resolut Center"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Resolution Center</router-link
                          >
                        </li>
                        <li>
                          <router-link
                            to="/selling"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >Seller Center</router-link
                          >
                        </li>
                        <li>
                          <router-link
                            to="/managing_returns_missing_items_and_refunds_for_sellers"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                            >REJEE Returns</router-link
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3">
                  <div class="block">
                    <div class="block-content">
                      <div class="title-block">Stay Connected</div>
                      <ul>
                        <li>
                          <a href="https://www.facebook.com/RejeeLtd"
                            ><i class="fa fa-facebook"></i> Facebook</a
                          >
                        </li>
                        <li>
                          <a href="https://instagram.com/rejeecompany"
                            ><i class="fa fa-instagram"></i> Instagram</a
                          >
                        </li>
                        <li>
                          <a href="https://twitter.com/rejeecompany"
                            ><i class="fa fa-twitter"></i> Twitter</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</template>


<script>

import axios from "axios";

export default {
  name: "landingPage",
  data() {
    return {
      categoryList: [
        
      ],
    };
  },
  methods: {
    getUser(){
    }
  }
  ,
  mounted() {
  },
  async created(){
    try{
      const res = await axios.get('http://localhost:8000/api/category');
     
     this.categoryList = res.data;
    }catch (e){
      console.error(e);
    }
  }
}
</script>
