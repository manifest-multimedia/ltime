<x-frontend-layout title="L-Time Properties - Land, Real Estate & Construction"> 

     <!-- banner-style-two -->
     <section class="banner-style-two centred">
        <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('assets/images/slider/slide-1.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Your Ultimate Partner in Land <br /> Acquisition, Real Estate & Construction</h2>
                        <p>Enjoy Flexible Terms of Payment</p>
                    </div> 
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset("assets/images/slider/slide-2.jpg")}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>We go Everywhere to <br />Build for You!</h2>
                        <p>Location is not a Problem. Talk to us!</p>
                    </div>   
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset("assets/images/slider/slide-3.jpg")}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>Buy & Rent Properties <br /> from a trusted provider!</h2>
                        <p>Buy Problem-Free Lands & Properties from Us!</p>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!-- banner-style-two end -->


    <!-- search-field-section -->
    <section class="search-field-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="search-field">
                    <div class="tabs-box">
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons centred clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Buy Land</li>
                                <li class="tab-btn" data-tab="#tab-2">Real Estate</li>
                            </ul>
                        </div>
                        <div class="tabs-content info-group">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <div class="top-search">
                                        <form action="index.html" method="post" class="search-form">
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Search Property</label>
                                                        <div class="field-input">
                                                            <i class="fas fa-search"></i>
                                                            <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <div class="select-box">
                                                            <i class="far fa-compass"></i>
                                                            <select class="wide">
                                                               <option data-display="Input location">Input location</option>
                                                               <option value="1">New York</option>
                                                               <option value="2">California</option>
                                                               <option value="3">London</option>
                                                               <option value="4">Maxico</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Property Type</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="All Type">All Type</option>
                                                               <option value="1">Laxury</option>
                                                               <option value="2">Classic</option>
                                                               <option value="3">Modern</option>
                                                               <option value="4">New</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-btn">
                                                <button type="submit"><i class="fas fa-search"></i>Search</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="switch_btn_one ">
                                        <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">View Lands<i class="fas fa-briefcase"></i></button>
                                        {{-- <div class="advanced-search">
                                            <div class="close-btn">
                                                <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Distance from Location</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Distance from Location">Distance from Location</option>
                                                               <option value="1">Max Bath</option>
                                                               <option value="2">Within 1 Mile</option>
                                                               <option value="3">Within 2 Mile</option>
                                                               <option value="4">Within 3 Mile</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Bedrooms</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Max Rooms">Max Rooms</option>
                                                               <option value="1">One Rooms</option>
                                                               <option value="2">Two Rooms</option>
                                                               <option value="3">Three Rooms</option>
                                                               <option value="4">Four Rooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Sort by</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Most Popular">Most Popular</option>
                                                               <option value="1">Top Rating</option>
                                                               <option value="2">New Rooms</option>
                                                               <option value="3">Classic Rooms</option>
                                                               <option value="4">Luxry Rooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Floor</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Select Floor">Select Floor</option>
                                                               <option value="1">One Floor</option>
                                                               <option value="2">Two Floor</option>
                                                               <option value="3">Three Floor</option>
                                                               <option value="4">Four Floor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Bath</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Max Bath">Max Bath</option>
                                                               <option value="1">Max Bath</option>
                                                               <option value="2">Max Bath</option>
                                                               <option value="3">Max Bath</option>
                                                               <option value="4">Max Bath</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Agencies</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Any Agency">Any Agency</option>
                                                               <option value="1">Any Agency</option>
                                                               <option value="2">Agency 01</option>
                                                               <option value="3">Agency 02</option>
                                                               <option value="4">Agency 03</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="range-box">
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="price-range">
                                                            <h6>Select Price Range</h6>
                                                            <div class="range-input">
                                                                <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                            </div>
                                                            <div class="price-range-slider"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="area-range">
                                                            <h6>Select Area</h6>
                                                            <div class="range-input">
                                                                <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                            </div>
                                                            <div class="area-range-slider"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="inner-box">
                                    <div class="top-search">
                                        <form action="index.html" method="post" class="search-form">
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Search Property</label>
                                                        <div class="field-input">
                                                            <i class="fas fa-search"></i>
                                                            <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <div class="select-box">
                                                            <i class="far fa-compass"></i>
                                                            <select class="wide">
                                                               <option data-display="Input location">Input location</option>
                                                               <option value="1">New York</option>
                                                               <option value="2">California</option>
                                                               <option value="3">London</option>
                                                               <option value="4">Maxico</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Property Type</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="All Type">All Type</option>
                                                               <option value="1">Laxury</option>
                                                               <option value="2">Classic</option>
                                                               <option value="3">Modern</option>
                                                               <option value="4">New</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="search-btn">
                                                <button type="submit"><i class="fas fa-search"></i>Search</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="switch_btn_one ">
                                        <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">View Properties<i class="fas fa-briefcase"></i></button>
                                        
                                        <div class="advanced-search">
                                            <div class="close-btn">
                                                <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Distance from Location</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Distance from Location">Distance from Location</option>
                                                               <option value="1">Max Bath</option>
                                                               <option value="2">Within 1 Mile</option>
                                                               <option value="3">Within 2 Mile</option>
                                                               <option value="4">Within 3 Mile</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Bedrooms</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Max Rooms">Max Rooms</option>
                                                               <option value="1">One Rooms</option>
                                                               <option value="2">Two Rooms</option>
                                                               <option value="3">Three Rooms</option>
                                                               <option value="4">Four Rooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Sort by</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Most Popular">Most Popular</option>
                                                               <option value="1">Top Rating</option>
                                                               <option value="2">New Rooms</option>
                                                               <option value="3">Classic Rooms</option>
                                                               <option value="4">Luxry Rooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Floor</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Select Floor">Select Floor</option>
                                                               <option value="1">One Floor</option>
                                                               <option value="2">Two Floor</option>
                                                               <option value="3">Three Floor</option>
                                                               <option value="4">Four Floor</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Bath</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Max Bath">Max Bath</option>
                                                               <option value="1">Max Bath</option>
                                                               <option value="2">Max Bath</option>
                                                               <option value="3">Max Bath</option>
                                                               <option value="4">Max Bath</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Agencies</label>
                                                        <div class="select-box">
                                                            <select class="wide">
                                                               <option data-display="Any Agency">Any Agency</option>
                                                               <option value="1">Any Agency</option>
                                                               <option value="2">Agency 01</option>
                                                               <option value="3">Agency 02</option>
                                                               <option value="4">Agency 03</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="range-box">
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="price-range">
                                                            <h6>Select Price Range</h6>
                                                            <div class="range-input">
                                                                <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                            </div>
                                                            <div class="price-range-slider"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                        <div class="area-range">
                                                            <h6>Select Area</h6>
                                                            <div class="range-input">
                                                                <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                            </div>
                                                            <div class="area-range-slider"></div>
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
                </div>
            </div>
        </div>
    </section>
    <!-- search-field-section end -->


    <!-- feature-style-two -->
    <section class="feature-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                <h5>Features</h5>
                <h2>Featured Property</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="feature-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                    <h6>Michael Bean</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                            </div>
                            <div class="title-text"><h4><a href="agents-details.html">Villa on Grand Avenue</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
                <div class="feature-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                    <h6>Robert Niro</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$45,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
                <div class="feature-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/feature/feature-3.jpg" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                    <h6>Keira Mel</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$63,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-btn centred"><a href="property-list.html" class="theme-btn btn-one">View All Listing</a></div>
        </div>
    </section>
    <!-- feature-style-two end -->


    <!-- cta-section -->
    <section class="cta-section alternate-2 centred" style="background-image: url(assets/images/background/cta-1.jpg);">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="text">
                    <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
                </div>
                <div class="btn-box">
                    <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                    <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- deals-style-two -->
    <section class="deals-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Hot Property</h5>
                <h2>Our Best Deals</h2>
            </div>
            <div class="deals-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                <div class="single-item">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/deals-2.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                                <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                            <div class="author-box pull-right">
                                                <figure class="author-thumb"> 
                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                    <span>Michael Bean</span>
                                                </figure>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/deals-2.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                                <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$40,000.00</h4>
                                            </div>
                                            <div class="author-box pull-right">
                                                <figure class="author-thumb"> 
                                                    <img src="assets/images/feature/author-2.jpg" alt="">
                                                    <span>Robert Niro</span>
                                                </figure>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/deals-2.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                                <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$50,000.00</h4>
                                            </div>
                                            <div class="author-box pull-right">
                                                <figure class="author-thumb"> 
                                                    <img src="assets/images/feature/author-3.jpg" alt="">
                                                    <span>Keira Mel</span>
                                                </figure>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/deals-2.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                                <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                            <div class="author-box pull-right">
                                                <figure class="author-thumb"> 
                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                    <span>Michael Bean</span>
                                                </figure>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- deals-style-two end -->


    <!-- chooseus-section -->
    <section class="chooseus-section alternate-2 bg-color-1">
        <div class="auto-container">
            <div class="upper-box clearfix">
                <div class="sec-title">
                    <h5>Why Choose Us?</h5>
                    <h2>Reasons To Choose Us</h2>
                </div>
                <div class="btn-box">
                    <a href="categories.html" class="theme-btn btn-one">All Categories</a>
                </div>
            </div>
            <div class="lower-box">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-19"></i></div>
                                <h4>Excellent Reputation</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-26"></i></div>
                                <h4>Best Local Agents</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <h4>Personalized Service</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    {{-- <!-- team-section -->
    <section class="team-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title">
                <h5>Our Agents</h5>
                <h2>Meet Our Excellent Agents</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/team/team-6.jpg" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Jennifer Lawrence</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/team/team-7.jpg" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Benedict Cumberbatch</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/team/team-8.jpg" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Elizabeth Winstead</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end --> --}}


    <!-- testimonial-style-two -->
    <section class="testimonial-style-two" style="background-image: url(assets/images/background/testimonial-1.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 inner-column">
                    <div class="single-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <div class="text">
                                    <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <h4>Rebeka Dawson</h4>
                                    <span class="designation">Instructor</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <div class="text">
                                    <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                    <h4>Marc Kenneth</h4>
                                    <span class="designation">Founder CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-18"></i></div>
                                <div class="text">
                                    <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                    <h4>Owen Lester</h4>
                                    <span class="designation">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-two end -->


    <!-- place-style-two -->
    <section class="place-style-two sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_2">
                        <div class="content-box">
                            <div class="sec-title">
                                <h5>Top Places</h5>
                                <h2>Buy your land in the following locations!</h2>
                                <p>Our Registered Lands are for sale in these top locations. We transform communities around our sites!</p>
                            </div>
                            <ul class="place-list clearfix">
                                <li><a href="categories.html"><h5>Prampram</h5><span>(02)</span></a></li>
                                <li><a href="categories.html"><h5>Dawa</h5><span>(13)</span></a></li>
                                <li><a href="categories.html"><h5>Agotor-Tsopoli</h5><span>(05)</span></a></li>
                                {{-- <li><a href="categories.html"><h5>Brazil</h5><span>(04)</span></a></li>
                                <li><a href="categories.html"><h5>California</h5><span>(07)</span></a></li> --}}
                            </ul>
                            <div class="btn-box">
                                <a href="categories.html" class="theme-btn btn-one">View All Places</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_1">
                        <div class="image-box">
                            <figure class="image image-1 paroller"><img src="assets/images/resource/place-5.jpg" alt=""></figure>
                            <figure class="image image-2 paroller-2"><img src="assets/images/resource/place-6.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- place-style-two end -->


    <!-- clients-section -->
    <section class="clients-section bg-color-1">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <h5>Our Partners</h5>
                        <h2>We work with great partners.</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="clients-logo">
                        <ul class="logo-list clearfix">
                            <li>
                                <figure class="logo"><a href="#"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                            </li>
                            <li>
                                <figure class="logo"><a href="#"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                            </li>
                            <li>
                                <figure class="logo"><a href="#"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                            </li>
                            <li>
                                <figure class="logo"><a href="#"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                            </li>
                            <li>
                                <figure class="logo"><a href="#"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Industry Insights</h5>
                <h2>Industry Insights</h2>
                {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p> --}}
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                <span class="category">Insights</span>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">The Benefits of Investing in Commercial Real Estate</a></h4>
                                <ul class="post-info clearfix">
                                    {{-- <li class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                                        <h5><a href="#">Insights</a></h5>
                                    </li> --}}
                                    <li>April 10, 2020</li>
                                </ul>
                                {{-- <div class="text">
                                    <p>In this blog post, you could explore the advantages of investing in commercial real estate properties, such as office buildings, retail spaces, and industrial warehouses. You could discuss the potential for long-term rental income, tax benefits, and the potential for property appreciation. You could also provide tips for investors on how to identify lucrative commercial real estate opportunities and manage their properties effectively.</p>
                                </div> --}}
                                <div class="btn-box">
                                    <a href="#" class="theme-btn btn-two">Read Full Article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                <span class="category">Insights</span>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">How to Choose the Right Contractor for Your Construction Project</a></h4>
                                <ul class="post-info clearfix">
                                    {{-- <li class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/news/author-2.jpg" alt=""></figure>
                                        <h5><a href="#"></a></h5>
                                    </li> --}}
                                    <li>April 09, 2020</li>
                                </ul>
                                {{-- <div class="text">
                                    <p>In this blog post, you could provide tips for property owners and developers on how to choose the right contractor for their construction projects. You could discuss factors such as experience, reputation, pricing, and communication skills, and provide guidance on how to evaluate potential contractors. You could also provide tips for managing the construction process effectively and avoiding common pitfalls.</p>
                                </div> --}}
                                <div class="btn-box">
                                    <a href="#" class="theme-btn btn-two">Read Full Article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                <span class="category">Insights</span>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">The Future of Sustainable Design in Real Estate</a></h4>
                                <ul class="post-info clearfix">
                                    {{-- <li class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/news/author-3.jpg" alt=""></figure>
                                        <h5><a href="#">Simon Baker</a></h5>
                                    </li> --}}
                                    <li>April 28, 2020</li>
                                </ul>
                                {{-- <div class="text">
                                    <p>In this blog post, you could explore the growing trend of sustainable design in real estate and its potential impact on the industry. You could discuss the benefits of sustainable design, such as energy efficiency, reduced environmental impact, and improved health and wellness for occupants. You could also explore emerging trends in sustainable design, such as net-zero energy buildings, green roofs, and biophilic design, and provide examples of innovative sustainable real estate projects from around the world.</p>
                                </div> --}}
                                <div class="btn-box">
                                    <a href="#" class="theme-btn btn-two">Read Full Article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


   

</x-frontend-layout>