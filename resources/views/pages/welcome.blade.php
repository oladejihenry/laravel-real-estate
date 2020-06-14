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
                             {{ $properties->type()->first()->name }}
                            </div> 
                            
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                    <h3><a href="{{ route('categories.show',['category'=>strtolower($properties->apartmenttype()->first()->name), 'property'=>$properties->slug]) }}">{{$properties->title}}</a></h3>
                                    <div class="mark_pro">
                                        <img src="{{asset('front-css/img/svg_icon/location.svg')}}" alt="">
                                        <span>{{ $properties->location()->first()->city }}</span>
                                    </div>
                                    <div class="tag">
                                        <i class="fa fa-tag" aria-hidden="true"></i>
                                        <span>{{ $properties->apartmenttype()->first()->name }}</span>
                                    </div>
                                    @guest
                                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                        
                                        <span class="amount">₦ {{number_format($properties->price,2,'.',',')}}</span>
                                        <!-- <div class="col-md-8 col-md-offset-2">
                                            <p>
                                                <div>
                                                    Lagos Eyo Print Tee Shirt
                                                    ₦ 2,950
                                                </div>
                                            </p> -->
                                        <input type="hidden" name="email" value="">
                                        <input type="hidden" name="orderID" value="{{$properties->id}}">
                                        <input type="hidden" name="amount" value="{{number_format($properties->price,2,'.',',')}}">
                                        <!-- 150000000 -->
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['user_id' => '',]) }}" >
                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                        {{ csrf_field() }}
                                      
                                            <button class="buy" type="submit" value="Buy Now">
                                             Buy Now
                                            </button>
                                       
                                    </form>
                                    @endguest
                                    @auth
                                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                        
                                        <span class="amount">₦ {{number_format($properties->price,2,'.',',')}}</span>
                                        <!-- <div class="col-md-8 col-md-offset-2">
                                            <p>
                                                <div>
                                                    Lagos Eyo Print Tee Shirt
                                                    ₦ 2,950
                                                </div>
                                            </p> -->
                                        <input type="hidden" name="email" value="{{Auth::user()->email}}">
                                        <input type="hidden" name="orderID" value="{{$properties->id}}">
                                        <input type="hidden" name="amount" value="{{number_format($properties->price,2,'.',',')}}">
                                        <!-- 150000000 -->
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['user_id' => Auth::user()->id,]) }}" >
                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                        {{ csrf_field() }}
                                      
                                            <button class="buy" type="submit" value="Buy Now">
                                             Buy Now
                                            </button>
                                       
                                    </form>
                                    @endauth
                            </div>
                        </div>
                        <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="{{asset('front-css/img/svg_icon/square.svg')}}" alt="">
                                            <span>{{$properties->sqft}} Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="{{asset('front-css/img/svg_icon/bed.svg')}}" alt="">
                                            <span>{{$properties->bed_space}} Bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="{{asset('front-css/img/svg_icon/bath.svg')}}" alt="">
                                            <span>{{$properties->bathroom}} Bath</span>
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