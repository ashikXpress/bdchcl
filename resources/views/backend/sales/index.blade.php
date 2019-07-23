@extends('backend.mainlayout')
@section('title')
    Member Sales History
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
                                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                    </div>
                </form>
                <h1>Member</h1>
                <small>Sales</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="{{ route('dashboard') }}"><i class="pe-7s-home"></i> Dashboard</a></li>
                    <li class="active">Member</li>
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
                                <a class="btn btn-success" href="{{ route('sales.create') }}"> <i
                                        class="fa fa-plus"></i> Manage Sales
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
                                        <th>Member Id</th>
                                        <th>Member Name</th>
                                        <th>Position</th>
                                        <th>Total Member</th>
                                        <th>Sales</th>
                                        <th>Total HCP</th>
                                        <th>Commission</th>
                                        <th>Due Payment</th>
                                        <th>Withdraw</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($salesHistory as $history)
                                        <tr>
                                            <td>
                                                <label>{{ $history->employee->uid }}{{ $history->id }}</label>
                                            </td>
                                            <td>{{ $history->employee->first_name }} {{ $history->employee->last_name }} </td>
                                            <td>{{ $history->position }}</td>
                                            <td>{{ $history->achieve_member }}</td>
                                            <td>{{ $history->total_payment }}</td>
                                            <td>{{ $history->achieve_hcp }}</td>
                                            <td>{{ $history->hcp_commission }}</td>
                                            <td>{{ $history->due_payment }}</td>
                                            <td>{{ $history->withdraw_payment }}</td>
{{--                                            <td>--}}
{{--                                                <a type="button" href="{{ route('sales.edit', $history->id) }}"--}}
{{--                                                   class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>--}}

{{--                                                </a>--}}
{{--                                                <form action="{{ route('sales.delete', $history->id) }}" method="post"--}}
{{--                                                      onsubmit="return confirm('Are You Sure?')">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="btn btn-danger btn-xs"><i--}}
{{--                                                            class="fa fa-trash-o"></i>--}}

{{--                                                    </button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {!! $salesHistory->links() !!}
                        </div>
                    </div>

                </div>

            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

@endsection
