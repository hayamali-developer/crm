<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>CRM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Crm" />
        <meta name="author" content="Crm"/>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('dash')}}/assets/images/favicon.ico">
        <!-- Plugins css -->
        <link href="{{asset('dash')}}/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
		 <link href="{{asset('dash')}}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />


                 <!-- Custom box css -->
        <link href="{{asset('dash')}}/assets/libs/custombox/custombox.min.css" rel="stylesheet">
		<!-- third party css -->
        <link href="{{asset('dash')}}/assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dash')}}/assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

      <!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('dash')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dash')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('dash')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        @yield('style')
        <style>

            body {
      font-size:18px;
       }


       .btn-star {
        color: #fff;
        background-color: #4a81d4;
        border-color: #4a81d4;
       }

       .btn-success {
        color: #fff;
        background-color: #1bb63b;
        border-color: #27b61b;
       }

            #sidebar-menu>ul>li>a.active {
                color: #4a81d4;
            }


            #sidebar-menu>ul>li>a.active,
            #sidebar-menu>ul>li>a:focus,
            #sidebar-menu>ul>li>a:hover {
                color: #4a81d4;
            }


            .nav-second-level li.active>a,
            .nav-third-level li.active>a {
                color: #4a81d4;
            }

          .content-page {
        margin-left: 120px;
        overflow: hidden;
        padding: 0 15px 5px 15px;
        min-height: 80vh;
        margin-top: 70px;
    }
        </style>

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom navbar-custom-light">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    
                                    <div class="input-group-append">
                                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li> 







                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('dash')}}/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                               {{auth()->user()->name ?? "Admin"}} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>


                            <div class="dropdown-divider"></div>

                        

                        </div>
                    </li>




                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{asset('dash')}}/assets/images/elev8.webp" alt="" width="140" height="50">
                            <!-- <span class="logo-lg-text-light">WebGround</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="{{asset('dash')}}/assets/images/elev8.webp" alt="" height="24">
                        </span>
                    </a>
                </div>


            </div>
            <!-- end Topbar -->






            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                    

                            <!---Crm---->

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-users"></i>
                                    <span> CRM </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">Dashboard</a>
                                    </li>
                                  @if(auth()->user()->role =="admin")
                                    <li>
                                        <a href="{{route('employee')}}">Employee</a>
                                    </li>
                                    <li>
                                        <a href="{{route('customers')}}">Customers</a>
                                    </li>
                                    @endif
                                </ul>
                            </li>



                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="form-inline">
                                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <!-- <h4 class="page-title"><b>Welcome:</b> {{auth()->user()->name ?? "Admin"}}</h4> -->
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->




                      @yield('content')


















                    </div> <!-- container -->

                </div> <!-- content -->



            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>


<!-- Chart JS -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('dash')}}/assets/js/vendor.min.js"></script>
        <!-- Chart JS -->
        <script src="{{asset('dash')}}/assets/libs/chart-js/Chart.bundle.min.js"></script>
        <script src="{{asset('dash')}}/assets/libs/moment/moment.min.js"></script>
        <script src="{{asset('dash')}}/assets/libs/jquery-scrollto/jquery.scrollTo.min.js"></script>
        <script src="{{asset('dash')}}/assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Chat app -->
        <script src="{{asset('dash')}}/assets/js/pages/jquery.chat.js"></script>
        <!-- Todo app -->
        <script src="{{asset('dash')}}/assets/js/pages/jquery.todo.js"></script>
        <!-- Dashboard init JS -->
        <script src="{{asset('dash')}}/assets/js/pages/dashboard-3.init.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-i+Yu7CmJG/p8FA6Avyg4ZheFvxNjJQ5taj5ArZf94yQt1lWZiVwkXyPrgE/QqbJi" crossorigin="anonymous"></script>

            <!-- Vendor js -->
         <script src="{{asset('dash')}}/assets/js/vendor.min.js"></script>

         <!-- Modal-Effect -->
        <script src="{{asset('dash')}}/assets/libs/custombox/custombox.min.js"></script>
        <!-- App js-->
        <script src="{{asset('dash')}}/assets/js/app.min.js"></script>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
              @yield('script')


    </body>

</html>