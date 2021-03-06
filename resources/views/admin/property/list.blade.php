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

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        @if(session('notification'))
                            <div class="alert alert-success">
                                {{session('notification')}}
                            </div>
                        @endif
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Id</th>
                                    <th>Introduction</th>
                                    <th>Address</th>
                                    <th>Bedroom</th>
                                    <th>Bathroom</th>
                                    <th>Acreage</th>
                                    <th>Action</th>
                                    <th>Feature</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($properties as $pro)
                                    <tr>
                                        <td><img width="200px" height="150px" src="admin_asset/images/upload/properties/{{$pro->image}}"></td>
                                        <td>{{$pro -> id}}</td>
                                        <td>{{$pro -> introduction}}</td>
                                        <td>{{$pro -> detailaddress}}</td>
                                        <td>{{$pro -> bedroom}}</td>
                                        <td>{{$pro -> bathroom}}</td>
                                        <td>{{$pro -> acreage}}</td>
                                        <td><i class="fa fa-pencil fa-fw"></i><a href="admin/property/edit/{{$pro->id}}">Edit</a>|<i class="fa fa-trash-o fa-fw"></i><a href="admin/property/delete/{{$pro->id}}">Delete</a></td>
                                        @if($pro -> idFeature != 0)
                                            <td><a class="btn btn-secondary" href="admin/feature/edit/{{$pro->idFeature}}">Edit Features</a></td>
                                            @else
                                        <td><a class="btn btn-secondary" href="admin/feature/add/{{$pro->id}}">Add Features</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

    <script src="admin_asset/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="admin_asset/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="admin_asset/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="admin_asset/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="admin_asset/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="admin_asset/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="admin_asset/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="admin_asset/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="admin_asset/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="admin_asset/assets/js/init/datatables-init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
@endsection
