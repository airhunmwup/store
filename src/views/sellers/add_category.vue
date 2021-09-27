<template>
  <!-- main content -->

  <!-- main content -->
  <div class="">
    <div class="content pb-5">
      <div class="row pt-2">
        <div class="container align-content-center">
          <div class="">
            <div class="card-header text-center text-dark align-content-center">
              <div class="row">
                <div class="col-6">
                  <p class="text-left text-dark font-weight-bold h6 m-3">
                    Select Category
                  </p>
                </div>
              </div>
            </div>
            <ul class="list-group list-group-flush" v-for="category of setCategoryList" :key="category.id">
              <li class="list-group-item border">
                      <a href=""
                        data-toggle="collapse"
                        data-target=".navbar-collapse"
                        @click="subcatpagelink(category.id, category.cat_name)"
                        >
                <div class="row">
                  <div class="col-sm">{{ category.cat_name }}</div>
                  <div class="col-sm">
                    <p class="text-right text-xl"><b
                          class="
                            fa fa-angle-right fa-lg
                            text-dark
                            font-weight-bold
                          "
                        ></b>
                    </p>
                  </div>
                </div>
                      </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr />
  </div>
</template>
<script>
import { mapState } from 'vuex'
export default {
  methods: {
    subcatpagelink(pid,catname) {
        this.$router.push({
        name: 'addsubcategory',
        params: {data: pid,cat_name: catname}
      });
    }
  },
  computed: mapState(['setCategoryList','setSubCategoryList'])
}
</script>
