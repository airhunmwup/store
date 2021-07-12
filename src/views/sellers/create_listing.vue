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
                        <p class="pt-3 text-dark">Title:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control" type="text" value="" name="" />
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Subtitle (£1.00):</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control" type="number" step="0.01" min="0.50" value="" name="" />
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Custom label (SKU):</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control col-10" type="text" value="" name="" />
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Category:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <select class="form-control col-lg-6 col-md-6 col-sm-12 text-primary select-auto border" type="text" name="">
                        <option value="">Fashion</option>
                        <option value="">Electronics</option>
                        <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Sub-category:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <select class="col-lg-6 col-md-6 col-sm-12 form-control text-primary select-auto border" type="text" name="">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">UPC:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="form-control col-lg-4 col-md-6 col-sm-12" type="text" value="" name="" />
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Condition:</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <select class="col-lg-4 col-md-6 col-sm-12 form-control text-primary select-auto border" type="text" name="">
                        <option value="">-</option>
                        <option value="">New</option>
                        <option value="">Seller refurbished</option>
                        <option value="">Used</option>
                        <option value="">For parts or not working</option>
                        </select>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Photos(0)</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                         <div id="my-strictly-unique-vue-upload-multiple-image" style="display: flex; justify-content: center;">
    <vue-upload-multiple-image
      @upload-success="uploadImageSuccess"
      @before-remove="beforeRemove"
      @edit-image="editImage"
      :data-images="images"
      idUpload="myIdUpload"
      editUpload="myIdEdit"
      ></vue-upload-multiple-image>
  </div>
                   
                    </div>
                </div>

                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Item specifics</p>
                    </div>
                    <div class="col-lg-10 col-md-10">
                <hr>

                        <p class="pt-2 text-dark font-weight-bold">Recommended</p>
                        <p class="pb-2 text-dark">Buyers frequently search for these item specifics</p>
                    <div class="box row p-2">
                    <div class="col-2  h3 text-center justify-content-center">
                      <span class="pt-2 fa fa-plus-circle fa-lg"></span>
                    </div>
                    <div class="col-10 text-left">
                        <p class="text-dark font-weight-bold">Improve your chances of selling</p>
                        <p class="text-dark">Add more details about your item</p>
                    </div>
                    </div>
                    <div class="row p-3">

                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Color</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Item Height</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Item Length</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Item Width</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Type</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Brand</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Style</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12 ">
                        <p class="p-2 text-dark">Material</p>
                    <ul class="row pb-2">
                    <li class="col-6"><input type="radio" value="" name="" /> 100% cotton </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Acacia </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Acacia Wood </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Acrylic </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Acrylic Blend </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Acrylic Glass </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Alder </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Aluminuim </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Ash </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Bakelite</li>
                    </ul>
                        <input class="col-8 p-2 form-control" type="text" value="" name="" />
                    </div>
                    </div>
                    <div class="row p-3">

                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Antique</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Department</p>
                    <ul class="row pb-2">
                    <li class="col-6"> <input type="radio" value="" name="" /> Baby </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Boys </li>
                    <li class="col-6">  <input type="radio" value="" name="" /> Girls </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Kids </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Teens </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Adults </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Men </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Unisex </li>
                    <li class="col-6"> <input type="radio" value="" name="" /> Women </li>
                    </ul>
                        <input class="col-8 form-control" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Additional Parts Required</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Assembly Required</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Indoor/Outdoor</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Assembly Status</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Item weight</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    </div>
                    <hr>

                <hr>

                        <p class="pt-2 text-dark font-weight-bold">Addition</p>
                        <p class="pb-2 text-dark">Buyers may also be interested in these item specifics</p>
                    <div class="row p-3">
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Set Includes</p>
                    <ul class="row pb-2">
                    <li class="col-6"><input value="" name="" type="radio"/> Bench </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Chair </li>
                    <li class="col-6"><input value="" name="" type="radio"/> Cushion </li>
                    <li class="col-6"><input value="" name="" type="radio"/> Garden Kneeler/Seat </li>
                    <li class="col-6"><input value="" name="" type="radio"/> Kneeling Mat/Pad </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Rolling Seat </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Table </li>
                    </ul>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Antique</p>
                        <input class="col-8 form-control" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Seating Capacity</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Time Period Manufactured</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Number of Item in Set</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12col-6">
                        <p class="p-2 text-dark">Features</p>
                    <ul class="row pb-2">
                    <li class="col-6"> <input value="" name="" type="radio"/> Adjustable</li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Adjustable Headrest </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Bucket Seat </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Canopy </li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Carvings </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Convertible </li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Cross Back </li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Cup Holder</li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Cushion Included </li>
                    </ul>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Theme</p>
                    <ul class="row pb-2">
                    <li class="col-6"> <input value="" name="" type="radio"/> Abstract</li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Airplanes </li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Anatomy </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Animals </li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Animals & Insects </li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Anime </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Arsenal F.C. </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Asian</li>
                    <li class="col-6">  <input value="" name="" type="radio"/> Awareness </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Ballerinas </li>
                    </ul>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Upholstery Fabric</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Year Manufactures</p>
                    <ul class="row pb-2">
                    <li class="col-6"> <input value="" name="" type="radio"/> 1980</li>
                    <li class="col-6"> <input value="" name="" type="radio"/> 1979 </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> 1978 </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> 1977 </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> 1976 </li>
                    </ul>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Firmness</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Country/Region of Manufacture</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Room</p>
                    <ul class="row pb-2">
                    <li class="col-6"><input value="" name="" type="radio"/> Any Room</li>
                    <li class="col-6"><input value="" name="" type="radio"/> Basement </li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Bathroom </li>
                    <li class="col-6"><input value="" name="" type="radio"/> Bedroom</li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Den</li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Dining Room</li>
                    <li class="col-6"><input value="" name="" type="radio"/> Entryway</li>
                    <li class="col-6"><input value="" name="" type="radio"/> Foyer</li>
                    <li class="col-6"><input value="" name="" type="radio"/> Garage</li>
                    <li class="col-6"> <input value="" name="" type="radio"/> Guestroom</li>
                    </ul>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Finish</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Original/Licensed Reproduction</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Personalized</p>
                        <input class="col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Pattern</p>
                        <input class="col-8 form-control" value="" name=""  type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum backrest Height</p>
                        <input class="col-8 form-control" value="" name=""  type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Required Tools</p>
                    <ul class="row pb-2">
                    <li class="col-6"><input value="" name="" type="radio"/> Drill</li>
                    <li class="col-6"><input value="" name="" type="radio"/> Hammer </li>
                    <li class="col-6"><input value="" name="" type="radio"/> No Tools Required </li>
                    <li class="col-6"><input value="" name="" type="radio"/> Screw driver</li>
                    <li class="col-6"><input value="" name="" type="radio"/> Wrench</li>
                    </ul>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Weight Capacity</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Shape</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Armest Height</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Backrest Height</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Care Instruction</p>
                    <ul class="row pb-2">
                    <li class="col-6"><input value="" name="" type="radio"/> Clean with Dampen Cloth </li>
                    <li class="col-6"><input value="" name="" type="radio"/> Clean with Wax </li>
                    <li class="col-6"><input value="" name="" type="radio"/> Oil Treatment Required </li>
                    </ul>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Custom Bundle</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    </div>

                    <div class="row p-3">

                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Distance from Floor to Bottom</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Handmade</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Armrest Height</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Height</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Lenght</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Seat Height</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Width</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Seat Depth</p>
                        <input class="col-8 form-control" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Seat Height</p>
                        <input class="col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    </div>
                    <hr>
                    </div>

                </div>

                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <p class="pt-3 text-dark">Description:</p>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12"> 
                    
                        <div class="form-group">
                        <textarea class="form-control border-2" rows="10" value="" name="" ></textarea>
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
                        <p class="pt-3 text-dark">Sales tax</p>
                    </div>
                    <div class="row col-lg-8  pt-3  col-md-8">
                        
                    <div class="col-4">
<p><input id="inputPounds" placeholder="%" class="col-10 form-control" type="number" oninput="taxConverter(this.value)" onchange="weightConverter(this.value)">£<span id='outputtax'></span></p>
                    </div>
                        <p class="text-xs p-2"><input type="checkbox" value="" name="" /> Also apply to shipping and handling costs</p>
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