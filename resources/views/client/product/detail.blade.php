@extends('client.layout.index')
@section('content')
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Properties</a></li>
                <li class="active">{{$properties->id}}</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <section class="section section-md bg-gray-12">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-7 col-xl-8">
                    <!-- Slick Carousel-->
                    <div class="slick-slider-1">
                        <div class="slick-slider-price">{{$properties->price}}\mo</div>
                        <div class="slick-slider carousel-parent" id="parent-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-fade="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                            <div class="item"><img src="admin_asset/images/upload/properties/{{$properties->image}}" alt="" width="763" height="443"/>
                            </div>
                            <div class="item"><img src="admin_asset/images/upload/properties/{{$properties->image}}" alt="" width="763" height="443"/>
                            </div>
                            <div class="item"><img src="admin_asset/images/upload/properties/{{$properties->image}}" alt="" width="763" height="443"/>
                            </div>
                            <div class="item"><img src="admin_asset/images/upload/properties/{{$properties->image}}" alt="" width="763" height="443"/>
                            </div>
                        </div>
                        <div class="slick-slider carousel-child" id="child-carousel" data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="4" data-lg-items="4" data-xl-items="5" data-slide-to-scroll="1" data-for="#parent-carousel">
                            <div>
                                <div class="slick-slide-inner" style="background-image: url(admin_asset/images/upload/properties/{{$properties->image}});"></div>
                            </div>
                            <div>
                                <div class="slick-slide-inner" style="background-image: url(admin_asset/images/upload/properties/{{$properties->image}});"></div>
                            </div>
                            <div>
                                <div class="slick-slide-inner" style="background-image: url(admin_asset/images/upload/properties/{{$properties->image}});"></div>
                            </div>
                            <div>
                                <div class="slick-slide-inner" style="background-image: url(admin_asset/images/upload/properties/{{$properties->image}});"></div>
                            </div>
                            <div>
                                <div class="slick-slide-inner" style="background-image: url(admin_asset/images/upload/properties/{{$properties->image}});"></div>
                            </div>
                            <div>
                                <div class="slick-slide-inner" style="background-image: url(admin_asset/images/upload/properties/{{$properties->image}});"></div>
                            </div>
                            <div>
                                <div class="slick-slide-inner" style="background-image: url(admin_asset/images/upload/properties/{{$properties->image}});"></div>
                            </div>
                        </div>
                    </div>
                    <div class="features-block">
                        <div class="features-block-inner">
                            <div class="features-block-item">
                                <ul class="features-block-list">
                                    <li><span class="icon hotel-icon-10"></span><span>{{$properties->bathroom}} Bathrooms</span></li>
                                    <li><span class="icon hotel-icon-05"></span><span>{{$properties->bedroom}} Bedrooms</span></li>
                                    <li><span class="icon mdi mdi-vector-square"></span><span>{{$properties->acreage}} Sq Ft</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <p>{{$properties->introduction}}</p>
                    <p>{{$properties->detail}}</p>
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-1" role="tab">
                                <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1" aria-expanded="true"><span>Address</span>
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="collapse show" id="accordion1-collapse-1" role="tabpanel" aria-labelledby="accordion1-heading-1" data-parent="#accordion1">
                                <div class="card-body">
                                    <div class="layout-1">
                                        <dl class="list-terms-inline">
                                            <dt>Address:</dt>
                                            <dd>{{$properties->detailaddress}}</dd>
                                        </dl>
                                        <dl class="list-terms-inline">
                                            <dt>City:</dt>
                                            @foreach($location as $loc)
                                                @if($loc->id == $properties -> idLocation)
                                            <dd> {{$loc -> locationName}}</dd>
                                                @endif
                                             @endforeach
                                        </dl>
                                        <dl class="list-terms-inline">
                                            <dt>Type Of Properties:</dt>
                                            @foreach($typeproperties as $type)
                                                @if($type->id == $properties -> idType)
                                                    <dd> {{$type -> typeProperty}}</dd>
                                                @endif
                                            @endforeach
                                        </dl>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion2-heading-1" role="tab">
                                <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion2-collapse-1" aria-controls="accordion2-collapse-1" aria-expanded="true"><span>Features</span>
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="collapse show" id="accordion2-collapse-1" role="tabpanel" aria-labelledby="accordion2-heading-1" data-parent="#accordion2">
                                <div class="card-body">
                                        @foreach($feature as $feat)
                                            @if($feat -> id == $properties -> idFeature)
                                            <ul class="list-marked-2 layout-2">
                                                @if(($feat -> market != 0))
                                                    <li>Market</li>
                                                @endif
                                                @if(($feat -> supermarket != 0))
                                                    <li>Supermarket</li>
                                                @endif
                                                @if(($feat -> hospital != 0))
                                                    <li>Hospital</li>
                                                @endif
                                                @if(($feat -> gym != 0))
                                                    <li>Gym</li>
                                                @endif
                                                @if(($feat -> theater != 0))
                                                    <li>Theater</li>
                                                @endif
                                            </ul>
                                            @endif
                                         @endforeach
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Bootstrap collapse-->
{{--                    <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist" aria-multiselectable="false">--}}
{{--                        <!-- Bootstrap card-->--}}
{{--                        <article class="card card-custom card-corporate">--}}
{{--                            <div class="card-header" id="accordion3-heading-1" role="tab">--}}
{{--                                <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion3-collapse-1" aria-controls="accordion3-collapse-1" aria-expanded="true"><span>Floor Plan</span>--}}
{{--                                        <div class="card-arrow"></div></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="collapse show" id="accordion3-collapse-1" role="tabpanel" aria-labelledby="accordion3-heading-1" data-parent="#accordion3">--}}
{{--                                <div class="card-body"><a class="d-block text-center" href="images/single-property-1-694x445.jpg" data-lightgallery="item"><img src="images/single-property-1-694x445.jpg" alt="" width="694" height="445"/></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    <div class="block-group-item">--}}
{{--                        <h3>Property Map</h3>--}}
{{--                        <div class="google-map-container mt-20" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-icon="images/gmap_marker_mini.png" data-icon-active="images/gmap_marker_mini_active.png" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]" data-zoom="5">--}}
{{--                            <div class="google-map google-map-1"></div>--}}
{{--                            <ul class="google-map-markers">--}}
{{--                                <li data-location="9870 St Vincent Place, Glasgow" data-description="9870 St Vincent Place, Glasgow, DC 45 Fr 45."></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- Post Share and Links-->

                    <div class="mt-35 mt-md-50 mt-lg-60">
                        <article class="block-person">
                            @foreach($user as $us)
                                @if($us->id == $properties -> idUser)
                                    <div class="block-person-left"><img src="admin_asset/images/upload/user/{{$us -> image}}" alt="" width="650" height="756"/>
                                    </div>
                            <div class="block-person-body">
                                <h3 class="block-person-title">{{$us -> fullname}}@if($us -> verified_email == 1)
                                        <i><img src="client_asset/images/about/check.png" style="height:20px; width:20px;"></i>
                                    @endif</h3>
                                @if($us -> verified_email == 1)
                                    <p class="block-person-cite">Verified account</p>
                                    @else
                                    <p class="block-person-cite">Account is not verified</p>
                                @endif

                                <ul class="block-person-list">
                                    <li>
                                        <div class="block-person-link"><span class="icon mdi mdi-phone"></span><a href="tel:#">{{$us -> phone}}</a></div>
                                    </li>
                                    <li>
                                        <div class="block-person-link"><span class="icon mdi mdi-email-outline"></span><a class="text-spacing-50" href="mailto:#">{{$us -> email}}</a></div>
                                    </li>
                                    <li>
                                        <div class="block-person-link"><span class="icon mdi mdi-map-marker"></span><a class="text-spacing-50" href="mailto:#">{{$us -> address}}</a></div>
                                    </li>
                                    <li>
                                        <div class="block-person-link"><span class="icon mdi fa-facebook"></span><a target="_blank" class="text-spacing-50" href="{{$us -> facebook}}">&nbsp;&nbsp;Click here</a></div>
                                    </li>
                                </ul>
                                <a class="button button-primary" href="#">Get in Touch</a>
                            </div>
                                @endif
                            @endforeach
                        </article>
                    </div>

                    <div class="post-comment-group">
                        <div class="post-comment-group-title">
                            <h6>{{$count}} comments</h6>
                        </div>
                        <div class="post-comment-group-divider"></div>
                        @if(session('notification'))
                            <div class="alert alert-success">
                                {{session('notification')}}
                            </div>
                        @endif
                        @foreach($review as $re )
                            @if($re -> idProperty == $properties -> id)
                        <article class="post-comment">
                            @foreach($user as $us)
                                @if($us -> id == $re->idUser)
                                <div class="post-comment-left"><img class="img-round" @if(isset($us -> image))src="admin_asset/images/upload/user/{{$us -> image}}" @else src="client_asset/images/blog-post-comment-02-60x62.jpg"  @endif alt="" width="65" height="66"/>
                                </div>

                            <div class="post-comment-main">
                                <div class="post-comment-title">
                                    <h5>{{$us -> fullname}}@if($us -> verified_email == 1)
                                            <i><img src="client_asset/images/about/check.png" style="height:20px; width:20px;"></i>
                                        @endif</h5>
                                    <span class="post-comment-title-time">{{$re->created_at}}</span>
                                </div>
                                <div class="post-comment-text">
                                    <p>{{$re->content}}</p>
                                </div>
                                <ul class="post-comment-list">
                                    <li><a href="#"><span class="icon mdi mdi-thumb-up-outline"></span><span>32</span></a></li>
                                    <li><a href="#"><span class="icon mdi mdi-comment-outline" style="position: relative; top: 2px"></span><span>Reply</span></a></li>
                                </ul>
                            </div>
                                @endif
                            @endforeach
                        </article>
                            @endif
                        @endforeach

                        @if(isset($user_success))
                        <article class="post-comment">
                            <div class="post-comment-left"><img class="img-round" @if(isset($user_success -> image))src="admin_asset/images/upload/user/{{$user_success -> image}}" @else src="client_asset/images/blog-post-comment-02-60x62.jpg"  @endif alt="" width="65" height="66"/>
                            </div>
                            <div class="post-comment-main">
                                <div class="post-comment-title">
                                    <h5>{{$user_success -> fullname}} @if($user_success -> verified_email == 1)
                                            <i><img src="client_asset/images/about/check.png" style="height:20px; width:20px;"></i>
                                        @endif</h5>
                                </div>
                                <form  method="post" action="client/product/detail/{{$properties->id}}">
                                    <input type="hidden" name="_token" value="{{csrf_token('')}}">
                                    <div class="form-wrap">
                                        <label class="form-label" for="comment-message">Your comment</label>
                                        <textarea class="form-input" id="comment-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                    <button class="button button-primary" type="submit">Submit</button>
                                </form>
                            </div>

                        </article>
                            @else

                    <div class="post-comment-main">
                        <center>
                        <a   data-toggle="tab" class="button button-primary text-light" id="ui-to-top" >Login to post your review</a>
                        </center>
                    </div>
                        @endif
                    </div>
                    <div class="block-group-item">
                        <h3>Similar Properties</h3>
                        <div class="row row-50 mt-10">
                            @foreach($location as $loc)
                                @if($loc -> id == $properties -> idLocation)
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <!-- Product Classic-->
                                <article class="product-classic">
                                    <div class="product-classic-media">
                                        <div class="owl-carousel" data-items="1" data-nav="true" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false"><img src="admin_asset/images/upload/properties/{{$properties->image}}" alt="" width="480" height="287"/><img src="admin_asset/images/upload/properties/{{$properties->image}}" alt="" width="480" height="287"/><img src="admin_asset/images/upload/properties/{{$properties->image}}" alt="" width="480" height="287"/><img src="admin_asset/images/upload/properties/{{$properties->image}}" alt="" width="480" height="287"/>
                                        </div>
                                        <div class="product-classic-price"><span>{{$properties->price}}\mo</span></div>
                                    </div>
                                    <h4 class="product-classic-title"><a href="client/product/detail/{{$properties->id}}">{{$properties->introduction}}</a></h4>
                                    <div class="product-classic-divider"></div>
                                    <ul class="product-classic-list">
                                        <li><span class="icon mdi mdi-vector-square"></span><span>{{$properties->acreage}} Sq Ft</span></li>
                                        <li><span class="icon hotel-icon-10"></span><span>{{$properties->bathroom}} Bathrooms</span></li>
                                        <li><span class="icon hotel-icon-05"></span><span>{{$properties->bedroom}} Bedrooms</span></li>
                                    </ul>
                                </article>
                            </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-12">
                            <div class="block-info">
                                <h3>Find Your Property</h3>
                                <form class="rd-mailform form-select" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern" data-placeholder="Choose Location" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="2">Alaska</option>
                                            <option value="3">Arizona</option>
                                            <option value="4">Arkansas</option>
                                            <option value="5">California</option>
                                            <option value="6">Colorado</option>
                                            <option value="7">Connecticut</option>
                                            <option value="8">Delaware</option>
                                            <option value="9">Florida</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern" data-placeholder="Property Status" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="2">Low</option>
                                            <option value="3">Middle</option>
                                            <option value="4">Primary</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern" data-placeholder="Property Type" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option value="2">Low</option>
                                            <option value="3">Middle</option>
                                            <option value="4">Primary</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                    <div class="form-wrap-group">
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Min Price" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">100 $</option>
                                                <option value="3">200 $</option>
                                                <option value="4">300 $</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Max Price" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">1000 $</option>
                                                <option value="3">2000 $</option>
                                                <option value="4">3000 $</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="form-wrap-group">
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Min Area" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">100 Sq Ft</option>
                                                <option value="3">200 Sq Ft</option>
                                                <option value="4">300 Sq Ft</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Max Area" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">1000 Sq Ft</option>
                                                <option value="3">2000 Sq Ft</option>
                                                <option value="4">3000 Sq Ft</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="form-wrap-group">
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Min Resint" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">100</option>
                                                <option value="3">200</option>
                                                <option value="4">300</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Max Resint" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">1000</option>
                                                <option value="3">2000</option>
                                                <option value="4">3000</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="form-button">
                                        <button class="button button-block button-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                                <div class="block-info bg-default">
                                    <h3>Mortgage Calculator</h3>
                                    <form class="rd-mailform form-select" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-1-name" type="text" name="name" data-constraints="@Required">
                                            <label class="form-label" for="contact-1-name">Home Value</label>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Loan Amount" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">50000</option>
                                                <option value="3">100000</option>
                                                <option value="4">200000</option>
                                                <option value="5">500000</option>
                                                <option value="6">1000000</option>
                                                <option value="7">1500000</option>
                                            </select>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Term (Years)" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">10</option>
                                                <option value="3">15</option>
                                                <option value="4">20</option>
                                                <option value="5">25</option>
                                                <option value="6">30</option>
                                                <option value="7">40</option>
                                            </select>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern" data-placeholder="Interest Rate in %" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                                                <option label="placeholder"></option>
                                                <option value="2">0.1%</option>
                                                <option value="3">0.3%</option>
                                                <option value="4">0.5%</option>
                                                <option value="5">0.7%</option>
                                                <option value="6">0.9%</option>
                                                <option value="7">1%</option>
                                            </select>
                                        </div>
                                        <ul class="form-wrap-list">
                                            <li>Financed Amount: <span>0</span>
                                            </li>
                                            <li>Mortgage Payments: <span>0</span>
                                            </li>
                                            <li>Annual Cost of Loan: <span>0</span>
                                            </li>
                                        </ul>
                                        <div class="form-button">
                                            <button class="button button-block button-primary" type="submit">Calculate</button>
                                        </div>
                                    </form>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
