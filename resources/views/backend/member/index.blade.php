@extends('backend.mainlayout')
@section('title')
    Members List
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
                <h1>Member</h1>
                <small>Member list</small>
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
                                <a class="btn btn-success" href="{{ route('member.add') }}"> <i class="fa fa-plus"></i> Add Member
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="panel-header">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="dataTables_length">
                                            <label>Display
                                                <select name="example_length">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> records per page</label>
                                        </div>
                                    </div>
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
                                        <th>Serial No</th>
                                        <th>Image</th>
                                        <th>Member ID</th>
                                        <th>Member Name</th>
                                        <th>Phone</th>
                                        <th>Ref Id</th>
                                        <th>Key Id</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($members as $member)
                                        <tr >
                                            <td>
                                                <label>{{ $member->id
                                                 }}</label>
                                            </td>
                                            <td>
                                                <img class="img-thumbnail img-responsive" style="max-width: 70px;" src="<?php echo asset("$member->photo") ?>" alt="">
                                            </td>
                                            <td>{{ $member->uid }}</td>
                                            <td>{{ $member->first_name }} {{ $member->last_name }}</td>
                                            <td>{{ $member->phone_number }}</td>
                                            <td>{{ $member->ref_id }}</td>
                                            <td>{{ $member->key_id }}</td>
                                            <td>
                                                <a type="button" href="{{ route('member.edit', $member->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>

                                                </a>
                                                <form action="{{ route('member.delete', $member->id) }}" method="post" onsubmit="return confirm('Are You Sure?')">
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
                            {!! $members->links() !!}
                        </div>
                    </div>

                </div>

            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

@endsection