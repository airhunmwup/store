<template>
    <!-- footer -->
    <footer class="footer-one">
        <div id="tiva-copyright" class=" bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 align-items-center justify-content-md-start justify-content-sm-center justify-content-xs-center">
                        <span>
                            <b>Copyright © 2021 REJEE COMPANY LIMITED. All Rights Reserved.</b>
                      <router-link
                        to="/User Agreement"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="User Agreement"
                      > User Agreement | </router-link>
                      <router-link
                        to="/User Privacy"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="User Privacy"
                      >Privacy | </router-link>
                      <router-link
                        to="/Cookie Policy"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Cookies"
                      >Cookies </router-link>
                      <router-link
                        to="/Ad Choice"
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        title="Ad Choice"
                      >and AdChoice</router-link>
                        </span>
                    </div>
                    <div class="col-md-4 col-xs-12 align-items-center justify-content-md-end d-flex justify-content-xs-center">
                        <img src="img/SSL/PositiveSSL_SectigoTag_72dpi.png" class="col-6 img-thumbnail" alt="img">
                    </div>
                </div>
            </div>
        </div>
        
    </footer>

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