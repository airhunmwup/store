<template>
  <!-- main content -->

  <!-- main content -->
  <div class="main-content">
    
        <div class="row">
    <div class="col-6 text-lg pl-3 text-left">
      </div><div class="col-6 h6 text-lg pr-3 text-right">
      <span class="text-left pr-0 p-1"><router-link
        to="/Product Listing"
        data-toggle="collapse"
        data-target=".navbar-collapse"
        title="close"
      >
        <i class="fa fa-close"></i></router-link
      ></span></div>
        </div>
    <div id="wrapper-site">
      <div id="content-wrapper col-6">
        <section class="page-home">
          <div class="container">
            <label for="formFileMultiple" class="h4 form-label"
              >Add Images</label
            >
            <div class="content border p-5">
              <div class="content box text-center border p-5">
                <label for="formFileMultiple" class="form-label"
                  >input image file in JPG format only
                </label>
                <input
                  class="form-control"
                  type="file"
                  id="formFileMultiple"
                  multiple
                />
              </div>
            </div>
            <div class="row">
            <span class="col-6"><div><button class="form-control btn-info"><i class="fa fa-upload"></i> Upload</button></div></span>
            <span class="col-6"><div><button class="form-control">Cancel</button></div></span>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- breadcrumb -->
    <nav class="breadcrumb-bg">
      <div class="container no-index">
        <div class="breadcrumb">
          <ol>
            <li></li>
          </ol>
        </div>
      </div>
    </nav>
  </div>
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