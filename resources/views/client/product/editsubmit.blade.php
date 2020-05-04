@extends('client.layout.index')
@section('content')
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="layout-bordered">
                <div class="layout-bordered-aside">
                    <div class="layout-bordered-aside-inner">
                        <h2>Your profile:
                            @if($user -> verified_email == 1)
                                <i><img src="client_asset/images/about/check.png" style="height:30px; width:30px;"></i>
                            @else
                                Not Yet
                            @endif
                        </h2><br>
                        <h4>Name: {{$user->fullname}}</h4>
                        <br>
                        <img src="admin_asset/images/upload/user/{{$user->image}}" alt=""
                             style=" height: 280px; width:auto; "/>
                        <div class="layout-bordered-aside-group">
                            <dl class="list-terms-1">
                                <dt>Phone:</dt>
                                <dd><span class="icon mdi-phone mdi"></span><a class="list-terms-1-link-big"
                                                                               href="tel:#">{{$user->phone}}</a></dd>
                            </dl>
                            <dl class="list-terms-1">
                                <dt>E-mail:</dt>
                                <dd><span class="icon mdi mdi-email-outline"></span><a
                                        href="mailto:#">{{$user->email}}</a></dd>
                            </dl>
                            <dl class="list-terms-1">
                                <dt>Date Of Birth</dt>
                                <dd><span class="icon mdi fab fa-fw fas fa-birthday-cake mr-1">></span><a
                                        href="#">{{$user->dateOfBirth}}</a></dd>
                            </dl>
                            <dl class="list-terms-1">
                                <dt>Address</dt>
                                <dd><span class="icon mdi mdi-map-marker"></span><a href="#">{{$user->address}}</a></dd>
                            </dl>
                            <dl class="list-terms-1">
                                <dt>Gender</dt>
                                <dd><span class="icon mdi fab fa-fw fas fa-transgender mr-1 "></span><a
                                        href="#">@if($user -> gender == "M")
                                            Male
                                        @else
                                            Female
                                        @endif</a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="layout-bordered-main">
                    <div class="layout-bordered-main-inner">
                        <h2>Edit your property</h2>
                        <!-- RD Mailform-->
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $er)
                                    {{$er}}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('notification'))
                            <div class="alert alert-success">
                                {{session('notification')}}
                            </div>
                        @endif
                        <form  action="client/product/editsubmit/{{$properties -> id}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row row-20">
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-intro" value="{{$properties -> introduction}}" type="text" name="introduction" data-constraints="@Required">
                                        <label class="form-label" for="contact-intro">Introduction</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <select name="idType" id="contact-location" class="col-md-12">
                                            <option value="none" selected="" readonly>Select type of property</option>
                                            @foreach($typeofproperties as $typepro)
                                                @if($typepro -> id == $properties -> idType)
                                                    <option value="{{$typepro -> id}}"
                                                            selected>{{$typepro -> typeProperty}}</option>
                                                @else
                                                    <option
                                                        value={{$typepro -> id}}>{{$typepro -> typeProperty}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <select name="idLocation" id="contact-location" class="col-md-12">
                                            <option value="none" selected="" readonly>Select Location</option>
                                            @foreach($location as $loc)
                                                @if($loc -> id == $properties -> idLocation)
                                                    <option value="{{$loc -> id}}"
                                                            selected>{{$loc -> locationName}}</option>
                                                @else
                                                    <option
                                                        value={{$loc -> id}}>{{$loc -> locationName}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="contact-location">Select Location</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-address" value="{{$properties -> detailaddress}}" type="text" name="detailaddress" data-constraints="@Required">
                                        <label class="form-label" for="contact-address">Detail Address</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <textarea class="form-input" id="contact-detail" value="{{$properties -> detail}}" name="detail" ></textarea>
                                        <label class="form-label" for="contact-detail">{{$properties -> detail}}</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-bed" value="{{$properties -> bedroom}}" placeholder="Bedroom" type="number" name="bedroom">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-bath" value="{{$properties -> bathroom}}" placeholder="Bathroom" type="number" name="bathroom">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-acreage" value="{{$properties -> acreage}}" placeholder="Acreage" type="number" name="acreage">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-acreage" value="{{$properties -> price}}" placeholder="Price" type="number" name="price">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-iduser" type="number" readonly value="{{$user_success -> id}}" name="idUser">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label>Image 1</label>
                                        <p><img width="400px"
                                                src="admin_asset/images/upload/properties/{{$properties->image}}"
                                                alt=""/></p>
                                        <input name="image" type="file" value="{{$properties -> image}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label>Image 2</label>
                                        <p><img width="400px"
                                                src="admin_asset/images/upload/properties/{{$properties->image2}}"
                                                alt=""/></p>
                                        <input name="image2" type="file" value="{{$properties -> image2}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label>Image 3</label>
                                        <p><img width="400px"
                                                src="admin_asset/images/upload/properties/{{$properties->image3}}"
                                                alt=""/></p>
                                        <input name="image3" type="file" value="{{$properties -> image3}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="button button-sm button-primary" type="submit">Post Property</button>
                                </div>
                                <div class="col-md-12">
                                    <a class="button button-sm button-primary" href="client/product/submitlist">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
