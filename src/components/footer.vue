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