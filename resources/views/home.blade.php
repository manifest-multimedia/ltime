<x-frontend-layout title="L-Time Properties - Land, Real Estate & Construction"> 

    <x-slider />


    <x-home-search-widget :properties="$properties" :locations="$locations"/>


    <!-- feature-style-two -->
    <section class="feature-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                <h5>Features</h5>
                <h2>Featured Property</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
               @foreach ($properties as $item)
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                            </div>
                            <div class="lower-content">
                                {{-- <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                        <h6>Michael Bean</h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                </div> --}}
                                <div class="title-text mt-3"><h4><a href="#">{{$item->title}}</a></h4></div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>{{$system_currency}}{{$item->price}}</h4>
                                    </div>
                                    {{-- <ul class="other-option pull-right clearfix">
                                        <li><a href="#compare"><i class="icon-12"></i></a></li>
                                        <li><a href="#favorite"><i class="icon-13"></i></a></li>
                                    </ul> --}}
                                </div>
                                <p>{{$item->description}}</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i>{{$item->beds}} Beds</li>
                                    <li><i class="icon-15"></i>{{$item->baths}} Baths</li>
                                    <li><i class="icon-16"></i>{{$item->squareft}} Sq Ft</li>
                                </ul>
                                <div class="btn-box"><a href="#" class="theme-btn btn-two">See Details</a></div>
                            </div>
                        </div>
                    </div>
               @endforeach
                
               
            </div>
            <div class="more-btn centred"><a href="#" class="theme-btn btn-one">View All Properties</a></div>
        </div>
    </section>
    <!-- feature-style-two end -->


    <!-- cta-section -->
    <section class="cta-section alternate-2 centred" style="background-image: url({{asset('assets/images/banner/banner-1920x505.jpg')}});">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="text">
                    <h2>Looking to Develop a New Property?</h2>
                </div>
                <div class="btn-box">
                    <a href="#" class="theme-btn btn-three">Build with Us</a>
                    <a href="#" class="theme-btn btn-one">Buy Properties</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- deals-style-two -->
    <section class="deals-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Hot Property Sales</h5>
                <h2>Irresistible Deals</h2>
            </div>
            <div class="deals-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                @foreach (\App\Models\Deal::where('featured',true)->where('active', true)->limit(5)->get() as $item)
                <div class="single-item">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/deals-2.jpg" alt=""></figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Featured</span>
                                <div class="buy-btn"><a href="property-details.html">Hot Sale</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="#">{{$item->title}}</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Price</h6>
                                                <h4>${{$item->price}}</h4>
                                            </div>
                                            {{-- <div class="author-box pull-right">
                                                <figure class="author-thumb"> 
                                                    <img src="assets/images/feature/author-1.jpg" alt="">
                                                    <span>Michael Bean</span>
                                                </figure>
                                            </div> --}}
                                        </div>
                                        <p>{{$item->description}}</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>{{$item->beds}} Beds</li>
                                            <li><i class="icon-15"></i>{{$item->baths}} Baths</li>
                                            <li><i class="icon-16"></i>{{$item->squareft}} Sq Ft</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <div class="btn-box pull-left"><a href="#" class="theme-btn btn-one">Details</a></div>
                                            {{-- <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
                {{-- <div class="single-item">
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
                </div> --}}
                {{-- <div class="single-item">
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
                </div> --}}
                {{-- <div class="single-item">
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
                </div> --}}
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
                {{-- <div class="btn-box">
                    <a href="categories.html" class="theme-btn btn-one">All Categories</a>
                </div> --}}
            </div>
            <div class="lower-box">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-19"></i></div>
                                <h4>Extensive Industry Experience</h4>
                                <p> We have a team of experienced professionals who have been in the real estate and construction industry for many years. This experience has equipped us with the knowledge and expertise necessary to provide our customers with high-quality services, and to help them make informed decisions regarding their real estate and construction needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-26"></i></div>
                                <h4>Comprehensive Services</h4>
                                <p>We offer a wide range of services, including land sales, real estate, construction works, consultancy, design, and surveying. This means that we are a one-stop-shop for all of our customers' real estate and construction needs, which saves them time, money, and hassle.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <h4>Customer Satisfaction</h4>
                                <p>We are committed to providing our customers with excellent service and ensuring that they are completely satisfied with our work. We go above and beyond to meet our customers' needs and exceed their expectations, and we have a proven track record of success and customer satisfaction.</p>
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


   <x-testimonials-widget />


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
                            <figure class="image image-1 paroller"><img src="{{asset("assets/images/banner/banner-440x570.jpg")}}" alt="banner440x570"></figure>
                            <figure class="image image-2 paroller-2"><img src="{{asset("assets/images/banner/banner-270x320.jpg")}}" alt="banner270x320"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- place-style-two end -->


   <x-partners-widget />


   <x-home-news-widget />


   

</x-frontend-layout>