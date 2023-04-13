@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>{{$title}}</title>

<!-- Fav Icon -->
<link rel="icon" href="{{asset("assets/images/favicon.png")}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset("assets/css/font-awesome-all.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/flaticon.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/owl.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/jquery.fancybox.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/animate.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/jquery-ui.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/nice-select.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/color/theme-color.css")}}" id="jssDefault" rel="stylesheet">
<link href="{{asset("assets/css/switcher-style.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/responsive.css")}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <img src="{{asset("assets/images/footer-logo.png")}}" alt="logo">
                        {{-- <div class="spinner"></div> --}}
                        <div class="txt-loading">
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="g" class="letters-loading">
                                g
                            </span>
                            
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        {{-- <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <!-- end switcher menu --> --}}


        <!-- main header -->
        <header class="main-header header-style-two">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{asset("assets/images/logo-light.png")}}" alt="logo"></a></figure>
                        </div>
                        <x-navigation /> 
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{asset("assets/images/logo.png")}}" alt="Logo"></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-one"><span>+</span>Become an Affiliate</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="{{asset("assets/images/logo-light.png")}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


       {{$slot}}

        <!-- subscribe-section -->
    <section class="subscribe-section bg-color-3">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <span>BECOME AN AFFILIATE!</span>
                        <h2>Become an Affiliate & Start Earning Referral Comissions!</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <form action="contact.html" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email" required="">
                                <button type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="text">
                                    <p> {{__("At L-Time Properties Ltd, we offer a range of services to help our clients buy, sell, develop, and manage real estate properties.")}}</p>
                                    <p>{{__("Our team of experts has the knowledge and experience needed to deliver high-quality services in a timely and cost-effective manner.")}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li><a href="#">{{__("Land Sales")}}</a></li>
                                        <li><a href="#">{{__("Real Estate")}}</a></li>
                                        <li><a href="#">{{__("Construction Works")}}</a></li>
                                        <li><a href="#">{{__("Consultancy")}}</a></li>
                                        <li><a href="#">{{__("Design")}}</a></li>
                                        <li><a href="#">{{__("Surveying")}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Top News</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                        <p>Mar 24, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>{{__("Get in Touch")}}</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>{{__("Near GreenVille Hospital Community 26")}}</li>
                                        <li><i class="fas fa-phone"></i><a href="tel:+233243407156">+233 (0)243407156</a></li>
                                        <li><i class="fas fa-phone"></i><a href="tel:+233206958652">+233 (0)206958652</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:info@timepropertiesltd.com">info@timepropertiesltd.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <figure class="footer-logo"><a href="#"><img src="{{asset("assets/images/footer-logo.png")}}" alt="logo" style="height:93px"></a></figure>
                        <div class="copyright pull-left">
                            <p><a href="#">L-Time Properties</a> &copy; {{date('Y')}}. All Right Reserved</p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset("assets/js/jquery.js")}}"></script>
    <script src="{{asset("assets/js/popper.min.js")}}"></script>
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/owl.js")}}"></script>
    <script src="{{asset("assets/js/wow.js")}}"></script>
    <script src="{{asset("assets/js/validation.js")}}"></script>
    <script src="{{asset("assets/js/jquery.fancybox.js")}}"></script>
    <script src="{{asset("assets/js/appear.js")}}"></script>
    <script src="{{asset("assets/js/scrollbar.js")}}"></script>
    <script src="{{asset("assets/js/isotope.js")}}"></script>
    <script src="{{asset("assets/js/jquery.nice-select.min.js")}}"></script>
    <script src="{{asset("assets/js/jQuery.style.switcher.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery-ui.js")}}"></script>
    <script src="{{asset("assets/js/jquery.paroller.min.js")}}"></script>
    <script src="{{asset("assets/js/nav-tool.js")}}"></script>

    <!-- main-js -->
    <script src="{{asset("assets/js/script.js")}}"></script>

</body><!-- End of .page_wrapper -->
</html>
