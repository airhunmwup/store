<template>
  <div>
    <!-- footer -->
    <footer class="footer-one">
		
        <div id="tiva-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 align-items-center justify-content-md-start justify-content-sm-center justify-content-xs-center">
                        <span>
                            Copyright © 2021 REJEE COMPANY LIMITED. All Rights Reserved.
                      <router-link
                        to="/User Agreement"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="User Agreement"
                      >User Agreement,</router-link>
                      <router-link
                        to="/User Privacy"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="User Privacy"
                      >Privacy,</router-link>
                      <router-link
                        to="/Cookie Policy"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Cookies"
                      >Cookies,</router-link>
                      <router-link
                        to="/AdChoice"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="AdChoice"
                      >Do not sell my personal information and AdChoice</router-link>
                        </span>
                    </div>
                    <div class="col-md-4 col-xs-12 align-items-center justify-content-md-end d-flex justify-content-xs-center">
                        <img src="img/SSL/PositiveSSL_SectigoTag_72dpi.png" class="col-6 img-thumbnail" alt="img">
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