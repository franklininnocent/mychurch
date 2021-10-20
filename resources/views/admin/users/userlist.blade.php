<!-- DataTables -->
<link rel="stylesheet" href="{{ asset("adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

@extends('admin.layouts.master')


@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users List
                <small>List of Registered Users</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#">Users</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">




                    <div class="box">


                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $i = 1;?>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>

                                        <td>{{$user->role_name}}</td>
                                        <td>@if($user->active == true) Active @else Inactive @endif </td>
                                        <td>



                                        <a href="{{ url('/shadmin/users/' . $user->id . '') }}" class="btn btn-primary btn-xs" title="Edit Promocode" >
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>

                                            <a href="{{ url('/admin/promocode/' . $user->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Promocode">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"/></a>
                                                {{--{!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/promocode', $user->id],
                                                'style' => 'display:inline'
                                                ]) !!}--}}
{{--                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Promocode" />', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Delete Promocode',
                                                'onclick'=>'return confirm("Confirm delete?")'
                                                ));!!}
                                                {!! Form::close() !!}--}}

                                        </td>
                                    </tr>
                                    <?php $i++;?>
                                @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sl.No</th>
                                    <th>Name</th>
                                    <th>Email</th>

                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>


@endsection

@section('pageScripts')
    <!-- DataTables -->
    <script src="{{ asset("adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@stop