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
                                <li><a href="#">Payment</a></li>
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
                                    <th>Id</th>
                                    <th>Created at</th>
                                    <th>Type of code</th>
                                    <th>Serial</th>
                                    <th>Code</th>
                                    <th>User</th>
                                    <th>Confirm</th>
                                    <th>Cancel</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payment as $pay)
                                    <tr>
                                        <td>{{$pay -> id}}</td>
                                        <td>{{$pay -> created_at}}</td>
                                        <td>{{$pay -> idTypeofcode}}</td>
                                        <td>{{$pay -> serial}}</td>
                                        <td>{{$pay -> code}}</td>
                                        <td><a href="staff/user/edit/{{$pay->idUser}}">{{$pay -> idUser}}</a></td>
                                        @if($pay -> comment == null)
                                            <td>
                                                <form action="staff/payment/confirm/{{$pay -> id}}" method="GET">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="hidden" name="comment12" value="ok">
                                                <button class="btn btn-secondary" type="submit">Confirm</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="staff/payment/notconfirm/{{$pay -> id}}" method="GET">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="comment1" value="not">
                                                    <button class="btn btn-secondary" type="submit">Cancel</button>
                                                </form>
                                            </td>
                                        @elseif($pay -> comment == 'not')
                                            <td>
                                                <form action="staff/payment/confirm/{{$pay -> id}}" method="GET">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="comment12" value="ok">
                                                    <button class="btn btn-secondary" type="submit">Active</button>
                                                </form>
                                            </td>
                                            <td>Done</td>
                                        @elseif($pay -> comment == 'ok')
                                            <td>
                                                <form action="staff/payment/notconfirm/{{$pay -> id}}" method="GET">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="comment12" value="not">
                                                    <button class="btn btn-secondary" type="submit">Block</button>
                                                </form>
                                            </td>
                                            <td>Done</td>
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
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>
@endsection
