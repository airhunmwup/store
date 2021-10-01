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
    
                                <div class="col-12 col-lg-6">
    
                                    <p class="text-left text-dark font-weight-bold h6 m-3">
    
                                        Select Subcategory
    
                                    </p>
    
                                </div>
    
                            </div>
    
                        </div>
    
                        <ul class="list-group list-group-flush">
    
                            <template v-for="subcat of setSubCategoryList">
    
                    <li class="list-group-item border" :key="subcat.id" v-if="subcat.cat_id == pid">
                          <a
                            href="#"
                            data-toggle="collapse"
    
                            data-target=".navbar-collapse"
    
                            @click="category(subcat.sub_catname,subcat.id)"
    
                            >
                    <div class="row">
    
                      <div class="col-sm">{{subcat.sub_catname}}</div>
    
                      <div class="col-sm">
    
                        <p class="text-right text-xl">
                            <b
    
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
            cat_name: this.$route.params.cat_name,
        }
    },
    methods: {
        category(name,id) {
            if (this.cat_name == 'Vehicles'){
            this.$router.push({
                name: 'vehiclelisting',
                params: { data: name, subcat_id: id, cat_id: this.pid, cat_name: this.cat_name }
            }).catch(()=>{});
            }else{
                if (this.cat_name == 'Properties'){
                this.$router.push({
                name: 'propertylisting',
                params: { data: name, subcat_id: id, cat_id: this.pid, cat_name: this.cat_name }
            }).catch(()=>{});
                }else{
                this.$router.push({
                name: 'newlisting',
                params: { data: name, subcat_id: id, cat_id: this.pid, cat_name: this.cat_name }
            }).catch(()=>{});
                }
                 }
        }
    },
    computed: mapState(['setSubCategoryList']),
    created() {
        console.log(this.$route.params);
    }
}
</script>