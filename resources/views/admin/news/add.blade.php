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
                            <form action="admin/news/add" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" placeholder="Text" class="form-control"></div>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input name="image" type="file" class="form-control">
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Content</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="content1" placeholder="Text" class="form-control"></div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a type="reset" href="admin/news/list" class="btn btn-danger">Cancel</a>
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
