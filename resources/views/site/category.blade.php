@extends('site.layout.master')

@include('site.seo.categoryschema')

@section('content')

        <!--Breadcrumb section starts-->
        <div class="breadcrumb-section bg-h" style="background-image: url(images/breadcrumb/breadcrumb_1.jpg)">
            <div class="overlay op-5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="breadcrumb-menu">
                            <h2>Property Listing</h2>
                            <span><a href="home-v1.html">Início</a></span>
                            <span>Property Listing - Grid View</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb section ends-->
        <!--Listing Filter starts-->
        <div class="filter-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <!--Sidebar starts-->
                        <div class="sidebar-left">
                            <div class="widget filter-widget">
                                <form class="hero__form v2 filter">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-4 col-sm-6 col-12 mb-3">
                                            <select class="hero__form-input  form-control custom-select">
                                                <option>Select Location </option>
                                                <option>New York</option>
                                                <option>California</option>
                                                <option>Washington</option>
                                                <option>New Jersey</option>
                                                <option>Los angeles</option>
                                                <option>Florida</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-4 col-sm-6 col-12 mb-3">
                                            <select class="hero__form-input  form-control custom-select">
                                                <option>Property Status</option>
                                                <option>Any</option>
                                                <option>For Rent</option>
                                                <option>For Sale</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-4 col-sm-6 col-12 mb-3">
                                            <select class="hero__form-input  form-control custom-select">
                                                <option>Property Type</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Land</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-4 col-sm-6 col-12 mb-3">
                                            <select class="hero__form-input  form-control custom-select">
                                                <option>Max rooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-12 col-lg-4 col-sm-6 col-12 mb-3">
                                            <div class="filter-sub-menu style1 v1">
                                                <div class="dropdown-filter"><span>More Filters </span></div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <select class="hero__form-input  form-control custom-select  mb-20">
                                                                <option>Bed</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 pl-0">
                                                            <select class="hero__form-input  form-control custom-select  mb-20">
                                                                <option>Bath</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <select class="hero__form-input  form-control custom-select  mb-20">
                                                                <option>Agents</option>
                                                                <option>Bob Haris</option>
                                                                <option>Ross buttler</option>
                                                                <option>Andrew Saimons</option>
                                                                <option>Steve Austin</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <select class="hero__form-input  form-control custom-select  mb-20">
                                                                <option>Agencies</option>
                                                                <option>Onyx Equities</option>
                                                                <option>OVG Real Estate</option>
                                                                <option>Oxford Properties*</option>
                                                                <option>Cortland</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="filter-sub-area style1">
                                                                <div class="filter-title mb-20">
                                                                    <p>Price : <span><input type="text" id="amount_two"></span></p>
                                                                </div>
                                                                <div id="slider-range_two" class="price-range mb-30">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="filter-sub-area style1">
                                                                <div class="filter-title  mb-20">
                                                                    <p>Area : <span><input type="text" id="amount_one"></span></p>
                                                                </div>
                                                                <div id="slider-range_one" class="price-range mb-30">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="filter-checkbox mb-3">
                                                                <p>Sort By Features</p>
                                                                <ul>
                                                                    <li>
                                                                        <input id="check-a" type="checkbox" name="check">
                                                                        <label for="check-a">Air Condition</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-b" type="checkbox" name="check">
                                                                        <label for="check-b">Swimming Pool</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-c" type="checkbox" name="check">
                                                                        <label for="check-c">Laundry Room</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-d" type="checkbox" name="check">
                                                                        <label for="check-d">Free Wifi</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-e" type="checkbox" name="check">
                                                                        <label for="check-e">Window Covering</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-f" type="checkbox" name="check">
                                                                        <label for="check-f">Central Heating </label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-g" type="checkbox" name="check">
                                                                        <label for="check-g">24 hour security</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-h" type="checkbox" name="check">
                                                                        <label for="check-h">Lawn</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-i" type="checkbox" name="check">
                                                                        <label for="check-i">Gym</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="filter-checkbox">
                                                <p>Sort By Ratings</p>
                                                <div>
                                                    <input id="check-w" type="checkbox" name="check">
                                                    <label for="check-w">
                                                    </label>
                                                    <div class="list-ratings">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input id="check-x" type="checkbox" name="check">
                                                    <label for="check-x">
                                                    </label>
                                                    <div class="list-ratings">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star-half-alt"></span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input id="check-y" type="checkbox" name="check">
                                                    <label for="check-y">
                                                    </label>
                                                    <div class="list-ratings">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star-half-alt"></span>
                                                        <span class="fas fa-star-half-alt"></span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input id="check-z" type="checkbox" name="check">
                                                    <label for="check-z">
                                                    </label>
                                                    <div class="list-ratings">
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star-half-alt"></span>
                                                        <span class="fas fa-star-half-alt"></span>
                                                        <span class="fas fa-star-half-alt"></span>
                                                    </div>
                                                </div>
                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-4 col-sm-6 col-12">
                                            <button class="btn v8" type="submit"> Search Property</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="widget mortgage-widget">
                                <h3 class="widget-title">Property Mortgage</h3>
                                <form action="#" method="GET" enctype="multipart/form-data">
                                    <div class="mortgage-group">
                                        <span class="mortgage-icon">$</span>
                                        <input class="mortgage-field" type="text" name="amount-one" id="amount-one" placeholder="Total Amount">
                                    </div>
                                    <div class="mortgage-group">
                                        <span class="mortgage-icon">$</span>
                                        <input class="mortgage-field" type="text" name="amount-two" id="amount-two" placeholder="Down Payment">
                                    </div>
                                    <div class="mortgage-group">
                                        <span class="mortgage-icon">$</span>
                                        <input class="mortgage-field" type="text" name="amount-three" id="amount-three" placeholder="Loan Terms(Years)">
                                    </div>
                                    <div class="mortgage-group">
                                        <span class="mortgage-icon">%</span>
                                        <input class="mortgage-field" type="text" name="amount-four" id="amount-four" placeholder="Total Amount">
                                    </div>
                                    <div class="mortgage-btn">
                                        <button type="submit" data-toggle="modal" data-target="#mortgage_result">Calculate</button>
                                    </div>
                                </form>
                            </div>

                            <div class="widget categories">
                                <h3 class="widget-title">Property Type</h3>
                                <ul class="icon">
                                    <li><a href="#">Commercial Space</a><span>(4)</span></li>
                                    <li><a href="#">Single Family</a><span>(15)</span></li>
                                    <li><a href="#">Apartment</a> <span>(25)</span></li>
                                    <li><a href="#">Villa</a><span>(17)</span></li>
                                    <li><a href="#">Others</a><span>(12)</span></li>
                                </ul>
                            </div>

                            <div class="widget recent">
                                <h3 class="widget-title">Recently Added</h3>
                                <ul class="post-list">
                                    <li class="row recent-list">
                                        <div class="col-lg-5 col-4">
                                            <div class="entry-img">
                                                <img src="images/property/property_2.jpg" alt="...">
                                                <span>For Rent</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-8 no-pad-left">
                                            <div class="entry-text">
                                                <h4 class="entry-title"><a href="single-news-one.html">Sea View Villa</a></h4>
                                                <div class="property-location">
                                                    <i class="fa fa-map-marker-alt"></i>
                                                    <p>1797 Hillcrest Lane, Irvine, CA</p>
                                                </div>
                                                <div class="trend-open">
                                                    <p>$7500<span class="per_month">month</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row recent-list">
                                        <div class="col-lg-5 col-4">
                                            <div class="entry-img">
                                                <img src="images/property/property_3.jpg" alt="...">
                                                <span>For Sale</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-8 no-pad-left">
                                            <div class="entry-text">
                                                <h4 class="entry-title"><a href="single-news-one.html">Apartment on Glasgow</a></h4>
                                                <div class="property-location">
                                                    <i class="fa fa-map-marker-alt"></i>
                                                    <p>60 High St, Glasgow, London</p>
                                                </div>
                                                <div class="trend-open">
                                                    <p><span class="per_sale">starts from</span>$10000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row recent-list">
                                        <div class="col-lg-5 col-4">
                                            <div class="entry-img">
                                                <img src="images/property/property_6.jpg" alt="...">
                                                <span>For Rent</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-8 no-pad-left">
                                            <div class="entry-text">
                                                <h4 class="entry-title"><a href="single-news-one.html">Family house in Florance.</a></h4>
                                                <div class="property-location">
                                                    <i class="fa fa-map-marker-alt"></i>
                                                    <p>4210 Kha St,Florence,USA</p>
                                                </div>
                                                <div class="trend-open">
                                                    <p>$4500<span class="per_month">month</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--Sidebar ends-->
                    </div>
                    <div class="col-xl-8 col-lg-12">
                        <div class="sidebar-content-right py-100">
                            <div class="row pb-30 align-items-center">
                                <div class="col-lg-3 col-sm-5 col-5">
                                <div class="item-view-mode res-box">
                                    <!-- item-filter-list Menu starts -->
                                    <ul class="nav item-filter-list" role="tablist">
                                        <li><a data-toggle="tab" href="#grid-view"><i class="fas fa-th"></i></a></li>
                                        <li><a class="active" data-toggle="tab" href="#list-view"><i class="fas fa-list"></i></a></li>
                                    </ul>
                                    <!-- item-filter-list Menu ends -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-7 col-7">
                                <select class="listing-input hero__form-input  form-control custom-select">
                                    <option>Sort by Newest</option>
                                    <option>Sort by Oldest</option>
                                    <option>Sort by Featured</option>
                                    <option>Sort by Price(Low to High)</option>
                                    <option>Sort by Price(Low to High)</option>
                                </select>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="item-element res-box  text-right sm-left">
                                    <p>Showing <span>1-15 of 69</span> Listings</p>
                                </div>
                            </div>
                            </div>
                            <div class="item-wrapper pt-20    ">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade  property-grid" id="grid-view">
                                        <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                                <div class="single-property-box">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_1.jpg" alt="#">
                                                    </a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span> Featured</span></li>
                                                        <li class="feature_or"><span>For Sale</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agent_min_1.jpg" alt="...">
                                                            <span>Tony Stark</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="Photos"><a href=".photo-gallery" class="btn-gallery"><i class="lnr lnr-camera"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                        <div class="hidden photo-gallery">
                                                            <a href="images/single-listing/property_view_1.jpg"></a>
                                                            <a href="images/single-listing/property_view_2.jpg"></a>
                                                            <a href="images/single-listing/property_view_3.jpg"></a>
                                                            <a href="images/single-listing/property_view_4.jpg"></a>
                                                            <a href="images/single-listing/property_view_5.jpg"></a>
                                                            <a href="images/single-listing/property_view_6.jpg"></a>
                                                            <a href="images/single-listing/property_view_7.jpg"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Villa on Hartford</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>2854 Meadow View Drive, Hartford, USA</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>4 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>3 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>2142 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>2 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                <p><span class="per_sale">starts from</span>$25000</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="single-property-box">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_3.jpg" alt="#"></a>
                                                    <ul class="feature_text">
                                                        <li class="feature_or"><span>For Rent</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agency_2.jpg" alt="...">
                                                            <span>Zilion Properties</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Family home in Glasgow</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>60 High St, Glasgow, London</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>3 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>3 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>1982 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>1 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                <p>$7500<span class="per_month">month</span> </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="single-property-box">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_6.jpg" alt="#"></a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span> New</span></li>
                                                        <li class="feature_or"><span>For Sale</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agent_min_2.jpg" alt="...">
                                                            <span>Bob Haris</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="Video"><a href="https://www.youtube.com/watch?v=v_ATnE02qFs" class="property-yt"><i class="fas fa-play"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Apartment in Cecil Lake</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>131 midlas , Cecil Lake, BC</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>3 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>2 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>1600 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>1 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                <p><span class="per_sale">starts from</span>$9000</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="single-property-box">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_2.jpg" alt="#"> </a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span>New</span></li>
                                                        <li class="feature_or"><span>For Rent</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agent_min_2.jpg" alt="...">
                                                            <span>Bob haris</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Bay view Apartment</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>1797 Hillcrest Lane, Boulevard, CA</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>3 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>2 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>1400 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>1 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                <p>$4000<span class="per_month">month</span> </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="single-property-box">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_4.jpg" alt="#"></a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span> Featured</span></li>
                                                        <li class="feature_or"><span>For Sale</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agency_4.jpg" alt="...">
                                                            <span>Hexa Properties</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Office Space in Thatcham</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>Colthrop Lane, Thatcham, London</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-home"></i>
                                                            <span>6 Rooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>2 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>1400 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>1 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                <p><span class="per_sale">starts from</span>$12000</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="single-property-box">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_5.jpg" alt="#">
                                                    </a>
                                                    <ul class="feature_text">
                                                        <li class="feature_or"><span>For Sale</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agency_3.jpg" alt="...">
                                                            <span>Seaside Properties</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="Photos"><a href=".photo-gallery" class="btn-gallery"><i class="lnr lnr-camera"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                        <div class="hidden photo-gallery">
                                                            <a href="images/single-listing/property_view_1.jpg"></a>
                                                            <a href="images/single-listing/property_view_2.jpg"></a>
                                                            <a href="images/single-listing/property_view_3.jpg"></a>
                                                            <a href="images/single-listing/property_view_4.jpg"></a>
                                                            <a href="images/single-listing/property_view_5.jpg"></a>
                                                            <a href="images/single-listing/property_view_6.jpg"></a>
                                                            <a href="images/single-listing/property_view_7.jpg"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Luxury Villa in Birmingham</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>159 Dudley Rd, Birmingham, UK</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>5 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>4 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>3000 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>2 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                <p><span class="per_sale">starts from</span>$21000</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="single-property-box">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_9.jpg" alt="#"> </a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span>New</span></li>
                                                        <li class="feature_or"><span>For Sale</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agent_min_3.jpg" alt="...">
                                                            <span>Jim Carry</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="Video"><a href="https://www.youtube.com/watch?v=v_ATnE02qFs" class="property-yt"><i class="fas fa-play"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Luxury Condo in Mariwood</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>164 Mariwood Rd , Campbell River, BC</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>6 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>5 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>2400 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>2 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                <p><span class="per_sale">starts from</span>$75000</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="single-property-box">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_7.jpg" alt="#"> </a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span> Featured</span></li>
                                                        <li class="feature_or"><span>For Rent</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agency_1.jpg" alt="...">
                                                            <span>Carmen Properties</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Villa on Sunbury</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>39 Casey Ave, Sunbury, VIC 3429</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>5 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>4 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>2048 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>2 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                <p>$9200<span class="per_month">month</span> </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade  show active  property-list" id="list-view">
                                        <div class="single-property-box">
                                            <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_1.jpg" alt="#">
                                                    </a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span> Featured</span></li>
                                                        <li class="feature_or"><span>For Sale</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agent_min_1.jpg" alt="...">
                                                            <span>Tony Stark</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="Photos"><a href=".photo-gallery" class="btn-gallery"><i class="lnr lnr-camera"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                        <div class="hidden photo-gallery">
                                                            <a href="images/single-listing/property_view_1.jpg"></a>
                                                            <a href="images/single-listing/property_view_2.jpg"></a>
                                                            <a href="images/single-listing/property_view_3.jpg"></a>
                                                            <a href="images/single-listing/property_view_4.jpg"></a>
                                                            <a href="images/single-listing/property_view_5.jpg"></a>
                                                            <a href="images/single-listing/property_view_6.jpg"></a>
                                                            <a href="images/single-listing/property_view_7.jpg"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Villa on Hartford</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>2854 Meadow View Drive, Hartford, USA</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>4 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>3 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>2142 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>2 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left" >
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                 <p><span class="per_sale">starts from</span>$25000</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="single-property-box">
                                            <div class="row">
                                             <div class="col-md-6 col-sm-12">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_3.jpg" alt="#"></a>
                                                <ul class="feature_text">
                                                    <li class="feature_or"><span>For Rent</span></li>
                                                </ul>
                                                <div class="property-author-wrap">
                                                    <a href="#" class="property-author">
                                                        <img src="images/agents/agency_2.jpg" alt="...">
                                                        <span>Zilion Properties</span>
                                                    </a>
                                                    <ul class="save-btn">
                                                        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                    </ul>
                                                </div>
                                             </div>
                                             </div>
                                             <div class="col-md-6 col-sm-12">
                                                <div class="property-title-box">
                                                <h4><a href="single-listing-one.html">Family home in Glasgow</a></h4>
                                                <div class="property-location">
                                                    <i class="fa fa-map-marker-alt"></i>
                                                    <p>60 High St, Glasgow, London</p>
                                                </div>
                                                <ul class="property-feature">
                                                    <li> <i class="fas fa-bed"></i>
                                                        <span>3 Bedrooms</span>
                                                    </li>
                                                    <li> <i class="fas fa-bath"></i>
                                                        <span>3 Bath</span>
                                                    </li>
                                                    <li> <i class="fas fa-arrows-alt"></i>
                                                        <span>1982 sq ft</span>
                                                    </li>
                                                    <li> <i class="fas fa-car"></i>
                                                        <span>1 Garage</span>
                                                    </li>
                                                </ul>
                                                <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                 <p>$7500<span class="per_month">month</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="single-property-box">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                            <div class="property-item">
                                                <a class="property-img" href="single-listing-two.html"><img src="images/property/property_6.jpg" alt="#"></a>
                                                <ul class="feature_text">
                                                    <li class="feature_cb"><span> New</span></li>
                                                    <li class="feature_or"><span>For Sale</span></li>
                                                </ul>
                                                <div class="property-author-wrap">
                                                    <a href="#" class="property-author">
                                                        <img src="images/agents/agent_min_2.jpg" alt="...">
                                                        <span>Bob Haris</span>
                                                    </a>
                                                    <ul class="save-btn">
                                                        <li data-toggle="tooltip" data-placement="top" title="Video"><a href="https://www.youtube.com/watch?v=v_ATnE02qFs" class="property-yt"><i class="fas fa-play"></i></a></li>
                                                        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="property-title-box">
                                                <h4><a href="single-listing-one.html">Apartment in Cecil Lake</a></h4>
                                                <div class="property-location">
                                                    <i class="fa fa-map-marker-alt"></i>
                                                    <p>131 midlas , Cecil Lake, BC</p>
                                                </div>
                                                <ul class="property-feature">
                                                    <li> <i class="fas fa-bed"></i>
                                                        <span>3 Bedrooms</span>
                                                    </li>
                                                    <li> <i class="fas fa-bath"></i>
                                                        <span>2 Bath</span>
                                                    </li>
                                                    <li> <i class="fas fa-arrows-alt"></i>
                                                        <span>1600 sq ft</span>
                                                    </li>
                                                    <li> <i class="fas fa-car"></i>
                                                        <span>1 Garage</span>
                                                    </li>
                                                </ul>
                                                <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                 <p><span class="per_sale">starts from</span>$9000</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-property-box">
                                            <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_2.jpg" alt="#"> </a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span>New</span></li>
                                                        <li class="feature_or"><span>For Rent</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agent_min_2.jpg" alt="...">
                                                            <span>Bob haris</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Bay view Apartment</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>1797 Hillcrest Lane, Boulevard, CA</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-bed"></i>
                                                            <span>3 Bedrooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>2 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>1400 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>1 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left">
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                 <p>$4000<span class="per_month">month</span></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="single-property-box">
                                            <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="property-item">
                                                    <a class="property-img" href="single-listing-two.html"><img src="images/property/property_4.jpg" alt="#"></a>
                                                    <ul class="feature_text">
                                                        <li class="feature_cb"><span> Featured</span></li>
                                                        <li class="feature_or"><span>For Sale</span></li>
                                                    </ul>
                                                    <div class="property-author-wrap">
                                                        <a href="#" class="property-author">
                                                            <img src="images/agents/agency_4.jpg" alt="...">
                                                            <span>Hexa Properties</span>
                                                        </a>
                                                        <ul class="save-btn">
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                               <div class="property-title-box">
                                                    <h4><a href="single-listing-one.html">Office Space in Thatcham</a></h4>
                                                    <div class="property-location">
                                                        <i class="fa fa-map-marker-alt"></i>
                                                        <p>Colthrop Lane, Thatcham, London</p>
                                                    </div>
                                                    <ul class="property-feature">
                                                        <li> <i class="fas fa-home"></i>
                                                            <span>6 Rooms</span>
                                                        </li>
                                                        <li> <i class="fas fa-bath"></i>
                                                            <span>2 Bath</span>
                                                        </li>
                                                        <li> <i class="fas fa-arrows-alt"></i>
                                                            <span>1400 sq ft</span>
                                                        </li>
                                                        <li> <i class="fas fa-car"></i>
                                                            <span>1 Garage</span>
                                                        </li>
                                                    </ul>
                                                    <div class="trending-bottom">
                                                        <div class="trend-left float-left" >
                                                            <ul class="product-rating">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                        <a class="trend-right float-right">
                                                            <div class="trend-open">
                                                                  <p><span class="per_sale">starts from</span>$12000</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="single-property-box">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="property-item">
                                                        <a class="property-img" href="single-listing-two.html"><img src="images/property/property_5.jpg" alt="#">
                                                        </a>
                                                        <ul class="feature_text">
                                                            <li class="feature_or"><span>For Sale</span></li>
                                                        </ul>
                                                        <div class="property-author-wrap">
                                                            <a href="#" class="property-author">
                                                                <img src="images/agents/agency_3.jpg" alt="...">
                                                                <span>Seaside Properties</span>
                                                            </a>
                                                            <ul class="save-btn">
                                                                <li data-toggle="tooltip" data-placement="top" title="Photos"><a href=".photo-gallery" class="btn-gallery"><i class="lnr lnr-camera"></i></a></li>
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                            </ul>
                                                            <div class="hidden photo-gallery">
                                                                <a href="images/single-listing/property_view_1.jpg"></a>
                                                                <a href="images/single-listing/property_view_2.jpg"></a>
                                                                <a href="images/single-listing/property_view_3.jpg"></a>
                                                                <a href="images/single-listing/property_view_4.jpg"></a>
                                                                <a href="images/single-listing/property_view_5.jpg"></a>
                                                                <a href="images/single-listing/property_view_6.jpg"></a>
                                                                <a href="images/single-listing/property_view_7.jpg"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="property-title-box">
                                                        <h4><a href="single-listing-one.html">Luxury Villa in Birmingham</a></h4>
                                                        <div class="property-location">
                                                            <i class="fa fa-map-marker-alt"></i>
                                                            <p>159 Dudley Rd, Birmingham, UK</p>
                                                        </div>
                                                        <ul class="property-feature">
                                                            <li> <i class="fas fa-bed"></i>
                                                                <span>5 Bedrooms</span>
                                                            </li>
                                                            <li> <i class="fas fa-bath"></i>
                                                                <span>4 Bath</span>
                                                            </li>
                                                            <li> <i class="fas fa-arrows-alt"></i>
                                                                <span>3000 sq ft</span>
                                                            </li>
                                                            <li> <i class="fas fa-car"></i>
                                                                <span>2 Garage</span>
                                                            </li>
                                                        </ul>
                                                        <div class="trending-bottom">
                                                            <div class="trend-left float-left">
                                                                <ul class="product-rating">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                </ul>
                                                            </div>
                                                            <a class="trend-right float-right">
                                                                <div class="trend-open">
                                                                     <p><span class="per_sale">starts from</span>$21000</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-property-box">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="property-item">
                                                        <a class="property-img" href="single-listing-two.html"><img src="images/property/property_9.jpg" alt="#"> </a>
                                                        <ul class="feature_text">
                                                            <li class="feature_cb"><span>New</span></li>
                                                            <li class="feature_or"><span>For Sale</span></li>
                                                        </ul>
                                                        <div class="property-author-wrap">
                                                            <a href="#" class="property-author">
                                                                <img src="images/agents/agent_min_3.jpg" alt="...">
                                                                <span>Jim Carry</span>
                                                            </a>
                                                            <ul class="save-btn">
                                                                <li data-toggle="tooltip" data-placement="top" title="Video"><a href="https://www.youtube.com/watch?v=v_ATnE02qFs" class="property-yt"><i class="fas fa-play"></i></a></li>
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="property-title-box">
                                                        <h4><a href="single-listing-one.html">Luxury Condo in Mariwood</a></h4>
                                                        <div class="property-location">
                                                            <i class="fa fa-map-marker-alt"></i>
                                                            <p>164 Mariwood Rd , Campbell River, BC</p>
                                                        </div>
                                                        <ul class="property-feature">
                                                            <li> <i class="fas fa-bed"></i>
                                                                <span>6 Bedrooms</span>
                                                            </li>
                                                            <li> <i class="fas fa-bath"></i>
                                                                <span>5 Bath</span>
                                                            </li>
                                                            <li> <i class="fas fa-arrows-alt"></i>
                                                                <span>2400 sq ft</span>
                                                            </li>
                                                            <li> <i class="fas fa-car"></i>
                                                                <span>2 Garage</span>
                                                            </li>
                                                        </ul>
                                                        <div class="trending-bottom">
                                                            <div class="trend-left float-left">
                                                                <ul class="product-rating">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                </ul>
                                                            </div>
                                                            <a class="trend-right float-right">
                                                                <div class="trend-open">
                                                                     <p><span class="per_sale">starts from</span>$75000</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-property-box">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                   <div class="property-item">
                                                        <a class="property-img" href="single-listing-two.html"><img src="images/property/property_7.jpg" alt="#"> </a>
                                                        <ul class="feature_text">
                                                            <li class="feature_cb"><span> Featured</span></li>
                                                            <li class="feature_or"><span>For Rent</span></li>
                                                        </ul>
                                                        <div class="property-author-wrap">
                                                            <a href="#" class="property-author">
                                                                <img src="images/agents/agency_1.jpg" alt="...">
                                                                <span>Carmen Properties</span>
                                                            </a>
                                                            <ul class="save-btn">
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Bookmark"><a href="#"><i class="lnr lnr-heart"></i></a></li>
                                                                <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare"><a href="#"><i class="fas fa-arrows-alt-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                   <div class="property-title-box">
                                                        <h4><a href="single-listing-one.html">Villa on Sunbury</a></h4>
                                                        <div class="property-location">
                                                            <i class="fa fa-map-marker-alt"></i>
                                                            <p>39 Casey Ave, Sunbury, VIC 3429</p>
                                                        </div>
                                                        <ul class="property-feature">
                                                            <li> <i class="fas fa-bed"></i>
                                                                <span>5 Bedrooms</span>
                                                            </li>
                                                            <li> <i class="fas fa-bath"></i>
                                                                <span>4 Bath</span>
                                                            </li>
                                                            <li> <i class="fas fa-arrows-alt"></i>
                                                                <span>2048 sq ft</span>
                                                            </li>
                                                            <li> <i class="fas fa-car"></i>
                                                                <span>2 Garage</span>
                                                            </li>
                                                        </ul>
                                                        <div class="trending-bottom">
                                                            <div class="trend-left float-left" >
                                                                <ul class="product-rating">
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                    <li><i class="fas fa-star-half-alt"></i></li>
                                                                </ul>
                                                            </div>
                                                            <a class="trend-right float-right">
                                                                <div class="trend-open">
                                                                       <p>$9200<span class="per_month">month</span></p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--pagination starts-->
                                    <div class="post-nav nav-res pt-50  ">
                                        <div class="row">
                                            <div class="col-md-8 offset-md-2  col-xs-12 ">
                                                <div class="page-num text-center">
                                                    <ul>
                                                        <li class="active"><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#"><i class="lnr lnr-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--pagination ends-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Listing Filter ends-->
        <!-- Scroll to top starts-->
        <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
        <!-- Scroll to top ends-->
    </div>
    <!--Page Wrapper ends-->




@endsection
