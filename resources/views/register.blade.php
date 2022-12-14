<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="Selfcare">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://laravel.pixelstrap.com/viho/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Selfcare</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
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
    <section>         
        <div class="container-fluid p-0"> 
          <div class="row m-0">
            <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="images/login/1.jpg" alt="looginpage"></div>
            <div class="col-xl-5 p-0"> 
              <div class="login-card">
                <form class="theme-form login-form" action="/register" method="post" role="form">
                  <h4>Create your account</h4>
                  <h6>Enter your personal details to create account</h6>
                  <div class="form-group">
                    @csrf
                    <label>Username</label>
                    <div class="small-group">
                      <div class="input-group"><span class="input-group-text"><i class="fa fa-user"></i></i></span>
                        <input class="form-control" type="text" required="" placeholder="your name" name="name">
                      </div>    
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-group"><span class="input-group-text"><i
                        class="fa fa-envelope"></i></span>
                      <input class="form-control" type="email" required="" placeholder="Test@gmail.com" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>NIK</label>
                    <div class="input-group"><span class="input-group-text"><i
                      class="fa-solid fa-id-card"></i></span>
                      <input class="form-control" type="number" required="" placeholder="nik" name="nik">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group"><span class="input-group-text"><i
                        class="fa fa-lock"></i></span>
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                  </div>
                  <p>Already have an account?<a class="ms-2" href="/">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="js/icons/feather-icon/feather.min.js"></script>
    <script src="js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="js/sidebar-menu.js"></script>
    <script src="js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="js/sweet-alert/sweetalert.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="js/script.js"></script>
    <!-- login js-->
    <script src="https://kit.fontawesome.com/ba0c4ed4ca.js" crossorigin="anonymous"></script>
    <!-- Plugin used-->
  </body>
</html>