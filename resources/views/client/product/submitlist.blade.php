@extends('client.layout.index')
@section('content')
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
                @if($pro -> idUser == $user -> id)
                <tr>
                    <td><img width="200px" height="150px" src="admin_asset/images/upload/properties/{{$pro->image}}"></td>
                    <td>{{$pro -> introduction}}</td>
                    <td>{{$pro -> detailaddress}}</td>
                    <td>{{$pro -> bedroom}}</td>
                    <td>{{$pro -> bathroom}}</td>
                    <td>{{$pro -> acreage}}</td>
                    <td><i class="fa fa-pencil fa-fw"></i><a href="client/product/editsubmit/{{$pro->id}}">Edit</a>|<i class="fa fa-trash-o fa-fw"></i><a href="client/product/deletesubmit/{{$pro->id}}">Delete</a></td>
                    @if($pro -> idFeature != 0)
                        <td><a class="btn btn-secondary" href="client/product/editfeature/{{$pro->idFeature}}">Edit Features</a></td>
                    @else
                        <td><a class="btn btn-secondary" href="client/product/addfeature/{{$pro->id}}">Add Features</a></td>
                    @endif
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
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
