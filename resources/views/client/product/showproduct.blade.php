@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37"
             style="background-image: url(client_asset/images/home/property.jpg;">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Properties Grid</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Properties</a></li>
                <li class="active">Properties Grid</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <section class="section section-md bg-gray-12">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-7 col-xl-8">
                    <div class="row row-30">
                        <div class="col-12">
                            <ul class="block-info-1">
                                <li>
                                    <div class="form-wrap-group-1">

                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="row row-50">
                                <?php
                                $property = null;
                                ?>
                                @foreach($properties as $pro)
                                    @if(($locationName != 'none') && ($typeProperty != 'none'))
                                        @if($pro -> idLocation == $locationName && $pro -> idType == $typeProperty)
                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                <!-- Product Classic-->
                                                <article class="product-classic">
                                                    <div class="product-classic-media">
                                                        <div class="owl-carousel" data-items="1" data-nav="true"
                                                             data-stage-padding="0" data-loop="false"
                                                             data-margin="0" data-mouse-drag="false"><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/>
                                                        </div>
                                                        <div class="product-classic-price">
                                                            <span>{{$pro -> price}}</span></div>
                                                    </div>
                                                    <h4 class="product-classic-title"><a
                                                            href="client/product/detail/{{$pro->id}}">{{$pro -> introduction}}</a>
                                                    </h4>
                                                    <div class="product-classic-divider"></div>
                                                    <ul class="product-classic-list">
                                                        <li><span
                                                                class="icon mdi mdi-vector-square"></span><span>{{$pro -> acreage}}</span>
                                                        </li>
                                                        <li><span
                                                                class="icon hotel-icon-10"></span><span>{{$pro -> bathroom}}</span>
                                                        </li>
                                                        <li><span
                                                                class="icon hotel-icon-05"></span><span>{{$pro -> bedroom}}</span>
                                                        </li>
                                                    </ul>
                                                </article>
                                            </div>
                                                <?php
                                                $property = true;
                                                ?>
                                        @else
                                            <?php
                                                if ($property == true){

                                                } else {
                                                    $property = false;
                                                }
                                            ?>
                                        @endif
                                    @elseif($locationName != 'none')
                                        @if($pro -> idLocation == $locationName)
                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                <!-- Product Classic-->
                                                <article class="product-classic">
                                                    <div class="product-classic-media">
                                                        <div class="owl-carousel" data-items="1" data-nav="true"
                                                             data-stage-padding="0" data-loop="false"
                                                             data-margin="0" data-mouse-drag="false"><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/>
                                                        </div>
                                                        <div class="product-classic-price">
                                                            <span>{{$pro -> price}}</span></div>
                                                    </div>
                                                    <h4 class="product-classic-title"><a
                                                            href="client/product/detail/{{$pro->id}}">{{$pro -> introduction}}</a>
                                                    </h4>
                                                    <div class="product-classic-divider"></div>
                                                    <ul class="product-classic-list">
                                                        <li><span
                                                                class="icon mdi mdi-vector-square"></span><span>{{$pro -> acreage}}</span>
                                                        </li>
                                                        <li><span
                                                                class="icon hotel-icon-10"></span><span>{{$pro -> bathroom}}</span>
                                                        </li>
                                                        <li><span
                                                                class="icon hotel-icon-05"></span><span>{{$pro -> bedroom}}</span>
                                                        </li>
                                                    </ul>
                                                </article>
                                            </div>
                                                <?php
                                                $property = true;
                                                ?>
                                            @else
                                                <?php
                                                if ($property == true){

                                                } else {
                                                    $property = false;
                                                }
                                                ?>
                                        @endif
                                    @elseif($typeProperty != 'none')
                                        @if($pro -> idType == $typeProperty)
                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                <!-- Product Classic-->
                                                <article class="product-classic">
                                                    <div class="product-classic-media">
                                                        <div class="owl-carousel" data-items="1" data-nav="true"
                                                             data-stage-padding="0" data-loop="false"
                                                             data-margin="0" data-mouse-drag="false"><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/><img
                                                                src="admin_asset/images/upload/properties/{{$pro->image}}"
                                                                alt="" width="480" height="287"/>
                                                        </div>
                                                        <div class="product-classic-price">
                                                            <span>{{$pro -> price}}</span></div>
                                                    </div>
                                                    <h4 class="product-classic-title"><a
                                                            href="client/product/detail/{{$pro->id}}">{{$pro -> introduction}}</a>
                                                    </h4>
                                                    <div class="product-classic-divider"></div>
                                                    <ul class="product-classic-list">
                                                        <li><span
                                                                class="icon mdi mdi-vector-square"></span><span>{{$pro -> acreage}}</span>
                                                        </li>
                                                        <li><span
                                                                class="icon hotel-icon-10"></span><span>{{$pro -> bathroom}}</span>
                                                        </li>
                                                        <li><span
                                                                class="icon hotel-icon-05"></span><span>{{$pro -> bedroom}}</span>
                                                        </li>
                                                    </ul>
                                                </article>
                                            </div>
                                                <?php
                                                $property = true;
                                                ?>
                                            @else
                                                <?php
                                                if ($property == true){

                                                } else {
                                                    $property = false;
                                                }
                                                ?>
                                        @endif

                                    @endif
                                @endforeach
                                @if($property == false)
                                        <div>Nothing</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-12">
                            {{$properties -> links()}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <!-- include ../components/_agent-sidebar-right-->
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-12">
                            <div class="block-info">
                                <h3>Find Your Property</h3>
                                <br>
                                <form method="post" action="client/product/listproduct">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Choose Location" name="locationName"
                                                class="form-control-sm form-control">
                                            <option value="none" selected="">Location</option>
                                            @foreach($location as $loca)
                                                @if($loca -> id == $locationName)
                                                <option value="{{$locationName}}>{{$loca -> locationName}}"
                                                        selected="">{{$loca -> locationName}}</option>
                                                @endif
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Choose Location" name="typeProperties"
                                                class="form-control-sm form-control">
                                            <option value="none" selected="">Type Of Properties</option>
                                            @foreach($typeproperties as $type)
                                                @if($type -> id == $typeProperty)
                                                <option value="{{$typeProperty}}>{{$type -> typeProperty}}"
                                                selected="">{{$type -> typeProperty}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-button">
                                        <a class="button button-block button-primary" href="client/product/listproduct">Back to list</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="block-info bg-default">
                                <h3>Price Calculator</h3><br>

                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-1-price" placeholder="Home Price" type="number" name="price" data-constraints="@Required">
                                </div>
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-1-month" placeholder="Month" type="number" name="month" data-constraints="@Required">
                                </div>
                                <ul class="form-wrap-list">
                                    <li>Cost: <span id="answer"> </span>
                                    </li>
                                </ul><br>
                                <div class="form-button">
                                    <button class="button button-block button-primary" onclick="multiple()" >Calculate</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <article class="block-callboard">
                                <div class="block-callboard-body">
                                    <h3 class="block-callboard-title">Get a Free Consultation</h3>
                                    <div class="block-callboard-divider"></div>
                                    <div class="block-callboard-text">
                                        <p>If you have any questions, just call or email us, and we will answer you
                                            shortly.</p>
                                    </div>
                                    <ul class="block-callboard-list">
                                        <li>
                                            <div class="block-callboard-tell"><a href="tel:0962222782">096 2222 782</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-callboard-mail"><a
                                                    href="mailto:pwam.realestate@gmail.com">pwam.realestate@gmail.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <a class="button button-block button-secondary" href="contact-us.html">Contact
                                        us</a>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function multiple(){
            var value1 = document.getElementById("contact-1-price").value;
            var value2 = document.getElementById("contact-1-month").value;

            var result = parseFloat(value1) * parseFloat(value2);

            if(!isNaN(result)){
                document.getElementById("answer").innerHTML=result + "$";
            }
        }
    </script>
@endsection

