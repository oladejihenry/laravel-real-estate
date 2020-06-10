@extends('main')

@section('body')
<!-- popular_property  -->
<div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Latest Properties</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($property as $properties)
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                    For Sale
                            </div>
                            <img src="{{ asset('/' . $properties->featured_image ) }}" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="{{ route('posts.show',$properties->slug) }}">{{$properties->title}}</a></h3>
                                    <div class="mark_pro">
                                        <img src="{{asset('front-css/img/svg_icon/location.svg')}}" alt="">
                                        <span>{{ $properties->location()->first()->city }}</span>
                                    </div>
                                    <div class="tag">
                                        <i class="fa fa-tag" aria-hidden="true"></i>
                                        <span>{{ $properties->apartmenttype()->first()->name }}</span>
                                    </div>
                                    <span class="amount">₦ {{number_format($properties->price, 2, '.', ',')}}</span>
                                    <a href="#" class="buy">Buy Now</a>
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/square.svg" alt="">
                                            <span>1200 Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bed.svg" alt="">
                                            <span>2 Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="img/svg_icon/bath.svg" alt="">
                                            <span>2 Bath</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="#" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /popular_property  -->
@endsection