<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="selfcare>
    <meta name="keywords"
        content="selfcare">
    <meta name="author" content="selfcare">
    <link rel="icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png" type="image/x-icon">
    <title>SelfCare
    </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/whether-icon.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">
    <link id="color" rel="stylesheet" href="https://laravel.pixelstrap.com/viho/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/responsive.css">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        .logo-wrapper img{
            width: 50px;
        }
    </style>
</head>

<body>
    <!-- Loader starts-->
     <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper modern-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper"><a href="https://laravel.pixelstrap.com/viho/dashboard"><img
                                class="img-fluid" src="images/logo/coba.png"
                                alt=""></a></div>
                    <div class="dark-logo-wrapper"><a href="https://laravel.pixelstrap.com/viho/dashboard"><img
                                class="img-fluid"
                                src="https://laravel.pixelstrap.com/viho/assets/images/logo/dark-logo.png" alt=""></a>
                    </div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                            id="sidebar-toggle">
                        </i></div>
                </div>
                <div class="left-menu-header col">
                    <ul>
                        <li>
                            <form class="form-inline search-form">
                                <div class="search-bg"><i class="fa fa-search"></i>
                                    <input class="form-control-plaintext" placeholder="Search here.....">
                                </div>
                            </form>
                            <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                        </li>
                    </ul>
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="onhover-dropdown p-0">
                          <form action="/logout" method="post">
                            @csrf
                            <button class="btn btn-primary-light" type="submit"><i data-feather="log-out"></i>Log
                              out</button>
                          </form>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper modern-sidebar">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                <div class="sidebar-user text-center">
                    <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img
                        class="img-90 rounded-circle"
                        src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/1.png" alt="" />
                    <div class="badge-bottom"><span class="badge badge-primary">Member</span></div>
                    <a href="user-profile">
                        <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
                    </a>
                    <p class="mb-0 font-roboto">{{ Auth::user()->nik }}</p>
                </div>
                <nav>
                    <div class="main-navbar">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                            aria-hidden="false"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Home</h6>
                                    </div>
                                </li>
                                <li class="dropdown" style="margin-bottom: 2px ;">
                                    <a class="nav-link menu-title link-nav" href="/dashboard"><i
                                            data-feather="home"></i><span>Dashboard</span></a>
                                </li>
                                <li class="" style="margin-bottom: 2px ;">
                                    <a class="nav-link menu-title link-nav" href="/tampilandata"><i
                                            data-feather="home"></i><span>Catatan Perjalanan</span></a>
                                </li>
                                <li class="dropdown" style="margin-bottom: 2px ;">
                                    <a class="nav-link menu-title link-nav" href="/datauser"><i
                                            data-feather="edit"></i><span>Data User</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with <i
                                    class="fa fa-heart font-secondary"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->

    <script type="text/javascript">
        // localStorage.clear();
        var div = document.querySelector("div.page-wrapper")
        var b = div.classList.contains('compact-sidebar'); // true;
        if (b) {
            div.classList.remove("compact-sidebar");
        }
        localStorage.setItem('page-wrapper', 'page-wrapper compact-wrapper modern-sidebar');
        localStorage.setItem('page-body-wrapper', 'sidebar-icon');

    </script>

    <script src="https://laravel.pixelstrap.com/viho/assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/sidebar-menu.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/bootstrap/popper.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->

    <script src="https://laravel.pixelstrap.com/viho/assets/js/prism/prism.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/clipboard/clipboard.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/counter/counter-custom.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/custom-card/custom-card.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/general-widget.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/height-equal.js"></script>
    <script src="https://laravel.pixelstrap.com/viho/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/script.js"></script>
    <!-- Plugin used-->
</body>

</html>
