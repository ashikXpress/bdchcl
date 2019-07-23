@extends('backend.mainlayout')
@section('title')
    Employee List
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                    </div>
                </form>
                <h1>Employee</h1>
                <small>Employee list</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Dashboard</a></li>
                    <li class="active">Employee</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group">
                                <a class="btn btn-success" href="{{ route('emp.add') }}"> <i class="fa fa-plus"></i> Add Employee
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="panel-header">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="dataTables_length">
                                            <a class="btn btn-default buttons-copy btn-sm" tabindex="0">
                                                <span>Copy</span></a>
                                            <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"><span>CSV</span></a>
                                            <a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0"><span>Excel</span></a>
                                            <a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0"><span>PDF</span></a>
                                            <a class="btn btn-default buttons-print btn-sm" tabindex="0"><span>Print</span></a>

                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="dataTables_length">
                                            <div class="input-group custom-search-form">
                                                <input type="search" class="form-control" placeholder="search..">
                                                <span class="input-group-btn">
                                                                  <button class="btn btn-primary" type="button">
                                                                      <span class="glyphicon glyphicon-search"></span>
                                                                  </button>
                                                              </span>
                                            </div><!-- /input-group -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Office Id</th>
                                        <th>Employee Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Date of Birth</th>
                                        <th>Address</th>
                                        <th>NID</th>
                                        <th>Mobile</th>
                                        <th>User Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employee)
                                        <tr >
                                            <td>
                                                <label>{{ $employee->id }}</label>
                                            </td>
                                            <td>
                                                <label>{{ $employee->uid }}{{ $employee->id }}</label>
                                            </td>
                                            <td><img class="img-thumbnail" style="max-width: 60px;" src="<?php echo asset("$employee->photo"); ?>" alt=""></td>
                                            <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                            <td>{{ $employee->dob }}</td>
                                            <td>{{ $employee->house_no }}, {{ $employee->village_or_rood_no}}, {{ $employee->post_office}}, {{ $employee->sub_district}}, {{ $employee->district}}</td>
                                            <td>{{ $employee->nid_or_birth_id }}</td>
                                            <td>{{ $employee->phone_number }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>
                                                <a type="button" href="{{ route('emp.edit', $employee->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>

                                                </a>
                                                <form action="{{ route('emp.delete', $employee->id) }}" method="post" onsubmit="return confirm('Are You Sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>

                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>


                            </div>
                            {!! $employees->links() !!}
                        </div>
                    </div>

                </div>

            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

@endsection
