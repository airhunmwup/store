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
                        <p class="text-dark">Type:</p>
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
                        <p class="p-3 text-xs">Add at least 2 photos for this category.
First picture - is the title picture. You can change the order of photos: just grab your photos and drag</p>
                         <p class="p-3 col-lg-2 col-sm-2 col-xs-2" type="file"><span class="h2 p-4 border box" ><i class="pt-2 fa fa-plus-circle fa-lg"></i></span> </p>
                         <div class="p-3 row col-12">
                         <p class="border col-lg-2 col-sm-4 col-xs-2 p-3"><img src="img/product/6.jpg"/></p>
                         <p class="border col-lg-2 col-sm-4 col-xs-2 p-3"><img src="img/product/8.jpg"/></p>
                         <p class="border col-lg-2 col-sm-4 col-xs-2 p-3"><img src="img/product/11.jpg"/></p>
                         <p class="border col-lg-2 col-sm-4 col-xs-2 p-3"><img src="img/product/13.jpg"/></p>
                         </div>
                   <p class="p-3 text-xs">Each picture must not exceed 5 Mb
Supported formats are *.jpg, *.gif and *.png</p>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 pt-3">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Title:</p>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input class="border-2 text-sm form-control" type="text" value="" name="" />
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Condition:</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <select class="border-2 col-lg-4 col-md-6 col-sm-12 form-control text-sm select-auto border" type="text" name="">
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
      
                              
                        <p class="p-3 h6 text-dark">Item specifics</p>
                                       
                        <p class="pt-2 text-dark font-weight-bold">Recommended</p>
                        <p class="pb-2 text-dark">Buyers frequently search for these item specifics</p>
                    <div class="box row p-2">
                    <div class="col-2  h3 text-center justify-content-center">
                            <a class="" 
                              data-toggle="collapse"
                              data-target="#itemspec" href="#">
                      <span class="pt-2 fa fa-plus-circle fa-lg"></span>
                            </a>
                    </div>
                    <div class="col-10 text-left">
                        <p class="text-dark font-weight-bold">Improve your chances of selling</p>
                        <p class="text-dark">Add more details about your item</p>
                    </div>
                    </div>
                                           <div
                              class="subCategory collapse justify-content-center"
                              id="itemspec"
                              aria-expanded="true"
                              role="status"
                            >

                <div class="row p-2">
                    <div class="col-lg-12 col-md-12">

                    <div class="row p-3">

                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Color</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Item Height</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Item Length</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Item Width</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Type</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Brand</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Style</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
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
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Assembly Required</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Indoor/Outdoor</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Assembly Status</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Item weight</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
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
                        <input class="border-2 col-8 form-control" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Seating Capacity</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Time Period Manufactured</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Number of Item in Set</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
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
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Country/Region of Manufacture</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
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
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Original/Licensed Reproduction</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Personalized</p>
                        <input class="border-2 col-8 form-control" type="text" value="" name="" />
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Pattern</p>
                        <input class="border-2 col-8 form-control" value="" name=""  type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum backrest Height</p>
                        <input class="border-2 col-8 form-control" value="" name=""  type="text"/>
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
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Shape</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Armest Height</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Backrest Height</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
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
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    </div>

                    <div class="row p-3">

                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Distance from Floor to Bottom</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Handmade</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Armrest Height</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Height</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Lenght</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Seat Height</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Maximum Width</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Seat Depth</p>
                        <input class="border-2 col-8 form-control" type="text"/>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <p class="p-2 text-dark">Seat Height</p>
                        <input class="border-2 col-8 form-control"  value="" name="" type="text"/>
                    </div>
                    </div>
                    <hr>
                    </div>

                </div>

  </div>
      
                </div>

                <div class="container pl-3 card text-sm">
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="">
                        <p class="pt-3 h6 text-dark">Selling details</p>
                    </div>
                    <hr>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Format</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <select class="border-2 col-8 form-control text-sm select-auto border" type="text" name="">
                        <option value="">Action-style</option>
                        <option value="">Fixed price</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Duration</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-6">
                        <span class="">
                        <select class="border-2 col-8 form-control text-sm select-auto border" type="text" name="">
                        <option value="">3 days</option>
                        <option value="">5 days</option>
                        <option value="">7 days</option>
                        <option value="">10 days</option>
                        </select>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Price</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <p class="p-2 text-dark text-sm">Starting Price</p>
        <div class="input-group input-group-sm">
          <span
            class="text-dark p-2"
          >
            £ 
          </span>
          <input
            type="number"
            name=""
            placeholder="0.00"
            class="border-2 form-control"
            value=""
          />
        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p class="p-2 text-dark text-sm">Buy It Now Price</p>
        <div class="input-group input-group-sm">
          <span
            class="text-dark p-2"
          >
            £ 
          </span>
          <input
            type="number"
            name=""
            placeholder="0.00"
            class="border-2 form-control"
            value=""
          />
        </div>
                    </div>
                    <div class="col-12">
                        <p class="pt-3 text-dark">Best Offer</p>
                        <p class="pt-2 text-xs"><input type="checkbox" value="" name="" />  <span class="p-2"> Increase your chances of selling by allowing buyers to negotiate a price. You can choose to accept, decline or make a counter offer. Learn more
