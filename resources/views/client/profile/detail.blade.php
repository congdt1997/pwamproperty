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
            <img src="admin_asset/images/upload/user/{{$user->image}}" alt="" style=" height: 280px; width:auto; "/>
            <div class="layout-bordered-aside-group">
                <dl class="list-terms-1">
                    <dt>Phone: </dt>
                    <dd><span class="icon mdi-phone mdi"></span><a class="list-terms-1-link-big" href="tel:#">{{$user->phone}}</a></dd>
                </dl>
                <dl class="list-terms-1">
                    <dt>E-mail:</dt>
                    <dd><span class="icon mdi mdi-email-outline"></span><a href="mailto:#">{{$user->email}}</a></dd>
                </dl>
                <dl class="list-terms-1">
                    <dt>Date Of Birth</dt>
                    <dd><span class="icon mdi fab fa-fw fas fa-birthday-cake mr-1">></span><a href="#">{{$user->dateOfBirth}}</a></dd>
                </dl>
                <dl class="list-terms-1">
                    <dt>Address</dt>
                    <dd><span class="icon mdi mdi-map-marker"></span><a href="#">{{$user->address}}</a></dd>
                </dl>
                <dl class="list-terms-1">
                    <dt>Gender</dt>
                    <dd><span class="icon mdi fab fa-fw fas fa-transgender mr-1 "></span><a href="#">@if($user -> gender == "M")
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
            <h2>Change Profile</h2>
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
            <form  action="client/profile/detail" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row row-20">
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <input class="form-input"  id="contact-name" type="text" value="{{$user->fullname}}" name="fullname" data-constraints="@Required">
                            <label class="form-label" for="contact-name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email" value="{{$user->email}}"  data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email">E-mail</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-phone" type="password" name="password" value="{{$user->password}}"  >
                            <label class="form-label" for="contact-phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-phone" type="password" name="confirmPassword" value="{{$user->password}}"  >
                            <label class="form-label" for="contact-phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <input class="form-input" placeholder="Facebook" id="contact-phone" type="text" name="facebook" value="{{$user->facebook}}"  >
                            <label class="form-label" for="contact-phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <input class="form-input" placeholder="Date Of Birth" id="contact-phone" type="date" name="dateOfBirth" value="{{$user->dateOfBirth}}"  >
                            <label class="form-label" for="contact-phone">Date Of Birth</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <input class="form-input" placeholder="Phone" id="contact-phone" type="text" name="phone" value="{{$user->phone}}"  >
                            <label class="form-label" for="contact-phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <input class="form-input" placeholder="Address" id="contact-phone" type="text" name="address" value="{{$user->address}}"  >
                            <label class="form-label" for="contact-phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                        <label>Image</label>
                        <input name="image" type="file" class="form-control" value="{{$user->image}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <select name="gender" class=" form-control">
                                @if($user -> gender == 'F')
                                    <option value="none" disabled="">Select Gender
                                    </option>
                                    <option value="M">Male</option>
                                    <option value="F" selected="">Female</option>
                                @else
                                    <option value="none" disabled="">Select Gender
                                    </option>
                                    <option value="M" selected="">Male</option>
                                    <option value="F">Female</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="button button-sm button-primary" type="submit">Change profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
            </div>
        </div>
    </section>
@endsection
