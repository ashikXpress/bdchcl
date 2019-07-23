@extends('backend.mainlayout')
@section('title')
    Add Member
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
                    <li class="active">Add Member</li>
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
                                <a class="" href="{{ route('member.list') }}"> <i class="fa fa-list"></i> Member list</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{ route('member.store') }}" method="post" enctype="multipart/form-data">

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
                                    <label>First Name</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Enter last Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" value="{{ old('dob') }}" class="form-control" placeholder="Enter Birth Date" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="#">Select</option>
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>House No</label>
                                    <input type="text" name="house_no" class="form-control" placeholder="Enter House No" value="{{ old('house_no') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Village or Road no</label>
                                    <input type="text" name="village_or_rood_no" value="{{ old('village_or_rood_no') }}" class="form-control" placeholder="Road No/Village name" required>
                                </div>

                                <div class="form-group">
                                    <label>Post Office</label>
                                    <input type="text" name="post_office" value="{{ old('post_office') }}" class="form-control" placeholder="Post Office Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Sub District</label><br>
                                    <input type="text" name="sub_district" value="{{ old('sub_district') }}" class="form-control" placeholder="Sub district Name" required>
                                </div>
                                <div class="form-group">
                                    <label>District</label><br>
                                    <input type="text" name="district" value="{{ old('district') }}" class="form-control" placeholder="District Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Post Code</label><br>
                                    <input type="text" name="post_code" value="{{ old('post_code') }}" class="form-control" placeholder="Post Code" required>
                                </div>
                                <div class="form-group">
                                    <label>NID/Birth ID</label><br>
                                    <input type="text" name="nid_or_birth_id" value="{{ old('nid_or_birth_id') }}" class="form-control" placeholder="NID/Birth ID" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile No</label><br>
                                    <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" placeholder="Enter Mobile Number" required>
                                </div>
                                <div class="form-group">
                                    <label>Education Qualification</label><br>
                                    <input type="text" name="education_qualification" value="{{ old('education_qualification') }}" class="form-control" placeholder="Education" >
                                </div>
                                <div class="form-group">
                                    <label>Occupation</label><br>
                                    <input type="text" name="occupation" value="{{ old('occupation') }}" class="form-control" placeholder="Occupation" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label><br>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Sponsor's Id</label><br>
                                    <input type="text" name="ref_id" value="{{ old('ref_id') }}" class="form-control" placeholder="Refer Id">
                                </div>
                                <div class="form-group">
                                    <label>Member Key Id</label><br>
                                    <input type="text" name="key_id" value="{{ old('key_id') }}" class="form-control" placeholder="Key Id">
                                </div>
                                <div class="form-group">
                                    <label>Picture upload</label>
                                    <input type="file" name="photo" id="picture">
                                </div>
                                {{--Submit Button--}}
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
