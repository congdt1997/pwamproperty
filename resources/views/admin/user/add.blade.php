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
                                <li><a href="#">Table</a></li>
                                <li class="active">Data table</li>
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
                            @if(session('notification'))
                                <div class="alert alert-success">
                                    {{session('notification')}}
                                </div>
                            @endif
                            <form action="admin/user/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="fullname" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                    <div class="col-12 col-md-9"><input type="password" id="text-input" name="password" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="phone" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date Of Birth</label></div>
                                    <div class="col-12 col-md-9"><input type="date" id="text-input" name="dateOfBirth" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Facebook</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="facebook" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="address" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Role</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="idRole" class="form-control-sm form-control">
                                            <option value="none" selected="" disabled="">Select Role</option>
                                            @foreach($role as $rl)
                                                <option value={{$rl -> id}}>{{$rl -> roleName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <select name="gender" class="form-control-sm form-control">
                                        <option value="none" selected="" disabled="">Select Gender</option>
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                    </select>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                                </div>
                                <div class="form-group">
                                    <a>Status</a>
                                    <input type="checkbox" name="status" value=1 />
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
