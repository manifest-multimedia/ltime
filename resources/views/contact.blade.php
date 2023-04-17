<x-page-layout title="L-time Properties | Contact Us"> 

    {{-- <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title--> --}}


    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title">
                <h5>Contact us</h5>
                <h2>Get In Touch</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-32"></i></div>
                            <h4>Email Address</h4>
                            <p>
                                <a href="mailto:info@ltimepropertiesltd.com">info@ltimepropertiesltd.com</a> <br />
                                <a href="mailto:ltimepropertieslimited@gmail.com">ltimepropertieslimited@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-33"></i></div>
                            <h4>Phone Number</h4>
                            <p><a href="tel:+233243407156">+233243407156</a><br />
                                <a href="tel:+233206958652">+233206958652</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-34"></i></div>
                            <h4>Office Address</h4>
                            <p>Near GreenVille Hospital, <br />Community 26, Tema</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-section -->
    <section class="contact-section bg-color-1">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h5>Contact</h5>
                            <h2>Contact Us</h2>
                        </div>
                        <div class="form-inner">
                            <form method="post" action="sendemail.php" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                    <div class="google-map-area">
                        <div 
                        
                            class="google-map" 
                            id="contact-google-map" 
                            data-map-lat="5.725874175726685" 
                            data-map-lng="0.03254798932929893" 
                            data-icon-path="assets/images/icons/map-marker.png"  
                            data-map-title="L-Time Properties (Main Office)" 
                            data-map-zoom="12" 
                            data-markers='{
                                "marker-1": [5.725874175726685, 0.03254798932929893, "<h4>L-Time Properties (Main Office)</h4><p>Ghana</p>","assets/images/icons/map-marker.png"]
                            }'>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

</x-page-layout>