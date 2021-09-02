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
              <p class="ml-4 btn">{{category}}</p>
            </div>
            <div class="col-12 p-2">
              <div class="form-group">
                <label class="font-weight-bold">Add Photos</label>
                <div class="col-12 shadow-inner rounded">
                  <div class="pt-3 pb-3">
                    <input type="file" class="rounded btn"
                    style="display: none;" 
                    @change="uploadImage($event)"
                    ref="imageupload"/>
                    <button
                      type="file"
                      class="btn btn-lg btn-light border rounded-circle"
                      @click="$refs.imageupload.click()">
                      <span class="fa fa-plus"></span>
                    </button>
                    <button
                      type="file"
                      class="btn btn-lg btn-light border rounded-circle"
                      @click="load">
                      <span class="fa fa-plus"></span>
                    </button>
                  </div>
                  <div class="row">
                    <div class="col-6 col-lg-3" v-for="img in imagePreview" :key="img">
                      <img :src="img" style="width: 10rem" />
                    </div>
                    <!-- <div class="col-6 col-lg-3">
                      <img src="img/product/6.jpg" style="width: 10rem" />
                    </div>-->
                  </div>
                  <div class="col-6 col-lg-3" >
                    <img :src="imgreq" style="width: 10rem" />
                  </div>
                  <button class="btn btn-sm btn-primary" 
                  @click="loadimg">Upload</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="form-group">
                <label class="font-weight-bold">Title</label>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label class="font-weight-bold">Condition</label>
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
                >
                  <option value="">New</option>
                  <option value="">Seller refurbished</option>
                  <!-- for goods that fall under this-->
                  <option value="">Used</option>
                  <option value="">For parts or not working</option>
                  <!-- for goods that fall under this-->
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="font-weight-bold">Description</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
            </div>
            <div class="col-4 col-lg-2">
              <div class="form-group">
                <label class="font-weight-bold">Price</label>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-md"
                      >£</span
                    >
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    aria-label="Small"
                    placeholder="0.00"
                    aria-describedby="inputGroup-sizing-sm"
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
            <label class="font-weight-bold">Domestic shipping</label>
          </div>
          <div class="row col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-8 col-md-8 col-sm-12">
              <select
                class="border-2 form-control text-sm select-auto border"
                type="text"
                name=""
              >
                <option value="">Flat: Same cost to all buyers</option>
                <option value="">
                  Calculated: Cost varies by buyer location
                </option>
                <option value="">Freight: Large items over 150 Ibs</option>
                <option value="">No shipping: Local pickup only</option>
              </select>
            </div>
            <div class="pt-3 row col-lg-6 col-12">
              <label class="font-weight-bold">Shipping rate table</label>
              <div class="input-group input-group-sm mb-3">
                <select
                  class="border form-control text-sm select-auto border"
                  type="text"
                  name=""
                >
                  <option value="">
                    Economy Service (2 to 9 business days)
                  </option>
                  <option value="">
                    Economy Service with Adult signature(2 to 9 business days)
                  </option>
                  <option value="">
                    Economy Shipping Service (2 to 9 business days)
                  </option>
                  <option value="">
                    Economy Shipping Service with Adult signature(2 to 9
                    business days)
                  </option>
                  <option value="">
                    Standard Service (3 to 5 business days)
                  </option>
                  <option value="">
                    Standard Service with Adult signature(3 to 5 business days)
                  </option>
                  <option value="">
                    Standard Shipping Service (3 to 5 business days)
                  </option>
                  <option value="">
                    One-day Service (3 to 5 business days)
                  </option>
                  <option value="">
                    One-day Service with Adult signature(3 to 5 business days)
                  </option>
                  <option value="">Freight (Flat rate)</option>
                </select>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                  <label class="font-weight-bold"></label>
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-md"
                        >£</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      aria-label="Small"
                      placeholder="0.00"
                      aria-describedby="inputGroup-sizing-sm"
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
              <select
                class="form-control text-sm select-auto border"
                type="text"
                name=""
              >
                <option value="">Letter</option>
                <option value="">Large Envelope</option>
                <option value="">Package(or thick envelope)</option>
                <option value="">Large package</option>
                <option value="">No shipping: Local pickup only</option>
              </select>
            </div>
            <div class="row">
              <label class="font-weight-bold">Dimensions</label>
              <div class="col-lg-4 col-md-4 col-sm-8">
                <div class="form-group">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-md"
                        >weight</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      aria-label="Small"
                      placeholder="0.00"
                      aria-describedby="inputGroup-sizing-sm"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-8">
                <div class="form-group">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-md"
                        >in .x</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      aria-label="Small"
                      placeholder="0.00"
                      aria-describedby="inputGroup-sizing-sm"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-8">
                <div class="form-group">
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-md"
                        >in .y</span
                      >
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      aria-label="Small"
                      placeholder="0.00"
                      aria-describedby="inputGroup-sizing-sm"
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
            <p class="pt-3 h6 text-primary">£0.00</p>
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
        >
          Save
        </button>
      </div>
    </div>

    <!-- end col-md-9-1 -->
  </div>
</template>
<script>
import User from '../../apis/User';
export default {
  data() {
    return {
      category: this.$route.params.data,
      imagePreview: [],
      image: [],
      num: 1,
      imgreq: "",
    }
  },
  methods: {
    uploadImage(event) {
      const file = event.target.files[0];
      if(file){
        if(this.num <= 4){
          this.image.push(file);
          this.imagePreview.push(URL.createObjectURL(file));
          this.num++;
        }else{
          console.log('max 4');
        }
      }
    },
    loadimg(){
      User.image().then(res => {
        let prev = "http://localhost:8000/api/images";
        this.imgreq = prev;
      })
    },
    load(){
      
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
          'Content-Type' : 'image/jpep',
          'Access-Control-Allow-Origin': '*'
        }
      }
      User.upload(fd, config).then((response) => {
        console.log(response);
      }).catch(error => {
        console.log(error);
      })
    }
  }
}
</script>