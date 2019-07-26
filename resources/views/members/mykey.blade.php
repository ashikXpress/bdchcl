@extends('members.mainlayout')
@section('title')
    My Key List
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
                <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm"
                      id="searchText">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                    </div>
                </form>
                <h1>Key</h1>
                <small>Key list</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('member.profile') }}"><i class="pe-7s-home"></i> Dashboard</a></li>
                    <li class="active">Key</li>
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
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="panel-header">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="dataTables_length">
                                            <a class="btn btn-default buttons-copy btn-sm" tabindex="0">
                                                <span>Copy</span></a>
                                            <a class="btn btn-default buttons-csv buttons-html5 btn-sm"
                                               tabindex="0"><span>CSV</span></a>
                                            <a class="btn btn-default buttons-excel buttons-html5 btn-sm"
                                               tabindex="0"><span>Excel</span></a>
                                            <a class="btn btn-default buttons-pdf buttons-html5 btn-sm"
                                               tabindex="0"><span>PDF</span></a>
                                            <a class="btn btn-default buttons-print btn-sm"
                                               tabindex="0"><span>Print</span></a>

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
                                        <th>Serial No</th>
                                        <th>Key Number</th>
                                        <th>Has Use</th>
                                        <th>Member Id</th>
                                        <th>Created By</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($myKeys as $myKey)
                                        <tr>
                                            <td>
                                                <label>
                                                    {{ $myKey->id }}
                                                </label>
                                            </td>
                                            <td>{{ $myKey->key_id }}</td>
                                            <td>
                                                @if(($myKey->has_use) == 0)
                                                    <span class="label-default label label-danger">No</span>
                                                @elseif(($myKey->has_use) == 1)
                                                    <span class="label-success label label-default">Yes</span>
                                                @endif
                                            </td>
                                            <td>{{ $myKey->member_uid }}</td>
                                            <td>{{ $myKey->created_by }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

@endsection
