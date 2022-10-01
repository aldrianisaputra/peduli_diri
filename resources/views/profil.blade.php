@extends('layout.main')

@section('content')

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
    content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords"
    content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="pixelstrap">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<title>viho - Premium Admin Template</title>
<!-- Google font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
    href="css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
<link
    href="css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
    rel="stylesheet">
<link
    href="css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="css/feather-icon.css">
<!-- Plugins css start-->
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
<link id="color" rel="stylesheet" href="css/color-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<link rel="shortcut icon" type="image/png" href="images/favicon.png">
<!-- Datatable -->
<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- Custom Stylesheet -->
<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<style>
    .userpro-box{
        margin-left: 250px
    }
</style>


<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>ISI DATA</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Isi data</li>

                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">

                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="user-profile">
      <div class="row">
        <!-- user profile header start-->
        <div class="col-sm-12">
          <div class="card profile-header" style="background: #24695c;">
            <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="images/user-profile/bg-profile.jpg" alt=""></div>
            <div class="userpro-box" style="border-radius: 30px;" >
              <div class="img-wrraper">                              
                <div class="avatar"><img
                    class="img-90 rounded-circle"
                    src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/1.png" alt="" />
              </div>
              <div class="user-designation">
                <div class="title"><a target="_blank" href=""> 
                    <h4>{{auth()->user()->name}}</h4>
                    <p>{{auth()->user()->email}}</p ></a></div>
                
                <div class="follow">
                  <ul class="follow-list">
                    <li>
                      <div class="">NIK</div><span>{{auth()->user()->nik}}</span>
                    </li>
                    <li>
                        <div class="">Status</div><span>member</span>
                      </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- user profile header end-->
        
      </div>
    </div>
  </div>


  <!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<!-- Apex Chart -->
<script src="vendor/apexchart/apexchart.js"></script>

<!-- Datatable -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>

<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>

<script src="https://kit.fontawesome.com/ba0c4ed4ca.js" crossorigin="anonymous"></script>
@endsection