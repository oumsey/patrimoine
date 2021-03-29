<! DOCTYPE html>
<html lang ="fr">
<head>
  <meta charset ="UTF-8">
  <meta name ="viewport" content ="width =device-width, initial-scale = 1.0">
  <meta http-equiv ="X-UA-Compatible" content ="ie = edge">
  <title> GESTION DU  PATRIMOINE </title>

  <link rel="shortcut icon" href="assets/images/favicon.ico">
 
    <link href="{{ asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">   
    <link href ="{{asset('plugins/sweet-alert2/sweetalert2.css')}}" rel ="stylesheet" type ="text/css"/> 
    <!-- DataTables -->
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    PATRIMOINE
                    <!-- <img src="images/logo-light.png" class="logo-lg" alt="" height="22">
                    <img src="images/logo-sm.png" class="logo-sm" alt="" height="24"> -->
                </a>
            </div>

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input" type="search" placeholder="Search" />
                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notification-list d-none d-md-inline-block">
                        <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                            <i class="fas fa-search noti-icon"></i>
                        </a>
                    </li>

                    <!-- language-->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="images/flags/us_flag.jpg" class="mr-2" height="12" alt="" /> English <span class="mdi mdi-chevron-down"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                            <a class="dropdown-item" href="#"><img src="images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                            <a class="dropdown-item" href="#"><img src="images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                            <a class="dropdown-item" href="#"><img src="images/flags/russia_flag.jpg" alt="" height="16" /><span> Russian </span></a>
                            <a class="dropdown-item" href="#"><img src="images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                            <a class="dropdown-item" href="#"><img src="images/flags/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                        </div>
                    </li>

                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="fas fa-expand noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-bell noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                        Notifications
                                    </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="images/users/user-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->
        @include('layouts.sidebar')
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                 @yield('content')
            </div>
            <!-- content -->

            <footer class="footer">
                © 2021 Patrimoine <span class="d-none d-sm-inline-block"> - Crée par<i class="mdi mdi-heart text-danger"></i> ZivFinances</span>.
            </footer>

        </div>
         <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/metismenu.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>

    <script src="{{ asset('plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!--Morris Chart
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>-->

    <!--<script src="{{ asset('pages/dashboard.init.js') }}"></script>
    Data table-->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>   
    <!-- Responsive examples -->
    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('pages/datatables.init.js') }}"></script>
     <!-- alertify js -->
     <script src="{{ asset('plugins/alertify/js/alertify.js') }}"></script>
      <!-- sweet-alertif js -->
      <!-- <script src="{{ asset('plugins/notifications/sweet_alert.min.js') }}"></script> -->

    <script type="text/javascript" src="{{ asset('plugins/notifications/pnotify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('pages/components_notifications_pnotify.js') }}"></script>
    <!-- PNotify !-->
    <script src="{{ asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
     <script src="{{ asset('pages/sweet-alert.init.js') }}"></script>  
    <!--  App js -->
     <script src="{{ asset('js/app.js') }}"></script>
    <?php if(!empty(Session::has('success'))):?>
    <script type="text/javascript">        
        // Initialization sample
        $(function () {
            new PNotify({
                title: 'Notification',
                text: '<?=  Session('success'); ?>',
                delay: '8000',
                addclass: 'stack-bottom-right bg-success',
            });
        });
    </script>
<?php endif; ?>
<?php if(!empty($errors_array)):?>
    <script type="text/javascript">
        // Initialization sample
        <?php foreach ($errors_array  as $key => $value):?>
        $(function () {
            new PNotify({
                title: 'Notification',
                text:'<?= $value ; ?>',
                delay: '8000',
                addclass: 'stack-bottom-right bg-danger',
            });
        });
        <?php endforeach; ?>
    </script>
<?php endif; ?>
<script type="text/javascript">
   // alert("MANCI");
$(document).ready(function(){
    
            $("[data-toggle='modal']").click(function(e) {
			/* Prevent Default*/

			e.preventDefault();

			/* Parameters */
			var url = $(this).attr('href');
			var container = "#" + $(this).attr('data-container');

			/* XHR */
			$.get(url).done(function(data) {
				$(container).html(data).modal();

			}).success(function() { $('input:text:visible:first').focus() });

		});
    });
    // function placeFooter() {
    //     if( $(document.body).height() < $(window).height() ) {
    //         $("footer").css({position: "fixed", bottom:"0px"});
    //     } else {
    //         $("footer").css({position: ""});
    //     }
    // }

    // placeFooter();
</script>
</body>
</html>