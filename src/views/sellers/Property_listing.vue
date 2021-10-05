<template>
  <!-- main content -->
  <div class="container">

    <!--All-Orders-->

        <div class="row justify-center text-sm" >

<!--recently viewed-->
                <div class="row col-sm-12 col-lg-6 col-md-6">
                  <span class="text p-4 text-dark h4 font-weight-bold">
                   New Property Listing
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
              <p class="text-sm underline">{{cat_name}} , {{category}}</p>
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
            
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="font-weight-bold">Title</label>
                <span style="color: red; font-size: 12px;" v-text="errors.property_name"></span>
                <input type="text" class="form-control" v-model="formData.property_name" />
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="font-weight-bold">Price</label>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-md"
                    :style="errorStyle(errors.property_price)"
                      >£</span
                    >
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    aria-label="Small"
                    placeholder="0.00"
                    aria-describedby="inputGroup-sizing-sm"
                    v-model.number="formData.property_price"
                  />
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Property type</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_condition"></span>
                <select
                  class="
                    form-control
                    text-sm
                    select-auto
                    border
                  "
                  type="text"
                  name=""
                  @change="property_type($event)"
                >
                  <option value=""></option>
                  <option value="Flat">Flat</option>
                  <option value="House">House</option>
                  <option value="Room only">Room only</option>
                  <option value="Town house">Town house</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Bedroom</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_condition"></span>
                <select
                  class="
                    form-control
                    text-sm
                    select-auto
                    border
                  "
                  @change="property_bedroom_no($event)"
                  type="text"
                  name=""
                >
                  <option value=""></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="4">5</option>
                  <option value="4">6</option>
                  <option value="4">7</option>
                  <option value="4">8</option>
                  <option value="4">9</option>
                  <option value="4">10</option>
                </select>
              </div>
            </div>
            <div class="col-12 col-lg-3">
              <div class="form-group">
                <label class="font-weight-bold">Bathroom</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_condition"></span>
                <select
                  class="
                    form-control
                    text-sm
                    select-auto
                    border
                  "
                  @change="property_bathroom_no($event)"
                  type="text"
                  name=""
                >
                  <option value=""></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="4">5</option>
                  <option value="4">6</option>
                  <option value="4">7</option>
                  <option value="4">8</option>
                  <option value="4">9</option>
                  <option value="4">10</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">Property description</label>
                <span style="color: red; font-size: 12px;" v-text="errors.product_desc"></span>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  v-model="formData.property_desc"
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
          @click="createPropertyListing"
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
        property_name: "",
        property_price: "",
        property_type: "",
        property_bedroom_no: "",
        property_bathroom_no: "",
        property_desc: "",
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
    createPropertyListing(){
      if(this.image.length >= 1){
        const  formData2 = new FormData(); 
               formData2.append('product_subcat', this.formData.product_subcat); 
               formData2.append('product_catname', this.formData.product_catname);
               formData2.append('product_userid', this.formData.product_userid);
               formData2.append('product_cat_id', this.formData.product_cat_id);  
               formData2.append('product_subcat_id', this.formData.product_subcat_id); 
               formData2.append('property_name', this.formData.property_name);  
               formData2.append('property_price', this.formData.property_price);
               formData2.append('property_type', this.formData.property_type);
               formData2.append('property_bedroom_no', this.formData.property_bedroom_no); 
               formData2.append('property_bathroom_no', this.formData.property_bathroom_no);
               formData2.append('property_desc', this.formData.property_desc);
               $.each(this.image, function (key, image) {
                  formData2.append(`images[${key}]`, image)
                })
           
          User.createpropertylisting(formData2,{
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
    property_type(event){
      this.formData.property_type = event.target.value;
      console.log(this.formData);
    },
    property_bedroom_no(event){
      this.formData.property_bedroom_no = event.target.value;
    },
    property_bathroom_no(event){
      this.formData.property_bathroom_no = event.target.value;
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