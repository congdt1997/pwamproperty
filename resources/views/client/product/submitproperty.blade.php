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
                        <h2>Your turn: {{$user -> count}}</h2>
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
                        @if($user -> count > 0)
                        <form  action="client/product/submitproperty" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row row-20">
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-intro" type="text" name="introduction" data-constraints="@Required">
                                        <label class="form-label" for="contact-intro">Introduction</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <select name="idType" id="contact-location" class="col-md-12">
                                            <option value="none" selected="" readonly>Select type of property</option>
                                            @foreach($typeofproperties as $type)
                                                <option value={{$type -> id}}>{{$type -> typeProperty}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <select name="idLocation" id="contact-location" class="col-md-12">
                                            <option value="none" selected="" readonly>Select Location</option>
                                            @foreach($location as $loc)
                                                <option value={{$loc -> id}}>{{$loc -> locationName}}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label" for="contact-location">Select Location</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-address" type="text" name="detailaddress" data-constraints="@Required">
                                        <label class="form-label" for="contact-address">Detail Address</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <textarea class="form-input" id="contact-detail" name="detail" ></textarea>
                                        <label class="form-label" for="contact-detail">Detail description</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-bed" placeholder="Bedroom" type="number" name="bedroom">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-bath" placeholder="Bathroom" type="number" name="bathroom">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-acreage" placeholder="Acreage" type="number" name="acreage">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-acreage" placeholder="Price" type="number" name="price">
                                    </div>
                                </div>
                                <div  class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" type="hidden" id="contact-iduser" type="number" readonly value="{{$user_success -> id}}" name="idUser">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label>Image 1</label>
                                        <input name="image" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label>Image 2</label>
                                        <input name="image2" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label>Image 3</label>
                                        <input name="image3" type="file" class="form-control">
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
                            @elseif($user -> count == 0)
                        <div>Can not post</div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
