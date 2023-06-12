<div class="deals-list-content list-item">
    @foreach ($properties as $item)

    
    <div class="deals-block-one">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image"><img style="width:300px; height:350px;object-fit:cover" src="{{ ($item->featured_image) ? asset('storage/'.$item->featured_image) : asset('assets/backend/assets/img/400x300.jpg') }}" alt="{{ $item->title.' - featured_image' }}"></figure>
                <div class="batch"><i class="icon-11"></i></div>
                @if($item->featured)
                    <span class="category">Featured</span>
                @endif
                {{-- <div class="buy-btn"><a href="property-details.html">For Buy</a></div> --}}
            </div>
            <div class="lower-content">
                <div class="title-text"><h4><a href="#">{{$item->title}}</a></h4></div>
                <div class="price-box clearfix">
                    <div class="price-info pull-left">
                        <h6>Start From</h6>
                        <h4>${{$item->price}}</h4>
                    </div>
                    {{-- <div class="author-box pull-right">
                        <figure class="author-thumb"> 
                            <img src="assets/images/feature/author-1.jpg" alt="">
                            <span>Michael Bean</span>
                        </figure>
                    </div> --}}
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
                <div class="other-info-box clearfix">
                    <div class="btn-box pull-left"><a href="{{url("p/$item->id")}}" class="theme-btn btn-two">Buy Now</a></div>
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    
</div>