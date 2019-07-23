@extends('backend.mainlayout')
@section('title')
    Add Depo
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
                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                    class="fa fa-search"></i></button>
                    </span>
                    </div>
                </form>
                <h1>Admin</h1>
                <small>depo</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Dashboard</a></li>
                    <li class="active">Add Depo</li>
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
                                <a class="" href="{{ route('depo.list') }}"> <i class="fa fa-list"></i> Depo list</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{ route('depo.store') }}" method="post">

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
                                    <label>Area Id</label>
                                    <select class="form-control" name="area_id" id="area">
                                        <option value="#" class="">area select</option>
                                        @foreach($areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->area_uid }} {{ $area->area_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Depo Name</label>
                                    <input type="text" class="form-control" placeholder="Enter depo Name*"
                                           name="depo_name" value="{{ old('depo_name') }}">
                                </div>
                                <div class="form-group">
                                    <label>Depo owner name</label>
                                    <input type="text" class="form-control" placeholder="Enter depo Owner Name*"
                                           name="depo_owner_name" value="{{ old('depo_owner_name') }}">
                                </div>
                                <div class="form-group">
                                    <label>Depo Phone Number</label>
                                    <input type="number" class="form-control" placeholder="depo Owner Phone Number*"
                                           name="depo_owner_phone" value="{{ old('depo_owner_phone') }}">
                                </div>
                                <div class="form-group">
                                    <label>Depo Purchase Target</label>
                                    <input type="text" class="form-control" placeholder="depo purchase target*"
                                           name="purchase_target" value="{{ old('purchase_target') }}">
                                </div>
                                <div class="form-group">
                                    <label>Depo Commission</label>
                                    <input type="number" class="form-control" placeholder="depo Commission*"
                                           name="depo_commission" value="{{ old('depo_commission') }}">
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