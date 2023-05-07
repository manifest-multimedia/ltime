<div class="menu-area clearfix">
    <!--Mobile Navigation Toggler-->
    <div class="mobile-nav-toggler">
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
    </div>
    <nav class="main-menu navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
                <li class="{{ url()->current() === url('/') ? 'current' : ''}}"><a href="/"><span>Home</span></a>
                   
                </li>
                <li class="{{ url()->current() === url('/our-company') ? 'current' : ''}}"><a href="/our-company"><span>About Us</span></a>
                   
                </li> 
                <li class="{{ url()->current() === url('/our-services') ? 'current' : ''}}"><a href="/our-services"><span>Services</span></a> </li> 
                    
                
                <li class="{{ url()->current() === url('/our-projects') ? 'current' : ''}}"><a href="/our-projects"><span>Properties</span></a>
                    
                </li> 
                <li class="{{ url()->current() === url('/en/insights') ? 'current' : ''}}"><a href="/en/insights"><span>Insights</span></a></li>
                
                <li class="{{ url()->current() === url('/contact-us') ? 'current' : ''}}"><a href="/contact-us"><span>Contact Us</span></a></li>   
            </ul>
        </div>
    </nav>
</div>
<div class="menu-right-content clearfix">
    @if (\Request::route()->getName()==="home")
        <div class="sign-box">
            <a href="{{url('login')}}"><i class="fas fa-user"></i>Sign In</a>
        </div>
    @endif
    <div class="sign-box mr-2 ml-3">
        <a href="{{url('register')}}" class="theme-btn btn-one"><span>+</span>Become an Affiliate</a>
    </div>
</div>