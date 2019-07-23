@extends('backend.mainlayout')
@section('title')
    Add Department
@endsection

@section('content')

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
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
            <h1>Admin</h1>
            <small>Area</small>
            <ol class="breadcrumb hidden-xs">
                <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Dashboard</a></li>
                <li class="active">Add Department</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- Form controls -->
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="btn-group">
                            <a class="" href="{{ route('department.list') }}"> <i class="fa fa-list"></i> Department list</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="col-sm-6" action="{{ route('department.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(@session()->has('message'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{{ session('message') }}</li>
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Department Name</label>
                                <input type="text" class="form-control" placeholder="Enter Department Name*" name="department_name" value="{{ old('department_name') }}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" placeholder="Enter Description" name="description" value="{{ old('description') }}" >
                            </div>
                            <div class="reset-button">
                                <button type="submit" value="Submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->

@endsection