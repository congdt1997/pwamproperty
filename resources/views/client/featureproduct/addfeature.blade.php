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
                        <h2>Enter your property</h2>
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
                        <form  action="client/featureproduct/addfeature/{{$properties->id}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row row-20">
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <a>Market</a>
                                        <input  type="checkbox" value="1" name="market" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <a>Supermarket</a>
                                        <input  type="checkbox" value="1" name="supermarket" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <a>Gym</a>
                                        <input  type="checkbox" value="1" name="gym" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <a>Hospital</a>
                                        <input  type="checkbox" value="1" name="hospital" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <a>Theater</a>
                                        <input  type="checkbox" value="1" name="theater" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="button button-sm button-primary" type="submit">Post Feature</button>
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

