<template>
  <!-- main content -->
  <div class="box">

        <div class="row">
          <div class="pl-3 col-sm-12 col-lg-12 col-md-12 product-container">
            <div id="wrapper-site">

              <div class="tab-content" id="v-pills-tabContent">

<!--All-Orders-->
                <div class="row p-2">
                  <span class="text h5 pl-5 font-weight-bold  font-weight-normal">
                  Create Listings
                  </span>
                  <hr>
                  
                <div class="">

                <div class="container pl-3 card text-sm">

                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Category:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="col-lg-6 col-md-6 col-sm-12 text-sm form-control text-primary select-auto border" placeholder="X category" type="text" name="category" disabled>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Sub-category:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="col-lg-6 col-md-6 col-sm-12 text-sm form-control text-primary select-auto border" placeholder="X sub category" type="text" name="subcategory" disabled>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 pb-3 text-dark">Add Photos(0)</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <p class="p-3">Add at least 2 photos for this category.
First picture - is the title picture. You can change the order of photos: just grab your photos and drag</p>
                         <p class="p-3 col-lg-2 col-sm-2 col-xs-2" type="file"><span class="h2 p-4 border box" ><i class="pt-2 fa fa-plus-circle fa-lg"></i></span> </p>
                         <div class="p-3 row col-12">
                         <p class="col-lg-2 col-sm-4 col-xs-2 p-3"><img src="img/product/6.jpg"/></p>
                         <p class="col-lg-2 col-sm-4 col-xs-2 p-3"><img src="img/product/8.jpg"/></p>
                         <p class="col-lg-2 col-sm-4 col-xs-2 p-3"><img src="img/product/11.jpg"/></p>
                         <p class="col-lg-2 col-sm-4 col-xs-2 p-3"><img src="img/product/13.jpg"/></p>
                         </div>
                   <p class="p-3">Each picture must not exceed 5 Mb
Supported formats are *.jpg, *.gif and *.png</p>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 pt-3">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Title:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="text-sm form-control" type="text" value="" name="" />
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Custom label (SKU):</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control text-sm col-10" type="text" value="" name="" />
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">UPC:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control col-lg-4 col-md-6 text-sm col-sm-12" type="text" value="" name="" />
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Condition:</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <select class="col-lg-4 col-md-6 col-sm-12 form-control text-sm select-auto border" type="text" name="">
                        <option value="">-</option>
                        <option value="">New</option>
                        <option value="">Seller refurbished</option>
                        <option value="">Used</option>
                        <option value="">For parts or not working</option>
                        </select>
                    </div>
                </div>


                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <p class="pt-3 text-dark">Description:</p>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12"> 
                    
                        <div class="form-group">
                        <textarea class="form-control border-2" rows="5" value="" name="" ></textarea>
                        </div>
                    </div>
                </div>
      
      
                </div>

                <div class="container pl-3 card text-sm">
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 h6 text-dark">Selling details</p>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Format</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <select class="col-8 form-control text-sm select-auto border" type="text" name="">
                        <option value="">Action-style</option>
                        <option value="">Fixed price</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Duration</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-6">
                        <p class="pt-4 text-dark"></p>
                        <select class="col-8 form-control text-sm select-auto border" type="text" name="">
                        <option value="">3 days</option>
                        <option value="">5 days</option>
                        <option value="">7 days</option>
                        <option value="">10 days</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Price</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <p class="p-2 text-dark">Starting Price</p>
                        <input class="col-lg-10 col-md-10 col-sm-8 form-control" value="" name=""  placeholder="£" type="text"/>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <p class="p-2 text-dark">Buy It Now Price</p>
                        <input class="col-lg-10 col-md-10 col-sm-8 form-control" value="" name=""  placeholder="£"  type="text"/>
                    </div>
                    <div class="col-12">
                        <p class="pt-3 text-dark">Best Offer</p>
                        <p class="text-xs"><input type="checkbox" value="" name="" /> Increase your chances of selling by allowing buyers to negotiate a price. You can choose to accept, decline or make a counter offer. Learn more
