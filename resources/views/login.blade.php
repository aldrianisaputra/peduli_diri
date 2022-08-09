<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="SELFCARE">
	<meta property="og:title" content="SELFCARE">
	<meta property="og:description" content="SELFCARE">
	<meta property="og:image" content="images/logo-selfcare.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>SELFCARE</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
   
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-2">
                                        <img src="images/logo-selfcare.png" width="100" alt="">
                                        <div class="header-logo">
                                            <span class="font-w600 text-black" style="font-size: 25px"><b>SELFCARE</b></span>
                                        </div>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form action="/" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="example@email.com" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>NIK</strong></label>
                                            <input type="number" class="form-control" name="nik" id="nik">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="/register">Sign up</a></p>
                                    </div>
                                    @if(session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                       {{  session('loginError') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
	<script src="js/styleSwitcher.js"></script>
</body>
</html>