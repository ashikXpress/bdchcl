@extends('backend.mainlayout')
@section('title')
    Add Dealer
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
                <small>Dealer</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Dashboard</a></li>
                    <li class="active">Add Dealer</li>
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
                                <a class="" href="{{ route('dealer.list') }}"> <i class="fa fa-list"></i> Dealer list</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{ route('dealer.store') }}" method="post">

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
                                    <label>Dealer Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Dealer Name*"
                                           name="dealer_name" value="{{ old('dealer_name') }}">
                                </div>
                                <div class="form-group">
                                    <label>Dealer owner name</label>
                                    <input type="text" class="form-control" placeholder="Enter Dealer Owner Name*"
                                           name="dealer_owner_name" value="{{ old('dealer_owner_name') }}">
                                </div>
                                <div class="form-group">
                                    <label>Dealer Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Dealer Owner Phone Number*"
                                           name="dealer_owner_phone" value="{{ old('dealer_owner_phone') }}">
                                </div>
                                <div class="form-group">
                                    <label>Dealer Purchase Target</label>
                                    <input type="text" class="form-control" placeholder="Dealer purchase target*"
                                           name="purchase_target" value="{{ old('purchase_target') }}">
                                </div>
                                <div class="form-group">
                                    <label>Dealer Commission</label>
                                    <input type="number" class="form-control" placeholder="Dealer Commission*"
                                           name="dealer_commission" value="{{ old('dealer_commission') }}">
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