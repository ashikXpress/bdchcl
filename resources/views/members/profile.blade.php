@extends('members.mainlayout')
@section('title')
    Member's Profile
    @endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon"><i class="pe-7s-user-female"></i></div>
            <div class="header-title">
                <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                </span>
                    </div>
                </form>
                <h1>Profile</h1>
                <small>Show user data in clear profile design</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index-2.html"><i class="pe-7s-home"></i>Home</a></li>
                    <li><a href="#">UI Elements</a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?php echo asset("$profile->photo")?>" class="card-header-headshot"/>
                        </div>
                        <div class="card-content">
                            <div class="card-content-member">
                                <h4 class="m-t-0"> {{ $profile->first_name }} {{ $profile->last_name }} </h4>
                                <p class="m-0"><i class="pe-7s-map-marker"></i>{{ $my_sales->position }}</p>
                            </div>
                            <div class="card-content-languages">
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>User Id :</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>{{ $profile->uid }}{{ $profile->id }}
                                                <div class="fluency fluency-4"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Birth Date:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>{{ $profile->dob }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Address:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>{{ $profile->house_no }},</li>
                                            <li>{{ $profile->village_or_rood_no }},</li>
                                            <li>{{ $profile->post_office }},</li>
                                            <li>{{ $profile->sub_district }},</li>
                                            <li>{{ $profile->district }}.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-stats">
                                <div>
                                    <p>Members:</p><i class="fa fa-users"></i><span> {{ $my_sales->achieve_member }}</span>
                                </div>
                                <div>
                                    <p>Payment:</p><i class="fa fa-coffee"></i><span> {{ $my_sales->total_payment }}</span>
                                </div>
                                <div>
                                    <p>Due</p><span class="stats-small"> {{ $my_sales->due_payment }}</span>
                                </div>
                            </div>
                            <div class="card-footer-message">
                                <h4><i class="fa fa-comments"></i> Message me</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="rating-block">
                                <h4>Total Sales</h4>
                                <h2 class="m-b-20">{{ $my_sales->total_payment }}</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="rating-block">
                                <h4>Commission</h4>
                                <h2 class="m-b-20">{{ $my_sales->hcp_commission }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="rating-block">
                                <h4>HCP</h4>
                                <h2 class="m-b-20">{{ $my_sales->achieve_hcp }}</h2>
                            </div>
                        </div><div class="col-sm-12 col-md-6">
                            <div class="rating-block">
                                <h4>Withdraw</h4>
                                <h2 class="m-b-20">{{ $my_sales->withdraw_payment }}</h2>
                            </div>
                        </div>

                    </div>
                    <div class="review-block">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="review-block-img">
                                    <img src="assets/dist/img/avatar.png" class="img-rounded" alt="">
                                </div>
                                <div class="review-block-name"><a href="#">nktailor</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="review-block-title">this was nice in buy</div>
                                <div class="review-block-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="review-block-img">
                                    <img src="assets/dist/img/avatar2.png" class="img-rounded" alt="">
                                </div>
                                <div class="review-block-name"><a href="#">nktailor</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="review-block-title">this was nice in buy</div>
                                <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="review-block-img">
                                    <img src="assets/dist/img/avatar3.png" class="img-rounded" alt="">
                                </div>
                                <div class="review-block-name"><a href="#">nktailor</a></div>
                                <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="review-block-rate">
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="review-block-title">this was nice in buy</div>
                                <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

    @endsection
