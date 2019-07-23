@extends('backend.mainlayout')
@section('title')
    Add Position
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
                <h1>HR</h1>
                <small>position</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Dashboard</a></li>
                    <li class="active">Add position</li>
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
                                <a class="" href="{{ route('position.list') }}"> <i class="fa fa-list"></i> Position list</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{ route('position.store') }}" method="post" enctype="multipart/form-data">
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
                                    <label>Position Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Position Name*" name="position_name" value="{{ old('position_name') }}">
                                </div>
                                <div class="form-group">
                                    <label>Min Member</label>
                                    <input type="text" class="form-control" placeholder="Enter min member*" name="min_member" value="{{ old('min_member') }}">
                                </div>
                                <div class="form-group">
                                    <label>Min HCP</label>
                                    <input type="text" class="form-control" placeholder="Enter min hcp*" name="min_hcp" value="{{ old('min_hcp') }}">
                                </div>
                                <div class="form-group">
                                    <label>Commission</label>
                                    <input type="text" class="form-control" placeholder="Enter Commission*" name="commission" value="{{ old('commission') }}">
                                </div>
                                <div class="form-group">
                                    <label>Team Comission</label>
                                    <input type="text" class="form-control" placeholder="Enter Team Commission*" name="team_commission" value="{{ old('team_commission') }}">
                                </div>
                                <div class="form-group">
                                    <label>Life fund commission</label>
                                    <input type="text" class="form-control" placeholder="Enter Life Fund Commission*" name="life_fund_commission" value="{{ old('life_fund_commission') }}">
                                </div>
                                <div class="form-group">
                                    <label>Profit Share</label>
                                    <input type="text" class="form-control" placeholder="Enter Department Name*" name="company_profit_share_commission" value="{{ old('company_profit_share_commission') }}">
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