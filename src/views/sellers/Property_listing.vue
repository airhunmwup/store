<template>
  <!-- main content -->
  <div class="container">
<nav aria-label="breadcrumb" class="d-xs-none">
  <ol class="breadcrumb text-xs">
    <li class="breadcrumb-item text-primary"><a href="#">Your Account</a></li>
    <li class="breadcrumb-item text-primary" aria-current="page">Sellers hub</li>
    <li class="breadcrumb-item text-primary" aria-current="page">Listings</li>
    <li class="breadcrumb-item active" aria-current="page">Create Listings</li>
  </ol>
</nav>

<!--All-Orders-->
                  

                <div class="card">
                <div class="card-header p-3 ">
                  <span class="text h5 font-weight-bold  font-weight-normal">
                  <i class="fa fa-building"></i> Property Listings
                  </span>
                </div>
                <div class="card-body">
  <div class="row justify-content-center">
      <div class="row text-sm">
    <div class="col-12 p-2">
  <div class="form-group">
    <label class="font-weight-bold">Add Photos</label>
    <div class="col-12 shadow-inner rounded">
    <div class="pt-3 pb-3">
        <input type="file"  id="imageFile" class="rounded btn"/>
    <button type="file" class="btn btn-lg btn-light border rounded-circle"><span class="fa fa-plus"></span></button>
    </div>
    <div class="row">
    <div style="text-align:center;" class="col-6 col-lg-3">
        <img :src="img" style="width: 10rem">
        <a href="#" class="text-danger">remove</a>
    </div>
    <div class="col-6 col-lg-3">
        <img src="img/product/6.jpg" style="width: 10rem"/>
    </div>
    <div class="col-6 col-lg-3">
        <img src="img/product/4.jpg" style="width: 10rem"/>
    </div>
    <div class="col-6 col-lg-3">
        <img src="img/product/3.jpg" style="width: 10rem"/>
    </div>
    <div class="col-6 col-lg-3">
        <img src="img/product/13.jpg" style="width: 10rem"/>
    </div>
    </div>
</div>
  </div>
    </div>
    <div class="col-12">
  <div class="form-group">
    <label class="font-weight-bold">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </div>
    <label class="font-weight-bold text-dark">Where is this building located</label>
    <div class="col-12 col-lg-6">
  <div class="form-group">
    <label class="font-weight-bold">Address</label>
    <input type="text" class="form-control">
  </div>
    </div>
    <div class="col-12 col-lg-3">
  <div class="form-group">
    <label class="font-weight-bold">City</label>
    <input type="text" class="form-control">
  </div>
    </div>
    <div class="col-12 col-lg-3">
  <div class="form-group">
    <label class="font-weight-bold">State</label>
    <input type="text" class="form-control">
  </div>
    </div>
    <div class="col-12 col-lg-3">
  <div class="form-group">
    <label class="font-weight-bold">Postcode</label>
    <input type="text" class="form-control">
  </div>
    </div>
    <div class="col-12 col-lg-3">
  <div class="form-group">
    <label class="font-weight-bold">Country</label>
    <input type="text" class="form-control" placeholder="United Kingdom" disabled>
  </div>
    </div>
    <div class="row col-12">
    <div class="col-12 col-lg-4">
  <div class="form-group">
    <label class="font-weight-bold">Property types</label>
                        <select class="form-control text-sm select-auto border" type="text" name="">
                        <option value=""></option>
                        <option value="">House</option>
                        <option value="">Flats</option>
                        <option value="">Farm/Land</option>
                        </select>
  </div>
    </div>
    <div class="col-12 col-lg-4">
  <div class="form-group">
    <label class="font-weight-bold">Bedrooms</label>
                        <select class="form-control text-sm select-auto border" type="text" name="">
                        <option value=""></option>
                        <option value="">Studio</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10+</option>
                        </select>
  </div>
    </div>
    <div class="col-12 col-lg-4">
  <div class="form-group">
    <label class="font-weight-bold">Bedrooms</label>
                        <select class="col-lg-4 col-md-6 col-sm-12 form-control text-sm select-auto border" type="text" name="">
                        <option value="">-</option>
                        <option value="">New</option>
                        <option value="">Seller refurbished</option><!-- for goods that fall under this-->
                        <option value="">Used</option>
                        <option value="">For parts or not working</option><!-- for goods that fall under this-->
                        </select>
  </div>
    </div>
  </div>
    <div class="col-4 col-lg-2">
        
  <div class="form-group">
    <label class="font-weight-bold">Price</label>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-md">£</span>
  </div>
  <input type="text" class="form-control" aria-label="Small" placeholder="0.00" aria-describedby="inputGroup-sizing-sm">
</div>
  </div>
    </div>
      </div>
  </div>                         
                </div>
                <div class="card-footer text-sm">
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-6 col-lg-2">
                        <p class="pt-3 h6 text-dark">Total:</p>
                    </div>
                    <div class="col-6 col-lg-10">
                        <p class="pt-3 h6 text-primary">£ <span ></span></p>
                    </div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-12 p-2">
                    <button type="button" class="form-control btn-sm btn btn-light border">Cancel</button>
                </div>
                <div class="col-lg-6 col-12 p-2">
                    <button type="button" class="form-control btn-sm btn btn-success border">Save</button>
                </div>
                </div>
          <!-- end col-md-9-1 -->
        </div>

</template>