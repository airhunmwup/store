<template>
  <!-- main content -->

  <!-- main content -->
  <div class="main-content">
    <div id="wrapper-site" class="pt-5 justify-content-center">
      <div id="content-wrapper">
        <section class="page-home">
          <div class="container justify-content-center col-9">
            <label for="formFileMultiple" class="text-dark h4 form-label"
              >Add Images</label
            >
            <div class="content border p-5">
              <div class="content box text-center border p-5">
                <label for="formFileMultiple" class="form-label"
                  >upload image files in JPG format only
                </label>
                <input
                  class="form-control"
                  type="file"
                  id="formFileMultiple"
                  multiple
                />
              </div>
            </div>
            <div class="row pt-3">
              <span class="col-4">
                <router-link
                  to="/Create New Listing"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="back"
                  ><div>
                    <button class="form-control">Cancel</button>
                  </div>
                </router-link></span
              >
              <span class="col-4">
              </span>
              <span class="col-4">
                <router-link
                  to="/Upload Product Image"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                  title="Upload images"
                >
                  <div>
                    <button
                      class="btn-success form-control"
                      data-link-action="sign-in"
                      type="submit"
                    >
                      <i class="fa fa-upload"></i> Upload
                    </button>
                  </div></router-link
                ></span
              >
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