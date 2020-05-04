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
                            <form action="admin/property/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Introduction</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="introduction" placeholder="Text" class="form-control"></div>
                                </div>                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Location</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="idLocation" class="form-control-sm form-control">
                                            <option value="none" selected="" disabled="">Select Location</option>
                                            @foreach($location as $loc)
                                                <option value={{$loc -> id}}>{{$loc -> locationName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Detail Address</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="detailaddress" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="selectSm" class=" form-control-label">Select Type of property</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="idType" class="form-control-sm form-control">
                                            <option value="none" selected="" disabled="">Select type of property</option>
                                            @foreach($typeofproperties as $type)
                                                <option value={{$type -> id}}>{{$type -> typeProperty}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Detail information</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="detail" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bedroom</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="bedroom" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bathroom</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="bathroom" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Acreage</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="acreage" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price($)</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="price" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image 1</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image 2</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image2" class="form-control-file"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image 3</label></div>
                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image3" class="form-control-file"></div>
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


    </div><!-- .content -->

    <div class="clearfix"></div>
@endsection