Let buyers make offers. Allowing offers increases your chance of selling by 3-7% based on recent individual seller listing performance.</span></p>
                       
                    </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="text-dark">Quantity</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-4">
                        <input class="border-2 col-10 form-control" value="" name="" type="text"/>
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
                    <div class="">
                        <p class="pt-3 h6 text-dark">Shipping details</p>
                    </div>
                    <hr>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <p class="text-dark font-weight-bold">Domestic shipping</p>
                    </div>
                    <div class="row col-lg-9 col-md-9 col-sm-12">
                        
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <select class="border-2 form-control text-sm select-auto border" type="text" name="">
                        <option value="">Flat: Same cost to all buyers</option>
                        <option value="">Calculated: Cost varies by buyer location</option>
                        <option value="">Freight: Large items over 150 Ibs</option>
                        <option value="">No shipping: Local pickup only</option>
                        </select>
                    </div>
                    <div class="pt-3 row col-lg-10 col-md-10 col-sm-10">
                        <p class="p-2 text-sm text-primary">Shipping rate table</p>
                        <div class="pt-2 col-lg-8 col-md-8 col-sm-10">
                        <select class="border-2 form-control text-sm select-auto border" type="text" name="">
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
                    <div class="col-lg-4 col-md-4 col-sm-4 form-group">
        <div class="input-group pt-2 input-group-sm">
          <span
            class="text-dark p-2"
          >
            £ 
          </span>
          <input
            type="number"
            name=""
            placeholder="0.00"
            class="border-2 form-control"
            value=""
          />
        </div>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="row p-2 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-3 col-md-3">
                        <p class="pt-3 text-dark font-weight-bold">Package weight & dimensions</p>
                    </div>
                    <div class="row col-lg-8 col-md-8">
                        
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p class="p-2 text-dark">Package type</p>
                        <select class="border-2 form-control text-sm select-auto border" type="text" name="">
                        <option value="">Letter</option>
                        <option value="">Large Envelope</option>
                        <option value="">Package(or thick envelope)</option>
                        <option value="">Large package</option>
                        <option value="">No shipping: Local pickup only</option>
                        </select>
                    </div>
                    <div class="row">
                        <p class="text-dark pt-3">Dimensions</p>
                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <input class="border-2 form-control" value="" name="" placeholder="" type="text"/>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <p class="text-dark pt-2"></p>
        <div class="input-group input-group-sm">
          <span
            class="text-dark p-2"
          >
            in. X 
          </span>
          <input
            type="number"
            name=""
            placeholder="0.00"
            class="border-2 form-control"
            value=""
          />
        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <p class="text-dark pt-2"></p>
        <div class="input-group input-group-sm">
          <span
            class="text-dark p-2"
          >
            in. X 
          </span>
          <input
            type="number"
            name=""
            placeholder="0.00"
            class="border-2 form-control"
            value=""
          />
        </div>
                    </div>
                    </div>
                        <p class="text-xs p-2"><input type="checkbox" value="" name="" /> Regular package</p>
                    </div>
                </div>
                <div class="row pt-5 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="col-lg-2 col-md-2">
                        <p class="pt-3 text-dark">Item location</p>
                    </div>
                    <div class="row col-lg-8 col-md-8 col-sm-8">
                        <div class="input-group input-group-sm">
                        <input
                            type="location"
                            id="location"
                            name="location"
                            placeholder="Location"
                            class="border-2 form-control"
                            value=""
                        />
                        </div>
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