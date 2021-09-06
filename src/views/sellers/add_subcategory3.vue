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
        <p class="text-left text-dark font-weight-bold h6 m-3">Select Subcategory </p>
    </div>
    <div class="col-6 col-xs-12">
            <form method="post" class="std" id="customer-form">
              <div class="justify-content-center text-center input-group pt-2 pb-2">
    <div class="input-group-prepend ">
      <div class="input-group-text bg-light" id="btnGroupAddon"><i class="fa fa-search"></i></div>

    </div>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Find subcategory..."
                  class="form-control border"
                  value=""
                />
                <button
                  class="btn-light btn text-primary text-sm  border"
                  type="submit"
                  data-action="show-password"
                  data-text-show="Show"
                  data-text-hide="Hide"
                >
                  Search
                </button>
              </div>
            </form>
    </div>
  </div>

  </div>
  <ul class="list-group list-group-flush">
    <li v-for="subcategory in subcategories" v-bind:key="subcategory.id" class="list-group-item border">
  <div class="row">
    <div class="col-sm">
      {{subcategory.sub_catname}}
    </div>
    <div class="col-sm">
      <p class="text-right text-xl">
                <router-link
                  v-bind:to="'/newlisting3/' + subcategory.id"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                ><b class="fa fa-angle-right fa-lg text-dark font-weight-bold"></b>
                </router-link></p>
    </div>
  </div>
</li>
    <li class="list-group-item border">
  <div class="row">
    <div class="col-sm">
      Electronics
    </div>
    <div class="col-sm">
      <p class="text-right text-xl">
                <router-link
                  to="/newlisting3"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                ><b class="fa fa-angle-right fa-lg text-dark font-weight-bold"></b>
                </router-link></p>
    </div>
  </div>
</li>
    <li class="list-group-item border">
  <div class="row">
    <div class="col-sm">
      Fashion
    </div>
    <div class="col-sm">
      <p class="text-right text-xl">
                <router-link
                  to="/newlisting3"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                ><b class="fa fa-angle-right fa-lg text-dark font-weight-bold"></b>
                </router-link></p>
    </div>
  </div></li>
    <li class="list-group-item border">
  <div class="row">
    <div class="col-sm">
       Others
    </div>
    <div class="col-sm">
      <p class="text-right text-xl">
                <router-link
                  to="/newlisting"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                ><b class="fa fa-angle-right fa-lg text-dark font-weight-bold"></b>
                </router-link></p>
    </div>
  </div>
       </li>
  </ul>
</div>
                            </div>
                        </div>
                     </div>
                        <hr>
    </div>


</template>
<script>
import User from '../../apis/User';
    export default {
        props: ['cid'],
        data(){
            return{
                subcategories: {},
            }
        },
        methods:{
            
            loadSubCategories(){
                User.getSubCategoryList(this.cid)
                .then(response=>{
                        this.subcategories = response.data;
                     });
            }
        },
        created() {
            this.loadSubCategories()
        }
    }
</script>
