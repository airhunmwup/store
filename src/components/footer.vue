<template>
  <div>
    <footer class="footer-one">
      <div id="tiva-copyright">
        <div class="container">
          <div class="row">
            <div class="text-center col-lg-12">
              <span>
                <a target="_blank" href="https://www.rejee.co.uk">{{
                  footerText
                }}</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="back-to-top">
      <a href="#">
        <i class="fa fa-long-arrow-up"></i>
      </a>
    </div>

    <!-- menu mobie left -->
    <div class="mobile-top-menu d-md-none">
      <button type="button" class="close" aria-label="Close">
        <i class="zmdi zmdi-close"></i>
      </button>
      <div
        id="desktop_verticalmenu"
        class="tiva-verticalmenu block"
        data-count_showmore="17"
      >
        <div class="box-content block-content">
          <div class="verticalmenu" role="navigation">
            <ul class="menu level1">
              <li class="item parent">
                <a href="#" class="hasicon" title="SIDE TABLE">
                  <img src="img/home/table-lamp.png" alt="img" />My Account</a
                >
                <span
                  class="arrow collapsed"
                  data-toggle="collapse"
                  data-target="#SIDE-TABLE"
                >
                  <i class="zmdi zmdi-minus"></i>
                  <i class="zmdi zmdi-plus"></i>
                </span>
                <div
                  class="subCategory collapse"
                  id="SIDE-TABLE"
                  aria-expanded="true"
                  role="status"
                >
                  <ul>
                    <li class="item">
                      <router-link
                        to="/orderpage"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Home"
                      >
                        <i class="fa fa-file-text-o"></i>
                        <span> My Orders</span></router-link
                      >
                    </li>
                    <li class="item">
                      <router-link
                        to="/Wish list"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Wish list"
                      >
                        <i class="fa fa-shopping-bag"></i>
                        <span> Wishlist</span>
                      </router-link>
                    </li>
                    <li class="item">
                      <router-link
                        to="/User Detail"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="User detail"
                      >
                        <i class="fa fa-user"></i>
                        <span> My Details</span>
                      </router-link>
                    </li>
                    <li class="item">
                      <router-link
                        to="/Change Password"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Change Password"
                      >
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <span> Change Password</span>
                      </router-link>
                    </li>
                    <li class="item">
                      <router-link
                        to="/Address Book"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Address Book"
                      >
                        <i class="fa fa-address-book"></i>
                        <span> Address Book</span>
                      </router-link>
                    </li>
                    <li class="item">
                      <router-link
                        to="/Payment Method"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Payment Method"
                      >
                        <i class="fa fa-credit-card"></i>
                        <span> Payment Methods</span>
                      </router-link>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="item group-category-img parent group">
                <a href="#" class="hasicon" title="TABLE LAMP">
                  <img src="img/home/table-store.png" alt="img" />Shop by
                  Categories</a
                >
                <span
                  class="arrow collapsed"
                  data-toggle="collapse"
                  data-target="#table-lamp"
                >
                  <i class="zmdi zmdi-minus"></i>
                  <i class="zmdi zmdi-plus"></i>
                </span>
                <div
                  class="subCategory collapse"
                  id="table-lamp"
                  aria-expanded="true"
                  role="status"
                >
                  <div class="item">
                    <div class="menu-content">
                      <div class="col-xs-12">
                        <span class="menu-title">Coventry dining</span>
                        <ul>
                          <li>
                            <a href="#">Accessories</a>
                          </li>
                          <li>
                            <a href="#">Activewear</a>
                          </li>
                          <li>
                            <a href="#">ASOS Basic Tops</a>
                          </li>
                          <li>
                            <a href="#">Bags &amp; Purses</a>
                          </li>
                          <li>
                            <a href="#">Beauty</a>
                          </li>
                          <li>
                            <a href="#">Coats &amp; Jackets</a>
                          </li>
                          <li>
                            <a href="#">Curve &amp; Plus Size</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-xs-12">
                        <span class="menu-title">Amara stools</span>
                        <ul>
                          <li>
                            <a href="#">Accessories</a>
                          </li>
                          <li>
                            <a href="#">Activewear</a>
                          </li>
                          <li>
                            <a href="#">ASOS Basic Tops</a>
                          </li>
                          <li>
                            <a href="#">Bags &amp; Purses</a>
                          </li>
                          <li>
                            <a href="#">Beauty</a>
                          </li>
                          <li>
                            <a href="#">Coats &amp; Jackets</a>
                          </li>
                          <li>
                            <a href="#">Curve &amp; Plus Size</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-xs-12">
                        <span class="menu-title">Kingston dining</span>
                        <ul>
                          <li>
                            <a href="#">Accessories</a>
                          </li>
                          <li>
                            <a href="#">Activewear</a>
                          </li>
                          <li>
                            <a href="#">ASOS Basic Tops</a>
                          </li>
                          <li>
                            <a href="#">Bags &amp; Purses</a>
                          </li>
                          <li>
                            <a href="#">Beauty</a>
                          </li>
                          <li>
                            <a href="#">Coats &amp; Jackets</a>
                          </li>
                          <li>
                            <a href="#">Curve &amp; Plus Size</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-xs-12">
                        <span class="menu-title">Ellinger dining</span>
                        <ul>
                          <li>
                            <a href="#">Accessories</a>
                          </li>
                          <li>
                            <a href="#">Activewear</a>
                          </li>
                          <li>
                            <a href="#">ASOS Basic Tops</a>
                          </li>
                          <li>
                            <a href="#">Bags &amp; Purses</a>
                          </li>
                          <li>
                            <a href="#">Beauty</a>
                          </li>
                          <li>
                            <a href="#">Coats &amp; Jackets</a>
                          </li>
                          <li>
                            <a href="#">Curve &amp; Plus Size</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
</template>

<script>
export default {
  data() {
    return {
      footerText: "Copyright REJEE.co.uk 2021",
    };
  },
};
</script>