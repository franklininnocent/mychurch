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
                            <li class="breadcrumb-item"><a href="{{ url('admin/users/list') }}">Users List</a></li>
                            <li class="breadcrumb-item active">Add User Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        @if (count($errors->User) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->User->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                    <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add New User</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="addUserForm" method="POST" action="{{ url('/administrator/users/save')  }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="status" class="form-check-input" id="status" checked>
                                                <label class="form-check-label" for="status">Active</label>
                                            </div>
                                            {{--<div class="form-check">
                                                <input type="checkbox" name="role" class="form-check-input" id="role">
                                                <label class="form-check-label" for="role">Is Administrator</label>
                                            </div>--}}
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Role</label>
                                                <select name="role_id" id="role_id" class="form-control select2" style="width: 100%;">
                                                    <option value="" selected="selected">Select your option...</option>
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input type="submit" name="send" value="Submit" class="btn btn-primary">
                                    <a href="{{ url('admin/users/list') }}"><button class="btn btn-danger" type="button">Cancel</button></a>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    {{--</div>--}}

@endsection

@section('pageScripts')
    <!-- jquery-validation -->
    <script src={{ asset("bower_components/admin-lte/plugins/jquery-validation/jquery.validate.min.js") }}></script>
    <script src={{ asset("bower_components/admin-lte/plugins/jquery-validation/additional-methods.min.js") }}></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#addUserForm').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    role_id:{
                        required:true
                    },
                    phone: {
                        required: true
                    },
                },
                messages: {
                    name: {
                        required: "Please enter name!"
                    },
                    email: {
                        required: "Please enter email!"
                    },
                    role_id:{
                        required:"Please select role"
                    },
                    phone: {
                        required: "Please enter phone number!"
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

@stop



{{--
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset("adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset("adminlte/bower_components/select2/dist/css/select2.min.css") }}" rel="stylesheet" type="text/css" />

@extends('admin.layouts.master')


@section('content')





    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User Registration
                --}}
{{--<small>advanced tables</small>--}}{{--

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">User Manager</a></li>
                <li class="active">Add</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">


                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="box-body">
                            <div class="card">

                            <div class="form-group row"></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf



                                    <div class="form-group row">
                                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                        <div class="col-md-6">
                                        <select name="role" class="form-control select2" style="width: 100%;">
                                            @foreach($roles as $role)
                                                <option value={{$role->id}} selected="selected">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="text" class="form-control" name="phone" required>
                                        </div>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group row">
                                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                                        <label class="col-md-4 col-form-label text-md-right">
                                            <input type="radio" name="r3" class="flat-red" checked> Active
                                        </label>
                                        <label class="col-md-4 col-form-label text-md-right">
                                            <input type="radio" name="r3" class="flat-red"> InActive
                                        </label>

                                    </div>


                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>


@endsection

@section('pageScripts')

@stop--}}
