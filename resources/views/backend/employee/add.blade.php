@extends('backend.mainlayout')
@section('title')
    Add Employee
@endsection

@section('content')

    <!-- =============================================== -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                    <div class="input-group">
                        <input type="text" name="" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn"><i
                                    class="fa fa-search"></i></button>
                    </span>
                    </div>
                </form>
                <h1>Human Resources</h1>
                <small>Employee</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index-2.html"><i class="pe-7s-home"></i> Human Resources</a></li>
                    <li class="active">Add Employee</li>
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
                                <a class="btn btn-primary btn-list" href="{{ route('emp.list') }}"> <i class="fa fa-list"></i>
                                    employee list</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('emp.store') }}" method="post" class="col-sm-6" enctype="multipart/form-data">
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
                                    <label>Area</label>
                                    <select name="area_id" id="" class="form-control">
                                        <option value="#">Select</option>
                                        @foreach($areas as $area)
                                            <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                                           class="form-control" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                                           class="form-control" placeholder="Enter last Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" value="{{ old('dob') }}" class="form-control"
                                           placeholder="Enter Age" required>
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
                                    <label>Departments</label>
                                    <select name="department_id" id="" class="form-control">
                                        <option value="#">Select</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upline Id</label>
                                    <input type="text" name="upline_id" value="{{ old('upline_id') }}"
                                           class="form-control" placeholder="Enter Upline ID" required>
                                </div>
                                <div class="form-group">
                                    <label>House number</label>
                                    <input type="text" name="house_no" value="{{ old('house_no') }}"
                                           class="form-control" placeholder="House No" required>
                                </div>

                                <div class="form-group">
                                    <label>Village or Road no</label>
                                    <input type="text" name="village_or_rood_no" value="{{ old('village_or_rood_no') }}"
                                           class="form-control" placeholder="Road No/Village name" required>
                                </div>

                                <div class="form-group">
                                    <label>Post Office</label>
                                    <input type="text" name="post_office" value="{{ old('post_office') }}"
                                           class="form-control" placeholder="Post Office Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Sub District</label><br>
                                    <input type="text" name="sub_district" value="{{ old('sub_district') }}"
                                           class="form-control" placeholder="Sub district Name" required>
                                </div>
                                <div class="form-group">
                                    <label>District</label><br>
                                    <input type="text" name="district" value="{{ old('district') }}"
                                           class="form-control" placeholder="District Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Post Code</label><br>
                                    <input type="text" name="post_code" value="{{ old('post_code') }}"
                                           class="form-control" placeholder="Post Code" required>
                                </div>
                                <div class="form-group">
                                    <label>NID/Birth ID</label><br>
                                    <input type="text" name="nid_or_birth_id" value="{{ old('nid_or_birth_id') }}"
                                           class="form-control" placeholder="NID/Birth ID" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile No</label><br>
                                    <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                           class="form-control" placeholder="Enter Mobile Number" required>
                                </div>
                                <div class="form-group">
                                    <label>SSC Mark</label><br>
                                    <input type="text" name="education_qualification_ssc"
                                           value="{{ old('education_qualification_ssc') }}" class="form-control"
                                           placeholder="Enter SSC Mark">
                                </div>
                                <div class="form-group">
                                    <label>HSC Mark</label><br>
                                    <input type="text" name="education_qualification_hsc"
                                           value="{{ old('education_qualification_hsc') }}" class="form-control"
                                           placeholder="Enter HSC Mark">
                                </div>
                                <div class="form-group">
                                    <label>Honors Mark</label><br>
                                    <input type="text" name="education_qualification_hons"
                                           value="{{ old('education_qualification_hons') }}" class="form-control"
                                           placeholder="Enter Honor's Mark">
                                </div>
                                <div class="form-group">
                                    <label>Master's Mark</label><br>
                                    <input type="text" name="education_qualification_msc"
                                           value="{{ old('education_qualification_msc') }}" class="form-control"
                                           placeholder="Enter Masters Mark">
                                </div>
                                <div class="form-group">
                                    <label>Other's Education</label><br>
                                    <input type="text" name="education_qualification_others"
                                           value="{{ old('education_qualification_others') }}" class="form-control"
                                           placeholder="Others Degreee name and result">
                                </div>
                                <div class="form-group">
                                    <label>Email</label><br>
                                    <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                                           placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label><br>
                                    <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                                           placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label>Picture upload</label>
                                    <input type="file" name="photo" required>
                                </div>
                                <div class="reset-button">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

@endsection
