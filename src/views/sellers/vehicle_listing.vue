<template>
  <!-- main content -->
  <div class="container">

    <!--All-Orders-->

        <div class="row justify-center " >

<!--recently viewed-->
                <div class="row col-sm-12 col-lg-8 col-md-8">
                  <span class="text p-4 text-dark h4 font-weight-bold">
                   New vehicle Listing
                  </span>
                  <div class="" >
                    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Categories</label>
  </div>
  <div class="col-auto">
              <router-link
                to="/addcategory"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="Select category"
              >
                <p class="btn btn-sm border btn-light">
                  <span class="fa fa-angle-double-right rounded"></span></p
              ></router-link>
  </div>
  <div class="col-auto">
              <p class=" underline">{{cat_name}} , {{category}}</p>
              <span class="text-xs" v-text="errors.product_subcat"></span>
  </div>
  <div class="col-12">
              <div class="form-group">
                <div class="p-2 shadow-inner rounded">
                  <div class="pt-3 pb-3">
                    <input type="file" class="rounded btn-sm btn"
                    style="display:none"
                    @change="uploadImage($event)"
                    ref="imageupload"/>
                    <a
                      class="btn btn-sm btn-light border rounded"
                      @click="$refs.imageupload.click()">
                      <span class="fa fa-plus"></span>
                    </a>
                <span class="font-weight-bold"> Add Photos</span>
                    <span style="color: red; font-size: 12px;" v-text="errors.product_image1"></span>
                  </div>
                  <div class="row">
                    <div class="col-6 col-lg-3" v-for="img in imagePreview" :key="img">
                      <img :src="img" style="width: 10rem" />
                    </div>
                  </div>
                  <div class="col-6 col-lg-3" >
                    <img :src="imgreq" style="width: 10rem" />
                  </div>
                  <!-- <button class="btn btn-sm btn-primary" 
                  >Delete</button>
                </div> -->
              </div>
              <p class="text-xs">Photo: 0/4 . Choose your listing's main photo first.</p>
            </div>
  </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Year</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_condition"></span>
                <select
                  class="
                    form-control
                    
                    select-auto
                    border                   
                  "
                  @change="vehicle_year($event)"
                  type="text"
                  name=""
                >
                  <option value=""></option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1976">1976</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div class="form-group">
                <label class="font-weight-bold">Make</label>
                <span style="color: red; font-size: 12px;" v-text="errors.vehicle_make"></span>
                <input type="text" class="form-control" v-model="formData.vehicle_make" />
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div class="form-group">
                <label class="font-weight-bold">Model</label>
                <span style="color: red; font-size: 12px;" v-text="errors.vehicle_model"></span>
                <input type="text" class="form-control" v-model="formData.vehicle_model" />
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Number of owners</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_condition"></span>
                <select
                  class="
                    form-control
                    
                    select-auto
                    border
                  "
                  @change="vehicle_owner_no($event)"
                  type="text"
                  name=""
                >
                  <option value=""></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3+">3+</option>
                  <option value="Not sure">Not sure</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Price</label>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-md"
                    :style="errorStyle(errors.vehicle_price)"
                      >£</span
                    >
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    aria-label="Small"
                    placeholder="0.00"
                    aria-describedby="inputGroup-sizing-sm"
                    v-model.number="formData.vehicle_price"
                  />
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="font-weight-bold">Millage</label>
                <span style="color: red; font-size: 12px;" v-text="errors.vehicle_millage"></span>
                <input type="number" class="form-control" v-model="formData.vehicle_mmillage" />
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Engine type</label>
                <span style="color: red; font-size: 12px;"></span>
                <select
                  class="
                    form-control
                    
                    select-auto
                    border
                  "
                  type="text"
                  name=""
                >
                  <option value=""></option>
                  <option value="Manual transmission">Manual transmission</option>
                  <option value="Automatic transmission">Automatic transmission</option>
                  <option value="Hybrid">Hybrid</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Fuel type</label>
                <span style="color: red; font-size: 12px;"></span>
                <select
                  class="
                    form-control
                    
                    select-auto
                    border
                  "
                  type="text"
                  name=""
                >
                  <option value=""></option>
                  <option value="Petrol">Petrol</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Electric">Electric</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Engine size</label>
                <span style="color: red; font-size: 12px;"></span>
                <select
                  class="
                    form-control
                    
                    select-auto
                    border
                  "
                  type="text"
                  name=""
                >
                  <option value=""></option>
                  <option value="+1">+1</option>
                  <option value="+2">+2</option>
                  <option value="+3">+3</option>
                  <option value="+3">+4</option>
                  <option value="+3">+5</option>
                  <option value="+3">+6</option>
                  <option value="+3">+7</option>
                  <option value="+3">+8</option>
                  <option value="+2">+9</option>
                  <option value="+3">+10</option>
                  <option value="+3">+11</option>
                  <option value="+3">+12</option>
                  <option value="+3">+13</option>
                  <option value="+3">+14</option>
                  <option value="+3">+15</option>
                  <option value="+3">+16</option>
                  <option value="+3">+17</option>
                  <option value="+3">+18</option>
                  <option value="+2">+19</option>
                  <option value="+3">+20</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">Description</label>
                <span style="color: red; font-size: 12px;" v-text="errors.vehicle_desc"></span>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  v-model="formData.vehicle_desc"
                ></textarea>
              </div>
            </div>
      <div class="card-header p-2 col-lg-12 col-md-12 col-sm-12">
        <div class="p-2">
            <span class="mb-2 text-xs">By creating this listing, you confirm that it complies with REJEE Stores <router-link
                            to="/User Privacy"
                            data-toggle="collapse"
                            class="text-primary underline"
                            data-target=".navbar-collapse"
                            >User policies</router-link> and all applicable laws.
            </span>
        </div>
      </div>

