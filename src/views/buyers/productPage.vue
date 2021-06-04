<template>
  <!-- main content -->
  <div id="home4">
    <div class="main-content pt-4">
      <div id="wrapper-site">
        <div id="content-wrapper">
          <div id="main">
            <div class="page-home">
              <!-- breadcrumb -->
              <div class="container">
                <div class="content">
                    
                  <div class="row">
                    <div class="title-product  col-lg-9 col-md-9 col-sm-9">
                        <h2>The link name here</h2>
                        <br>
                          <div class="cateTitle hasSubCategory open level1 text-dark">
                              <div class="row justify-end">
                              <div class="text-right">
                                  <span class="pr-2 pt-2"><b><i class="fa fa-exchange fa-rotate-90"></i></b><select class="select-title">
                                                                <option value="">Sort by</option>
                                                                <option value="">Name, A to Z</option>
                                                                <option value="">Name, Z to A</option>
                                                                <option value="">Price, low to high</option>
                                                                <option value="">Price, high to low</option>
                                                            </select></span>
                              </div>
                              <div class="text-right">
                            <a class="cateItem" 
                              data-toggle="collapse"
                              data-target="#filter" href="#">
                                  <span class="pr-2 pt-2"><b>filter <i class="fa fa-th"></i></b></span></a>
                              </div>
                              </div>

                              <!--sort section-->
                              
                            <div
                              class="subCategory collapse"
                              id="sort"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                
                                <div class="row product-container">
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b></b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Recommended
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Price</b> - lowest first
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Price</b> - Highest first
                                                        </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Year</b> - Newest first
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Year</b> - Oldest first
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-4"
                                    >
                                    <div class="content">
                                        
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b></b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Distance</b> - lowest first
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Distance</b> - Nearest first
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Date listed</b> - Newest first
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Date listed</b> - Oldest first
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-4"
                                    >
                                    <div class="content">
                                        
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b></b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Mileage</b> - lowest first
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           <b> Mileage</b> - Highest first
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <hr>
                              </div>
                            </div>
                              <!--filter section-->
                            <div
                              class="subCategory collapse"
                              id="filter"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                
                                <div class="row product-container">
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b>Make</b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Any
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Dell
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Polygon
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Newment
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           Asus
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Mac
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Vaio
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           Lettuce
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b>Model</b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Any
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Dell
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Polygon
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Newment
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           Asus
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Mac
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Vaio
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           Lettuce
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b>Body Style</b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Any
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Convertible
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Hatchback
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            MPV/People carrier
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           Saloon
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Estate
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            4x4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           Pick-up
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           Small car
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                           Other
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b>Transmission type</b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Any
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Automatic
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Manual
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div
                                    class="thumbnail-container"
                                    >
                                    <div class="content">
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b>Conditon</b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Any
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            New
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Used
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content pb-2">
                                                <h3 class="title-product"><b>By Price</b></h3>
                                                <span>Min </span><input name="price" class="border form-control col-6" type="number" min="10"/>
                                                
                                                <span>max </span><input name="price" class="border form-control  col-6" type="number" min="10"/>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content pb-2">
                                                <h3 class="title-product"><b>Year</b></h3>
                                                <span>Min </span><input name="price" class="border form-control col-6" max="2021" type="number" min="2001"/>
                                                
                                                <span>max </span><input name="price" class="border form-control  col-6" max="2021" type="number" min="2001"/>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content pb-2">
                                                <h3 class="title-product"><b>Mileage</b></h3>
                                                <span>Min </span><input name="price" class="border form-control col-6" type="number" min="10"/>
                                                
                                                <span>max </span><input name="price" class="border form-control  col-6" type="number" min="10"/>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                            <div class="new-item-content">
                                                <h3 class="title-product"><b>Fuel type</b></h3>
                                                <ul class="scroll-product">
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox" checked>
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Any
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Diesel
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Electric
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Petrol
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Flex
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Hybrid
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <label class="check">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <a href="#">
                                                            Plug-in hybrid
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <hr>
                              </div>
                            </div>
                          </div>
                                        <!-- FEATURED CATEGORIES -->
                                <div class="title-product">
                                <div class="row product-container">
                                    <div
                                    class="thumbnail-container col-6 pb-3 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        <img src="img/product/4.jpg" class="border" alt="Product" />
                                        <p class="text-dark">Product name</p>
                                        <p class="text-dark"><b>£12.00</b></p>
                                        <p class="text-dark">location</p>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        <img src="img/product/4.jpg" class="border" alt="Product" />
                                        <p class="text-dark">Product name</p>
                                        <p class="text-dark"><b>£12.00</b></p>
                                        <p class="text-dark">location</p>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        <img src="img/product/4.jpg" class="border" alt="Product" />
                                        <p class="text-dark">Product name</p>
                                        <p class="text-dark"><b>£12.00</b></p>
                                        <p class="text-dark">location</p>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        <img src="img/product/1.jpg" class="border" alt="Product" />
                                        <p class="text-dark">Product name</p>
                                        <p class="text-dark"><b>£12.00</b></p>
                                        <p class="text-dark">location</p>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        <img src="img/product/4.jpg" class="border" alt="Product" />
                                        <p class="text-dark">Product name</p>
                                        <p class="text-dark"><b>£12.00</b></p>
                                        <p class="text-dark">location</p>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        <img src="img/product/24.jpg" class="border" alt="Product" />
                                        <p class="text-dark">Product name</p>
                                        <p class="text-dark"><b>£12.00</b></p>
                                        <p class="text-dark">location</p>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        <img src="img/product/14.jpg" class="border" alt="Product" />
                                        <p class="text-dark">Product name</p>
                                        <p class="text-dark"><b>£12.00</b></p>
                                        <p class="text-dark">location</p>
                                    </div>
                                    </div>
                                    <div
                                    class="thumbnail-container pb-3 col-6 col-sm-6 col-md-4 col-lg-3"
                                    >
                                    <div class="content">
                                        <img src="img/product/11.jpg" class="border" alt="Product" />
                                        <p class="text-dark">Product name</p>
                                        <p class="text-dark"><b>£12.00</b></p>
                                        <p class="text-dark"> location</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        </div>

                    <!-- Side bar Cataloge starts here-->
                    <div
                      class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-3"
                    >
                      <!-- category menu -->
                      <div class="sidebar-block">
                        <div class="title-block">Shop by Categories</div>
                        <div class="block-content">
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#livingroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">Living Room</a>
                            <div
                              class="subCategory collapse"
                              id="livingroom"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">Side Table</a>
                                <div
                                  class="subCategory collapse"
                                  id="subCategory-fruits"
                                  aria-expanded="true"
                                  role="status"
                                >
                                  <div class="cateTitle">
                                    <a href="#" class="cateItem">Side Table</a>
                                  </div>
                                  <div class="cateTitle">
                                    <a href="#" class="cateItem">FIREPLACE</a>
                                  </div>
                                  <div class="cateTitle">
                                    <a href="#" class="cateItem">FIREPLACE</a>
                                  </div>
                                  <div class="cateTitle">
                                    <a href="#" class="cateItem">floor lamp</a>
                                  </div>
                                  <div class="cateTitle">
                                    <a href="#" class="cateItem">ottoman</a>
                                  </div>
                                  <div class="cateTitle">
                                    <a href="#" class="cateItem">armchair</a>
                                  </div>
                                  <div class="cateTitle">
                                    <a href="#" class="cateItem">cushion</a>
                                  </div>
                                </div>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">FIREPLACE</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">FIREPLACE</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">floor lamp</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">ottoman</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">armchair</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">cushion</a>
                              </div>
                            </div>
                          </div>
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#bathroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">Bathroom</a>
                            <div
                              class="subCategory collapse"
                              id="bathroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">TOMATO</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">BROCCOLI</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">CABBAGE</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">CUCUMBER</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">EGGPLANT</a>
                              </div>
                            </div>
                          </div>
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#diningroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">Dining Rooom</a>
                            <div
                              class="subCategory collapse"
                              id="diningroom"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">DRY BREAD</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">BREAD SLICES</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">FRENCH BREAD</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">BLACK BREAD</a>
                              </div>
                            </div>
                          </div>
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#bedroom"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">BedRoom</a>
                            <div
                              class="subCategory collapse"
                              id="bedroom"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">ORANGE JUICES</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">TOMATO JUICES</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">APPLE JUICES</a>
                              </div>
                            </div>
                          </div>
                          <div class="cateTitle hasSubCategory open level1">
                            <span
                              class="arrow collapsed collapse-icons"
                              data-toggle="collapse"
                              data-target="#kitchen"
                              aria-expanded="false"
                              role="status"
                            >
                              <i class="zmdi zmdi-minus"></i>
                              <i class="zmdi zmdi-plus"></i>
                            </span>
                            <a class="cateItem" href="#">Kitchen</a>
                            <div
                              class="subCategory collapse"
                              id="kitchen"
                              aria-expanded="true"
                              role="status"
                            >
                              <div class="cateTitle">
                                <a href="#" class="cateItem">ORANGE JUICES</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">TOMATO JUICES</a>
                              </div>
                              <div class="cateTitle">
                                <a href="#" class="cateItem">APPLE JUICES</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- best seller -->
                      <div class="sidebar-block"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      footerText: "Copyright REJEE.co.uk 2021",
    };
  },
};
</script>