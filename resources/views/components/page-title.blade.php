@props(['pagetitle'])
@if(isset($pagetitle))
@php


    $image=strtolower(str_replace(" ", "-", $pagetitle));

@endphp
<!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset("assets/images/background/$image.jpg")}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>{{$pagetitle}}</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li>{{$pagetitle}}</li>
                    </ul>
                </div>
            </div>
        </section>
<!--End Page Title-->
@endif