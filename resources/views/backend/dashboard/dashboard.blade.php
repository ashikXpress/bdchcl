@extends('backend.mainlayout')

@section('title')
    DashBoard
    @endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                </div>
            </form>
            <div class="header-icon">
                <i class="fa fa-tachometer"></i>
            </div>
            <div class="header-title">
                <h1> Dashboard</h1>
                <small> Dashboard features</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index-2.html"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number"></span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Active Members </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number"></span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Active Employees</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number"></span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-user-circle fa-2x"></i>
                                <h4>Representative</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number"></span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Active Depos</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number"></span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-user-circle fa-2x"></i>
                                <h4> Active Dealers</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number"></span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Offices</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number"></span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Total Services</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd cardbox">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="count-number">7</span>
                                </h2>
                            </div>
                            <div class="items pull-left">
                                <i class="fa fa-users fa-2x"></i>
                                <h4>Total Sales</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /.content -->

    </div> <!-- /.content-wrapper -->
    @endsection
