<!-- bradcam_area  -->
<div class="property_details_banner">
                <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-8 col-lg-6">
                                <div class="comfortable_apartment">
                                    <h4>{{$property->title}}</h4>
                                    <p> <img src="img/svg_icon/location.svg" alt=""> 200/A, Greenland, Texaro, USA</p>
                                    <div class="quality_quantity d-flex">
                                        <div class="single_quantity">
                                            <img src="{{asset('front-css/img/svg_icon/color_box.svg')}}" alt="">
                                            <span>{{$property->sqft}} Sqft</span>
                                        </div>
                                        <div class="single_quantity">
                                            <img src="img/svg_icon/color_bed.svg" alt="">
                                            <span>{{$property->bed_space}} Bed</span>
                                        </div>
                                        <div class="single_quantity">
                                            <img src="img/svg_icon/color_bath.svg" alt="">
                                            <span>{{$property->toilet}} Bath</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-4 col-lg-6">
                                <div class="prise_quantity">
                                    <h4>₦ {{number_format($properties->price,2,'.',',')}}</h4>
                                    <a href="#">+10 367 457 735</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
            <!--/ bradcam_area  -->