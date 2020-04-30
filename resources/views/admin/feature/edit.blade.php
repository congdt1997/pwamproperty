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
                            <form action="admin/feature/edit/{{$feature -> id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <a>Market</a>
                                    @if($feature -> market == 1)
                                        <input type="checkbox" name="market" value=1 checked/>
                                    @else
                                        <input type="checkbox" name="market" value=1/>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <a>Supermarket</a>
                                    @if($feature -> supermarket == 1)
                                        <input type="checkbox" name="supermarket" value=1 checked/>
                                    @else
                                        <input type="checkbox" name="supermarket" value=1/>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <a>Gym</a>
                                    @if($feature -> gym == 1)
                                        <input type="checkbox" name="gym" value=1 checked/>
                                    @else
                                        <input type="checkbox" name="gym" value=1/>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <a>Hospital</a>
                                    @if($feature -> hospital == 1)
                                        <input type="checkbox" name="hospital" value=1 checked/>
                                    @else
                                        <input type="checkbox" name="hospital" value=1/>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <a>Theater</a>
                                    @if($feature -> theater == 1)
                                        <input type="checkbox" name="theater" value=1 checked/>
                                    @else
                                        <input type="checkbox" name="theater" value=1/>
                                    @endif
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


