@extends('client.layout.index')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37" style="background-image: url(client_asset/images/home/property.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Properties Grid</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Payment</a></li>
                <li class="active">History Payment</li>
            </ul>
        </div>
    </section>
    @if(session('notification'))
        <div class="alert alert-success">
            {{session('notification')}}
        </div>
    @endif
    <section class="section section-md bg-gray-12">
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID Payment</th>
                    <th>Card</th>
                    <th>Code</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>

                @foreach($payment as $pay)
                    @if($pay -> idUser == $user -> id)
                        <tr>

                            <td>{{$pay -> id}}</td>
                            <td>{{$pay -> idTypeofcode}}</td>
                            <td>{{$pay -> code}}</td>
                            <td>{{$pay -> created_at}}</td>
                            @if($pay -> comment == 'ok')
                            <td>Success</td>
                            @elseif($pay -> comment == 'not')
                            <td>Fail</td>
                            @elseif($pay -> comment == null)
                             <td>Processing</td>
                            @endif
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
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

