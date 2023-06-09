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
                                <li><a href="{{url('our-services')}}">{{__("Land Sales")}}</a></li>
                                <li><a href="{{url('our-services')}}">{{__("Real Estate")}}</a></li>
                                <li><a href="{{url('our-services')}}">{{__("Construction Works")}}</a></li>
                                <li><a href="{{url('our-services')}}">{{__("Consultancy")}}</a></li>
                                <li><a href="{{url('our-services')}}">{{__("Design")}}</a></li>
                                <li><a href="{{url('our-services')}}">{{__("Surveying")}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Insights</h3>
                        </div>
                        @foreach (\BinshopsBlog\Models\BinshopsPost::orderBy("posted_at","desc")->limit(2)->get() as $item)
                        @php
                            $post=\BinshopsBlog\Models\BinshopsPostTranslation::find($item->id);
                        @endphp
                            <div class="post">
                                <figure class="post-thumb"><a href="{{$post->url('en')}}"><img src="{{asset("blog_images/$post->image_large")}}" alt="{{$post->title}}"></a></figure>
                                <h5><a href="{{$post->url('en')}}">{{$post->title}}</a></h5>
                                {{-- <p>{{date($item->posted_at)}}</p> --}}
                            </div>
                        @endforeach
                        <div class="post-inner">
                            
                            {{-- <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                <p>Mar 24, 2020</p>
                            </div> --}}
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
                <figure class="footer-logo"><a href="{{url("/")}}"><img src="{{asset("assets/images/footer-logo.png")}}" alt="logo" style="height:93px"></a></figure>
                <div class="copyright pull-left">
                    <p><a href="{{url("/")}}">L-Time Properties</a> &copy; {{date('Y')}}. All Right Reserved</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="{{url('terms')}}">Terms of Service</a></li>
                    <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
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


<!-- jquery plugins -->
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
<script src="{{asset("assets/js/product-filter.js")}}"> </script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCM_4EWUyvbxHuDXEowPuxPsbCF3J7mINI"></script>
<script src="{{asset('assets/js/gmaps.js')}}"></script>
<script src="{{asset('assets/js/map-helper.js')}}"></script>

<!-- main-js -->
<script src="{{asset("assets/js/script.js")}}"></script>
    @stack('scripts')
    @livewireScripts()
</body><!-- End of .page_wrapper -->
</html>
