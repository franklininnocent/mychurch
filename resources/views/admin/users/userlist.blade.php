<!-- DataTables -->
<link rel="stylesheet" href="{{ asset("bower_components/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}" type="text/css" />
<link rel="stylesheet" href="{{ asset("bower_components/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}" type="text/css" />

@extends('admin.layouts.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    {{--<div class="content-wrapper">--}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>User Manager</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Business</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>

    <!-- Main content -->
    {{-- <section class="content">--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($users as $user)
                                <?php
                                       // echo  $user->email;
                                //dd($user);
                                ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role_name}}</td>
                                    <td>@if($user->active == true) Active @else Inactive @endif </td>
                                    <td>
                                        <a href="{{ url('/admin/business/edit/' . $user->id . '') }}" class="btn-sm btn-primary btn-xs" title="Edit Category" >
                                            <span class="fas fa-edit" aria-hidden="true"/></a>
                                        {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/business', $user->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                        {!! Form::button('<span class="fas fa-trash" aria-hidden="true" title="Delete business" />', array(
                                                    'type' => 'submit',
                                                    'class' => 'btn-sm btn-danger btn-xs',
                                                    'title' => 'Delete business',
                                                    'onclick'=>'return confirm("Do you want to delete this business account?")'
                                            ));!!}
                                        {!! Form::close() !!}


                                    </td>
                                </tr>
                            <?php $i++;?>
                            @endforeach
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    {{-- </section>--}}
    <!-- /.content -->
    {{--</div>--}}
    <!-- /.content-wrapper -->

@endsection

@section('pageScripts')
    <script src={{ asset("bower_components/admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js") }}></script>
    <!-- DataTables -->
    <script src={{ asset("bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js") }}></script>
    <script src={{ asset("bower_components/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}></script>
    <script src={{ asset("bower_components/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}></script>
    <script src={{ asset("bower_components/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset("bower_components/admin-lte/dist/js/adminlte.min.js") }}></script>

    <!-- page script -->
    <script>
        $(document).ready(function () {
            $(".close_alert").slideDown(500).delay(5000).slideUp(500);
        });
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@stop