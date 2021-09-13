<template>
    <!-- main content -->
    
    
    
    <!-- main content -->
    
    <div class="">
    
        <div class="content pb-5">
    
            <div class="row pt-2">
    
                <div class="container align-content-center">
    
                    <div class="card">
    
                        <div class="card-header text-center text-dark align-content-center">
    
                            <div class="row">
    
                                <div class="col-12 col-lg-6">
    
                                    <p class="text-left text-dark font-weight-bold h6 m-3">
    
                                        Select Subcategory
    
                                    </p>
    
                                </div>
    
                                <div class="col-6 col-xs-12">
    
                                    <form method="post" class="std" id="customer-form">
    
                                        <div class="
    
                            justify-content-center
    
                            text-center
    
                            input-group
    
                            pt-2
    
                            pb-2
    
                          ">
    
                                            <div class="input-group-prepend">
    
                                                <div class="input-group-text bg-light" id="btnGroupAddon">
    
                                                    <i class="fa fa-search"></i>
    
                                                </div>
    
                                            </div>
    
                                            <input type="text" id="name" name="name" placeholder="Find subcategory..." class="form-control border" value="" />
    
                                            <button class="btn-light btn text-primary text-sm border" type="submit" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
    
                            Search
    
                          </button>
    
                                        </div>
    
                                    </form>
    
                                </div>
    
                            </div>
    
                        </div>
    
                        <ul class="list-group list-group-flush">
    
                            <template v-for="subcat of setSubCategoryList">
    
                    <li class="list-group-item border" :key="subcat.id" v-if="subcat.cat_id == pid">
    
                    <div class="row">
    
                      <div class="col-sm">{{subcat.sub_catname}}</div>
    
                      <div class="col-sm">
    
                        <p class="text-right text-xl">
    
                          <a
    
                            data-toggle="collapse"
    
                            data-target=".navbar-collapse"
    
                            @click="category(subcat.sub_catname)"
    
                            ><b
    
                              class="
    
                                fa fa-angle-right fa-lg
    
                                text-dark
    
                                font-weight-bold
    
                              "
    
                            ></b>
    
                          </a>
    
                        </p>
    
                      </div>
    
                    </div>
    
                  </li>
</template>
              
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
    data() {
        return {
            pid: this.$route.params.data,
        }
    },
    methods: {
        category(name) {
            this.$router.push({
                name: 'newlisting',
                params: { data: name }
            }).catch(()=>{});
        }
    },
    computed: mapState(['setSubCategoryList']),
    created() {
        console.log(this.$route.params);
    }
}
</script>