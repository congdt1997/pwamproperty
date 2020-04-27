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
                                <li><a href="#">Property</a></li>
                                <li class="active">{{$properties->id}}</li>
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
                            <form action="admin/property/edit/{{$properties->id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Introduction</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="introduction" value="{{$properties->introduction}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Address</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="idLocation" class="form-control-sm form-control">
                                            <option value="none" selected="" disabled="">Select
                                                Role
                                            </option>
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
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Detail Address</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="detailaddress" value="{{$properties->detailaddress}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Address</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="idType" class="form-control-sm form-control">
                                            <option value="none" selected="" disabled="">Select
                                                Role
                                            </option>
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
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Detail Information</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="detail" value="{{$properties->detail}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bedroom</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="bedroom" value="{{$properties->bedroom}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bathroom</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="bathroom" value="{{$properties->bathroom}}" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Acreage</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="acreage" value="{{$properties->acreage}}" placeholder="Text" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <label>Image</label>
                                    <p><img width="400px"
                                            src="admin_asset/images/upload/properties/{{$properties->image}}"
                                            alt=""/></p>
                                    <input name="image" type="file" class="form-control"
                                           value="{{$properties->image}}">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a type="reset" href="admin/property/list" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- .animated -->
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>

                    <th>Id</th>
                    <th>User</th>
                    <th>Content</th>
                    <th>Created at</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($properties->review as $re)
                    <tr>
                        <td>{{$re -> id}}</td>
                        <td>{{$re -> idUser}}</td>
                        <td>{{$re -> content}}</td>
                        <td>{{$re -> created_at}}</td>
                        <td><i class="fa fa-trash-o fa-fw"></i><a href="admin/review/delete/{{$re->id}}/{{$properties->id}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div><!-- .content -->

    <div class="clearfix"></div>
@endsection
