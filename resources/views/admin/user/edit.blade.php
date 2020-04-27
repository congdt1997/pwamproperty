@extends('admin.layout.index')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">User</a></li>
                                <li class="active">{{$user->fullname}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Basic Form</strong> Elements
                        </div>
                        <div class="card-body card-block">
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $er)
                                        {{$er}}<br>
                                    @endforeach
                                </div>
                            @endif
                            <form action="admin/user/edit/{{$user->id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="fullname" value="{{$user->fullname}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" value="{{$user->email}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="text-input" name="password" value="{{$user->password}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="phone" value="{{$user->phone}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date Of Birth</label></div>
                                    <div class="col-12 col-md-9"><input type="date" id="text-input" name="dateOfBirth" value="{{$user->dateOfBirth}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Facebook</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="facebook" value="{{$user->facebook}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="address" value="{{$user->address}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Role</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="idRole" class="form-control-sm form-control">
                                        <option value="none" selected="" disabled="">Select
                                            Role
                                        </option>
                                        @foreach($role as $rl)
                                            @if($rl -> id == $user -> idRole)
                                                <option value="{{$rl -> id}}"
                                                        selected>{{$rl -> roleName}}</option>
                                            @else
                                                <option
                                                    value={{$rl -> id}}>{{$rl -> roleName}}</option>
                                                @endif
                                                @endforeach
                                                </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <select name="gender" class="form-control-sm form-control">
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
                                <div class="row form-group">
                                    <label>Image</label>
                                    <p><img width="400px"
                                            src="admin_asset/images/upload/user/{{$user->image}}"
                                            alt=""/></p>
                                    <input name="image" type="file" class="form-control"
                                           value="{{$user->image}}">
                                </div>
                                <div class="form-control-sm form-control">
                                    <a>Status</a>
                                    @if($user -> status == 1)
                                        <input type="checkbox" name="status" value=1 checked/>
                                    @else
                                        <input type="checkbox" name="status" value=1/>
                                    @endif
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a type="reset" href="admin/user/list" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- .animated -->


    </div><!-- .content -->

    <div class="clearfix"></div>
@endsection