Let buyers make offers. Allowing offers increases your chance of selling by 3-7% based on recent individual seller listing performance.</p>
                       
                    </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Quantity</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-4">
                        <input class="col-10 form-control" value="" name="" type="text"/>
                    </div>
                        <p class="text-xs p-2"><input type="checkbox" value="" name="" /> Set a slot</p>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Payment Option</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                        <p class="text-xs pt-3"><input type="checkbox" value="" name="" /> Paypal</p>
                        <p class="text-xs pt-3"><input type="checkbox" value="" name="" /> CARD Payment</p>
                        <p class="text-xs pt-4">Additional Checkout instruction (shows in your list)</p>
                        <textarea type="" name="" value="" class="pl-3 form-control border-2"></textarea>
                       
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Return options</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        <p class="text-xs pt-3 p-2"><input type="checkbox" value="" name="" /> Domestic returns accepted</p>
                        <p class="text-xs pt-3 p-2"><input type="checkbox" value="" name="" /> international returns accepted</p>
                        <p class="text-xs pt-3 p-2">Returns will not be accepted unless you select domestic or international return options above. The item can always be returned if it doesn't match the listing description. Learn more</p>
                    </div>
                </div>
                </div>
                <div class="container pl-3 card text-sm">
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 h6 text-dark">Shipping details</p>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <p class="pt-3 text-dark">Domestic shipping</p>
                    </div>
                    <div class="row col-lg-8 col-md-8 col-sm-12">
                        
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <select class="form-control text-sm select-auto border" type="text" name="">
                        <option value="">Flat: Same cost to all buyers</option>
                        <option value="">Calculated: Cost varies by buyer location</option>
                        <option value="">Freight: Large items over 150 Ibs</option>
                        <option value="">No shipping: Local pickup only</option>
                        </select>
                        <p class="pt-3 text-dark">Shipping rate table</p>
                    
                        
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <select class="form-control text-sm select-auto border" type="text" name="">
                        <option value="">Economy Service (2 to 9 business days)</option>
                        <option value="">Economy Service with Adult signature(2 to 9 business days)</option>
                        <option value="">Economy Shipping Service (2 to 9 business days)</option>
                        <option value="">Economy Shipping Service with Adult signature(2 to 9 business days)</option>
                        <option value="">Standard Service (3 to 5 business days)</option>
                        <option value="">Standard Service with Adult signature(3 to 5 business days)</option>
                        <option value="">Standard Shipping Service (3 to 5 business days)</option>
                        <option value="">One-day Service (3 to 5 business days)</option>
                        <option value="">One-day Service with Adult signature(3 to 5 business days)</option>
                        <option value="">Freight (Flat rate)</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <input class="form-control" value="" name="" placeholder="£" type="text"/>
                    </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Package weight & dimensions</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p class="text-dark">Package type</p>
                        <select class="form-control text-sm select-auto border" type="text" name="">
                        <option value="">Letter</option>
                        <option value="">Large Envelope</option>
                        <option value="">Package(or thick envelope)</option>
                        <option value="">Large package</option>
                        <option value="">No shipping: Local pickup only</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-8">
                        <p class="text-dark">Dimensions</p>
                        <input class="form-control" value="" name="" placeholder="" type="text"/>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-8">
                        <p class="text-dark">in. X</p>
                        <input class="form-control" value="" name="" placeholder="" type="text"/>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-8">
                        <p class="text-dark">in. X</p>
                        <input class="form-control" value="" name="" placeholder="" type="text"/>
                    </div>
                        <p class="text-xs p-2"><input type="checkbox" value="" name="" /> Regular package</p>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Item location</p>
                    </div>
                    <div class="row col-lg-8 col-md-8 col-sm-8">
                        
                        <p class="text-xs pt-3"><input type="hidden" value="current location" name="Item_location" /> current location</p>
                    </div>
                </div>
                </div>
                <div class="container pl-3 card text-sm">
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 h6 text-dark">Fees</p>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <p class="pt-3 h6 text-primary">£0.00</p>
                    </div>
                </div>
                </div>

                <div class="col-12 p-3">
                <div class="row">
                    <div class="col-lg-2 col-md-2 pr-3 pl-3 pt-2 pb-2">
                        <button type="" class="col-12 border border-primary text-primary btn-light btn">List item</button>
                    </div>
                    <div class="col-lg-2 col-md-2 pr-3 pl-3 pt-2 pb-2">
                        <button type="" class="text border border-dark btn-light btn col-12 btn ">Preview</button>
                    </div>
                    <div class="col-lg-2 col-md-2 pr-3 pl-3 pt-2 pb-2">
                        <button type="" class="text border-dark border col-12 btn-light btn border">Save to draft</button>
                    </div>
                    <div class="col-lg-2 col-md-2 pr-3 pl-3 pt-2 pb-2">
                        <button type="" class="col-12 btn text border-dark">Cancel</button>
                    </div>
                </div>
                </div>


                </div>
                </div>
              </div>
            </div>
          </div>

          <!-- end col-md-9-1 -->
        </div>

    <hr>
  </div>
</template>