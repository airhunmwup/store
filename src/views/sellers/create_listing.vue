<template>
  <!-- main content -->
  <div class="container">
    <nav aria-label="breadcrumb" class="d-xs-none">
      <ol class="breadcrumb text-xs">
        <li class="breadcrumb-item text-primary">
          <a href="#">Your Account</a>
        </li>
        <li class="breadcrumb-item text-primary" aria-current="page">
          Sellers hub
        </li>
        <li class="breadcrumb-item text-primary" aria-current="page">
          Listings
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Create Listings
        </li>
      </ol>
    </nav>

    <!--All-Orders-->

    <div class="card">
    <form ref="myForm" enctype="multipart/form-data">
      <div class="card-header p-3">
        <span class="text h5 font-weight-bold font-weight-normal">
          Create Listings
        </span>
      </div>
      <div class="card-body">
        <div class="row justify-content-center">
          <div class="row text-sm">
            <div class="col-12 col-lg-10 p-2">
              <label class="font-weight-bold">Category</label>
              <router-link
                to="/addcategory"
                data-toggle="collapse"
                data-target=".navbar-collapse"
                title="Select category"
              >
                <p class="ml-4 btn btn-sm border btn-light">
                  <span class="fa fa-angle-double-right rounded"></span></p
              ></router-link>
              <p class="ml-4 btn">{{cat_name}} , {{category}}</p>
              <span style="color: red; font-size: 12px;" v-text="errors.product_subcat"></span>
            </div>
            <div class="col-12 p-2">
              <div class="form-group">
                <label class="font-weight-bold">Add Photos</label>
                <div class="col-12 shadow-inner rounded">
                  <div class="pt-3 pb-3">
                    <input type="file" class="rounded btn"
                    style="display:none"
                    @change="uploadImage($event)"
                    ref="imageupload"/>
                    <a
                      class="btn btn-lg btn-light border rounded-circle"
                      @click="$refs.imageupload.click()">
                      <span class="fa fa-plus"></span>
                    </a>
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
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="font-weight-bold">Title</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_name"></span>
                <input type="text" class="form-control" v-model="formData.product_name" />
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label class="font-weight-bold">Condition</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_condition"></span>
                <select
                  class="
                    col-lg-4 col-md-6 col-sm-12
                    form-control
                    text-sm
                    select-auto
                    border
                  "
                  type="text"
                  name=""
                  @change="conditionOption($event)"
                >
                  <option value="">Select Condition</option>
                  <option value="New">New</option>
                  <option value="Seller refurbished">Seller refurbished</option>
                  <!-- for goods that fall under this-->
                  <option value="Used">Used</option>
                  <option value="For parts or not working">For parts or not working</option>
                  <!-- for goods that fall under this-->
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">Description</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_desc"></span>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  v-model="formData.product_desc"
                ></textarea>
              </div>
            </div>
            <div class="col-4 col-lg-2">
              <div class="form-group">
                <label class="font-weight-bold">Price</label>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-md"
                    :style="errorStyle(errors.product_price)"
                      >£</span
                    >
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    aria-label="Small"
                    placeholder="0.00"
                    aria-describedby="inputGroup-sizing-sm"
                    v-model.number="formData.product_price"
                  />
                </div>
              </div>
            </div>
            <div class="col-4 col-lg-2">
              <div class="form-group">
                <label class="font-weight-bold">Quantity</label>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-md"
                    :style="errorStyle(errors.product_quantity)"
                      >#</span
                    >
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    aria-label="Small"
                    placeholder=""
                    aria-describedby="inputGroup-sizing-sm"
                    v-model.number="formData.product_quantity"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-header p-2 col-lg-12 col-md-12 col-sm-12">
        <div class="p-2">
          <p class="h6 text-dark">Shipping details</p>
        </div>
      </div>
      <div class="card-body text-sm">
        <div class="row p-2 col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <span style="color: red; font-size: 12px;" v-text="errors.product_shipping_type"></span>
            <label class="font-weight-bold">Domestic shipping</label>
          </div>
          <div class="row col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-8 col-md-8 col-sm-12">
              <select
                class="border-2 form-control text-sm select-auto"
                type="text"
                name=""
                @change="shippingtypeOption($event)"
              > 
                <option value="">Select shipping type</option>
                <option value="Flat: Same cost to all buyers">
                  Flat: Same cost to all buyers</option>
                <option value="Calculated: Cost varies by buyer location">
                  Calculated: Cost varies by buyer location
                </option>
                <option value="Freight: Large items over 150 Ibs">
                  Freight: Large items over 150 Ibs</option>
                <option value="No shipping: Local pickup only">
                  No shipping: Local pickup only</option>
              </select>
            </div>
            <div class="pt-3 row col-lg-6 col-12">
              <label class="font-weight-bold">Shipping rate table    
                <span style="color: red; font-size: 12px;" v-text="errors.product_shipping_rate"></span>
              </label>
              
              <div class="input-group input-group-sm mb-3">
                <select
                  class="border form-control text-sm select-auto"
                  type="text"
                  name=""
                  @change="shippingRateOption($event)"
                >
                  <option value="">Select shipping rate</option>
                  <option value="Economy Service (2 to 9 business days)">
                    Economy Service (2 to 9 business days)
                  </option>
                  <option value="Economy Service with Adult signature(2 to 9 business days)">
                    Economy Service with Adult signature(2 to 9 business days)
                  </option>
                  <option value="Economy Shipping Service (2 to 9 business days)">
                    Economy Shipping Service (2 to 9 business days)
                  </option>
                  <option value="Economy Shipping Service with Adult signature(2 to 9
                    business days)">
                    Economy Shipping Service with Adult signature(2 to 9
                    business days)
                  </option>
                  <option value="Standard Service (3 to 5 business days)">
                    Standard Service (3 to 5 business days)
                  </option>
                  <option value="Standard Service with Adult signature(3 to 5 business days)">
                    Standard Service with Adult signature(3 to 5 business days)
                  </option>
                  <option value="Standard Shipping Service (3 to 5 business days)">
                    Standard Shipping Service (3 to 5 business days)
                  </option>
                  <option value="One-day Service (3 to 5 business days)">
                    One-day Service (3 to 5 business days)
                  </option>
                  <option value="One-day Service with Adult signature(3 to 5 business days)">
                    One-day Service with Adult signature(3 to 5 business days)
                  </option>
                  <option value="Freight (Flat rate)">Freight (Flat rate)</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                  <label class="font-weight-bold">
                  </label>
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-md"
                      :style="errorStyle(errors.product_shipping_cost)"
                        >£</span
                      >
                    </div>
                    <input
                      type="number"
                      class="form-control"
                      aria-label="Small"
                      placeholder="0.00"
                      aria-describedby="inputGroup-sizing-sm"
                      v-model.number="formData.product_shipping_cost"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <label class="font-weight-bold mb-2"
              >Package weight & dimensions</label
            >
          </div>
          <div class="row col-lg-8 col-md-8">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <label class="font-weight-bold">Type</label>
              <span style="color: red; font-size: 12px;" v-text="errors.product_package_type"></span>
              <select
                class="form-control text-sm select-auto border"
                type="text"
                name=""
                @change="packageTypeOption($event)"
              >
                <option value="">Select package type</option>
                <option value="Letter">Letter</option>
                <option value="Large Envelope">Large Envelope</option>
                <option value="Package(or thick envelope)">Package(or thick envelope)</option>
                <option value="Large package">Large package</option>
                <option value="No shipping: Local pickup only">No shipping: Local pickup only</option>
              </select>
            </div>
            <div class="row">
              <label class="font-weight-bold">Dimensions</label>
              <div class="col-lg-4 col-md-4 col-sm-8">
                <div class="form-group">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-md"
                      :style="errorStyle(errors.product_package_weight)"
                        >weight</span
                      >
                    </div>
                    <input
                      type="number"
                      class="form-control"
                      aria-label="Small"
                      placeholder="0.00"
                      aria-describedby="inputGroup-sizing-sm"
                      v-model.number="formData.product_package_weight"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-8">
                <div class="form-group">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-md"
                      :style="errorStyle(errors.product_package_length)"
                        >in .x</span
                      >
                    </div>
                    <input
                      type="number"
                      class="form-control"
                      aria-label="Small"
                      placeholder="0.00"
                      aria-describedby="inputGroup-sizing-sm"
                      v-model.number="formData.product_package_length"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-8">
                <div class="form-group">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-md"
                      :style="errorStyle(errors.product_package_width)">in .y</span
                      >
                    </div>
                    <input
                      type="number"
                      class="form-control"
                      aria-label="Small"
                      placeholder="0.00"
                      aria-describedby="inputGroup-sizing-sm"
                      v-model.number="formData.product_package_width"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer text-sm">
        <div class="row p-2 col-lg-12 col-md-12 col-sm-12">
          <div class="col-6 col-lg-2">
            <p class="pt-3 h6 text-dark">Total:</p>
          </div>
          <div class="col-6 col-lg-10">
            <p class="pt-3 h6 text-primary">£{{product_total ? product_total : "0.00"}}</p>
          </div>
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
          @click="createListing"
        >
          Save
        </button>
      </div>
    </div>
    </form>
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
        product_name: "",
        product_condition: "",
        product_desc: "",
        product_price: "",
        product_quantity: "",
        imageData: [],
        product_shipping_type: "",
        product_shipping_rate: "",
        product_shipping_cost: "",
        product_package_type: "",
        product_package_weight: "",
        product_package_length: "",
        product_package_width: "",
        product_total: "0.00",
        testImage: "",
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
    createListing(){
      if(this.image.length >= 1){
        const  formData2 = new FormData(this.$refs.myForm); 
               formData2.append('product_subcat', this.formData.product_subcat); 
               formData2.append('product_catname', this.formData.product_catname);
               formData2.append('product_userid', this.formData.product_userid);
               formData2.append('product_cat_id', this.formData.product_cat_id);  
               formData2.append('product_subcat_id', this.formData.product_subcat_id); 
               formData2.append('product_name', this.formData.product_name);  
               formData2.append('product_condition', this.formData.product_condition);
               formData2.append('product_desc', this.formData.product_desc); 
               formData2.append('product_price', this.formData.product_price);
               formData2.append('product_quantity', this.formData.product_quantity);
               formData2.append('product_shipping_type', this.formData.product_shipping_type);
               formData2.append('product_shipping_rate', this.formData.product_shipping_rate);
               formData2.append('product_shipping_cost', this.formData.product_shipping_cost);
               formData2.append('product_package_type', this.formData.product_package_type);
               formData2.append('product_package_weight', this.formData.product_package_weight);
               formData2.append('product_package_length', this.formData.product_package_length);
               formData2.append('product_package_width', this.formData.product_package_width);
               formData2.append('product_total', this.formData.product_total);
               $.each(this.image, function (key, image) {
                  formData2.append(`images[${key}]`, image)
                })
           
          User.createlisting(formData2,{
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
             document.getElementById("alat").innerHTML = error.response.data.message;
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
    shippingRateOption(event){
      this.formData.product_shipping_rate = event.target.value;
    },
    packageTypeOption(event){
      this.formData.product_package_type = event.target.value;
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