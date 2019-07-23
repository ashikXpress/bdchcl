@extends('backend.mainlayout')
@section('title')
    Edit Employee
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
                    <li><a href=""><i class="pe-7s-home"></i> Human Resources</a></li>
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
                            <form action="{{ route('emp.update', $emps_edit->id) }}" method="post" class="col-sm-6" enctype="multipart/form-data">
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
                                    <label>First Name</label>
                                    <input type="text" name="first_name" value="{{ $emps_edit->first_name }}"
                                           class="form-control" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" value="{{ $emps_edit->last_name }}"
                                           class="form-control" placeholder="Enter last Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" value="{{ $emps_edit->dob }}" class="form-control"
                                           placeholder="Enter Age" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="#">Select</option>
                                        <option value="0" @if(($emps_edit->gender) == 0) selected @endif>Male</option>
                                        <option value="1" @if(($emps_edit->gender) == 1) selected @endif>Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Departments</label>
                                    <select name="department_id" id="" class="form-control">
                                        <option>{{ $emps_edit->department->department_name }}</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upline ID</label>
                                    <input type="text" name="upline_id" value="{{ $emps_edit->upline_id }}"
                                           class="form-control" placeholder="Enter last Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Area</label>
                                    <select name="area_id" id="" class="form-control">
                                        <option>{{ $emps_edit->area->area_name }}</option>
                                        @foreach($areas as $area)
                                            <option value="{{ $area->area_id }}">{{ $area->area_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>House number</label>
                                    <input type="text" name="house_no" value="{{ $emps_edit->house_no }}"
                                           class="form-control" placeholder="House No" required>
                                </div>

                                <div class="form-group">
                                    <label>Village or Road no</label>
                                    <input type="text" name="village_or_rood_no" value="{{ $emps_edit->village_or_rood_no }}"
                                           class="form-control" placeholder="Road No/Village name" required>
                                </div>

                                <div class="form-group">
                                    <label>Post Office</label>
                                    <input type="text" name="post_office" value="{{ $emps_edit->post_office }}"
                                           class="form-control" placeholder="Post Office Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Sub District</label><br>
                                    <input type="text" name="sub_district" value="{{ $emps_edit->sub_district }}"
                                           class="form-control" placeholder="Sub district Name" required>
                                </div>
                                <div class="form-group">
                                    <label>District</label><br>
                                    <input type="text" name="district" value="{{ $emps_edit->district }}"
                                           class="form-control" placeholder="District Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Post Code</label><br>
                                    <input type="text" name="post_code" value="{{ $emps_edit->post_code }}"
                                           class="form-control" placeholder="Post Code" required>
                                </div>
                                <div class="form-group">
                                    <label>NID/Birth ID</label><br>
                                    <input type="text" name="nid_or_birth_id" value="{{ $emps_edit->nid_or_birth_id }}"
                                           class="form-control" placeholder="NID/Birth ID" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile No</label><br>
                                    <input type="text" name="phone_number" value="{{ $emps_edit->phone_number }}"
                                           class="form-control" placeholder="Enter Mobile Number" required>
                                </div>
                                <div class="form-group">
                                    <label>SSC Mark</label><br>
                                    <input type="text" name="education_qualification_ssc"
                                           value="{{ $emps_edit->education_qualification_ssc }}" class="form-control"
                                           placeholder="Enter SSC Mark">
                                </div>
                                <div class="form-group">
                                    <label>HSC Mark</label><br>
                                    <input type="text" name="education_qualification_hsc"
                                           value="{{ $emps_edit->education_qualification_hsc }}" class="form-control"
                                           placeholder="Enter HSC Mark">
                                </div>
                                <div class="form-group">
                                    <label>Honors Mark</label><br>
                                    <input type="text" name="education_qualification_hons"
                                           value="{{ $emps_edit->education_qualification_hons }}" class="form-control"
                                           placeholder="Enter Honor's Mark">
                                </div>
                                <div class="form-group">
                                    <label>Master's Mark</label><br>
                                    <input type="text" name="education_qualification_msc"
                                           value="{{ $emps_edit->education_qualification_msc }}" class="form-control"
                                           placeholder="Enter Masters Mark">
                                </div>
                                <div class="form-group">
                                    <label>Other's Education</label><br>
                                    <input type="text" name="education_qualification_others"
                                           value="{{ $emps_edit->education_qualification_others }}" class="form-control"
                                           placeholder="Others Degreee name and result">
                                </div>
                                <div class="form-group">
                                    <label>Email</label><br>
                                    <input type="text" name="email" value="{{ $emps_edit->email }}" class="form-control"
                                           placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Picture upload</label>
                                    <input type="file" name="photo" required>
                                </div>
                                <div class="reset-button">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

@endsection
