<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
    <div class="blog-sidebar">
        {{-- <div class="sidebar-widget search-widget">
            <div class="widget-title">
                <h4>Search</h4>
            </div>
            <div class="search-inner">
                <form action="blog-1.html" method="post">
                    <div class="form-group">
                        <input type="search" name="search_field" placeholder="Search" required="">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div> --}}
        <div class="sidebar-widget social-widget">
            <div class="widget-title">
                <h4>Follow Us On</h4>
            </div>
            <ul class="social-links clearfix">
                <li><a href="https://web.facebook.com/ltimepropertiesltd/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a></li>
                {{-- <li><a href="blog-1.html"><i class="fab fa-google-plus-g"></i></a></li> --}}
                <li><a href="https://twitter.com/ltimeproperties?lang=en"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/l-time-properties-limited/?originalSubdomain=gh"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://www.instagram.com/ltimepropertiesltd/"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        
        <div class="sidebar-widget post-widget">
            <div class="widget-title">
                <h4>Recent Insights</h4>
            </div>
            @php

            $posts=\BinshopsBlog\Models\BinshopsPost::where('is_published', true)->limit(3)->get();
            // Get Post Info
                
            @endphp
            <div class="post-inner">
                @foreach ($posts as $post)
                @php 
                
                $post_item=\BinshopsBlog\Models\BinshopsPostTranslation::find($post->id);

                @endphp

                <div class="post">
                    <figure class="post-thumb"><a href="{{$post_item->url('en')}}"><img src="{{asset("blog_images/$post_item->image_large")}}" alt=""></a></figure>
                    <h5><a href="{{$post_item->url('en')}}">{!!$post_item->title!!}</a></h5>
                    <span class="post-date">{{date('d F, Y. ', strtotime($post_item->posted_at))}}</span>
                </div>
                @endforeach
               
            </div>

        </div>
        <div class="sidebar-widget category-widget">
            <div class="widget-title">
                <h4>Category</h4>
            </div>
            <div class="widget-content">
                <ul class="category-list clearfix">
                    <li><a href="blog-details.html">Home improvement<span>(9)</span></a></li>
                    <li><a href="blog-details.html">Architecture<span>(5)</span></a></li>
                    <li><a href="blog-details.html">Tips and advice<span>(2)</span></a></li>
                    <li><a href="blog-details.html">Interior<span>(7)</span></a></li>
                    <li><a href="blog-details.html">Real Estate<span>(3)</span></a></li>
                </ul>
            </div>
        </div>
        {{-- <div class="sidebar-widget category-widget">
            <div class="widget-title">
                <h4>Archives</h4>
            </div>
            <div class="widget-content">
                <ul class="category-list clearfix">
                    <li><a href="blog-details.html">November 2016<span>(9)</span></a></li>
                    <li><a href="blog-details.html">November 2017<span>(5)</span></a></li>
                    <li><a href="blog-details.html">November 2018<span>(2)</span></a></li>
                    <li><a href="blog-details.html">November 2019<span>(7)</span></a></li>
                    <li><a href="blog-details.html">November 2020<span>(3)</span></a></li>
                </ul>
            </div>
        </div> --}}
        {{-- <div class="sidebar-widget tags-widget">
            <div class="widget-title">
                <h4>Popular Tags</h4>
            </div>
            <div class="widget-content">
                <ul class="tags-list clearfix">
                    <li><a href="blog-details.html">Real Estate</a></li>
                    <li><a href="blog-details.html">HouseHunting</a></li>
                    <li><a href="blog-details.html">Architecture</a></li>
                    <li><a href="blog-details.html">Interior</a></li>
                    <li><a href="blog-details.html">Sale</a></li>
                    <li><a href="blog-details.html">Rent Home</a></li>
                    <li><a href="blog-details.html">Listing</a></li>
                </ul>
            </div>
        </div> --}}
    </div>
</div>