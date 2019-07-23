<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- Start Global Mandatory Style
       =====================================================================-->
    <!-- jquery-ui css -->
    <link href="{{ asset('backend/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="{{ asset('backend/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="{{ asset('backend/assets/plugins/lobipanel/lobipanel.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Pace css -->
    <link href="{{ asset('backend/assets/plugins/pace/flash.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link href="{{ asset('backend/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Pe-icon -->
    <link href="{{ asset('backend/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Themify icons -->
    <link href="{{ asset('backend/assets/themify-icons/themify-icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- End Global Mandatory Style
    =====================================================================-->
    <!-- Start page Label Plugins
    =====================================================================-->
    <!-- Toastr css -->
    <link href="{{ asset('backend/assets/plugins/toastr/toastr.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Emojionearea -->
    <link href="{{ asset('backend/assets/plugins/emojionearea/emojionearea.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Monthly css -->
    <link href="{{ asset('backend/assets/plugins/monthly/monthly.css') }}" rel="stylesheet" type="text/css"/>
    <!-- End page Label Plugins
    =====================================================================-->
    <!-- Start Theme Layout Style
    =====================================================================-->
    <!-- Theme style -->
    <link href="{{ asset('backend/assets/dist/css/stylehealth.min.css') }}" rel="stylesheet" type="text/css"/>
    <!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
    <!-- End Theme Layout Style
    =====================================================================-->
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <a href="{{ route('index') }}" class="logo"> <!-- Logo -->
            <span class="logo-mini">
                        <!--<b>A</b>H-admin-->
                        <img src="{{ asset('logo.png') }}" alt="">
                    </span>
            <span class="logo-lg">
                        <!--<b>Admin</b>H-admin-->
                        <img src="{{ asset('logo.png') }}" alt="">
                    </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top ">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-tasks"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Orders -->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown">
                            <i class="pe-7s-cart"></i>
                            <span class="label label-primary">5</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><i class="fa fa-shopping-basket"></i> 4 Orders</li>
                            <li>
                                <ul class="menu">
                                    <li ><!-- start Order -->
                                        <a href="#" class="border-gray">
                                            <div class="pull-left">
                                                <img src="{{ asset('backend/assets/dist/img/stethescope.png') }}" class="img-thumbnail" alt="User Image"></div>
                                            <h4>stethescope</h4>
                                            <p><strong>total item:</strong> 21
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#"> See all Orders <i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </li>
                    <!-- Messages -->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="pe-7s-mail"></i>
                            <span class="label label-success">4</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="header"><i class="fa fa-envelope-o"></i>
                                4 Messages</li>
                            <li>
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#" class="border-gray">
                                            <div class="pull-left">
                                                <h4></h4>
                                                <p>
                                                </p>
                                                <span class="label label-success pull-right">11.00am</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See all messages <i class=" fa fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="pe-7s-bell"></i>
                            <span class="label label-warning">8</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><i class="fa fa-bell"></i> 8 Notifications</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="#" class="border-gray"><i class="fa fa-inbox"></i> Inbox  <span class=" label-success label label-default pull-right">9</span></a>
                                    </li>

                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#"> See all Notifications <i class=" fa fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <!-- user -->
                    <li class="dropdown dropdown-user admin-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-image">
                                <img src="{{ asset('backend/assets/dist/img/avatar4.png') }}" class="img-circle" height="40" width="40" alt="User Image">
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.html"><i class="fa fa-users"></i> User Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="image pull-left">
                    <img src="{{ asset('backend/assets/dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
                </div>
                <div class="info">
                    <h4>Welcome</h4>
                </div>
            </div>

            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="{{ route('index') }}"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-alt"></i> <span>Products</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-alt"></i> <span>Sales</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('team.create') }}">My Team</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope"></i><span> Mail</span>
                    </a>
                </li>

            </ul>
        </div> <!-- /.sidebar -->
    </aside>
    <!--==============================================================================
    Content is here
    ==============================================================================-->

@yield('content')

<!--==============================================================================
    Content is here
    ==============================================================================-->
    <footer class="main-footer">
        <div class="pull-right hidden-xs"> <b>Developed By <a href="https://www.facebook.com/jasim.dipu">Md Jasim Uddin</a></b>01719007880</div>
        <strong>Copyright &copy; 2019 <a href="#">Bangladesh Community Health Care Ltd.</a>.</strong> All rights reserved.
    </footer>
</div> <!-- ./wrapper -->
<!-- Start Core Plugins
=====================================================================-->
<!-- Start Core Plugins
        =====================================================================-->
<!-- jQuery -->
<script src="{{ asset('backend/assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="{{ asset('backend/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend/assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- lobipanel -->
<script src="{{ asset('backend/assets/plugins/lobipanel/lobipanel.min.js') }}" type="text/javascript"></script>
<!-- Pace js -->
<script src="{{ asset('backend/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{ asset('backend/assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ asset('backend/assets/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
<!-- Hadmin frame -->
<script src="{{ asset('backend/assets/dist/js/custom1.js') }}" type="text/javascript"></script>
<!-- End Core Plugins
=====================================================================-->
<!-- Start Page Lavel Plugins
=====================================================================-->
<!-- Toastr js -->
<script src="{{ asset('backend/assets/plugins/toastr/toastr.min.js') }}" type="text/javascript"></script>
<!-- Sparkline js -->
<script src="{{ asset('backend/assets/plugins/sparkline/sparkline.min.js') }}" type="text/javascript"></script>
<!-- Data maps js -->
<script src="{{ asset('backend/assets/plugins/datamaps/d3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/datamaps/topojson.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/datamaps/datamaps.all.min.js') }}" type="text/javascript"></script>
<!-- Counter js -->
<script src="{{ asset('backend/assets/plugins/counterup/waypoints.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
<!-- ChartJs JavaScript -->
<script src="{{ asset('backend/assets/plugins/chartJs/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/emojionearea/emojionearea.min.js') }}" type="text/javascript"></script>
<!-- Monthly js -->
<script src="{{ asset('backend/assets/plugins/monthly/monthly.js') }}" type="text/javascript"></script>
<!-- Data maps -->
<script src="{{ asset('backend/assets/plugins/datamaps/d3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/datamaps/topojson.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/plugins/datamaps/datamaps.all.min.js') }}" type="text/javascript"></script>

<!-- End Page Lavel Plugins
=====================================================================-->
<!-- Start Theme label Script
=====================================================================-->
<!-- Dashboard js -->
<script src="{{ asset('backend/assets/dist/js/custom.js') }}" type="text/javascript"></script>

<!-- End Theme label Script
=====================================================================-->
<script>
    "use strict"; // Start of use strict
    // notification
    setTimeout(function () {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 1000
        };

    }, 1300);

    //counter
    $('.count-number').counterUp({
        delay: 10,
        time: 5000
    });

    //data maps
    var basic_choropleth = new Datamap({
        element: document.getElementById("map1"),
        projection: 'mercator',
        fills: {
            defaultFill: "#009688",
            authorHasTraveledTo: "#fa0fa0"
        },
        data: {
            USA: {fillKey: "authorHasTraveledTo"},
            JPN: {fillKey: "authorHasTraveledTo"},
            ITA: {fillKey: "authorHasTraveledTo"},
            CRI: {fillKey: "authorHasTraveledTo"},
            KOR: {fillKey: "authorHasTraveledTo"},
            DEU: {fillKey: "authorHasTraveledTo"}
        }
    });

    var colors = d3.scale.category10();

    window.setInterval(function () {
        basic_choropleth.updateChoropleth({
            USA: colors(Math.random() * 10),
            RUS: colors(Math.random() * 100),
            AUS: {fillKey: 'authorHasTraveledTo'},
            BRA: colors(Math.random() * 50),
            CAN: colors(Math.random() * 50),
            ZAF: colors(Math.random() * 50),
            IND: colors(Math.random() * 50)
        });
    }, 2000);

    //bar chart
    var ctx = document.getElementById("barChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 80, 81, 56, 55, 40, 25, 35, 51, 94, 16],
                    borderColor: "#009688",
                    borderWidth: "0",
                    backgroundColor: "#009688"
                },
                {
                    label: "My Second dataset",
                    data: [28, 48, 40, 19, 86, 27, 90, 91, 41, 25, 34, 47],
                    borderColor: "#009688",
                    borderWidth: "0",
                    backgroundColor: "#009688"
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    //radar chart
    var ctx = document.getElementById("radarChart");
    var myChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "My First dataset",
                    data: [65, 59, 66, 45, 56, 55, 40],
                    borderColor: "#00968866",
                    borderWidth: "1",
                    backgroundColor: "rgba(0, 150, 136, 0.35)"
                },
                {
                    label: "My Second dataset",
                    data: [28, 12, 40, 19, 63, 27, 87],
                    borderColor: "rgba(55, 160, 0, 0.7",
                    borderWidth: "1",
                    backgroundColor: "rgba(0, 150, 136, 0.35)"
                }
            ]
        },
        options: {
            legend: {
                position: 'top'
            },
            scale: {
                ticks: {
                    beginAtZero: true
                }
            }
        }
    });

    // Message
    $('.message_inner').slimScroll({
        size: '3px',
        height: '320px'
    });

    //emojionearea
    $(".emojionearea").emojioneArea({
        pickerPosition: "top",
        tonesStyle: "radio"
    });

    //monthly calender
    $('#m_calendar').monthly({
        mode: 'event',
        //jsonUrl: 'events.json',
        //dataType: 'json'
        xmlUrl: 'events.xml'
    });


        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    });


</script>

</body>

<!-- Mirrored from healthadmin.thememinister.com/add-department.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 18:28:23 GMT -->
</html>