</div>
    <div class="row">
      <div class="col-lg-6 col-12 p-2">
        <button type="button" class="form-control btn-sm btn btn-light border">
          Cancel
        </button>
      </div>
      <div class="col-lg-6 col-12 p-2">
        <button
          type="button"
          class="form-control btn-sm btn btn-success border"
          @click="createVehicleListing"
        >
          Save
        </button>
      </div>
    </div>
        </div>
      </div>

          <div class="pb-5"></div>
      <!-- end col-md-9-1 -->
    </div>
  </div>
</template>
<script>
import User from '../../apis/User';
export default {
  data() {
    return {
      category: this.$route.params.data,
      cat_name : this.$route.params.cat_name,
      cat_id : this.$route.params.cat_id,
      subcat_id : this.$route.params.subcat_id,
      imagePreview: [],
      image: [],
      num: 1,
      imgreq: "",
      tableId: "",
      formData: {
        product_subcat: this.$route.params.data,
        product_catname: this.$route.params.cat_name,
        product_userid: this.$store.state.currentUser.id,
        product_cat_id : this.$route.params.cat_id,
        product_subcat_id : this.$route.params.subcat_id,
        vehicle_make: "",
        vehicle_model: "",
        vehicle_year: "",
        vehicle_owner_no: "",
        vehicle_price: "",
        vehicle_millage: "",
        vehicle_desc: "",
        imageData: [],
      },
      errors: {

      }
    }
  },
  methods: {
    uploadImage(event) {
      const file = event.target.files[0];
      if(file){
        if(this.num <= 4){
          this.image.push(file);
          this.formData.imageData.push(file);
          this.formData.testImage = file;
          this.imagePreview.push(URL.createObjectURL(file));
          this.num++;
        }else{
          console.log('max 4');
        }
      }
    },
    imageUploadHandler(){
      const fd = new FormData();
      if(this.image.length == 1){
        fd.append('product_image1', this.image[0]);
      }else if(this.image.length == 2){
        fd.append('product_image1', this.image[0]);
        fd.append('product_image2', this.image[1]);
      }else if(this.image.length == 3){
        fd.append('product_image1', this.image[0]);
        fd.append('product_image2', this.image[1]);
        fd.append('product_image3', this.image[2]);
      }else if(this.image.length == 4){
        fd.append('product_image1', this.image[0]);
        fd.append('product_image2', this.image[1]);
        fd.append('product_image3', this.image[2]);
        fd.append('product_image4', this.image[3]);
      }

      let config = {
        header : {
          'Content-Type' : 'image/jpeg',
          'Access-Control-Allow-Origin': '*'
        }
      }

      fd.append('id', this.tableId);

      User.upload(fd, config).then(res => {
        console.log(res);
      }).catch(err => {
        console.log(err);
      });
    },
    createVehicleListing(){
      if(this.image.length >= 1){
        const  formData2 = new FormData(); 
               formData2.append('product_subcat', this.formData.product_subcat); 
               formData2.append('product_catname', this.formData.product_catname);
               formData2.append('product_userid', this.formData.product_userid);
               formData2.append('product_cat_id', this.formData.product_cat_id);  
               formData2.append('product_subcat_id', this.formData.product_subcat_id);
               formData2.append('vehicle_make', this.formData.vehicle_make); 
               formData2.append('vehicle_model', this.formData.vehicle_model); 
               formData2.append('vehicle_year', this.formData.vehicle_year);  
               formData2.append('vehicle_owner_no', this.formData.vehicle_owner_no);
               formData2.append('vehicle_price', this.formData.vehicle_price);
               formData2.append('vehicle_millage', this.formData.vehicle_millage);
               formData2.append('vehicle_desc', this.formData.vehicle_desc);              
               $.each(this.image, function (key, image) {
                  formData2.append(`images[${key}]`, image)
                })
           
          User.createvehiclelisting(formData2,{
            headers: { 'Content-Type': "multipart/form-data; charset=utf-8; boundary=" + Math.random().toString().substr(2)}
            }).then(res =>{
            this.errors = {};
            console.log(res.data);
            this.tableId = res.data.id;
            this.$router.push("/listings");
          }).catch(error => {
        if (!error.response) {
            // network error
            this.errorStatus = 'Error: Network Error';
        } else {
            this.errorStatus = error.response.data.message;
             console.log(error.response.data.message);
        }
      })
      }else{
        console.log('no image');
      }
      
      },
    conditionOption(event){
      this.formData.product_condition = event.target.value;
      console.log(this.formData);
    },
    shippingtypeOption(event){
      this.formData.product_shipping_type = event.target.value;
    },
    vehicle_owner_no(event){
      this.formData.vehicle_owner_no = event.target.value;
    },
    vehicle_year(event){
      this.formData.vehicle_year = event.target.value;
    },
    errorStyle(err){
      if(err){
        return {
          color: 'red',
          fontSize: '12px'
        }
      }
    }
  },
  computed: {
    product_total(){
      return this.formData.product_total = this.formData.product_price + this.formData.product_shipping_cost;
    }
  }
}
</script>