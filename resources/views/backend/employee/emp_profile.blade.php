@extends('backend.emp_layout')
@section('title')
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
                            <div class="card-header-headshot"></div>
                        </div>
                        <div class="card-content">
                            <div class="card-content-member">
                                <h4 class="m-t-0">Naeem Khan</h4>
                                <p class="m-0"><i class="pe-7s-map-marker"></i>Bangladesh</p>
                            </div>
                            <div class="card-content-languages">
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Speaks:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>English
                                                <div class="fluency fluency-4"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content-languages-group">
                                    <div>
                                        <h4>Learning:</h4>
                                    </div>
                                    <div>
                                        <ul>
                                            <li>Spanish,</li>
                                            <li>Russian,</li>
                                            <li>German</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content-summary">
                                <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-footer-stats">
                                <div>
                                    <p>PROJECTS:</p><i class="fa fa-users"></i><span>241</span>
                                </div>
                                <div>
                                    <p>MESSAGES:</p><i class="fa fa-coffee"></i><span>350</span>
                                </div>
                                <div>
                                    <p>Last online</p><span class="stats-small">3 days ago</span>
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
                                <h4>Average user rating</h4>
                                <h2 class="m-b-20">4.3 <small>/ 5</small></h2>
                                <button type="button" class="btn btn-success btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h4 class="m-t-0">Rating breakdown</h4>
                            <div class="pull-left">
                                <div class="review-number"><div>5 <span class="glyphicon glyphicon-star"></span></div></div>
                                <div class="review-progress">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 90%">
                                            <span class="sr-only">90% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-number">1</div>
                            </div>
                            <div class="pull-left">
                                <div class="review-number">
                                    <div>4 <span class="glyphicon glyphicon-star"></span></div>
                                </div>
                                <div class="review-progress">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-number">1</div>
                            </div>
                            <div class="pull-left">
                                <div class="review-number">
                                    <div>3 <span class="glyphicon glyphicon-star"></span></div>
                                </div>
                                <div class="review-progress">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 70%">
                                            <span class="sr-only">70% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-number">0</div>
                            </div>
                            <div class="pull-left">
                                <div class="review-number">
                                    <div>2 <span class="glyphicon glyphicon-star"></span></div>
                                </div>
                                <div class="review-progress">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                            <span class="sr-only">60% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-number">0</div>
                            </div>
                            <div class="pull-left">
                                <div class="review-number">
                                    <div>1 <span class="glyphicon glyphicon-star"></span></div>
                                </div>
                                <div class="review-progress">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-violet progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 50%">
                                            <span class="sr-only">50% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-number">0</div>
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
