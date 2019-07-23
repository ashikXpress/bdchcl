@extends('backend.mainlayout')
@section('title')
    Team Setup
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
                <small>Team</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Dashboard</a></li>
                    <li class="active">Manage Sales</li>
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
                                <a class="" href="{{ route('sales.list') }}"> <i class="fa fa-list"></i>Sales History</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{ route('sales.update', $salesHistory->id) }}" method="post">
                                @csrf
                                @method('PUT')
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
                                    <label>Employee Id</label>
                                    <input type="text" class="form-control" placeholder="Enter Employee ID*" name="emp_id" value="{{ $salesHistory->emp_id }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Number of Member</label>
                                    <input type="text" class="form-control" placeholder="Number of member*" name="achieve_member" value="{{ $salesHistoryachieve_member }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Achieve HCP</label>
                                    <input type="text" class="form-control" placeholder="Enter HCP*" name="achieve_hcp" value="{{ $salesHistoryachieve_hcp }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Due Amount</label>
                                    <input type="text" class="form-control" placeholder="Enter Due Amount*" name="due_hcp" value="{{ $salesHistorydue_hcp }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Employee Commission</label>
                                    <input type="text" class="form-control" placeholder="Enter Employee Commission*" name="earn_commission" value="{{ $salesHistoryearn_commission }}" required>
                                </div>
                                <div class="reset-button">
                                    <button type="submit" value="Submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

@endsection
