<div class="deals-grid-content grid-item">
    <div class="row clearfix">
        @foreach ($properties as $item)
            <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ ($item->featured_image) ? asset('storage/'.$item->featured_image) : asset('assets/backend/assets/img/400x300.jpg') }}" alt="{{ $item->title.' - featured_image' }}" style="width:370px; height:250px;object-fit:cover"></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            @if($item->featured)
                                <span class="category">Featured</span>
                            @endif
                        </div>
                        <div class="lower-content">
                           
                            <div class="title-text" style="padding-top:15px"><h4><a href="#{{$item->id}}">{{$item->title}}</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>${{$item->price}}</h4>
                                </div>
                                
                            </div>
                            @if($item->type=='land')
                <p>{{$item->description}}</p>
                <ul class="more-details clearfix">
                
                    <li><i class="icon-16"></i>Land Size: {{$item->squareft}} Sq Ft</li>
                </ul>
                @elseif ($item->type=='property')
                <p>{{$item->description}}</p>
                <ul class="more-details clearfix">
                    <li><i class="icon-14"></i>{{$item->beds}} Beds</li>
                    <li><i class="icon-15"></i>{{$item->baths}} Baths</li>
                    <li><i class="icon-16"></i>{{$item->squareft}} Sq Ft</li>
                </ul>
                @endif
                            <div class="btn-box"><a href="{{url("p/$item->id")}}" class="theme-btn btn-two">Buy Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>